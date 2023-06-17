<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">음원</div>

		

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

<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>



		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-3" align="left">            

					<div class="input-group  input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">가수</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"  onKeydown="if (event.keyCode == 13) { find_text(); }" >

						<div class="input-group-append">
							<button class="btn  btn-sm btn-dark " type="button" onClick="find_text();">검색
							
							</button>
						</div>
					</div>

				</div>
				<div class="col-9" align="right">           
					   <a href="/~sale53/music/add<?=$tmp; ?>" class="btn btn-sm btn-dark">추가</a>
					   <a href="/~sale53/music/jaegos<?=$tmp; ?>" class="btn btn-sm btn-dark">음원재고</a>
				</div>
			</div>
		</form>
		<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>
&nbsp;&nbsp;


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



		<!------------------
		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
			<div class="card-deck">
			<div style="width:1000px; height:200px;  float:center; margin-right:10px;">
			<div class="card mb-4" style="max-width: 540px;">
		  <div class="row no-gutters">
			<div class="col-md-4">
			<?
					if ($row->pic53)     // 이미지가 있는 경우
						echo("<img src='/~sale53/product_img/$row->pic53' width='200'  class='mythumb_image2'>");
					else                   // 이미지가 없는 경우
						echo("<img src='' width='200' class='card-img-top'>");
			?>
			</div>

			
			<div class="col-md-8">
			  <div class="card-body">
				<h5 class="card-title"><?=$row->title53 ?></h5>
				<p class="card-text"><?=$row->name53 ?></p>
				<p class="card-text"><small class="text-muted"><?=$row->genre_name53 ?></small></p>
				<a href="/~sale53/music/view/no/<?=$no;?> <?=$tmp; ?>" class="card-link">play</a>
			  </div>
			</div>
		  </div>
		</div>
		</div>
		</div>
		</figure>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<?
			}
		?>
		</table>


<!---------
		<table class="table table-hover">
				<thead>
			<tr>
			  <th scope="col">번호</th>
			  <th scope="col">장르</th>
			</tr>
		  </thead>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
			
		  <tbody>
			<tr>
			 <td> <?=$row->no53 ?></td>
			  <td><a href="/~sale53/music/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->name53 ?></td>
			</tr>		
	   </tbody>
		<?
			}
		?>
		</table>

		---------------------->

			<?=$pagination; ?>
