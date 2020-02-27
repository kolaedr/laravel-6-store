import React, { Component, useState, useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux'

// import ReactDOM from 'react-dom';
// import './product.css';
import Button from '../Button/Button';
import UserAdmin from './UserAdmin';

export default function UserList() {
    const [loading, setLoading] = useState(true);
    const dispatch = useDispatch();
    useEffect(() => {
        fetch('/api/users')
            .then(response => {
                return response.json();
            })
            .then(data => {
                // setNews(url);
                console.log(data);
                // setProduct(data);
                setLoading(false);
                dispatch({
                    type: "GET_USER",
                    data: data
                });
            })
            .catch(error => {
                // setErro(error);
                console.log('3343', error);
            });
    }, []);

    return (
        <div className="content-wrapper">
            <div className="container-fluid row justify-content-center">
                <h2>{loading ? 'Loading...' : ''}</h2>
                <table className="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>

                        </tr>
                    </thead>
                    <tbody>
                        {<UserAdmin />}
                    </tbody>
                </table>
            </div>
        </div>

    )
};


