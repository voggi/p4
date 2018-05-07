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
                                    label: '2018',
                                    backgroundColor: colors.next(),
                                    data: [-1, 1, -3, -2, 3]
                              }, {
                                    label: '2017',
                                    backgroundColor: colors.next(),
                                    data: [6, 1, 0, 3, 2]
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
                                    text: 'Asset Performance'
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