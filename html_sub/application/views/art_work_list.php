 <?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>
	
	<script>
	

 function find_text()
    {
		if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
			form1.action="/~sale53/art_work/lists";
		else	                             // 값이 있는 경우, text1 값 전달
			form1.action="/~sale53/art_work/lists/text1/" + form1.text1.value;
		form1.submit();	
}

</script>

    <!-- ***** Hero Area End ***** -->        
 

<!-- search box start-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br/>
	<div class="row justify-content-center">
		<div class="col-12 col-md-10 col-lg-8">
			<form name="form1" action="" method="post" class="card card-sm">
				<div class="card-body row no-gutters align-items-center">
					<div class="col-auto">
						<i class="fas fa-search h5 text-body"></i>
					</div>
					&nbsp; &nbsp;
					<!--end of col-->
					<div class="col">
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control form-control-md form-control-borderless" onKeydown="if (event.keyCode == 13) { find_text(); }" placeholder="Search works name">
					</div>
					<!--end of col-->
					&nbsp; &nbsp;
					<div class="col-auto">
						<button class="btn btn-md btn-dark" type="submit" onClick="find_text();"><font class="b" color="#ffffff">Search</font></button>
					</div>
					<!--end of col-->
				</div>
			</form>	
		</div>
		<!--end of col-->
	</div>
</div>
</form>
<!-- search box end-->
				
 <section class="sonar-projects-area" id="projects">
        <div class="container-fluid">
            <div class="row sonar-portfolio">

&nbsp;&nbsp;

<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
?>
	
		
                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item landscapes studio wow fadeInUpBig" data-wow-delay="300ms">
                   <?
			if ($row->pic53)     // 이미지가 있는 경우
				echo("<a class='gallery-img' href='/~sale53/product_img/$row->pic53'>
					<img src='/~sale53/product_img/$row->pic53'   alt=''></a>");
			else                   // 이미지가 없는 경우
					echo("<a class='gallery-img' href=''>
					<img src=''  alt=''></a>");
				?>		
                    <!-- Gallery Content -->
                    <div class="gallery-content">
                        <h4><?=$row->title53 ?></h4>
                        <p><?=$row->explanation_name ?></p>
						<a href="/~sale53/art_work/view/no/<?=$no;?> 
					<?=$tmp; ?>" class="white-text"> </i>Detail</a></li>
                    </div>
                </div>
				
		
&nbsp;&nbsp;
<?
	}
?>
</div>	


