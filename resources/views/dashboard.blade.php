@extends('navbar')

@section('title', 'Dashboard')


@section('content')

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