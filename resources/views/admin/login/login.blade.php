<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="eng">

<head>
    <title>Admin Login Form</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Portrait Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('public/Admin/login/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{ asset('public/Admin/login/css/font-awesome.css') }}">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Bootstrap Core CSS -->
    <link href="{{ asset('public/Admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('public/Admin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('public/Admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('public/Admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- //online-fonts -->
</head>

<body>
    <!--header-->
    <div class="header-w3l">
        <h1>
            <span>A</span>dmin
            <span>L</span>ogin
            <span>F</span>orm</h1>
    </div>
    <!--//header-->
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <img src="{{ asset('public/Admin/login/images/profile.jpg') }}" alt="" />
            <h2>Md. Rubel Rana</h2>
            {!! Form::open(['url'=>'/login','method'=>'POST']) !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                        {{ Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Enter you email']) }}
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> 
                        {{ Form::password('password',['class'=>'form-control', 'placeholder'=>'Enter you password']) }}
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="sub-w3l">
                    <div class="sub-agile">
                        <input type="checkbox" id="brand1" value="">
                        <label for="brand1">
                            <span></span>Remember Me</label>
                    </div>
                    <div class="clear"></div>
                </div>

                    <div class="form-group"> 
                        {{ Form::submit('Login',['class'=>'btn btn-success btn-block','name'=>'btn']) }}
                    </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!--//main-->


        <!-- jQuery -->
    <script src="{{ asset('public/Admin/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/Admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('public/Admin/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/Admin/dist/js/sb-admin-2.js') }}"></script>
</body>

</html>