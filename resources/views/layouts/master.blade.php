<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    @yield('head')
</head>

<nav class="navbar navbar-default" >
    <div class="container-fluid" style="background-color: #f3f3f3">

        <ul class="navbar navbar-left">
            <li class="navitem"><a href="/">Home</a></li>
            <li class="navitem"><a href="/prototype">Prototype</a></li>
            <li class="navitem"><a href="/analysis">Decision Support Tool</a></li>
        </ul>
    </div>
</nav>
@yield('pageheader')
@yield('body')


</html>