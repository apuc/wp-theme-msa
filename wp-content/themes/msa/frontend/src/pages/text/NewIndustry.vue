<template>
  <div class="NewIndustry">
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
  name: 'NewIndustry',
  components: {
    TextLayout
  },
  data() {
    return {
        nav: [{
            text:'Главная',
            link: '/',
        },{
            text:'Вопросы бизнеса', 
            link: '/',
        },{
            text:'Почему я должен оцифровывать компанию?',
            link: '/',
        }],
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
        content:[{
          component: 'ContentTitle',
          value: 'Что делать новичку в Industry 4.0?'
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: "ContentList",
          value: {
              items: [{
                  title: "Отсутствие ясности",
              },{
                  title: "Нерешительность",
              },{
                  title: "Отсутствие потребности",
              },{
                  title: "Недостаток опыта",
              },{
                  title: "Отсутствие корпоративной культуры",
              },],
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            styled: true
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        },{
          component: 'ContentParagraph',
          value: {
            title: 'Lorem Ipsum...',
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        },{
          component: 'ContentParagraph',
          value: {
            title: 'Lorem Ipsum...',
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        },{
          component: 'ContentParagraph',
          value: {
            title: 'Lorem Ipsum...',
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        },{
          component: 'ContentParagraph',
          value: {
            title: 'Lorem Ipsum...',
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        },{
          component: 'ContentParagraph',
          value: {
            title: 'Lorem Ipsum...',
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        },{
          component: 'ContentParagraph',
          value: {
            title: 'Lorem Ipsum...',
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          }
        }]
    }
  }
}
</script>
