<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel " style="background-image: linear-gradient(to right, #50278B, #50278B);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        color: #ffff; height: 80px;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Blog') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
            <div class="jumbotron" style="background-image: linear-gradient(to right, #50278B, #50278B);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
            color: #ffff; height: 300px; border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            }">

            <div class="container">
                    <h4>HELLO,</h4>
                    <h4 style="width: 665px">Selamat Datang Kembali Dan Selamat Mengerjakan Pekerjaan Anda</h4>
                    <div class="row justify-content-end">
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -140px" data-name="Layer 1" width="300" height="300"
                            viewBox="0 0 697.48425 461.23435" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M772.03739,521.9677a6.816,6.816,0,0,1,4.23934-8.59309,6.63976,6.63976,0,0,1,1.06574-.25678l3.65181-14.98328,9.52107.02944-5.45015,21.08585a6.79262,6.79262,0,0,1-4.55318,7.0165A6.68025,6.68025,0,0,1,772.03739,521.9677Z"
                                transform="translate(-251.25787 -219.38283)" fill="#9f616a" />
                            <path
                                d="M788.112,512.27175l-14.5821-1.02465,7.06247-42.67513-4.49427-46.99,14.74064-6.12839,9.8301,52.18271-.02686.09511Z"
                                transform="translate(-251.25787 -219.38283)" fill="#2f2e41" />
                            <path
                                d="M675.36028,507.27008a6.75056,6.75056,0,0,1,6.62337-6.87134,6.62778,6.62778,0,0,1,1.09218.08525L691.063,487.3455l9.058,2.97424-11.53638,18.39348a6.68783,6.68783,0,0,1-13.22433-1.44314Z"
                                transform="translate(-251.25787 -219.38283)" fill="#9f616a" />
                            <polygon points="469.071 452.168 461.314 452.168 457.624 421.83 469.073 421.831 469.071 452.168" fill="#9f616a" />
                            <path
                                d="M722.3074,679.17549l-25.01181-.00094v-.32078a9.87623,9.87623,0,0,1,2.85186-6.98009,9.60472,9.60472,0,0,1,6.88343-2.89109h.00062l15.27636.00063Z"
                                transform="translate(-251.25787 -219.38283)" fill="#2f2e41" />
                            <polygon points="523.187 452.168 515.43 452.168 511.74 421.83 523.188 421.831 523.187 452.168" fill="#9f616a" />
                            <path
                                d="M776.423,679.17549l-25.01182-.00094v-.32078a9.87629,9.87629,0,0,1,2.85187-6.98009,9.6047,9.6047,0,0,1,6.88343-2.89109h.00062l15.27636.00063Z"
                                transform="translate(-251.25787 -219.38283)" fill="#2f2e41" />
                            <ellipse cx="515.81024" cy="148.59277" rx="18.42846" ry="18.68597" fill="#9f616a" />
                            <path
                                d="M760.84393,366.95084a12.35944,12.35944,0,0,1-15.21708-5.47224,12.72349,12.72349,0,0,1,3.901-15.88632c4.90489-3.32829,12.23-2.22669,16.985,1.63339a16.4326,16.4326,0,0,1,19.18179,4.03624c4.5902,5.38421,5.092,13.93075,1.74685,20.20734a22.236,22.236,0,0,0,1.27066,20.56671c-1.43927-.0595-4.60723-.32982-8.57117-.6766-1.14708-.10035-1.64319-3.51676-2.901-3.62665-1.10924-.09692-2.97036,3.11337-4.13262,3.01379-8.6087-.73756-18.24663-1.48682-22.61445-1.34025A241.58716,241.58716,0,0,1,760.84393,366.95084Z"
                                transform="translate(-251.25787 -219.38283)" fill="#2f2e41" />
                            <path
                                d="M781.20064,499.61552s5.98934,6.26095,2.33226,38.592l-2.52661,68.65109-4.47016,60.78749-14.38224-.96965L749.52084,526.76567l-17.68626,51.19742-9.52338,84.64083-13.79918-.96965-2.35655-84.17039,6.04929-65.049Z"
                                transform="translate(-251.25787 -219.38283)" fill="#2f2e41" />
                            <path
                                d="M721.92327,516.33092c-7.35829.00041-10.32193-.89662-10.53859-.96571l-.34152-.10893.05993-.35767c.0491-.29386,4.99291-29.52053,11.77619-44.86466l4.76985-62.22638a8.16093,8.16093,0,0,1,6.836-7.49607l.06374.41132-.06374-.41132,12.13315-1.93143,7.422-6.62668,17.78.997,1.5679,7.62613c2.12648.60276,16.15942,4.96351,17.54835,15.40591l.01723.13087-.05992.11665-25.70853,50.14723c2.17257,2.17408,19.34132,20.05727,20.50658,42.91941l.02805.54992-.52931-.12274c-.0493-.01016-5.54367-1.069-34.43531,3.88358C737.39325,515.69727,728.10649,516.33092,721.92327,516.33092Z"
                                transform="translate(-251.25787 -219.38283)" fill="#2f2e41" />
                            <path
                                d="M693.42306,506.96723l-10.47887-8.18255,23.38825-47.44762,21.75321-46.503a3.4598,3.4598,0,0,1,6.49127.5739l5.38433,19.80608L723.1236,469.63279Z"
                                transform="translate(-251.25787 -219.38283)" fill="#2f2e41" />
                            <path
                                d="M918.36477,678.837l.62262-1.15126c-8.34812-4.51495-18.73781-10.13354-24.16445-19.35423-5.34945-9.08964-5.46946-21.43268-.3132-32.21247,4.38806-9.17433,12.44869-17.39365,23.31031-23.76971,2.1424-1.2577,4.3914-2.44956,6.56641-3.60242,5.25725-2.78612,10.69349-5.66748,15.176-9.75508,6.17376-5.63008,10.845-15.078,7.3634-23.49358a15.61545,15.61545,0,0,0-13.535-9.47l-.07384,1.30724a14.30953,14.30953,0,0,1,12.40281,8.67191c3.23533,7.82044-1.20354,16.695-7.03947,22.01726-4.35992,3.97574-9.72169,6.81747-14.90687,9.56555-2.18731,1.15925-4.44926,2.35814-6.61627,3.63022-11.08759,6.50871-19.32737,14.923-23.82841,24.33353-5.34164,11.16748-5.2015,23.98164.36594,33.44172C899.30623,668.53019,909.87362,674.2453,918.36477,678.837Z"
                                transform="translate(-251.25787 -219.38283)" fill="#f1f1f1" />
                            <ellipse cx="673.83562" cy="337.98147" rx="11.45514" ry="5.56393" fill="#f1f1f1" />
                            <ellipse cx="664.67148" cy="374.63791" rx="11.45514" ry="5.56393" fill="#f1f1f1" />
                            <ellipse cx="685.61801" cy="380.52914" rx="11.45514" ry="5.56393" fill="#f1f1f1" />
                            <ellipse cx="652.88901" cy="411.29435" rx="11.45514" ry="5.56393" fill="#f1f1f1" />
                            <ellipse cx="629.97873" cy="411.29433" rx="11.45514" ry="5.56393" fill="#f1f1f1" />
                            <path
                                d="M947.25787,680.61717H573.74213a1,1,0,0,1,0-2h374a1.00006,1.00006,0,0,1,1,1C948.74213,680.16942,947.81012,680.61717,947.25787,680.61717Z"
                                transform="translate(-251.25787 -219.38283)" fill="#cbcbcb" />
                            <path
                                d="M479.79658,331.15406h-166a5.0058,5.0058,0,0,1-5-5v-56a5.00581,5.00581,0,0,1,5-5h166a5.00573,5.00573,0,0,1,5,5v56A5.00573,5.00573,0,0,1,479.79658,331.15406Z"
                                transform="translate(-251.25787 -219.38283)" fill="#3f3d56" />
                            <rect x="83.53871" y="60.77124" width="44" height="5" fill="#fff" />
                            <circle cx="185.53871" cy="63.77124" r="3" fill="#6c63ff" />
                            <circle cx="195.53871" cy="63.77124" r="3" fill="#6c63ff" />
                            <circle cx="205.53871" cy="63.77124" r="3" fill="#6c63ff" />
                            <path
                                d="M479.79658,402.15406h-166a5.0058,5.0058,0,0,1-5-5v-56a5.00581,5.00581,0,0,1,5-5h166a5.00573,5.00573,0,0,1,5,5v56A5.00573,5.00573,0,0,1,479.79658,402.15406Z"
                                transform="translate(-251.25787 -219.38283)" fill="#3f3d56" />
                            <rect x="83.53871" y="131.77124" width="44" height="5" fill="#fff" />
                            <circle cx="185.53871" cy="134.77124" r="3" fill="#6c63ff" />
                            <circle cx="195.53871" cy="134.77124" r="3" fill="#6c63ff" />
                            <circle cx="205.53871" cy="134.77124" r="3" fill="#6c63ff" />
                            <path
                                d="M479.79658,473.15406h-166a5.0058,5.0058,0,0,1-5-5v-56a5.00581,5.00581,0,0,1,5-5h166a5.00573,5.00573,0,0,1,5,5v56A5.00573,5.00573,0,0,1,479.79658,473.15406Z"
                                transform="translate(-251.25787 -219.38283)" fill="#3f3d56" />
                            <rect x="83.53871" y="202.77124" width="44" height="5" fill="#fff" />
                            <circle cx="185.53871" cy="205.77124" r="3" fill="#6c63ff" />
                            <circle cx="195.53871" cy="205.77124" r="3" fill="#6c63ff" />
                            <circle cx="205.53871" cy="205.77124" r="3" fill="#6c63ff" />
                            <polygon points="168 297.234 0 297.234 0 231 2 231 2 295.234 168 295.234 168 297.234" fill="#ccc" />
                            <polygon points="105 0 273 0 273 66.234 271 66.234 271 2 105 2 105 0" fill="#ccc" /></svg>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="margin-top: -30px;">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="row">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav mr-auto">
                      <div class="d-flex ">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link" >{{ __('Dashboard') }}</a>

                        </li>
                        <li class="nav-item" style="margin-left: 130px">
                            <a href="{{route('daftarbarang.index')}}" class="nav-link">{{ __('Daftar Barang') }}</a>
                        </li>
                        <li class="nav-item" style="margin-left: 130px">
                            <a href="{{route('transaksi.index')}}" class="nav-link">{{ __('Transaksi') }}</a>
                        </li>
                        <li class="nav-item" style="margin-left: 130px">
                            <a href="{{route('pengembalian.index')}}" class="nav-link">{{ __('Pengembalian ') }}</a>
                        </li>
                        <li class="nav-item dropdow" style="margin-left: 130px">
                            <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Laporan
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: 1090px">
                            <a href="{{route('laporan.item')}}" class="dropdown-item">Barang</a>
                            <a href="{{route('laporan.transaksi')}}" class="dropdown-item">Transaksi</a>
                            <a href="{{route('laporan.return')}}" class="dropdown-item">Pengembalian</a>
                            <a href="{{route('laporan.dashboard')}}" class="dropdown-item">Dashboard</a>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>

        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
