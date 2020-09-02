<template>
  <div class="Architechture">
    <TextLayout 
        :nav="nav"
        :slider="slider"
        :content="content"
    />
  </div>
</template>

<script>

import TextLayout from '@/views/layouts/TextLayout.vue'

export default {
  name: 'Architechture',
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
          component: 'ContentTitle',
          value: 'MSA Архитектура'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'MSA - это CPPS система, построенная по архитектуре 5C...'
          }
        },{
          component: 'ContentImage',
          value: {
            src: ''
          }
        },]
    }
  }
}
</script>
