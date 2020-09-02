<template>
  <div class="Limitation">
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
  name: 'Limitation',
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
          value: 'Ограничения'
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
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentSubtitle',
          value: 'На какие вопросы нужно ответить'
        },{
          component: "contentList",
          value: {
              items: [{
                  title: "Стратегия и организация",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
              },{
                  title: "Умная фабрика",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
              },{
                  title: "Умные операции",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
              },{
                  title: "Умные продукты",
                  text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
              },],
          }
        },{
          component: 'ContentSubtitle',
          value: 'Контрольный список'
        },{
          component: "ContentList",
          value: {
              items: [{
                  title: "Определение целей",
              },{
                  title: "Расчёт добавленной стоимости",
              },{
                  title: "Идентификация",
              },{
                  title: "Определение",
              },{
                  title: "Получение",
              },],
          }
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
