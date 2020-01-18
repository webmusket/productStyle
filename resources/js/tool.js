import {Tabs, Tab} from 'vue-tabs-component'

Nova.booting((Vue, router, store) => {
	Vue.component('tabs', Tabs);
    Vue.component('tab', Tab);
  router.addRoutes([
    {
      name: 'product-style',
      path: '/product-style',
      component: require('./components/Tool'),
    },
  ])
})
