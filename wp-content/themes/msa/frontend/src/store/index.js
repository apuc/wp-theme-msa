import Vue from 'vue';
import Vuex from 'vuex';
import axios from '@/api';

Vue.use(Vuex)

const emitAction = (mutation, commit, payload) => {
  return new Promise((resolve, reject) => {
    axios.get(`${process.env.VUE_APP_LOCAL_URL}/wp-json/wp/v2/pages?slug=`+payload)
      .then(res => {
        commit(mutation, res.data);
        resolve(res.data);
      })
      .catch(error => {
        console.log('Error', error.message);
        reject(error);
      })
  });
}

export default new Vuex.Store({
  state: {
    content: [],
    left_page_menu: [],
    top_page_menu: [],
  },
  mutations: {
    GET_CONTENT: (state,payload) => {
      state.content = payload.content;
    },
    GET_LEFT_PAGE_MENU: (state,payload) => {
      state.left_page_menu = payload[0].left_page_menu;
    },
    GET_TOP_PAGE_MENU: (state,payload) => {
      state.top_page_menu = payload[0].top_page_menu;
    },
  },
  actions: {
    getContent({commit}, payload) {
      return emitAction('GET_CONTENT', commit, payload);
    },
    getLeftPageMenu({commit}, payload) {
      return emitAction('GET_LEFT_PAGE_MENU', commit, payload);
    },
    getTopPageMenu({commit}, payload) {
      return emitAction('GET_TOP_PAGE_MENU', commit, payload);
    },
  },
  getters: {
    getContent: state => state.content,
    getTopPageMenu: state => state.top_page_menu,
    getLeftPageMenu: state => state.left_page_menu,
  }
})
