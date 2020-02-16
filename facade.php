<?php

class Database{
		
}

class Template{
	
}

class Logger{

}

class PageFacade{
	public function createAndServe($id, $msg=""){
		$db = new Database();
		$data = $db->getData($id);

		$template = new Template($id,$data);
		$template->serve();

		$logger = new Logger();
		$logger->log($msg.$id);

	}
}

$page = new PageFacade();

$id = $_POST['1'];
$page->createAndServe($id,"Serving a page for ID {$id}");
