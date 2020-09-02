<template>
  <div class="HowItWorks">
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
  name: 'HowItWorks',
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
          value: 'Как работает MSA'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Говорить о том, что компания существует в рамках Industry 4.0 можно только если ...'
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
