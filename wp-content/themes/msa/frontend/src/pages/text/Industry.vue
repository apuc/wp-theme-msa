<template>
  <div class="Industry">
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
  name: 'Industry',
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
            text:'Реализация и потенциал',
            link: '/',
        }],
        menu: [{
            text: 'Введение',
            link: '/',
        },{
            text: 'Глобальные сети',
            link: '/',
        }, ],
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
            component: "contentTitle",
            value: "Industry 4.0"
        },
        {
            component: "contentSubtitle",
            value: "Введение"
        },
        {
            component: "contentParagraph",
            value: {
                text: "Благодаря Industry 4.0 Германия создала..."
            }
        },
        {
            component: "contentParagraph",
            value: {
                text: "Впервые термин Industry 4.0 был представлен..."
            }
        },
        {
            component: "contentParagraph",
            value: {
                text: "Киберфизическая производственная система CPPS...",
                styled: true,
            }
        },{
            element: 'contentImage',
            value: {
                src: ""
            }
        }, {
            component: "contentParagraph",
            value: {
                text: "Киберфизическая система CPS...",
                styled: true,
            }
        },{
            element: 'contentImage',
            value: {
                src: ""
            }
        },{
            component: "contentSubtitle",
            value: "Глобальные сети"
        },{
            component: "contentParagraph",
            value: {
                text: "Первые 3 промышленные революции произошли в результате механизации...",
            }
        },{
            component: "contentParagraph",
            value: {
                text: "Сеть создания добавленной стоимости...",
                styled: true
            }
        },
        {
            element: 'contentImage',
            value: {
                src: ""
            }
        },
        {
            component: "contentSubtitle",
            value: "Задачи"
        },
        {
            component: "contentParagraph",
            value: {
                text: "Industry 4.0 обладает огромным потенциалом...",
            }
        },]
    }
  }
}
</script>
