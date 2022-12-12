<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-autocolors"></script>

    <x-analytics::chart
        :labels="$uriVisits->keys()"
        :values="$uriVisits->values()"
        title="Page Views"
        type="bar"
        class="max-h-[400px]"
    />

    <x-analytics::chart
        :labels="$browsers->keys()"
        :values="$browsers->values()"
        title="Browser Usage"
        type="pie"
        class="max-h-[400px]"
    />

    <x-analytics::chart
        :labels="$devices->keys()"
        :values="$devices->values()"
        title="Device Usage"
        type="pie"
        class="max-h-[400px]"
    />
</div>
