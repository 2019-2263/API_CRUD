<?php require_once('core/initialize.php'); ?>
<?php 

if(isset($_GET['page'])){
  $page = ucfirst($_GET['page']);
}else{
  
}



$url = $_SERVER['REQUEST_URI'];
// check url
$url2 = explode("&set-theme", $url)[0];

// var_dump($url2);

$gettheme = $_GET['set-theme'];
$mtheme = array(
    "dark",
    "light",
    "blue",
    "green",
    "pink",
    
);
$theme_color = array(
    "#3a4149",
    "#008BC9",
    "#008BC9",
    "#4dbd74",
    "#e83e8c",
);

$themenum = array_search($gettheme, $mtheme);
$getthemecolor = $theme_color[$themenum];
if (empty($gettheme)) {  

} else {
    if (in_array($gettheme, $mtheme)) {
        // include_once('./include/headhtml.php');
        $gen = '<?php $theme="' . $gettheme . '"; $themecolor="'.$getthemecolor.'";?>';
        // $stheme = 'theme.php';
        // $handle = fopen($stheme, 'w') or die('Cannot open file:  ' . $stheme);
        // $data = $gen;
        // fwrite($handle, $data);
        $_SESSION['theme'] = $gettheme;
        $_SESSION['themecolor'] = $getthemecolor;
        // header('Location: '.$_SERVER['REQUEST_URI']);
        // echo '<center><div style="padding-top:10%;"><i class="fa fa-circle-o-notch fa-spin" style="font-size:40px"></i></div><h3>Load '.$gettheme.' theme...</h3></center>';
        // echo "<script>window.location='" . $url2 . "'</script>";
        // echo "<script>window.location='" . $url2 . "'</script>";

    } else {
        // include_once('./include/headhtml.php');
        // echo '<center><div style="padding-top:10%;"><i class="fa fa-circle-o-notch fa-spin" style="font-size:40px"></i></div><h3>'.$gettheme.' theme not found...</h3></center>';
        // echo "<script>window.location='" . $url2 . "'</script>";
        // echo "<script>window.location='" . $url2 . "'</script>";
        // header('Location: '.$_SERVER['REQUEST_URI']);
    }
}


//if ($_SESSION['theme'] == "") {
//$theme = $theme;
  //$themecolor = $themecolor;
//} else {
  //$theme = $_SESSION['theme'];
  ////$themecolor = $_SESSION['themecolor'];
//}



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Genman </title>
		<meta charset="utf-8">
		<meta http-equiv="cache-control" content="private" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Theme color -->
		<meta name="theme-color" content="#3a4149" />
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
		<!-- Mikhmon UI -->
		<link rel="stylesheet" href="css/mikhmon-ui.dark.min.css">
		<!-- favicon -->
		<link rel="icon" href="./img/favicon.png" />
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- pace -->
		<link href="css/pace.dark.css" rel="stylesheet" />
		<script src="js/pace.min.js"></script>
        <!-- my own css -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />

		
	</head>
	<body>
		<div class="wrapper">

			
    
<span style="display:none;" id="idto"></span>



<div id="navbar" class="navbar">
  <div class="navbar-left">
    <a id="brand" class="text-center" href="javascript:void(0)">Genman</a>

<a id="openNav" class="navbar-hover" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
<a id="closeNav" class="navbar-hover" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
<a id="cpage" class="navbar-left" href="javascript:void(0)"><?= $page ?></a>
</div>
 <div class="navbar-right">
  <a id="logout" href="logout.php" ><i class="fa fa-sign-out mr-1"></i> Logout</a>
  <select class="stheme ses text-right mr-t-10 pd-5">
    <option> Theme</option>
    <option value="dark">Dark</option>
    <option value="light">Light</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
    <option value="pink">Pink</option>  
  </select>
  <!-- <select class="slang ses text-right mr-t-10 pd-5">
    <option> Language</option>
    <option value="/mikhmon/admin.php?id=sessions&setlang=en">English</option><option value="/mikhmon/admin.php?id=sessions&setlang=es">Spanish</option><option value="/mikhmon/admin.php?id=sessions&setlang=id">Indonesia</option><option value="/mikhmon/admin.php?id=sessions&setlang=tl">Tagalog</option>  </select> -->
  <a title="Idle Timeout" style="display:block;"><span style="width:70px;" class="pd-5 radius-3"><i class="fa fa-clock-o mr-1"></i>  <span class="mr-1" id="timer"></span></span></a>
</div>
</div>

<div id="sidenav" class="sidenav">
  
  <a href="index.php" class="menu active"><i class="fa fa-gear"></i> Router Setup</a>
  <!-- <a href="addrouter.php" class="menu "><i class="fa fa-user"></i> Customer</a> -->
  <div class="dropdown-btn "><i class="fa fa-users"></i> Customers    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="customerlist.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Customer List </a>
    <a href="customeradd.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus "></i> Add Customer </a>
    <!-- <a href="./?hotspot-user=generate&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Generate </a>         -->
  </div>  
  <div class="dropdown-btn "><i class="fa fa-map"></i> Coverage Area    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="coveragearealist.php?page=coverage" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Coverage Area List </a>
    <a href="coveragearea.php?page=coverage" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus "></i> Add Coverage Area </a>
    <!-- <a href="./?hotspot-user=generate&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Generate </a>         -->
  </div>  
  <div class="dropdown-btn "><i class="fa fa-exchange"></i> Services    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="servicelist.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Services List </a>
    <a href="services.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus "></i> Add Services </a>
    <!-- <a href="./?hotspot-user=generate&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Generate </a>         -->
  </div>  
  <a href="addrouter.php?page=bill" class="menu "><i class="fa fa-list-ul"></i> Bill</a>
  <!-- <a href="addrouter.php?page=finance" class="menu "><i class="fa fa-money"></i> Finance</a> -->
  <div class="dropdown-btn "><i class="fa fa-money"></i> Finance    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="customerlist.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Revenue </a>
    <a href="customeradd.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus "></i> Expenses </a>
    <!-- <a href="./?hotspot-user=generate&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Generate </a>         -->
  </div>  
  <div class="dropdown-btn "><i class="fa fa-gear"></i> Integration    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="customerlist.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> SMS Gateway </a>
    <a href="customeradd.php?page=customer" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus "></i> Expenses </a>
    <!-- <a href="./?hotspot-user=generate&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Generate </a>         -->
  </div>
  <a href="about.php?page=about" class="menu "><i class="fa fa-info-circle"></i> About</a>

</div>

<script>




$(document).ready(function(){

  function replaceUrlParam(paramName, paramValue){
    var url = window.location.href;

    if (paramValue == null) {
        paramValue = '';
    }

    var pattern = new RegExp('\\b('+paramName+'=).*?(&|#|$)');
    if (url.search(pattern)>=0) {
        return url.replace(pattern,'$1' + paramValue + '$2');
    }

    url = url.replace(/[?#]$/,'');
    return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
  }

  

  $(".connect").click(function(){
    notify("Connecting");
    connect(this.id)
  });
  $(".stheme").change(function(){
    // notify("Loading theme");
    // stheme(this.value)

    let theme = this.value;
    // window.location.href += "?set-theme="+ theme;
    // console.log(window.location.search)
    // var href = new URL(document.location);
    // href.searchParams.set('set-theme', theme);
    var newurl = replaceUrlParam('set-theme',theme);
    history.pushState(null, null, newurl);

    location.reload();



  });
  $(".slang").change(function(){
    notify("Loading");
    stheme(this.value)
  });
});
</script>
<div id="notify"><div class="message"></div></div>
<div id="temp"></div>

<div id="main">  
<div id="loading" class="lds-dual-ring"></div>
<div class="main-container" style="display:none">
<script>
  function Pass(id){
    var x = document.getElementById(id);
    if (x.type === 'password') {
    x.type = 'text';
    } else {
    x.type = 'password';
    }}
</script>

<div class="row">
	<div class="col-12">