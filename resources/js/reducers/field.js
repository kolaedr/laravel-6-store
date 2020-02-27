const initialState = {
    fields: [],
};

const field = (state = initialState, action) => {
    switch (action.type) {
        case "UPDATE_FIELDS":
            action.data
            return { ...state, fields: [ ...action.data ] };

        default:
            return state;
    }
};

export default field
