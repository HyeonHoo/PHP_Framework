<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">장르별 음원보기</div>
<script>
	
		function find_text()
		{
			form1.action="/~sale53/genrelist/lists/text1/" + form1.text1.value + "/page";
			form1.submit();
		}
		
</script>

<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>

		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-12" align="left"> 
					<div class="form-inline" >

						<div class="input-group  input-group-sm">
							<div class="input-group-prepend">
								<span class="input-group-text">장르명</span>
							</div>
							<div class="input-group-prepend">
								<select name="text1" class="form-control form-control-sm"
									onchange="javascript:find_text();">
									<option value="0">전체</option>
								<?
									foreach ($list_product as $row1)
									{
											if ($row1->no53==$text1)
												echo("<option value='$row1->no53' selected>$row1->name53</option>");
											else
												echo("<option value='$row1->no53' >$row1->name53</option>");
									}
								?>
								</select>
								</div>

								</div>
					</div>
				</div>
			</div>
&nbsp;&nbsp;
		</form>

	<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
				

		?>

<!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <?
			if ($row->pic53)     // 이미지가 있는 경우
				echo("<img src='/~sale53/product_img/$row->pic53' width='300'  class='mythumb_image2'
				>");
			else                   // 이미지가 없는 경우
					echo("<img src='' width='200' class='card-img-top'>");
			?>
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>


  <!-- Button -->
  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
      class="fas fa-chevron-right pl-1"></i></a>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title"><?=$row->title53 ?></h4>
    <hr>
    <!-- Text -->
    <p class="card-text"><?=$row->name53 ?></p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="far fa-book pr-1"></i>
	  <i class="far fa-comments pr-1"></i><?=$row->genre_name53 ?></li>
      <li class="list-inline-item pr-2">음반재고 :
          </i><?=$row->jaego53;?></a></li>
      <li class="list-inline-item"><a href="/~sale53/music/view/no/<?=$no;?> 
		<?=$tmp; ?>" class="white-text"><i class="fab fa-twitter pr-1"> </i>play</a></li>
    </ul>
  </div>

</div>



&nbsp;&nbsp;
<?
	}
?>


			<?=$pagination; ?>
