<?php

/**
* 

*/
class SiteController
{
	public $pageName;
	public $content;
	public $title;

	public function __construct()
	{
		
		
	}

	public function renderList($StudentsHandler){
		$this->pageName = 'studentsList.phtml';
		$this->title = 'Список студентов';
		return($StudentsHandler->getAllStudents());
	}

	public function renderSearch($StudentsHandler){
		$this->pageName = 'search.phtml';
		$this->title = 'Поиск';
		return($StudentsHandler->findStudents());
	}
}