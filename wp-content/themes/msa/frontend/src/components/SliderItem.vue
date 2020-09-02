<template>
    <li class="questions__description-page">
        <img class="questions__description-image" :src="image" alt="" />
        <a :href="link" class="questions__description--text link">{{text}}</a>
    </li>
</template>

<script>
export default {
    name: "SliderItem",
    props: {
        image: String,
        text: String,
        link: String
    }
}
</script>

<style lang="scss" scoped>

.questions__description{ 
    &-page{
        position: relative;
        z-index: 0;
        background: #FFF;
        box-shadow: 0 0 0 1px #E2E9ED;
        padding: 10px;
        display: flex;
        align-items: center;
        flex: 0 0 33.3%;
        height: 240px;
        box-sizing: border-box;
        -webkit-transition: box-shadow 0.2s ease, z-index 0s 0.2s ease, -webkit-transform 0.2s ease;
        transition: box-shadow 0.2s ease, z-index 0s 0.2s ease, -webkit-transform 0.2s ease;
        transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0.2s ease;
        transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0.2s ease, -webkit-transform 0.2s ease;

        &:hover{
            z-index: 1;
            box-shadow: 0 8px 50px rgba(0, 0, 0, 0.2);
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: box-shadow 0.2s ease, z-index 0s 0s ease, -webkit-transform 0.2s ease;
            transition: box-shadow 0.2s ease, z-index 0s 0s ease, -webkit-transform 0.2s ease;
            transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0s ease;
            transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0s ease, -webkit-transform 0.2s ease;
            border: none;
        }
    }
    &-image{
        display: block;
        margin: 0 2rem;
        width: 70px;
        height: 70px;
    }

    &--text{
        display: block;
        box-sizing: border-box;
        text-align: left;
        font-family: 'Montserrat',sans-serif;
        font-weight: 500;
        font-size: 20px;
        line-height: 26px;
        color: #000000;

        &.link{
            font-family: 'Montserrat',sans-serif;
            font-weight: 500;
            font-size: 20px;
            line-height: 26px;
            color: #000000;
            width: 70%;
            text-decoration: none;
        }
    }
}

</style>