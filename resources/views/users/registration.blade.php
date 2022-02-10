
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

            <button class="bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">
              Save
            </button>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
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
            <h6 class="text-black-900 text-msm mt-3 mb-6 font-bold uppercase">
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
