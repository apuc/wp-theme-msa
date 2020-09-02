<template>
  <div class="FiveSteps">
    <TextLayout 
        :nav="nav"
        :menu="menu"
        :readMore="readMore"
    />
  </div>
</template>

<script>

import TextLayout from '@/views/layouts/TextLayout.vue'

export default {
  name: 'FiveSteps',
  components: {
    TextLayout
  },
  data() {
    return {
        nav: [{
            text:'Главная',
            link: '/',
        },{
            text:'Обзор', 
            link: '/',
        },{
            text:'Industry 4.0',
            link: '/',
        }],
        menu: [{
            text: 'Гибкое производство',
            link: '/',
        },{
            text: 'Система единичного заказа',
            link: '/',
        }, {
            text: 'Удалённое управление',
            link: '/',
        },{
            text: 'Смена поставщика',
            link: '/',
        }],
        readMore: true,
    }
  }
}
</script>
