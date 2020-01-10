import Vue from 'vue'
import Router from 'vue-router'
import Home from '../assets/js/home/Index.vue'
import Login from '../assets/js/home/Login.vue'
import IndexCategory from '../assets/js/admin/category/Index.vue'
import DataCategory from '../assets/js/admin/category/Category.vue'
import AddCategory from '../assets/js/admin/category/Add.vue'
import EditCategory from '../assets/js/admin/category/Edit.vue'
import store from './store.js'

Vue.use(Router)

//DEFINE ROUTE
const router = new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: { requiresAuth: true }
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/category',
            component: IndexCategory,
            children: [
                {
                    path: '',
                    name: 'category.data',
                    component: DataCategory,
                    meta: { title: 'Manage Food Category'}
                },
                {
                    path: 'add',
                    name: 'category.add',
                    component: AddCategory,
                    meta: { title: 'Add Food Category'}
                },            
                {
                    path: 'edit/:id',
                    name: 'category.edit',
                    component: EditCategory,
                    meta: { title: 'Edit Food Category'}
                },            
            ]
        }
    ]
});

//Navigation Guards
router.beforeEach((to, from, next) => {
    store.commit('CLEAR_ERRORS')
    if (to.matched.some(record => record.meta.requiresAuth)) {
        let auth = store.getters.isAuth
        if (!auth) {
            next({ name: 'login' })
        } else {
            next()
        }
    } else {
        next()
    }
})

export default router