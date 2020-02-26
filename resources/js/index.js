import React, { Component, useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import Main from './components/Main';


export default class App extends Component {
    render() {
        return (
            <Main />
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<App />, document.getElementById('example'));
}
