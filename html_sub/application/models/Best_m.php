<?
    class Best_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$text2,$start,$limit)
        {
			$sql="select product.name53 as product_name53, count(jangbu.numo53) as cnumo
					from jangbu left join product on jangbu.product_no53=product.no53 
					where io53=1 and jangbu.writeday53 between '$text1' and '$text2' 
					group by product.name53
					order by cnumo desc limit $start,$limit";
			return $this->db->query($sql)->result();
        }

		public function rowcount( $text1,$text2 )
		{
			$sql="select product.name53 as product_name53, count(jangbu.numo53) as cnumo
					from jangbu left join product on jangbu.product_no53=product.no53 
					where io53=1 and jangbu.writeday53 between '$text1' and '$text2'
					group by product.name53";
			return $this->db->query($sql)->num_rows();
		}

    }
?>
