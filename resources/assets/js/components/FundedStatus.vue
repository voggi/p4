<script>
      import Chart from './Chart.vue';
      import Colors from '../classes/Colors.js';

      export default {
            mixins: [Chart],

            computed: {
                  data() {
                        let colors = new Colors();
                        let dboColor = colors.next()
                        let provisionsColor = colors.next();
                        let assetColor = colors.next();

                        return {
                              labels: ['DBO', 'Assets / Provisions'],
                              datasets: [{
                                    label: 'DBO',
                                    backgroundColor: dboColor,
                                    stack: '2018',
                                    data: [2700, 0]
                              }, {
                                    label: 'Provisions',
                                    stack: '2018',
                                    backgroundColor: provisionsColor,
                                    data: [0, 500]
                              }, {
                                    label: 'Assets',
                                    stack: '2018',
                                    backgroundColor: assetColor,
                                    data: [0, 2200]
                              }, {
                                    label: 'DBO',
                                    backgroundColor: dboColor,
                                    stack: '2017',
                                    data: [3200, 0]
                              }, {
                                    label: 'Provisions',
                                    stack: '2017',
                                    backgroundColor: provisionsColor,
                                    data: [0, 1000]
                              }, {
                                    label: 'Assets',
                                    stack: '2017',
                                    backgroundColor: assetColor,
                                    data: [0, 2200]
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
                                    text: 'Funded Status'
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