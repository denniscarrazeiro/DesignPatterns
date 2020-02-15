<?php

interface SocialMediaAdapter{
	public function postToWall($msg);
}

class Facebook{

	public function postToWall($img){
		echo "Posting message ...";
	}

}

class FacebookAdapter implements SocialMediaAdapter{

	private $facebook;

	public function __construct(Facebook $facebook){
		$this->facebook = $facebook;
	}

	public function postToWall($msg){
		$this->facebook->postToWall($msg);
	}
}

function getMessageFromUser(){
	return "bla bla bla";
}

$facebook = new FacebookAdapter(new Facebook());

$msg = getMessageFromUser();

$facebook->postToWall($msg);