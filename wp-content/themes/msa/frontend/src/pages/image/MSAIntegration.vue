<template>
  <div class="MSAIntegration">
    <ImageLayout 
      :image="image"
      :description="description"
      :questions="questions"
    />
  </div>
</template>

<script>

import ImageLayout from '@/views/layouts/ImageLayout.vue'

export default {
  name: 'MSAIntegration',
  components: {
    ImageLayout
  },
  data() {
    return {
      image: '@/assets/images/MSAIntegration-brg.png',
      description: {
        title: 'Внедрение MSA',
        text: 'В каждом споре о важности оцифровки компаний в какой-то момент появляетсся модное слово Industry 4.0. Но что стоит за формулой "4.0" и нужно ли это вам?',
      },
      questions: [{
          image: '',
          text: 'Основные различия цифровизации от Industry 4.0'
      },]
    }
  }
}
</script>
