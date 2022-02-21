@extends('app')

@section('title', 'Dashboard')


@section('content')



@if (session()->get('fail'))

<!--alert component-->
<div class="text-red-800 px-1 py-1 border-red-300 border-b-2 rounded relative mb-3 bg-red-200">
    <span class="text-xl inline-block mr-5 align-middle">
    </span>
    <span class="inline-block align-top mr-5 ml-1">
      <b class="capitalize">Whoops! Something went wrong.</b> 
      <br> Invalid Access!
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


<!-- Navbar -->
<nav class="text-black-200 bg-purple-500 body-font shadow w-full">
    <div class="container flex items-center p-6 mx-auto text-gray-800 capitalize dark:text-gray-300">
        
        <a
        class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-center mb-4 md:mb-0">
        <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
            alt="logo">
        </a>

        <a href="{{ route('dashboard') }}" class="text-gray-800 hover:text-gray-800 dark:text-gray-200 border-b-2 border-purple-800 mx-1.5 sm:mx-6">Dashboard</a>

        <a href="{{ route('dtrlogs') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">DTR/Logs</a>

        <a href="{{ route('requests') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Requests</a>

        <a>
          Hello,  {{ Auth::user()->first_name }}!
        </a>

        <a class="lg:ml-20 lg:m border-transparent bg-purple-500 hover:text-purple-300 hover:bg-purple-800 text-gray-800 ml-4 py-2 px-3 rounded-lg" href="{{ route('logout') }}">Log Out</a>

    </div>
</nav>

<!-- component -->
<!-- This is an example component -->
<div class="max-w-full mx-0 py-4 sm:mx-auto sm:px-6 lg:px-8">
    <div class="sm:flex sm:space-x-4">
        <!-- CTA -->
        <a class="w-screen flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-300 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="" target="_blank" >
            <div class="flex items-center">
                <h3 class="text-lg leading-6 font-medium text-gray-700">August 25, 2021 10:45 AM</h3>
            </div>
        </a>
    </div>
</div>

<!-- Cards -->
<div class="max-w-full mx-0 py-0 sm:mx-auto sm:px-6 lg:px-8">
    <div class="sm:flex sm:space-x-4">
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/4 sm:my-8">
            <div class="bg-purple-300 p-5">
                <div class="sm:flex sm:items-start">
                    <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                        <h3 class="text-md leading-6 font-medium text-gray-700">Total Number of Logins</h3>
                        <p class="text-3xl font-bold text-black text-justify">37</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/4 sm:my-8">
            <div class="bg-purple-300 p-5">
                <div class="sm:flex sm:items-start">
                    <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                        <h3 class="text-md leading-6 font-medium text-gray-700">Total Number of Logouts</h3>
                        <p class="text-3xl font-bold text-black text-justify">32</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/4 sm:my-8">
            <div class="bg-purple-300 p-5">
                <div class="sm:flex sm:items-start">
                    <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                        <h3 class="text-md leading-6 font-medium text-gray-700">Pending Requests</h3>
                        <p class="text-3xl font-bold text-black text-justify">0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full sm:w-1/4 sm:my-8">
            <div class="bg-purple-300 p-5">
                <div class="sm:flex sm:items-start">
                    <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                        <h3 class="text-md leading-6 font-medium text-gray-700">New Requests</h3>
                        <p class="text-3xl font-bold text-black text-justify">2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    


@endsection