import VueRouter from 'vue-router'

window.Vue = require('vue');

Vue.config.productionTip = false;


Vue.component('comment', require('./src/components/comments/Comment.vue'));
Vue.component('comment-list', require('./src/components/comments/Comment-list.vue'));
Vue.component('comment-form', require('./src/components/comments/Comment-form.vue'));

Vue.component('like', require('./src/components/Like.vue'));
//Vue.component('blog-post', require('./src/components/posts/Post.vue'));



window.Event = new Vue();

Vue.use(VueRouter);

const router = new VueRouter({
	routes: routes
});

const app = new Vue({
  el: '#app',
  router,
  // mounted() {
  //   $('[data-confirm]').on('click', function () {
  //     return confirm($(this).data('confirm'))
  //   })
  // }
});


