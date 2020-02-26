import React from 'react'
import {
  Switch,
  Route
} from 'react-router-dom'
import About from '../About/About'
import Home from '../Home/Home'
import Contacts from '../Contacts/Contacts'
import './main.css'

export default function Main () {
  return (
    <main>
      <Switch>
        <Route exact path="/home">
          <Home />
        </Route>
        <Route path="/about">
          <About />
        </Route>
        <Route path="/contacts">
          <Contacts />
        </Route>
      </Switch>
    </main>
  )
};