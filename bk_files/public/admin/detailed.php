<?php include '../include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RBK | Mentor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../_css/styles.css">
    <link rel="shortcut icon" href="http://rbk.org/wp-content/uploads/2016/03/fav.png" />
</head>

<body>
    <?php
        $conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        // Check connection
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $id = $_GET["id"];
        // support Arabic
        mysqli_set_charset($conn,"utf8");

        // create the sql
        $sql = "SELECT * FROM tbl_mentors WHERE id=".$id;
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $inter = "Yes";
                if($row["interested"] == 0){
                    $inter = "No";
                }
                $id = $row["id"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $email = $row["email"];
                $skype = $row["skype"];
                $title = $row["title"];
                $location = $row["location"];
                $company = $row["company"];
                $many_years = $row["many_years"];
                $interested = $row['tech_non_tech'];
                $registration_date= $row['registration_date'];
            }
        }
        mysqli_close($conn);
    ?>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="navbar-header">
                    <a href="http://rbk.org" class="navbar-brand">
                        <img class="img-responsive logo_header" src="../_images/rbk_logo.png" alt="RBK logo"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                    <div class="collapse navbar-collapse" id="mydropdown">
                    <ul class="nav navbar-nav">
                        <li class="text-center"><a href="http://rbk.org/#Program">The Program</a></li>
                        <li class="text-center"><a href="http://rbk.org/#Curriculum">Curriculum</a></li>
                        <li class="text-center"><a href="http://rbk.org/#Volunteers">Volunteers</a></li>
                        <li class="text-center"><a href="http://rbk.org/#Partners">Partners</a></li>
                        <li class="text-center"><a href="http://rbk.org/alumni-outcomes/">Alumni Outcomes</a></li>
                        <li class="text-center"><a href="http://rbk.org/faqs/">FAQs</a></li>
                    </ul>
                    <button id="applyButton" class="btn btn-sample navbar-btn navbar-right" onclick="window.open('http://rbkadmissions.herokuapp.com/#/','_self','resizable=yes')">Apply</button>
               </div>
           </div>
        </nav>

    <div class="container" style="padding-top:70px;">
        <h1> Detailed Info:
            <span style="color:#B32082;">
                <?php echo $first_name . ' '. $last_name;?>
            </span>
        </h1>
        <p class="lead"><strong>Application Date: </strong><?php echo $registration_date; ?></p>
        <P class="lead"><strong>ID: </strong><?php echo $id; ?> </p>
        <p class="lead"><strong>First Name: </strong><?php echo $first_name; ?> </p>
        <p class="lead"><strong>Last Name: </strong><?php echo $last_name; ?> </p>
        <p class="lead"><strong>Email: </strong><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p class="lead"><strong>Skype: </strong><?php echo $skype; ?></p>
        <p class="lead"><strong>Title: </strong><?php echo $title;; ?></p>
        <p class="lead"><strong>Location: </strong><?php echo $location; ?></p>
        <p class="lead"><strong>Company: </strong><?php echo $company; ?></p>
        <p class="lead"><strong>Experience: </strong><?php echo $many_years.' Years'; ?></p>
        <p class="lead"><strong>Interested: </strong><?php echo $inter; ?></p>
        <p class="lead"><strong>Interests: </strong><?php echo $interested; ?></p>

    </div>

    <div class="contianer-fluid footer">
        <p class="text-center">RBK 2016 © All Rights Reserved</p>
    </div>

    <!-- Libraries-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
