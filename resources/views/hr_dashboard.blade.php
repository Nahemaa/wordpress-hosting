@extends('app')

@section('title', 'Dashboard')


@section('content')


<div class="flex">
	    <div class="md:flex w-2/5 h-auto md:w-2/12 h-screen bg-purple-400 border-r hidden">
		<div class="mx-auto py-10 w-64">

		<a href="{{ route('hr_dashboard') }}">
			<h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">
        <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
        alt="logo"></h1>
		</a>

			<ul>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600 bg-purple-600">
                    <img src="https://img.icons8.com/material-outlined/24/000000/dashboard-layout.png"/>
                    <span class="font-semibold text-lg pt-2">
					Dashboard
					</span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
					<img src="https://img.icons8.com/small/32/000000/conference.png"/>
					<span class="font-semibold  text-lg pt-2">
                    <a href="{{ route('employees') }}" class="hover:text-gray-900">
                    Employees</a></span>
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
                {{-- <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12  hover:bg-purple-600">
					<img src="https://img.icons8.com/material-outlined/24/000000/leave.png"/>
					<span class="font-semibold text-lg pt-2">
                    <a href="{{ route('requests') }}" class="hover:text-gray-900">
						Requests</a>
					  </span>
				</li> --}}
                
                
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

<!-- component -->
<!-- This is an example component -->
<div class="bg-white p-8 rounded-md w-full">
	<div class="flex items-center justify-between">
		<div>
			<h1 class="text-gray-600 font-semibold">Dashboard</h1>
			<span class="text-sm">Remotu Saitu Dashboard</span>
	</div>
</div>
</div>

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