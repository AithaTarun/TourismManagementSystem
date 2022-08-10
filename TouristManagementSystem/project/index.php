<?php
session_start();

$db_host="localhost";
$db_user="aitha";
$db_pass=" !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
$db_name="tourismManagementSystemDatabase";

$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if (mysqli_connect_error())
{
    echo "Error : ".mysqli_connect_error();
    exit;
}
$sql="";
$stmt="";
$userDetails=null;
$_SESSION["userDetails"] = $userDetails;
$maxBookId=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aurora Grove</title>
    <link rel="stylesheet" href="cssScripts/customizedBootstrap.css">
    <link rel="icon" href="images/northern-lights-512.png" type="image/x-icon">
    <script src="javaScripts/jquery-3.3.1.slim.min.js"></script>
    <script src="javaScripts/popper.min.js"></script>
    <script src="javaScripts/bootstrap.min.js"></script>
    <script >let bookPlace="";</script>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark">
    <a href="#" class="navbar-brand">
        <img src="images/northern-lights-512.png" alt="" width="40px" height="40px" style="display: inline">
        <img src="images/website.png" class="mb-0" style="display: inline;margin-left: 5px" width="300px">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#content">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">
        <ul class="navbar-nav ml-auto" id="contentList">
            <li class="nav-item">
                <a href="#showcase" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#icons" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#explore" class="nav-link">Explore</a>
            </li>
            <li class="nav-item" id="bookNavLink">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#bookingModal">Book</a>
            </li>
            <li class="nav-item" id="signUpNavLink">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#signUpModal">Sign Up</a>
            </li>
            <li class="nav-item" id="signInNavLink">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#signInModal">Sign In</a>
            </li>

        </ul>
    </div>
</nav>

<section id="showcase" class="d-flex justify-content-center align-items-center">
    <div id="overlay">
    </div>
    <div id="header" class="container text-white text-center">
        <h3 class="display-5 mb-0">
            MODERN WAY TO MANAGE TOURS
        </h3>
        <h1 class="display-1">
            AURORA GROVE
        </h1>
        <p class="lead d-none d-md-block">
            - A Home For Complete Travel Package
        </p>
        <button id="join" class="btn btn-lg btn-primary px-5" data-toggle="modal" data-target="#bookingModal">
            BOOK NOW
        </button>
    </div>
</section>

<section id="icons">

    <div class="container text-center my-5">
        <h2>
            YOU SHOW UP, WE PITCH THE TENT.
        </h2>
        <div class="row">
            <div class="col-md-4 p-3">
                <img src="images/tent.svg" alt="" class="img-fluid d-none d-md-inline">
                <br>
                <br>
                <h3>
                    Amenities You Want
                </h3>
                <br>
                <p class="lead">
                    We provide you facilities to book hotels and tickets for tours.
                    You wish to go on a vacation then this is the best solution for you.
                </p>
            </div>
            <div class="col-md-4 p-3">
                <img src="images/campfire.svg" alt="" class="img-fluid d-none d-md-inline">
                <br>
                <br>
                <h3>
                    The Food You Carve
                </h3>
                <br>
                <p class="lead">
                    Are you hungry on the holiday ?
                    <br>
                    We provide you facility to book restaurants, which tastes delicious.
                </p>
            </div>
            <div class="col-md-4 p-3">
                <img src="images/nature.svg" alt="" class="img-fluid d-none d-md-inline">
                <br>
                <br>
                <h3>
                    The Nature You Need
                </h3>
                <br>
                <p class="lead">
                    Want to enjoy nature in holidays ?
                    <br>
                    We provide you best guides and maps to maximize it.
                </p>
            </div>
        </div>
    </div>

</section>

<section id="explore">

    <div class="container text-center my-2 p-3">
        <h3>
            WE'VE CREATED A WAY PERFECT WAY TO GUIDE YOU THROUGHOUT THE HOLIDAY.
        </h3>
        <div class="row m-2">

            <div class="col-md-6 p-3">
                <div class="card">
                    <img src="images/winter.jpg" alt="" class="card-img-top" height="320px" width="240px">
                    <div class="card-body">
                        <h2 class="card-title text-primary">
                            EXPERIENCE
                        </h2>
                        <p class="card-text">
                            <b>
                            Ready to go for a holiday ?
                            </b>
                        </p>
                        <a href="#" class="nav-link btn btn-lg btn-outline-primary" data-toggle="modal" data-target="#bookingModal">
                            Go To This Page
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-3">
                <div class="card">
                    <img src="images/spring.jpg" alt="" class="card-img-top" height="320px" width="240px">
                    <div class="card-body">
                        <h2 class="card-title text-primary">
                            EXPLORE
                        </h2>
                        <p class="card-text">
                            <b>
                            Want to explore our packages ?
                            </b>
                        </p>
                        <a href="#" class="btn btn-lg btn-outline-primary">
                            Go To This Page
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<section id="quotes">

    <div class="container text-center my-4">
        <h3>
            WHAT OUR HAPPY TOURISTS ARE SAYING
        </h3>
        <div class="row">

            <div class="col-md-4 my-2">
                <img src="images/quotes.svg" alt="" height="50px" width="50px" class="m-3">
                <blockquote class="blockquote">
                    <p>
                        I have experienced wonderful holiday's with my family thanks to Aurora Grove.
                    </p>
                    <footer class="blockquote-footer">
                        Person 1
                    </footer>
                </blockquote>
            </div>

            <div class="col-md-4 my-2">
                <img src="images/quotes.svg" alt="" height="50px" width="50px" class="m-3">
                <blockquote class="blockquote">
                    <p>
                        Want a personal assistance in tour then undoubtedly choose aurora grove.
                    </p>
                    <footer class="blockquote-footer">
                        Person 2
                    </footer>
                </blockquote>
            </div>

            <div class="col-md-4 my-2">
                <img src="images/quotes.svg" alt="" height="50px" width="50px" class="m-3">
                <blockquote class="blockquote">
                    <p>
                        No need to depend on any external services in between holidays once aurora grove is in your pocket.
                    </p>
                    <footer class="blockquote-footer">
                        Person 3
                    </footer>
                </blockquote>
            </div>

        </div>
    </div>

</section>

<section>
    <div class="container my-4">

        <div class="row">

            <div class="col-md-7 my-3">
                <div class="carousel slide" data-ride="carousel" id="mainCarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/natureAbstract1.jpg" alt="" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="images/natureAbstract2.jpg" alt="" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="images/natureAbstract3.jpg" alt="" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="images/natureAbstract4.jpg" alt="" class="d-block w-100">
                        </div>
                    </div>
                    <a href="#mainCarousel" class="carousel-control-prev" data-slide="prev" role="button">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#mainCarousel" class="carousel-control-next" data-slide="next" role="button">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 my-3">
                <h3>MAKE TRAVELLING EASY WITH AURORA GROVE</h3>
                <p class="lead">
                    Be a part of aurora grove to achieve it
                </p>
                <a href="" class="text-primary">
                    See for yourself ➔
                </a>
            </div>

        </div>

    </div>
</section>

<section>
    <div class="container text-center my-4">
        <h3>
            WHAT OTHERS ARE SAYING
        </h3>
        <br>
        <h5 class="text-primary">
            #AURORAGROVE
        </h5>
        <br>
        <center>
        <video src="vid/TravelAroundTheWorld.mp4" controls width="100%" id="video" class="d-none d-sm-block"></video>
        </center>
    </div>
</section>

<section>
    <div class="container text-center my-4">
        <img src="images/quotes.svg" alt="" height="50px" width="50px" class="m-3">
        <blockquote class="blockquote">
            <p>
                Over one year ago I quit my job and decided to travel around the world. This was both a dream 10 years in the making and one of  the best decisions I’ve ever made. In the last 12 months I learned a lot about long-term travel, what I need to be happy, and how to survive outside of the US. Many of these things can’t be learned at home or in a book, and while reading about them on the internet can only get you so far, a lot of people have asked me to explain how I’ve done it.            </p>
            <footer class="blockquote-footer">
                Person
            </footer>
        </blockquote>
    </div>
</section>

<section id="signUp" class="bg-dark">
    <div class="container text-white text-center py-5">
        <p class="lead">
            JOIN OUR NEWSLETTER FOR DEALS, UPDATES AND OFFERS.
        </p>
        <div class="row justify-content-center">
           <div class="col-10 col-sm-8 col-md-6 col-lg-4">
               <form action="" class="form-inline">
                   <div class="input-group">
                       <input type="text" name="joinMailAddress" class="form-control" placeholder="Your mail address" id="joinMailAddress">
                       <div class="input-group append">
                           <button class="btn btn-primary">
                               Join Now
                           </button>
                       </div>
                   </div>
               </form>
           </div>
        </div>
    </div>
</section>

<section id="footer" class="p-3 bg-secondary">
    <div class="container">
        <ul class="nav text-center justify-content-center flex-column flex-sm-row">
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    FAQ
                </a>
            </li>
            <li class="nav-item">
                <a href="#explore" class="nav-link text-white">
                    EXPERIENCE
                </a>
            </li>
            <li class="nav-item">
                <a href="#explore" class="nav-link text-white">
                    EXPLORE
                </a>
            </li>
            <li class="nav-item">
                <a href="#signUp" class="nav-link text-white">
                    CONTACT
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white" data-toggle="modal" data-target="#bookingModel">
                    BOOK NOW
                </a>
            </li>
        </ul>
    </div>
</section>

<div class="modal" tabindex="-1" role="dialog" id="signUpModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <br>
            <center>
                <img src="images/New user.svg" alt="" width="90" height="90">
            </center>
            <br>
            <div class="modal-header">
                <h5 class="modal-title">Create new account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Please fill out the form below to create new account
                </p>

                <form action="" method="post" enctype="multipart/form-data" id="signUpForm">

                    <div class="form-group">
                        <label for="upUname">Username : </label>
                        <input type="text" required name="upUname" id="upUname" class="form-control" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="upFname">First name : </label>
                        <input type="text" required name="upFname" id="upFname" class="form-control" placeholder="First name">
                    </div>

                    <div class="form-group">
                        <label for="upLname">Last name : </label>
                        <input type="text" required name="upLname" id="upLname" class="form-control" placeholder="Last name">
                    </div>

                    <div class="form-group">
                        <label for="upPass">Password : </label>
                        <input type="password" required name="upPass" id="upPass" class="form-control" placeholder="Password">
                        <br>
                        <p id="upPassWarning" style="color: red"></p>
                    </div>

                    <div class="form-group">
                        <label for="upMail">Mail Address : </label>
                        <input type="email" name="upMail" id="upMail" class="form-control" placeholder="Mail ID" >
                    </div>

                    <div class="form-group">
                        <label for="licence">Driving Licence : </label>
                        <input type="file" accept="image/jpeg,image/jpg,image/png" name="licence" id="licence" class="form-control" style="border: 0px">
                    </div>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['upSuccess']))
                    {
                        $sql = "SELECT COUNT(*) FROM details WHERE Username=?";
                        $stmt = mysqli_prepare($conn, $sql);
                        $duplicate=false;

                        if ($stmt===false)
                        {
                            echo "Error getting Username : ".mysqli_error($conn);
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt,"s",$_POST["upUname"]);
                            if (mysqli_stmt_execute($stmt))
                            {
                                $result=mysqli_stmt_get_result($stmt);
                                $count=(mysqli_fetch_array($result,MYSQLI_ASSOC));
                                if ($count["COUNT(*)"]>0)
                                {
                                    echo '<script>window.alert("User with same username found !")</script>';
                                    $duplicate=true;
                                }
                            }
                        }

                        $sql = "INSERT INTO details (Username,Firstname,Lastname,Password,MailID) VALUES (?,?,?,?,?)";
                        $stmt = mysqli_prepare($conn, $sql);
                        $id = null;
                        if ($stmt === false || $duplicate)
                        {
                            echo "Error inserting details : " . mysqli_error($conn) . " <br>";
                        }
                        else
                            {

                            mysqli_stmt_bind_param($stmt, "sssss", $_POST['upUname'], $_POST['upFname'], $_POST['upLname'], $_POST['upPass'], $_POST['upMail']);

                            if (mysqli_stmt_execute($stmt))
                            {
                                $id = mysqli_insert_id($conn);
                                echo "User created successfully with ID : " . $id . " <br>";
                            }
                            else
                                {
                                echo "Error in creating user : " . mysqli_stmt_error($stmt)." <br>";
                                }

                            if (is_uploaded_file($_FILES['licence']['tmp_name']))
                            {
                                if (getimagesize($_FILES["licence"]["tmp_name"]) === false)
                                {
                                    echo "Failed to insert license <br>";
                                }
                                else
                                    {
                                    $image = $_FILES['licence']['tmp_name'];
                                    $imageData = addslashes(file_get_contents($image));
                                }

                                $insertLicence = $conn->query("UPDATE details SET DrivingLicence='$imageData' WHERE  UserID=" . $id);
                                if ($insertLicence)
                                {
                                    echo "User licence uploaded successfully <br>";

                                    /* To display image
                                    $res=mysqli_query($conn,"SELECT DrivingLicence from details WHERE UserID=".$id);
                                    $row=mysqli_fetch_array($res);
                                    echo '<img src="data:image;base64,'.base64_encode($row['DrivingLicence'] ).'" height="200" width="200"/>';
                                    */
                                }
                                else
                                    {
                                    echo "Error in uploading licence <br>";
                                    }
                            }

                            }
                    }
                    ?>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="upSuccess" id="upSubmit">
                        <button class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<script>

    <?php
    if (isset($_POST['upSuccess']))
    { ?>

    $(function()
    {
        $('#signUpModal').modal('show');
    });
    <?php
    }
    ?>

    let passWarning=document.querySelector("#upPassWarning");
    let upSubmit=document.querySelector("#upSubmit");
    upSubmit.disabled=true;
    document.querySelector('#upPass').addEventListener('input',function (e)
    {
        passWarning.textContent="";
        let pass=e.target.value;
        let upPassValid=true;
        let isLength=pass.length>=8 && pass.length<=14;
        if (!isLength)
        {
            passWarning.innerHTML="Password length should be in between 8 and 14 !";
            upPassValid=false;
        }
        let isLower=/[a-z]/.test(pass);
        if (!isLower)
        {
            passWarning.innerHTML="Password should contain at least one lower character !";
            upPassValid=false;
        }
        let isUpper=/[A-Z]/.test(pass);
        if (!isUpper)
        {
            passWarning.innerHTML="Password should contain at least one upper character !";
            upPassValid=false;
        }
        let isNumber=/[0-9]/.test(pass);
        if (!isNumber)
        {
            passWarning.innerHTML="Password should contain at least one number !";
            upPassValid=false;
        }
        let isSpecial=/[^a-zA-Z0-9]/.test(pass);
        if (!isSpecial)
        {
            passWarning.innerHTML="Password should contain at least one special character !";
            upPassValid=false;
        }

        if (upPassValid)
        {
            upSubmit.disabled=false;
        }
    }
    )
</script>

<div class="modal" tabindex="-1" role="dialog" id="signInModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <br>
            <center>
                <img src="images/Sign In.svg" alt="" width="120" height="120">
            </center>
            <br>
            <div class="modal-header">
                <h5 class="modal-title">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Enter your credentials to sign in
                </p>

                <form method="post" action="">

                    <div class="form-group">
                        <label for="inUname">User Name : </label>
                        <input type="text" required name="inUname" id="inUname" class="form-control" placeholder="User Name">
                    </div>

                    <div class="form-group">
                        <label for="inPass">Password : </label>
                        <input type="password" required name="inPass" id="inPass" class="form-control" placeholder="Password">
                    </div>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"]=="POST"  && isset($_POST['inSuccess']))
                    {
                        $sql = "SELECT COUNT(*) FROM details WHERE Username=?";
                        $stmt = mysqli_prepare($conn, $sql);
                        $exists=false;

                        if ($stmt===false)
                        {
                            echo "Error getting Username : ".mysqli_error($conn);
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt,"s",$_POST["inUname"]);
                            if (mysqli_stmt_execute($stmt))
                            {
                                $result=mysqli_stmt_get_result($stmt);
                                $count=(mysqli_fetch_array($result,MYSQLI_ASSOC));
                                if ($count["COUNT(*)"]===1)
                                {
                                    $exists=true;
                                }
                            }
                        }

                        $sql = "SELECT * FROM details WHERE Username=?";
                        $stmt = mysqli_prepare($conn, $sql);
                        $id = null;
                        if ($stmt === false && !$exists)
                        {
                            echo "<p style='color:red'>Username not found !"."</p><br>".mysqli_error($conn);
                        }
                        else
                        {

                            mysqli_stmt_bind_param($stmt,"s", $_POST['inUname']);

                            if (mysqli_stmt_execute($stmt))
                            {
                                $result=mysqli_stmt_get_result($stmt);
                                $result=mysqli_fetch_array($result,MYSQLI_ASSOC);
                                if ($result["Password"]==$_POST["inPass"])
                                {
                                    $userDetails=$result;
                                    $_SESSION["userDetails"] = $userDetails;
                                    echo "<p style='color:orange'>Login successful </p><br>";
                                }
                                else
                                {
                                    echo "<p style='color:red'>Invalid password </p><br>";
                                }
                            }
                            else
                            {
                                echo "Error while the login into the account". "<br>";
                            }

                        }
                    }
                    ?>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="inSuccess">
                        <button class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<script>
<?php
if (isset($_POST['inSuccess']))
{ ?>

    $(function()
    {
    $('#signInModal').modal('show');
    });
    <?php
}
?>

<?php if ($userDetails!==null){?>

    let signInNavLink=document.querySelector("#signInNavLink");
    signInNavLink.remove();

    let signUpNavLink=document.querySelector("#signUpNavLink");
    signUpNavLink.remove();

    let bookNavLink=document.querySelector("#bookNavLink");

    let navBar=document.querySelector("#contentList");

    let profile=document.createElement('li');
    profile.setAttribute("class","nav-item dropdown");

    let profileLink=document.createElement('a');
    profileLink.setAttribute("class","nav-link dropdown-toggle");
    profileLink.setAttribute("href","#");
    profileLink.setAttribute("id","profileDropdown");
    profileLink.setAttribute("role","button");
    profileLink.setAttribute("data-toggle","dropdown");
    let displayName="<?php echo $userDetails["Username"];?>";
    profileLink.textContent=displayName;

    let profileItems=document.createElement("div");
    profileItems.setAttribute("class","dropdown-menu");

    let profileItem1=document.createElement("a");
    profileItem1.setAttribute("class","dropdown-item");
    profileItem1.setAttribute("href","#");
    profileItem1.textContent="My Account";

    let profileItem2=document.createElement("a");
    profileItem2.setAttribute("class","dropdown-item");
    profileItem2.setAttribute("href","#");
    profileItem2.setAttribute("onclick","openViewBookings()");

    profileItem2.textContent="View bookings";

    let profileItem3=document.createElement("a");
    profileItem3.setAttribute("class","dropdown-item");
    profileItem3.setAttribute("href","#");
    profileItem3.setAttribute("onclick","openMaps()");
    profileItem3.textContent="View maps";

    profileItems.appendChild(profileItem1);
    profileItems.appendChild(profileItem2);
    profileItems.appendChild(profileItem3);
    profileLink.appendChild(profileItems);
    profile.appendChild(profileLink);

    navBar.insertBefore(profile,bookNavLink);

<?php } ?>

    let openViewBookings=function ()
{
    $("#viewBookingsModal").modal("show");
};

let openMaps=function ()
{
    $("#viewMapModal").modal("show");
}

</script>

<script>
    let declarePlace=function (place)
    {
        <?php if (is_null($userDetails)) { ?>
        window.alert("Please log in to continue");
        <?php } else { ?>
        bookPlace=place;
        $("#placeModal").modal('hide');
        <?php } ?>
    };
</script>

<div class="modal" tabindex="-1" role="dialog" id="bookingModal">
    <div class="modal-dialog mw-100 w-75" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bookingBody">
                <p>
                    Fill the below details to book
                </p>

                <form method="post" id="bookingForm" name="bookingForm" class="container">

                    <div class="form-group">
                        <label for="bookingType">Type of booking</label>
                        <select name="bookingType" id="bookingType" class="form-control" required>
                            <option selected hidden style="display: none">Select type of booking</option>
                            <option value="Journey tickets">Journey tickets</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="Vehicle">Vehicle</option>
                            <option value="Ride">Ride</option>
                            <option value="Guide">Guide</option>
                        </select>
                    </div>

                    <hr style="position: relative; top: 20px; border: none;height: 3px;background: black;margin-bottom: 40px">

                    <script>
                        let bookingTypes=document.querySelector("#bookingType");
                        let bookingForm=document.querySelector("#bookingForm");

                        let postUser=document.createElement("input");
                        postUser.setAttribute("type","number");
                        postUser.setAttribute("name","UserID");
                        postUser.setAttribute("id","UserID");
                        postUser.setAttribute("value","<?php echo $userDetails['UserID']; ?>");
                        postUser.setAttribute("hidden",true);

                        let postName=document.createElement("input");
                        postName.setAttribute("type","text");
                        postName.setAttribute("name","Username");
                        postName.setAttribute("id","Username");
                        postName.setAttribute("value","<?php echo $userDetails['Username']; ?>");
                        postName.setAttribute("hidden",true);

                        bookingTypes.addEventListener("change",function (e)
                        {
                            let bookOption=e.target.value;
                            if (bookOption==="Journey tickets")
                            {
                                $("#placeModal").modal('show');

                                let placeGroup = document.createElement("div");
                                placeGroup.setAttribute("class", "form-group");
                                placeGroup.setAttribute("style", "margin:20px");

                                let placeInput = document.createElement("input");
                                placeInput.setAttribute("name", "place");
                                placeInput.setAttribute("id", "place");
                                placeInput.setAttribute("type", "text");
                                placeInput.setAttribute("style", "margin:20px");
                                placeInput.setAttribute("readonly",true);

                                let placeInputLabel = document.createElement("label");
                                placeInputLabel.setAttribute("for", "placeInput");
                                placeInputLabel.textContent = "Booked place : ";
                                placeInputLabel.setAttribute("style", "margin:20px");

                                placeGroup.appendChild(placeInputLabel);
                                placeGroup.appendChild(placeInput);

                                let journeyDateGroup = document.createElement("div");
                                journeyDateGroup.setAttribute("class", "form-group");
                                journeyDateGroup.setAttribute("style", "margin:20px");

                                let journeyDate = document.createElement("input");
                                journeyDate.setAttribute("name", "journeyDate");
                                journeyDate.setAttribute("id", "journeyDate");
                                journeyDate.setAttribute("type", "date");
                                journeyDate.setAttribute("style", "margin:20px");
                                let journeyDateLabel = document.createElement("label");
                                journeyDateLabel.setAttribute("for", "journeyDate");
                                journeyDateLabel.textContent = "Select Date of journey : ";
                                journeyDateLabel.setAttribute("style", "margin:20px");

                                journeyDateGroup.appendChild(journeyDateLabel);
                                journeyDateGroup.appendChild(journeyDate);

                                let ticketCountGroup = document.createElement("div");
                                ticketCountGroup.setAttribute("class", "form-group");
                                ticketCountGroup.setAttribute("style", "margin:20px");
                                let ticketCount = document.createElement("input");
                                let ticketCountLabel = document.createElement("label");

                                ticketCountLabel.setAttribute("for", "ticketCount");
                                ticketCountLabel.textContent = "Select number of tickets maximum of 5 : ";

                                ticketCount.setAttribute("type", "number");
                                ticketCount.setAttribute("name", "ticketCount");
                                ticketCount.setAttribute("id", "ticketCount");
                                ticketCount.setAttribute("min", "1");
                                ticketCount.setAttribute("max", "5");
                                ticketCount.setAttribute("style", "margin:20px");

                                ticketCountGroup.appendChild(ticketCountLabel);
                                ticketCountGroup.appendChild(ticketCount);

                                bookingForm.insertBefore(placeGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(journeyDateGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(ticketCountGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postUser, document.querySelector("#lastChild"));

                                let count = 0;

                                ticketCount.addEventListener("input", function (e)
                                    {
                                        placeInput.setAttribute("value",bookPlace);
                                        if (e.target.value > count)
                                        {
                                            let detailsGroup = document.createElement("div");
                                            detailsGroup.setAttribute("class", "form-group");
                                            detailsGroup.setAttribute("id", "group" + (count + 1));
                                            let passengerName = document.createElement("input");
                                            let passengerNameLabel = document.createElement("label");

                                            passengerNameLabel.setAttribute("for", "passengerName" + (count + 1));
                                            passengerNameLabel.textContent = "Enter passenger name : ";

                                            passengerName.setAttribute("type", "text");
                                            passengerName.setAttribute("name", "passengerName" + (count + 1));
                                            passengerName.setAttribute("id", "passengerName" + (count + 1));
                                            passengerName.setAttribute("style", "margin:20px;display:inline");

                                            let passengerAge = document.createElement("input");
                                            let passengerAgeLabel = document.createElement("label");

                                            passengerAgeLabel.setAttribute("for", "passengerAge" + (count + 1));
                                            passengerAgeLabel.textContent = "Age : ";

                                            passengerAge.setAttribute("type", "number");
                                            passengerAge.setAttribute("name", "passengerAge" + (count + 1));
                                            passengerAge.setAttribute("id", "passengerAge" + (count + 1));
                                            passengerAge.setAttribute("min", "1");
                                            passengerAge.setAttribute("max", "99");
                                            passengerAge.setAttribute("style", "margin:20px;display:inline");

                                            let passengerGender1 = document.createElement("input");
                                            let passengerGender2 = document.createElement("input");
                                            let passengerGenderLabel1 = document.createElement("label");
                                            let passengerGenderLabel2 = document.createElement("label");

                                            passengerGenderLabel1.setAttribute("for", "passengerGender1" + (count + 1));
                                            passengerGenderLabel1.textContent = "Male : ";
                                            passengerGenderLabel2.setAttribute("for", "passengerGender2" + (count + 1));
                                            passengerGenderLabel2.textContent = "Female : ";

                                            passengerGender1.setAttribute("type", "radio");
                                            passengerGender1.setAttribute("name", "passengerGender" + (count + 1));
                                            passengerGender1.setAttribute("id", "passengerGender1" + (count + 1));
                                            passengerGender1.setAttribute("value", "Male");
                                            passengerGender1.setAttribute("style", "margin:20px;display:inline");

                                            passengerGender2.setAttribute("type", "radio");
                                            passengerGender2.setAttribute("name", "passengerGender" + (count + 1));
                                            passengerGender2.setAttribute("id", "passengerGender2" + (count + 1));
                                            passengerGender2.setAttribute("value", "Female");
                                            passengerGender2.setAttribute("style", "margin:20px;display:inline");


                                            detailsGroup.appendChild(passengerNameLabel);
                                            detailsGroup.appendChild(passengerName);

                                            detailsGroup.appendChild(passengerAgeLabel);
                                            detailsGroup.appendChild(passengerAge);

                                            detailsGroup.appendChild(passengerGenderLabel1);
                                            detailsGroup.appendChild(passengerGender1);
                                            detailsGroup.appendChild(passengerGenderLabel2);
                                            detailsGroup.appendChild(passengerGender2);

                                            bookingForm.insertBefore(detailsGroup, document.querySelector("#lastChild"));
                                            count++;
                                        }
                                        else
                                            {
                                            let c = bookingForm.childElementCount;
                                            bookingForm.removeChild(bookingForm.childNodes[c + 1]);
                                            console.log(bookingForm.childElementCount);
                                            count--;
                                        }
                                    }
                                );
                            }

                            else if (bookOption==="Hotel")
                            {
                                $("#placeModal").modal('show');

                                let placeGroup = document.createElement("div");
                                placeGroup.setAttribute("class", "form-group");
                                placeGroup.setAttribute("style", "margin:20px");

                                let placeInput = document.createElement("input");
                                placeInput.setAttribute("name", "place");
                                placeInput.setAttribute("id", "place");
                                placeInput.setAttribute("type", "text");
                                placeInput.setAttribute("style", "margin:20px");
                                placeInput.setAttribute("readonly",true);

                                let placeInputLabel = document.createElement("label");
                                placeInputLabel.setAttribute("for", "placeInput");
                                placeInputLabel.textContent = "Booked place : ";
                                placeInputLabel.setAttribute("style", "margin:20px");

                                placeGroup.appendChild(placeInputLabel);
                                placeGroup.appendChild(placeInput);

                                let bookDateGroup = document.createElement("div");
                                bookDateGroup.setAttribute("class", "form-group");
                                bookDateGroup.setAttribute("style", "margin:20px");

                                let bookDate = document.createElement("input");
                                bookDate.setAttribute("name", "bookDate");
                                bookDate.setAttribute("id", "bookDate");
                                bookDate.setAttribute("type", "date");
                                bookDate.setAttribute("style", "margin:20px");
                                let bookDateLabel = document.createElement("label");
                                bookDateLabel.setAttribute("for", "bookDate");
                                bookDateLabel.textContent = "Select Date of reservation : ";
                                bookDateLabel.setAttribute("style", "margin:20px");

                                bookDateGroup.appendChild(bookDateLabel);
                                bookDateGroup.appendChild(bookDate);

                                let bookCountGroup = document.createElement("div");
                                bookCountGroup.setAttribute("class", "form-group");
                                bookCountGroup.setAttribute("style", "margin:20px");
                                let bookCount = document.createElement("input");
                                let bookCountLabel = document.createElement("label");

                                bookCountLabel.setAttribute("for", "bookCount");
                                bookCountLabel.textContent = "Select number of room reservations maximum of 5 : ";

                                bookCount.setAttribute("type", "number");
                                bookCount.setAttribute("name", "bookCount");
                                bookCount.setAttribute("id", "bookCount");
                                bookCount.setAttribute("min", "1");
                                bookCount.setAttribute("max", "5");
                                bookCount.setAttribute("style", "margin:20px");

                                bookCountGroup.appendChild(bookCountLabel);
                                bookCountGroup.appendChild(bookCount);

                                bookCount.addEventListener("change",function (e)
                                {
                                    placeInput.setAttribute("value",bookPlace);
                                });

                                bookingForm.insertBefore(placeGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookDateGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookCountGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postUser, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postName, document.querySelector("#lastChild"));

                            }
                            else if (bookOption==="Restaurant")
                            {
                                $("#placeModal").modal('show');

                                let placeGroup = document.createElement("div");
                                placeGroup.setAttribute("class", "form-group");
                                placeGroup.setAttribute("style", "margin:20px");

                                let placeInput = document.createElement("input");
                                placeInput.setAttribute("name", "place");
                                placeInput.setAttribute("id", "place");
                                placeInput.setAttribute("type", "text");
                                placeInput.setAttribute("style", "margin:20px");
                                placeInput.setAttribute("readonly",true);

                                let placeInputLabel = document.createElement("label");
                                placeInputLabel.setAttribute("for", "placeInput");
                                placeInputLabel.textContent = "Booked place : ";
                                placeInputLabel.setAttribute("style", "margin:20px");

                                placeGroup.appendChild(placeInputLabel);
                                placeGroup.appendChild(placeInput);

                                let bookDateGroup = document.createElement("div");
                                bookDateGroup.setAttribute("class", "form-group");
                                bookDateGroup.setAttribute("style", "margin:20px");

                                let bookDate = document.createElement("input");
                                bookDate.setAttribute("name", "bookDate");
                                bookDate.setAttribute("id", "bookDate");
                                bookDate.setAttribute("type", "date");
                                bookDate.setAttribute("style", "margin:20px");
                                let bookDateLabel = document.createElement("label");
                                bookDateLabel.setAttribute("for", "bookDate");
                                bookDateLabel.textContent = "Select Date of reservation : ";
                                bookDateLabel.setAttribute("style", "margin:20px");

                                bookDateGroup.appendChild(bookDateLabel);
                                bookDateGroup.appendChild(bookDate);

                                let bookCountGroup = document.createElement("div");
                                bookCountGroup.setAttribute("class", "form-group");
                                bookCountGroup.setAttribute("style", "margin:20px");
                                let bookCount = document.createElement("input");
                                let bookCountLabel = document.createElement("label");

                                bookCountLabel.setAttribute("for", "bookCount");
                                bookCountLabel.textContent = "Select number of seat reservations maximum of 5 : ";

                                bookCount.setAttribute("type", "number");
                                bookCount.setAttribute("name", "bookCount");
                                bookCount.setAttribute("id", "bookCount");
                                bookCount.setAttribute("min", "1");
                                bookCount.setAttribute("max", "5");
                                bookCount.setAttribute("style", "margin:20px");

                                bookCountGroup.appendChild(bookCountLabel);
                                bookCountGroup.appendChild(bookCount);

                                bookCount.addEventListener("change",function (e)
                                {
                                    placeInput.setAttribute("value",bookPlace);
                                });

                                let foodType1 = document.createElement("input");
                                let foodType2 = document.createElement("input");
                                let foodType1Label = document.createElement("label");
                                let foodType2Label = document.createElement("label");

                                foodType1Label.setAttribute("for", "foodType1");
                                foodType1Label.textContent = "VEG : ";
                                foodType2Label.setAttribute("for", "foodType2");
                                foodType2Label.textContent = "NON-VEG : ";

                                foodType1.setAttribute("type", "radio");
                                foodType1.setAttribute("name", "foodType");
                                foodType1.setAttribute("id", "foodType1");
                                foodType1.setAttribute("value", "VEG");
                                foodType1.setAttribute("style", "margin:20px;display:inline");

                                foodType2.setAttribute("type", "radio");
                                foodType2.setAttribute("name", "foodType");
                                foodType2.setAttribute("id", "foodType2");
                                foodType2.setAttribute("value", "NON-VEG");
                                foodType2.setAttribute("style", "margin:20px;display:inline");

                                bookingForm.insertBefore(placeGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookDateGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookCountGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(foodType1Label,document.querySelector("#lastChild"));
                                bookingForm.insertBefore(foodType1,document.querySelector("#lastChild"));
                                bookingForm.insertBefore(foodType2Label,document.querySelector("#lastChild"));
                                bookingForm.insertBefore(foodType2,document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postUser, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postName, document.querySelector("#lastChild"));

                            }
                            else if (bookOption==="Vehicle")
                            {
                                $("#placeModal").modal('show');

                                let placeGroup = document.createElement("div");
                                placeGroup.setAttribute("class", "form-group");
                                placeGroup.setAttribute("style", "margin:20px");

                                let placeInput = document.createElement("input");
                                placeInput.setAttribute("name", "place");
                                placeInput.setAttribute("id", "place");
                                placeInput.setAttribute("type", "text");
                                placeInput.setAttribute("style", "margin:20px");
                                placeInput.setAttribute("readonly",true);

                                let placeInputLabel = document.createElement("label");
                                placeInputLabel.setAttribute("for", "placeInput");
                                placeInputLabel.textContent = "Booked place : ";
                                placeInputLabel.setAttribute("style", "margin:20px");

                                placeGroup.appendChild(placeInputLabel);
                                placeGroup.appendChild(placeInput);

                                let bookDateGroup = document.createElement("div");
                                bookDateGroup.setAttribute("class", "form-group");
                                bookDateGroup.setAttribute("style", "margin:20px");

                                let bookDate = document.createElement("input");
                                bookDate.setAttribute("name", "bookDate");
                                bookDate.setAttribute("id", "bookDate");
                                bookDate.setAttribute("type", "date");
                                bookDate.setAttribute("style", "margin:20px");
                                let bookDateLabel = document.createElement("label");
                                bookDateLabel.setAttribute("for", "bookDate");
                                bookDateLabel.textContent = "Select Date of reservation : ";
                                bookDateLabel.setAttribute("style", "margin:20px");

                                bookDateGroup.appendChild(bookDateLabel);
                                bookDateGroup.appendChild(bookDate);

                                let bookCountGroup = document.createElement("div");
                                bookCountGroup.setAttribute("class", "form-group");
                                bookCountGroup.setAttribute("style", "margin:20px");
                                let bookCount = document.createElement("input");
                                let bookCountLabel = document.createElement("label");

                                bookCountLabel.setAttribute("for", "bookCount");
                                bookCountLabel.textContent = "Select capacity of vehicle maximum of 5 : ";

                                bookCount.setAttribute("type", "number");
                                bookCount.setAttribute("name", "bookCount");
                                bookCount.setAttribute("id", "bookCount");
                                bookCount.setAttribute("min", "1");
                                bookCount.setAttribute("max", "5");
                                bookCount.setAttribute("style", "margin:20px");

                                bookCountGroup.appendChild(bookCountLabel);
                                bookCountGroup.appendChild(bookCount);

                                bookCount.addEventListener("change",function (e)
                                {
                                    placeInput.setAttribute("value",bookPlace);
                                });

                                let vehicleType=document.createElement("select");
                                let vehicleTypeLabel=document.createElement("label");
                                vehicleTypeLabel.setAttribute("for","vehicleType");
                                vehicleTypeLabel.textContent = "Select Vehicle Type : ";
                                vehicleTypeLabel.setAttribute("style", "margin:20px");

                                vehicleType.setAttribute("type", "select");
                                vehicleType.setAttribute("name", "vehicleType");
                                vehicleType.setAttribute("id", "vehicleType");
                                vehicleType.setAttribute("style", "margin:20px");

                                let hid=document.createElement("option");
                                hid.setAttribute("selected",true);
                                hid.setAttribute("hidden",true);
                                hid.setAttribute("style","display: none");
                                hid.textContent="Select vehicle type";
                                vehicleType.appendChild(hid);

                                let vehicles=["Bugatti Chiron","Hennessey Venom","DODGE TOMAHAWK","SUZUKI HAYABUSA"];

                                for (let c=0;c<vehicles.length;c++)
                                {
                                    let opt=document.createElement("option");
                                    opt.setAttribute("value",vehicles[c]);
                                    opt.textContent=vehicles[c];
                                    vehicleType.appendChild(opt);
                                }

                                bookingForm.insertBefore(placeGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookDateGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookCountGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(vehicleTypeLabel, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(vehicleType, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postUser, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postName, document.querySelector("#lastChild"));

                            }
                            else if (bookOption==="Ride")
                            {
                                $("#placeModal").modal('show');

                                let placeGroup = document.createElement("div");
                                placeGroup.setAttribute("class", "form-group");
                                placeGroup.setAttribute("style", "margin:20px");

                                let placeInput = document.createElement("input");
                                placeInput.setAttribute("name", "place");
                                placeInput.setAttribute("id", "place");
                                placeInput.setAttribute("type", "text");
                                placeInput.setAttribute("style", "margin:20px");
                                placeInput.setAttribute("readonly",true);

                                let placeInputLabel = document.createElement("label");
                                placeInputLabel.setAttribute("for", "placeInput");
                                placeInputLabel.textContent = "Booked place : ";
                                placeInputLabel.setAttribute("style", "margin:20px");

                                placeGroup.appendChild(placeInputLabel);
                                placeGroup.appendChild(placeInput);

                                let bookDateGroup = document.createElement("div");
                                bookDateGroup.setAttribute("class", "form-group");
                                bookDateGroup.setAttribute("style", "margin:20px");

                                let bookDate = document.createElement("input");
                                bookDate.setAttribute("name", "bookDate");
                                bookDate.setAttribute("id", "bookDate");
                                bookDate.setAttribute("type", "date");
                                bookDate.setAttribute("style", "margin:20px");
                                let bookDateLabel = document.createElement("label");
                                bookDateLabel.setAttribute("for", "bookDate");
                                bookDateLabel.textContent = "Select Date of reservation : ";
                                bookDateLabel.setAttribute("style", "margin:20px");

                                bookDateGroup.appendChild(bookDateLabel);
                                bookDateGroup.appendChild(bookDate);

                                let bookCountGroup = document.createElement("div");
                                bookCountGroup.setAttribute("class", "form-group");
                                bookCountGroup.setAttribute("style", "margin:20px");
                                let bookCount = document.createElement("input");
                                let bookCountLabel = document.createElement("label");

                                bookCountLabel.setAttribute("for", "bookCount");
                                bookCountLabel.textContent = "Select seating capacity of vehicle maximum of 5 : ";

                                bookCount.setAttribute("type", "number");
                                bookCount.setAttribute("name", "bookCount");
                                bookCount.setAttribute("id", "bookCount");
                                bookCount.setAttribute("min", "1");
                                bookCount.setAttribute("max", "5");
                                bookCount.setAttribute("style", "margin:20px");

                                bookCountGroup.appendChild(bookCountLabel);
                                bookCountGroup.appendChild(bookCount);

                                bookCount.addEventListener("change",function (e)
                                {
                                    placeInput.setAttribute("value",bookPlace);
                                });

                                let rideType=document.createElement("select");
                                let rideTypeLabel=document.createElement("label");
                                rideTypeLabel.setAttribute("for","rideType");
                                rideTypeLabel.textContent = "Select Ride Type : ";
                                rideTypeLabel.setAttribute("style", "margin:20px");

                                rideType.setAttribute("type", "select");
                                rideType.setAttribute("name", "rideType");
                                rideType.setAttribute("id", "rideType");
                                rideType.setAttribute("style", "margin:20px");

                                let hid=document.createElement("option");
                                hid.setAttribute("selected",true);
                                hid.setAttribute("hidden",true);
                                hid.setAttribute("style","display: none");
                                hid.textContent="Select ride type";
                                rideType.appendChild(hid);

                                let vehicles=["Exclusive","Luxury","Micro","Mini","Share"];

                                for (let c=0;c<vehicles.length;c++)
                                {
                                    let opt=document.createElement("option");
                                    opt.setAttribute("value",vehicles[c]);
                                    opt.textContent=vehicles[c];
                                    rideType.appendChild(opt);
                                }

                                bookingForm.insertBefore(placeGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookDateGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookCountGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(rideTypeLabel, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(rideType, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postUser, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postName, document.querySelector("#lastChild"));

                            }
                            else if (bookOption==="Guide")
                            {
                                $("#placeModal").modal('show');

                                let placeGroup = document.createElement("div");
                                placeGroup.setAttribute("class", "form-group");
                                placeGroup.setAttribute("style", "margin:20px");

                                let placeInput = document.createElement("input");
                                placeInput.setAttribute("name", "place");
                                placeInput.setAttribute("id", "place");
                                placeInput.setAttribute("type", "text");
                                placeInput.setAttribute("style", "margin:20px");
                                placeInput.setAttribute("readonly",true);

                                let placeInputLabel = document.createElement("label");
                                placeInputLabel.setAttribute("for", "placeInput");
                                placeInputLabel.textContent = "Booked place : ";
                                placeInputLabel.setAttribute("style", "margin:20px");

                                placeGroup.appendChild(placeInputLabel);
                                placeGroup.appendChild(placeInput);

                                let bookDateGroup = document.createElement("div");
                                bookDateGroup.setAttribute("class", "form-group");
                                bookDateGroup.setAttribute("style", "margin:20px");

                                let bookDate = document.createElement("input");
                                bookDate.setAttribute("name", "bookDate");
                                bookDate.setAttribute("id", "bookDate");
                                bookDate.setAttribute("type", "date");
                                bookDate.setAttribute("style", "margin:20px");
                                let bookDateLabel = document.createElement("label");
                                bookDateLabel.setAttribute("for", "bookDate");
                                bookDateLabel.textContent = "Select Date of reservation : ";
                                bookDateLabel.setAttribute("style", "margin:20px");

                                bookDateGroup.appendChild(bookDateLabel);
                                bookDateGroup.appendChild(bookDate);

                                bookDate.addEventListener("change",function (e)
                                {
                                    placeInput.setAttribute("value",bookPlace);
                                });

                                let guideConfirm=document.createElement("p");
                                guideConfirm.setAttribute("style","color:red;font-size:50px");
                                guideConfirm.textContent="Click submit to confirm guide booking";

                                bookingForm.insertBefore(placeGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(bookDateGroup, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(guideConfirm,document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postUser, document.querySelector("#lastChild"));
                                bookingForm.insertBefore(postName, document.querySelector("#lastChild"));

                            }
                        }
                        );

                    </script>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['bookSuccess']))
                    {
                        $sql = "SELECT MAX(BookingID) AS 'Max'FROM bookings";
                        $stmt = mysqli_prepare($conn, $sql);
                        if ($stmt === false)
                        {
                            echo "Error getting max value : " . mysqli_error($conn) . " <br>";
                        }
                        else
                            {
                            if (mysqli_stmt_execute($stmt))
                            {
                                $result = mysqli_stmt_get_result($stmt);
                                $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $maxBookId = $result["Max"];
                            }
                            else
                                {
                                echo "Error while finding max" . "<br>";
                            }

                        }

                        if ($_POST['bookingType'] == "Journey tickets")
                        {
                            $ticketCount = $_POST["ticketCount"];
                            $recordMax = $maxBookId + 1;
                            $recordCount = 1;

                            for ($i = 0; $i < $ticketCount; $i++)
                            {
                                $sql = "INSERT INTO bookings(BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingAge,BookingGender,BookingCount) VALUES (?,?,?,?,?,?,?,?,?)";
                                $stmt = mysqli_prepare($conn, $sql);
                                if ($stmt === false) {
                                    echo "Error inserting : " . mysqli_error($conn) . " <br>";
                                }
                                else
                                    {
                                    mysqli_stmt_bind_param($stmt, "isisssisi", $recordMax, $_POST['bookingType'], $_POST["UserID"], $_POST['journeyDate'], $_POST['place'], $_POST["passengerName" . ($i + 1)], $_POST["passengerAge" . ($i + 1)], $_POST["passengerGender" . ($i + 1)], $recordCount);

                                    if (mysqli_stmt_execute($stmt))
                                    {
                                        echo "<p style='color:orange'>Tickets booked successfully </p><br>";
                                    }
                                    else
                                        {
                                        echo "Error in booking : " . mysqli_stmt_error($stmt) . " <br>";
                                    }

                                }

                            }
                        }
                        elseif ($_POST['bookingType'] == "Hotel")
                        {
                            $bookCount = $_POST["bookCount"];
                            $recordMax = $maxBookId + 1;

                            $sql = "INSERT INTO bookings(BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount) VALUES (?,?,?,?,?,?,?)";
                            $stmt = mysqli_prepare($conn, $sql);
                            if ($stmt === false)
                            {
                                echo "Error inserting details : " . mysqli_error($conn) . " <br>";
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "isisssi", $recordMax, $_POST['bookingType'], $_POST["UserID"], $_POST['bookDate'], $_POST['place'], $_POST["Username"],$bookCount);

                                if (mysqli_stmt_execute($stmt))
                                {
                                    echo "<p style='color:orange'>Reservations booked successfully </p><br>";
                                }
                                else
                                {
                                    echo "Error in booking : " . mysqli_stmt_error($stmt) . " <br>";
                                }

                            }
                        }
                        elseif ($_POST['bookingType'] == "Restaurant")
                        {
                            $bookCount = $_POST["bookCount"];
                            $recordMax = $maxBookId + 1;

                            $sql = "INSERT INTO bookings(BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount,foodType) VALUES (?,?,?,?,?,?,?,?)";
                            $stmt = mysqli_prepare($conn, $sql);
                            if ($stmt === false)
                            {
                                echo "Error inserting details : " . mysqli_error($conn) . " <br>";
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "isisssis", $recordMax, $_POST['bookingType'], $_POST["UserID"], $_POST['bookDate'], $_POST['place'], $_POST["Username"], $bookCount,$_POST["foodType"]);

                                if (mysqli_stmt_execute($stmt))
                                {
                                    echo "<p style='color:orange'>Restaurant booked successfully </p><br>";
                                }
                                else
                                {
                                    echo "Error in booking : " . mysqli_stmt_error($stmt) . " <br>";
                                }

                            }
                        }
                        elseif ($_POST['bookingType'] == "Vehicle")
                        {
                            $bookCount = $_POST["bookCount"];
                            $recordMax = $maxBookId + 1;

                            $sql = "INSERT INTO bookings(BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount,vehicleType) VALUES (?,?,?,?,?,?,?,?)";
                            $stmt = mysqli_prepare($conn, $sql);
                            if ($stmt === false)
                            {
                                echo "Error inserting details : " . mysqli_error($conn) . " <br>";
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "isisssis", $recordMax, $_POST['bookingType'], $_POST["UserID"], $_POST['bookDate'], $_POST['place'], $_POST["Username"], $bookCount,$_POST["vehicleType"]);

                                if (mysqli_stmt_execute($stmt))
                                {
                                    echo "<p style='color:orange'>Vehicle booked successfully </p><br>";
                                }
                                else
                                {
                                    echo "Error in booking : " . mysqli_stmt_error($stmt) . " <br>";
                                }

                            }
                        }
                        elseif ($_POST['bookingType'] == "Ride")
                        {
                            $bookCount = $_POST["bookCount"];
                            $recordMax = $maxBookId + 1;

                            $sql = "INSERT INTO bookings(BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount,rideType) VALUES (?,?,?,?,?,?,?,?)";
                            $stmt = mysqli_prepare($conn, $sql);
                            if ($stmt === false)
                            {
                                echo "Error inserting details : " . mysqli_error($conn) . " <br>";
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "isisssis", $recordMax, $_POST['bookingType'], $_POST["UserID"], $_POST['bookDate'], $_POST['place'], $_POST["Username"], $bookCount,$_POST["rideType"]);

                                if (mysqli_stmt_execute($stmt))
                                {
                                    echo "<p style='color:orange'>Ride booked successfully </p><br>";
                                }
                                else
                                {
                                    echo "Error in booking : " . mysqli_stmt_error($stmt) . " <br>";
                                }

                            }
                        }
                        elseif ($_POST['bookingType'] == "Guide")
                        {
                            $recordMax = $maxBookId + 1;
                            $isGuide=true;

                            $sql = "INSERT INTO bookings(BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,isGuide) VALUES (?,?,?,?,?,?,?)";
                            $stmt = mysqli_prepare($conn, $sql);
                            if ($stmt === false)
                            {
                                echo "Error inserting details : " . mysqli_error($conn) . " <br>";
                            }
                            else
                            {
                                mysqli_stmt_bind_param($stmt, "isisssi", $recordMax, $_POST['bookingType'], $_POST["UserID"], $_POST['bookDate'], $_POST['place'], $_POST["Username"],$isGuide);

                                if (mysqli_stmt_execute($stmt))
                                {
                                    echo "<p style='color:orange'>Guide hired successfully </p><br>";
                                }
                                else
                                {
                                    echo "Error in booking : " . mysqli_stmt_error($stmt) . " <br>";
                                }

                            }
                        }
                    }
                    ?>

                    <div class="form-group" id="lastChild"></div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="bookSuccess">
                        <button class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<script>
    <?php
    if (isset($_POST['bookSuccess']))
    { ?>

    $(function()
    {
        $('#bookingModal').modal('show');
    });
    <?php
    }
    ?>
</script>

<div class="modal" tabindex="-1" role="dialog" id="placeModal">
    <div class="modal-dialog mw-100 w-75" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Place Selection</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bookingBody">

                <section id="explore">

                    <div class="text-center my-2 p-3">

                        <h3>
                            SELECT PLACE TO VISIT
                        </h3>

                        <div class="row m-2">

                            <div class="col-md-3 p-3">
                                <div class="card">
                                    <img src="images/place1.jpg" alt="" class="card-img-top" height="320px">
                                    <div class="card-body">
                                        <h2 class="card-title text-primary">
                                            PLACE 1
                                        </h2>
                                        <p class="card-text">
                                            <b>
                                                Enjoy Waterfalls ?
                                            </b>
                                        </p>
                                        <center>
                                        <button class="nav-link btn btn-lg btn-outline-primary" onclick="declarePlace('Place1')">
                                            Choose this place
                                        </button>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 p-3">
                                <div class="card">
                                    <img src="images/place2.jpg" alt="" class="card-img-top" height="320px">
                                    <div class="card-body">
                                        <h2 class="card-title text-primary">
                                            PLACE 2
                                        </h2>
                                        <p class="card-text">
                                            <b>
                                                Enjoy Desert Environment ?
                                            </b>
                                        </p>
                                        <center>
                                        <button class="nav-link btn btn-lg btn-outline-primary" onclick="declarePlace('Place2')">
                                            Choose this place
                                        </button>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 p-3">
                                <div class="card">
                                    <img src="images/place3.jpg" alt="" class="card-img-top" height="320px">
                                    <div class="card-body">
                                        <h2 class="card-title text-primary">
                                            PLACE 3
                                        </h2>
                                        <p class="card-text">
                                            <b>
                                                Enjoy Winter ?
                                            </b>
                                        </p>
                                        <center>
                                        <button class="nav-link btn btn-lg btn-outline-primary" onclick="declarePlace('Place3')">
                                            Choose this place
                                        </button>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 p-3">
                                <div class="card">
                                    <img src="images/place4.jpg" alt="" class="card-img-top" height="320px">
                                    <div class="card-body">
                                        <h2 class="card-title text-primary">
                                            PLACE 4
                                        </h2>
                                        <p class="card-text">
                                            <b>
                                                Enjoy Spring ?
                                            </b>
                                        </p>
                                        <center>
                                            <button class="nav-link btn btn-lg btn-outline-primary" onclick="declarePlace('Place4')">
                                                Choose this place
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>

            </div>

        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="viewBookingsModal">
    <div class="modal-dialog mw-100 w-75" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Bookings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="viewBody">
                <p>
                    Select type of booking
                </p>

                <form method="post" id="viewForm" name="viewForm" class="container">

                    <div class="form-group">
                        <label for="viewType">Type of booking</label>
                        <select name="viewType" id="viewType" class="form-control" required>
                            <option selected hidden style="display: none">Select type of booking</option>
                            <option value="Journey tickets">Journey tickets</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="Vehicle">Vehicle</option>
                            <option value="Ride">Ride</option>
                            <option value="Guide">Guide</option>
                        </select>
                    </div>

                    <hr style="position: relative; top: 20px; border: none;height: 3px;background: black;margin-bottom: 40px">

                    <script>
                        let viewTypes=document.querySelector("#viewType");
                        let viewForm=document.querySelector("#viewForm");

                        postUser=document.createElement("input");
                        postUser.setAttribute("type","number");
                        postUser.setAttribute("name","UserID");
                        postUser.setAttribute("id","UserID");
                        postUser.setAttribute("value","<?php echo $userDetails['UserID']; ?>");
                        postUser.setAttribute("hidden",true);

                        postName=document.createElement("input");
                        postName.setAttribute("type","text");
                        postName.setAttribute("name","Username");
                        postName.setAttribute("id","Username");
                        postName.setAttribute("value","<?php echo $userDetails['Username']; ?>");
                        postName.setAttribute("hidden",true);

                        viewForm.appendChild(postUser);
                        viewForm.appendChild(postName);

                    </script>

                    <center>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['viewSuccess']))
                    {
                        $viewID=(int)$_POST["UserID"];
                        if ($_POST['viewType'] == "Journey tickets")
                        {
                            $sql="SELECT BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingAge,BookingGender,BookingCount FROM bookings WHERE BookingType='Journey tickets'";
                            $results=mysqli_query($conn,$sql);
                            if ($results===false)
                            {
                                echo "Error in fetching bookings : ".mysqli_error($conn)."<br>";
                            }
                            else
                        {
                            $data = mysqli_fetch_all($results, MYSQLI_ASSOC);

                            if (empty($data)): ?>
                        <p>Data Not Found ! </p>

                        <?php else: ?>

                        <table border="5px" cellpadding="20px" cellspacing="20px">
                            <thead>
                            <tr>
                                <td>Booking ID</td>
                                <td>Booking Type</td>
                                <td>User ID</td>
                                <td>Booking Date</td>
                                <td>Booking Place</td>
                                <td>Booking name</td>
                                <td>Age</td>
                                <td>Gender</td>
                                <td>Tickets Reserved</td>
                            </tr>
                            </thead>
                            <?php foreach ($data as $cur): ?>
                            <tr>
                                <td>
                                    <?php echo $cur["BookingID"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["BookingType"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["UserID"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["BookingDate"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["BookingPlace"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["BookingName"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["BookingAge"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["BookingGender"]; ?>
                                </td>
                                <td>
                                    <?php echo $cur["BookingCount"]; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php endif; } }?>

                        <?php
                        if ($_POST['viewType'] == "Hotel")
                        {
                            $sql="SELECT BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount FROM bookings WHERE BookingType='Hotel'";
                            $results=mysqli_query($conn,$sql);
                            if ($results===false)
                            {
                                echo "Error in fetching bookings : ".mysqli_error($conn)."<br>";
                            }
                            else
                            {
                                $data = mysqli_fetch_all($results, MYSQLI_ASSOC);

                                if (empty($data)): ?>
                                    <p>Data Not Found ! </p>

                                <?php else: ?>

                                    <table border="5px" cellpadding="20px" cellspacing="20px">
                                        <thead>
                                        <tr>
                                            <td>Booking ID</td>
                                            <td>Booking Type</td>
                                            <td>User ID</td>
                                            <td>Booking Date</td>
                                            <td>Booking Place</td>
                                            <td>Booking name</td>
                                            <td>Rooms Reserved</td>
                                        </tr>
                                        </thead>
                                        <?php foreach ($data as $cur): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cur["BookingID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingType"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["UserID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingDate"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingPlace"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingName"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingCount"]; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                <?php endif; } }?>

                        <?php
                        if ($_POST['viewType'] == "Restaurant")
                        {

                            $sql="SELECT BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount,foodType FROM bookings WHERE BookingType='Restaurant'";
                            $results=mysqli_query($conn,$sql);
                            if ($results===false)
                            {
                                echo "Error in fetching bookings : ".mysqli_error($conn)."<br>";
                            }
                            else
                            {
                                $data = mysqli_fetch_all($results, MYSQLI_ASSOC);

                                if (empty($data)): ?>
                                    <p>Data Not Found ! </p>

                                <?php else: ?>

                                    <table border="5px" cellpadding="20px" cellspacing="20px">
                                        <thead>
                                        <tr>
                                            <td>Booking ID</td>
                                            <td>Booking Type</td>
                                            <td>User ID</td>
                                            <td>Booking Date</td>
                                            <td>Booking Place</td>
                                            <td>Booking name</td>
                                            <td>Seats Reserved</td>
                                            <td>Food Type</td>
                                        </tr>
                                        </thead>
                                        <?php foreach ($data as $cur): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cur["BookingID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingType"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["UserID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingDate"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingPlace"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingName"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingCount"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["foodType"]; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                <?php endif; } }?>

                        <?php
                        if ($_POST['viewType'] == "Vehicle")
                        {
                            $sql="SELECT BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount,vehicleType FROM bookings WHERE BookingType='Vehicle'";
                            $results=mysqli_query($conn,$sql);
                            if ($results===false)
                            {
                                echo "Error in fetching bookings : ".mysqli_error($conn)."<br>";
                            }
                            else
                            {
                                $data = mysqli_fetch_all($results, MYSQLI_ASSOC);

                                if (empty($data)): ?>
                                    <p>Data Not Found ! </p>

                                <?php else: ?>

                                    <table border="5px" cellpadding="20px" cellspacing="20px">
                                        <thead>
                                        <tr>
                                            <td>Booking ID</td>
                                            <td>Booking Type</td>
                                            <td>User ID</td>
                                            <td>Booking Date</td>
                                            <td>Booking Place</td>
                                            <td>Booking name</td>
                                            <td>Vehicle Capacity</td>
                                            <td>Vehicle</td>
                                        </tr>
                                        </thead>
                                        <?php foreach ($data as $cur): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cur["BookingID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingType"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["UserID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingDate"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingPlace"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingName"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingCount"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["vehicleType"]; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                <?php endif; } }?>

                        <?php
                        if ($_POST['viewType'] == "Ride")
                        {
                            $sql="SELECT BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName,BookingCount,rideType FROM bookings WHERE BookingType='Ride'";
                            $results=mysqli_query($conn,$sql);
                            if ($results===false)
                            {
                                echo "Error in fetching bookings : ".mysqli_error($conn)."<br>";
                            }
                            else
                            {
                                $data = mysqli_fetch_all($results, MYSQLI_ASSOC);

                                if (empty($data)): ?>
                                    <p>Data Not Found ! </p>

                                <?php else: ?>

                                    <table border="5px" cellpadding="20px" cellspacing="20px">
                                        <thead>
                                        <tr>
                                            <td>Booking ID</td>
                                            <td>Booking Type</td>
                                            <td>User ID</td>
                                            <td>Booking Date</td>
                                            <td>Booking Place</td>
                                            <td>Booking name</td>
                                            <td>Ride Capacity</td>
                                            <td>Ride Type</td>
                                        </tr>
                                        </thead>
                                        <?php foreach ($data as $cur): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cur["BookingID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingType"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["UserID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingDate"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingPlace"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingName"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingCount"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["rideType"]; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                <?php endif; } }?>

                        <?php
                        if ($_POST['viewType'] == "Guide")
                        {
                            $sql="SELECT BookingID,BookingType,UserID,BookingDate,BookingPlace,BookingName FROM bookings WHERE BookingType='Guide'";
                            $results=mysqli_query($conn,$sql);
                            if ($results===false)
                            {
                                echo "Error in fetching bookings : ".mysqli_error($conn)."<br>";
                            }
                            else
                            {
                                $data = mysqli_fetch_all($results, MYSQLI_ASSOC);

                                if (empty($data)): ?>
                                    <p>Data Not Found ! </p>

                                <?php else: ?>

                                    <table border="5px" cellpadding="20px" cellspacing="20px">
                                        <thead>
                                        <tr>
                                            <td>Booking ID</td>
                                            <td>Booking Type</td>
                                            <td>User ID</td>
                                            <td>Booking Date</td>
                                            <td>Booking Place</td>
                                            <td>Booking name</td>
                                        </tr>
                                        </thead>
                                        <?php foreach ($data as $cur): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cur["BookingID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingType"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["UserID"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingDate"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingPlace"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $cur["BookingName"]; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                <?php endif; } }?>

                        <?php
                    }
                    ?>
                    </center>

                    <div class="form-group" id="viewLastChild"></div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="viewSuccess">
                        <button class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<script>
    <?php
    if (isset($_POST['viewSuccess']))
    { ?>

    $(function()
    {
        $('#viewBookingsModal').modal('show');
    });
    <?php
    }
    ?>
</script>

<div class="modal" tabindex="-1" role="dialog" id="viewMapModal">
    <div class="modal-dialog mw-100 w-50" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Maps</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="mapBody">
                <p>
                    Maps
                </p>
                
                <br>
                <select name="places" id="places">
                    <option value="Place1">Place1</option>
                    <option value="Place2">Place2</option>
                    <option value="Place3">Place3</option>
                    <option value="Place4">Place4</option>
                </select>
                    <br>
                <div class="container" id="map">
                <center>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                            </iframe>
                            <a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">nord vpn coupon codes</a>
                        </div>
                        <style>
                            .mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
                        </style></div>
                </center>
                </div>
                    <br>
                <br>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="mapSuccess">
                        <button class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>

            </div>

        </div>
    </div>
</div>

<script>
    let places=document.querySelector("#places");
    let map=document.querySelector("#map");


    places.addEventListener("change",function (e)
    {
        let place=e.target.value;

        let mapouter=document.createElement("div");
        let gmap_canvas=document.createElement("div");

        if (place==="Place1")
        {

        }

    }
    );
</script>

<script>
    <?php
    if (isset($_POST['mapSuccess']))
    { ?>

    $(function()
    {
        $('#viewMapModal').modal('show');
    });
    <?php
    }
    ?>
</script>

</body>

</html>