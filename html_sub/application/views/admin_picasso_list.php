 <?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>
 <div class="container">
			<br>
			<div class="shadow p-3 mb-5 bg-white rounded">피카소</div>	


	<script>
	

 function find_text()
    {
		if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
			form1.action="/~sale53/admin_picasso/lists";
		else	                             // 값이 있는 경우, text1 값 전달
			form1.action="/~sale53/admin_picasso/lists/text1/" + form1.text1.value;
		form1.submit();	
}

</script>

    <!-- ***** Hero Area End ***** -->        
 


<form name="form1" action="" method="post">
<div class="col-15" align="right">   
	<a href="/~sale53/admin_picasso/add<?=$tmp; ?>" class="btn btn-sm btn-dark">추가</a>
</div>

&nbsp;&nbsp;
	
	<div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">

          <!--Table head-->
          <thead>
			<tr>
			  <th scope="col">메인 제목</td>
			  <th scope="col">본문</td>
			</tr>
		  </thead>

		<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
			
		  <tbody>
			<tr>
			
			 <td><a href="/~sale53/admin_picasso/view/no/<?=$no;?> <?=$tmp; ?>"><?=$row->intro53 ?></td>
			  <td><?=$row->sub_intro53 ?></td>
			</tr>		
	   </tbody>
		<?
			}
		?>
		     </table>
        <!--Table-->
      </div>
	
		<?=$pagination; ?>


