import React, { Component, useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router } from 'react-router-dom'
import Main from './components/Main';
import {Provider} from 'react-redux';
import {createStore} from 'redux'
import rootReducer from './reducers'


const store = createStore(
    rootReducer,
    window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__());

export default class App extends Component {
    render() {
        return (
            <Router>
                <Main />
            </Router>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Provider store={store}>
                     <App />
                    </Provider>, document.getElementById('example'));
}
