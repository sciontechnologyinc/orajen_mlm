<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{url('/css/style.css')}}" rel="stylesheet" type='text/css'>
        <link href="{{url('/css/style-800.css')}}" rel="stylesheet" type='text/css'>
        <title>Orajen Marketing Corp</title>

    </head>
    <body>
        <div class='main'>
            <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                
                                <div class='title'>
                                    <img src='{{ url('/img/logo.png') }}'> 
                                    <span>ORAJEN MARKETING CORP</span>
                                </div>
                                <div class='link'>
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                </div>
                            @endauth
                        </div>
                    @endif
                    
            </div>
        </div>
        
    </body>
</html>
