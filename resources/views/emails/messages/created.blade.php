@component('mail::message')
# Salut HappyDay voici un message :

- Nom : {{ $name }}
- Email : {{ $email }}
- Sujet : {{ $subject }}



@component('mail::panel')
- Message : {{ $msg }}
@endcomponent


Merci,<br>
{{ config('app.name') }}
@endcomponent
