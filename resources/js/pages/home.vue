<template>
    <h1>Hello, {{ name }}</h1>
    <p>In this Series, we will use this followng frameworks:</p>

    <ul>
        <li v-for="framework of frameworks" :key="framework">
            {{ framework }}
        </li>
    </ul>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/settings">Settings</a></li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array,
    },
};
</script>
