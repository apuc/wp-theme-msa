<template>
  <div class="SevenSteps">
    <TextLayout 
        :nav="nav"
        :content="content"
        :slider="slider"
    />
  </div>
</template>

<script>

import TextLayout from '@/views/layouts/TextLayout.vue'

export default {
  name: 'SevenSteps',
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
          "component": "contentTitle",
          "value": "7 шагов по внедрению"
        },{
          "component": "contentParagraph",
          "value": {
              "text": "Внедрение системы состоит из 7 шагов"
          }
        },{
          "component": "contentList",
          "value": {
              "items": [{
                  "title": "Изучение",
                  "text": "li-text-1"
              },{
                  "title": "Адаптация",
                  "text": "li-text-1"
              },{
                  "title": "Внедрение",
                  "text": "li-text-1"
              },{
                  "title": "Наполнение",
                  "text": "li-text-1"
              },{
                  "title": "Создание потоков",
                  "text": "li-text-1"
              },{
                  "title": "Запуск",
                  "text": "li-text-1"
              },{
                  "title": "Анализ",
                  "text": "li-text-1"
              }]
          }
        },],
    }
  }
}
</script>
