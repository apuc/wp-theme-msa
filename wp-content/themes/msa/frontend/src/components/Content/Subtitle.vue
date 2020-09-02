<template>
    <h3 class="content__subtitle">{{value}}</h3>
</template>

<script>
export default {
    name: 'contentSubtitle',
    props: {
        value: {
            type: String
        }
    }
}
</script>

<style scoped>
.content__subtitle {
    margin-top: 40px;
    margin-bottom: 10px;
    text-align: left;
    font: 32px/36px  'Montserrat';
    font-weight: 500;
    color: #000000;
}
</style>