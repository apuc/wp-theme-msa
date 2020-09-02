<template>
  <div class="SmartFactory">
    <TextLayout 
        :nav="nav"
        :menu="menu"
        :readMore="readMore"
        :content="content"
    />
  </div>
</template>

<script>

import TextLayout from '@/views/layouts/TextLayout.vue'

export default {
  name: 'SmartFactory',
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
            text:'Smart Factory',
            link: '/',
        }],
        menu: [{
            text: 'Единая система',
            link: '/',
        },{
            text: 'Будущие сценарии',
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
          value: 'Smart factory'
        },{
          component: 'ContentSubtitle',
          value: 'Введение'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentParagraph',
          value: {
            title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentList',
          items: [{
            title: 'Взаимосвязь',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor'
          },{
            title: 'Информационная прозрачность',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor'
          },{
            title: 'Техническая поддержка',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor'
          },{
            title: 'Децентрализованные решения',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor'
          },]
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentSubtitle',
          value: 'CPPS'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },]
    }
  }
}
</script>
