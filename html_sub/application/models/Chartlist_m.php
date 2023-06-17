<?
    class Chartlist_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$text2,$start,$limit)
        {
			$sql="select music.title53 as music_title53, count(playlist.muo53) as cmuo, music.pic53 as pic53
					from playlist left join music on playlist.music_no53=music.no53 
					where mu53=1 and playlist.writeday53 between '$text1' and '$text2' 
					group by music.title53
					order by cmuo desc limit $start,$limit";
			return $this->db->query($sql)->result();
        }

		public function rowcount( $text1,$text2 )
		{
			$sql="select music.title53 as music_title53, count(playlist.muo53) as cmuo, music.pic53 as music_pic53
					from playlist left join music on playlist.music_no53=music.no53 
					where mu53=1 and playlist.writeday53 between '$text1' and '$text2'
					group by music.title53";
			return $this->db->query($sql)->num_rows();
		}
		function getrow($no)  
		{
			$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
				 where music.no53=$no";

			return  $this->db->query($sql)->row();
		}
    }
?>
