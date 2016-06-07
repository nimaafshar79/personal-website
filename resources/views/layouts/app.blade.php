<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وبسایت شخصی نیما افشار</title>

    <!-- Fonts -->
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'--}}
    {{--type='text/css'>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>--}}
            <!-- Styles -->
    {!! Html::style("css/bootstrap.min.css") !!}
    {!! Html::style("css/custom.css") !!}
    {!! Html::script("js/jquery.min.js") !!}
    {!! Html::script("js/bootstrap.min.js") !!}
    <style>

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <div style="text-align: right;direction: rtl;margin-top: -10px;font-family: Ghasem;">
                    نیما
                    <br/>
                    &nbsp;&nbsp;&nbsp;افشار
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li @if(Request::is("blog") || Request::is("article")) class="active" @endif ><a  href="{{url("blog")}}">وبلاگ</a></li>
                <li @if(Request::is("information")) class="active" @endif ><a  href="{{url("information")}}">درباره</a></li>
                <li @if(Request::is("contact")) class="active" @endif ><a  href="{{url("contact")}}">ارتباط</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if($user)
                    {{--User Logged in--}}
                    <li class="dropdown">
                        <a href="#menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">{{$user->name}} &nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url("article/create")}}">نوشتن پست</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url("profile")}}">پروفایل</a> </li>
                            <li><a href="{{url("logout")}}">خروج</a></li>
                        </ul>
                    </li>
                @else
                    @if(! Request::is("register"))
                        <li><a href="{{url("register")}}">
                            <span class="text-primary">
                            ثبت نام
                            </span>
                            </a></li>
                    @endif
                    @if(! Request::is("login"))
                        <li><a href="{{url("login")}}">
                            <span class="text-primary">
                            ورود
                            </span>
                            </a></li>
                    @endif
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@yield('content')

        <!-- JavaScripts -->
{!! Html::script("js/jquery.min.js") !!}
{!! Html::script("js/bootstrap.min.js") !!}
</body>
</html>
