<template>
    <div class="container">
        <header class="header__wrap wrap-line">
            <Logo />
            <MenuButton />
        </header>
    </div>
</template>

<script>

import Logo from '@/components/Logo.vue'
import MenuButton from '@/components/MenuButton.vue'

export default {
  name: 'Home',
  components: {
    Logo, MenuButton
  }
}
</script>


<style scoped lang="scss">
    .header {
        
        height: 970px;

        &__logotype--link .b, 
        &__logotype--link .c,
        &__logotype--link .d {
            fill: black;
        }

        &__wrap {
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
            flex-direction: row;
        }

        &__logotype {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        &__article {            
            padding-top: 221px;
            padding-bottom: 30px;
            width: 445px;
            min-height: 610px;
            height: 100%;
            box-sizing: border-box;

            &--title {
                min-height: 190px;
                height: 100%;
                padding-bottom: 20px;
                text-transform: uppercase;
                font-family: 'Montserrat',sans-serif;
                font-size: 46px;
                line-height: 56px;
                font-weight: 500;
                color: #FFFFFF;
            }

            &--decription {
                min-height: 152px;
                height: 100%;
                padding-bottom: 52px;
                font-family: 'Montserrat',sans-serif;
                font-size: 18px;
                line-height: 26px;
                font-weight: 300;
                color: #FFFFFF;
            }
        }
        &__download {
            position: relative;
            height: 100px;
        }
    }
</style>