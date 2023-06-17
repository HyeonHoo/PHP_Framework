<!DOCTYPE html>
<html lang="en">
    <link   href="/~sale53/my/css/bootstrap.min.css" rel="stylesheet">
    <script src="/~sale53/my/js/jquery-3.3.1.min.js"></script>
    <script src="/~sale53/my/js/popper.min.js"></script>
    <script src="/~sale53/my/js/bootstrap.min.js"></script>

	<link	href ="/~sale53/my/css/my.css" rel="stylesheet">

	<script src="/~sale53/my/js/moment-with-locales.min.js"></script>
	<script src="/~sale53/my/js/bootstrap-datetimepicker.js"></script>
	<link href="/~sale53/my/css/bootstrap-datetimepicker.css" rel="stylesheet">

	<link href="/~sale53/my/css/fontawesome-all.min.css"  rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

     <!-- Title  -->
    <title>Picasso</title>

    <!-- Favicon  -->
    <link rel="icon" href="/~sale53/my/img/core-img/picasso_icon.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/~sale53/my/style.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Main Menu Area Start ***** -->
    <div class="mainMenu d-flex align-items-center justify-content-between">
        <!-- Close Icon -->
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true"></i>
        </div>
        <!-- Logo Area -->
        <div class="logo-area">
            <a href="/~sale53/art_main">Picasso</a>
        </div>
        <!-- Nav -->
        <div class="sonarNav">
            <nav>
                <ul>
                      <li class="nav-item active">
                        <a class="nav-link" href="/~sale53/art_main">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/~sale53/art_picasso">About Me</a>
                    </li>
					 <li class="nav-item">
                        <a class="nav-link" href="/~sale53/art_work">Portfolio</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="/~sale53/art_explanation">Explanation</a>
                    </li>
				<?
				if (!$this->session->userdata('uid'))
				echo("
                    <li class='nav-item'>
                        <a href='#exampleModal' data-toggle='modal' class='nav-link'>Login</a>
                    </li>
					");
					else
					echo("
						<li class='nav-item'>
						<a href='/~sale53/loginart/logout' class='nav-link' >Logout</a>
                    </li>
					");
				?>	
                </ul>
            </nav>
        </div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header mycolor1">
						<h4 class="modal-title" id="exampleModalLabel">로그인</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body bg-light" style="text-align:center">
						<form name="form_login" method="post" action="/~sale53/loginart/check">
							<div class="form-inline">
								아이디 : &nbsp;&nbsp;
								<input type="text" name="uid" size="15" value="" class="form-control form-control-sm">
							</div>
							<div style="height:10px"></div>
							<div class="form-inline">
								암 &nbsp;&nbsp; 호 : &nbsp;&nbsp;
								<input type="password" name="pwd" size="15" value="" class="form-control form-control-sm">
							</div>
						</form>
					</div>
					<div class="modal-footer alert-secondary" style="text-align:center">
						<button type="button" class="btn btn-sm btn-secondary" onclick="javascript:form_login.submit();">확인</button>
						<button type="button" class="btn btn-sm btn-light" data-dismiss="modal"> 닫기</button>
						</div>
					</div>
				</div>
				</div>
        <!-- Copwrite Text -->
        <div class="copywrite-text">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Production &copy;<script>document.write(new Date().getFullYear());</script> Picasso's Personal Exhibition <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">ShinHyeonHo</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        </div>
    </div>
    <!-- ***** Main Menu Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <!-- Logo Area  -->
                        <div class="logo-area">
                            <a href="/~sale53/art_main">Picasso</a>
                        </div>

                        <div class="menu-content-area d-flex align-items-center">
                            <!-- Header Social Area -->
							<?
							if ($this->session->userdata('rank')==1)
							echo("
                           <div class='sonar-buttons-area'>
							<a href='/~sale53/admin_main' class='btn btn-sm sonar-btn btn-2 m-2'>Admin</a>
							</div>
							")
							?>
                            <!-- Menu Icon -->
                            <span class="navbar-toggler-icon" id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

   <!-- ***** Hero Area Start ***** -->
    <div class="hero-area d-flex align-items-center">
        <!-- Back End Content -->
        <div class="backEnd-content">
            <img class="dots" src="/~sale53/my/img/core-img/dots.png" alt="">
        </div>

        <!-- Hero Thumbnail -->
        <div class="hero-thumbnail aboutUs equalize bg-img" style="background-image: url(/~sale53/my/img/bg-img/picasso2.jpg);"></div>
        
        <!-- Hero Content -->
        <div class="hero-content aboutUs equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="line"></div>
                        <h2>Hello, My name is <br> Pablo Ruiz Picasso and <br>I am an genius artist</h2>
                        <p>입체파는 기존의 미술과 다르지 않다. 기존의 미술과 같은 원칙과 요소를 가지고 있기 때문이다. 오랫동안 입체파는 이해되지 않았기에 오늘날까지 사람들은 이를 볼 수 없었고, 없는 것처럼 간주되어 왔다. 나는 영어를 읽을 수 없다. 그러므로, 영어 책은 내게는 백지와 같다. 그렇다고 해서 영어가 존재하지 않는다고 할 수는 없다. 그렇기에 내가 모르는 것을 이해하지 못한다고 해서 내가 아닌 다른 누군가를 탓할 수 있겠는가?<br>
						-Pablo Ruiz Picasso-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->
        <!-- Portfolio Menu -->
  
    </div>
    <!-- ***** Hero Area End ***** -->