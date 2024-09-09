<template>
    <div>
        <h1>Hello, {{ name }}</h1>
        <p>In this Series, we will use this followng frameworks:</p>

        <ul>
            <li v-for="framework of frameworks" :key="framework">
                {{ framework }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array,
    },
};
</script>
