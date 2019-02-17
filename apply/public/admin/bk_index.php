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
        <h1 class="text-center"> List of Candidates</h1>
        <?php
        $conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        // Check connection
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        // support Arabic
        mysqli_set_charset($conn,"utf8");

        // create the sql
        $sql = "SELECT * FROM tbl_candidates";
        $result = mysqli_query($conn, $sql);
        ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last</th>
        <th>Email</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
        <?php
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                // $inter = "Yes";
                // if($row["interested"] == 0){
                    // $inter = "No";
                // }
                echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["first_name"].'</td>
                        <td>'.$row["last_name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["time"].'</td>
                    </tr>';
            }
        }
        ?>
    </tbody>
  </table>
<?php mysqli_close($conn);?>

    </div>

    <div class="contianer-fluid footer">
        <p class="text-center">RBK 2018 © All Rights Reserved</p>
    </div>



    <!-- Libraries-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <script>
        function checkWidth(init) {
            if ($(window).width() < 768) {
                $('#submitButton').addClass('btn-block');
                $('#applyButton').removeClass('navbar-right');
                $('#applyButton').addClass('btn-block');
            } else {
                if (!init)
                    $('#submitButton').removeClass('form-control');
                    $('#applyButton').addClass('navbar-right');
                    $('#applyButton').removeClass('btn-block');
            }
        }
        $(document).ready(function() {
            checkWidth(true);
            $(window).resize(function() {
                checkWidth(false);
            });
        });
    </script>
</body>

</html>
