const counter = (state = 1, action) => {
    switch(action.type){
        case "INCREMENT":
            return state + 1
        case "DECREMENT":
            return state - 1
        case "HUNDRED":
            return state + action.payload
        case "RESET":
            return 0
        default:
            return state
    }
}

export default counter
