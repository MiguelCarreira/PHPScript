<?php
 
	class ClassCode
		{
			private $code       = "";
			private $lengthcode = "6";
		
			/*public function __construct(){
			    echo 'The class "', __CLASS__, '" was initiated!';
			}*/

			public function getcode(){
				$characters = ' !"#$%&\'()*+,-./23456789:;<=>?`abcdefghijkmnopqrstuvwxyz{|}~@ABCDEFGHIJKLMNPQRSTUVWXYZ[\]^_';
			    $charactersLength = strlen($characters);
			    $this->code = "";
			    for ($i = 0; $i < $this->lengthcode; $i++) {
			        $this->code .= $characters[rand(0, $charactersLength - 1)];
			    }
				return $this->code;
			}
		}


?>