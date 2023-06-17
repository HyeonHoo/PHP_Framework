<?
    class Product_m extends CI_Model     // 모델 클래스 선언
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
                  where product.name53 like '%$text1%' order by product.name53 limit $start,$limit";

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
	
	function deleterow($no)  
		{
			$sql="delete from product where no53=$no";
			return  $this->db->query($sql);
		}
	function insertrow($row)
		{
			 return $this->db->insert("product",$row);
		}

	function updaterow($row, $no)
		{
			$where=array( "no53"=>$no );
			return $this->db->update( "product", $row, $where);
		}
	
	function getlist_gubun()
		{
			$sql="select * from gubun order by name53";
			return $this->db->query($sql)->result();
		}

	function cal_jaego()
		{
			$sql="drop table if exists temp;";
			$this->db->query($sql);

			$sql="create table temp (
					no53 int not null auto_increment,
					product_no53 int,
					jaego53 int default 0,
					primary key(no53) );";
			$this->db->query($sql);		//temp 테이블 생성

			$sql="update product set jaego53=0;";
			$this->db->query($sql);		// jaego 필드값 0으로 초기화

			$sql="insert into temp (product_no53, jaego53)
					select product_no53, sum(numi53)-sum(numo53) from jangbu
					group by product_no53;";
			$this->db->query($sql);		// jaego 계산

			$sql="update product inner join temp on product.no53=temp.product_no53
					set product.jaego53=temp.jaego53;";
			$this->db->query($sql);		//jaego값 product 테이블에 복사
		}
    }
?>
