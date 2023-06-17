<?
    class Jaegoo_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$text2,$start,$limit)
        {
				$sql="select playlist.*, music.title53 as music_title53 
                  from playlist left join music on playlist.music_no53=music.no53 
				  where playlist.mu53=1 and playlist.writeday53 between '$text1' and '$text2' 
                  order by playlist.no53 limit $start,$limit";								  // 전체 자료	
				return $this->db->query($sql)->result();
		
        }

		public function rowcount( $text1,$text2 )
		{
			$sql="select * from playlist where mu53=1 and playlist.writeday53 between '$text1' and '$text2'  ";
			return $this->db->query($sql)->num_rows();
		}

	function getrow($no)  
		{
			$sql="select playlist.*, music.title53 as music_title53 
                  from playlist left join music on playlist.music_no53=music.no53 
				 where playlist.no53=$no";
			return  $this->db->query($sql)->row();
		}
	
	function deleterow($no)  
		{
			$sql="delete from playlist where no53=$no";
			return  $this->db->query($sql);
		}
	function insertrow($row)
		{
			 return $this->db->insert("playlist",$row);
		}

	function updaterow($row, $no)
		{
			$where=array( "no53"=>$no );
			return $this->db->update( "playlist", $row, $where);
		}
	
	function getlist_music()
		{
			$sql="select * from music order by title53";
			return $this->db->query($sql)->result();
		}
    }
?>
