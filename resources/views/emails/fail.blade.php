@component('mail::message')
# Introduction

Dear {{$email}},
<br>
<br>
{{$message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
