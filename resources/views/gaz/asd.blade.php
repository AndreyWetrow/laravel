<h1>Привет, {{ $name or '' }}</h1>
<h1>Мне, {{ $age or '' }} лет!</h1>

@verbatim
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim

@unless (false)
    You are not signed in.
@endunless

@auth 
    Я авторизован
@endauth

@guest 
    Я гость
@endguest
 

@include ('welcome');