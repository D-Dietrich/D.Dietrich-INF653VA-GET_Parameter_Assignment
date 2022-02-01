

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>
    <link href="myStyle.css" rel="stylesheet"> 
</head>
<body>
    <div id="sheet">
    <h1>Please Answer the Form:</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="f_name">First Name: </label>
        <input type ="text" id="f_name" name="f_name" autocomplete="off"> <br><br>
        <label for="l_name">Last Name: </label>
        <input type ="text" id="l_name" name="l_name" autocomplete="off"> <br><br>
        <label for="age">Age: </label>
        <input type ="text" id="age" name="age" autocomplete="off"> <br><br>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
</div>

</form>
<br> <h2>Form Results:</h2>
<?php

if (empty($_GET['f_name']) || empty($_GET['f_name']) || (empty($_GET['age']))) {
//If one or more items in the form have not been filled out, error message displays.
    echo "\n Please fill out the entire form to display relevant sentences. ";
} 
else {
    //If entire form has been filled out, values are assigned.
    $fname = htmlspecialchars($_GET['f_name']); 
    $lname = htmlspecialchars($_GET['l_name']);
    $age = htmlspecialchars($_GET['age']);
    
    //Creation of sentences
    echo "<ol>";
    echo "<li> Hello, my name is ", $fname, " ", $lname, ". </li>";
    echo "<li> I am ", $age, " years old and ";
    if ($age < 18) {
        echo "I am not old enough to vote in the United States. </li>";
    }
    else{
        echo "I am old enough to vote in the United States. </li>";
    }
    echo "<li> In ", $age, " years, there are ", $age*365, " days. </li>";
    echo "<li> Today's date is ", Date("m/d/y");
    echo "</ol>";
}

?>
</div>
<div>
</div>
</body>

</html>