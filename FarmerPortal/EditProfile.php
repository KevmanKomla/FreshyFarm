<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = $sessphonenumber";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $pan = $row['farmer_pan'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $account = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>
    <script>
        function state() {
            var a = document.getElementById('states').value;
             if (a === 'GREATER ACCRA REGION') {
                    var array = ['Select District', 'Accra', 'Tema', 'East Legon', 'Ga East', 'Adenta'];
               } else if (a === 'VOLTA REGION') {
                    var array = ['Select District', 'Ho Municipal', 'Hohoe Municipal', 'Keta Municipal', 'South Tongu', 'Ketu South'];
               } else if (a === 'ASHANTI REGION') {
                    var array = ['Select District', 'Kumasi', 'Obuasi Municipal', 'Mampong Municipal'];
               } else if (a === 'CENTRAL REGION') {
                    var array = ['Select District', 'Cape Coast', 'Mfantsiman', 'Gomoa West', 'Effutu'];
               } else if (a === 'OTI REGION') {
                    var array = ['Select District', 'Krachi East', 'Nkwanta South', 'Kadjebi', 'Jasikan'];
               } else if (a === 'WESTERN REGION') {
                    var array = ['Select District', 'Sekondi Takoradi', 'Tarkwa Nsuaem', 'Nzema East'];
               } else if (a === 'NORTHERN REGION') {
                    var array = ['Select District', 'Tamale Metropolitan', 'Yendi Municipal'];
               } else if (a === 'EASTERN REGION') {
                    var array = ['Select District', 'Koforidua', 'Somanya', 'Akosombo'];
               } else if (a === 'UPPER EAST REGION') {
                    var array = ['Select District', 'Bolgatanga'];
               } else if (a === 'UPPER WEST REGION') {
                    var array = ['Select District', 'Wa'];
               } else if (a === 'BONO REGION') {
                    var array = ['Select District', 'Sunyani', 'Dormaa East', 'Wenchi'];
               } else if (a === 'SAVANNAH REGION') {
                    var array = ['Select District', 'Central Gonja', 'Bole', 'East Gonja'];
               } else if (a === 'NORTH EAST REGION') {
                    var array = ['Select District', 'West Mamprusi', 'East Mamprusi'];
               } else if (a === 'BONO EAST REGION') {
                    var array = ['Select District', 'Techiman', 'Techiman North', 'Kintanpo North'];
               } else if (a === 'AHAFO REGION') {
                    var array = ['Select District', 'Tano North', 'Tano South'];
               } else if (a === 'WERSTERN REGION') {
                    var array = ['Select District', 'Bia East ', 'Bia West'];
              
               }
            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";

            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;
        }
    </script>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }

        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: green;
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }

        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }

        textarea {
            border-width: 3px;
            border-radius: 16px;
            border-color: rgb(78, 180, 121);


        }




        .in-icons {
            text-align: center;
        }

        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }

        .just {


            float: left;
            margin-left: 1%;
            margin: 20px;
            position: absolute;
            left: 0;
            top: 0px;
            text-shadow: 1px 1px 1px black;

        }

        .again {
            cursor: pointer;
            font-size: 24px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            /* background-color: green; */
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
            margin-left: 100px;


        }

        .say {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            /* width: 96%; */
            padding: 10px;
            padding-left: 10px;
            padding-right: 10px;



        }

        .say:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 94%;
            font-size: 18px;

        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


    <div class="just">
        <a href="Homepage.php"> <i class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
        <form action="EditProfile.php" method="post">
            <table align="center">
                <tr colspan=2>
                    <h1> EDIT PROFILE</h1>
                </tr>
                <tr align="center">
                    <div class="in-icons">
                        <td>
                            <label><b>Name :</b></label>
                        </td>
                        <td>
                            <textarea rows="2" column="18" value="" disabled><?php echo $name; ?></textarea>
                        </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Pan :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="20" disabled><?php echo $pan; ?></textarea>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Phone :</b></label>
                    </td>
                    <td>
                        <input type="phonenumber" name="phonenumber" value="<?php echo $phone; ?>" />
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Address :</b></label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address; ?> " />
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b>State :</b></label>
                    </td>
                    <td>
                        <select name = "statevalue" id="states" onchange="state()" tabindex="1" style="width:170px;">
                            <option value="0">--Select State--</option>
                            <option value="GREATER ACCRA REGION">GREATER ACCRA REGION</option>
                              <option value="VOLTA REGION">VOLTA REGION</option>
                              <option value="ASHANTI REGION">ASHANTI REGION</option>
                              <option value="CENTRAL REGION">CENTRAL REGION</option>
                              <option value="OTI REGION">OTI REGION</option>
                              <option value="WESTERN REGION">WESTERN REGION</option>
                              <option value="NOTHERN REGION">NOTHERN REGION</option>
                              <option value="EATERN REGION">EATERN REGION</option>
                              <option value="UPPER EAST REGION">UPPER EAST REGION</option>
                              <option value="UPPER WEST REGION">UPPER WEST REGION</option>
                              <option value="BONO REGION">BONO REGION</option>
                              <option value="SAVANNAH REGION">SAVANNAH REGION</option>
                              <option value="NORTH EAST REGION">NORTH EAST REGION</option>
                              <option value="BONO EAST REGION">BONO EAST REGION</option>
                              <option value="AHAFO REGION">AHAFO REGION</option>
                              <option value="WESTERN NORTH REGION">WESTERN NORTH REGION</option>

                        </select>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>District :</b></label>
                    </td>
                    <td>
                         <select name="district" id="district"><option>Select District</option></select>
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b>Bank :</b></label>
                    </td>
                    <td>
                        <input type="number" name="bank" value="<?php echo $account; ?>" />
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>
                <tr colspan=2>
                    <td colspan=2>
                        <input type="submit" name="confirm" value="Confirm">
                    </td>
                </tr>
            </table>
        </form>

        <div class="again">
            <a href="ChangePassword.php"><button class="say">Change Password</button></a>
        </div>

    </div>



</body>

</html>

<?php


if (isset($_POST['confirm'])) {
    $phone = mysqli_real_escape_string( $con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string( $con, $_POST['address']);
    $district = mysqli_real_escape_string( $con, $_POST['district']);
    $state = mysqli_real_escape_string( $con, $_POST['statevalue']);
    $account = mysqli_real_escape_string( $con, $_POST['bank']);

    $query = "update farmerregistration 
              set farmer_phone = '$phone', farmer_address = '$address',
              farmer_bank = '$account', farmer_state = '$state',
              farmer_district = '$district'
              where farmer_id 
              in (select farmer_id from farmerregistration 
              where farmer_phone='$sessphonenumber')";
    $run = mysqli_query($con, $query);
    
    $_SESSION['phonenumber'] = $phone;
    echo "<script>window.open('FarmerProfile.php','_self')</script>";
}
?>