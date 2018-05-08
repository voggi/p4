<script>
    import Chart from './Chart.vue';
    import Colors from '../classes/Colors.js';

    export default {
            mixins: [Chart],

            computed: {
            data() {
                let colors = new Colors();
                let backgroundColors = [colors.next(), colors.next()];

                return {
                    labels: ['Funded', 'Gap'],
                    datasets: [{
                        label: '2018',
                        backgroundColor: backgroundColors,
                        data: [77, 23]
                    }, {
                        label: '2017',
                        backgroundColor: backgroundColors,
                        data: [69, 31]
                    }]
                };
            },

            type() {
                return 'doughnut';
            },

            options() {
                return {
                    responsive: true,
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Funding Ratio'
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                };
            },

            height() {
                return 200;
            }
        }
    }
</script>