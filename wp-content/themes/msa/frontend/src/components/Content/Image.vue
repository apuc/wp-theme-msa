<template>
    <img class="content__image" :src="value.src" />
</template>

<script>
export default {
    name: 'contentImage',
    props: {
        value: {
            src: String
        }
    }
}
</script>

<style scoped>
.content__image {
    display: block;
    width: 80%;
    height: 400px;
    margin: 30px auto;
}
</style>