<template>
    <section>
        <div class="msa-catalogue container">
            <h2 class="menu__title">{{info.title}}</h2>
            <div class="involucre">
                <InfoItem v-for="infoItem in info.items" :key="infoItem.title" 
                    :image="infoItem.image"
                    :title="infoItem.title"
                    :description="infoItem.description"
                />       
            </div>
        </div>
    </section>
</template>

<script>
import InfoItem from '@/components/InfoItem';
export default {
    components: {
        InfoItem
    },
    props: {
        info: {
            title: String,
            items: Array,
        }
    }
}
</script>

<style scoped lang="scss">
    .msa-catalogue{
        padding-bottom: 87px;
    }
    
    .menu__title{
        padding-top: 87px;
        padding-bottom: 80px;
        height: 113px;
        text-align: center;
        font-family: 'Montserrat',sans-serif;
        font-weight: 500;
        font-size: 46px;
        line-height: 56px;
        color: #000000;
    }

    @media screen and (max-width: 800px) {
        .involucre {
            flex-direction: column;
        }
    }
</style>