<template>
    <nav class="review-menu">
        <div class="container">
            <ul class="review-navigation">
                <NavItem v-for="navItem in nav" :key="`${navItem.term_id}_${navItem.slug}`" 
                    :id="navItem.term_id"
                    :slug="navItem.slug"
                    :name="navItem.name"
                />
            </ul>
        </div>
    </nav>
</template>

<script>
import NavItem from "@/components/NavItem";
export default {
    name: "Nav",
    components: {
        NavItem
    },
    props: {
        nav: Array,
    }
}
</script>

<style scoped lang="scss">
.review-menu{
    border: 1px solid #E8E8E8;
}
.review-navigation{
    display: flex;
    padding: 19px;
}
</style>