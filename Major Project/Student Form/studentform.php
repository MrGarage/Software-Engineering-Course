<?php
session_start();
$con = mysqli_connect("localhost", "root", "rootuser", "FoodPantry");
          
// Check connection
if($con === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (!empty($_POST['applesauce'])) {
        $num = $_POST['applesauce'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='applesauce'";
        if(mysqli_query($con, $query)){
            echo "<h3>The applesauce inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['beans'])) {
        $num = $_POST['beans'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='beans'";
        if(mysqli_query($con, $query)){
            echo "<h3>The beans inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['broth'])) {
        $num = $_POST['broth'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='broth'";
        if(mysqli_query($con, $query)){
            echo "<h3>The broth inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['cannedfish'])) {
        $num = $_POST['cannedfish'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='canned fish'";
        if(mysqli_query($con, $query)){
            echo "<h3>The canned fish inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['cereal'])) {
        $num = $_POST['cereal'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='cereal'";
        if(mysqli_query($con, $query)){
            echo "<h3>The cereal inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['condiments'])) {
        $num = $_POST['condiments'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='condiments'";
        if(mysqli_query($con, $query)){
            echo "<h3>The condiments inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['cream'])) {
        $num = $_POST['cream'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='cream of wheat and grits'";
        if(mysqli_query($con, $query)){
            echo "<h3>The cream of wheat and grits inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['fruit'])) {
        $num = $_POST['fruit'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='fruit'";
        if(mysqli_query($con, $query)){
            echo "<h3>The fruit inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['mac'])) {
        $num = $_POST['mac'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='mac n cheese'";
        if(mysqli_query($con, $query)){
            echo "<h3>The mac n cheese inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['oatmeal'])) {
        $num = $_POST['oatmeal'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='oatmeal'";
        if(mysqli_query($con, $query)){
            echo "<h3>The oatmeal inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['pasta'])) {
        $num = $_POST['pasta'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='pasta'";
        if(mysqli_query($con, $query)){
            echo "<h3>The pasta inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['peanut'])) {
        $num = $_POST['peanut'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='peanut butter'";
        if(mysqli_query($con, $query)){
            echo "<h3>The peanut butter inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['plant'])) {
        $num = $_POST['plant'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='plant fusion'";
        if(mysqli_query($con, $query)){
            echo "<h3>The plant fusion inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['potatoes'])) {
        $num = $_POST['potatoes'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='potatoes'";
        if(mysqli_query($con, $query)){
            echo "<h3>The potatoes inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['ramen'])) {
        $num = $_POST['ramen'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='ramen'";
        if(mysqli_query($con, $query)){
            echo "<h3>The ramen inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['refrigerated'])) {
        $num = $_POST['refrigerated'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='refrigerated items'";
        if(mysqli_query($con, $query)){
            echo "<h3>The refrigerated items inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['rice'])) {
        $num = $_POST['rice'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='rice'";
        if(mysqli_query($con, $query)){
            echo "<h3>The rice inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['seasonal'])) {
        $num = $_POST['seasonal'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='seasonal items'";
        if(mysqli_query($con, $query)){
            echo "<h3>The seasonal items inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['snacks'])) {
        $num = $_POST['snacks'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='snacks'";
        if(mysqli_query($con, $query)){
            echo "<h3>The snacks inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['soup'])) {
        $num = $_POST['soup'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='soup'";
        if(mysqli_query($con, $query)){
            echo "<h3>The soup inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['spices'])) {
        $num = $_POST['spices'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='spices'";
        if(mysqli_query($con, $query)){
            echo "<h3>The spices inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['sauce'])) {
        $num = $_POST['sauce'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='tomato and pasta sauce'";
        if(mysqli_query($con, $query)){
            echo "<h3>The tomato and pasta sauce inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['vegetables'])) {
        $num = $_POST['vegetables'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='vegetables'";
        if(mysqli_query($con, $query)){
            echo "<h3>The vegetables inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['other'])) {
        $num = $_POST['other'];
        $query = "update inventory set numCategory=numCategory-'$num' where category='other'";
        if(mysqli_query($con, $query)){
            echo "<h3>The other inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }

    mysqli_close($con);
}

?>