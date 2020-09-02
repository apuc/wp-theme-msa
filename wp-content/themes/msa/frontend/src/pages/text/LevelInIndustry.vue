<template>
  <div class="LevelInIndustry">
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
  name: 'LevelInIndustry',
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
          value: 'Как определить мой уровень готовности в Industry 4.0?'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentSubtitle',
          value: 'Модель готовности'
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
          }
        },{
          component: 'ContentList',
          value: {
            items: [{
                title: "Стратегия и организация",
            },{
                title: "Умная фабрика",
            },{
                title: "Умные операции",
            },{
                title: "Умные продукты",
            },{
                title: "Услуги на основе данных",
            },{
                title: "Сотрудники",
            },],
          }
        },{
          component: 'ContentParagraph',
          value: {
            text: 'Каждое из этих 6 измерений далее разграничено на области...'
          }
        },{
            component: 'ContentImage',
            value: {
                src: ""
            }
        },
        {
            component: 'ContentParagraph',
            value: {
                text: "Каждое измерение можно измерить по уровню готовности от 0 до 5..."
            }
        },
        {
            component: 'ContentParagraph',
            value: {
                text: 'Видение Industry 4.0 и путь к нему будут отличаться для каждой компании...'
            }
        },
        {
            component: 'ContentList',
            value: {
                listStyle: "image",
                items: [{
                    image: "",
                    title: "Аутсайдер",
                    text: "Описание..."
                },{
                    image: "",
                    title: "Новичок",
                    text: "Описание..."
                },{
                    image: "",
                    title: "Ученик",
                    text: "Описание..."
                },{
                    image: "",
                    title: "Опытный",
                    text: "Описание..."
                },{
                    image: "",
                    title: "Эксперт",
                    text: "Описание..."
                },{
                    image: "",
                    title: "Лидер",
                    text: "Описание..."
                }]
            }
        }]
    }
  }
}
</script>
