<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">




<!-- Navbar -->

<div class="flex">
  <div class="md:flex w-2/5 h-auto md:w-2/12 h-screen bg-purple-400 border-r hidden">
  <div class="mx-auto py-10 w-64">

  <a href="{{ route('hr_dashboard') }}">
    <h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">
      <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
      alt="logo"></h1>
  </a>

    <ul>
      <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
                  <img src="https://img.icons8.com/material-outlined/24/000000/dashboard-layout.png"/>
                  <span class="font-semibold text-lg pt-2">
        <a href="{{ route('hr_dashboard') }}" class="hover:text-gray-900"> 
        Dashboard</a></span>
      </li>
      <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600 bg-purple-600">
        <img src="https://img.icons8.com/small/32/000000/conference.png"/>
        <span class="font-semibold  text-lg pt-2">
                  Employees</span>
      </li>
      
              <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
                  <img src="https://img.icons8.com/windows/32/000000/money-transfer.png"/>
                  <span class="font-semibold text-lg pt-2">
            <a href="{{ route('payroll') }}" class="hover:text-gray-900">
            Payroll</a>
            </span>
      </li>
              <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
        <img src="https://img.icons8.com/fluency-systems-filled/48/000000/timer.png"/>
        <span class="font-semibold  text-lg pt-2">
                  <a href="{{ route('dtrlogs') }}" class="hover:text-gray-900">
                  DTR Logs</a></span>
      </li>
              <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12  hover:bg-purple-600">
        <img src="https://img.icons8.com/material-outlined/24/000000/leave.png"/>
        <span class="font-semibold text-lg pt-2">
                  <a href="{{ route('requests') }}" class="hover:text-gray-900">
          Requests</a>
          </span>
      </li>
              
              
      <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/gear.png"/>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="pt-2">
            <span class="font-semibold text-lg pt-2">Hello,  {{ Auth::user()->first_name }}!</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
            <div class="px-2 py-2 bg-purple-400 rounded-lg shadow dark-mode:bg-gray-800 font-semibold  text-sm">
            <a class="flex space-x-2 pt-3 pl-5 cursor-pointer hover:text-black duration-150 rounded w-30 h-12 center hover:bg-purple-600" href="{{ route('logout') }}">Log Out</a>
            </div>
          </div>
          </div>	 	
        {{-- Dropdown --}}
        
      </li>
    </ul>

  </div>
</div>
<main class="min-h-screen w-10/12 bg-white">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Change Password</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


         <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    </head>
    <body>
      <!-- Alerts -->
@if (count($errors) > 0)

<div class="w-full lg:w-8/12 px-4 mx-auto mt-2" name="alert">
<!--alert component-->
<div class="text-red-800 px-1 py-1 border-red-300 border-b-2 rounded relative bg-red-200 mt-2">
  <span class="text-xl inline-block mr-5 align-middle">
  </span>
  <span class="inline-block align-top mr-5 ml-1">
    <b class="capitalize">Error!</b> 
    <br>Something went wrong.
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
</div>

@endif

@if (Session::has('success'))
{{Session::get('success')}}
@endif

<!-- component -->
<div class="bg-white p-8 rounded-md w-full">
  <div class=" flex items-center justify-between pb-6">
      <div>
          <h1 class="text-gray-600 font-semibold">Account Settings</h1>
          <span class="text-sm">Change Password</span>
      </div>
  </div>
</div>

<section class=" py-1 bg-white-50">


    <div class="w-full lg:w-11/12 px-4 mx-auto mt-2">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-purple-100 border-0">
        <div class="rounded-t bg-white mb-0 px-6 py-6">
          <div class="text-center flex justify-between">
            <h6 class="text-black-700 text-xl font-bold">
              Account Settings
            </h6>
            
            <form action= "{{ route ('register-user') }}" method ="POST" >
            @csrf
            <button class="bg-purple-500 text-white active:bg-purple-600 hover:bg-purple-400 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
              <a href="{{ route('employees') }}" class="text-white">
              Cancel</a>
            </button>
            <button class="bg-purple-500 text-white active:bg-purple-600 hover:bg-purple-400 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">
              Save
            </button>
          </div>
        </div>

        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <h6 class="text-black-900 text-sm mt-3 mb-6 font-bold uppercase">
            Change Password
          </h6>
          <div class="flex flex-wrap">
            

            <div class="w-full lg:w-4/12 px-4 py-3">
              <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Current Password
                </label>
                <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="password" value="{{old('password')}}">
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
              </div>
            </div>

            <div class="w-full lg:w-4/12 px-4 py-3">
              <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  New Password
                </label>
                <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="password" value="{{old('password')}}">
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
              </div>
            </div>

            <div class="w-full lg:w-4/12 px-4 py-3">
              <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Confirm New Password
                </label>
                <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="password" value="{{old('password')}}">
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
              </div>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  </section>


      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
  </body>
</html>

