<template>
  <div class="Inventory">
    <TextLayout 
        :nav="nav"
        :menu="menu"
        :content="content"
        :slider="slider"
    />
  </div>
</template>

<script>

import TextLayout from '@/views/layouts/TextLayout.vue'

export default {
  name: 'Inventory',
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
          value: 'Инвентаризация'
        },{
          component: 'ContentSubtitle',
          value: 'Что должно быть достигнуто'
        },{
          component: "contentParagraph",
          value: {
              text: "Независимо от отрасли и ориентации на частных лиц...",
          }
        },{
          component: 'ContentSubtitle',
          value: 'На какие вопросы нужно ответить?'
        },{
          component: "contentList",
          value: {
              items: [{
                  title: "Как организованы процессы",
                  text: 'Описание...'
              },{
                  title: "Какая техническая инфраструктура",
                  text: 'Описание...'
              },{
                  title: "Какие процессы должны работать",
                  text: 'Описание...'
              },{
                  title: "Кто должен оцифровывать",
                  text: 'Описание...'
              },],
          }
        },{
          component: "contentList",
          value: {
              items: [{
                  title: "Определение...",
              },{
                  title: "Обеспечение...",
              },{
                  title: "Разъяснение...",
              },{
                  title: "Рассмотрение...",
              },{
                  title: "Проверка...",
              },{
                  title: "Определение...",
              },],
          }
        },{
          component: "contentParagraph",
          value: {
              text: "Если вы смогли заполнить контрольный список...",
          }
        },]
    }
  }
}
</script>
