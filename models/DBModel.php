<?php

class StudentsTableGateaway
{
	// public function __construct(PDO $pdo)
	// {

	// }

	public function getAllStudents($order)
	{
		$pdo = new PDO("mysql:host=localhost; dbname=students;", 'root', '');
		// Создаем подготовленный запрос
		if (is_null($order)) {
			$stmt = $pdo->query("SELECT * FROM tbl_students");
		}
		else{
			$stmt = $pdo->query("SELECT * FROM tbl_students ORDER BY student_" . $order);
		}
		return($stmt->fetchAll());
	}

	public function getStudentById()
	{

	}

	public function getStudentsByName($name)
	{
		$pdo = new PDO("mysql:host=localhost; dbname=students;", 'root', '');
		// Создаем подготовленный запрос
		$query = "SELECT * FROM tbl_students WHERE student_name = :name OR student_sername = :name"; //LIKE :name OR student_sername LIKE :name
		$cat = $pdo->prepare($query);
		$cat->execute(['name' => $name]);
		// var_dump($cat->fetchAll());die;
		return($cat->fetchAll());
	}

	public function getStudentsByGroup()
	{

	}

	public function getStudentsByMark()
	{

	}
}