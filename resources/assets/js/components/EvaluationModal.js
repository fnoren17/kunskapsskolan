import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class EvaluationModal extends Component {
	constructor () {
		super()

		this.state = {
			strategiesEng: [],
			strategiesMath: [],
			bookmarked:[],
			hasStrats:null

		}

		this.saveStrategies = this.saveStrategies.bind(this);
		this.closeButton = this.closeButton.bind(this);
		this.setRating = this.setRating.bind(this)
	}
	saveStrategies() {
		let i = 0;

		let strategies = this.state.strategiesMath;

		for(i=0; i<this.state.strategiesEng.length; i++) {
			strategies.push(this.state.strategiesEng[i]);
		}


		for(i=0; i<strategies.length; i++){

			if(strategies[i]['rating'] == null){
				return
			}
		}

		axios.defaults.baseURL = '/api/';

		axios.post('strategies/save', {'strategies': this.state.bookmarked}).then(response=>{
			this.setState({
				bookmarked: []
			});
		});

		axios.post('evaluate', {'strategies': strategies}).then(response=>{
			this.setState({
				strategiesEng: [],
				strategiesMath: []
			});
			this.props.closeEval();
		});



	}

	closeButton() {
		this.props.closeEval();
	}

	setRating(index,rating, subject) {

		if(subject == 'eng'){

			let ratedStrategies = this.state.strategiesEng;
			if(ratedStrategies[index]['rating'] == rating){
				ratedStrategies[index]['rating'] = null;
			} else {
				ratedStrategies[index]['rating'] = rating;
			}

			this.setState({
				strategiesEng: ratedStrategies
			});
		}

		if(subject == 'math'){

			let ratedStrategies = this.state.strategiesMath;
			if(ratedStrategies[index]['rating'] == rating){
				ratedStrategies[index]['rating'] = null;
			} else {
				ratedStrategies[index]['rating'] = rating;
			}

			this.setState({
				strategiesMath: ratedStrategies
			});
		}

	}
	bookmark(strategy){
		let bookmarks = this.state.bookmarked;
		if(bookmarks.includes(strategy)){
			bookmarks.splice(bookmarks.indexOf(strategy),1)
		} else{

			bookmarks.push(strategy);
		}

		this.setState({
			bookmarked:bookmarks
		})
	}
	getStrategies(){
		const instance = axios.create({
			baseURL: '',

		});


		instance.get('/api/strategies/all').then(response=>{

			let allStrategies = response.data['strategies'];
			let i = 0;

			let eng =[];
			let math =[];


			for(i=0; i<allStrategies.length; i++){
				allStrategies[i]['rating'] = null;
				if(allStrategies[i]['subject'] == 'Matematik') {
					math.push(allStrategies[i])
				}
				if(allStrategies[i]['subject'] == 'Engelska') {
					eng.push(allStrategies[i])
				}
			}
			let stratExists = true;
			if (eng.length<1 && math.length<1){
				stratExists = false
			}


			this.setState({
				strategiesEng: eng,
				strategiesMath: math,
				hasStrats:stratExists
			});


		})


	}


	componentDidMount () {
		this.getStrategies();

	}

	render () {

		const {strategiesEng, strategiesMath} = this.state;

		const stratItemsEng = Object.keys(strategiesEng).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<a
						href={"/prototype/strategies/description/" + strategiesEng[index].title}>
						{strategiesEng[index].title}
					</a>
					<button onClick={() => this.bookmark(strategiesEng[index].title)} style={this.state.bookmarked.includes(strategiesEng[index].title) ? {backgroundColor:"#3dbca2",borderRadius:5, margin: 5}: {borderRadius:5, margin: 5}}>Bokmärk</button>

					<br/>
					<button onClick={() => {this.setRating(index, '-1', 'eng')}} style={strategiesEng[index]['rating'] == '-1' ? {backgroundColor:"#3dbca2",borderRadius:5, margin: 3}: {borderRadius:5, margin: 3}} >👎</button>
					<button onClick={() => {this.setRating(index, '1', 'eng')}} style={strategiesEng[index]['rating'] == '1' ? {backgroundColor:"#3dbca2",borderRadius:5, margin: 3}: {borderRadius:5, margin: 3}}>👍</button>
					<button onClick={() => {this.setRating(index, '0', 'eng')}} style={strategiesEng[index]['rating'] == '0' ? {backgroundColor:"#3dbca2",borderRadius:5, margin: 3}: {borderRadius:5, margin: 3}}>Har inte använt</button>
					</div><br/>
			</div>
		)
		const stratItemsMath = Object.keys(strategiesMath).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<a
						href={"/prototype/strategies/description/" + strategiesMath[index].title}>
						{strategiesMath[index].title}
					</a>
					<button onClick={() => this.bookmark(strategiesMath[index].title)} style={this.state.bookmarked.includes(strategiesMath[index].title) ? {backgroundColor:"#3dbca2",borderRadius:5, margin: 5}: {borderRadius:5, margin: 5}}>Bokmärk</button>
					<br/>
					<button onClick={() => {this.setRating(index, '-1', 'math')}} style={strategiesMath[index]['rating'] == '-1' ?  {backgroundColor:"#3dbca2",borderRadius:5, margin: 3}: {borderRadius:5, margin: 3}} >👎</button>
					<button onClick={() => {this.setRating(index, '1', 'math')}} style={strategiesMath[index]['rating'] == '1' ? {backgroundColor:"#3dbca2",borderRadius:5, margin: 3}: {borderRadius:5, margin: 3}}>👍</button>
					<button onClick={() => {this.setRating(index, '0', 'math')}} style={strategiesMath[index]['rating'] == '0' ? {backgroundColor:"#3dbca2",borderRadius:5, margin: 3}: {borderRadius:5, margin: 3}}>Har inte använt</button>
				</div><br/>
			</div>
		)

		return (
			<div>
				<div class="darken"></div>
				<div style={{position:"fixed", top: "50%", left: "50%", transform: "translate(-50%, -50%)", width: 400}}>
					<div class="modal-page" aria-disabled="false">
						<div>
							<div class="sv-html-portlet sv-portlet sv-skip-spacer">
								<button style ={{position:"fixed",top:10,right:50, borderRadius:5}} onClick={this.closeButton}>X</button>

								<h2>Utvärdera Strategier</h2>
								<hr/>
								{this.state.hasStrats ? null:<p>Det finns inga strategier att utvärdera</p> }
								{strategiesEng.length>0 ? <label class="kclabel" >Engelska</label>:null}
								<div class="align-horizontal">
									{stratItemsEng}
								</div>
								{stratItemsMath.length>0 ? <label class="kclabel" >Matematik</label>:null}
								<div class="align-horizontal">
									{stratItemsMath}
								</div>
							</div>
							<div class="sv-html-portlet sv-portlet"><button tabindex="1" class="btn btn-large btn-default" onClick={this.saveStrategies}>Spara</button></div>
						</div>
						<div class="stopFloats"></div>
					</div>
				</div>
			</div>

		)
	}
}

export default EvaluationModal


