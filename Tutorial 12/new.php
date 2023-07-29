
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    ?>
    <h2>Registration Form Submission</h2>
    <p><strong> First Name:</strong> <?php echo $fname; ?></p>
 <p><strong> Last Name:</strong> <?php echo $lname; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
 <p><strong>Password:</strong> <?php echo $password; ?></p>
 <p><strong>Email:</strong> <?php echo $email; ?></p>
    <?php
    }
    ?>

