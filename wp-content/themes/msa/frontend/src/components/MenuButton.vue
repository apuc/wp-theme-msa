<template>
    <button class="btn__open">
        <span class="btn__open--text">меню</span>
        <span class="btn__open--icon">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </span>
    </button>
</template>

<style scoped lang="scss">
    .btn {
        &__close,
        &__open {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 193px;
            height: 100px;
            border: none;
            background: none;
            cursor: pointer;
            z-index: 1;

            &--text {
                display: block;
                text-align: right;
                font-family: 'Montserrat',sans-serif;
                font-size: 18px;
                font-weight: 500;
                line-height: 46px;
                color: #282828;
            }
        }

        &__open--icon {
            position: relative;
            display: block;
            width: 100px;
            height: 100px;
            padding: 35px;
            border: none;
            background: #005AC1 0 0 no-repeat padding-box;
            box-sizing: border-box;
        }
        &__close--icon {
            position: relative;
            display: block;
            width: 100px;
            height: 104px;
            background: #FFFFFF 0 0 no-repeat padding-box;

            &:before,
            &:after {
                position: absolute;
                left: 50px;
                top: 35px;
                content: ' ';
                height: 33px;
                width: 2px;
                background-color: #333;
            }

            &:before {
                transform: rotate(45deg);
            }
            &:after {
                transform: rotate(-45deg);
            }
        }
    }
    .line {
        display: block;
        width: 28px;
        height: 2px;
        margin: 6px auto;
        background: #FFFFFF 0 0 no-repeat padding-box;
    }

    @media screen and (max-width: 800px) {
        .btn__open {
            justify-content: space-around;
            &--icon {
                background-color: #fff;

                .line {
                    background: #888888
                }
            }
        }
        
    }
</style>