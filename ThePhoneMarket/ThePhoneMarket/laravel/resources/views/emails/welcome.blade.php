@component('mail::message')
# Introduction

Thank you so much for registering, {{ $user->name  }}! 

@component('mail::button', ['url' => 'http://localhost:8000/'])
Start Browsing
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent