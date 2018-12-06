@extends("layouts/master")



@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Kunskapsskolan</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <title>Kunskapsporten Obestämd artikel - KS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, shrink-to-fit=no"/>
    <meta name="DC.Identifier" scheme="URL" content="https://ks.kunskapsporten.se"/>
    <meta name="DC.Language" scheme="RFC1766" content="sv"/>
    <meta name="DC.Format" scheme="IMT" content="text/html"/>
    <meta name="DC.Type" content="text"/>
    <link rel="schema.DC" href="http://purl.org/DC/elements/1.0/"/>

    <link rel="stylesheet" type="text/css" media="all"
          href="https://ksabmartin.github.io/KunskapsskolanUI/css/kunskapsskolanUI.css"/>
  <script type="text/javascript" src="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.js?pids=embhl"></script>
    <link id="rsmod_Styles" type="text/css" rel="stylesheet"
          href="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.Styles.css?v=2.5.12.5343"/>
    <script id="req_Core" type="text/javascript"
            src="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.Core.js?v=2.5.12.5343" async=""></script>
    <script id="req_pub_Config" type="text/javascript"
            src="//f1-eu.readspeaker.com/script/8039/ReadSpeaker.pub.Config.js?v=2.5.12.5343" async=""></script>


@endsection



@section('body')
<body>
    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

@endsection
