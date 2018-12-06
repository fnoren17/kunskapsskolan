import axios from 'axios'
import React, { Component } from 'react'
import StrategyModal from './StrategyModal'
import EvaluationModal from './EvaluationModal'


class LogBook extends Component {
	constructor (props) {
		super(props)
		this.state = {
			strategiesMath:[],
			strategiesEng:[],
			showModal: false,
			showEval: false,
			step: 19,
			currentSubject: "",
			path: "",
			tmp: "activePage"
		}


		this.showModal = this.showModal.bind(this);
		this.closeModal = this.closeModal.bind(this);
		this.closeEval = this.closeEval.bind(this);

	}

	componentDidMount () {
		this.getCurrentStrategies()

	}

	setStep(newStep){
		this.setState({
			step: newStep

		})
		this.getCurrentStrategies();


	}
	getCurrentStrategies() {

		axios.defaults.baseURL = '/api';

		axios.get('/strategies/current/engelska/' + this.state.step).then(response => {

			this.setState({
				strategiesEng: response.data['strategies']
			})
		})


		axios.get('/strategies/current/matematik/' + this.state.step).then(response => {

			this.setState({
				strategiesMath: response.data['strategies']
			});
			this.forceUpdate()

		})
	}
	showModal(subject) {

		this.setState({
			showModal: true,
			currentSubject: subject
		})
	}

	closeModal() {
		this.getCurrentStrategies();
		this.setState({
			showModal:false
		})
	}

	showEval(){
		this.setState({
			showEval: true,
		})
	}

	closeEval() {
		this.getCurrentStrategies();
		this.setState({
			showEval:false
		});
	}







	hasErrorFor (field) {
		return !!this.state.errors[field]
	}


	render () {
		const {strategiesEng,strategiesMath, path} = this.state;

		const strategyItemsEnglish = Object.keys(strategiesEng).map((index, i) =>
		<div>
			<div class="horizontalItem top"><a
				href={strategiesEng[index].title}>
				{strategiesEng[index].title}
			</a></div><br/>
		</div>
			)

		const strategyItemsMath = Object.keys(strategiesMath).map((index, i) =>
			<div>
				<div class="horizontalItem top"><a
					href={strategiesMath[index].title}>
					{strategiesMath[index].title}
				</a></div><br/>
			</div>
		)

		return (


			<div>

				<div class="pageHeader" style={{marginTop:"3em"}}>
					<h1>Prototyp</h1>

					<div class="buttonsField">

						<div class="buttonsContainer">

							<div class="align-horizontal">
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a>Block 1</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 1 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(1)}>
																	  1</a><a></a><a
												class={this.state.step == 2 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(2)}>
												2</a><a></a><a
												class={this.state.step == 3 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(3)}>
												3</a><a></a><a
												class={this.state.step == 4 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(4)}>
												4</a><a></a><a
												class={this.state.step == 5 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(5)}>
												5</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a>Block 2</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 6 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(6)}>
																	  6</a><a></a><a
												class={this.state.step == 7 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(7)}>
												7</a><a></a><a
												class={this.state.step == 8 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(8)}>
												8</a><a></a><a
												class={this. state.step == 9 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(9)}>
												9</a><a></a><a
												class={this.state.step == 10 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(10)}>
												10</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a>Block 3</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 11 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(11)}>
																	  11</a><a></a><a
												class={this.state.step == 12 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(12)}>
												12</a><a></a><a
												class={this.state.step == 13 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(13)}>
												13</a><a></a><a
												class={this.state.step == 14 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(14)}>
												14</a><a></a><a
												class={this.state.step == 15 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(15)}>
												15</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class="activePage"><a>Block 4</a></div>
										<div>
											<div class="btn-group"><a class={this.state.step == 16 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(16)}>
																	  16</a><a></a><a
												class={this.state.step == 17 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(17)}>
												17</a><a></a><a
												class={this.state.step == 18 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(18)}>
												18</a><a></a><a
												class={this.state.step == 19 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(19)}>
												19</a><a></a><a
												class={this.state.step == 20 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(20)}>
												20</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a>Block 5</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 21 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(21)}>
																	  21</a><a></a><a
												class={this.state.step == 22 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(22)}>
												22</a><a></a><a
												class={this.state.step == 23 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(23)}>
												23</a><a></a><a
												class={this.state.step == 24 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(24)}>
												24</a><a></a><a
												class={this.state.step == 25 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(25)}>

											25</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a>Block 6</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 26 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(26)}>
																	  26</a><a></a><a
												class={this.state.step == 27 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(27)}>
												27</a><a></a><a
												class={this.state.step == 28 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(28)}>
												28</a><a></a><a
												class={this.state.step == 29 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(29)}>
												29</a><a></a><a
												class={this.state.step == 30 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(30)}>
												30</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a >Block 7</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 31 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(31)}>
																	  31</a><a></a><a
												class={this.state.step == 32 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(32)}>
												32</a><a></a><a
												class={this.state.step == 33 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(33)}>
												33</a><a></a><a
												class={this.state.step == 34 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(34)}>
												34</a><a></a><a
												class={this.state.step == 35 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(35)}>

											35</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a>Block 8</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 36 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(36)}>
																	  36</a><a></a><a
												class={this.state.step == 37 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(37)}>
												37</a><a></a><a
												class={this.state.step == 38 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(38)}>
												38</a><a></a><a
												class={this.state.step == 39 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(39)}>
												39</a><a></a><a
												class={this.state.step == 40 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(40)}>

											40</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a>Block 9</a>
										</div>
										<div>
											<div class="btn-group"><a class={this.state.step == 41 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(41)}>
																	  41</a><a></a><a
												class={this.state.step == 42 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(42)}>
												42</a><a></a><a
												class={this.state.step == 43 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(43)}>
												43</a><a></a><a
												class={this.state.step == 44 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(44)}>
												44</a><a></a><a
												class={this.state.step == 45 ? "btn btn-small step-button activePage": "btn btn-small step-button"} onClick={() => this.setStep(45)}>
												45</a><a></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<a>
							</a>
							<div class="horizontalMenu"><a></a>
								<ul><a></a>
									<li class=""><a></a><a
										>Introduktion</a>
									</li>
									<li class=""><a>Ordbank</a>
									</li>
									<li class=""><a>Arbetsgång</a>
									</li>
									<li class=""><a
										>Bedömningsmatris
										för steget</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>


				{this.state.showModal ? <StrategyModal closeModal={this.closeModal} subject={this.state.currentSubject} step={this.state.step}/> : null}
				{this.state.showEval ? <EvaluationModal closeEval={this.closeEval} step={this.state.step}/> : null}


				<div style={{position: 'absolute', right: 100 ,maxWidth: 375}}>

			<div class="learningGoalTasks">
				<div class="taskContainer">
					<div>

						<div class="ked-weekplanner">
							<div>
								<div class="ked_boxed weekPlanner currentWeek">
									<div class="weekSelect">
										<div class="horizontalItem">
											<p>Vecka 46</p>
										</div>
										<div class="horizontalItem">
											<div class="btn-group">
												<button class="btn">
													{"<"}

													</button>
												<button class="btn">
													{">"}
												</button>
											</div>
										</div>
									</div>
									<h4>Loggbok</h4>
									<hr/>


									<div class="wp-course-eng openClose open">
										<div class="openHeader"><h5>Engelska</h5></div>
										<div class="openContent">
											<div class="learningGoalContainer">
												<div class="stepIndicator">{this.state.step}</div>
												<div class="learningGoalTools">

													{/*

													 STRATEGIKNAPP

													 */}

													<div class="align-horizontal">
														<div class="learningGoalText horizontalItem top">Strategier</div>

														{strategyItemsEnglish}

													</div>
													<div class="btn addOwnGoal" onClick={() => {this.showModal("engelska")}}>➕ Lägg till strategi
													</div>
												</div>
												<div class="stepIndicator">{this.state.step}</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Skriva en läslogg</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter">

													</a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="/prototype">Obestämd
																	artikel</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="/prototype">Att
																	läsa och skriva</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal">➕ Eget arbetsmål
													</div>
												</div>
												<br/></div>
											<div class="learningGoalContainer">
												<div class="stepIndicator">{this.state.step}</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Återberätta det du har läst och delta i
														samtal om litteratur med kompisar
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter">

													</a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="/prototype">Dåtid
																	- regelbundna och oregelbundna verb</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal">➕ Eget arbetsmål
													</div>
												</div>
												<br/></div>
										</div>
									</div>
									<div class="wp-course-mat openClose open">
										<div class="openHeader"><h5>Matematik</h5></div>
										<div class="openContent">
											<div class="learningGoalContainer">

												<div class="learningGoalTools">
													<div class="stepIndicator">{this.state.step}</div>
													<div class="learningGoalTools">

													{/*

													 STRATEGIKNAPP

													 */}

													<div class="align-horizontal">
														<div class="learningGoalText horizontalItem top">Strategier</div>

														{strategyItemsMath}

													</div>
													<div class="btn addOwnGoal" onClick={() => {this.showModal("matematik")}}>➕ Lägg till strategi
													</div>
													</div>
												</div>

												<div class="stepIndicator">{this.state.step}</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Läsa av och tolka enkla tabeller och
														diagram samt sortera data i tabeller
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a href="/prototype"
																	>Tabeller</a>
																</div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal"> Eget arbetsmål
													</div>
												</div>
												<br/></div>
											<div class="learningGoalContainer">
												<div class="stepIndicator">{this.state.step}</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Rita ett koordinatsystem, gradera
														koordinataxlarna och placera in punkter med hjälp av dess koordinater
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="/prototype" >Koordinatsystem</a>
																</div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal">➕ Eget arbetsmål
													</div>
												</div>
												<br/></div>

									</div>

									</div>
									<div class="btn addOwnGoal" onClick={() => {this.showEval()}}>➕ Utvärdera Strategier
									</div>

								</div>

								<br/></div>
						</div>
					</div>

					<hr/>


				</div>
			</div>
				</div>
			</div>
		)
	}
}

export default LogBook
