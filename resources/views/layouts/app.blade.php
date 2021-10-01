<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

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
            <div
                class="flex items-center p-4 bg-red-200 rounded-lg shadow-xs cursor-pointer hover:bg-red-500 hover:text-gray-100">

                <img src="{{asset('assets/img/report.svg')}}" class="img-responsive w-5 h-4 mr-2" alt="">
                <div>
                    <p class=" text-xs font-medium ml-2 ">
                        بەشی ڕاپۆرت
                    </p>

                </div>
            </div>
        </div>

        <div class="p-2 col-lg-3 col-sm  ">
            <div
                class="flex items-center p-4 bg-yellow-200 rounded-lg shadow-xs cursor-pointer hover:bg-yellow-500 hover:text-gray-100">

                <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>JavaScript icon</title>
                    <path
                        d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
                </svg>
                <div>
                    <p class=" text-xs font-medium text-uppercase ml-2 ">
                        javascript
                    </p>

                </div>
            </div>
        </div>
        <div class="p-2 col-lg-3 col-sm  ">
            <div
                class="flex items-center p-4 bg-indigo-200 rounded-lg shadow-xs cursor-pointer hover:bg-indigo-500 hover:text-gray-100">

                <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>CSS3 icon</title>
                    <path
                        d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" />
                </svg>
                <div>
                    <p class=" text-xs font-medium ml-2 ">
                        CSS
                    </p>

                </div>
            </div>
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
