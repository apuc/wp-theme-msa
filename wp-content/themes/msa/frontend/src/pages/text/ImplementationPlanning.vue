<template>
  <div class="ImplementationPlanning">
    <TextLayout 
        :nav="nav"
        :menu="menu"
        :slider="slider"
        :content="content"
    />
  </div>
</template>

<script>

import TextLayout from '@/views/layouts/TextLayout.vue'

export default {
  name: 'ImplementationPlanning',
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
            text: 'Что должно быть достигнуто?',
            link: '/',
        },{
            text: 'На какие вопросы нужно ответить?',
            link: '/',
        }, {
            text: 'Контрольный список',
            link: '/',
        },],
        slider: [{
          image: '',
          text: 'Почему я должен оцифровывать компанию?',
          link: '/'
        },{
          image: '',
          text: 'Как мне создать план по цифровизации?',
          link: '/'
        },{
          image: '',
          text: 'Какие цифровые инструменты полезны?',
          link: '/'
        },],
        content: [{
          component: 'ContentTitle',
          value: 'Как мне создать план по цифровизации'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: "contentList",
          value: {
              items: [{
                  title: "В общении",
                  text: 'Описание...'
              },{
                  title: "В логистике",
                  text: 'Описание...'
              },{
                  title: "Во внутренних процессах",
                  text: 'Описание...'
              },{
                  title: "В инфраструктуре",
                  text: 'Описание...'
              },{
                  title: "На производстве",
                  text: 'Описание...'
              },],
          }
        },]
    }
  }
}
</script>
