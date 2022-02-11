@extends('app')

@section('title', 'employees')


@section('content')

<!-- Navbar -->
<nav class="text-black-200 bg-purple-500 body-font shadow w-full">
  <div class="container flex items-center p-6 mx-auto text-gray-800 capitalize dark:text-gray-300">
      
      <a
      class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-center mb-4 md:mb-0">
      <img src="{{ asset('images/logo_caps.png') }}" style="height: 60px; margin-top: 1px; margin-bottom: 1px;"
          alt="logo">
      </a>

      <a href="{{ route('dashboard') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Dashboard</a>

      <a href="{{ route('dtrlogs') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">DTR/Logs</a>

      <a href="{{ route('employees') }}" class="text-gray-800 hover:text-gray-800 dark:text-gray-200 border-b-2 border-purple-800 mx-1.5 sm:mx-6">Employees</a>

      <a href="{{ route('requests') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Requests</a>

      <a href="{{ route('messages') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Messages</a>

      <a href="{{ route('payroll') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-purple-800 mx-1.5 sm:mx-6">Payroll</a>

      <a class="lg:ml-20 border-transparent bg-purple-500 hover:text-purple-300 hover:bg-purple-800 text-gray-800 ml-4 py-2 px-3 rounded-lg">
          
	  <a>
            Hello, {{$data->first_name}}!
        </a>

        <a class="lg:ml-20 lg:m border-transparent bg-purple-500 hover:text-purple-300 hover:bg-purple-800 text-gray-800 ml-4 py-2 px-3 rounded-lg" href="{{ route('logout') }}">Log Out</a>

      </a>

  </div>
</nav>


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
									Date Updated
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Status
								</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													Dina Fritz
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">dinafritz@hotmail.com</p>
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
										January 23, 2022
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
									<span class="relative">Active</span>
									</span>
								</td>
							</tr>

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													Annie Leonheart
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">femtitan@yahoo.com</p>
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
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										January 25, 2022
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
									<span class="relative">Suspended</span>
									</span>
								</td>
							</tr>
							<tr>
								<td class="px-5 py-5 bg-white text-sm">
									<div class="flex items-center">
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													Armin Arlert
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">arminarlert05@gmail.com</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
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
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">February 01, 2022</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<span
                                        class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
									<span class="relative">Inactive</span>
									</span>
								</td>
							</tr>
						</tbody>
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