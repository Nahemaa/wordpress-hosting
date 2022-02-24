<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

         <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">




<!-- component -->
<div class="flex items-center min-h-screen bg-img dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10">
            <div class="m-12">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <img src="{{ asset('images/logo_caps.png') }}" alt="" class="w-80 h-30 fill-current text-gray-500">
            </div>
            <div class="m-7">
            <form action= "{{ route ('login-checker') }}" method ="POST" >

@if (count($errors) > 0)

<!--alert component-->
<div class="text-red-800 px-1 py-1 border-red-300 border-b-2 rounded relative mb-3 bg-red-200">
    <span class="text-xl inline-block mr-5 align-middle">
    </span>
    <span class="inline-block align-top mr-5 ml-1">
      <b class="capitalize">Whoops! Something went wrong.</b> 
      <br> These credentials do not match our records.
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-0 mr-3 outline-none focus:outline-none" onclick="closeAlert(event)">
      <span>×</span>
  
    </button>
  </div>
  <script>
    function closeAlert(event){
      let element = event.target;
      while(element.nodeName !== "BUTTON"){
        element = element.parentNode;
      }
      element.parentNode.parentNode.removeChild(element.parentNode);
    }
  </script>
  
@endif

@if (session()->get('fail'))

<!--alert component-->
<div class="text-red-800 px-1 py-1 border-red-300 border-b-2 rounded relative mb-3 bg-red-200">
    <span class="text-xl inline-block mr-5 align-middle">
    </span>
    <span class="inline-block align-top mr-5 ml-1">
      <b class="capitalize">Whoops! Something went wrong.</b> 
      <br> You must login first!
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-0 mr-3 outline-none focus:outline-none" onclick="closeAlert(event)">
      <span>×</span>
  
    </button>
  </div>
  <script>
    function closeAlert(event){
      let element = event.target;
      while(element.nodeName !== "BUTTON"){
        element = element.parentNode;
      }
      element.parentNode.parentNode.removeChild(element.parentNode);
    }
  </script>

@endif

                @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
                        <input type="email" name="email" value="{{old('email')}}" id="email" placeholder="Your Email Address" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Password</label>
                            <a href="#!" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300">Forgot password?</a>
                        </div>
                        <input type="password" name="password" value="{{old('password')}}" id="password" placeholder="Your Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                      
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        
                        @if(Session::has('fail'))

                        <span class="text-danger">@error('password') {{ Session::get('fail')}} @enderror</span>

                        @endif
                        



                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-purple-500 rounded-md focus:bg-purple-600 focus:outline-none text-center">Sign in</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 
    </body>
</html>
