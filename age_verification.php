<?php
// Handle form submission for age verification
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['age_verified']) && $_POST['age_verified'] == 'yes') {
        $_SESSION['age_verified'] = true;
        header('Location: forum.php');  // Redirect back to the main page after verification
        exit();
    } else {
        // Redirect to another page if the user is underage
        header('Location: underage.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>年龄验证</title>
</head>
<body>
    <h1>年龄验证</h1>
    <p>您即将进入的网页内容包含成人内容，您必须已满18岁</p>
    <form method="post">
        <button type="submit" name="age_verified" value="yes">是的，我已满18岁</button>
        <button type="submit" name="age_verified" value="no">不，我未满18岁</button>
    </form>
</body>
</html>
