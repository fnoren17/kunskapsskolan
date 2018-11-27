import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class DescriptionBlock extends Component {
	constructor () {
		super()

		this.state = {
			text:""

		}
	}

	getText () {




		axios.get('/api/description/' + this.props.match.params.id).then(response =>{
			console.log(response);
			this.setState({
				title: response.data['text'][0]['title'],
				text: response.data['text'][0]['description']
			})
		})


	}
	componentDidMount () {

		this.getText()
	}

	render () {

		const {text} = this.state;


		return (
			<div style={{width:"40%"}}>
				<h1>{this.state.title}</h1>
				<td dangerouslySetInnerHTML={{__html: text}} />

			</div>


		)
	}
}

export default DescriptionBlock


