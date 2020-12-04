import Vue from 'vue'

import App from './views/app.vue'
import CardItem from './component/card-item.vue'
import CardContainer from './component/card-container.vue'
import SearchBar from './component/search-bar.vue'
import Loader from './component/loader.vue'

Vue.component('card-item', CardItem)
Vue.component('card-container', CardContainer)
Vue.component('search-bar', SearchBar)
Vue.component('loader', Loader)


const app = new Vue({
    el: '#app',
    components: { 
    	App
    }
});
