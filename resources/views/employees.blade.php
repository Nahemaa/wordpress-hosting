@extends('navbar')

@section('title', 'employees')


@section('content')

<!--Employee List Table -->
<style>
    body{background:white!important;}
</style>
<p class="text-xl text-center font-bold m-5">Employee List</p>

<!--Search Bar -->
<div class="col-md-10 offset-md-9">
  <button class="w-full sm:w-auto px-24 py-2   mb-4  text-sm my-3 font-medium shadow focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200 rounded-md block  border-b border-purple-300 bg-purple-200 hover:bg-purple-300 text-purple-900">Add Employee</button>
 
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
    <th class="px-4 py-3">Status</th>
    <th class="px-4 py-3">Date Updated</th>
  </tr>
  
  <tr class="bg-gray-100 border-b border-purple-400">
    <td class="px-4 py-3">LG212387</td>
    <td class="px-4 py-3">John Luelle Gabales</td>
    <td class="px-4 py-3">Logistics</td>
    <td class="px-4 py-3">Active</td>
    <td class="px-4 py-3">August 28, 2021</td>
  </tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
  <td class="px-4 py-3">LG11224</td>
  <td class="px-4 py-3">Gerard Way</td>
  <td class="px-4 py-3">Logistics</td>
  <td class="px-4 py-3">Terminated</td>
  <td class="px-4 py-3">August 25, 2021</td>
</tr> 
<!-- each row -->

<tr class="bg-gray-100 border-b border-purple-400">
  <td class="px-4 py-3">MK11224</td>
  <td class="px-4 py-3">Bruce Wayne</td>
  <td class="px-4 py-3">Marketing</td>
  <td class="px-4 py-3">Pending</td>
  <td class="px-4 py-3">August 28, 2021</td>
</tr> 
<!-- each row -->



@endsection