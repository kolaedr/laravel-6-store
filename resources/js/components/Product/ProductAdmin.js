import React, { Component, useState, useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux'
// import ReactDOM from 'react-dom';
import './product.css';
// import Button from '../Button/Button';


export default function ProductAdmin() {
    // const { data} = props
    const { fields } = useSelector(state => state.field)
    // const [count, setCount] = useState(0)
    // console.log('prodA', fields)
    // describe.slice(0, 35)
    // const des = describe.split(0, 35)
    return (
        //   <button onClick={() => setCount(count + 1)} className={styleBtnArr[typeBtn]}>{button} {count}</button>
        fields.map(({id, name, price, describe, slug, image}, index)=>{
            return (
                <tr key={index}>
                    <td>{id}</td>
                    <td>{name}</td>
                    <td>{price}</td>
                    <td>{describe.split(' ').slice(0, 10).join(' ')}</td>
                    <td>{slug}</td>
                    <td><img src={`/${image}`} className="images-prod-admin" /></td>
                    <td className="d-inline-flex">
                        <form action={`/api/product/${id}/edit`} method="GET">

                            <button className="btn btn-success"><i className="far fa-edit nav-icon"></i></button>
                        </form>
                        <form action={`/api/product/${id}`} method="POST">
                            <button className="btn btn-danger"><i className="far fa-trash-alt nav-icon"></i></button>
                        </form>
                    </td>
                </tr>)
        })

    )
};


// <td>{describe.split(' ').slice(0, 10).join(' ')}</td>
