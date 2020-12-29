<!-- Inisialisasi HTML pada file php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Judul pada bar browser -->
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Untuk mengatur tampilan CSS -->
        <style>
            /* Tampilan untuk seluruh halaman  */
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            /* Tampilan untuk class yang lebih spesifik */
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
                color : #e5707e;
                font-weight : 600;
            }

            .title {
                font-size: 84px;
            }

            .subtitle{
                font-size :40px;
                color: #df7861 ;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>

    <!-- Bagian body dari HTML -->
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Bagian content isi dari web -->
            <div class="content">
                <div class="title m-b-md">
                    Zanuar Rahmat 
                    <br>
                        <div class="subtitle">
                            ini contoh subtitle
                        </div>
                </div>
            
            <!-- Link  -->
                <div class="links">
                    <a href="https://www.instagram.com/rahmatzanuar/" style =color:#DD2A7B >Instagram</a>
                    <a href="https://www.facebook.com/zanuar.rahmat35/" style=color:#3b5998>Facebook</a>
                    <a href="https://github.com/zanuar35" style=color:#211F1F>GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
