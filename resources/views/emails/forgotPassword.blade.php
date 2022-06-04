@component('mail::message')
    Hi {{$user->name}},

    This email was sent in response to your request to reset your password on
    {{ config('app.name') }}

    To reset your password, please click on the button below:

    <a href="https://api.alumates.com/password/reset/{{$passwordReset->reference}}">
        <button type="button" class="email-link-button">Reset Password</button>
    </a>

    Thanks,<br>
{{ config('app.name') }}
@endcomponent
