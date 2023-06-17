 <?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>


	<script>
	

 function find_text()
    {
		if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
			form1.action="/~sale53/art_picasso/lists";
		else	                             // 값이 있는 경우, text1 값 전달
			form1.action="/~sale53/art_picasso/lists/text1/" + form1.text1.value;
		form1.submit();	
}

</script>

    <!-- ***** Hero Area End ***** -->        
 


	
	<div class="sonar-about-us-area bg-img">
        <!-- Back End Content -->
        <div class="backEnd-content">
            <h2>Dream</h2>
        </div>
<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
?>
<?
			if ($row->pic53)     // 이미지가 있는 경우
				echo("<div class='sonar-about-us-area bg-img' style='background-image: url(/~sale53/product_img/$row->pic53);'");
			else                   // 이미지가 없는 경우
					echo("<div class='sonar-about-us-area bg-img' style='background-image: url(/~sale53/my/img/bg-img/about2.jpg);'");
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="about-us-content bg-white">
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                            <div class="line"></div>
                            <h2><?=$row->intro53 ?></h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="600ms"><?=$row->sub_intro53 ?></p>
                        <!-- Progress Bar Content Area -->
                        <div class="services-progress-bar mt-50 wow fadeInUp" data-wow-delay="900ms">
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar">
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="80"></span>
                                </div>
                                <p>색체 시대</p>
                            </div>
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar">
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                                <p>캔버스에 유채</p>
                            </div>
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar">
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="100"></span>
                                </div>
                                <p>입체주의</p>
								<a href="/~sale53/art_picasso/view/no/<?=$no;?> 
								<?=$tmp; ?>" class="white-text"> </i>Detail</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
&nbsp;&nbsp;
<?
	}
?>
    <div class="sonar-about-us-area second-part bg-img" style="background-image: url(/~sale53/my/img/bg-img/dream.jpg);">
        <!-- Back End Content -->
        <div class="backEnd-content">
            <h2>Really</h2>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="about-us-content bg-white">
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                            <div class="line"></div>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="600ms">큐비즘(입체주의)이란 말은 1908년, 피카소가 <아비뇽의 아가씨들>을 그린 다음해에 브라크의 그림들을 보고 마티스가 한 말에서 유래했다. 그때 마티스는 “아, 입방체(cubic)들만으로도 그렇게 그릴 수 있구나”라고 감탄했다. 그리고 1908년 루이 보셀이 “브라크는 형태를 무시하고 장소든 사람이든 집이든 모든 것을 기하학적 도형으로 즉 입방체로 환원했다.”라는 평을 썼을 때 그것은 미술사의 한 용어로 정착되었다.</p>
                        <div class="row mt-100 text-center wow fadeInUp" data-wow-delay="900ms">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="80">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>아비뇽의 처녀들</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="65">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>마리테레즈 발테르의초상</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="single-pie-bar" data-percent="95">
                                    <canvas class="bar-circle" width="100" height="100"></canvas>
                                    <p>게르니카</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

				
</div>



