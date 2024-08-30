<script setup>
import { useForm } from '@inertiajs/vue3';


const form = useForm({
    nome: null,
    email: null,
    password: null,
});

const submit = () => {
    form.post(route('users.store'), {
        onSuccess: () => form.reset()
    })
}

</script>

<template>
    <div class="container">


        <form @submit.prevent="submit" method="POST">
            {{ form.nome }}
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Usuário</label>
                <input type="text" id="nome" v-model="form.nome" class="form-control" placeholder="Nome do usuário">
                <div v-if="form.errors.nome">
                    {{ form.errors.nome }}
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" v-model="form.email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <div v-if="form.errors.email">
                    {{ form.errors.email }}
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" v-model="form.password" class="form-control" id="exampleInputPassword1">
                <div v-if="form.errors.password">
                    {{ form.errors.password }}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
