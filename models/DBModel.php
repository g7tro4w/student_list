<?php

class StudentsTableGateaway
{
	// public function __construct(PDO $pdo)
	// {

	// }

	public function getAllStudents()
	{
		$pdo = new PDO("mysql:host=localhost; dbname=students;", 'root', '');
		// Создаем подготовленный запрос
		$stmt = $pdo->query("SELECT * FROM tbl_students");
		// Выполяем запрос
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

	public function sortStudentsByName()
	{
		$pdo = new PDO("mysql:host=localhost; dbname=students;", 'root', '');
		// Создаем подготовленный запрос
		$stmt = $pdo->query("SELECT * FROM tbl_students ORDER BY student_name");
		// Выполяем запрос
		return($stmt->fetchAll());
	}

	public function sortStudentsBySername()
	{
		$pdo = new PDO("mysql:host=localhost; dbname=students;", 'root', '');
		// Создаем подготовленный запрос
		$stmt = $pdo->query("SELECT * FROM tbl_students ORDER BY student_sername");
		// Выполяем запрос
		return($stmt->fetchAll());
	}

	public function sortStudentsByGroup()
	{
		$pdo = new PDO("mysql:host=localhost; dbname=students;", 'root', '');
		// Создаем подготовленный запрос
		$stmt = $pdo->query("SELECT * FROM tbl_students ORDER BY student_group");
		// Выполяем запрос
		return($stmt->fetchAll());
	}

	public function sortStudentsByMark()
	{
		$pdo = new PDO("mysql:host=localhost; dbname=students;", 'root', '');
		// Создаем подготовленный запрос
		$stmt = $pdo->query("SELECT * FROM tbl_students ORDER BY student_mark");
		// Выполяем запрос
		return($stmt->fetchAll());
	}
}