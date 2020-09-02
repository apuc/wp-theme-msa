<template>
    <footer class="footer">
        <section class="container">
            <div class="contacts">
                <Logo />
                <div class="contacts__information">
                    <a class="contacts__information-tel" href="tel:+386 (0) 51 875 215">+386 (0) 51 875 215</a>
                    <a class="contacts__information-mail" href="mailto:info@radian.si">info@radian.si</a>
                </div>
            </div>
        </section>
        <section class="information-navigation">
            <div class="container involucre">
                <div class="information">
                    <h4><a href="DIGITALIZATION.html" class="information__title">цифровизация</a></h4>
                    <ul>
                        <li>
                            <a class="information__list--link" href="digitalization(review).html">цифровизация обзор</a>
                        </li>
                        <li>
                            <a class="information__list--link" href="digitalizationBusiness.html">цифровизация вопросы
                                бизнеса</a>
                        </li>
                    </ul>
                </div>
                <div class="information">
                    <h4><a href="Industry4.0.html" class="information__title">industry 4.0</a></h4>
                    <ul>
                        <li>
                            <a class="information__list--link" href="Industry4.0(review).html">industry 4.0 обзор</a>
                        </li>
                        <li>
                            <a class="information__list--link" href="Industry4.0(businessIssues).html">industry 4.0 вопросы
                                бизнеса</a>
                        </li>
                    </ul>
                </div>
                <div class="information">
                    <h4><a href="ourSolution.html" class="information__title">наши решения</a></h4>
                    <ul class="information__list">
                        <li class="information__list--page"><a class="information__list--link" href="MSA(review).html">MSA
                            обзор</a></li>
                        <li class="information__list--page"><a class="information__list--link" href="MSAmodules.html">MSA
                            модули</a></li>
                        <li class="information__list--page"><a class="information__list--link" href="ImplementingMsa.html">внедрение
                            msa</a></li>
                        <li class="information__list--page"><a class="information__list--link" href="aboutUs.html">о нас</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="container copyright">
            <p class="copyright__text">&copy;2020 RADIAN, svetovanje d.o.o.</p>
            <div class="contacts contacts--modification">
                <p class="copyright__description">Дизайн, создание контента, разработка и поддержка сайта</p>
                <a class="copyright__link" href="https://radian.si">
                    <svg xmlns="http://www.w3.org/2000/svg" width="205.999" height="31.078"
                        viewBox="0 0 205.999 31.078">
                        <path class="a" d="M1028.818,185.74v25.595L999.333,186v30.818h2.441v-25.5l29.485,25.336V185.74Z"
                            transform="translate(-825.259 -185.739)"/>
                        <path class="a"
                            d="M831.514,211.946h3.047a16.045,16.045,0,0,1,26.575,0h2.96l-16.99-30.916Zm26.384-6.4a18.314,18.314,0,0,0-20.75.443l10.046-19.92Z"
                            transform="translate(-699.661 -181.03)"/>
                        <rect class="a" width="2.441" height="30.913" transform="translate(121.266 0.002)"/>
                        <path class="a"
                            d="M626.036,185.74H610.579v30.913h15.457a15.457,15.457,0,1,0,0-30.913m0,28.473H613.02V188.181h13.016a13.016,13.016,0,0,1,0,26.032"
                            transform="translate(-530.384 -185.738)"/>
                        <path class="a"
                            d="M435.24,211.946h3.047a16.044,16.044,0,0,1,26.574,0h2.96l-16.99-30.916Zm26.384-6.4a18.314,18.314,0,0,0-20.75.443l10.046-19.92Z"
                            transform="translate(-398.078 -181.03)"/>
                        <path class="a"
                            d="M314.124,197.943a12.216,12.216,0,0,0-12.2-12.2H282.7v30.913h2.44v-6.507h10.709a15.835,15.835,0,0,1,12.756,6.507h2.943a18.438,18.438,0,0,0-7.1-6.773,12.221,12.221,0,0,0,9.677-11.937m-12.2,9.762H285.137V188.181h16.784a9.762,9.762,0,0,1,0,19.524"
                            transform="translate(-282.697 -185.738)"/>
                    </svg>
                </a>
            </div>
        </section>
    </footer>
</template>


<script>

import Logo from '@/components/Logo.vue'

export default {
  name: 'Home',
  components: {
    Logo
  }
}
</script>

<style lang="scss">
    .footer{
        background-color: #000000;

        .header__logotype{
            tspan {
                fill: #fff !important;
            }
        }
    }
    .contacts{
        display: flex;
        justify-content: space-between;
        padding: 40px 0;

        &__information-tel {
            display: block;
            text-align: right;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            color: #FFFFFF;
        }

        &__information-mail{
            display: block;
            text-align: right;
            text-decoration: none;
            font-family: 'Roboto-Regular',sans-serif;
            font-weight: 100;
            font-size: 16px;
            line-height: 19px;
            color: #FFFFFF;
        }

        &--modification{
            flex-direction: column;
            width: 232px;
        }
    }
    .information-navigation, .menu{
        padding-top: 40px;
        padding-bottom: 50px;
        border-top: 1px solid #1a1a1a;
        border-bottom: 1px solid #1a1a1a;
        
    }
    .information {
        padding-right: 30px;

        &__list{
            height: 60px;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;

            &--page {
                padding-right: 20px;
                text-align: left;
                font-family: 'Montserrat',sans-serif;
                font-size: 15px;
                line-height: 30px;
                font-weight: 300;
                color: #FFFFFF;
            }
            &--link{
                text-align: left;
                font-family: 'Montserrat',sans-serif;
                font-size: 15px;
                line-height: 30px;
                font-weight: 300;
                color: #FFFFFF;
                text-decoration: none;
            }
        }
        &__title{
            text-align: left;
            font-family: 'Montserrat-Medium',sans-serif;
            font-size: 26px;
            font-weight: 300;
            line-height: 36px;
            color: #FFFFFF;
            text-decoration: none;
        }
    }

    .copyright{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 25px;
        padding-bottom: 30px;

        .a {
            fill: #fff
        }

        &__text{
            text-align: left;
            font-family: 'Roboto-Regular',sans-serif;
            font-weight: 100;
            font-size: 14px;
            line-height: 17px;
            color: #989898;
        }
        &__description{
            padding-bottom: 15px;
            text-align: right;
            font-family: 'Roboto-Regular',sans-serif;
            font-weight: 100;
            font-size: 14px;
            line-height: 17px;
            color:#989898;
        }
    
        &__link{
            display: block;
            text-align: right;
        }
    }

</style>