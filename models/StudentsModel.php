<?php

/**
* 
*/

class Student
{
	public $student_name;

	public $student_sername;

	public $student_group;

	public $student_mark;
}


class StudentsHandler
{
	public $students=[];
	private $db = ['students', 'root', ''];

	// public function __construct(StudentsTableGateaway $STG)
	// {

	// }

	private function createStudent($name, $sername, $group, $mark)
	{
		$student = new Student;
		$student->$student_name = $name;
		$student->$student_sername = $sername;
		$student->$student_group = $group;
		$student->$student_mark = $mark;

		return($student);
	}

	private function addStudent()
	{

	}

	private function deleteStudent()
	{

	}

	public function getAllStudents()
	{
		$STG = new StudentsTableGateaway;
		$this->studets = $STG->getAllStudents();
		return($this->studets);
	}

	public function findStudents()
	{
		$STG = new StudentsTableGateaway;
		$this->studets = $STG->getStudentsByName(htmlspecialchars($_POST['search']));
		return($this->studets);
	}

}

