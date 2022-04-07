<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QR Code Scanner</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


         <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

        <!--Other?-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <body>

<!-- component -->
<section class=" py-1 bg-white-50">

    

    <div class="w-full lg:w-5/12 px-4 mx-auto mt-2">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 pb-3 shadow-lg rounded-lg bg-purple-100 border-0">
        <div class="rounded-t bg-white mb-0 px-6 py-6">
          <div class="text-center flex justify-between">
            <h6 class="text-black-700 text-xl font-bold">
              QR Code Scanner
            </h6>
            
            <form>
            <button class="bg-purple-500 text-white active:bg-purple-600 hover:bg-purple-400 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
              <a href="{{ route('dtrlogs') }}" class="text-white">
              Cancel</a>
            </button>
          </div>
        </div>
        
        <button type="button" class="btn btn-secondary btn-lg" disabled>January 25, 2022 08:00am</button>
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <video id="preview" width="50%"></video>
                </div>
                <div class="col-md-6 align-self-center">
                    <label class>SCAN QR CODE</label>
                    <input type="text" name="text" id="text" readonly placeholder="Scan QR Code" class="form-control">
                </div>
            </div>
        </div>
    
        <script>
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
            Instascan.Camera.getCameras().then(function(cameras){
                if(cameras.length > 0 ){
                    scanner.start(cameras[0]);
                } else{
                    alert('No cameras found');
                }
    
            }).catch(function(e) {
                console.error(e);
            });
    
            scanner.addListener('scan',function(c){
                document.getElementById('text').value=c;
                document.forms[0].submit();
            });
         </script>

    </body>
</html>