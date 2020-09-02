<template>
     <div :class="`header__download ${download.image?'withImage':''}`">
        <button type="button" class="industry-description__button--download" v-if="download.title && download.text">
            <a href="image/xxx.jpg" download>
                <span class="download__title">{{download.title}}</span>
                <span class="download__description">{{download.text}}</span>
            </a>
        </button>
        <img :src="download.image" v-if="download.image" />
    </div>
</template>

<script>
export default {
    name: 'Download',
    props: {
        download: {
            title: String,
            text: String,
            image: String,
        }
    }
}
</script>

<style scoped lang="scss">
    .header__download {
        position: absolute;
        right: 0;
        bottom: 0;
        height: 100px;
        background-color: #0059bd;

        &.withImage {
            background-color: transparent;
        }

        img {
            display: block;
            margin-top: -5rem;
        }
    }

    .industry-description__button--download {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 428px;
        height: 100px;
        background: #005AC1;
        border: none;
        cursor: pointer;

        a {
            display: block;
            width: 100%;
        }
    }
</style>