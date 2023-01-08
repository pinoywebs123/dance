@component('mail::message')
# Introduction

Hi {{$email}}
<br>
To change your password. Click link below

@component('mail::button', ['url' => route('new_password',$token)])
Change Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
