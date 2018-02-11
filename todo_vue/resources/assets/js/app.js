
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('task-composer', require('./components/TaskComposer.vue'));
Vue.component('task-log', require('./components/TaskLog.vue'));


const app = new Vue({
    el: '#app',
    data : {
    	tasks : []
    },
    methods : {
    	addTask(task) {
    		// Add to Existing Tasks
    		this.tasks.push(task);
    		// Persist to database
    		axios.post('/tasks', task).then(response => {
    			// Do whatever
    		});
    	},

    	deleteTask(index) {
    		this.tasks.splice(index, 1);
    		console.log(this.tasks);
   //  		axios.get('/task/delete/' + index).then(response => {

			// });
    	}
    },

    created() {
    	axios.get('/tasks').then(response => {
    		this.tasks = response.data;
    	});
    }
});
