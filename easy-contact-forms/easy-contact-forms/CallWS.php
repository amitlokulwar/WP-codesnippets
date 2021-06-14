<?php
	class CallWS{
		private $wsUrl = "http://www.cytrack.com/Licence/LicenceService.asmx";
		private $queryString = array();
		private $implodString;
		private $methodName;
		public function __construct($method,$data){
			// Check which method needs to call.
			if(empty($method)){
				die("Method name should not be blank");
			}else{
				$this->methodName = $method;
			}
			if(!empty($data)){
				foreach($data as $key => $value){
					$key = $this->getKeyName($key);
					$stringUrl = $key."=".$value;
					array_push($this->queryString, $stringUrl);
				}
				// Create query string.
				$this->implodString = implode("&",$this->queryString);
				// Call Web service.
				$this->callWSURL();
			}
		}
		public function callWSURL($methodname=""){
			if(!empty($methodname)){
				$this->methodName = $methodname;
			}
			$url = $this->wsUrl."/".$this->methodName;
			//open connection
			$ch = curl_init();
			
			// set url
			curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $this->implodString);
			header("Content-type: text/xml");
			//execute post
			$result = curl_exec($ch);
						
			//close connection
			curl_close($ch);
			
		}
		public function getKeyName($key){
			if($key == "id-3722"){
				$key = "cdcode";
			}elseif($key == "id-3736"){
				$key = "systemcode";
			}elseif($key == "id-3731"){
				$key = "emailAddress";
			}elseif($key == "id-3723"){
				$key = "contactName";
			}elseif($key == "id-3724"){
				$key = "companyName";
			}elseif($key == "id-3732"){
				$key = "resellerName";
			}elseif($key == "id-3725"){
				$key = "pabxSerialNumber";
			}elseif($key == "id-3726"){
				$key = "phoneNumber";
			}elseif($key == "id-3737"){
				$key = "webPage";
			}elseif($key == "id-3727"){
				$key = "street";
			}elseif($key == "id-3738"){
				$key = "suburb";
			}elseif($key == "id-3728"){
				$key = "region_city";
			}elseif($key == "id-3735"){
				$key = "state";
			}elseif($key == "id-3750"){
				$key = "county";
			}elseif($key == "id-3753"){
				$key = "country";
			}elseif($key == "id-3740"){
				$key = "postcode";
			}elseif($key == "id-3744"){
				$key = "cdcode";
			}elseif($key == "id-3745"){
				$key = "systemcode";
			}
			return $key;
		}
		
	}
	/* Dummy post data.
	$_POST["id-3744"] = "F8F7323";
	$_POST["id-3745"] = "DE 73 44 A7 85 A0 80 1F BF 77 75 ED 8D";
	*/
	// Validate the post data.
	if(!empty($_REQUEST)){
		if(count($_REQUEST) <= 3){
			// To get ReLicence 
			$objCallWS = new CallWS("GetReLicence",$_REQUEST);
		}else{
			// To get licence 
			$objCallWS = new CallWS("GetLicence",$_REQUEST);
		}
	}
	
?>