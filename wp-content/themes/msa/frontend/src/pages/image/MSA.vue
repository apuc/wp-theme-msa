<template>
  <div class="home">
    <ImageLayout 
      :image="image"
      :description="description"
      :download="download"
      :info="info"
    />
  </div>
</template>

<script>

import ImageLayout from '@/views/layouts/ImageLayout.vue'

export default {
  name: 'MSA',
  components: {
    ImageLayout
  },
  data() {
    return {
      image: 'https://html.craft-group.xyz/img/msa/bgr.png',
      description: {
        title: 'Автоматизация производства',
        text: 'Цифровое описание производственных потоков, их автоматизация, мониторинг и контроль для перехода к системному управлению предприятием.',
        slider: [1,2,3,4]
      },
      download: {
        image: 'https://html.craft-group.xyz/img/msa/industry.png',
      },
      info: {
        title: 'Для компаний и руководителей',
        items: [{
          image: 'https://html.craft-group.xyz/img/msa/info-1.png',
          title: 'История и основные понятия Industry 4.0',
          description: 'Впервые термин «Индустрия 4.0», сокращённый до I4.0 или просто I4, был публично представлен в 2011 году на Ганноверской ярмарке как часть проекта высокотехнологичной стратегии правительства Германии.'
        },{
          image: 'https://html.craft-group.xyz/img/msa/info-2.png',
          title: 'Определите ваш уровень готовности в Industry 4.0?',
          description: 'Компании, которые надеются оставаться конкурентоспособными, должны оценить, где они находятся в процессе цифровой трансформации и используют ли они весь потенциал Industrie 4.0.'
        },{
          image: 'https://html.craft-group.xyz/img/msa/info-3.png',
          title: '5 шагов к отцифровке бизнеса',
          description: 'Цифровой век приносит большие возможности для предпринимателей. Руководство "Оцифровка в пять шагов" предназначено для того чтобы съориентировать вас на пути к оцифровке компании.'
        },]
      }
    }
  }
}
</script>