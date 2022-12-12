<div>
    <script>
        window.addEventListener('visibilitychange', function logData(event) {
            let data = new FormData();
            data.append('_token', '{{ csrf_token() }}');
            data.append('pageViewId', '{{ $pageView->id }}');
            if (document.visibilityState === 'visible') {
                // Log data to analytics
                navigator.sendBeacon('/analytics/enter', data);
            }
            if (document.visibilityState === 'hidden') {
                // Log data to analytics
                navigator.sendBeacon('/analytics/leave', data);
            }
        });
    </script>
</div>
