<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Judge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Loading Bootstrap -->
        <link href="flat-ui-dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Loading Flat UI -->
        <link href="flat-ui-dist/css/flat-ui.css" rel="stylesheet">
		
		{{-- Loading Lobibox Notification --}}
        <link rel="stylesheet" href="lobibox-dist/css/Lobibox.min.css"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand" href="/">Grader</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/about">About</a></li>
                    <li><a href="/projects">Project</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <p class="navbar-text navbar-right">Signed in as <a class="navbar-link" href="#">Mark Otto</a></p>
            </div><!-- /.navbar-collapse -->
        </nav><!-- /navbar -->
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            

            <div class="content">
                <div class="title m-b-md">
                    Online Judge </br> <small>Soon.</small>
                </div>
                <button id="onClickUrlDefault" class="btn btn-hg btn-primary">
                  Subscribe Now!
                </button>
            </div>
        </div>
        {{-- Loading Flat UI js --}}
        <script src="flat-ui-dist/js/vendor/jquery.min.js"></script>
        <script src="flat-ui-dist/js/vendor/video.js"></script>
        <script src="flat-ui-dist/js/flat-ui.min.js"></script>
        {{-- Loading Lobibox js --}}
        <script src="lobibox-lib/jquery.1.11.min.js"></script>
  		<script src="lobibox-dist/js/Lobibox.min.js"></script>

  		<script>
			
			$('#onClickUrlDefault').click(function () {
	            Lobibox.notify('success', {
					size: 'mini',
					rounded: true,
					delay: false,
					position: 'center top', //or 'center bottom'
					msg: 'You have got trolled',
                    img: 'http://eatforum.org/wp-content/themes/eat3/assets/img/logo-circle-orange-text-white.svg'
	            });
	        });

  		</script>
    </body>
</html>
