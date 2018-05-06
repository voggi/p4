<template>
    <canvas ref="canvas" :height="height"></canvas>
</template>

<script>
    import Chart from 'chart.js';

    export default {
        computed: {
            context() {
                return this.$refs.canvas.getContext('2d');
            }

            // Child component needs to implement data property

            // Child component needs to implement type property

            // Child component needs to implement options property

            // Child component needs to implement height property
        },

        watch: {
            data() {
                this.render();
            }
        },

        methods: {
            render() {
                new Chart(this.context, {
                    data: this.data,
                    type: this.type,
                    options: this.options,
                });
            }
        },

        mounted() {
            this.render();
        }
    }
</script>