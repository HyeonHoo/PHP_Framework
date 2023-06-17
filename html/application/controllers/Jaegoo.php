<?
    class Jaegoo extends CI_Controller {       // jaegoo클래스 선언
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("jaegoo_m");    // 모델 jaegoo_m 연결
			$this->load->helper(array("url","date")); // redirect 사용하기 위해 연결
			$this->load->library("pagination");
		
			date_default_timezone_set("Asia/Seoul");         // 지역설정

        }
        public function index()                            // 제일 먼저 실행되는 함수
        {
            $this->lists();                                        // list 함수 호출
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : date("Y-m-d",strtotime("-1 month"));        // 1달 전 
			$text2 = array_key_exists("text2",$uri_array) ? urldecode($uri_array["text2"]) : date("Y-m-d");

					$base_url = "/jaegoo/lists/text1/$text1/text2/$text2/page";    // $page_segment = 6;

					$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
					$base_url = "/~sale53" . $base_url;

					$config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
					$config["total_rows"] = $this->jaegoo_m->rowcount($text1,$text2);  // 전체 레코드개수 구하기
					$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
					$config["base_url"]	 = $base_url;                // 기본 URL
					$this->pagination->initialize($config);           // pagination 설정 적용

					$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
					$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

					$start=$data["page"];                 // n페이지 : 시작위치
					$limit=$config["per_page"];        // 페이지 당 라인수


			$data["text1"]=$text1;                                      // text1 값 전달을 위한 처리
			$data["text2"]=$text2;
            $data["list"] = $this->jaegoo_m->getlist($text1,$text2,$start,$limit);    // 자료읽어 data배열에 저장 
            $this->load->view("main_header1");						 // 상단출력(메뉴)
            $this->load->view("jaegoo_list",$data);				 // jaegoo_list에 자료전달
            $this->load->view("main_footer1");                      // 하단 출력 
        }
	    
		public function view()
        {
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? urldecode($uri_array["no"]) : "" ;
		$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : date("Y-m-d",strtotime("-1 month"));        // 1달 전 
		$text2 = array_key_exists("text2",$uri_array) ? urldecode($uri_array["text2"]) : date("Y-m-d");
		$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

			
		$data["text1"]=$text1;                                      // text1 값 전달을 위한 처리
		$data["text2"]=$text2;
		$data["page"]=$page;
		$data["row"] = $this->jaegoo_m->getrow($no);

		$this->load->view("main_header1");                  
        $this->load->view("jaegoo_view",$data); 
        $this->load->view("main_footer1");          
		}

		public function del()
        {
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? urldecode($uri_array["no"]) : "" ;
		$text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
		$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

	
		$this->jaegoo_m->deleterow($no);

		redirect("/~sale53/jaegoo/lists" . $text1 . $text2 . $page);
		}
		
		public function add()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


		    $this->load->library("form_validation");

			$this->form_validation->set_rules("writeday","날짜","required");
			$this->form_validation->set_rules("music_no","음반명","required");

			if ( $this->form_validation->run()==FALSE )
			{
				$data["list"] = $this->jaegoo_m->getlist_music();
				$this->load->view("main_header1");
				$this->load->view("jaegoo_add",$data);    // 입력화면 표시
				$this->load->view("main_footer1");
				
			}
			else              // 입력화면의 저장버튼 클릭한 경우
			{
				$data = array(
					"mu53"				 =>  1,
					"writeday53"		 => $this->input->post("writeday",TRUE),
					"music_no53"	 => $this->input->post("music_no",TRUE),
					"jaego53"			 => $this->input->post("jaego",TRUE),
					"mui53"			 => 0,
					"muo53"		 => $this->input->post("muo",TRUE),
					"jaegos53"		 => $this->input->post("jaegos",TRUE),
					"comment53"			 => $this->input->post("comment",TRUE)
				);
				

				$result = $this->jaegoo_m->insertrow($data); 

				redirect("/~sale53/jaegoo/lists" . $text1 . $text2 . $page);    //   목록화면으로 이동.
			}
		}

		public function edit()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no = array_key_exists("no",$uri_array) ? urldecode($uri_array["no"]) : "" ;
			$text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			
		    $this->load->library("form_validation");

			$this->form_validation->set_rules("writeday","날짜","required");
			$this->form_validation->set_rules("music_no","음반명","required");

			if ( $this->form_validation->run()==FALSE )
			{
				$data["list"] = $this->jaegoo_m->getlist_music();

				$this->load->view("main_header1");
				$data["row"]=$this->jaegoo_m->getrow($no);
				$this->load->view("jaegoo_edit",$data);    // 입력화면 표시
				$this->load->view("main_footer1");
				
			}
			else              // 입력화면의 저장버튼 클릭한 경우
			{
				$data = array(
					"mu53"				 =>  1,
					"writeday53"		 => $this->input->post("writeday",TRUE),
					"music_no53"	 => $this->input->post("music_no",TRUE),
					"jaego53"			 => $this->input->post("jaego",TRUE),
					"mui53"			 => 0,
					"muo53"		 => $this->input->post("muo",TRUE),
					"jaegos53"		 => $this->input->post("jaegos",TRUE),
					"comment53"			 => $this->input->post("comment",TRUE)
				);
				
				$result = $this->jaegoo_m->updaterow($data,$no); 

				redirect("/~sale53/jaegoo/lists" . $text1 . $text2 . $page);    //   목록화면으로 이동.
			}
		}

	


    }
?>
