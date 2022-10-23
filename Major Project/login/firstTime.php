<?php
session_start();
include("connection.php");
include("connection2.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $name = $_POST['name'];
    $ruid = $_POST['RUID'];
    $phoneNum = $_POST['phoneNum'];
    $email = $_POST['email'];
    $livingCondition = $_POST['living-condition'];
    $gender = $_POST['gender'];
    $foodAllergies = $_POST['food-allergies'];
    $fullOrPart = $_POST['full-or-part'];
    $international = $_POST['international-traditional-nontraditional'];
    $veteran = $_POST['veteran'];
    $undergraduate = $_POST['undergraduate-or-not'];
    $household = $_POST['household'];
    $householdEmployed = $_POST['household-employed'];
    $householdAge = $_POST['household-age'];
    $employed = $_POST['employed-or-not'];

    if (
        !empty($name) && !empty($ruid) && !empty($phoneNum) && !empty($email) && !empty($livingCondition)
        && !empty($gender) && !empty($foodAllergies) && !empty($fullOrPart) && !empty($international)
        && !empty($veteran) && !empty($undergraduate) && !empty($household) && !empty($householdEmployed) &&
        !empty($householdAge) && !empty($employed)
    ) {
        //save to database
        $query = "insert into foodPantry_users (name, ruid, phone_number, email, living_condition, gender, food_allergies, full_or_part_time, international_or_traditional, veteran, undergraduate_or_not, household_number, household_employed, household_age, employed) values ('$name', '$ruid', '$phoneNum','$email','$livingCondition','$gender','$foodAllergies','$fullOrPart','$international','$veteran','$undergraduate','$household','$householdEmployed','$householdAge','$employed')";
        mysqli_query($con, $query);
        header("Location: thank.php");
        die;
    } else {
        echo "Wrong info";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Index</title>
</head>

<body>
    <hr>
    <a href="index.php">Main page</a>
    <div class="Survey-Form">
        <form method="post">
            <h1>First Time Form</h1>
            <p class="Password-text">Name:</p>
            <input id="text" type="name" class="input-box" name="name" />
            <p class="NetID-text">RUID:</p>
            <input id="text" type="RUID" class="input-box" name="RUID" />
            <p class="NetID-text">Phone Number:</p>
            <input type="phoneNum" class="input-box" name="phoneNum" />
            <p class="Password-text">Email Address:</p>
            <input type="text" class="input-box" name="email" />
            <hr>
            <div>
                <p class="NetID-text">Living Condition:</p>
            </div>
            <div>
                <label for="resident">I am a resident student. I live in a residence hall on campus.</label>
                <input type="radio" name="living-condition" id="resident" value="resident">
            </div>
            <div>
                <label for="off-campus">I am an off-campus student. I live near campus in New Brunswick, Highland Park, Piscataway or Somerset with other students and pay rent.</label>
                <input type="radio" name="living-condition" id="off-campus" value="off-campus">
            </div>

            <div>
                <label for="commuter">I am a commuter. I live with my family/and or others and travel to campus by car, transit or some other means.</label>
                <input type="radio" name="living-condition" id="commuter" value="commuter">
            </div>

            <div>
                <label for="no-housing">I do not have secure housing. I am staying with friends and/or in a shelter</label>
                <input type="radio" name="living-condition" id="no-housing" value="no-housing">
            </div>

            <div>
                <p class="NetID-text">Gender:</p>
            </div>
            <div>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="male">
            </div>

            <div>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female">
            </div>

            <div>
                <label for="non-binary">Non-binary</label>
                <input type="radio" name="gender" id="non-binary" value="non-binary">
            </div>

            <div>
                <label for="no-answer">Prefer not to say</label>
                <input type="radio" name="gender" id="no-answer" value="no-answer">
            </div>

            <div>
                <p class="NetID-text">Food Allergies:</p>
            </div>
            <div>
                <label for="yes">Yes</label>
                <input type="radio" name="food-allergies" id="yes" value="yes">
            </div>
            <div>
                <label for="No">No</label>
                <input type="radio" name="food-allergies" id="no" value="no">
            </div>
            <div>
                <label for="idk">I don't know</label>
                <input type="radio" name="food-allergies" id="idk" value="idk">
            </div>
            <div>
                <p class="NetID-text">Campus Status</p>
            </div>
            <hr>
            <div>
                <label for="full-time">Full time student</label>
                <input type="radio" name="full-or-part" id="full-time" value="full-time-student">
            </div>
            <div>
                <label for="part-time">Part time student</label>
                <input type="radio" name="full-or-part" id="part-time" value="part-time-student">
            </div>
            <hr>
            <div>
                <label for="international">International student</label>
                <input type="radio" name="international-traditional-nontraditional" id="international-student" value="international-student">
            </div>
            <div>
                <label for="traditional">Traditional student</label>
                <input type="radio" name="international-traditional-nontraditional" id="traditional-student" value="traditional-student">
            </div>
            <div>
                <label for="non-traditional">Non-traditional student</label>
                <input type="radio" name="international-traditional-nontraditional" id="non-traditional-student" value="non-traditional-student">
            </div>
            <hr>
            <div>
                <label for="veteran">Veteran</label>
                <input type="radio" name="veteran" id="veteran" value="veteran">
            </div>
            <div>
                <label for="non-veteran">Non veteran</label>
                <input type="radio" name="veteran" id="non-veteran" value="non-veteran">
            </div>
            <hr>
            <div>
                <label for="undergraduate">Undergraduate student</label>
                <input type="radio" name="undergraduate-or-not" id="undergraduate-student" value="undergraduate-student">
            </div>
            <div>
                <label for="graduate">Graduate student</label>
                <input type="radio" name="undergraduate-or-not" id="graduate-student" value="graduate-student">
            </div>
            <div>
                <label for="other">Other</label>
                <input type="radio" name="undergraduate-or-not" id="other" value="other">
            </div>
            <div>
                <p class="NetID-text">How many individuals are in your household?</p>
            </div>
            <div>
                <label for="household">number of people</label>
                <select name="household" id="household">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>

            <div>
                <p class="NetID-text">Of those, how many are employed?</p>
            </div>
            <div>
                <label for="household-employed">number of people</label>
                <select name="household-employed" id="household-employed">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>
            <div>
                <p class="NetID-text">How many of those individuals are under the age of 18?</p>
            </div>
            <div>
                <label for="household-age">number of people</label>
                <select name="household-age" id="household-age">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>
            <div>
                <p class="NetID-text">Are you employed?</p>
            </div>

            <div>
                <label for="employed-full-time">Employed full-time</label>
                <input type="radio" name="employed-or-not" id="employed-full-time" value="employed-full-time">
            </div>
            <div>
                <label for="employed-part-time">Employed part-time</label>
                <input type="radio" name="employed-or-not" id="employed-part-time" value="employed-part-time">
            </div>
            <div>
                <label for="not-employed">Not employed</label>
                <input type="radio" name="employed-or-not" id="not-employed" value="not-employed">
            </div>
            <div>
                <input id="button" type="submit" class="Login-button" value="Submit">
            </div>

        </form>
    </div>

</body>

</html>