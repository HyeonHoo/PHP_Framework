<?
    class Crosstab_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
			$sql="select product.name53 as product_name53, 
					sum( if(month(jangbu.writeday53)=1, jangbu.numo53,0) ) as s1,
					sum( if(month(jangbu.writeday53)=2, jangbu.numo53,0) ) as s2,
					sum( if(month(jangbu.writeday53)=3, jangbu.numo53,0) ) as s3,
					sum( if(month(jangbu.writeday53)=4, jangbu.numo53,0) ) as s4,
					sum( if(month(jangbu.writeday53)=5, jangbu.numo53,0) ) as s5,
					sum( if(month(jangbu.writeday53)=6, jangbu.numo53,0) ) as s6,
					sum( if(month(jangbu.writeday53)=7, jangbu.numo53,0) ) as s7,
					sum( if(month(jangbu.writeday53)=8, jangbu.numo53,0) ) as s8,
					sum( if(month(jangbu.writeday53)=9, jangbu.numo53,0) ) as s9,
					sum( if(month(jangbu.writeday53)=10, jangbu.numo53,0) ) as s10,
					sum( if(month(jangbu.writeday53)=11, jangbu.numo53,0) ) as s11,
					sum( if(month(jangbu.writeday53)=12, jangbu.numo53,0) ) as s12
					from jangbu left join product on jangbu.product_no53=product.no53 
					where year(jangbu.writeday53)=$text1
					group by jangbu.product_no53
					order by product.name53 limit $start,$limit";
			return $this->db->query($sql)->result();
        }

		public function rowcount( $text1 )
		{
			$sql="select product_no53 from jangbu 
					where year(writeday53)=$text1 group by product_no53";
			return $this->db->query($sql)->num_rows();
		}

    }
?>
