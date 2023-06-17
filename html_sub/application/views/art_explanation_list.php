<div class="container">
			<br>

<script>
       function find_text()
		{
			if (!form1.text1.value)      
				form1.action="/~sale53/art_explanation/lists";
			else                                   
				form1.action="/~sale53/art_explanation/lists/text1/" + form1.text1.value;
			form1.submit();
		}
</script>

<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";  ?>

<div class="sonar-services-area section-padding-100-50">
        	<div class="container">
					<div class="row">
                
<?
			foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
			{
				$no=$row->no53;                                    // 사용자번호
		?>
	
		 <!-- Single Services Area -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="single-services-area wow fadeInUp" data-wow-delay="300ms">
			<?
			if ($row->pic53)     // 이미지가 있는 경우
				echo(" <img src='/~sale53/product_img/$row->pic53'   alt=''></a>");
			else                   // 이미지가 없는 경우
					echo("<img src=''  alt=''></a>");
				?>		
								<h4><?=$row->name53 ?></h4>
								<p><?=$row->comment53?></p>
                    </div>
                </div>
				
          
		<?
			}
		?>

  </div>
        </div>
			</div>

			<?=$pagination; ?>
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