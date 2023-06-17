<?
    class Gigan_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$text2,$text3,$start,$limit)
        {
			if ($text3=="0")
				$sql="select jangbu.*, product.name53 as product_name53 
                  from jangbu left join product on jangbu.product_no53=product.no53 
				  where jangbu.writeday53 between'$text1' and '$text2'
                  order by jangbu.no53 limit $start,$limit";								  // 전체 자료	
			else
				$sql="select jangbu.*, product.name53 as product_name53 
					  from jangbu left join product on jangbu.product_no53=product.no53 
					  where jangbu.writeday53 between'$text1' and '$text2' and jangbu.product_no53=$text3
					  order by jangbu.no53 limit $start,$limit";								  // 전체 자료	
				return $this->db->query($sql)->result();
		
        }

		public function rowcount( $text1,$text2,$text3 )
		{
			if ($text3=="0")
				$sql="select * from jangbu where  jangbu.writeday53 between'$text1' and '$text2' ";
			else
				$sql="select * from jangbu where  jangbu.writeday53 between'$text1' and '$text2' and jangbu.product_no53=$text3 ";
			return $this->db->query($sql)->num_rows();
		}

	function getlist_product()
		{
			$sql="select * from product order by name53";
			return $this->db->query($sql)->result();
		}

		public function getlist_all( $text1,$text2,$text3 )
			{
				if ($text3=="0")    // 전체인 경우
					$sql="select jangbu.*, product.name53 as product_name53 
								 from jangbu left join product on jangbu.product_no53=product.no53 
								 where jangbu.writeday53 between'$text1' and '$text2' 
								 order by jangbu.no53";
				else
					$sql="select jangbu.*, product.name53 as product_name53 
								 from jangbu left join product on jangbu.product_no53=product.no53 
								 where jangbu.writeday53 between'$text1' and '$text2' and jangbu.product_no53=$text3 
								 order by jangbu.no53";
				return $this->db->query($sql)->result();
			}

    }
?>
