import VueRouter from 'vue-router'

window.Vue = require('vue');

Vue.config.productionTip = false;

Vue.component('comment', require('./components/comments/Comment.vue'));
Vue.component('comment-list', require('./components/comments/Comment-list.vue'));
Vue.component('comment-form', require('./components/comments/Comment-form.vue'));

Vue.component('like', require('./components/Like.vue'));
Vue.component('blog-post', require('./components/posts/Post.vue'));



window.Event = new Vue();
Vue.use(VueRouter);

const app = new Vue({
  el: '#app',

  mounted() {
    $('[data-confirm]').on('click', function () {
      return confirm($(this).data('confirm'))
    })
  }
});


