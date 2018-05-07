<script>
      import Chart from './Chart.vue';
      import Colors from '../classes/Colors.js';

      export default {
            mixins: [Chart],

            computed: {
                  data() {
                        let colors = new Colors();
                        let backgroundColors = [colors.next(), colors.next(), colors.next(), colors.next()];

                        return {
                              labels: ['Equity', 'Credit', 'Rates', 'Illiquid'],
                              datasets: [{
                                    label: '2018',
                                    backgroundColor: backgroundColors,
                                    data: [35, 35, 15, 15]
                              }, {
                                    label: '2017',
                                    backgroundColor: backgroundColors,
                                    data: [30, 40, 20, 10]
                              }]
                        };
                  },

                  type() {
                        return 'pie';
                  },

                  options() {
                        return {
                              title: {
                                    display: true,
                                    text: 'Asset Allocation'
                              },
                              tooltips: {
                                    mode: 'index',
                                    intersect: false
                              },
                              responsive: true,
                              legend: {
                                    position: 'bottom'
                              }
                        };
                  },

                  height() {
                        return 200;
                  }
            }
      }
</script>