<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    @yield('head')
</head>

<div class="overlay"></div>
<nav class="navbar navbar-expand-md bg-inverse fixed-top menu-bg">
    <div class="container">
        <a href="/" class="navbar-brand">Smartlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/prototype/strategies/description/intro">Prototype</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="felixnoren.se/exjobb">Decision Support Tool</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('pageheader')
@yield('body')


</html>