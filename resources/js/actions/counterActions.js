const increment = () => {
    return {
        type: "INCREMENT"
    }
}

const decrement = () => {
    return {
        type: "DECREMENT"
    }
}

const reset = () => {
    return {
        type: "RESET"
    }
}

const hundred = (data) => ({
    type: "HUNDRED",
    payload: data
  });

export default {
    increment,
    decrement,
    reset,
    hundred
}
