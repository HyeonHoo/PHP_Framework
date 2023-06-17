<?
    class Admin_picasso_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
              if (!$text1)
				$sql="select * from picasso order by intro53 limit $start,$limit";    // 전체 자료
			else
				$sql="select * from picasso where intro53 like '%$text1%' order by intro53 limit $start,$limit";
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }

		public function rowcount( $text1 )
		{
			if (!$text1)
				$sql="select * from picasso order by intro53";
			else
				$sql="select * from picasso where intro53 like '%$text1%' order by intro53";

			return $this->db->query($sql)->num_rows();
		}

	function getrow($no)  
		{
			$sql="select * from picasso where no53=$no";
			return  $this->db->query($sql)->row();
		}
	
	function deleterow($no)  
		{
			$sql="delete  from picasso where no53=$no";
			return  $this->db->query($sql);
		}
	function insertrow($row)
		{
			 return $this->db->insert("picasso",$row);
		}

	function updaterow($row, $no)
		{
			$where=array( "no53"=>$no );
			return $this->db->update( "picasso", $row, $where);
		}

		function getlist_work()
		{
			$sql="select * from work order by title53";
			return $this->db->query($sql)->result();
		}

    }
?>
