<template>
    <div class="article-content__node">
        <ul>
            <li class="content-list-define-dashes__definition" v-for="(item,index) in value.items" :key="`${index}_${item.title}`">
                <h4>{{item.title}}</h4>
                {{item.text}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'content-list',
    props: {
        value: {
            items: Array
        }
    }
}
</script>

<style scoped>
.article-content__node{
    padding-top: 30px;
    padding-bottom: 18px;
}

.content-list-define-dashes__definition{
    list-style: none;
    position: relative;
    padding-left: 37px;
    padding-top: 10px;
    padding-bottom: 0;
    font: 20px/36px 'Alethia Pro';
    color: #000000;
}
.content-list-define-dashes__definition:before{
    position: absolute;
    content: '';
    top: 28px;
    left: 0;
    width: 24px;
    height: 2px;
    background: #005AC1;
}
</style>