<template>
    <li class="review-navigation__page">
        <a class="review-navigation__link" :href="'#'+slug">{{name}}</a>
    </li>
</template>

<script>
export default {
    name: "NavItem",
    props: {
        id: Number,
        slug: String,
        name: String,
    }
}
</script>

<style lang="scss" scoped>

.review-navigation{
    &__page{
        padding: 18px 10px;
        list-style: none;
        text-decoration: none;

        &.active{
            padding-bottom: 5px;
            border-bottom: 1px solid #7B7B7B;
        }
        
        &:hover{
            padding-bottom: 5px;
            border-bottom: 1px solid #7B7B7B;
            cursor: pointer;
        }
    }
    &__link{
        font: 17px/28px 'Roboto';
        font-size: medium;
        font-weight: 400;
        color: black;
        text-decoration: none;
    }
}

</style>