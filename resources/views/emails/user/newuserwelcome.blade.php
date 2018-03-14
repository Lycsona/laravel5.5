@component('mail::message')
# Welcome {{$user->name}}

Thanks for signing up. **We really appreciated it.**

@component('mail::panel')
The email address are signed up with is: {{$user->email}}
@endcomponent

@component('mail::button', ['url' => 'http://laravel5.5/home'])
View my dashboard.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
