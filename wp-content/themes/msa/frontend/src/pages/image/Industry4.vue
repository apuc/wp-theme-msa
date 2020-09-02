<template>
  <div class="Industry4">
    <ImageLayout 
      :image="image"
      :description="description"
    />
  </div>
</template>

<script>

import ImageLayout from '@/views/layouts/ImageLayout.vue'

export default {
  name: 'Industry4',
  components: {
    ImageLayout
  },
  data() {
    return {
      image: '@/assets/images/Industry4-brg.png',
      description: {
        title: 'Цифровизация',
        text: 'В каждом споре о важности оцифровки компаний в какой-то момент появляетсся модное слово Industry 4.0. Но что стоит за формулой "4.0" и нужно ли это вам?',
        links: [{
            text: 'Industry обзор',
            to: '/'
        },{
            text: 'Industry вопросы бизнеса',
            to: '/'
        },]
      }
    }
  }
}
</script>
