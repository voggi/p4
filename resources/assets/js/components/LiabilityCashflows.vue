<script>
      import Chart from './Chart.vue';
      import Colors from '../classes/Colors.js';

      export default {
            mixins: [Chart],

            computed: {
                  data() {
                        let colors = new Colors();

                        return {
                              labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027'],
                              datasets: [{
                                    label: 'Pensioners',
                                    backgroundColor: colors.next(),
                                    data: [10, 11, 12, 13, 14, 15, 16, 17, 18, 19]
                              }, {
                                    label: 'Deferreds',
                                    backgroundColor: colors.next(),
                                    data: [2, 2, 2, 3, 3, 3, 3, 3, 4, 4]
                              }, {
                                    label: 'Actives',
                                    backgroundColor: colors.next(),
                                    data: [2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
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
                                    text: 'Liability Cashflows'
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