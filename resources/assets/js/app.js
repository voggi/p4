
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('chart', require('./components/Chart.vue'));
Vue.component('funded_status', require('./components/FundedStatus.vue'));
Vue.component('funding_ratio', require('./components/FundingRatio.vue'));
Vue.component('asset_performance', require('./components/AssetPerformance.vue'));
Vue.component('asset_allocation', require('./components/AssetAllocation.vue'));
Vue.component('return_attribution', require('./components/ReturnAttribution.vue'));
Vue.component('liability_cashflows', require('./components/LiabilityCashflows.vue'));

const app = new Vue({
    el: '#app'
});
