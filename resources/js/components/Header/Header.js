import React from 'react'
import { NavLink } from 'react-router-dom'
import './header.css'

export default function Header () {
  return (
    <header>
      <nav>
        <ul>
          <li><NavLink to='/home' activeClassName='selected'>Home</NavLink></li>
          <li><NavLink to='/about' activeClassName='selected'>About</NavLink></li>
          <li><NavLink to='/contacts' activeClassName='selected'>Contacts</NavLink></li>
        </ul>
      </nav>
    </header>
  )
};