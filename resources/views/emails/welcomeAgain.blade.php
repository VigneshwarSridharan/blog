@component('mail::message')
<h1>Introduction</h1>

<p class="sample">Hi, {{ $user->name }}</p>

@component('mail::button', ['url' => config('app.url')])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
