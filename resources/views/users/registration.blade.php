
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Employee Registration</title>

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
<section class=" py-1 bg-white-50">


    <div class="w-full lg:w-8/12 px-4 mx-auto mt-2">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-purple-100 border-0">
        <div class="rounded-t bg-white mb-0 px-6 py-6">
          <div class="text-center flex justify-between">
            <h6 class="text-black-700 text-xl font-bold">
              New Employee Registration
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
        <div class="flex-auto px-4 lg:px-10 py-20 pt-0">
            <h6 class="text-black-900 text-sm mt-3 mb-6 font-bold uppercase">
              Personal Data
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Last Name
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="last_name" value="{{old('last_name')}}">
                    <span class="text-danger"> @error('last_name') {{ $message }} @enderror </span>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    First Name
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="first_name" value="{{old('first_name')}}">
                  <span class="text-danger">@error('first_name') {{ $message }} @enderror</span>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Email Address
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Confirm Email Address
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="confirm_email" value="{{old('confirm_email')}}">
                  <span class="text-danger">@error('confirm_email') {{ $message }} @enderror</span>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Password
                  </label>
                  <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="password" value="{{old('password')}}">
                  <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Confirm Password
                  </label>
                  <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name = "confirm_password" value="{{old('password')}}">
                  <span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>
                </div>
              </div>

              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-2 pb-5 mt-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Department
                  </label>
                  <!-- Radio Buttons Sex -->
                  <div class="relative inline-flex">
                    <svg class="w-2 h-2 absolute top-0 right-1 m-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                    <select name="department" id="department" class="border border-black-300 rounded-full text-black-600 h-10 pl-5 pr-10 bg-white hover:border-black-400 focus:outline-none appearance-none">
                      <option value="" selected disabled>Select Department</option>
                      @foreach ($departments as $key => $department)
                            <option value="{{ $key }}">
                                {{$department}}
                            </option>
                       @endforeach
                       
                    </select>
                  </div>                
                </div>
              </div>
              
                <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-0 pb-5 mt-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Job Level
                  </label>
                  <!-- Radio Buttons Sex -->
                  <div class="relative inline-flex">
                    <svg class="w-2 h-2 absolute top-0 right-1 m-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                    <select name="job_level" id="job_level" class="border border-black-300 rounded-full text-black-600 h-10 pl-5 pr-10 bg-white hover:border-black-400 focus:outline-none appearance-none">
                      <option> Select Job Level </option>
                    </select>
                  </div>                
                </div>
                </div>
             
                <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-0 pb-5 mt-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Job Position
                  </label>
                  <!-- Radio Buttons Sex -->
                  <div class="relative inline-flex">
                    <svg class="w-2 h-2 absolute top-0 right-1 m-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                    <select name="job_position" id="job_position" class="border border-black-300 rounded-full text-black-600 h-10 pl-5 pr-10 bg-white hover:border-black-400 focus:outline-none appearance-none">
                      <option>Select Job Position</option>
                   
                    </select>
                  </div>                
                </div>
                </div>

                <script>
        // when department dropdown changes
        $('#department').change(function() {

            var departmentID = $(this).val();

            if (departmentID) {

                $.ajax({
                    type: "GET",
                    url: "{{ url('getjoblevels') }}?department_id=" + departmentID,
                    success: function(res) {

                        if (res) {

                            $("#job_level").empty();
                            $("#job_level").append('<option selected disabled>Select Job Level</option>');
                            $.each(res, function(key, value) {
                                $("#job_level").append('<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        } else {

                            $("#job_level").empty();
                        }
                    }
                });
            } else {

                $("#job_level").empty();
                $("#department").empty();
            }
        });
        
        // when state dropdown changes
        $('#job_level').on('change', function() {

            var levelID = $(this).val();
          

            if (levelID) {

                $.ajax({
                    type: "GET",
                    url: "{{ url('getjobpositions') }}?position_id=" + levelID,
                    success: function(res) {

                        if (res) {
                            $("#job_position").empty();
                            $("#job_position").append('<option selected disabled>Select Job Position</option>');
                            $.each(res, function(key, value) {
                                $("#job_position").append('<option value="' + key + '">' + value +
                                    '</option>');
                            });

                        } else {

                            $("#job_position").empty();
                        }
                    }
                });                

            } else {

                $("#job_position").empty();

            }

        });

    </script>


              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Sex
                  </label>
                  <!-- Radio Buttons Sex -->
                  <div class="max-w-lg mx-auto">
                    <fieldset class="mb-5">
                        <legend class="sr-only">
                            Sex
                        </legend>            
                        <div class="flex items-center mb-4">
                            <input id="country-option-1" type="radio" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1" name="sex" value="Male" {{ (old('sex') == 'Male') ? 'checked' : ''}}>
                            <label for="country-option-1" class="text-sm font-medium text-gray-900 ml-2 block">
                            Male
                            </label>
                        </div>               
                        <div class="flex items-center mb-4">
                            <input id="country-option-2" type="radio"  class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-2" aria-describedby="country-option-2" name="sex" value="Female" {{ (old('sex') == 'Female') ? 'checked' : ''}}>
                            <label for="country-option-2" class="text-sm font-medium text-gray-900 ml-2 block">
                            Female
                            </label>
                        </div>
                        <span class="text-danger">@error('sex') {{ $message }} @enderror</span>
                    </fieldset>
                </div>
                </div>
              </div>

              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Marital Status
                  </label>
                  <!-- Marital Status -->
                  <div class="max-w-lg mx-auto">
                    <fieldset class="mb-5">
                        <legend class="sr-only">
                            Marital Status
                        </legend>            
                        <div class="flex items-center mb-4">
                            <input id="country-option-1" type="radio" name="marital_status" value="Single" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1" {{ (old('marital_status') == 'Single') ? 'checked' : ''}}>
                            <label for="country-option-1" class="text-sm font-medium text-gray-900 ml-2 block">
                            Single
                            </label>
                        </div>               
                        <div class="flex items-center mb-4">
                            <input id="country-option-2" type="radio" name="marital_status" value="Married" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-2" aria-describedby="country-option-2" {{ (old('marital_status') == 'Married') ? 'checked' : ''}}>
                            <label for="country-option-2" class="text-sm font-medium text-gray-900 ml-2 block">
                            Married
                            </label>
                        </div>
                        <span class="text-danger">@error('marital_status') {{ $message }} @enderror</span>
                    </fieldset>
                </div>
                </div>
            </div>

            
            
            

        </div>
            <h6 class="text-black-900 text-msm mt-1 mb-6 font-bold uppercase">
              Other Information
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Address
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="address" value="{{old('address')}}">
                  <span class="text-danger">@error('address') {{ $message }} @enderror</span>
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    City
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="city" value="{{old('city')}}">
                  <span class="text-danger">@error('city') {{ $message }} @enderror</span>
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Zip Code
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="zip_code" value="{{old('zip_code')}}">
                  <span class="text-danger">@error('zip_code') {{ $message }} @enderror</span>
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Contact Number
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="contact_number" value="{{old('contact_number')}}">
                  <span class="text-danger">@error('contact_number') {{ $message }} @enderror</span>
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
