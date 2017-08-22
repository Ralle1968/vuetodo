import VueRouter from 'vue-router'

const routes = [
  {
    path:'/',
    component: require("./components/ShowTodos.vue")
  },
  {
    path:'/Form',
    component: require("./components/Form.vue")
  }
];

export default new VueRouter({
  mode: 'history',
  linkActiveClass: 'active',
  routes
})
