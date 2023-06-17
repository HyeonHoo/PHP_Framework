<?
    $no=$row->no53;
?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="sonar-testimonials-area bg-img" style="background-image:						 url(/~sale53/product_img/<?=$row->pic53?>);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="testimonial-content bg-white">
                        <div class="section-heading text-left">
                            <div class="line"></div>
                            <h2><?=$row->intro53 ?></h2>
                        </div>

                        <div class="testimonial-slides owl-carousel">

						<div class="single-tes-slide">
								<p><?=$row->intro53 ?></p>
                                <h6><?=$row->sub_intro53 ?></h6>
								</div>

                         <div class="single-tes-slide">
								<p><?=$row->intro53 ?></p>
                                <h6><?=$row->sub_intro53 ?></h6>
								</div>
                         
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100 wow fadeInUpBig" data-wow-delay="250ms">
                        <img src="/~sale53/my/img/core-img/golden-ratio.png" alt="">
                        <h2><span class="counter">700</span></h2>
                        <p>조각품</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100 wow fadeInUpBig" data-wow-delay="500ms">
                        <img src="/~sale53/my/img/core-img/canvas.png" alt="">
                        <h2><span class="counter">13,500</span></h2>
                        <p>작품 수</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100 wow fadeInUpBig" data-wow-delay="750ms">
                        <img src="/~sale53/my/img/core-img/sea.png" alt="">
                        <h2><span class="counter">1901.1904</span></h2>
                        <p>청색 시대</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100 wow fadeInUpBig" data-wow-delay="1000ms">
                        <img src="/~sale53/my/img/core-img/rose.png" alt="">
                        <h2><span class="counter">1905.1906</span></h2>
                        <p>장미빛 시대</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";  ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div align="center">
		<a href="/~sale53/art_picasso/edit<?=$tmp ?>" class="btn btn-sm btn-dark">수정</a>
		<a href="/~sale53/art_picasso/del<?=$tmp ?>" class="btn btn-sm btn-dark" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-dark" onclick="history.back();">		
		</div>
		&nbsp;&nbsp;&nbsp;
		</form>

