import './bootstrap';
import {createApp} from 'vue'
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {faFire} from "@fortawesome/free-solid-svg-icons"

import App from './App.vue'
import router from './router'

library.add(faFire)
createApp(App)
.component("font-awesome-icon", FontAwesomeIcon)
.use(router)
.mount("#app")