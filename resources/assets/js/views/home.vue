<template>
    <div class="dashboard containerLeft">
        <div class="container">
            <!-- Application Dashboard -->
            <div class="row justify-content-center">
                <div>
                    <p v-if="jiri.is_admin">Vous êtes connectez en tant qu'administrateur</p>
                    <p v-if="!jiri.is_admin">Vous êtes connectez en tant qu'utilisateur</p>
                </div>
            </div>
        </div>
    </div>
</template>