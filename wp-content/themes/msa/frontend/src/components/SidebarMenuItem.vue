<template>
    <li class="chapters-list__page">
        <a class="chapters-list__link" :href="'#'+slug">{{name}}</a>
    </li>
</template>

<script>
export default {
    name: 'SidebarMenuItem',
    props: {
        id: Number,
        slug: String,
        name: String,
    }
}
</script>

<style lang="scss" scoped>
.chapters-list { 

    &__page{
        margin: 15px 0;
        padding: 6px 15px;
        list-style: none;

        &.active{
            border-right: 4px solid #0072D6;
        }
        &:hover{
            border-right: 4px solid #0072D6;
        }
    }

    &__link{
        display: block;
        width: 227px;
        text-align: left;
        font: 16px/22px 'Montserrat';
        font-size: medium;
        font-weight: 500;
        color: #000000;
    }
}
</style>