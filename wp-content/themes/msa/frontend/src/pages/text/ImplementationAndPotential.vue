<template>
  <div class="ImplementationAndPotential">
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
  name: 'ImplementationAndPotential',
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
            text: 'Реализация',
            link: '/',
        },{
            text: 'Потенциал',
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
        content:[{
          component: 'ContentTitle',
          value: 'Реализация и потенциал Industry 4.0?'
        },{
          component: 'ContentSubtitle',
          value: 'Реализация'
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: "ContentList",
          value: {
              items: [{
                  title: "Стандартизация",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Управление",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Инфраструктура",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Безопасность",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Организация",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },],
          }
        },{
          component: 'ContentSubtitle',
          value: 'Потенциал'
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: "ContentList",
          value: {
              items: [{
                  title: "Стандартизация",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Управление",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Инфраструктура",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Безопасность",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Организация",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },],
          }
        }]
    }
  }
}
</script>
