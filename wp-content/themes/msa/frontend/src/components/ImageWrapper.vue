<template>
    <div class="image-wrapper" :style="{ backgroundImage: 'url(' + image + ')' }">
        <div class="container">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ImageWrapper',
    props: {
        image: String
    }
}
</script>

<style scoped>
    .image-wrapper {
        position: relative;
        width: 100%;
        height: 970px;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>