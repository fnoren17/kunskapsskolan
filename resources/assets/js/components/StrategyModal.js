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
			chosenSavedStrategies: [],
			chosenRegularStrategies:[],
			chosenHistStrategies: [],
			path:""

		}

		this.saveStrategies = this.saveStrategies.bind(this)
		this.closeButton = this.closeButton.bind(this)

	}

	saveStrategies() {

		axios.defaults.baseURL = '/api/';



		axios.post('strategies/' + this.props.subject + "/" + this.props.step, {'strategies':this.state.chosenSavedStrategies.concat(this.state.chosenRegularStrategies.concat(this.state.chosenHistStrategies))}).then(response=>{
			this.setState({
				chosenSavedStrategies:[],
				chosenRegularStrategies:[],
				chosenHistStrategies: [],

			});
			this.props.closeModal();
		});

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
			})
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


	componentDidMount () {
		this.getStrategies();
	}

	render () {

		const {regularStrategies, savedStrategies, histStrategies} = this.state;

		const regularStratItems = Object.keys(regularStrategies).map((index, i) =>
			<div>
				<div class="horizontalItem top">
					<input type="checkbox" onChange={() => {this.addRegularStrategy(regularStrategies[index].title)}}/>
					<a
					href={"/prototype/strategies/description/" + regularStrategies[index].title}>
						{regularStrategies[index].title}{index == 0 ? '⭐':null}
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
								<button style ={{position:"fixed",top:10,right:70}} onClick={this.closeButton}>X</button>

								<h2>Välj Strategier</h2>
								<hr/>
									<label class="kclabel" >Strategier</label>
									<div class="align-horizontal">
										{regularStratItems}
									</div>
									<label class="kclabel">Bokmärkta Strategier</label>
									<div class="align-horizontal">
										{savedStratItems}
									</div>
								<label class="kclabel">Historik</label>
								<div class="align-horizontal">
									{histStratItems}
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

export default StrategyModal


