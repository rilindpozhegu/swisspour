<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="alrayan1">
<head>
    <title>SwissPour</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/Group 122216.png">
    <meta name="theme-color" content="#272F34" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular-sanitize.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script  src="{{url('js/base.min.js')}}"></script>
    <script src="{{url('v4 bootstrap/bootstrap/bootstrap.min.js')}}"></script>
    <script  src="{{url('js/app.js')}}"></script>
    <script src="/js/notify.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('v4 bootstrap/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/build.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.min.css')}}">  
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree:400,700|Roboto&display=swap" rel="stylesheet">
    
    @yield('title_and_meta')
</head>
<body ng-controller="HeaderCtrl">
<div class="header">
    @include('navbar.navbar')
</div>
<div>
    @yield('content')
</div>
@include('includes.footer')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.10.0/rellax.js"></script>
    <script>
  // Also can pass in optional settings block
  var rellax = new Rellax('.rellax', {
    speed: 2,
    center: true,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
  });
</script>
</body>

</html>