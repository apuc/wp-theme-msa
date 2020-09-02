<template>
    <section class="questions">
        <div class="container">
            <ul class="questions__description">
                <QuestionItem v-for="question in questions" :key="question.text" :question="question" />
                <li class="questions__information">
                    <h3 class="questions__information--title">Остались вопросы?</h3>
                    <p class="questions__information--text">Напишите нам мы ответим как можно быстрее.</p>
                    <div class="questions__information--btn">
                        <span class="btn__text">задать вопрос</span>
                        <a href="#" class="link-detailed--button"></a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</template>

<script>
import QuestionItem from '@/components/QuestionItem';
export default {
    name: "QuestionList",
    props: {
        questions: Array,
    },
    components: {
        QuestionItem
    }
}
</script>

<style scoped>
.questions__description{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    opacity: 1;
}


.questions__description--text{
    display: block;
    padding: 89px 5px 73px 100px;
    box-sizing: border-box;
    text-align: left;
    font-family: 'Montserrat',sans-serif;
    font-weight: 500;
    font-size: 20px;
    line-height: 26px;
    color: #000000;
}

.questions__information{
    position: relative;
    z-index: 0;
    flex: 1 0 34%;
    height: 240px;
    color: #fff;
}
.questions__information:after{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,.5);
    z-index: -1;
}
.questions__information--title{
    max-width: 302px;
    width: 100%;
    padding-top: 54px;
    padding-bottom: 11px;
    padding-left: 73px;
    font-size: 32px;
    font-family: 'Montserrat',sans-serif;
    font-weight: 500;
    line-height: 36px;
    text-align: left;
    text-transform: uppercase;
    color: #FFFFFF;
}
.questions__information--text{
    max-width: 263px;
    width: 100%;
    padding: 17px 0 23px 73px;
    font-family: 'Montserrat',sans-serif;
    font-size: 18px;
    font-weight: 100;
    line-height: 24px;
    text-align: left;
    color: #ffffff;
}
.questions__information--btn{
    position: absolute;
    right: 0;
    bottom: 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 289px;
    height: 100px;
    background-color: #FFFFFF;
}

.btn__text {
    display: inline-block;
    padding: 39px 26px;
    font-family: 'Montserrat',sans-serif;
    font-weight: 500;
    font-size: 18px;
    line-height: 24px;
    color: #000000;
}
</style>
