<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Basic reset for form elements */
form {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Style the form container */
form {
  display: flex;
  flex-direction: column;
  width: 300px;
  margin: auto;
}

/* Style the input fields */
input[type="text"] {
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style the submit button */
input[type="submit"] {
  padding: 10px;
  background-color: black;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Hover effect for submit button */
input[type="submit"]:hover {
  background-color: blueviolet;
}
.horizontal-text {
  writing-mode: horizontal-tb;
  text-orientation: mixed;
  font-family: 'Arial', sans-serif;
  color: #333;
  font-size: 20px;
  letter-spacing: 5px;
  text-align: center;
}

</style>
<body> 
    <h1 class="horizontal-text">Print Vertically in PHP</h1>
    <form action="" method="POST">
        <input type="text" name="abc" id="">
        <input type="submit" value="Go!">
    </form>
</body>
</html>



<?php
if(isset($_POST['abc'])){
    $msg = $_POST['abc'];
    //echo $msg[5];
    for($i=0; $i<strlen($msg);$i++){
        echo $msg[$i];
        echo "<br>";
    }
}
?>


