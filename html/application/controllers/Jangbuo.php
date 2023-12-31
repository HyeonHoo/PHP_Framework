<?
    class Jangbuo extends CI_Controller {       // jangbuo클래스 선언
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("jangbuo_m");    // 모델 jangbuo_m 연결
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
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : date("Y-m-d") ;

					$base_url = "/jangbuo/lists/text1/$text1/page";    // $page_segment = 6;

					$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
					$base_url = "/~sale53" . $base_url;

					$config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
					$config["total_rows"] = $this->jangbuo_m->rowcount($text1);  // 전체 레코드개수 구하기
					$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
					$config["base_url"]	 = $base_url;                // 기본 URL
					$this->pagination->initialize($config);           // pagination 설정 적용

					$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
					$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

					$start=$data["page"];                 // n페이지 : 시작위치
					$limit=$config["per_page"];        // 페이지 당 라인수
					$data["list"]=$this->jangbuo_m->getlist($text1,$start,$limit);   // 해당페이지 자료읽기


			$data["text1"]=$text1;                                      // text1 값 전달을 위한 처리
            $data["list"] = $this->jangbuo_m->getlist($text1,$start,$limit);    // 자료읽어 data배열에 저장 
            $this->load->view("main_header");						 // 상단출력(메뉴)
            $this->load->view("jangbuo_list",$data);				 // jangbuo_list에 자료전달
            $this->load->view("main_footer");                      // 하단 출력 
        }
	    
		public function view()
        {
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? urldecode($uri_array["no"]) : "" ;
		$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
		$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

			
		$data["text1"]=$text1;                                      // text1 값 전달을 위한 처리
		$data["page"]=$page;
		$data["row"] = $this->jangbuo_m->getrow($no);

		$this->load->view("main_header");                  
        $this->load->view("jangbuo_view",$data); 
        $this->load->view("main_footer");          
		}
		public function del()
        {
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no",$uri_array) ? urldecode($uri_array["no"]) : "" ;
		$text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
		$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

	
		$this->jangbuo_m->deleterow($no);

		redirect("/~sale53/jangbuo/lists" . $text1 . $page);
		}
		
		public function add()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


		    $this->load->library("form_validation");

			$this->form_validation->set_rules("writeday","날짜","required");
			$this->form_validation->set_rules("product_no","제품명","required");

			if ( $this->form_validation->run()==FALSE )
			{
				$data["list"] = $this->jangbuo_m->getlist_product();
				$this->load->view("main_header");
				$this->load->view("jangbuo_add",$data);    // 입력화면 표시
				$this->load->view("main_footer");
				
			}
			else              // 입력화면의 저장버튼 클릭한 경우
			{
				$data = array(
					"io53"				 =>  1,
					"writeday53"		 => $this->input->post("writeday",TRUE),
					"product_no53"	 => $this->input->post("product_no",TRUE),
					"price53"			 => $this->input->post("price",TRUE),
					"numi53"			 => 0,
					"numo53"		 => $this->input->post("numo",TRUE),
					"prices53"		 => $this->input->post("prices",TRUE),
					"bigo53"			 => $this->input->post("bigo",TRUE)
				);
				

				$result = $this->jangbuo_m->insertrow($data); 

				redirect("/~sale53/jangbuo/lists" . $text1 . $page);    //   목록화면으로 이동.
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
			$this->form_validation->set_rules("product_no","제품명","required");

			if ( $this->form_validation->run()==FALSE )
			{
				$data["list"] = $this->jangbuo_m->getlist_product();

				$this->load->view("main_header");
				$data["row"]=$this->jangbuo_m->getrow($no);
				$this->load->view("jangbuo_edit",$data);    // 입력화면 표시
				$this->load->view("main_footer");
				
			}
			else              // 입력화면의 저장버튼 클릭한 경우
			{
				$data = array(
					"io53"				 =>  1,
					"writeday53"		 => $this->input->post("writeday",TRUE),
					"product_no53"	 => $this->input->post("product_no",TRUE),
					"price53"			 => $this->input->post("price",TRUE),
					"numi53"			 => 0,
					"numo53"		 => $this->input->post("numo",TRUE),
					"prices53"		 => $this->input->post("prices",TRUE),
					"bigo53"			 => $this->input->post("bigo",TRUE)
				);
				
				$result = $this->jangbuo_m->updaterow($data,$no); 

				redirect("/~sale53/jangbuo/lists" . $text1 . $page);    //   목록화면으로 이동.
			}
		}

	


    }
?>
