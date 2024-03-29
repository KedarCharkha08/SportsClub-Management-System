<?php
// $cid = $_GET['id'];
session_start();
ob_start();
$login_cred = $_SESSION['t3'];
if (!isset($_SESSION['t3'])) {
    echo "<script>window.location.href='withoutlogin.php';</script>";
    exit;
}
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sportsclub";
//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

$sql = "SELECT * FROM player WHERE reg_id = $login_cred";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./images/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <title>Profile</title>
</head>

<body class="absolute top-0 w-screen h-full bg-gray-900" style="background-image: url(images/123456.jpg); background-size: 100%; background-repeat: no-repeat; overflow-x: hidden; overflow-y: hidden;">
    <div class="relative  w-full my-6 mx-auto max-w-3xl">
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-gray-400 bg-opacity-90 outline-none focus:outline-none">

            <div class="mt-10 sm:mt-0">
                <div class="mt-10 md:mt-0 md:col-span-2">
                    <form name="RegForm" onsubmit="return GEEKFORGEEKS()" method="POST">

                        <?php if ($result == TRUE) {
                            $num = mysqli_num_rows($result);

                            if ($num > 0) {
                                // LOOP TILL END OF DATA 
                                $rows = mysqli_fetch_assoc($result)
                        ?>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white bg-opacity-60 rounded-lg sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first_name" class="block text-sm font-medium text-black">First Name</label>
                                                <input type="text" name="first_name" id="club_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['first_name']; ?>">
                                            </div>


                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone_no" class="block text-sm font-medium text-black">Last Name</label>
                                                <input type="text" name="last_name" id="phone_no" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['last_name']; ?>">
                                            </div>


                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="city" class="block text-sm font-medium text-black">Street Number</Address></label>
                                                <input type="text" name="street" id="street_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['street']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="state" class="block text-sm font-medium text-black">City</label>
                                                <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['city']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="state" class="block text-sm font-medium text-black">Password</label>
                                                <input type="text" name="password" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['password']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6">
                                                <label for="first_name" class="block text-sm font-medium text-black">Email</label>
                                                <input type="text" name="email" id="description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['email']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6">
                                                <label for="first_name" class="block text-sm font-medium text-black">Phone</label>
                                                <input type="text" name="phone" id="description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['phone']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6">
                                                <label for="first_name" class="block text-sm font-medium text-black">Gender</label>
                                                <input type="text" name="gender" id="description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['gender']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6">
                                                <label for="first_name" class="block text-sm font-medium text-black">Age</label>
                                                <input type="text" name="age" id="description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['age']; ?>">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6">
                                                <label for="first_name" class="block text-sm font-medium text-black">Blood Group</label>
                                                <input type="text" name="bloodgroup" id="description" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md px-2" value="<?php echo $rows['bloodgroup']; ?>">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="px-4 py-3 bg-gray-50 text-right rounded-lg sm:px-6">
                                    <a class="text-white background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" href="index.php">
                                        CLOSE
                                    </a>

                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="update">
                                        UPDATE
                                    </button>
                                </div>
                                <!-- 
                                <div class="hidden col-span-6 sm:col-span-3">
                                    <label for="state" class="block text-sm font-medium text-gray-700">ID</label>
                                    <input type="text" name="id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-black rounded-md" value="">
                                </div> -->
                        <?php
                            }
                        }

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
if (isset($_POST['update'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phoneno = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $bloodgroup = $_POST['bloodgroup'];
    $email = $_POST['email'];

    $sql1 = "UPDATE `player` SET `first_name` = '$first_name',`last_name` = '$last_name',`street` = '$street', `city` = '$city', `phone` = '$phoneno',`password` = '$password' , `gender` = '$gender', `bloodgroup` = '$bloodgroup', `email` = '$email' , `age` = '$age'  WHERE `reg_id` = '$login_cred'";

    $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

    if ($result == TRUE) {
        header('location:http://localhost/sportsclub/index.php');
        exit(0);
    } else {
        echo "Failed to Update Data";
    }
}
?>

?>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>
<!-- 
<script>
    function GEEKFORGEEKS() {
        var name =
            document.forms["RegForm"]["first_name"];
        var phone_no =
            document.forms["RegForm"]["phone_no"];
        var street_no =
            document.forms["RegForm"]["street_no"];
        var city =
            document.forms["RegForm"]["city"];
        var password =
            document.forms["RegForm"]["password"];
        var description =
            document.forms["RegForm"]["description"];


        if (name.value == "") {
            window.alert("Please enter First Name");
            name.focus();
            return false;
        }

        if (phone_no.value == "") {
            window.alert("Please enter Contact");
            date.focus();
            return false;
        }

        if (street_no.value == "") {
            window.alert(
                "Please enter street");
            sport.focus();
            return false;
        }

        if (city.value == "") {
            window.alert("Please enter city.");
            start_time.focus();
            return false;
        }

        if (password.selectedIndex < 1) {
            window.alert("Please enter password");
            end_time.focus();
            return false;
        }

        if (description.value == "") {
            window.alert(
                "Please enter Facilities.");
            fees.focus();
            return false;
        }

        return true;
    }
</script> -->