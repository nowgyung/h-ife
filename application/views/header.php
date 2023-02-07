<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
        <style>
          * {
            font-family: 'Noto Sans KR', sans-serif;
          }
          body{
            padding-top :70px;
          }
          .form_control{
            padding-top:70px;
          }
          .content_inner{
            padding-top :50px;
            height:900px;
            text-align:center;
          }
          .login_register{
            height: 500px;
          }  
          .h2_basic{
            padding-top:20px;
            margin-left:300px;
          }
          .footer_basic{
            height:80px;
            background-color:#F2F2F2;
            padding: 15px 20px;
            
          }
          .bg_home{
            width: 100%;
            height: 1100px;
            position: relative;
            z-index: 1;
          }
          .bg_home::after{
            width: 100%;
            height:1100px;
            content: "";
            background:url("/static/img/home_life02.jpg");
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.2;
          }
          .good:hover {
            opacity:0.7;
          }
          .daily:hover {
            opacity:0.7;
          }
          .wise:hover {
            opacity:0.7;
          }
          .list-group-item:hover {
            background-color:#FFF3CD;
          }
          </style>
                 
    </head>
    <body>
      <?php
      if($this->session->flashdata('message')){
      ?>
      <script>
        alert('<?=$this->session->flashdata('message')?>');
      </script>
      <?php
      }
      ?>
      <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #F2F2F2">
        
          <a class="navbar-brand"  
          style="color:black; font-size:30px; font-weight:bold; "
          href="/">◤<span style="color:green">H</span>-IFE</a>       
        
        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
              if($this->session->userdata('is_login')){
                ?>
                <li>
                  <a class="mr-3 mt-1" href="/index.php/auth/logout">
                    <img src="/static/img/logout.png" alt="로그아웃"/>
                  </a>
                </li>
                <li>
                  <a class="mr-3" href="/index.php/auth/register"> 
                  <img src="/static/img/join.png" alt="회원가입"/>
                </a>
              </li>
                <?php
              }else{
                ?>
                <li class="mr-3 ">
                  <a href="/index.php/auth/login">
                <img src="/static/img/login.png" alt="login"/>
                </a>
                </li>
                <li>
                  <a class="mr-3" href="/index.php/auth/register"> 
                  <img src="/static/img/join.png" alt="회원가입"/>
                </a>
              </li>
                <?php
                }
                ?>     
          </ul>
        </div>
      </nav>

      <div class="bg_home">
        <div class="container-fluid">
          <div class="row">