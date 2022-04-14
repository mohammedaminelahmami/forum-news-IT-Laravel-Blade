@extends('index')

@section('content')

    <div class="flex justify-around flex-wrap gap-2 mt-16 mx-32">
        <!-- imgProfile -->
        <div class="flex flex-col w-48">
            <img src="{{ asset('imgs/avatar.webp') }}" class="w-full rounded-md" alt="">
            <center><p class="mt-3"> {{ auth()->user()->name }} </p></center>
        </div>

        <form action="" class="flex flex-col gap-5">
            <input type="text" placeholder="Your Name" class="p-4 rounded-md w-80 md:w-96">
            <input type="text" placeholder="username" class="p-4 rounded-md w-80 md:w-96">
            <input type="text" placeholder="email" class="p-4 rounded-md w-80 md:w-96">
            <input type="text" placeholder="password" class="p-4 rounded-md w-80 md:w-96">

            <button type="submit" placeholder="password" class="bg-favColor text-white px-7 py-2 rounded-md font-meduim">Submit</button>
        </form>

    </div>

    @endsection

    @section('footer')
        <footer class="bg-favColor mt-40 w-full text-white text-md font-thin">
            <div class="flex md:flex-row flex-col items-center justify-between mx-auto w-10/12">
                <ul class="mt-20">
                    <li>Contact / Lorem</li>
                    <li>About Us</li>
                    <li>Help / Gareth Bale</li>
                </ul>
    
                <ul class="mt-20">
                    <li>Blog / Morocco</li>
                    <li>Pricing / cam</li>
                    <li>Portfolio / Syria</li>
                </ul>
    
                <ul class="mt-20">
                    <li>SocialMedia / Facebook</li>
                    <li>Pokos / Hey</li>
                    <li>iShare / Fill-rouge</li>
                </ul>
            </div>

            <div class="flex flex-row justify-center mt-20 gap-3">
                <img src="{{ asset('imgs/facebook.png') }}" width="40" alt="">
                <img src="{{ asset('imgs/youtube.png') }}" width="40" alt="">
                <img src="{{ asset('imgs/twitter.png') }}" width="40" alt="">
                <img src="{{ asset('imgs/linkdin.png') }}" width="40" alt="">
                <img src="{{ asset('imgs/github.png') }}" width="40" alt="">
            </div>
            
            <center class="mt-20">Copyright © 2022 TheForum. All rights reserved.</p></center>
        </footer>
    @endsection