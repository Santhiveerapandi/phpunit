<x-mail::message>
# Introduction

Welcome to our Website {{ config('app.name') }}
<x-mail::button :url="$url" color="success">
Welcome
</x-mail::button>
<x-mail::table>
| Name       | Age         | Sex  |
| ------------- |:-------------:| --------:|
| K.Santhiveerapandi      | 39      | Male      |
| R.Aishwarya           | 35 | Female      |
| Vivek           | 35 | Male      |
| P.Kavitha           | 35 | Female      |
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
