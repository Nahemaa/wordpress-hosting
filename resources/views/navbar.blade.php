<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Remotu Saitu -  @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

         <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">

        <!-- Fontswesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>

    </head>
    <body>

    <!--Header component -->    
    <header class="text-black-200 bg-purple-500 body-font shadow w-full">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a  href="{{ route('dashboard') }}"
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-purple-900">Dashboard</a>
                <a  href="{{ route('dtrlogs') }}"
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-purple-900">DTR Logs</a>
                <a  href="{{ route('employees') }}"
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-purple-900">Employees</a>
                <a  href="{{ route('requests') }}"
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-purple-900">Requests</a>
                <a
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-purple-900">Messages</a>
                <a  href="{{ route('payroll') }}"
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-purple-900">Payroll</a>
            </nav>
            <a
                class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-center mb-4 md:mb-0">
                <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
                    alt="logo">
            </a>

            <!--Account Dropdown-->
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                <a class="bg-purple-500 hover:text-gray-900 hover:bg-purple-700 text-black ml-4 py-2 px-3 rounded-lg">
                    Hello, Admin
                </a>
            </div>
        </div>
    </header>

        @yield('content')

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 
    </body>
</html>
