<?php require_once 'core/dbConfig.php';?>
<?php require_once 'core/models.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php $getUserById = getUserById($pdo, $_GET['user_id']); ?>
    <h1>Are you sure you want to delete user <br> <?php echo $getUserById['first_name'];?>?</h1>

    <section class="form-div">
        <form class="deleteForm" action="core/handleForms.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST" onsubmit="return confirmDeletion();">
            <p style="text-align: center; font-size: 20px; font-weight: bold;">First Name: <?php echo $getUserById['first_name'];?> </p>
            <p style="text-align: center; font-size: 20px; font-weight: bold;">Last Name: <?php echo $getUserById['last_name'];?> </p>
            <p style="text-align: center; font-size: 20px; font-weight: bold;">Gender: <?php echo $getUserById['gender'];?> </p>
            <p style="text-align: center; font-size: 20px; font-weight: bold;">Age: <?php echo $getUserById['age'];?> </p>
            <p style="text-align: center; font-size: 20px; font-weight: bold;">Experience: <?php echo $getUserById['experience'];?> </p>
            <p style="text-align: center; font-size: 20px; font-weight: bold;">Job: <?php echo $getUserById['type_of_job'];?> </p>
            <input class="submit-btn" id="submit" type="submit" value="Delete User" name="deleteUserBtn">
        </form>
    </section>
    <a class="a-link" href="index.php"><button class="back-btn">Back</button></a>

    <script>
        function confirmDeletion() {
            return confirm("Are you sure you want to delete this user?");
        }
    </script>
</body>
</html>