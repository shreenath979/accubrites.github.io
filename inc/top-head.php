<?php session_start(); ?>
<?php
error_reporting(0);
$ext=$_SERVER['PHP_SELF'];

$url=end(explode('/',$ext));

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php require_once("meta.php"); ?>

<link rel="icon" href="images/favicon.png" sizes="32x32" />

<!-- Styles -->

<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css"/>
<link rel="stylesheet" href="css/icons.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link href="css/hover.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="css/bootstrap.css" /> -->

<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/chosen.css"/>
<link rel="stylesheet" type="text/css" href="js/modelo.css"/>
<link rel="stylesheet" type="text/css" href="js/iziModal.css"/>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<!--Site Key : 6LccQr4ZAAAAALo11RDh0rWQWkBN_Tw03NpOxb9L-->
<!--Secret Key : 6LccQr4ZAAAAADqNFF9w2w7nMcYJRRJKpuz1JW7Y-->

<script src="https://www.google.com/recaptcha/api.js?render=6LccQr4ZAAAAALo11RDh0rWQWkBN_Tw03NpOxb9L"></script>

	<script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6LccQr4ZAAAAALo11RDh0rWQWkBN_Tw03NpOxb9L', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>


</head>
<body>