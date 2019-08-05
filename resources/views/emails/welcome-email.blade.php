@component('mail::message')
# Welcome to Copygram

This is a community of fellow developers and we love that you have joined us

@component('mail::button', ['url' => config('app.url')])
Click to access
@endcomponent

All the best,<br>
{{ config('app.name') }}
@endcomponent
