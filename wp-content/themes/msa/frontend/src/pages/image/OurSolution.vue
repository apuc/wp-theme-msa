<template>
  <div class="OurSolution">
    <ImageLayout 
      :image="image"
      :description="description"
    />
  </div>
</template>

<script>

import ImageLayout from '@/views/layouts/ImageLayout.vue'

export default {
  name: 'OurSolution',
  components: {
    ImageLayout
  },
  data() {
    return {
      image: '@/assets/images/OurSolution-brg.png',
      description: {
        title: 'Наши решения',
        text: 'В каждом споре о важности оцифровки компаний в какой-то момент появляетсся модное слово Industry 4.0. Но что стоит за формулой "4.0" и нужно ли это вам?',
        links: [{
            text: 'MSA обзор',
            to: '/'
        },{
            text: 'MSA модули',
            to: '/'
        },{
            text: 'Внедрение MSA',
            to: '/'
        },{
            text: 'О нас',
            to: '/'
        },]
      }
    }
  }
}
</script>
