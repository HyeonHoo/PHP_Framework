<!DOCTYPE html>
<html lang="en">

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

    <!-- Grids -->
    <div class="grids d-flex justify-content-between">
        <div class="grid1"></div>
        <div class="grid2"></div>
        <div class="grid3"></div>
        <div class="grid4"></div>
        <div class="grid5"></div>
        <div class="grid6"></div>
        <div class="grid7"></div>
        <div class="grid8"></div>
        <div class="grid9"></div>
    </div>

    <!-- ***** Main Menu Area Start ***** -->
    <div class="mainMenu d-flex align-items-center justify-content-between">
        <!-- Close Icon -->
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true"></i>
        </div>
        <!-- Logo Area -->
        <div class="logo-area">
            <a href="index.html">Picasso</a>
        </div>
        <!-- Nav -->
        <div class="sonarNav wow fadeInUp" data-wow-delay="1s">
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
		<!------ Modal Login ---------->
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
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/FirstCommunion.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>First Communion</h2>
                                <p>피카소는 라 코루냐 예술학교에 입학했던, 11살때부터 직업적으로 그림을 그리기 시작했다. 이 그림은 14살때
									그리기 시작했으며, 색조,구성,기술에 있어 거장의 솜씨가 엿보인다. 피카소는 이후에 "나는 15살때 이미 벨라스케스처럼 그림을 그렸으며, 어린아이처럼 그림을 그리는데 80년이 걸렸다" 라고 술회했다.
									</p>
								</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/womaninblue.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Woman in blue</h2>
                                <p>20세 약관의 나이에, 정형화된 화풍을 탈피하기 시작했으며, 마드리드의 성 페르난도 미술학원에서 공부하면서, 
								주르바노 거리에서 스튜디오를 설립하였으며,여기서 그의 혁명적인 색채에 대한 아이디어를 그림에
							적용하기 시작했다. 이 작품은 국립예술전에 출품되었으나 심사위원들에 의해 탈락되었으며 이후로 오랫동안 잊혀진 채로 남아있었다.
							모델의 신비로운 눈, 표현, 화려한 드레스와 투톤의 배경색이 새로운 자연주의 영향아래서, 새로운 형식의 작품으로 탄생되었다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/TheLife.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>The Life</h2>
                                <p>청색시대의 대표적인 작품으로, 깡마른 형상, 알콜중독자, 걸인, 창녀와 같은 극빈계층의 삶을 표현하고 있다. 이 그림은 엘그레코의 스타일을 연상케 한다.이 그림은 바로셀로나에서 그려졌으며, 젊은 커플, 아이를 안은
								여인, 배경의 벌거벗은 인물들은 노년기의 외로움을 향한 인생유전을 묘사하고 있으며, 청색시대의 특징인 우울한 분위기에 휩싸여 있다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/TheTragedy.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>The Tragedy</h2>
                                <p>다른 청색시대의 작품이다. 이 시기의 작품은 우울함, 비극, 불행에 휩싸인 가족을 보여줌으로써 극적인 효과를 주고 있다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/FamilyofAcrobats.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Family of Acrobats</h2>
                                <p>핑크의 시기의 작품이다.
									피카소는 서커스와 곡예를 종종
									다루었다. 선과 색조가 더욱 생동감
									있게 표현되고 있다.
									</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/LaToilette.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>La Toilette</h2>
                                <p>핑크의 시대 중기작품으로, 마티스와 같은 그에게 영향을
									준 다른 작가들을 만나기 시작했다. 피카소는 여전히 두가지
									색조의 단순한 배경을 즐겨 사용하고 있으며, 구상도 동일
									하다. 그러나 색의 사용을 바꿈으로해서 그림을 완전히 다르게
									보이게 하고 있다.
									</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/TheHarem.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>The Harem</h2>
                                <p>핑크의 시대에 속하는 작품이긴 하지만, 아비뇽의
									여인들과의 관련성을 생각케 하는 작품이다.
									허큘레스를 연상하는 남자는 와인을 마시면서 욕망의
									대상으로 여성들을 바라보고 있다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/LesDemo.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Les Demoiselles D'Avignon</h2>
                                <p>원시적이며 고전적인, 그리스와 아프리카의 영향이 보이기 시작하면서
									나타난 새로운 개념의 화법, 큐비즘.이 새로운 화풍의 첫번째 작품으로,
									후에 수많은 화가들이 이 화풍을 모방하게 된다. 여성누드화에서 전통적으로 사용되던, 부드러움과 섬세함은
									급격하게 거친각도와 평면으로 변화되었으며, 이 시기 대부분의 비평가로부터 외면되었다.</p>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/StillLife.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Still Life</h2>
                                <p>큐비즘:혼란스러운 형태, 앵글들, 수없이 중첩된 평면들..
								  제목인 죽은새는 매우 찾기 어렵고, 깃털들은 서로 다른 평면에서 나타나고 있다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/TheBreadFlute.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>The Bread Flute</h2>
                                <p>1차 세계대전 이후로 그의 미술세계는 더욱
									고전적이고 실체적인 개념으로 변모되었다.
									구상으로의 회귀와 인체를 다시 다루고 있다.
									인물과 커다란 석조구조물로 된 배경은 그리스적인 고전미를 보여주지만, 지중해적인 풍광을
									더하고 있다. 이 시기 피카소는 큐비즘에 대해서도 지속적인 시도를 하였으며, 그의 창조적인
									천재성에 의해 계속해서 나아가게 하였다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/Instruments.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Instruments de musique sur une table</h2>
                                <p>피카소는 미로와 친분을 가졌는데, 그림에서도 그러한 면이 많이 투영되고 있다.
								이 그림도 그러한 경향을 뚜렷하게 보여주고 있다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(/~sale53/my/img/bg-img/Busteetpallette.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Buste et pallette</h2>
                                <p>이 그림은 정물화의 간단한 구성을 보여주고 있으며, 배경과 주요대상들의 조화를
								매우 공격적인 선으로 살리고 있다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <div class="portfolio-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-title">
                        <h2>"Every child is an artist. The problem is how to remain an artist once he grows up." 
						</h2>
						<h2>-Pablo Ruiz Picasso-</>
                    </div>
                </div>
            </div>
<div class="row justify-content-between">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item mt-100 portfolio-item-1 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="/~sale53/my/img/core-img/dots.png" alt="">
                            <h2>Picasso</h2>
                        </div>
                        <div class="portfolio-thumb">
                            <img src="/~sale53/my/img/bg-img/selfportrait.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">1899~1901</p>
                            <h2>Self-Portrait</h2>
                        </div>
                    </div>
                </div>
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-6">
                    <div class="single-portfolio-item mt-230 portfolio-item-2 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="/~sale53/my/img/core-img/dots.png" alt="">
                        </div>
                        <div class="portfolio-thumb">
                            <img src="/~sale53/my/img/bg-img/life.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">1901~1904</p>
                            <h2>Life</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-10">
                    <div class="single-portfolio-item mt-100 portfolio-item-3 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="/~sale53/my/img/core-img/dots.png" alt="">
                            
                        </div>
                        <div class="portfolio-thumb">
                            <img src="/~sale53/my/img/bg-img/Guernica.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">1937</p>
                            <h2>Guernica</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-6">
                    <div class="single-portfolio-item portfolio-item-4 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="/~sale53/my/img/core-img/dots.png" alt="">
                        </div>
                        <div class="portfolio-thumb">
                            <img src="/~sale53/my/img/bg-img/Clown.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">1905-1906</p>
                            <h2>Acrobats and Clowns</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item portfolio-item-5 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="/~sale53/my/img/core-img/dots.png" alt="">
                            <h2>Future</h2>
                        </div>
                        <div class="portfolio-thumb">
                            <img src="/~sale53/my/img/bg-img/thedream.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">1932</p>
                            <h2>The Dream</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-4">
                    <div class="single-portfolio-item portfolio-item-6 wow fadeIn">
                        <div class="portfolio-thumb">
                            <img src="/~sale53/my/img/bg-img/tumblers.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">1905</p>
                            <h2>Tumblers</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-4">
                    <div class="single-portfolio-item portfolio-item-7 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="/~sale53/my/img/core-img/dots.png" alt="">
                            <h2>Future</h2>
                        </div>
                        <div class="portfolio-thumb">
                            <img src="/~sale53/my/img/bg-img/guitar.jpg" alt="">
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">1913</p>
                            <h2>Guitar</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Call to Action Area Start ***** -->
    <div class="sonar-call-to-action-area section-padding-0-100">
        <div class="backEnd-content">
            <h2>Dream</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content wow fadeInUp" data-wow-delay="0.5s">
                        <h2>Do you want to see more works?</h2>
                        
                        <a href="/~sale53/art_work" class="btn sonar-btn mt-100">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>