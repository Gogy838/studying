<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
    $name=htmlspecialchars($_POST['name']);
    $date=htmlspecialchars($_POST['date']);
    $email=htmlspecialchars($_POST['email']);
    $comment=htmlspecialchars($_POST['comment']);

    echo "<h1>GIVEN DATA</h1>";
    echo '<table border="1px">';
    echo "<tr><th>NAMES</th><td>$name</td></tr>";
    echo "<tr><th>DATE OF BIRTH</th><td>$date</td></tr>";
    echo "<tr><th>EMAIL</th><td>$email</td></tr>";
    echo "<tr><th>COMMENT</th><th>$comment</th></tr>";
    echo "</table>";
   
}
?>
