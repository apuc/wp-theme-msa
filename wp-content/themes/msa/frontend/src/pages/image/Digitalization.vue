<template>
  <div class="digitalization">
    <ImageLayout 
      :image="image"
      :description="description"
    />
  </div>
</template>

<script>

import ImageLayout from '@/views/layouts/ImageLayout.vue'

export default {
  name: 'Digitalization',
  components: {
    ImageLayout
  },
  data() {
    return {
      image: '@/assets/images/Digitalization-brg.png',
      description: {
        title: 'Цифровизация',
        text: 'В каждом споре о важности оцифровки компаний в какой-то момент появляетсся модное слово Industry 4.0. Но что стоит за формулой "4.0" и нужно ли это вам?',
        links: [{
            text: 'цифровизация обзор',
            to: '/'
        },{
            text: 'цифровизация вопросы бизнеса',
            to: '/'
        },]
      }
    }
  }
}
</script>
