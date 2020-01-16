

Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'product-style',
      path: '/product-style',
      component: require('./components/Tool'),
    },
  ])
})
