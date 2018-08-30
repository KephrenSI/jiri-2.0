
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
Vue.component('navigation', require('./components/Navigation.vue'));

Vue.component('create-event', require('./views/events/create.vue'));
Vue.component('edit-event', require('./views/events/edit.vue'));
Vue.component('index-event', require('./views/events/index.vue'));
Vue.component('show-event', require('./views/events/show.vue'));

Vue.component('evaluate-implementation', require('./views/implementations/evaluate.vue'));
Vue.component('link-implementation', require('./views/implementations/link.vue'));

Vue.component('create-meeting', require('./views/meetings/create.vue'));
Vue.component('edit-meeting', require('./views/meetings/edit.vue'));
Vue.component('index-meeting', require('./views/meetings/index.vue'));
Vue.component('link-meeting', require('./views/meetings/link.vue'));
Vue.component('show-meeting', require('./views/meetings/show.vue'));

Vue.component('create-project', require('./views/projects/create.vue'));
Vue.component('edit-project', require('./views/projects/edit.vue'));
Vue.component('index-project', require('./views/projects/index.vue'));
Vue.component('manage-project', require('./views/projects/manage.vue'));
Vue.component('show-project', require('./views/projects/show.vue'));

Vue.component('create-student', require('./views/students/create.vue'));
Vue.component('edit-student', require('./views/students/edit.vue'));
Vue.component('index-student', require('./views/students/index.vue'));
Vue.component('manage-student', require('./views/students/manage.vue'));
Vue.component('show-student', require('./views/students/show.vue'));
Vue.component('showImplementations-student', require('./views/students/showImplementations.vue'));

Vue.component('create-user', require('./views/users/create.vue'));
Vue.component('edit-user', require('./views/users/edit.vue'));
Vue.component('index-user', require('./views/users/index.vue'));
Vue.component('manage-user', require('./views/users/manage.vue'));
Vue.component('show-user', require('./views/users/show.vue'));

Vue.component('home', require('./views/home.vue'));

const navigation = new Vue({
    el: '#navigation',
});

const home = new Vue({
    el: '#home',
});

const indexStudent = new Vue({
    el: '#index-student',
});
