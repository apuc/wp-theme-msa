<template>
  <div class="layout">
    <div class="layout__content">
        <ImageWrapper :image="image">
            <div class="container">
              <Description v-if="description" :description="description" />
              <Download v-if="download" :download="download" />
            </div>
        </ImageWrapper>
        <Info v-if="info" :info="info" />
        <QuestionList v-if="questions" :questions="questions" />
    </div>
  </div>
</template>

<script>
import ImageWrapper from '@/components/ImageWrapper';
import Description from '@/components/Description';
import Download from '@/components/Download';
import Info from '@/components/Info';
import QuestionList from '@/components/QuestionList';
export default {
  components: {
    ImageWrapper, Description, Download, Info, QuestionList
  },
  props: {
    image: String,
    description: {
      title: String,
      text: String,
      links: Array,
      slider: Array,
    },
    download: {
      title: String,
      text: String,
      image: String,
    },
    info: {
      title: String,
      items: Array,
    },
    questions: Array
  }
}
</script>
