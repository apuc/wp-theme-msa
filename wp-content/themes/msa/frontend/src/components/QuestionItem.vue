<template>
    <li class="questions__description-page">
        <img :src="question.image" />
        <a href="#" class="questions__description--text link">{{question.text}}</a>
    </li>
</template>

<script>
export default {
    name: "QuestionItem",
    props: {
        question: {
            text: String,
            image: String,
        }
    }
}
</script>

<style scoped >
.questions__description--text.link{
    width: 60%;
    font-family: 'Montserrat',sans-serif;
    font-weight: 500;
    font-size: 20px;
    line-height: 26px;
    color: #000000;
    text-decoration: none;
}
.questions__description-page{
    display: flex;
    align-items: center;
    position: relative;
    z-index: 0;
    background: #FFF;
    box-shadow: 0 0 0 1px #E2E9ED;
    padding: 10px;
    flex: 0 0 33.3%;
    height: 240px;
    box-sizing: border-box;
    -webkit-transition: box-shadow 0.2s ease, z-index 0s 0.2s ease, -webkit-transform 0.2s ease;
    transition: box-shadow 0.2s ease, z-index 0s 0.2s ease, -webkit-transform 0.2s ease;
    transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0.2s ease;
    transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0.2s ease, -webkit-transform 0.2s ease;
}
.questions__description-page img {
    width: 70px;
    height: 70px;
    margin: 0 1rem;
}
.questions__description-page:hover{
    z-index: 1;
    box-shadow: 0 8px 50px rgba(0, 0, 0, 0.2);
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    -webkit-transition: box-shadow 0.2s ease, z-index 0s 0s ease, -webkit-transform 0.2s ease;
    transition: box-shadow 0.2s ease, z-index 0s 0s ease, -webkit-transform 0.2s ease;
    transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0s ease;
    transition: box-shadow 0.2s ease, transform 0.2s ease, z-index 0s 0s ease, -webkit-transform 0.2s ease;
    border: none;
}

.questions__description-page::before{
    content: '';
    position: absolute;
    top: 81px;
    left: 20px;
    display: block;
    width: 70px;
    height: 70px;
}
</style>