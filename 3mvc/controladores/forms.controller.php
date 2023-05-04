<?php

class formsController{
	static public function ctrRegister(){
		if(isset($_POST['registerName'])){
			return 'ok';
		}
	}
}