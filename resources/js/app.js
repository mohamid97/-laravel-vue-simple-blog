// app.js
import './bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
import {createApp} from 'vue'
import App from './App.vue'
import router from './routes/index'


createApp(App).use(router).mount("#app")
