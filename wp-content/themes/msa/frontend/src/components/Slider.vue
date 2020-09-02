<template>
    <section class="questions">
        <div class="questions__button--wrapper">
            <div class="questions__button questions__button--prev">
                <button @click="prevPage">&#60;</button>
            </div>
        </div>
        <div class="container involucre-list">
            <SliderItem v-for="sliderItem in sliderShow" :key="sliderItem.text"
                :image="sliderItem.image"
                :text="sliderItem.text"
                :link="sliderItem.link"
            />
        </div>
        <div class="questions__button--wrapper">
            <div class="questions__button questions__button--next">
                <button @click="nextPage">&#62;</button>
            </div>
        </div>
    </section>
</template>

<script>
import SliderItem from '@/components/SliderItem';
import axios from '@/api';
export default {
    name: "Slider",
    components: {
        SliderItem,
    },
    data() {
        return {
            sliderItems: [],
            currentPage: 1,
            perPage: 3,
        }
    },
    props: {
        slider: Array,
    },
    computed: {
        pages() {
            return this.sliderItems.length / this.perPage;
        },
        sliderShow() {
            return this.sliderItems.slice((this.currentPage-1)*this.perPage, this.currentPage*this.perPage);
        }
    },
    mounted() {
        axios.get(`${process.env.VUE_APP_LOCAL_URL}/wp-json/wp/v2/msa_slider/`)
            .then(res => {
              res.data.forEach((item) => {
                this.sliderItems.push({
                  image: item.better_featured_image.source_url,
                  text: item.title.rendered,
                  link: item.link,
                })
              });
            })
    },
    methods: {
        nextPage() {
            if(this.currentPage + 1 <= this.pages) {
                this.currentPage = this.currentPage + 1
            }
        },

        prevPage() {
            if(this.currentPage -1 >= 1) {
                this.currentPage = this.currentPage - 1
            }
        },
    }
}
</script>

<style lang="scss" scoped>

.questions {
    display: flex;
    justify-content: center;
    text-align: center;

    .container {
        margin: 0;
    }

    &__button {
        
        position: absolute;
        top: 45%;

        button {
            width: 30px;
            height: 30px;
            background-color: #fff;
            border: 1px solid #888888;
            border-radius: 50%;
            outline: none;
        }

        &--prev {
            right: 20px;
        }

        &--next {
            left: 20px;
        }

        &--wrapper {
            height: 240px;
            width: 75px;
            position: relative;
            background-color: #fff;
        }
    }
}

.involucre-list{
    display: flex;
    flex-wrap: wrap;
}

@media screen and (max-width: 900px) {
    .involucre-list{
        flex-direction: column;
    }
}
</style>