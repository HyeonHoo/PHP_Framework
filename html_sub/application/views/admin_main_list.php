<div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">작품</div>	

<script>
 function find_text()
    {
		if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
			form1.action="/~sale53/admin_main/lists";
		else	                             // 값이 있는 경우, text1 값 전달
			form1.action="/~sale53/admin_main/lists/text1/" + form1.text1.value;
		form1.submit();	
}
</script>

 <?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>

<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-5" align="left">            

					<div class="input-group  input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">작품</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"  onKeydown="if (event.keyCode == 13) { find_text(); }" >

						<div class="input-group-append">
							<button class="btn  btn-sm btn-dark " type="button" onClick="find_text();">검색
							
							</button>
						</div>

					</div>

				</div>
				<div class="col-12" align="right">           
					   <a href="/~sale53/admin_main/add<?=$tmp; ?>" class="btn  btn-dark">추가</a>
					   
				</div>
			</div>
		</form>

	
&nbsp;&nbsp;
	
	<div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">

          <!--Table head-->
          <thead>
			<tr>
			  <th scope="col">작품 제목</td>
			  <th scope="col">작품 날짜</td>
			  <th scope="col">표현 기법</td>
			  <th scope="col">작품 소개</td>
			  <th scope="col">전시장</td>
			</tr>
		  </thead>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
			
		  <tbody>
			<tr>
			
			 <td><a href="/~sale53/admin_main/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->title53 ?></td>
			  <td><?=$row->writeday53 ?></a></td>
			  <td><?=$row->explanation_name?></td>
			  <td><?=$row->sub_title53 ?></td>
			  <td><?=$row->showroom53 ?></td>
			</tr>		
	   </tbody>
		<?
			}
		?>
		     </table>
        <!--Table-->
      </div>
	
		<?=$pagination; ?>



			
