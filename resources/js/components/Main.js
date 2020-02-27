// import React from 'react';
import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux'
// import ReactDOM from 'react-dom';
import {
    Switch,
    Route
} from 'react-router-dom'
// import Product from './Product/Product';
import ProductList from './Product/ProductList';
import Sidebar from './Sidebar/Sidebar';
import HeaderAdmin from './HeaderAdmin/HeaderAdmin';
import UserList from './Users/UserList';




export default function Main() {
    // const [product, setProduct] = useState([]);
    const [loading, setLoading] = useState(true);
    // const [err, setErro] = useState(1);
    const dispatch = useDispatch();
    // const { fields } = useSelector(state => state.field)

    useEffect(() => {
        getItemList();
    }, []);
    // console.log('main', fields);
    const getItemList = () => {
        // const url = window.location.pathname.split('/').pop();
        fetch('/api/product')
            .then(response => {
                return response.json();
            })
            .then(data => {
                // setNews(url);
                // console.log(data);
                // setProduct(data);
                setLoading(false);
                dispatch({
                    type: "UPDATE_FIELDS",
                    data: data
                });
            })
            .catch(error => {
                // setErro(error);
                console.log('3343', error);
            });
    }


    // console.log(product);
    return (
        <div className="sidebar-mini layout ">
            <HeaderAdmin />
            <Sidebar />
            <div className="content-wrapper">
                <div className="container-fluid row justify-content-center">
                    <h2>{loading ? 'Loading...' : ''}</h2>
                    <Switch>
                        <Route exact path="/admin/react/product">
                            <ProductList />
                        </Route>
                        <Route path="/admin/react/users">
                            <UserList />
                        </Route>
                    </Switch>
                </div>
            </div>
        </div>
    );
}

// <Route path="/status">
//                             <Status />
//                         </Route>
//                         <Route path="/users">
//                             <Users />
//                         </Route>
