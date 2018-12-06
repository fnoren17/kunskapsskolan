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
			path: ""

		}


		this.showModal = this.showModal.bind(this);
		this.closeModal = this.closeModal.bind(this);
		this.closeEval = this.closeEval.bind(this);

	}

	componentDidMount () {
		this.getCurrentStrategies()

	}

	getCurrentStrategies() {

		axios.defaults.baseURL = '/api';

		axios.get('/strategies/current/engelska/19').then(response => {

			this.setState({
				strategiesEng: response.data['strategies']
			})
		})


		axios.get('/strategies/current/matematik/19').then(response => {

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
				href={path + strategiesEng[index].title}>
				{strategiesEng[index].title}
			</a></div><br/>
		</div>
			)

		const strategyItemsMath = Object.keys(strategiesMath).map((index, i) =>
			<div>
				<div class="horizontalItem top"><a
					href={path + strategiesMath[index].title}>
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
										<div class=""><a href="/steg/engelska/block1.4.48bfff2a135149efc4480005636.html">Block 1</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block1/steg1/introduktion.4.1b2ac75b13ce51521ce2547.html">1</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block1/steg2/introduktion.4.717180d813d4a421d721.html">2</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block1/steg3/introduktion.4.96110c613f76e06392145.html">3</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block1/steg4/introduktion.4.96110c613f76e06392179.html">4</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block1/steg5/introduktion.4.96110c613f76e0639224c.html">5</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a href="/steg/engelska/block2.4.48bfff2a135149efc4480006555.html">Block 2</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block2/steg6/introduktion.4.96110c613f76e06392195.html">6</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block2/steg7/introduktion.4.628467c91428701550f3d18.html">7</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block2/steg8/introduktion.4.96110c613f76e063921bb.html">8</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block2/steg9/introduktion.4.96110c613f76e063921d2.html">9</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block2/steg10/introduktion.4.96110c613f76e0639220d.html">10</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a href="/steg/engelska/block3.4.10fd312e12d506534f780006370.html">Block 3</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block3/steg11/introduktion.4.10fd312e12d506534f780006382.html">11</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block3/steg12/introduktion.4.10fd312e12d506534f780006390.html">12</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block3/steg13/introduktion.4.10fd312e12d506534f780006398.html">13</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block3/steg14/introduktion.4.10fd312e12d506534f780006406.html">14</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block3/steg15/introduktion.4.10fd312e12d506534f780006414.html">15</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class="activePage"><a href="/steg/engelska/block4.4.10fd312e12d506534f780006421.html">Block
											4</a></div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block4/steg16/introduktion.4.10fd312e12d506534f780006428.html">16</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block4/steg17/introduktion.4.10fd312e12d506534f780006436.html">17</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block4/steg18/introduktion.4.10fd312e12d506534f780006444.html">18</a><a></a><a
												class="btn btn-small step-button activePage"
												href="/steg/engelska/block4/steg19/introduktion.4.10fd312e12d506534f780006452.html">19</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block4/steg20/introduktion.4.10fd312e12d506534f780006460.html">20</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a href="/steg/engelska/block5.4.10fd312e12d506534f780006467.html">Block 5</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block5/steg21/introduktion.4.10fd312e12d506534f780006474.html">21</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block5/steg22/introduktion.4.10fd312e12d506534f780006482.html">22</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block5/steg23/introduktion.4.10fd312e12d506534f780006490.html">23</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block5/steg24/introduktion.4.10fd312e12d506534f780006498.html">24</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block5/steg25/introduktion.4.10fd312e12d506534f780006506.html">25</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a href="/steg/engelska/block6.4.10fd312e12d506534f780006513.html">Block 6</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block6/steg26/introduktion.4.10fd312e12d506534f780006520.html">26</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block6/steg27/introduktion.4.10fd312e12d506534f780006528.html">27</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block6/steg28/introduktion.4.10fd312e12d506534f780006536.html">28</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block6/steg29/introduktion.4.10fd312e12d506534f780006544.html">29</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block6/steg30/introduktion.4.10fd312e12d506534f780006552.html">30</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a href="/steg/engelska/block7.4.10fd312e12d506534f780006559.html">Block 7</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block7/steg31/introduktion.4.10fd312e12d506534f780006566.html">31</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block7/steg32/introduktion.4.10fd312e12d506534f780006574.html">32</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block7/steg33/introduktion.4.10fd312e12d506534f780006582.html">33</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block7/steg34/introduktion.4.10fd312e12d506534f780006590.html">34</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block7/steg35/introduktion.4.10fd312e12d506534f780006598.html">35</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a href="/steg/engelska/block8.4.10fd312e12d506534f780006605.html">Block 8</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block8/steg36/introduktion.4.4b945c3c13d7548c3452355.html">36</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block8/steg37/introduktion.4.4ec538b21401583196c3858.html">37</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block8/steg38/introduktion.4.10fd312e12d506534f780006620.html">38</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block8/steg39/introduktion.4.10fd312e12d506534f780006628.html">39</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block8/steg40/introduktion.4.10fd312e12d506534f780006644.html">40</a><a></a>
											</div>
										</div>
									</div>
								</div>
								<div class="horizontalItem top">
									<div class="align-vertical">
										<div class=""><a href="/steg/engelska/block9.4.10fd312e12d506534f780006657.html">Block 9</a>
										</div>
										<div>
											<div class="btn-group"><a class="btn btn-small step-button"
																	  href="/steg/engelska/block9/steg41/introduktion.4.10fd312e12d506534f780006664.html">41</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block9/steg42/introduktion.4.10fd312e12d506534f780006672.html">42</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block9/steg43/introduktion.4.10fd312e12d506534f780006680.html">43</a><a></a><a
												class="btn btn-small step-button"
												href="/steg/engelska/block9/steg44/introduktion.4.10fd312e12d506534f780006688.html">44</a><a></a><a
												class="btn btn-small projectstep-button"
												href="/steg/engelska/block9/steg45/introduktion.4.10fd312e12d506534f780006696.html">45</a><a></a>
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
										href="/steg/engelska/block4/steg19/introduktion.4.10fd312e12d506534f780006452.html">Introduktion</a>
									</li>
									<li class=""><a href="/steg/engelska/block4/steg19/ordbank.4.6d285f9512e4dc415c7800036572.html">Ordbank</a>
									</li>
									<li class=""><a href="/steg/engelska/block4/steg19/arbetsgang.4.1ffcc11915c778fda0a92075.html">Arbetsgång</a>
									</li>
									<li class=""><a
										href="/steg/engelska/block4/steg19/bedomningsmatrisforsteget.4.1ffcc11915c778fda0a920ab.html">Bedömningsmatris
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
												<div class="stepIndicator">19</div>
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
												<div class="stepIndicator">19</div>
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
													<div class="btn addOwnGoal">➕ Eget arbetsmål
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
																	href="https://ks.kunskapsporten.se/steg/engelska/block4/steg19/uppgifter/aterberattadetduharlastochdeltaisamtalomlitteraturmedkompisar/datidregelbundnaochoregelbundnaverb.4.6d285f9512e4dc415c780005799.html">Dåtid
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
													<div class="stepIndicator">18</div>
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

												<div class="stepIndicator">18</div>
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
																<div class="horizontalItem top"><a
																	href="https://ks.kunskapsporten.se/steg/matematik/block4/steg18/uppgifter/lasaavochtolkaenklatabellerochdiagramsamtsorteradataitabeller/tabeller.4.6c943aa81553d0da4ecb08e8.html">Tabeller</a>
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
												<div class="stepIndicator">18</div>
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
																	href="https://ks.kunskapsporten.se/steg/matematik/block4/steg18/uppgifter/ritaettkoordinatsystemgraderakoordinataxlarnaochplacerainpunktermedhjalpavdesskoordinater/koordinatsystem.4.5ef46051556de311029a0f3.html">Koordinatsystem</a>
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
											<div class="learningGoalContainer">
												<div class="stepIndicator">18</div>
												<div class="align-horizontal">
													<div class="learningGoalText horizontalItem top">Ställa upp en värdetabell för en funktion
														samt rita en graf ur tabellen
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
																	href="https://ks.kunskapsporten.se/steg/matematik/block4/steg18/uppgifter/stallauppenvardetabellforenfunktionsamtritaengrafurtabellen/funktionsladorochvardetabeller.4.7fd424c91540ee0e8bd9c460.html">Funktionslådor
																	och värdetabeller</a></div>
																<div class="horizontalItem top taskEdit"><a class="editItem"></a></div>
															</div>
														</div>
													</div>
												</div>
												<div class="learningGoalTools">
													<div class="btn addOwnGoal">➕  Eget arbetsmål
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
