<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        @include('_partials.lang')
        <h1>{{__('welcome.hello')}}</h1>
        <p>{{ __('auth.password') }}</p>
    </body>
</html>
