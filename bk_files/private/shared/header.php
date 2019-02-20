<?php //include dirname(dirname(__FILE__)).'/initials.php' ;?>

<?php
  if(!isset($page_title)){
    $page_title = 'Apply to RBK Program!';
  }
  if(!isset($logo_img)){
    $logo_img ="_images/rbk_logo.png";
  }
  if(!isset($css_url)){
    $css_url ="_css/styles.css";
  }
?>
<?//php inlude "../initials.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RBK | <?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?PHP echo $css_url;?>">
    <!-- <link rel="stylesheet" href="../_css/admin.css"> -->
    <link rel="shortcut icon" href="http://rbk.org/wp-content/uploads/2016/03/fav.png" />
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 
</head>

<body>
<!-- 
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" style="width:1300px;">
               <div class="navbar-header">
                    <a href="http://rbk.org" class="navbar-brand">
                        <img class="img-responsive logo_header"
                        src="<?php echo $logo_img;?>" alt="RBK logo"></a>
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
                    <!-- <button id="applyButton" class="btn btn-sample navbar-btn navbar-right" onclick="window.open('http://rbkadmissions.herokuapp.com/#/','_self','resizable=yes')">Apply</button> 
               </div>
           </div>
        </nav> -->



       

    <div class="container text-center" >
        <br>
        <br>
        <h2 style="color:#B32082;">Welcome to The Serapis Admissions Portal</h2>
        <h2 style="color:#B32082;">اهلا بكم بوابة القبول لبرنامج سيرابيس</h2>
    </div>
    <div class="container my_main">
