
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
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

 
  <link rel="icon" href="{{asset('assets/img/drug.svg')}}">

  @livewireStyles

  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
   

   
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img/zingSoft.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ZingSoft</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/zingSoft.jpg')}}" class="img-circle elevation-2 " alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-sm">Hoshmand Kamal</a>
        </div>
      </div>

  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
     
      
          <li class="nav-item ">
            <a href="{{ route('record')}}" class="nav-link {{request()->is('record') ? 'active' : ' '}}">
                <i class="nav-icon fas fa-capsules"></i>
               <p>
                تۆمارکردنی ڕەچەتە
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('paitent')}}" class="nav-link {{request()->is('paitent') ? 'active' : ''}} ">
                <i class="nav-icon fas fa-user-injured"></i>
               <p>
                دروستکردنی ڕەچەتە
              </p>
            </a>
          </li>
     
   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid mx-auto" style="margin-top:80px">
          @yield('content')
 
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.js')}}"></script>

{{-- SweetAlert --}}
<script src="{{asset('plugins/sweetalert2/sweetalert2.all.js')}}"></script>

<script>

// success message for inserting record
window.addEventListener('success',event =>{
  Swal.fire(
      'سەرکەوتبوو',
      'زیادکرا بۆ تۆماری رەچەتە',
      'success'
    )

})

// delete messages for record



window.addEventListener('show-delete-Confirmation',event=>{
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

window.addEventListener('success-deleted',event => {

  Swal.fire(
      'سرایەوە',
      'بەسەرکەوتووی داتاکە سرایەوە',
      'success'
    )
})


window.addEventListener('success-updated',event => {

  Swal.fire(
      'سەرکەوتبوو',
      'بەسەرکەوتووی گۆرانکاریەکە کرا',
      'success'
    )
})


</script>

@livewireScripts

</body>
</html>
