@component('mail::message')
# Introduction

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
	{{ $msg->message }}
@endcomponent


@component('mail::button', ['url' => '', 'color' => 'green'])
	Creer un compte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
