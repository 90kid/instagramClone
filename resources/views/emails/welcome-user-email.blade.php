@component('mail::message')
# Hello,

:>

@component('mail::button', ['url' => 'https://laravel.com/docs/7.x/cache'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
