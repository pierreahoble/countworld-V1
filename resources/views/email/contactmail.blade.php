@component('mail::message')
# Message de : {{ $data['nom'] }}
# Email : {{ $data['email'] }} 

Sujet : {{ $data['sujet'] }} <br> <br>
Message : {{ $data['message'] }}

@component('mail::button', ['url' => '','color'=>'success'])
Valider
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
