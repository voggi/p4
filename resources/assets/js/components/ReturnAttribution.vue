<script>
      import Chart from './Chart.vue';
      import Colors from '../classes/Colors.js';

      export default {
            mixins: [Chart],

            computed: {
                  data() {
                        let colors = new Colors();

                        return {
                              labels: ['YtD', 'April', 'March', 'February', 'January'],
                              datasets: [{
                                    label: 'Total',
                                    type: 'line',
                                    fill: false,
                                    borderColor: colors.next(),
                                    borderWidth: 2,
                                    data: [2, 1, -3, -5, 2]
                              }, {
                                    label: 'Equity',
                                    type: 'bar',
                                    backgroundColor: colors.next(),
                                    data: [1, 2, -4, -5, 1]
                              }, {
                                    label: 'Credit',
                                    type: 'bar',
                                    backgroundColor: colors.next(),
                                    data: [1, 0, -1, -2, 1]
                              }, {
                                    label: 'Rates',
                                    type: 'bar',
                                    backgroundColor: colors.next(),
                                    data: [-1, -2, 1, 2, -2]
                              }, {
                                    label: 'Illiquid',
                                    type: 'bar',
                                    backgroundColor: colors.next(),
                                    data: [1, 1, 1, 0, 2]
                              }]
                        };
                  },

                  type() {
                        return 'bar';
                  },

                  options() {
                        return {
                              title: {
                                    display: true,
                                    text: 'Return Attribution'
                              },
                              tooltips: {
                                    mode: 'index',
                                    intersect: false
                              },
                              responsive: true,
                              scales: {
                                    xAxes: [{
                                          stacked: true,
                                    }],
                                    yAxes: [{
                                          stacked: true
                                    }]
                              },
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