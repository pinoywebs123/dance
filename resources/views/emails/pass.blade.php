@component('mail::message')
# Introduction

Dear {{$email}},
<br>
<br>
{{$message}}

@component('mail::button', ['url' => route('new_password',$token)])
Change Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
