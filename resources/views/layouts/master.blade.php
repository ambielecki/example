<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Application Title')</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta lang="en">
    {{--<link rel='icon' href='/images/favicon.ico'>--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/example.css">
    @yield('head')
</head>

<body>
{{-- Flash Message Code --}}
<div class="container-fluid">
    @if(\Session::has('flash_message'))
        <div class="row flashmessage">
            <div class="col-sm-12">
                {{\Session::get('flash_message')}}
            </div>
        </div><br>
    @endif
</div>


{{-- Bootstrap header and nav --}}

<div class="jumbotron" id="site_brand">
    <div class="container">
        <h1><a href="/">Example Title</a></h1>
    </div>
</div>
{{-- create the shared navbar --}}
<div class = "container-fluid" id="nav_container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            {{-- Brand and toggle get grouped for better mobile display --}}
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#llnavbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home</a>
            </div>{{-- end no collapse area --}}
            {{-- Collect the nav links, forms, and other content for toggling --}}
            <div class="collapse navbar-collapse" id="llnavbar">
                {{-- collapsable area --}}
                <ul class="nav navbar-nav">
                    <li><a href="#">Single Page</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown 1</a></li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated Dropdown</a></li>
                        </ul>
                    </li>
                    <li><a href="/live">Live Link</a></li>
                    <li><a href="/data">Data Page</a></li>
                    <li><a href="/form">Form Page</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#">Push Right</a>
                    </li>
                </ul>
            </div>{{-- /.navbar-collapse --}}
        </div>{{-- /.container-fluid --}}
    </nav>
</div>
{{-- create the news feed this will be persistent across all pages--}}

{{-- Content --}}
@yield('content')

{{-- create a footer with copyright and social media links --}}
<footer>
    <div class="container-fluid" id="footer_div">
        <div class="col-sm-2 text-center">
            &copy; <?php echo(date('Y')); ?> Andrew Bielecki
        </div>
        <div class="col-sm-2 col-sm-offset-3 text-center">
            <a href="https://github.com/ambielecki/biking">View Project on Github <i class="fa fa-github"></i></a>
        </div>
    </div>
</footer>

{{-- Load jquery and bootstrap js --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('body')

</body>
</html>
