import Home from '../views/home.vue'

import indexEvents from '../views/events/index.vue'
import indexProjects from '../views/projects/index.vue'
import indexUsers from '../views/users/index.vue'
import indexStudents from '../views/students/index.vue'

export default [

    // Home
    {
        path: '/home',
        name: 'home',
        component: Home
    },

    // Events
    {
        path: '/events',
        name: 'indexEvents',
        component: Events
    },

    // Projets
    {
        path: '/projects',
        name: 'indexProjects',
        component: Projects
    },

    // Users
    {
        path: '/users',
        name: 'indexUsers',
        component: Users
    },

    // Students
    {
        path: '/students',
        name: 'indexStudents',
        component: Students
    },

]