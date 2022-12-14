// app.js

import {createApp} from 'vue'
import router from './routes/index'
import App from './App.vue'

import './bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'


createApp(App).use(router).mount('#app')
