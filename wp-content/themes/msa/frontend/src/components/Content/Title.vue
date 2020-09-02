<template>
    <h2 class="article-content__title">{{value}}</h2>
</template>

<script>
export default {
    name: 'content-title',
    props: {
        value: {
            type: String
        }
    }
}
</script>

<style scoped>
    .article-content__title {
        padding-top: 12px;
        padding-bottom: 30px;
        text-align: center;
        font:  42px/36px 'Montserrat';
        font-weight: 500;
        color: #000000;
        text-transform: uppercase;
    }
</style>