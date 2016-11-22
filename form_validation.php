<?php
	function first_letter($val){
		$val!==ucfirst($val) ? $first_letter="The first letter is wrong" : $first_letter=null;
		return $first_letter;
	}

	function length($val, $len){
		strlen($val)>$len ? $length="Too long" : $length=null;
		return $length;
	}

	function only_letters($val){
		ctype_alpha($val)===FALSE ? $only_letters="It should be included only letters" : 
		$only_letters=null;
		return $only_letters;
	}

	function symbols($val){
		ctype_alnum($val)===TRUE ? $symbols="Incorrect password" : 
		$symbols=null;
		return $symbols;
	}

$errors=['username'=>[], 'password'=>[]];
$validators=[
'username'=>['length'=>15, 'first_letter'=>null, 'only_letters'=>null], 
'password'=>['length'=>255, 'symbols'=>null]
];

if ($_SERVER['REQUEST_METHOD']==='POST') {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		foreach ($validators as $k => $v) {
			$value=$_POST[$k];
			$len=$v['length'];
			foreach ($v as $validator => $val) {
				switch ($validator) {
					case 'length':
						array_push($errors[$k], length($value,$len));
						break;
					case 'first_letter':
						array_push($errors[$k], first_letter($value));
						break;
					case 'only_letters':
						array_push($errors[$k], only_letters($value));
						break;
					case 'symbols':
						array_push($errors[$k], symbols($value));
						break;
				}
			}
		}
	}
}
$result_validation=[];
	foreach ($errors as $k=>$error) {
		foreach ($error as $value) {
			if ($value===null){
				$result_validation[]=true;	
			}else{
				$result_validation[]=false;
			}
		}
	}


