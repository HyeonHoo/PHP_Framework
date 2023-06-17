<?
    class genrelist_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
			if($text1=="0")
				$sql="select music.*,genre.name53 as genre_name53
					from music left join genre on music.genre_no53=genre.no53
					order by music.title53 limit $start,$limit";
			else
				$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
                   where genre.no53 like '%$text1%' order by music.name53 limit $start,$limit";

				return $this->db->query($sql)->result();
		
        }

		public function rowcount( $text1 )
		{
			if (!$text1)
				$sql="select * from music order by name53";
			else
				$sql="select * from music where genre_no53 like '%$text1%' order by name53";

			return $this->db->query($sql)->num_rows();
		}

	function getlist_product()
		{
			$sql="select * from genre order by name53";
			return $this->db->query($sql)->result();
		}
		function getrow($no)  
		{
			$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
				 where music.no53=$no";

			return  $this->db->query($sql)->row();
		}

		public function getlist_all( $text1 )
			{
				if($text1=="0")
				$sql="select music.*,genre.name53 as genre_name53
					from music left join genre on music.genre_no53=genre.no53
					order by music.title53 limit $start,$limit";
			else
				$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
                   where genre.name53 like '%$text1%' order by music.name53 limit $start,$limit";

				return $this->db->query($sql)->result();
			}

    }
?>
