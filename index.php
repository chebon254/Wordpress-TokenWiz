<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<!-- Site Title  -->
	<title>TokenWiz - ICO User Dashboard Admin Template</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style1.css">
	
</head>


<?php     


if(!isset($_GET['page'])){
    include ('index1.php');
}

else if($_GET['page']=='home'){
    include ('index1.php');
}


else if($_GET['page']=='buy-token'){
    include ('buy-token.php');
}

else if($_GET['page']=='ico-distribution'){
    include ('ico-distribution.php');
}
else if($_GET['page']=='transactions'){
    include ('transactions.php');
}
else if($_GET['page']=='profile'){
    include ('profile.php');
}
else if($_GET['page']=='activity'){
    include ('activity.php');
}

else if($_GET['page']=='activity'){
    include ('activity.php');
}

else if($_GET['page']=='sign-in'){
    include ('sign-in.php');
}

else if($_GET['page']=='regular-page'){
    include ('regular-page.php');
}

else if($_GET['page']=='sign-up'){
    include ('sign-up.php');
}
else if($_GET['page']=='forgot'){
    include ('forgot.php');
}

?>
    
