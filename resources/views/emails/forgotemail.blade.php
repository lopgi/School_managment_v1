@component('mail::message')
Hello
{{$user->name}}
@component('mail::button',['url'=>url('reset_password/'.$user->remember_token)])
reset your password
@endcomponent
Thanks
<br>
{{config('app.name')}}

@endcomponent
