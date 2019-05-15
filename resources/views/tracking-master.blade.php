<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đôrêmon Center | Theo dõi trình trạng máy</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{secure_asset('dist/css/adminlte.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{secure_asset('plugins/iCheck/square/blue.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-49484495-9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-49484495-9');
    </script>
  </head>
  <body class="hold-transition login-page">
    <div class="col-md-6 mx-auto my-5">
      <div class="login-logo">
        <a href="/tracking"><b>ĐÔRÊMON</b> Center</a>
        <h5>Cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của Đôrêmon!</h5>
      </div>
      <!-- /.login-logo -->
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-0"></div>
      <div class="col-lg-6">
      @if (count($errors) > 0) 
      @foreach ($errors->all() as $error) 
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fa fa-ban"></i> Thất bại!</h5> {!! $error !!}
        </div>
      @endforeach
      @endif
@yield('main')
      </div>
      <div class="col-lg-3">
        <!--<div class="col-md-12">-->
        <!--  <div id="fb-root"></div>-->
        <!--    <script>(function(d, s, id) {-->
        <!--      var js, fjs = d.getElementsByTagName(s)[0];-->
        <!--      if (d.getElementById(id)) return;-->
        <!--      js = d.createElement(s); js.id = id;-->
        <!--      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=617393991693425&autoLogAppEvents=1';-->
        <!--      fjs.parentNode.insertBefore(js, fjs);-->
        <!--    }(document, 'script', 'facebook-jssdk'));</script>-->
        <!--    <div class="fb-page" data-href="https://www.facebook.com/trungtamdoremoncantho" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">-->
        <!--    <blockquote class="fb-xfbml-parse-ignore" cite="https://www.facebook.com/trungtamdoremoncantho"><a href="https://www.facebook.com/trungtamdoremoncantho">Trung Tâm Đôrêmon Cần Thơ</a></blockquote>-->
        <!--    </div>-->
        <!--</div>-->
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{secure_asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{secure_asset('plugins/iCheck/icheck.min.js')}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass   : 'iradio_square-blue',
          increaseArea : '20%' // optional
        })
      })
    </script>
    
@yield('script')
  </body>
</html>