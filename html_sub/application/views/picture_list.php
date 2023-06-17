
			<br>
			<div class="alert mycolor1" role="alert">제품사진</div>
<script>
       function find_text()
		{
			if (!form1.text1.value)      
				form1.action="/~sale53/picture/lists";
			else                                   
				form1.action="/~sale53/picture/lists/text1/" + form1.text1.value;
			form1.submit();
		}
		function zoomimage(iname,pname)
		{
			w=window.open("/~sale53/picture/zoom/iname/" + iname + '/pname/' + pname,
				"imageview", "resizable=yes,scrollbars=yes,status=no,width=800,height=600");
			w.focus();
		}
</script>
	

		<form name="form1" action="" method="post">
			<div class="row">
				<div class="col-6" align="left">            

					<div class="input-group  input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">이름</span>
						</div>
						<input type="text" name="text1" value="<?=$text1; ?>" class="form-control"  onKeydown="if (event.keyCode == 13) { find_text(); }" >

						<div class="input-group-append">
							<button class="btn  btn-sm mycolor1 " type="button" onClick="find_text();">검색</button>
						</div>
					</div>

				</div>
				<div class="col-6" align="right">           
					   
				</div>
			</div>
		</form>


		<div class="row">
		<?
		 foreach ($list as $row)
		 {
			 $iname=$row->pic53 ? $row->pic53 : "";
			 $pname=$row->name53;
		?>
				<div class="col-3">
					<div class="mythumb_box">
					<a href="javascript:zoomimage('<?=$iname ?>','<?=$pname?>');">
						<img src="/~sale53/product_img/thumb/<?=$iname ?>" class="mythumb_image">
					</a>
						<div class="mythumb_text"><?=$pname ?></div>
					</div>
				</div>
		<?
				}
		?>
		</div>

		
		</table>

			<?=$pagination; ?>
