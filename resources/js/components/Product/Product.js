import React, { Component, useState, useEffect } from 'react';
// import ReactDOM from 'react-dom';
import './product.css';
import Button from '../Button/Button';


export default function Product(props) {
    const { id, name, describe, image, price, i } = props
    // const [count, setCount] = useState(0)

    // describe.slice(0, 35)
    const des = describe.split(0, 35)
    return (
        //   <button onClick={() => setCount(count + 1)} className={styleBtnArr[typeBtn]}>{button} {count}</button>
        <div className="col-md-4" key={i} >
            <img src={image} className="images-prod" />
            <h3>{name}</h3>
            <span>{price}</span>
            <p>{describe.split(' ').slice(0, 10).join(' ')}</p>
            <Button button='Add to cart' typeBtn='light' />
        </div>

    )
};
