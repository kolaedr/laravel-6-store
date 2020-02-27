const initialState = {
    users: [],
};

const user = (state = initialState, action) => {
    switch (action.type) {
        case "GET_USER":
            action.data
            return { ...state, users: [ ...action.data ] };

        default:
            return state;
    }
};

export default user
