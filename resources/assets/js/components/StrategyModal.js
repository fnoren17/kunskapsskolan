import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class StrategyModal extends Component {
	constructor () {
		super()

		this.state = {
			regularStrategies: [],
			savedStrategies: [],
			histStrategies: [],
			weeklyStrategies:[],
			chosenSavedStrategies: [],
			chosenRegularStrategies:[],
			chosenHistStrategies: [],
			chosenWeekly: [],
			path:"",
			showHist: false,
			showSaved: false


		}

		this.saveStrategies = this.saveStrategies.bind(this)
		this.closeButton = this.closeButton.bind(this)
		this.toggleHist = this.toggleHist.bind(this)
		this.toggleSaved= this.toggleSaved.bind(this)


	}

	saveStrategies() {

		axios.defaults.baseURL = '/api/';



		axios.post('strategies/' + this.props.subject + "/" + this.props.step, {'strategies':this.state.chosenSavedStrategies.concat(this.state.chosenRegularStrategies.concat(this.state.chosenHistStrategies.concat(this.state.chosenWeekly)))}).then(response=>{
			this.setState({
				chosenSavedStrategies:[],
				chosenRegularStrategies:[],
				chosenHistStrategies: [],

			});
			this.props.closeModal();
		});

	}

	toggleHist() {
		let hist = this.state.showHist;
		hist = !hist;
		this.setState({
			showHist: hist
		})
	}
	toggleSaved() {
		let saved = this.state.showSaved;
		saved = !saved;
		this.setState({
			showSaved: saved
		})

	}

	closeButton() {
		this.setState({
			chosenSavedStrategies:[],
			chosenRegularStrategies:[],
			chosenHistStrategies: [],

		});
		this.props.closeModal();

	}
	pathWriter(){

		//for some fkin reason, this makes the path work, do not change
		if(window.location.pathname.includes("description")) {
			this.setState({
				path:""
			})

		} else {
			this.setState({
				path:""
			})

		}



	}


	getStrategies() {
		axios.get(this.state.path + 'strategies/' + this.props.subject + "/" + this.props.step).then(response => {

			let strategies =[];
			let i;
			let temp;

			for(i = 0; i<response.data['strategies'].length; i++){
				temp = response.data['strategies'][i];
				temp['checked'] = false;
				strategies.push(temp)
			}
			this.setState({
				regularStrategies: strategies
			})


		});


		axios.get(this.state.path + 'strategies/saved/' + this.props.subject).then(response =>{
			let strategies =[];
			let i;
			let temp;
			for(i = 0; i<response.data['strategies'].length; i++){
				temp = response.data['strategies'][i];
				temp['checked'] = false;
				strategies.push(temp)
			}
			this.setState({
				savedStrategies: strategies
			});
			console.log(this.state.savedStrategies)
		});
		axios.get(this.state.path + 'strategies/historical/' + this.props.subject).then(response =>{
			let strategies =[];
			let i;
			let temp;
			for(i = 0; i<response.data['strategies'].length; i++){
				temp = response.data['strategies'][i];
				temp['checked'] = false;
				strategies.push(temp)
			}

			this.setState({
				histStrategies: strategies
			})

		});

		axios.get(this.state.path + 'strategies/weekly/' + this.props.subject + "/" + this.props.step).then(response =>{
			let strategies =[];
			let i;
			let temp;
			for(i = 0; i<response.data['strategies'].length; i++){
				temp = response.data['strategies'][i];
				temp['checked'] = false;
				strategies.push(temp)
			}

			this.setState({
				weeklyStrategies: strategies
			})

		});
	}

	addSavedStrategy(strategy) {

		let temp = this.state.chosenSavedStrategies;
		if (temp.includes(strategy)){
			let i;
			for(i = 0; i<temp.length; i++){
				if(temp[i] == strategy){
					temp.splice(i,1)
				}
			}
		}
		else{
			temp.push(strategy)
		}


		this.setState({
			chosenSavedStrategies: temp
		})

	}
	addHistStrategy(strategy) {

		let temp = this.state.chosenHistStrategies;
		if (temp.includes(strategy)){
			let i;
			for(i = 0; i<temp.length; i++){
				if(temp[i] == strategy){
					temp.splice(i,1)
				}
			}
		}
		else{
			temp.push(strategy)
		}


		this.setState({
			chosenHistStrategies: temp
		})

	}
	addRegularStrategy(strategy) {

		let temp = this.state.chosenRegularStrategies;
		if (temp.includes(strategy)){
			let i;
			for(i = 0; i<temp.length; i++){
				if(temp[i] == strategy){
					temp.splice(i,1)
				}
			}
		}
		else{
			temp.push(strategy)
		}

		this.setState({
			chosenRegularStrategies: temp
		})


	}
	addWeeklyStrategy(strategy) {
		let temp = this.state.chosenWeekly;
		if (temp.includes(strategy)){
			let i;
			for(i = 0; i<temp.length; i++){
				if(temp[i] == strategy){
					temp.splice(i,1)
				}
			}
		}
		else{
			temp.push(strategy)
		}

		this.setState({
			chosenWeekly: temp
		})


	}


	componentDidMount () {
		this.getStrategies();
	}

	render () {

		const {regularStrategies, savedStrategies, histStrategies, weeklyStrategies} = this.state;

		const regularStratItems = Object.keys(regularStrategies).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<input type="checkbox" onChange={() => {this.addRegularStrategy(regularStrategies[index].title)}}/>
					<a
					href={"/prototype/strategies/description/" + regularStrategies[index].title}>
						{regularStrategies[index].title}
				</a>{index == 0 ? '⭐':null}</div><br/>
			</div>
		)
		const weeklyStratItems = Object.keys(weeklyStrategies).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<input type="checkbox" onChange={() => {this.addWeeklyStrategy(weeklyStrategies[index].title)}}/>
					<a
						href={"/prototype/strategies/description/" + weeklyStrategies[index].title}>
						{weeklyStrategies[index].title}
					</a></div><br/>
			</div>
		)
		const savedStratItems = Object.keys(savedStrategies).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<input type="checkbox" onChange={() => {this.addSavedStrategy(savedStrategies[index].title)}}/>
					<a
					href={"/strategies/" + savedStrategies[index].title}>
					{savedStrategies[index].title}
				</a></div><br/>
			</div>
		)
		const histStratItems = Object.keys(histStrategies).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<input type="checkbox" onChange={() => {this.addHistStrategy(histStrategies[index].title)}}/>
					<a
						href={"/strategies/" + histStrategies[index].title}>
						{histStrategies[index].title}
					</a></div><br/>
			</div>
		)

		return (
			<div>
				<div class="darken"></div>
				<div style={{position:"fixed", top: "50%", left: "50%", transform: "translate(-50%, -50%)", width: 400, height: "80%"}}>
					<div class="modal-page" aria-disabled="false">
						<div>
							<div class="sv-html-portlet sv-portlet sv-skip-spacer">
								<button style ={{position:"fixed",top:10,right:70, borderRadius:5}} onClick={this.closeButton}>X</button>

								<h2>Välj Strategier</h2>
								<hr/>
									<label class="kclabel" >Strategier</label>
									<div class="align-horizontal">
										{regularStratItems}
									</div>
									<label class="kclabel" >Veckans Strategi</label>
									<div class="align-horizontal">
										{weeklyStratItems}
									</div>
									<label class="kclabel">Bokmärkta Strategier<button onClick={this.toggleSaved} style={{borderRadius: 5, margin: 5}}>{this.state.showSaved ? '-':'+'}</button></label>
									<div class="align-horizontal">
										{this.state.showSaved ? savedStratItems:null }
									</div>
								<label class="kclabel">Historik <button onClick={this.toggleHist} style={{borderRadius: 5, margin: 5}}>{this.state.showHist ? '-':'+'}</button></label>
								<div class="align-horizontal">
									{this.state.showHist ? histStratItems:null }
								</div>


							</div>
							<div class="sv-html-portlet sv-portlet"><button tabindex="1" class="btn btn-large btn-default" onClick={this.saveStrategies} >Spara</button></div>
						</div>
						<div class="stopFloats"></div>
					</div>
				</div>
			</div>

		)
	}
}

export default StrategyModal


