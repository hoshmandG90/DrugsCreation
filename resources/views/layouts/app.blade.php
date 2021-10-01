<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>


    <!-- Theme style and Font -->
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


    <link rel="icon" href="{{asset('assets/img/drug.svg')}}">

    
    @livewireScripts
    @livewireStyles
    <script src="{{asset('assets/js/turbolinks.js')}}"></script>
    <script src="{{asset('assets/js/turbolinks.min.js')}}"></script>



</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <!-- component -->
    <section class="container  px-6 my-1 flex flex-wrap  justify-center items-center">
        <div class="p-2 col-lg-3 col-sm ">
            <a href="{{route('record')}}"
                class="flex items-center p-4 bg-blue-200 rounded-lg shadow-xs cursor-pointer {{request()->is('record') ? ' bg-blue-500 text-gray-100' : 'hover:bg-blue-500 hover:text-gray-100'}} ">
                <img src="{{asset('assets/img/create.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">
                <div>
                    <p class="text-xs font-medium ml-2">
                        تۆماری ڕەچەتە
                    </p>

                </div>
            </a>
        </div>
        <div class="p-2 col-lg-3 col-sm ">
            <a href="{{route('medicine')}}"
                class="flex items-center p-4 bg-gray-200 rounded-lg shadow-xs cursor-pointer {{request()->is('medicine') ? 'bg-gray-500 text-gray-100' : ' hover:bg-gray-500 hover:text-gray-100'}}">

                <img src="{{asset('assets/img/drug.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">
                <div>
                    <p class="text-xs font-medium ml-2">
                        دروستکردنی ڕەچەتە
                    </p>

                </div>
            </a>
        </div>
        <div class="p-2 col-lg-3 col-sm  ">
            <a href="{{route('show')}}"
                class="flex items-center p-4 bg-green-200 rounded-lg shadow-xs cursor-pointer {{request()->is('show') ? 'bg-green-500 text-gray-100' : 'hover:bg-green-500 hover:text-gray-100'}} ">
                <img src="{{asset('assets/img/checklist.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">

                <div>
                    <p class=" text-xs font-medium ml-2 ">

                        لیستی تۆماری ڕەچەتە
                    </p>

                </div>
            </a>
        </div>
        <div class="p-2 md:w-40 ">
            <a href="{{route('report')}}"
                class="flex items-center p-4 bg-red-200 rounded-lg shadow-xs cursor-pointer {{request()->is('report') ? 'bg-red-500 text-gray-100' :'hover:bg-red-500 hover:text-gray-100'}} ">

                <img src="{{asset('assets/img/report.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">
                <div>
                    <p class=" text-xs font-medium ml-2 ">
                        بەشی ڕاپۆرت
                    </p>

                </div>
            </a>
        </div>

        <div class="p-2 col-lg-3 col-sm  delete ">
          <livewire:components.invoice/>
        </div>
   
    

    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')
        <div class="container-fluid mx-auto" style="margin-top:80px">

            <footer class="relative pt-8 pb-6 mt-8">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                            <div class="text-sm text-blueGray-500 font-semibold py-1">
                           <a href="https://www.facebook.com/ZingSoft"
                                    class="text-blueGray-500 hover:text-gray-800" target="_blank">
                                 <span>  بۆ دروستکردنی هەموو جۆرە داتابەسێک و سیستەمی ژمێریاری بەخواستی خۆتان </span> (ZingSoft)
                                 <br>
                                    <span>Hoshmand Kamal Co. 07511319337-07501055106</span>  

                                   </a>  

                                
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    </div>
    

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.js')}}"></script>


    <script>
        $(".sound").on("click", function(){
            var Sound=document.createElement("audio");
            Sound.src="assets/sound/add.mp3";
            Sound.play();  
        });
    

  
</script>
    {{-- SweetAlert --}}
    <script src="{{asset('plugins/sweetalert2/sweetalert2.all.js')}}"></script>

    <script>
        // success message for inserting record
        window.addEventListener('success', event => {
            Swal.fire(
                'سەرکەوتبوو',
                'زیادکرا بۆ تۆماری رەچەتە',
                'success'
            )

        })

        // delete messages for record



        window.addEventListener('show-delete-Confirmation', event => {
            Swal.fire({
                title: 'ئایا دڵنیایت ?',
                text: "! دەتەویت ئەم داتایە بسریتەوە ",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بەڵێ دڵنیام'
            }).then((result) => {
                if (result.isConfirmed) {
                    livewire.emit('deletedConfirmed');
                }
            })
        })

        window.addEventListener('success-deleted', event => {

            Swal.fire(
                'سرایەوە',
                'بەسەرکەوتووی داتاکە سرایەوە',
                'success'
            )
        })

    </script>

<script>
    $(".delete").on('click',function(){
        var sound=document.createElement('audio');
        sound.src="assets/sound/clear.mp3";
        sound.play();
  })
</script>


</body>

</html>
