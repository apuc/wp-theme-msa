<template>
    <div class="content-interpretation" v-if="value.styled">
        <div class="content-interpretation__terminology">{{value.text}}</div>    
    </div>
    <p v-else class="content__page">{{value.text}}</p>
</template>

<script>
export default {
    name: 'content-paragraph',
    props: {
        value: {
            styled: {
                type: Boolean
            },
            text: {
                type: String
            }
        }
    }
}
</script>

<style scoped>
    .content__page {
        padding-top: 5px;
        text-align: left;
        font:17px/28px 'Roboto';
        font-weight: 400;
        color: #000000;
    }
    .content-interpretation{
        padding-top: 25px;
        padding-bottom: 20px;
    }
    
    .content-interpretation__terminology{
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 58px;
        font: 18px/28px 'Alethia Pro';
        border-left: 4px solid #0072D6;
    }
</style>