<?php require_once 'core/dbConfig.php';?>
<?php require_once 'core/models.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php $getUserById = getUserById($pdo, $_GET['user_id']); ?>
    <h1>Welcome to Web Developer Association Registration, <br> <?php echo $getUserById['first_name'];?>!</h1>

    <section class="form-div">
        <form action="core/handleForms.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">
            <p>
                <label class="bold" for="firstName">First Name:  </label>
                <input type="text" name="firstName" placeholder="e.g. Juan" required value="<?php echo $getUserById['first_name']; ?>">
            </p>

            <p>        
                <label class="bold" for="lastName">Last Name:  </label>
                <input type="text" name="lastName" placeholder="e.g. Delacruz" required value="<?php echo $getUserById['last_name']; ?>"> 
            </p>

            <p>
                <label class="bold" for="gender">Gender:  </label>
                <select name="gender">
                    <option value="Male" <?php if ($getUserById['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($getUserById['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                    <option value="Prefer Not to Say" <?php if ($getUserById['gender'] == 'Prefer Not to Say') echo 'selected'; ?>>Prefer Not to Say</option>
                </select>
            </p>

            <p>
                <label class="bold" for="age">Age:  </label>
                <input type="number" name="age" placeholder="e.g. 18" required value="<?php echo $getUserById['age']; ?>">
            </p>

            <p>
                <label class="bold" for="experience">Experience:  </label>
                <select name="experience">
                    <option value="No Experience Yet" <?php if ($getUserById['experience'] == 'No Experience Yet') echo 'selected'; ?>>N/A</option>
                    <option value="0-1 Year" <?php if ($getUserById['experience'] == '0-1 Year') echo 'selected'; ?>>0-1 yr</option>
                    <option value="2-5 Years" <?php if ($getUserById['experience'] == '2-5 Years') echo 'selected'; ?>>2-5 yrs</option>
                    <option value="6-10 Years" <?php if ($getUserById['experience'] == '6-10 Years') echo 'selected'; ?>>6-10 yrs</option>
                    <option value="11+ Years" <?php if ($getUserById['experience'] == '11+ Years') echo 'selected'; ?>>11+ yrs</option>
                </select>
            </p>

            <p class="bold select-job">Select your Job:</p>
            <input type="radio" id="front-End" name="job" value="Front End" <?php if ($getUserById['type_of_job'] == 'Front End') echo 'checked'; ?>>
            <label for="front-End">Front End</label><br>

            <input type="radio" id="back-End" name="job" value="Back End" <?php if ($getUserById['type_of_job'] == 'Back End') echo 'checked'; ?>>
            <label for="back-End">Back End</label><br>

            <input type="radio" id="fullstack" name="job" value="Fullstack" <?php if ($getUserById['type_of_job'] == 'Fullstack') echo 'checked'; ?>>
            <label for="fullstack">Fullstack</label><br>

            <input type="radio" id="no-job" name="job" value="No Job" <?php if ($getUserById['type_of_job'] == 'No Job') echo 'checked'; ?>>
            <label for="no-job">No Job</label><br>



            <br>
            <p>
                <input class="submit-btn" id="submit" type="submit" value="Edit User Info" name="editUserBtn">
            </p>
            
        </form>
    </section>
    <a class="a-link" href="index.php"><button class="back-btn">Back</button></a>
</body>
</html>