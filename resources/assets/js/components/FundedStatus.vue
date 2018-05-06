<script>
      import numeral from 'numeral';
      import Chart from './Chart.vue';
      import Colors from '../classes/Colors.js';

      export default {
            mixins: [Chart],

            computed: {
                  data() {
                        return {
                              datasets: [{
                                    data: [10, 20, 30, 40, 50, 60]
                              }],
                              labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                        };
                  },

                  labels() {
                        return ['Pension Fund I']; 
                  },

                  datasets() {
                        return [2200, 2700, 500];
                  },

                  type() {
                        return 'bar';
                  },

                  options() {
                        return {
                              scales: {
                                    xAxes: [{
                                        type: 'category',
                                        labels: ['Assets', 'Liabilities', 'Provisions'],
                                    }]
                                }
                        };
                  },

                  height() {
                        return 200;
                  }
            }
      }
</script>