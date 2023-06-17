<?
    $no=$row->no53;
?>
  <!-- Full Page Intro -->
  <div class="view">
    <!-- Mask & flexbox options-->
    <div class="mask gradient-card align-items-center">
      <!-- Content -->
      <div class="container d-flex justify-content-center my-4">

        <div id="mobile-box">

            <h4 class="my-5 h5 text-center" style="color:rgb(235, 232, 234)">Just click<i class="fas fa-play ml-2"></i></h4>

          <!-- Card -->
          <div class="card">

            <!-- Card image -->
            <div class="view">
			<?
				if ($row->pic53)     // 이미지가 있는 경우
					echo("<img src='/~sale53/product_img/$row->pic53' width='200'  class='mythumb_image3'
						alt='Card image cap'>");
				else                   // 이미지가 없는 경우
					echo("<img src='' width='200' class='card-img-top'>");
			?>
              
            <!-- Card content -->
            <div class="card-body text-center">

              <h5 class="h5 font-weight-bold"><?=$row->title53 ?></a></h5>
			
              <p class="mb-0"><?=$row->name53 ?></p>
				&nbsp;&nbsp;	
              <audio controls  loop>
		 <source src="/~sale53/music_fe/<?=$row->music_file53 ?>" type="audio/mpeg">
		<embed src="/~sale53/music_fe/<?=$row->music_file53 ?>" type="audio/mpeg" autoplay="false" 
		controller="true" loop="true" width="200" height="70">
		</audio>
              

          </div>
          <!-- Card -->


        </div>
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->

<!------
		<div class="card" style="width: 18rem;">
		   <?
					if ($row->pic53)     // 이미지가 있는 경우
						echo("<img src='/~sale53/product_img/$row->pic53' width='200'  class='mythumb_image2'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' width='200' class='card-img-top'>");
      ?>
		  <div class="card-body">
			<h5 class="card-title"><?=$row->title53 ?></h5>
			<p class="card-text"><?=$row->name53 ?></p>
		  </div>
		  <div class="card-body">
			<audio controls  loop>
		 <source src="/~sale53/music_fe/<?=$row->music_file53 ?>" type="audio/mpeg">
		<embed src="/~sale53/music_fe/<?=$row->music_file53 ?>" type="audio/mpeg" autoplay="false" 
		controller="true" loop="true" width="200" height="70">
		</audio>
		</div>
		</div>
		<!-------------
			<br>
			<div class="alert mycolor1" role="alert">사용자</div>

		<form name="form1" method="post" action="">
		<table class="table table-bordered table-sm mymargin5">
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
			<td width="80%" align="left"><?=$row->no53 ?></td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2" style="vertical-align:middle">
				<font color="red">*</font> 이름
			</td>
			<td width="80%" align="left">
				<?=$row->name53 ?>
			</td>
		</tr>
		</table>
---------------->
<?    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";  ?>


		<div align="center">
		<a href="/~sale53/music/edit<?=$tmp ?>" class="btn btn-sm btn-info">수정</a>&nbsp;
		<a href="/~sale53/music/del<?=$tmp ?>" class="btn btn-sm btn-info" onClick="return confirm('삭제할까요 ?');">삭제</a>&nbsp;
		<input type="button" value="이전화면" class="btn btn-sm btn-info" onclick="history.back();">		
		</div>
		</form>

