@extends('app')

@section('title', 'payroll')


@section('content')

<!-- Navbar -->

<div class="flex">
	<div class="md:flex w-2/5 h-auto md:w-2/12 h-screen bg-purple-400 border-r hidden">
		<div class="mx-auto py-10 w-64">
			<h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">
        <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
        alt="logo"></h1>
			<ul>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
					<img src="https://img.icons8.com/material-outlined/24/000000/dashboard-layout.png"/>
					<span class="font-semibold text-lg pt-2">
					  <a href="{{ route('hr_dashboard') }}" class="hover:text-gray-900">
						Dashboard</a>
					  </span>
				</li>

				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
					<img src="https://img.icons8.com/small/32/000000/conference.png"/>
					<span class="font-semibold  text-lg pt-2">
            <a href="{{ route('employees') }}" class="hover:text-gray-900">
            Employees</a>
          </span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600 bg-purple-600">
          <img src="https://img.icons8.com/windows/32/000000/money-transfer.png"/>
          <span class="font-semibold text-lg pt-2">Payroll</span>
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



<!-- Payroll -->
<div class="bg-white p-8 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h1 class="text-gray-600 font-semibold">Pay Slip</h1>
			<span class="text-sm">Employees Salary</span>
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
			
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center lh-1 mb-2">
                            <h6 class="fw-bold">Payslip</h6> <span class="fw-normal">Payment slip for the month of April 2022</span>
                        </div>
                        {{-- <div class="d-flex justify-content-end"> <span>Working Branch:ROHINI</span> </div> --}}
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">Employee ID</span> <small class="ms-3">NZpZSFM6kzNR5vd8</small> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">Employee Name</span> <small class="ms-3">Francis Portillo</small> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">Contact No.</span> <small class="ms-3">09321830586</small> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div> <span class="fw-bolder">Email</span> <small class="ms-3">portillofrancislorenzedeo@gmail.com</small> </div>
                                    </div>
                                </div>
                            </div>
                            <table class="mt-4 table table-bordered">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th scope="col">Basic Wage</th>
                                        <th scope="col">Php 30,000</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Gross Salary</th>
                                        <td></td>
                                        <td>Php 30,000</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Less:</th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">SSS Contribution</th>
                                        <td>Php 3,900</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Philhealth Contribution</th>
                                        <td>Php 1,200</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Pag-IBIG Contribution</th>
                                        <td>Php 600</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Total Deductions</th>
                                        <td></td>
                                        <td>Php 5,700</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Take Home Pay</th>
                                        <td></td>
                                        <td><b>Php 24,300</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : Php 24,300</span> </div>
                            <div class="border col-md-8">
                                <div class="d-flex flex-column"> <span>In words:</span> <span>Twenty four thousand three hundred pesos only.</span> </div>
                            </div>
                        </div>
                        {{-- <div class="d-flex justify-content-end">
                            <div class="d-flex flex-column mt-2"> <span class="fw-bolder"></span> <span class="mt-4">Authorized Signature</span> </div>
                        </div> --}}
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>


@endsection