<?php
// Handle form submission for age verification
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['age_verified']) && $_POST['age_verified'] == 'yes') {
        $_SESSION['age_verified'] = true;
        header('Location: index.php');  // Redirect back to the main page after verification
        exit();
    } else {
        // Redirect to another page if the user is underage
        header('Location: underage.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
</head>
<body>
    <h1>Age Verification</h1>
    <p>Are you 18 years or older?</p>
    <form method="post">
        <button type="submit" name="age_verified" value="yes">Yes, I am 18 or older</button>
        <button type="submit" name="age_verified" value="no">No, I am under 18</button>
    </form>
</body>
</html>
