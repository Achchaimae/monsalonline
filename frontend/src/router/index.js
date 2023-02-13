import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import RegisterView from '../views/RegisterView.vue'
import LoginView from '../views/LoginView.vue'
import calendar from '../views/calendarView.vue'
import appointment from '../views/AppointmentsView.vue'
import Time from '../views/TimeView.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'register',
      component : RegisterView
    },
    {
      path: '/login',
      name: 'login',

      component: LoginView 
    },
    {
      path: '/calendar',
      name: 'calendar',

      component: calendar
    },
    {
      path: '/appointment',
      name: 'appointment',

      component: appointment
    },
    {
      path: '/time',
      name: 'time',
      component : Time
    }
    
    
  ]
})

export default router
