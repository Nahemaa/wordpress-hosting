@extends('app')

@section('title', 'employees')


@section('content')

<!-- Navbar -->

<div class="flex">
	<div class="md:flex w-2/5 h-auto md:w-1/4 h-screen bg-purple-400 border-r hidden">
		<div class="mx-auto py-10">
			<h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">
        <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
        alt="logo"></h1>
			<ul>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600 bg-purple-600">
					<img src="https://img.icons8.com/small/32/000000/conference.png"/>
					<span class="font-semibold  text-lg pt-2">Employees</span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
          <img src="https://img.icons8.com/windows/32/000000/money-transfer.png"/>
          <span class="font-semibold text-lg pt-2">Payrolls</span>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150 rounded w-30 h-12 center hover:bg-purple-600">
					<img src="https://img.icons8.com/ios-glyphs/30/000000/logout-rounded-down.png"/>
					<span class="font-semibold text-lg pt-2">Hello, {{$data->first_name}}!</span>
				</li>
			</ul>
		</div>
	</div>
	<main class="min-h-screen w-full bg-white">

@if (session()->has('success'))
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
@endif



<!-- Employees -->
<div class="bg-white p-8 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h1 class="text-gray-600 font-semibold">Employees</h1>
			<span class="text-xs">All employees list</span>
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
									Employee Registered
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Status
								</th>
							</tr>
						</thead>
						<tbody>
						@foreach($employees as $employee)
							<tr>
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
                    <svg class="w-2 h-2 absolute top-0 right-1 m-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                    <select class="border border-black-300 rounded-full text-black-600 h-10 pl-5 pr-10 bg-white hover:border-black-400 focus:outline-none appearance-none">
                      <option>Department</option>
                      <option>Logistics</option>
                      <option>Sales</option>
                      <option>Support</option>
                      <option>Marketing</option>
                    </select>
                  </div>
				  </td>
						<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
						<p class="text-gray-900 whitespace-no-wrap">
						
						{{ date("M d Y", strtotime($employee->created_at)) }}
						</p>
						</td>

								<td class="px-5 py-5 bg-white text-sm">
									<button class="bg-yellow-400 px-3 py-2 text-sm shadow-sm font-medium tracking-wider border text-black rounded-full hover:shadow-lg hover:bg-yellow-500" @click="showModal4 = true">
                    Edit
                  </button>
                  <button class="bg-red-400 px-3 py-2 text-sm shadow-sm font-medium tracking-wider border text-black rounded-full hover:shadow-lg hover:bg-red-500" @click="showModal4 = true">
                    Delete
                  </button>
								</td>
						@endforeach
					</table>
					<div
						class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
						<span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 3 of 30 Employees
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<button
                                class="text-sm text-purple-50 transition duration-150 hover:bg-purple-500 bg-purple-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp;
							<button
                                class="text-sm text-purple-50 transition duration-150 hover:bg-purple-500 bg-purple-600 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection