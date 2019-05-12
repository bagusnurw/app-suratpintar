<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIM SURAT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link href="{{url('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('assets/front/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{url('assets/front/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('assets/front/css/stylish-portfolio.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style type="text/css">
        *{
               box-sizing: border-box;
         }

    body{
              margin:0;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              font-size:1rem;
              font-weight:normal;
              line-height:1.5;
              color:#333;
              overflow-x:hidden;
        }

    .v-header{
              height:100vh;
              display:flex;
              align-items:center;
              color:#fff;
        }

    .container{
              max-width:950px;
              padding-left:2rem;
              padding-right:2rem;
              margin:auto;
              text-align:center;
        }

    .fullscreen-video-wrap{
              position:absolute;
              top:0;
              left:0;
              width:100%;
              height:100vh;
              overflow:hidden;
        }

    .fullscreen-video-wrap video{
              min-height:100%;
              min-width:100%;
        }

    .header-overlay{
              height:100vh;
              position: absolute;
              top:0;
              left:0;
              width:100vw;
              z-index:1;
              background:#000000;
              opacity:0.85;
        }

    .header-content{
              z-index:2;
        }

    .header-content h1{
              font-size:50px;
              margin-bottom:0;
        }

    .header-content p{
              font-size:1.5rem;
              display:block;
              padding-bottom:2rem;
        }

    .btn{
              background: #1D809F;
              color:#fff;
              font-size:1.2rem;
              padding: 1rem 2rem;
              text-decoration: none;
        }

    .section{
              padding:20px 0;
        }

    .section-b{
              background:#333;
              color:#fff;
        }

    @media(max-width:960px){
      .container{
              padding-right:3rem;
              padding-left:3rem;
        }
    }
    </style>
   
</head>
<body>
    <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger">Navigation</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="{{ route('surat.index') }}">Admin Page</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <div class="v-header container">
    <div class="fullscreen-video-wrap">
      <video src="https://production.cdmycdn.com/assets/marketing-pages/intensives/bws/coding-scenes-9a2031e8142b40bdb5d936d5eef33dfa.mp4" autoplay="" loop="">
    </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-center">
      <h1>Selamat Datang</h1>
      <br/>
      <p>Website ini adalah halaman utama dari aplikasi manajemen surat, untuk mengakses aplikasi dimohon untuk login dahulu. Dan akses menu aplikasi manajemen surat ada di Navigation Bar pojok kanan atas.</p>
      <a class="btn" href="{{ route('login') }}">Login Disini !</a>
    </div>
  </div>
    
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('assets/front/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{url('assets/front/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{url('assets/front/js/stylish-portfolio.min.js')}}"></script>

</body>
</html>
