import React, { useState, useEffect } from 'react'
import './button.css'

export default function Button (props) {
  const { button, typeBtn } = props
  const [count, setCount] = useState(0)

  useEffect(() => {
    // Обновляем заголовок документа, используя API браузера
    document.title = `Вы нажали ${count} раз`
  })

  const styleBtnArr = {
    danger: 'red',
    success: 'green',
    primary: 'blue',
    light: 'light'
  }

  return (
    <button onClick={() => setCount(count + 1)} className={styleBtnArr[typeBtn]}>{button} {count}</button>
  )
};
