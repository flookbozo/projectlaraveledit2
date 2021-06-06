import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    loginid : localStorage.getItem('loginid') || ""
  },
  mutations: {
    setloginid(state, value){
      state.loginid = value
      localStorage.setItem('loginid', state.loginid);
    }
  },
  actions: {
    setloginid(context,value){
      context.commit("setloginid",value);
    }
  },
  getters :{
    getloginid(state){
      return state.loginid
    }
  },
  modules: {
  }
})
