
<!DOCTYPE html>
<html>
	<head>
		<title>MIKHMON test</title>
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

		
	</head>
	<body>
		<div class="wrapper">

			
<span style="display:none;" id="idto">10</span>



<div id="navbar" class="navbar">
  <div class="navbar-left">
    <a id="brand" class="text-center" href="./?session=test">MIKHMON</a>

<a id="openNav" class="navbar-hover" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
<a id="closeNav" class="navbar-hover" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
<a id="cpage" class="navbar-left" href="javascript:void(0)">Template Editor</a>
</div>
 <div class="navbar-right">
  <a id="logout" href="./?hotspot=logout&session=test" ><i class="fa fa-sign-out mr-1"></i> Logout</a>
  <select class="stheme ses text-right mr-t-10 pd-5">
    <option> Theme</option>
    <option value="/?hotspot=template-editor&template=default&session=test&set-theme=dark">Dark</option><option value="/?hotspot=template-editor&template=default&session=test&set-theme=light">Light</option><option value="/?hotspot=template-editor&template=default&session=test&set-theme=blue">Blue</option><option value="/?hotspot=template-editor&template=default&session=test&set-theme=green">Green</option><option value="/?hotspot=template-editor&template=default&session=test&set-theme=pink">Pink</option>  </select>
  <select class="connect optfa ses text-right mr-t-10 pd-5">
    <option id="MikhmonSession" value="test">test</option>
      <option value="test">test &#x2666;</option>    
  </select>
  <a title="Idle Timeout" style="display:block;"><span style="width:70px;" class="pd-5 radius-3"><i class="fa fa-clock-o mr-1"></i>  <span class="mr-1" id="timer"></span></span></a>
</div>
</div>

<div id="sidenav" class="sidenav">
  <div class="menu text-center align-middle card-header" style="border-radius:0;"><h3>Genman</h3></div>
  <a href="./?session=test" class="menu "><i class="fa fa-dashboard"></i> Dashboard</a>
  <!--hotspot-->
  <div class="dropdown-btn "><i class="fa fa-wifi"></i> Hotspot
    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
   <!--users--> 
  <div class="dropdown-btn "><i class="fa fa-users"></i> Users    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="./?hotspot=users&profile=all&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> User List </a>
    <a href="./?hotspot-user=add&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus "></i> Add User </a>
    <a href="./?hotspot-user=generate&session=test" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Generate </a>        
  </div>
  <!--profile-->
  <div class="dropdown-btn "><i class=" fa fa-pie-chart"></i>  User Profile    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="./?hotspot=user-profiles&session=test" class=" "> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Profile List </a>
    <a href="./?user-profile=add&session=test" class=" "> &nbsp;&nbsp;&nbsp;<i class="fa fa-plus-square "></i> Add Profile </a>

  </div>
  <!--active-->
  <a href="./?hotspot=active&session=test" class="menu "><i class=" fa fa-wifi"></i> Hotspot Active</a>
  <!--hosts-->
  <a href="./?hotspot=hosts&session=test" class="menu "><i class=" fa fa-laptop"></i> Hosts</a>
  <!--ip bindings-->
  <a href="./?hotspot=ipbinding&session=test" class="menu "><i class=" fa fa-address-book"></i> IP Bindings</a>
  <!--cookies-->
   <a href="./?hotspot=cookies&session=test" class="menu "><i class=" fa fa-hourglass"></i> Cookies</a>
  </div>
  <!--quick print-->
  <a href="./?hotspot=quick-print&session=test" class="menu "> <i class="fa fa-print"></i> Quick Print </a>
  <!--vouchers-->
  <a href="./?hotspot=users-by-profile&session=test" class="menu "> <i class="fa fa-ticket"></i> Vouchers </a>
   <!--log-->
  <div class="dropdown-btn "><i class=" fa fa-align-justify"></i> Log    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container ">
    <a href="./?hotspot=log&session=test" class=""> <i class="fa fa-wifi "></i> Hotspot Log </a>
    <a href="./?report=userlog&idbl=feb2022&session=test" class=" "> <i class="fa fa-users "></i> User Log </a>
  </div>
  <!--system-->
  <div class="dropdown-btn "><i class=" fa fa-gear"></i> System    <i class="fa fa-caret-down"></i> &nbsp;
  </div>
  <div class="dropdown-container ">
    <a href="./?system=scheduler&session=test" class=""> <i class="fa fa-clock-o "></i> Scheduler </a>
    <a href="./admin.php?id=reboot&session=test" class=""> <i class="fa fa-power-off "></i> Reboot </a>            
    <a href="./admin.php?id=shutdown&session=test" class=""> <i class="fa fa-power-off "></i> Shutdown </a> 
  </div>
  <!--dhcp leases-->
  <a href="./?hotspot=dhcp-leases&session=test" class="menu "><i class=" fa fa-sitemap"></i> DHCP Leases</a>
  <!--traffic monitor-->
  <a href="./?interface=traffic-monitor&session=test" class="menu "><i class=" fa fa-area-chart"></i> Traffic Monitor</a>
  <!--report-->
  <a href="./?report=selling&idbl=feb2022&session=test" class="menu "><i class="nav-icon fa fa-money"></i> Report</a>
  <!--settings-->
  <div class="dropdown-btn active"><i class=" fa fa-gear"></i> Settings 
    <i class="fa fa-caret-down"></i> &nbsp;
  </div>
  <div class="dropdown-container menu-open">
  <a href="./admin.php?id=settings&session=test" class="menu "> <i class="fa fa-gear "></i> Session Settings </a>
  <a href="./admin.php?id=sessions" class="menu "> <i class="fa fa-gear "></i> Admin Settings </a>
  <a href="./?hotspot=uplogo&session=test" class="menu "> <i class="fa fa-upload "></i> Upload Logo </a>
  <a href="./?hotspot=template-editor&template=default&session=test" class="menu active"> <i class="fa fa-edit "></i> Template Editor </a>          
  </div>
  <!--about-->
  <a href="./?hotspot=about&session=test" class="menu "><i class="fa fa-info-circle"></i> About</a>

</div>
<script>
$(document).ready(function(){
  $(".connect").change(function(){
    notify("Connecting");
    connect(this.value)
  });
  $(".stheme").change(function(){
    notify("Loading theme");
    stheme(this.value)
  });
});
</script>
<div id="notify"><div class="message"></div></div>
<div id="temp"></div>

<div id="main">  
<div id="loading" class="lds-dual-ring"></div>
<div class="main-container">
<!-- Create a simple CodeMirror instance -->
<link rel="stylesheet" href="./css/editor.min.css">
<script src="./js/editor.min.js"></script>	

<style>
.CodeMirror {
  border: 1px solid #2f353a;
  height: 505px;
}
textarea{
  font-size:12px;
  border: 1px solid #2f353a;
}
</style>


		<div class="row">
	    	<div class="col-9">
	    		<div class="card">
					<div class="card-header">
						<h3><i class="fa fa-edit"></i> Template Editor</h3>
					</div>
			<div class="card-body">
				<form autocomplete="off" method="post" action="">
					<table class="table">
						<tr>
							<td>
							<div class="row">
								<div class="col-4 col-box-12">
								<button type="submit" title="Save template" class="btn bg-primary" name="save"><i class="fa fa-save"></i> Save</button>
								<a class="btn bg-green" href="javascript:window.open('./voucher/vpreview.php?usermode=up&qr=no&session=test','_blank','width=310,height=310')" title="View voucher with Logo"><i class="fa fa-image"></i> </a>
								<a class="btn bg-green" href="javascript:window.open('./voucher/vpreview.php?usermode=up&qr=yes&session=test','_blank','width=310,height=310')" title="View voucher with  QR"><i class="fa fa-qrcode"></i> </a>
								</div>
								<div class="col-8 pd-t-5 pd-b-5 col-box-12">
								<div class="input-group">
            					<div class="input-group-3">
            						<div class="group-item group-item-l pd-2p5 text-center">Template</div>
            					</div>
								<div class="input-group-3">
									<select style="padding:4.2px;"  class="group-item group-item-m" onchange="window.location.href=this.value+'&session=test';">
	    								<option>Default</option>
	    								<option value="./admin.php?id=editor&template=default">Default</option>
	    								<option value="./admin.php?id=editor&template=thermal">Thermal</option>
	    								<option value="./admin.php?id=editor&template=small">Small</option>
	    							</select>
	    						</div>
								
								<div class="input-group-3">
            						<div class="group-item group-item-m pd-2p5 text-center">Reset</div>
            					</div>
	    						<div class="input-group-3">
	    							<select style="padding:4.2px;"  class="group-item group-item-r" onchange="window.location.href=this.value+'&session=test';">
	    								<option>Default</option>
	    								<option value="./admin.php?id=editor&template=rdefault">Default</option>
	    								<option value="./admin.php?id=editor&template=rthermal">Thermal</option>
	    								<option value="./admin.php?id=editor&template=rsmall">Small</option>
	    							</select>
	    						</div>
								</div>
								</div>
							</div>
	    					</td>
						</tr>
						</table>
	        	<textarea class="bg-dark" id="editorMikhmon" name="editor" style="width:100%" height="700">
												
<style>
	.qrcode{
		height:80px;
		width:80px;
	}
</style>

<table class="voucher" style=" width: 220px;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: left; font-size: 14px; font-weight:bold; border-bottom: 1px black solid;"><img src="<?= $logo; ?>" alt="logo" style="height:30px;border:0;">  <?= $hotspotname; ?>  <span id="num"><?= " [$num]"; ?></span></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 210px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
        <tr>
          <td font-size: 12px;>Kode Voucher</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold; font-size:16px;"><?= $username; ?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
<!-- Check QR  -->
<?php if ($qr == "yes") { ?>
        <tr>
          <td>Username</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
        </tr>
        <tr>
          <td>Password</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} else { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
}
} ?>
<!-- /  -->
        </table>
      </td>
<!-- QR Code    -->
<?php if ($qr == "yes") { ?>
      <td>
	<?= $qrcode ?>
      </td>
<?php 
} ?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="border-top: 1px solid black;font-weight:bold; font-size:16px"><?= $validity; ?> <?= $timelimit; ?> <?= $datalimit; ?> <?= $price; ?></td>
<!-- /  -->
    </tr>
    <tr>
      <!-- Note  -->
      <td colspan="2" style="font-weight:bold; font-size:12px">Login: http://<?= $dnsname; ?></td>
<!-- /  -->
    </tr>
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>	        	        </textarea>
			</form>
			</div>
		</div>
		</div>
		<div class="col-3">
			<div class="card">
				<div class="card-header">
					<h3>Variable</h3>
				</div>
			<div class="card-body">
				<textarea id="var" class="bg-dark" readonly rows=39 style="width:100%" disabled>
	        		
Logo :
<img src="<?= $logo; ?>" style="height:30px;border:0;">

Hotspotname :
<?= $hotspotname; ?>

Username :
<?= $username; ?>

Password :
<?= $password; ?>

Validity :
<?= $validity; ?>

Time Limit :
<?= $timelimit; ?>

Data Limit :
<?= $datalimit; ?>

Price :
<?= $price; ?>

Profile :
<?= $profile; ?>

Comment :
<?= $comment; ?>

DNS Name Hotspot :
<?= $dnsname; ?>

QR Code :
<?= $qrcode ?>

Number Voucher:
<?= $num; ?>
<span id="num"><?= " [$num]"; ?></span>

Conditional :
$usermode = "vc"
username = password

$usermode = "up"
username & password	    		</textarea>
			</div>
			</div>
		</div>
</div>

<script>
var _0x5b73=["\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x4D\x69\x6B\x68\x6D\x6F\x6E\x53\x65\x73\x73\x69\x6F\x6E","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x73\x65\x74\x49\x74\x65\x6D","\x50\x6C\x65\x61\x73\x65\x20\x75\x73\x65\x20\x47\x6F\x6F\x67\x6C\x65\x20\x43\x68\x72\x6F\x6D\x65","\x67\x65\x74\x49\x74\x65\x6D","\x6E\x75\x6C\x6C","","\x4D\x69\x6B\x68\x6D\x6F\x6E\x20\x62\x61\x6A\x61\x6B\x61\x6E\x21\x20\x3A\x29","\x65\x64\x69\x74\x6F\x72\x4D\x69\x6B\x68\x6D\x6F\x6E","\x61\x70\x70\x6C\x69\x63\x61\x74\x69\x6F\x6E\x2F\x78\x2D\x68\x74\x74\x70\x64\x2D\x70\x68\x70","\x74\x6F\x4D\x61\x74\x63\x68\x69\x6E\x67\x54\x61\x67","\x66\x72\x6F\x6D\x54\x65\x78\x74\x41\x72\x65\x61","\x74\x68\x65\x6D\x65","\x6D\x61\x74\x65\x72\x69\x61\x6C","\x73\x65\x74\x4F\x70\x74\x69\x6F\x6E"];if( typeof (Storage)!== _0x5b73[0]){sessionStorage[_0x5b73[4]](_0x5b73[1],document[_0x5b73[3]](_0x5b73[1])[_0x5b73[2]])}else {alert(_0x5b73[5])};var session=sessionStorage[_0x5b73[6]](_0x5b73[1]);if(session=== _0x5b73[7]|| session=== _0x5b73[8]){alert(_0x5b73[9])};var editor=CodeMirror[_0x5b73[13]](document[_0x5b73[3]](_0x5b73[10]),{lineNumbers:true,matchBrackets:true,mode:_0x5b73[11],indentUnit:4,indentWithTabs:true,lineWrapping:true,viewportMargin:Infinity,matchTags:{bothTags:true},extraKeys:{"\x43\x74\x72\x6C\x2D\x4A":_0x5b73[12]}});editor[_0x5b73[16]](_0x5b73[14],_0x5b73[15])
</script>



</div>
</div>
</div>
<script src="./js/highcharts/highcharts.js"></script>
<script src="./js/highcharts/themes/hc.dark.js"></script>
<script src="./js/mikhmon-ui.dark.min.js"></script>
<script src="./js/mikhmon.js?t=2022-02-23_21:58:35"></script>

</body>
</html>

