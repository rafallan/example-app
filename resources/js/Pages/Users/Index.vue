<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    usuarios: Object
})

</script>

<template>
    <!-- {{ usuarios }} -->
    <h1>Usuários</h1>

    <Link href="/">Home
    </Link>
    <Link href="/users">Users
    </Link>

    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="usuario in usuarios" :key="usuario.id">
                <td>{{ usuario.name }}</td>
                <td>{{ usuario.email }}</td>
            </tr>

        </tbody>
    </table>
</template>
