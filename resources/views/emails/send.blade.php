<x-mail::message>
# Introduction

Hello,

This is a test email.

Name : {{ $data['nama']}}
Email : {{ $data['email']}}
Message : {{ $data['pesan']}}


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
