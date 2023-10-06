<?php
class StudentModel {
    private $students;

    public function __construct() {
        // Khởi tạo mảng sinh viên thay thế cơ sở dữ liệu
        $this->students = array(
            array('id' => 1, 'tenSinhVien' => 'Nguyễn Văn A', 'email' => 'van.a@gmail.com', 'ngaySinh' => '2001-01-01', 'idLop' => 1),
            array('id' => 2, 'tenSinhVien' => 'Trần Thị B', 'email' => 'thi.b@gmail.com', 'ngaySinh' => '2002-02-02', 'idLop' => 2),
            array('id' => 3, 'tenSinhVien' => 'Lê Văn C', 'email' => 'van.c@gmail.com', 'ngaySinh' => '2003-03-03', 'idLop' => 3),
            // Thêm các sinh viên khác vào đây
        );
    }

    public function getStudents() {
        return $this->students;
    }
}
?>