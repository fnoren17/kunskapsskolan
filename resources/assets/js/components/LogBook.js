import axios from 'axios'
import React, { Component } from 'react'
import StrategyModal from './StrategyModal'
import EvaluationModal from './EvaluationModal'


class LogBook extends Component {
	constructor (props) {
		super(props)
		this.state = {
			strategies:[],
			showModal: false,
			showEval: false,
			step: 19,
			currentSubject: "",
			path: ""

		}


		this.showModal = this.showModal.bind(this);
		this.closeModal = this.closeModal.bind(this);
		this.closeEval = this.closeEval.bind(this);
		this.pathWriter = this.pathWriter.bind(this)

	}

	componentDidMount () {
		this.pathWriter();
		this.getCurrentStrategies()

	}

	getCurrentStrategies() {
		axios.get('/api/strategies/current/1').then(response => {

			this.setState({
				strategies: response.data['strategies']
			})
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
		})

	}



	pathWriter(){

		//for some fkin reason, this makes the path work, do not change
		if(window.location.pathname.includes("description")) {
			this.setState({
				path:"/prototype/strategies/description/"
			})

		} else {
			this.setState({
				path:"/prototype/strategies/description/"
			})

		}



	}

	hasErrorFor (field) {
		return !!this.state.errors[field]
	}


	render () {
		const {strategies, path} = this.state;

		const strategyItems = Object.keys(strategies).map((index, i) =>
		<div>
			<div class="horizontalItem top"><a
				href={path + strategies[index].title}>
				{strategies[index].title}
			</a></div><br/>
		</div>
			)

		return (

			<div>
				{this.state.showModal ? <StrategyModal closeModal={this.closeModal} subject={this.state.currentSubject} step={this.state.step}/> : null}
				{this.state.showEval ? <EvaluationModal closeEval={this.closeEval} step={this.state.step}/> : null}


				<div style={{position: 'absolute', right: 100, top: 200, maxWidth: 375}}>

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
													<i class="fa fa-angle-left" aria-hidden="true">

													</i></button>
												<button class="btn">
													<i class="fa fa-angle-right" aria-hidden="true">

													</i>
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
												<div class="stepIndicator">19</div>
												<div class="learningGoalTools">

													{/*

													 STRATEGIKNAPP

													 */}

													<div class="align-horizontal">
														<div class="learningGoalText horizontalItem top">Strategier</div>

														{strategyItems}

													</div>
													<div class="btn addOwnGoal" onClick={() => {this.showModal("engelska")}}><i class="fa fa-plus" aria-hidden="true"></i> Lägg till strategi
													</div>
												</div>
												<div class="stepIndicator">19</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Skriva en läslogg</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"><i
														class="fa fa-trash"></i></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="https://ks.kunskapsporten.se/steg/engelska/block4/steg19/uppgifter/skrivaenlaslogg/obestamdartikel.4.4476f2bf13313820a7580005391.html">Obestämd
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
																	href="https://ks.kunskapsporten.se/steg/engelska/block4/steg19/uppgifter/skrivaenlaslogg/attlasaochskriva.4.4476f2bf13313820a7580004223.html">Att
																	läsa och skriva</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal"><i class="fa fa-plus" aria-hidden="true"></i> Eget arbetsmål
													</div>
												</div>
												<br/></div>
											<div class="learningGoalContainer">
												<div class="stepIndicator">19</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Återberätta det du har läst och delta i
														samtal om litteratur med kompisar
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"><i
														class="fa fa-trash"></i></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="https://ks.kunskapsporten.se/steg/engelska/block4/steg19/uppgifter/aterberattadetduharlastochdeltaisamtalomlitteraturmedkompisar/datidregelbundnaochoregelbundnaverb.4.6d285f9512e4dc415c780005799.html">Dåtid
																	- regelbundna och oregelbundna verb</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal"><i class="fa fa-plus" aria-hidden="true"></i> Eget arbetsmål
													</div>
												</div>
												<br/></div>
										</div>
									</div>
									<div class="wp-course-mat openClose open">
										<div class="openHeader"><h5>Matematik</h5></div>
										<div class="openContent">
											<div class="learningGoalContainer">
												<div class="stepIndicator">18</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Läsa av och tolka enkla tabeller och
														diagram samt sortera data i tabeller
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"><i
														class="fa fa-trash"></i></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="https://ks.kunskapsporten.se/steg/matematik/block4/steg18/uppgifter/lasaavochtolkaenklatabellerochdiagramsamtsorteradataitabeller/tabeller.4.6c943aa81553d0da4ecb08e8.html">Tabeller</a>
																</div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal"><i class="fa fa-plus" aria-hidden="true"></i> Eget arbetsmål
													</div>
												</div>
												<br/></div>
											<div class="learningGoalContainer">
												<div class="stepIndicator">18</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Rita ett koordinatsystem, gradera
														koordinataxlarna och placera in punkter med hjälp av dess koordinater
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"><i
														class="fa fa-trash"></i></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="https://ks.kunskapsporten.se/steg/matematik/block4/steg18/uppgifter/ritaettkoordinatsystemgraderakoordinataxlarnaochplacerainpunktermedhjalpavdesskoordinater/koordinatsystem.4.5ef46051556de311029a0f3.html">Koordinatsystem</a>
																</div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal"><i class="fa fa-plus" aria-hidden="true"></i> Eget arbetsmål
													</div>
												</div>
												<br/></div>
											<div class="learningGoalContainer">
												<div class="stepIndicator">18</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Ställa upp en värdetabell för en funktion
														samt rita en graf ur tabellen
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"><i
														class="fa fa-trash"></i></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="https://ks.kunskapsporten.se/steg/matematik/block4/steg18/uppgifter/stallauppenvardetabellforenfunktionsamtritaengrafurtabellen/funktionsladorochvardetabeller.4.7fd424c91540ee0e8bd9c460.html">Funktionslådor
																	och värdetabeller</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal"><i class="fa fa-plus" aria-hidden="true"></i> Eget arbetsmål
													</div>
												</div>
												<br/></div>
											<div class="learningGoalContainer">
												<div class="stepIndicator">17</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Beräkna omkrets hos vissa geometriska
														objekt
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"
																						 title="Ta bort lärandemålet och dess uppgifter"><i
														class="fa fa-trash"></i></a></div>
												</div>
												<div class="learningGoalTasks">
													<div class="taskContainer">
														<div>
															<div class="align-horizontal">
																<div class="horizontalItem top">
																	<div class="checkBox"></div>
																</div>
																<div class="horizontalItem top"><a
																	href="https://ks.kunskapsporten.se/steg/matematik/block4/steg17/uppgifter/beraknaomkretshosvissageometriskaobjekt/omkretsavmanghorningar.4.5ef46051556de3110296f35.html">Omkrets
																	av månghörningar</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal"><i class="fa fa-plus" aria-hidden="true"></i> Eget arbetsmål
													</div>
												</div>
												<br/></div>
											<div class="learningGoalContainer">
												<div class="stepIndicator">17</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Beräkna area hos vissa geometriska objekt
													</div>
													<div class="horizontalItem">&nbsp;<a class="trash" href="#"></a>
														<div class="align-horizontal">
															<div class="horizontalItem top">
																<div class="checkBox"></div>
															</div>
															<div class="horizontalItem top"><a
																href="https://ks.kunskapsporten.se/steg/matematik/block4/steg17/uppgifter/beraknaareahosvissageometriskaobjekt/parallellogrammer1.4.5ef46051556de3110296dd2.html">Parallellogrammer
																1</a></div>
															<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
														</div>
													</div>
												</div>
											</div>
											<div class="learningGoalTools">
												<div class="btn addOwnGoal"><i class="fa fa-plus" aria-hidden="true"></i> Eget arbetsmål
												</div>
											</div>
										</div>

									</div>
									<div class="btn addOwnGoal" onClick={() => {this.showEval()}}><i>+ </i>Utvärdera Strategier
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
