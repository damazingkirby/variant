import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../view/HomeView.vue';
import Login from '../view/Login.vue';


export const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component:  Login},
    { path: '/test', component: HomeView }
  ]
});
