@extends('Admin/index')

@section('adminContent')
    <div class="flex justify-center">  
        <div class="flex flex-col w-1/3 mt-32">
            <p class="self-center m-5 text-favColor font-bold text-2xl">Admin</p>
            @if(session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">{{ session('status') }}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Your Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                <div class="mb-4">
                    <label for="password" class="sr-only">password</label>
                    <input type="password" name="password" id="password" placeholder="Your password" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
                </div>
    
                <div class="mb-4">
                    <div class="flex items-center text-favColor">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remeber me</label>
                    </div>
                </div>
    
                <div class="">
                    <button type="submit" class="bg-favColor text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection