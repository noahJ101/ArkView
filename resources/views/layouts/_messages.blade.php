@if(!empty(session('success')))
<div class="alert alert-success" roles="alert">
    {{session('success')}}
</div>
@endif

@if(!empty(session('error')))
<div class="alert alert-danger" roles="alert">
    {{session('error')}}
</div>
@endif

@if(!empty(session('payment-error')))
<div class="alert alert-error" roles="alert">
    {{session('payment-error')}}
</div>
@endif

@if(!empty(session('warning')))
<div class="alert alert-warning" roles="alert">
    {{session('warning')}}
</div>
@endif

@if(!empty(session('info')))
<div class="alert alert-info" roles="alert">
    {{session('info')}}
</div>
@endif

@if(!empty(session('secondary')))
<div class="alert alert-secondary" roles="alert">
    {{session('secondary')}}
</div>
@endif

@if(!empty(session('primary')))
<div class="alert alert-primary" roles="alert">
    {{session('primary')}}
</div>
@endif

@if(!empty(session('light')))
<div class="alert alert-light" roles="alert">
    {{session('light')}}
</div>
@endif

