<?php
session_start();
$con = mysqli_connect("localhost", "root", "rootuser", "FoodPantry");
          
// Check connection
if($con === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $date = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
    $address = $_POST['address'] . ", " . $_POST['city'] . ", " . $_POST['state'] . " " . $_POST['zipcode'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    if (!empty($_POST['applesauce'])) {
        $num = $_POST['applesauce'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'applesauce', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating applesauce!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='applesauce'";
        if(mysqli_query($con, $query)){
            echo "<h3>The applesauce inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['beans'])) {
        $num = $_POST['beans'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'beans', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating beans!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='beans'";
        if(mysqli_query($con, $query)){
            echo "<h3>The beans inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['broth'])) {
        $num = $_POST['broth'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'broth', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating broth!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='broth'";
        if(mysqli_query($con, $query)){
            echo "<h3>The broth inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['cannedfish'])) {
        $num = $_POST['cannedfish'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'canned fish', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating canned fish!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='canned fish'";
        if(mysqli_query($con, $query)){
            echo "<h3>The canned fish inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['cereal'])) {
        $num = $_POST['cereal'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'cereal', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating cereal!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='cereal'";
        if(mysqli_query($con, $query)){
            echo "<h3>The cereal inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['condiments'])) {
        $num = $_POST['condiments'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'condiments', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating condiments!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='condiments'";
        if(mysqli_query($con, $query)){
            echo "<h3>The condiments inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['cream'])) {
        $num = $_POST['cream'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'cream of wheat and grits', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating cream of wheat and grits!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='cream of wheat and grits'";
        if(mysqli_query($con, $query)){
            echo "<h3>The cream of wheat and grits inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['fruit'])) {
        $num = $_POST['fruit'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'fruit', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating fruit!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='fruit'";
        if(mysqli_query($con, $query)){
            echo "<h3>The fruit inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['mac'])) {
        $num = $_POST['mac'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'mac n cheese', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating mac n cheese!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='mac n cheese'";
        if(mysqli_query($con, $query)){
            echo "<h3>The mac n cheese inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['oatmeal'])) {
        $num = $_POST['oatmeal'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'oatmeal', '$num]')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating oatmeal!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='oatmeal'";
        if(mysqli_query($con, $query)){
            echo "<h3>The oatmeal inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['pasta'])) {
        $num = $_POST['pasta'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'pasta', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating pasta!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='pasta'";
        if(mysqli_query($con, $query)){
            echo "<h3>The pasta inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['peanut'])) {
        $num = $_POST['peanut'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'peanut butter', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating peanut butter!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='peanut butter'";
        if(mysqli_query($con, $query)){
            echo "<h3>The peanut butter inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['plant'])) {
        $num = $_POST['plant'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'plant fusion', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating plant fusion!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='plant fusion'";
        if(mysqli_query($con, $query)){
            echo "<h3>The plant fusion inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['potatoes'])) {
        $num = $_POST['potatoes'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'potatoes', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating potatoes!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='potatoes'";
        if(mysqli_query($con, $query)){
            echo "<h3>The potatoes inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['ramen'])) {
        $num = $_POST['ramen'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'ramen', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating ramen!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='ramen'";
        if(mysqli_query($con, $query)){
            echo "<h3>The ramen inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['refrigerated'])) {
        $num = $_POST['refrigerated'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'refrigerated items', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating refrigerated items!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='refrigerated items'";
        if(mysqli_query($con, $query)){
            echo "<h3>The refrigerated items inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['rice'])) {
        $num = $_POST['rice'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'rice', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating rice!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='rice'";
        if(mysqli_query($con, $query)){
            echo "<h3>The rice inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['seasonal'])) {
        $num = $_POST['seasonal'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'seasonal items', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating seasonal items!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='seasonal items'";
        if(mysqli_query($con, $query)){
            echo "<h3>The seasonal items inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['snacks'])) {
        $num = $_POST['snacks'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'snacks', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating snacks!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='snacks'";
        if(mysqli_query($con, $query)){
            echo "<h3>The snacks inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['soup'])) {
        $num = $_POST['soup'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'soup', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating soup!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='soup'";
        if(mysqli_query($con, $query)){
            echo "<h3>The soup inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['spices'])) {
        $num = $_POST['spices'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'spices', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating spices!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='spices'";
        if(mysqli_query($con, $query)){
            echo "<h3>The spices inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['sauce'])) {
        $num = $_POST['sauce'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'tomato and pasta sauce', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating tomato and pasta sauce!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='tomato and pasta sauce'";
        if(mysqli_query($con, $query)){
            echo "<h3>The tomato and pasta sauce inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['vegetables'])) {
        $num = $_POST['vegetables'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'vegetables', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating vegetables!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='vegetables'";
        if(mysqli_query($con, $query)){
            echo "<h3>The vegetables inventory was updated!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
    }
    if (!empty($_POST['other'])) {
        $num = $_POST['other'];
        $query = "insert into donators (name, date, address, email, phonenumber, category, numCategory) 
            values ('$name', '$date', '$address', '$email', '$phonenumber', 'other', '$num')";
        if(mysqli_query($con, $query)){
            echo "<h3>Thank you for donating other!</h3>"; 
        } else{
            echo "ERROR: Sorry $query. " 
                . mysqli_error($con);
        }
        $query = "update inventory set numCategory=numCategory+'$num' where category='other'";
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