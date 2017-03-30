<?php
class Mail{
	public static function send($to, $subject, $message){
		if(!Validate::isEmpty($to) && !Validate::isEmpty($subject) && !Validate::isEmpty($message)){
			if(mail($to, $subject, $message))
				return true;
			else
				return false;
		}
		return false;
	}
}