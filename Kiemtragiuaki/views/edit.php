<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa sinh viên</title>
</head>
<body>
    <h1>Chỉnh sửa sinh viên</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <label for="tenSinhVien">Tên sinh viên:</label>
        <input type="text" name="tenSinhVien" value="<?php echo $student['tenSinhVien']; ?>"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $student['email']; ?>"><br>
        <label for="ngaySinh">Ngày sinh:</label>
        <input type="date" name="ngaySinh" value="<?php echo $student['ngaySinh']; ?>"><br>
        <label for="idLop">Lớp:</label>
        <select name="idLop">
            <?php foreach ($classes as $class): ?>
                <option value="<?php echo $class['id']; ?>" <?php if ($class['id'] == $student['idLop']) echo 'selected'; ?>><?php echo $class['tenLop']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <input type="submit" value="Lưu">
    </form>
</body>
</html>