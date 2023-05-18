<!DOCTYPE html>
<html>

<head>
    <title>PHP Programming</title>
</head>

<body>

    <form method="POST" action="site.php">
        <div>
            <label for="name">Name</label>
            <input name="name" id="name" type="text">
        </div>
        <br>
        <div>
            <label for="age">Age</label>
            <input name="age" id="age" type="number">
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input name="email" id="email" type="email">
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <?php 

        if($_SERVER["REQUEST_METHOD"] == 'POST')
        {
            if(empty($_POST['name']))
            {
                echo "Name is required";
            }
            else
            {
                $varName = $_POST['name'];
                echo checkNameValid($varName);
            }
            if(empty($_POST['email']))
            {
                echo "Email is required";
            }
            else
            {
                $varEmail = $_POST['email'];
                if(!filter_var($varEmail, FILTER_VALIDATE_EMAIL))
                {
                    echo 'Invalid Email Address';
                }
                else
                {
                    echo $varEmail;
                }
            }
        }

        function checkNameValid($data)
        {
            if($data[0] >= '0' && $data[0] <= '9')
            {
                return 'Invalid Name';
            }
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);

            return $data;
        }
    ?>
</body>

</html>
