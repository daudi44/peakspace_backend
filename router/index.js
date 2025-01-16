import { createRouter, createWebHistory } from 'vue-router';
import App from '../resources/js/App.vue';
import Dashboard from '../resources/views/Dashboard.vue';

const routes = [
  { path: '/', name: 'App', component: App },
  { path: '/dashboard', name: 'Dashboard', component: Dashboard },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
