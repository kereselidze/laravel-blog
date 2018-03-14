import {Resource} from "./Resource";
import {apiUrl} from "../common/config";

export class PostResource extends Resource {


    show(post_id: number) {
        return axios.get(apiUrl + '/posts/' + post_id);
    }
}