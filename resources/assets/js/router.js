import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
	routes: [
		{ path: '/', component: require('./views/customer/index.vue') },
		{ path: '/customer/:id', component: require('./views/customer/show.vue') }
	]
})

export default router