<template>
    <div class="catalogue">
        <figure class="catalogue__image">
            <img class="catalogue__image--img" :src="image" alt="">
            <a href="industryLevel.html" class="link-detailed--button" data-id="da68"></a>
        </figure>
        <div class="catalogue__description">
            <h3 class="catalogue__description--title">{{title}}</h3>
            <p class="catalogue__description--text">{{description}}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'InfoItem',
    props: {
        image: String,
        title: String,
        description: String
    }
}
</script>

<style scoped lang="scss">
.catalogue{
    width: 100%;
    margin-right: 40px;

    &__image{
        position: relative;
        height: 250px;

        &--link{
            position: absolute;
            right: 0;
            bottom: 0;
        }
        &--img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
    &__description{
        padding: 54px 25px 53px;
        background-color: #F8F8F8;

        &--title{
            text-align: left;
            font-family: 'Montserrat',sans-serif;
            font-weight: 500;
            font-size: 20px;
            line-height: 30px;
            color: #000000;
        }
        &--text{
            padding-top: 20px;
            min-height: 130px;
            height: 100%;
            font-family: 'Roboto',sans-serif;
            font-weight: 100;
            font-size: 16px;
            line-height: 22px;
            color: #000000;
        }
    }
}

@media screen and (max-width: 800px) {
    .catalogue {
        width: 90%;
        margin: 0 auto;

        &__image{
            &--img{
                object-fit: initial;
            }
        }
    }
}
</style>