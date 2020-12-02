<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellcome to TaskGo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow: hidden;
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
            .top-center {
                position: absolute;
                align: center;
                top: 18px;
            }
            #timer{
                font-weight:700;
                font-family: bold;
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
                font-size: 13px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
            <div class="top-center">
            Deadline: <span id="timer"></span>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    TaskGo
                </div>
                <p>v1.1.2</p>
                <h2>Your destination is</h2>
                <div class="links">
                    <a target="_blank" href="https://laravel.com/docs">Docs</a>
                    <a href="mailto: phsang49@gmail.com">Contact</a>
                    <a href="/home">View</a>
                    <a target="_blank" href="https://www.facebook.com/HoangSang17TH">Author</a>
                    <a target="_blank" href="https://github.com/hoangsang17th/TaskE">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    var getYear = new Date().getFullYear();
    var countDownDate = new Date("Dec 25, "+ getYear +" 7:30:00").getTime();
    var countdownfunction = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("timer").innerHTML = days + ' Days' +' AND '+ hours +': '+ minutes +': '+ seconds;
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
</script>