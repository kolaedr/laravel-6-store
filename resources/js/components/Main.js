// import React from 'react';
import React, { useState, useEffect } from 'react';
// import ReactDOM from 'react-dom';
// import {
//     Switch,
//     Route
//   } from 'react-router-dom'
import Product from './Product/Product';




export default function Main() {
    const [product, setProduct] = useState([]);
    const [loading, setLoading] = useState(true);
    const [err, setErro] = useState(1);

    useEffect(() => {
        getItemList();
    }, []);

    const getItemList = () => {
        // const url = window.location.pathname.split('/').pop();
        fetch('/api/product')
            .then(response => {
                return response.json();
            })
            .then(data => {
                // setNews(url);
                console.log(data.data);
                // setProduct(data);
                setLoading(false);
            })
            .catch(error => {
                setErro(error);
                console.log('3343', error);
            });
    }
    return (
        <div className="container">
        <h2>{loading?'Loading...':''}</h2>
            <div className="row justify-content-center">
            {product.data.map(({ id, name, describe, image, price }, i) => (
                <Product
                    name={name}
                    describe={describe}
                    image={image}
                    price={price}
                    id={id}
                    key={i}
                 />
            ))}

            </div>
        </div>
    );
}



