<!DOCTYPE html>
<html lang="en" data-page="project-management">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <link rel="stylesheet" href="css/accordion.e71eb4c8.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment:: @yield('title')</title>
    <link rel="icon" type="icon" href="ico/favicon.8a54c4b8.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    @yield('styles')
</head>

<body class="align-items-center d-flex p-5">
    <div id="page-loader">
        <div class="h-12 spinner-border w-12" role="status"> <span class="visually-hidden">Loading...</span> </div>
    </div>
    <div class="card m-auto mw-400 p-8 w-100">
        @yield('contents')
    </div>
    
    <script>var t = localStorage.getItem("sa-theme") || "1"; document.body.setAttribute("data-sa-theme", t);</script>
    <script src="{{ asset('js/index.0354f579.js') }}" type="module"></script>
    <script src="{{ asset('js/index.3ec882e8.js') }}" nomodule defer></script>
    <script src="{{ asset('js/vendor.39feb43f.js') }}" type="module"></script>
    <script src="{{ asset('js/vendor.a63cbedb.js') }}" nomodule defer></script>
    @section('scripts')
</body>
</html>