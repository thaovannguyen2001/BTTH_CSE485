<?php
// Import các model
require_once 'models/StudentModel.php';
require_once 'models/ClassModel.php';

// Khởi tạo các đối tượng model
$studentModel = new StudentModel();
$classModel = new ClassModel();

// Lấy danh sách sinh viên và lớp từ model
$students = $studentModel->getStudents();
$classes = $classModel->getClasses();

// Hiển thị trang chính
require_once 'views/home.php';
?>