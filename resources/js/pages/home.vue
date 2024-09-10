<template>
    <h1>Hello, {{ name }}</h1>
    <p>In this Series, we will use this followng frameworks:</p>

    <ul>
        <li v-for="framework of frameworks" :key="framework">
            {{ framework }}
        </li>
    </ul>

    <nav-component />
</template>

<script>
import nav from "../shared/nav.vue";

export default {
    props: {
        name: String,
        frameworks: Array,
    },
    components: {
        "nav-component": nav,
    },
};
</script>
