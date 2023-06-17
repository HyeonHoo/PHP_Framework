<?
    class Graph_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$text2)
        {
			$sql="select gubun.name53 as gubun_name53, count(jangbu.numo53) as cnumo
					from (gubun right join product on gubun.no53=product.gubun_no53) 
							 right join jangbu on product.no53=jangbu.product_no53
					where io53=1 and jangbu.writeday53 between '$text1' and '$text2'
					group by gubun.name53
					order by cnumo desc limit 14";
			return $this->db->query($sql)->result();
        }

		public function rowcount( $text1,$text2 )
		{
			$sql="select gubun.name53 as gubun_name53, count(jangbu.numo53) as cnumo
					from (gubun right join product on gubun.no53=product.gubun_no53) 
							 right join jangbu on product.no53=jangbu.product_no53
					where io53=1 and jangbu.writeday53 between '$text1' and '$text2'
					group by gubun.name53 limit 14";
			return $this->db->query($sql)->num_rows();
		}

    }
?>
