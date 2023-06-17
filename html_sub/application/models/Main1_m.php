<?
    class Main1_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
        {
               if (!$text1)
				$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
                  order by music.name53 limit $start,$limit";								  // 전체 자료
																	  
			else
				$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
                   where music.name53 like '%$text1%' order by music.name53 limit $start,$limit";

            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }

		public function rowcount( $text1 )
		{
			if (!$text1)
				$sql="select * from music order by name53";
			else
				$sql="select * from music where name53 like '%$text1%' order by name53";

			return $this->db->query($sql)->num_rows();
		}

	function getrow($no)  
		{
			$sql="select music.*, genre.name53 as genre_name53 
                  from music left join genre on music.genre_no53=genre.no53 
				 where music.no53=$no";

			return  $this->db->query($sql)->row();
		}
	
	function deleterow($no)  
		{
			$sql="delete  from music where no53=$no";
			return  $this->db->query($sql);
		}
	function insertrow($row)
		{
			 return $this->db->insert("music",$row);
		}

	function updaterow($row, $no)
		{
			$where=array( "no53"=>$no );
			return $this->db->update( "music", $row, $where);
		}
	function getlist_genre()
		{
			$sql="select * from genre order by name53";
			return $this->db->query($sql)->result();
		}

		function cal_jaegos()
		{
			$sql="drop table if exists jaegos;";
			$this->db->query($sql);

			$sql="create table jaegos (
					no53 int not null auto_increment,
					music_no53 int,
					jaego53 int default 0,
					primary key(no53) );";
			$this->db->query($sql);		//temp 테이블 생성

			$sql="update music set jaego53=0;";
			$this->db->query($sql);		// jaego 필드값 0으로 초기화

			$sql="insert into jaegos (music_no53, jaego53)
					select music_no53, sum(mui53)-sum(muo53) from playlist
					group by music_no53;";
			$this->db->query($sql);		// jaego 계산

			$sql="update music inner join jaegos on music.no53=jaegos.music_no53
					set music.jaego53=jaegos.jaego53;";
			$this->db->query($sql);		//jaego값 product 테이블에 복사
		}


    }
?>
