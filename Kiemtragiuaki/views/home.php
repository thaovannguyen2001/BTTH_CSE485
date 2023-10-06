<!DOCTYPE html>
<html>
<head>
    <title>Trang chính</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên sinh viên</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Lớp</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['tenSinhVien']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['ngaySinh']; ?></td>
                <td><?php echo $student['idLop']; ?></td>
                <td><a href="edit.php?id=<?php echo $student['id']; ?>">Chỉnh sửa</a></td>
                <td><a href="delete.php?id=<?php echo $student['id']; ?>">Xóa</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>