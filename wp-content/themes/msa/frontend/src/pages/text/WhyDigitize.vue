<template>
  <div class="WhyDigitize">
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
  name: 'WhyDigitize',
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
          value: 'Почему я должен оцифровывать компанию'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Действительно ли оцифровка бизнеса является основным условием...'
          }
        },{
          component: "contentList",
          value: {
              items: [{
                  title: "Легче находить и удерживать клиентов",
              },{
                  title: "Легче набирать, обучать, удерживать сотрудников",
              },{
                  title: "Выполнять заказы недорого и гибко",
              },{
                  title: "Контроллировать бизнес-процессы",
              },{
                  title: "Разрабатывать инновационные предложения",
              },],
          }
        },]
    }
  }
}
</script>
