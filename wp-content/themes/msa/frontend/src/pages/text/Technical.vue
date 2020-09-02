<template>
  <div class="Technical">
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
  name: 'Technical',
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
          value: 'Технические и кадровые требования'
        },{
          component: 'ContentSubtitle',
          value: 'Что должно быть достигнуто'
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentSubtitle',
          value: 'На какие вопросы нужно ответить'
        },{
          component: "ContentList",
          value: {
              items: [{
                  title: "Достаточно ли...",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Нужен ли...",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Что должен...",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },{
                  title: "Какими знаниями обладает...",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'
              },],
          }
        },{
          component: 'ContentSubtitle',
          value: 'Контрольный список'
        },{
          component: "ContentList",
          value: {
              items: [{
                  title: "Отвечая на вопрос...",
              },{
                  title: "Создание спецификации...",
              },{
                  title: "Определение обязанностей...",
              },{
                  title: "Обеспечение квалификации...",
              },{
                  title: "Обзор требований...",
              },{
                  title: "Разработка концепции...",
              },],
          }
        },]
    }
  }
}
</script>
