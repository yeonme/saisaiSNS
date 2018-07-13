<?php
 
class Application
{
	private $controller = null;
	private $action = null;
 
	public function __construct()
	{
		$cancontroll = false;
		$url = "";
		if (isset($_GET['uri'])) {
			$url = rtrim($_GET['uri'], '/');	//rtrim -> $_GET['url']의 오른쪽 끝 '/'를 제거하고 $url에 대입
			$url = filter_var($url, FILTER_SANITIZE_URL);	//$url에서 포함되어서는 안 될 문자 제거
		}

		$params = explode('/', $url);	// $url을 '/'를 기준으로 나눠 $params에 배열로 저장
		$counts = count($params);		// $params의 길이 저장
		$this->controller = "home";		// 본 클래스의 controller 변수에 'home' 저장(params 배열이 비었을 경우 대비)
		if(isset($params[0])) {			
			if($params[0]) $this->controller = $params[0];	// params 배열에서 경로 가져와 저장
		}
		if (file_exists('./application/controller/' . $this->controller . '.php')) {	// 호출한 경로가 존재하는지 확인
			require './application/controller/' . $this->controller . '.php';			// 존재하면 불러옴
			$this->controller = new $this->controller();
			$this->action = "index"; 	// action을 index로 초기화
			if(isset($params[1])) {
				if($params[1]) $this->action = $params[1];	//params의 두번째 값을 action에 저장
			}
			if (method_exists($this->controller, $this->action)) {	// 불러온 controller에 해당 메소드가 존재하나?
				$cancontroll = true;								// 존재함
				switch ($counts) {									// params 배열 길이에 따라 처리
					case '0':
					case '1':
					case '2':
						$this->controller->{$this->action}();
						break;
					case '3':
						$this->controller->{$this->action}($params[2]);
						break;
					case '4':
						$this->controller->{$this->action}($params[2],$params[3]);
						break;
					case '5':
						$this->controller->{$this->action}($params[2],$params[3],$params[4]);
						break;
					case '6':
						$this->controller->{$this->action}($params[2],$params[3],$params[4],$params[5]);
						break;
					case '7':
						$this->controller->{$this->action}($params[2],$params[3],$params[4],$params[5],$params[6]);
						break;
					case '8':
						$this->controller->{$this->action}($params[2],$params[3],$params[4],$params[5],$params[6],$params[7]);
						break;
					case '9':
						$this->controller->{$this->action}($params[2],$params[3],$params[4],$params[5],$params[6],$params[7],$params[8]);
						break;
					case '10':
						$this->controller->{$this->action}($params[2],$params[3],$params[4],$params[5],$params[6],$params[7],$params[8],$params[9]);
						break;
				}	
			}
		}  else {
			echo implode("|",$params);
		}
		if($cancontroll === false) echo "<!DOCTYPE html><html><head><meta charset='utf-8'></head><body><h1>찌이익!!! 잘못된 접근 찍!!!</h1></body></html>";
	}
}