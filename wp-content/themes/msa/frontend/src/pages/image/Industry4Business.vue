<template>
  <div class="Industry4Business">
    <ImageLayout 
      :image="image"
      :description="description"
      :download="download"
      :questions="questions"
    />
  </div>
</template>

<script>

import ImageLayout from '@/views/layouts/ImageLayout.vue'

export default {
  name: 'Industry4Business',
  components: {
    ImageLayout
  },
  data() {
    return {
      image: '@/assets/images/Industry4Business-brg.png',
      description: {
        title: 'Industry 4.0 Вопросы бизнеса',
        text: 'В каждом споре о важности оцифровки компаний в какой-то момент появляетсся модное слово Industry 4.0. Но что стоит за формулой "4.0" и нужно ли это вам?',
      },
      download: {
          title: 'Скачать презентацию',
          text: 'Вопросы бизнеса.pdf',
      },
      questions: [{
          image: '',
          text: 'Основные различия цифровизации от Industry 4.0'
      },{
          image: '',
          text: 'Основные различия цифровизации от Industry 4.0'
      },{
          image: '',
          text: 'Основные различия цифровизации от Industry 4.0'
      },]
    }
  }
}
</script>
