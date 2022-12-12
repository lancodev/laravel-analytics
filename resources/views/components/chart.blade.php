@props([
    'title' => '',
    'type' => 'bar',
    'labels' => [],
    'values' => [],
])

<div
        x-data="{
        labels: {{ $labels }},
        values: {{ $values }},
        title: @js($title),
        type: @js($type),
        init() {
            const autocolors = window['chartjs-plugin-autocolors'];
            let chart = new Chart(this.$refs.canvas.getContext('2d'), {
                type: this.type,
                data: {
                    labels: this.labels,
                    datasets: [{
                        data: this.values
                    }]
                },
                plugins: [autocolors],
                options: {
                    interaction: { intersect: false },
                    scales: { y: { beginAtZero: true }},
                    plugins: {
                        title: { display: true, text: this.title.toString() },
                        legend: { display: false },
                        tooltip: {
                            displayColors: false
                        },
                        autocolors: {
                            mode: 'data'
                        }
                    }
                }
            })

            this.$watch('values', () => {
                chart.data.labels = this.labels
                chart.data.datasets[0].data = this.values
                chart.update()
            })
        }
    }"
>
    <canvas x-ref="canvas" {{ $attributes->merge(['class' => 'rounded-lg bg-white p-8']) }}></canvas>
</div>
