<template>        
    <aside class="sidebar">
        <ul class="chapters-list">            
            <SidebarMenuItem v-for="sidebarMenuItem in menu" :key="`${sidebarMenuItem.term_id}_${sidebarMenuItem.slug}`" 
                :id="sidebarMenuItem.term_id"
                :slug="sidebarMenuItem.slug"
                :name="sidebarMenuItem.name"
            />
        </ul>
    </aside>
</template>

<script>
import SidebarMenuItem from "@/components/SidebarMenuItem";
export default {
    name: 'SidebarMenu',
    components: {
        SidebarMenuItem
    },
    props: {
        menu: Array
    },
}
</script>

<style scoped>
.sidebar{
    max-width: 250px;
    padding-top: 129px;
    padding-bottom: 69px;
    border-right: 1px solid #E8E8E8;
}
</style>