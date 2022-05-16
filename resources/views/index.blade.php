<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Forum News IT</title>
</head>
<body class="bg-secondColor text-favColor font-semibold">
    
    <!-- StartNavBar -->
    <nav class="p-1 bg-favColor flex justify-between mb-6 text-white">

        <!-- <a href="{{ route('home') }}" class="p-3 ml-10"><img src="{{ asset('imgs/home.png') }}" alt="home" width="40"></a> -->
        <a href="{{ route('home') }}" class="p-3 ml-10 text-xl"> THE FORUM </a>

        <!-- StartSearch -->
            
        <!-- EndSearch -->

        <button id="menuBtn" class="mr-10"> <img src="{{ asset('imgs/menu.png') }}" width="25" /> </button>
        <ul class="flex items-center mr-10 gap-5" id="my_nav">
        @if(auth()->user())
                <li>
                    <a href="{{ route('profile') }}" class="p-3 myClass2">{{ auth()->user()->name }}</a>
                </li>
                <form action="{{ route('logoutUser') }}" method="GET">
                    @csrf
                    <center><button type="submit" class="pr-6 ml-2 myClass2">Logout</button></center>
                </form>
            @else
                <li>
                    <a href="{{ route('login') }}" class="p-3 myClass2">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3 myClass2">Register</a>
                </li>
            @endif
        </ul>
    </nav>
    <!-- EndNavBar -->

    @yield('content')

    @yield('footer')

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>