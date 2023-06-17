<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Music</title>
    <link   href="/~sale53/my/css/bootstrap.min.css" rel="stylesheet">
    <script src="/~sale53/my/js/jquery-3.3.1.min.js"></script>
    <script src="/~sale53/my/js/popper.min.js"></script>
    <script src="/~sale53/my/js/bootstrap.min.js"></script>

	<link	href ="/~sale53/my/css/my.css" rel="stylesheet">

	<script src="/~sale53/my/js/moment-with-locales.min.js"></script>
	<script src="/~sale53/my/js/bootstrap-datetimepicker.js"></script>
	<link href="/~sale53/my/css/bootstrap-datetimepicker.css" rel="stylesheet">

	<link href="/~sale53/my/css/fontawesome-all.min.css"  rel="stylesheet">
</head>
<body>
<script>
       function find_text()
		{
			if (!form1.text1.value)      
				form1.action="/~sale53/music/lists";
			else                                   
				form1.action="/~sale53/music/lists/text1/" + form1.text1.value;
			form1.submit();
		}
		
</script>
    <div class="container-fluid">

			<nav class="navbar navbar-expand-lg navbar-light bg-light ">
				<a class="navbar-brand" href="/~sale53/main1">DJHO</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav mr-auto">
					
					<li class="nav-item">
						<a class="nav-link" href="/~sale53/genrelist">장르별</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/~sale53/chartlist">인기 음반</a>
						
					</li>
					<?
					if ($this->session->userdata('rank')==1)
					echo("
					<li class='nav-item dropdown'>
					<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>  
						 음원관리
					</a>
					<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
						<a class='dropdown-item' href='/~sale53/jaegoi'>앨범수입</a>
						<a class='dropdown-item' href='/~sale53/jaegoo'>앨범수출</a>
					</div>
				</li>");
					?>
					

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
						 음원정보
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="/~sale53/genre">장르</a>
						<a class="dropdown-item" href="/~sale53/music">음원</a>
						
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/~sale53/user">뮤지션</a>
					</li>
						
				<!-----
					<?
						if ($this->session->userdata('rank')==1)
						echo("
						<div class='dropdown-divider'></div>
						<a class='dropdown-item' href='/~sale53/user'>사용자</a>");
					?>
					------>
					
				
				<li class="nav-item">
						<a class="nav-link" href="/~sale53/gigan">업로드</a>
					</li>
				</ul>

			
			&nbsp;&nbsp;
		<?
			if (!$this->session->userdata('uid'))
				echo("<a href='#exampleModal' data-toggle='modal' class='btn btn-outline-success my-2 my-sm-0 btn-light'>로그인</a>");
			else
				echo("<a href='/~sale53/loginmusic/logout' class='btn btn-sm btn-outline-secondary btn-light'>로그아웃</a>");

		?>
		
</div>
</nav>
			
			<!------ Modal Login ---------->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				<div class="shadow p-3 mb-5 bg-white rounded">
						<h4 class="modal-title" id="exampleModalLabel">로그인</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body bg-light" style="text-align:center">
						<form name="form_login" method="post" action="/~sale53/loginmusic/check">
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

				<div class="img">
				<div class="content">
				<h1>Search for Artists,Bands,Tracks</h1>
				
				<a href="/~sale53/music">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button></a>
				</div>
				<div class="img-cover"></div>
				
				<img src="/~sale53/my/img/party2.jpg" class="d-block w-100" alt="Responsive image" height="950">
				</div>
				
				
				


				
	<!---
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
			  <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
				<div class="container">
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="/~sale53/my/img/main12.jpg" class="d-block w-100" alt="First slide" height="150">
				</div>
				<div class="carousel-item">
				 <img src="/my/img/main2.jpg" class="d-block w-100" alt="Second slide" height="150">
				</div>
				<div class="carousel-item">
				 <img src="/my/img/main3.jpg" class="d-block w-100" alt="Third slide" height="150">
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			------>
</div>