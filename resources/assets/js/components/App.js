import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'
import LogBook from './LogBook'
import DescriptionBlock from './DescriptionBlock'
import StrategyModal from './StrategyModal'


class App extends Component {


    render () {
    return (
        <div>


        <BrowserRouter style={{width:"40%"}}>


        <div>
        <div>
            <LogBook/>

            <Route path="/prototype/strategies/description/:id" component={DescriptionBlock}/>
        </div>
        </div>


      </BrowserRouter>
        </div>
    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'))
