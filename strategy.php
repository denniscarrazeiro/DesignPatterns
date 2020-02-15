<?php

class QuickSort{

	private $data;

	public function __construct(Array $data){
		$this->data = $data;
	}

	public function sort(){
		sort($this->data);
		return $this->data;
	}

}

class MergeSort{

	private $data;

	public function __construct(Array $dataLeft,Array $dataRight=[]){
		$this->data['left']  = isset($dataLeft['left']) ? $dataLeft['left'] : $dataLeft;
		$this->data['right'] = isset($dataLeft['right']) ? $dataLeft['right'] : $dataRight;
	}

	public function sort(){
		$sortArray = array_merge($this->data['left'],$this->data['right']);
		sort($sortArray);
		return $sortArray;
	}
}

function _sort(Array &$data,Array &$data1 = []){
	if(!empty($data1)){
		$tempData = new MergeSort($data,$data1);
	}else{
		$tempData = new QuickSort($data);		
	}
	return $tempData->sort();
}

$data  = [3,2,1,4,5,6,7,9,8];
$data1 = [15,23,45,56,220];
$sortArray = _sort($data,$data1);
print_r($sortArray);
