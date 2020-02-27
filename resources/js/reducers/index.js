import currentUser from './currentUser'
import counter from './counter'
import field from './field'
import user from './user'
import {combineReducers} from 'redux'

const rootReducer = combineReducers({
    currentUser,
    counter,
    field,
    user
})

export default rootReducer
