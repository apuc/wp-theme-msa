<template>
  <div id="app">
    <Header />
    <router-view/>
    <Footer />
  </div>
</template>

<script>

import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header, Footer
  }
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.a {
    stroke: #707070;
}

.b, .c {
    font-size: 13px;
    font-family:'Montserrat','Montserrat-Medium', sans-serif;
    font-weight: 500;
}

.c {
    letter-spacing: 0.007em;
}

.d {
    font-size: 52px;
    font-family: 'Montserrat','Montserrat-Medium', sans-serif;
    font-weight: 600;
    letter-spacing: -0.02em;
}

.e {
    clip-path: url(#a);
}

.f {
    fill: #c4f3ff;
}

.g {
    fill: #97e3ff;
}

.h {
    fill: #70d8ff;
}

.i {
    fill: #2ac8ff;
}

.j {
    fill: #07b9fc;
}

.k {
    fill: #0da1fb;
}

.l {
    fill: #018bf3;
}

.m {
    fill: #0174e6;
}

.n {
    fill: #0058db;
}

.o {
    fill: #003fbe;
}

.p {
    fill: #00339a;
}

.q {
    fill: #001d6e;
}

.involucre{
    display: flex;
}

.container {
    position: relative;
    height: 100%;
    margin: 0 auto;
    width: 100%;
    max-width: 1170px;
}

@media screen and (max-width: 800px) {
    .mobile-hidden {
        display: none;
    }
}
</style>
