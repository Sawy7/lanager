@include('components.alerts.alert', ['messages' => session('error'), 'type' => 'danger'])
@include('components.alerts.alert', ['messages' => session('warning'), 'type' => 'warning'])
@include('components.alerts.alert', ['messages' => session('success'), 'type' => 'success'])
@include('components.alerts.alert', ['messages' => session('info'), 'type' => 'info'])