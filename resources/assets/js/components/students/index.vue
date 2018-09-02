<template>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter task-list">
            <div class="box">
                <h2 class="title">My tasks</h2>
                <hr>

                <div class="card" v-for="student in students">
                    <div class="card-content">
                        <div class="content">
                            <p>
                                {{ student.name }}
                            </p>
                        </div>
                    </div>
                </div>

                <h2 class="blog-post-title">Liste des élèves</h2>
                <ul>
                <li class="card" v-for="student in students">
                    <div class="card-block">
                        <h3 class="card-title">{{student.name}}</h3>
                        <p class="card-text"><strong>Email</strong> : {{student.email}}</p>
                        <!--<a href="{{ url('/students/'.$student->id) }}" class="link">Voir</a>-->
                        </div>
                    </li>
                </ul>
                <a href="/students/restore">restaurer</a>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        directives: {
            'autofocus': {
                inserted(el) {
                    el.focus();
                }
            }
        },

        data() {
            return {
                students: [],
                student: {
                    id: '',
                    name: '',
                    email: '',
                },
            }
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList(archive = null) {

                if (archive === null) {
                    var url = 'current_tasks';
                    this.setActive('current');
                } else {
                    var url = 'archived_tasks';
                    this.setActive('archive');
                }

                axios.get(url).then(result => {
                    this.students = result.data
                });
            },
        }
    }
</script>
