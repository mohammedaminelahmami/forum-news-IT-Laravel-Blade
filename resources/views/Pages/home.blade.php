@extends('index')

@section('content')

    <center>
        <div class="flex justify-center flex-row gap-8 mt-10 p-4 bg-thirdColor w-1/2 rounded-md">
            <img onclick="leftArrow()" src="{{ asset('imgs/larrow.png') }}" class="cursor-pointer self-center w-5" alt="">

            <div class="flex myClass bg-favColor text-blue-600 w-36 h-36 border rounded-md">
                <img src="{{ asset('imgs/solidity.jpg') }}" class="w-full" alt="">
            </div>

            <div class="flex  myClass bg-favColor text-blue-600 w-36 h-36 border rounded-md">
                <img src="{{ asset('imgs/javascript.png') }}" class="w-full" alt="">
            </div>

            <div class="flex myClass bg-favColor text-blue-600 w-36 h-36 border rounded-md">
                <img src="{{ asset('imgs/C-sharp-logo.jpg') }}" class="w-full" alt="">
            </div>

            <div class="flex myClass bg-favColor text-blue-600 w-36 h-36 border rounded-md">
                <img src="{{ asset('imgs/cnt1.jpg') }}" class="w-full" alt="">
            </div>

            <img onclick="rightArrow()" src="{{ asset('imgs/rarrow.png') }}" class="cursor-pointer self-center w-5" alt="">
        </div>
    </center>

    <div class="flex items-center flex-col mt-8">
        <div class="w-1/2 bg-white p-6 rounded-md mb-5">
            <form action="{{ route('home') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <textarea name="body" id="body" cols="15" rows="3" class="bg-gray-100 border-2 w-full p-4 rounded-md @error('body') border-red-500 @enderror" placeholder="Post something !"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-favColor text-white px-7 py-2 rounded-md font-meduim">Post</button>
                </div>
            </form>
        </div>

        <!-- StartPost -->

        <div class="w-6/12 bg-white p-6 rounded-md">
            <div class="">
                <div class="flex text-gray-400 text-xs mb-2 gap-2">
                    <img src="{{ asset('imgs/avatar.webp') }}" width="30" alt="avatar">
                    <p class="mt-1">Posted By Mohammed Amine 6 hours ago</p>
                </div>
                <!-- StartContent -->
                <div class="">
                    <p>Should I learn JavaScript or Python? 🤨🤨</p>
                    <img src="{{ asset('imgs/cnt1.jpg') }}" width="1000" alt="cnt1" class="mt-2">

                </div>
                <!-- EndContent -->
                <div class="flex flex-col gap-3 my-2">
                    <div class="flex flex-row gap-2">
                        <div class="text-orangeColor font-semibold">Like</div>
                        <div class="text-favColor font-semibold">DisLike</div>
                    </div>

                    {{-- StartComments --}}
                        <form action="">
                            <textarea name="comment" id="comment" class="bg-gray-100 border-2 w-full p-4 rounded-md @error('comment') border-red-500 @enderror" cols="30" rows="1" placeholder="Write a public comment..."></textarea>
                            <button type="submit" class="bg-secondColor text-favColor px-4 py-2 rounded-md text-sm font-medium">Comment</button>
                        </form>
                    {{-- EndComments --}}

                </div>
            </div>
        </div>

        <!-- EndPost -->

        <!-- StartPost -->

        <div class="w-6/12 bg-white p-6 rounded-md mt-5">
            <div class="">
                <div class="flex text-gray-400 text-xs mb-2 gap-2">
                    <img src="{{ asset('imgs/avatar.webp') }}" width="30" alt="avatar">
                    <p class="mt-1">Posted By Youssef Wakhidi 8 hours ago</p>
                </div>
                <!-- StartContent -->
                <div class="">
                    <p>Hey, </p>
                    <img src="{{ asset('imgs/cnt2.png') }}" width="1000" alt="cnt2" class="mt-2">

                </div>
                <div class="flex flex-col gap-3 my-2">
                    <div class="flex flex-row gap-2">
                        <div class="text-orangeColor font-semibold">Like</div>
                        <div class="text-favColor font-semibold">DisLike</div>
                    </div>

                    {{-- StartComments --}}
                        <form action="">
                            <textarea name="comment" id="comment" class="bg-gray-100 border-2 w-full p-4 rounded-md @error('comment') border-red-500 @enderror" cols="30" rows="1" placeholder="Write a public comment..."></textarea>
                            <button type="submit" class="bg-secondColor text-favColor px-4 py-2 rounded-md text-sm font-medium">Comment</button>
                        </form>
                    {{-- EndComments --}}

                </div>
            </div>
        </div>

        <!-- EndPost -->

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