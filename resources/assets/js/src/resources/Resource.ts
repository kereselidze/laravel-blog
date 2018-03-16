import { Axios } from 'axios'

class Resource extends Axios {
    constructor (...args) {
        super();
        this.defaults.baseURL = '/api/v1/'
    }
    cancelOrder (id) {
        return this.put(`/cancel/order/${id}`)
    }
}