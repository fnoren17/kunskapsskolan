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
      <BrowserRouter>


        <div>
          <Header />
        <div>
            <Route path="/prototype/strategies/description/:id" component={DescriptionBlock}/>

            <LogBook/>
        </div>
        </div>


      </BrowserRouter>
    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'))
