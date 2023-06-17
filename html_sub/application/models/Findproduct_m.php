<?
    class Findproduct_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
              if (!$text1)
				$sql="select product.*, gubun.name53 as gubun_name53 
                  from product left join gubun on product.gubun_no53=gubun.no53 
                  order by product.name53 limit $start,$limit";								  // 전체 자료
																	  
			else
				$sql="select product.*, gubun.name53 as gubun_name53 
                  from product left join gubun on product.gubun_no53=gubun.no53 
                  order by product.name53 like '%$text1%' order by product.name53 limit $start,$limit";

            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }

		public function rowcount( $text1 )
		{
			if (!$text1)
				$sql="select * from product order by name53";
			else
				$sql="select * from product where name53 like '%$text1%' order by name53";

			return $this->db->query($sql)->num_rows();
		}

	function getrow($no)  
		{
			$sql="select product.*, gubun.name53 as gubun_name53 
                  from product left join gubun on product.gubun_no53=gubun.no53 
				 where product.no53=$no";
			return  $this->db->query($sql)->row();
		}
	
	
    }
?>
