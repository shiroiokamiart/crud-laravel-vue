import { createApp } from 'vue'
import App from './routes/app'
import router from './routes/routes'


const app = createApp(App)
app.use(router)
app.mount('#app');

require('./bootstrap');
