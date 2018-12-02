import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class EvaluationModal extends Component {
	constructor () {
		super()

		this.state = {
			strategies: []
		}

		this.saveStrategies = this.saveStrategies.bind(this);
		this.closeButton = this.closeButton.bind(this);
		this.setRating = this.setRating.bind(this)

	}

	saveStrategies() {

		const instance = axios.create({
			baseURL: '',

		});

		let i = 0;
		for(i=0; i<this.state.strategies.length; i++){
			if(this.state.strategies[i]['rating'] = null){
				return
			}
		}

		instance.post('/api/strategies/evaluate', {'strategies': this.state.strategies}).then(response=>{
			this.setState({
				strategies: []
			});
			this.props.closeEval();
		});

	}

	closeButton() {
		this.props.closeEval();
	}

	setRating(index,rating) {
		console.log(index, rating);
		let ratedStrategies = this.state.strategies;

		if(ratedStrategies[index]['rating'] == rating){
			ratedStrategies[index]['rating'] = null;
		} else {
			ratedStrategies[index]['rating'] = rating;
		}
		this.setState({
			strategies: ratedStrategies
		});


	}


	getStrategies(){
		const instance = axios.create({
			baseURL: '',

		});


		instance.get('/api/strategies/all').then(response=>{

			let $allStrategies = response.data['strategies'];
			let i = 0;
			for(i=0; i<$allStrategies.length; i++){
				$allStrategies[i]['rating'] = null;
			}


			this.setState({
				strategies: $allStrategies
			});
			console.log(this.state.strategies)


		})


	}

	componentDidMount () {
		this.getStrategies();

	}

	render () {

		const {strategies} = this.state;

		const stratItems = Object.keys(strategies).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<a
						href={"/prototype/strategies/description/" + strategies[index].title}>
						{strategies[index].title}
					</a>

					<br/>
					<button onClick={() => {this.setRating(index, '-1')}} style={strategies[index]['rating'] == '-1' ? {backgroundColor:'green'} : {}} >👎</button>
					<button onClick={() => {this.setRating(index, '1')}} style={strategies[index]['rating'] == '1' ? {backgroundColor:'green'} : {}}>👍</button>
					<button onClick={() => {this.setRating(index, '0')}} style={strategies[index]['rating'] == '0' ? {backgroundColor:'green'} : {}}>Har inte använt</button>
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
								<button style ={{position:"fixed",top:10,right:50}} onClick={this.closeButton}>X</button>

								<h2>Utvärdera Strategier</h2>
								<hr/>
								<label class="kclabel" >Strategier</label>
								<div class="align-horizontal">
									{stratItems}
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


