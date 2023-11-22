<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'forms';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo"Connection Sucessfull"


    ?>
    <script>

        alert('connection sucessfull');
        </script>
        <?php

}
else{
    echo"No Connection";
    
}

?>