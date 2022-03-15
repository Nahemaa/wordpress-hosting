@extends('app')

@section('title', 'archive')

@section('content')

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
						Dashboard</a>
					  </span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600 bg-purple-600">
				<img src="https://img.icons8.com/small/32/000000/conference.png"/>
				<span class="font-semibold  text-lg pt-2">Employees</span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
          <img src="https://img.icons8.com/windows/32/000000/money-transfer.png"/>
          <span class="font-semibold text-lg pt-2">
			<a href="{{ route('payroll') }}" class="hover:text-gray-900">
			  Payroll</a>
			</span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
					<img src="https://img.icons8.com/small/32/000000/conference.png"/>
					<span class="font-semibold  text-lg pt-2">
                    <a href="{{ route('dtrlogs') }}" class="hover:text-gray-900">
                    DTR Logs</a></span>
				</li>
                <li class="flex space-x-2 mt-5 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12  hover:bg-purple-600">
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
							<a class="flex space-x-2 pt-3 pl-5 cursor-pointer hover:text-black duration-150 rounded w-30 h-12 center hover:bg-purple-600" href="#">Account Settings</a>
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

{{-- @if (session()->has('success'))
<!-- Success Alert -->
<div class="text-green-800 px-1 py-1 border-green-300 border-b-2 rounded relative bg-green-200 ml-2 mr-2 mt-2">
	<span class="text-xl inline-block mr-5 align-middle">
	</span>
	<span class="inline-block align-top mr-5 ml-1">
	  <b class="capitalize">Success!</b> 
	  <br>Action completed successfully.
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
@endif --}}



<!-- Employees -->
<div class="bg-white p-8 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h1 class="text-gray-600 font-semibold">Archive</h1>
			<span class="text-sm">Archive list</span>
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
									Email
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
									Employee Hired
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Employee Terminated
								</th>
							</tr>
						</thead>
						<tbody>
	
						@foreach($employees as $employee)

							<tr>

							<td hidden>{{$employee->id}}</td>

							<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{$employee->employee_id}}</p>
							</td>

								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													{{$employee->last_name}}, 
													{{$employee->first_name}}
												</p>
											</div>
										</div>
								</td>
						
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{$employee->email}}</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <!-- Dropdown -->
				 
                  <div class="relative inline-flex">
                   
				  {{$employee->department_name}}

                  </div> 
		
				  </td>
						<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
						<p class="text-gray-900 whitespace-no-wrap">
						
						{{$employee->level_name}}	

						</p>
				  </td>

					<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
												
												{{$employee->position_name}}
													
												</p>
											</div>
									</div>
					</td>

					<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
						<p class="text-gray-900 whitespace-no-wrap">
						
						{{ date("h:i A - M d, Y", strtotime($employee->created_at)) }}
						</p>
						
					</td>

					<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
						<p class="text-gray-900 whitespace-no-wrap">
						
						{{ date("h:i A - M d, Y", strtotime($employee->updated_at)) }}
						</p>
						
					</td>




				  {{-- <td class="px-5 py-5 bg-white text-sm">

				  
				  <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
					<div class="relative w-auto my-6 mx-auto max-w-lg">
					  <!--content-->
					  <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
						<!--header-->
						<div class="flex items-start justify-between pl-5 pr-10 pb-3 pt-3 border-b border-solid border-blueGray-200 rounded-t">
						  <h3 class="text-3xl font-semibold">
							Remove this employee?
						  </h3>
						  <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
							<span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
							  ×
							</span>
						  </button>
						</div>
						<!--body-->
						<div class="relative p-3 flex-auto">
						  <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
							Are you sure to remove this employee?
						  </p>
						</div>
					
					  </div>
					</div>
				  </div>
				  <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
				  <script type="text/javascript">
					function toggleModal(modalID){
					  document.getElementById(modalID).classList.toggle("hidden");
					  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
					  document.getElementById(modalID).classList.toggle("flex");
					  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
					}
				  </script>

								</td> --}}
								@endforeach
					</table>
					<div
						class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
						<span class="text-xs xs:text-sm text-purple-900"> {{ $users = DB::table('users')->simplePaginate(5); }}
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<a
								 class="btn btn-primary text-sm text-purple-50 transition duration-150 hover:bg-purple-500 bg-purple-600 font-semibold py-2 px-10 mx-auto mt-2 rounded-md" 	href="{{ url('employees') }}">
                                Return to Employees List
							</a>
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection