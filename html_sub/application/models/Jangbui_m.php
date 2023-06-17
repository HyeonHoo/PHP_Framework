<?
    class Jangbui_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
				$sql="select jangbu.*, product.name53 as product_name53 
                  from jangbu left join product on jangbu.product_no53=product.no53 
				  where jangbu.io53=0 and jangbu.writeday53='$text1'
                  order by jangbu.no53 limit $start,$limit";								  // 전체 자료	
				return $this->db->query($sql)->result();
		
        }

		public function rowcount( $text1 )
		{
			$sql="select * from jangbu where io53=0 and jangbu.writeday53='$text1'";
			return $this->db->query($sql)->num_rows();
		}

	function getrow($no)  
		{
			$sql="select jangbu.*, product.name53 as product_name53 
                  from jangbu left join product on jangbu.product_no53=product.no53 
				 where jangbu.no53=$no";
			return  $this->db->query($sql)->row();
		}
	
	function deleterow($no)  
		{
			$sql="delete from jangbu where no53=$no";
			return  $this->db->query($sql);
		}
	function insertrow($row)
		{
			 return $this->db->insert("jangbu",$row);
		}

	function updaterow($row, $no)
		{
			$where=array( "no53"=>$no );
			return $this->db->update( "jangbu", $row, $where);
		}
	
	function getlist_product()
		{
			$sql="select * from product order by name53";
			return $this->db->query($sql)->result();
		}
    }
?>
