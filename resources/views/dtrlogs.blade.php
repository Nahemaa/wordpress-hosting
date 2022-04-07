@extends('app')

@section('title', 'dtrlogs')


@section('content')

<div class="flex">
	<div class="md:flex w-2/5 h-auto md:w-2/12 h-screen bg-purple-400 border-r hidden">
		<div class="mx-auto py-10 w-64">
			<h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">
        <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
        alt="logo"></h1>
			<ul>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 hover:bg-purple-600">
					<img src="https://img.icons8.com/material-outlined/24/000000/dashboard-layout.png"/>
					<span class="font-semibold text-lg pt-2">
					  <a href="{{ route('hr_dashboard') }}" class="hover:text-gray-900">
						Dashboard</a>
					  </span>
				</li>

				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 hover:bg-purple-600">
					<img src="https://img.icons8.com/small/32/000000/conference.png"/>
					<span class="font-semibold text-lg pt-2">
            <a href="{{ route('employees') }}" class="hover:text-gray-900">
            Employees</a>
          </span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 hover:bg-purple-600">
          <img src="https://img.icons8.com/windows/32/000000/money-transfer.png"/>
          <a href="{{ route('payroll') }}" class="hover:text-gray-900">
          <span class="font-semibold text-lg pt-2">Payroll</span>
          </a>
				</li>
        <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12  hover:bg-purple-600 bg-purple-600">
					<img src="https://img.icons8.com/fluency-systems-filled/48/000000/timer.png"/>
					<span class="font-semibold text-lg pt-2">
						DTR Logs
					  </span>
				</li>
        <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12  hover:bg-purple-600">
					<img src="https://img.icons8.com/material-outlined/24/000000/leave.png"/>
					<span class="font-semibold text-lg pt-2">
            <a href="{{ route('requests') }}" class="hover:text-gray-900">
						Requests</a>
					  </span>
				</li>
        
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600 ">
					<img src="https://img.icons8.com/ios-glyphs/30/000000/gear.png"/>
					<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
					<div @click.away="open = false" class="relative" x-data="{ open: false }">
						<button @click="open = !open" class="pt-2">
							<span class="font-semibold text-lg pt-2">Hello,  {{ Auth::user()->first_name }}!</span>
						  <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						</button>
						<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
						  <div class="h-16 px-2 py-2 bg-purple-400 rounded-lg shadow dark-mode:bg-gray-800 font-semibold  text-sm">
							<a class="flex space-x-2 pt-2 pl-2 cursor-pointer hover:text-black duration-150 rounded w-30 h-12 center hover:bg-purple-600" href="{{ route('logout') }}">Log Out</a>
						  </div>
						</div>
					  </div>	 	
					{{-- Dropdown --}}
					
				</li>
			</ul>
		</div>
	</div>
	<main class="min-h-screen w-10/12 bg-white">



<!-- DTR Logs -->
<div class="bg-white p-8 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h1 class="text-gray-600 font-semibold">Daily Time Record</h1>
			<span class="text-sm">Employees DTR</span>
		</div>
		<div class="flex items-center justify-between">
			<div class="flex bg-gray-50 items-center p-2 rounded-md">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
					fill="currentColor">
					<path fill-rule="evenodd"
						d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
						clip-rule="evenodd" />
				</svg>
				<input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id="" placeholder="Search...">
          </div>
				<div class="lg:ml-5 ml-10 space-x-2">
					<button class="bg-purple-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Search</button>
				</div>
			</div>
		</div>
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Employee's ID
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Name
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Mode
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Department
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Level
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Position
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Date
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Time In
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Time Out
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													ABCD123
												</p>
											</div>
										</div>
								</td>
						
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">Amel Macasindel</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">Time In</p>
				        </td>
						<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <p class="text-gray-900 whitespace-no-wrap">Human Resource</p>
						</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <p class="text-gray-900 whitespace-no-wrap">Senior Level</p>
						</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <p class="text-gray-900 whitespace-no-wrap">Senior HR</p>
						</td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <p class="text-gray-900 whitespace-no-wrap">March 12, 2022</p>
						</td>
			<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
				<p class="text-gray-900 whitespace-no-wrap">8:00am</p>
						</td>
			<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
				<p class="text-gray-900 whitespace-no-wrap">5:00pm</p>
						</td>


								
					</table>
					<div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
						{{-- <span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 10 of 30 Entries
                        </span> --}}
						<div class="inline-flex mt-2 xs:mt-0">
							{{-- <button
                                class="text-sm text-purple-50 transition duration-150 hover:bg-purple-500 bg-purple-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp; --}}
							<button
                                class="text-sm text-purple-50 transition duration-150 hover:bg-purple-500 bg-purple-600 font-semibold py-2 px-4 rounded">
                                <a href="{{ route('qrscanner') }}" class="text-white">
								QR Code Scanner
								</a>
                            </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--DTR Log Table -->
{{-- <style>
    body{background:white!important;}
</style>
<p class="text-xl text-center font-bold m-5">Daily Time Record Logs</p> --}}


{{-- <!--Search Bar -->
<div class="col-md-10 offset-md-9">
    <div class="relative md:w-1/5 ">
        <input type="search"
            class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
            placeholder="Search...">
        <div class="absolute top-0 left-0 inline-flex items-center p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-400" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                <circle cx="10" cy="10" r="7" />
                <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
        </div>
    </div>
</div>

<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-purple-300 text-gray-800">
  <tr class="text-left border-b-2 border-purple-400">
    <th class="px-4 py-3">Employee ID</th>
    <th class="px-4 py-3">Name</th>
    <th class="px-4 py-3">Department</th>
    <th class="px-4 py-3">Mode</th>
    <th class="px-4 py-3">Date and Time</th>
  </tr>
  
  <tr class="bg-gray-100 border-b border-purple-400">
    <td class="px-4 py-3">LG212387</td>
    <td class="px-4 py-3">John Luelle Gabales</td>
    <td class="px-4 py-3">Logistics</td>
    <td class="px-4 py-3">Time In</td>
    <td class="px-4 py-3">August 28, 2021 08:09 AM</td>
  </tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
    <td class="px-4 py-3">MK215875</td>
    <td class="px-4 py-3">Francis Lorenze Deo Portillo</td>
    <td class="px-4 py-3">Marketing</td>
    <td class="px-4 py-3">Time In</td>
    <td class="px-4 py-3">August 28, 2021 08:09 AM</td>
  </tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
    <td class="px-4 py-3">IT211456</td>
    <td class="px-4 py-3">Dave Carlos</td>
    <td class="px-4 py-3">IT</td>
    <td class="px-4 py-3">Time In</td>
    <td class="px-4 py-3">August 28, 2021 08:09 AM</td>
  </tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
    <td class="px-4 py-3">AD937839</td>
    <td class="px-4 py-3">Amel Macasindel</td>
    <td class="px-4 py-3">Administration</td>
    <td class="px-4 py-3">Time In</td>
    <td class="px-4 py-3">August 28, 2021 08:09 AM</td>
  </tr> 
<!-- each row -->

</table>

<!-- classic design -->

<div class="mb-20"></div>
<!-- fill for tailwind preview bottom overflow --> --}}

@endsection