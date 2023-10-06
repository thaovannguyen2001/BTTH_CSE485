<?php
class ClassModel {
    private $classes;

    public function __construct() {
        // Khởi tạo mảng lớp thay thế cơ sở dữ liệu
        $this->classes = array(
            array('id' => 1, 'tenLop' => 'Lớp 6!HT'),
            array('id' => 2, 'tenLop' => 'Lớp 62HT'),
            array('id' => 3, 'tenLop' => 'Lớp 63HT'),
            // Thêm các lớp khác vào đây
        );
    }

    public function getClasses() {
        return $this->classes;
    }
}
?>