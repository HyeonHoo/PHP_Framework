<?
    class Art_work_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
               if (!$text1)
				$sql="select work.*, explanation.name53 as explanation_name
                  from work left join explanation on work.ex_no53=explanation.no53 
                  order by work.title53 limit $start,$limit";								  // 전체 자료
			else
				$sql="select work.*, explanation.name53 as explanation_name
                  from work left join explanation on work.ex_no53=explanation.no53 
                   where work.title53 like '%$text1%' order by work.title53 limit $start,$limit";

            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }

		public function rowcount( $text1 )
		{
			if (!$text1)
				$sql="select * from work order by title53";
			else
				$sql="select * from work where title53 like '%$text1%' order by title53";

			return $this->db->query($sql)->num_rows();
		}

	function getrow($no)  
		{
			$sql="select work.*, explanation.name53 as explanation_name
                  from work left join explanation on work.ex_no53=explanation.no53 
				 where work.no53=$no";

			return  $this->db->query($sql)->row();
		}
	
	function deleterow($no)  
		{
			$sql="delete  from work where no53=$no";
			return  $this->db->query($sql);
		}
	function insertrow($row)
		{
			 return $this->db->insert("work",$row);
		}

	function updaterow($row, $no)
		{
			$where=array( "no53"=>$no );
			return $this->db->update( "work", $row, $where);
		}
	
		function getlist_explanation()
		{
			$sql="select * from explanation order by name53";
			return $this->db->query($sql)->result();
		}

    }
?>
