<template>
  <div class="CPS">
    <TextLayout 
        :nav="nav"
        :menu="menu"
        :content="content"
        :readMore="readMore"
    />
  </div>
</template>

<script>

import TextLayout from '@/views/layouts/TextLayout.vue'

export default {
  name: 'CPS',
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
            text:'CPS',
            link: '/',
        }],
        menu: [{
            text: 'Введение',
            link: '/',
        },{
            text: 'Элементы стратегии CPS',
            link: '/',
        }, {
            text: 'Путь в индустрию 4.0',
            link: '/',
        },],
        readMore: [
          [
            {text: 'Реализация и потенциал', link: '/'},
            {text: 'I4 часть сетевого мира', link: '/'},
            {text: 'CPS', link: '/'},
          ],[
            {text: 'Smart factory', link: '/'},
            {text: 'Примеры внедрения', link: '/'},
          ]
        ],
        content: [{
          component: 'ContentTitle',
          value: 'CPS и CPPS ядро Industry 4.0'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentSubtitle',
          value: 'Элементы стратегии CPS'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
          }
        },{
          component: 'ContentList',
          items: [{
            title: 'Горизонтальная интеграция',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor'
          },{
            title: 'Проектирование',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor'
          },{
            title: 'Вертикальная интеграция',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor'
          },]
        },]
    }
  }
}
</script>
