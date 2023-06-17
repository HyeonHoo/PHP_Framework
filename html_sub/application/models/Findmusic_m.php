<?
    class Findmusic_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
              if (!$text1)
				$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
                  order by music.title53 limit $start,$limit";								  // 전체 자료
																	  
			else
				$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
                  order by music.title53 like '%$text1%' order by music.title53 limit $start,$limit";

            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }

		public function rowcount( $text1 )
		{
			if (!$text1)
				$sql="select * from music order by title53";
			else
				$sql="select * from music where title53 like '%$text1%' order by title53";

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
