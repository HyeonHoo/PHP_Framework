
<?
	class Art_main extends CI_Controller {               // 클래스이름 첫 글자는 대문자


		public function index()                              // 제일 먼저 실행되는 함수
    {
        $this->load->view("art_main_header");   // view폴더의 main_header.php 와
        $this->load->view("art_main_footer");     //                   main_footer.php 호출
    }

		
}
?>
				