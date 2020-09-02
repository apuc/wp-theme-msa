<template>
    <li class="additionally-list__page">
        <a class="additionally-list__link" :href="item.link">{{item.text}}</a>
    </li>
</template>

<script>
export default {
    name: 'ReadMoreItem',
    props: {
        item: {
            link: String,
            text: String
        }
    },
}
</script>

<style scoped>
.additionally-list__page {
    list-style: none;
}
.additionally-list__link {
    text-align: left;
    text-transform: uppercase;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
    font-weight: 500;
    line-height: 36px;
    color: #000000;
}
</style>