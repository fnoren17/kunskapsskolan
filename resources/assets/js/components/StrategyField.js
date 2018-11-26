import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class ProjectsList extends Component {
	constructor (props) {
		super()

		this.state = {
			projects: []
		}
	}

	componentDidMount () {
		axios.get('/api/projects').then(response => {
			this.setState({
				projects: response.data
			})
		})
	}

	render () {
		const { projects } = this.state

		return (
			<div></div>
		)
	}
}

export default ProjectsList
