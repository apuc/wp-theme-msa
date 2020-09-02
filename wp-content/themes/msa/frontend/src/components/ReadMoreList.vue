<template>
    <ul class="additionally-list">
        <ReadMoreItem v-for="item in list" :key="item.link"
            :item="item"
        />
    </ul>
</template>

<script>
import ReadMoreItem from "@/components/ReadMoreItem";
export default {
    name: 'ReadMoreList',
    components: {
        ReadMoreItem
    },
    props: {
        list: Array
    },
}
</script>

<style scoped>
.additionally-list{
    padding-top: 3px;
    margin-left: 24px;

}
</style>