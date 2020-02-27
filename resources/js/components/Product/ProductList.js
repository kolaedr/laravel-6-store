import React, { Component, useState, useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux'
// import ReactDOM from 'react-dom';
import './product.css';
import Button from '../Button/Button';
import ProductAdmin from './ProductAdmin';

export default function ProductList() {
    // const { data } = props
    // const [data, setData] = useState([1, 2, 3, 4, 5, 6])

    // describe.slice(0, 35)
    // const des = describe.split(0, 35)
    const { fields } = useSelector(state => state.field)
    console.log('list', fields)
    return (
        <table className="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>DESCRIBE</th>
                <th>SLUG</th>
                <th>IMG</th>
                <th>PRODUCT ACTION</th>
            </tr>
        </thead>
        <tbody>

             {<ProductAdmin />}


        </tbody>
    </table>
    )
};


