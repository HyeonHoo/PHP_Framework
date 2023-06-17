<?
    class Loginmusic_m extends CI_Model     // 모델 클래스 선언
    {
        function getrow($uid,$pwd)
			{
				$sql="select * from user where uid53='$uid' and pwd53='$pwd' ";
				return $this->db->query($sql)->row();
			}

    }
?>
