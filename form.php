<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>  
    <?php

        $name = $email = $amount = $comment = $date = $donationtype = $occasion = "";

        $nameError = $emailError = $amountError = $dateError = $donationtypeError = $occasionError = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameError = "Please enter a valid name";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameError = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["email"])) {
                $emailError = "Please enter email";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailError = "The email address is incorrect";
                }
            }  

            if(empty($_POST["amount"])){
                $amountError = "Please enter amount";
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }        

            if (empty($_POST["donationtype"])) {
                $donationtypeError = "Please select a type of donation";
            } else {
                $donationtype = test_input($_POST["donationtype"]);
            }

            if (empty($_POST["occasion"])) {
                $occasionError = "Please select a occasion";
            } else {
                $occasion = test_input($_POST["occasion"]);
            }

        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameError;?></span>
        <br><br>

        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailError;?></span>
        <br><br>

        Amount: <input type="number" name="amount" min="1000" step="1000">
        <span class="error">* <?php echo $amountError;?></span>
        <br><br>

        Comment: <textarea name="comment" rows="2" cols="10"></textarea>
        <br><br>

        Donation Type:
        <input type="radio" name="donationtype" value="Regular">Regular
        <input type="radio" name="donationtype" value="Occasion">Occasion
        <span class="error">* <?php echo $donationtypeError;?></span>
        <br><br>

        Occasion:
        <input type="checkbox" name="occasion" value="Pongal">Pongal
        <input type="checkbox" name="occasion" value="Diwali">Diwali
        <input type="checkbox" name="occasion" value="Republic Day">Republic Day
        <input type="checkbox" name="occasion" value="Birthday">Birthday
        <input type="checkbox" name="occasion" value="Independence Day">Independence Day
        <input type="checkbox" name="occasion" value="New Year">New Year 
        <span class="error">* <?php echo $occasionError;?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">  

    </form>

    <?php

        echo "<h2> Final Output:</h2>";

        echo $name;
        echo "<br>";

        echo $email;
        echo "<br>";

        echo $amount;
        echo "<br>";

        echo $comment;
        echo "<br>";

        echo $donationtype;
        echo "<br>";

        echo $occasion;

    ?>

</body>

</html>