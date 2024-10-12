<?php require_once 'core/dbConfig.php'?>
<?php require_once 'core/models.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer Association Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to Web Developer Association Registration!</h1>
    <section class="form-div">
        <form action="core/handleForms.php" method="post">
            <p>
                <label class="bold" for="firstName">First Name:  </label>
                <input type="text" name="firstName" placeholder="e.g. Juan" required>
            </p>

            <p>        
                <label class="bold" for="lastName">Last Name:  </label>
                <input type="text" name="lastName" placeholder="e.g. Delacruz" required>
            </p>

            <p>

                <label class="bold" for="gender">Gender:  </label>
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer Not to Say">Prefer Not to Say</option>
                </select>
            </p>

            <p>
                <label class="bold" for="age">Age:  </label>
                <input type="number" name="age" placeholder="e.g. 18" required>
            </p>

            <label class="bold" for="experience">Experience:  </label>
            <select name="experience">
                <option value="No Experience Yet">N/A</option>
                <option value="0-1 Year">0-1 yr</option>
                <option value="2-5 Years">2-5 yrs</option>
                <option value="6-10 Years">6-10 yrs</option>
                <option value="11+ Years">11+ yrs</option>
            </select>
            <p class="bold select-job">Select your Job:</p>
            <input type="radio" id="front-End" name="job" value="Front End" required>
            <label for="front-End">Front End</label><br>

            <input type="radio" id="back-End" name="job" value="Back End">
            <label for="back-End">Back End</label><br>

            <input type="radio" id="fullstack" name="job" value="Fullstack">
            <label for="fullstack">Fullstack</label><br>

            <input type="radio" id="no-job" name="job" value="No Job">
            <label for="no-job">No Job</label><br>



            <br>
            <p>
                <input class="submit-btn" id="submit" type="submit" name="insertNewUserBtn">
            </p>
            
        </form>
        

    </section>

    <section class="records">
        <table style="width:50%; margin-top:50px;">
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Experience</th>
                <th>Job</th>
                <th>Action</th>
            </tr>

            <?php $seeAllUserRecords = seeAllUserRecords($pdo)?>
            <?php foreach ($seeAllUserRecords as $row) {?>
            <tr>
                <td><?php echo $row['user_id']?></td>
                <td><?php echo $row['first_name']?></td>
                <td><?php echo $row['last_name']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['experience']?></td>
                <td><?php echo $row['type_of_job']?></td>
                <td>
                    <a href="editUser.php?user_id=<?php echo $row['user_id'];?>">Edit</a>
                    <a href="deleteUser.php?user_id=<?php echo $row['user_id'];?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </section>


    
</body>
</html>