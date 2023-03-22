<!DOCTYPE>
<html>

<head><title>PHP Programming</title></head>


<body>
  <?php
    $characterName = "Tom";
    $characterAge = 70;
    echo "<h1>Farhan's Code</h1>";
    echo "There once was a man named $characterName <br>";
    echo "He was $characterAge years old <br>";
    echo "He really liked the name $characterName <br>";
    echo "But didn't like being $characterAge <br><br><br>";
  ?>

  <form action="site.php" method="post">
    <!-- Name: <input type="text" name="name"> -->
    <!-- Input_1 : <input type="number" name="num1"> <br>

    Input_2 : <input type="number" name="num2"> <br> -->

    C++ : <input type="checkbox" name="programming[]" value="cplusplus"> <br>

    Java : <input type="checkbox" name="programming[]" value="java"> <br>

    JavaScript : <input type="checkbox" name="programming[]" value="javaScript"> <br>

    Go : <input type="checkbox" name="programming[]" value="go"> <br>

    PHP : <input type="checkbox" name="programming[]" value="php"> <br>

    <input type="submit">
  </form>

  <br>

  <?php
    //echo $_GET["name"];


    $ans = $_POST['programming'];
    for($i = 0; $i < count($ans); $i++)
    {
      echo "Array value: $ans[$i] <br>";
    }



  ?>
</body>
</html>
