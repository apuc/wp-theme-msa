<template>
  <div class="DigitizeKnowledge">
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
  name: 'DigitizeKnowledge',
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
        content: [{
          component: 'ContentTitle',
          value: 'Как я могу оцифровать знания?'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...'
          }
        },]
    }
  }
}
</script>
