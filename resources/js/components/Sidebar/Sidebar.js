import React, { Component, useState, useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux'
import { NavLink } from 'react-router-dom'


export default function Sidebar() {
    return (
        <aside className="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" className="brand-link">
                <img src="/images/AdminLTELogo.png" alt="AdminLTE Logo" className="brand-image img-circle elevation-3"
                />
                <span className="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div className="sidebar">
                <div className="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div className="image">
                        <img src="/images/user2-160x160.jpg" className="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div className="info">
                        <a href="#" className="d-block">@k0laedr</a>
                    </div>
                </div>

                <nav className="mt-2">
                    <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li className="nav-item has-treeview menu-open">
                            <a href="#" className="nav-link active">
                                <i className="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                    <i className="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul className="nav nav-treeview">
                                <li className="nav-item">
                                    <NavLink to='/admin/react/product' activeClassName="selected" className="nav-link">
                                        <i className="far fa-circle nav-icon"></i>
                                        <p>Product</p>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to='/admin/react/status' activeClassName="selected"  className="nav-link">
                                        <i className="far fa-circle nav-icon"></i>
                                        <p>Status</p>
                                    </NavLink>
                                </li>
                                <li className="nav-item">
                                    <NavLink to='/admin/react/users' activeClassName="selected"  className="nav-link">
                                        <i className="far fa-circle nav-icon"></i>
                                        <p>Users</p>
                                    </NavLink>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

    )
};


