
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
<a id="cpage" class="navbar-left" href="javascript:void(0)">Quick Print</a>
</div>
 <div class="navbar-right">
  <a id="logout" href="./?hotspot=logout&session=test" ><i class="fa fa-sign-out mr-1"></i> Logout</a>
  <select class="stheme ses text-right mr-t-10 pd-5">
    <option> Theme</option>
    <option value="/?hotspot=list-quick-print&session=test&set-theme=dark">Dark</option><option value="/?hotspot=list-quick-print&session=test&set-theme=light">Light</option><option value="/?hotspot=list-quick-print&session=test&set-theme=blue">Blue</option><option value="/?hotspot=list-quick-print&session=test&set-theme=green">Green</option><option value="/?hotspot=list-quick-print&session=test&set-theme=pink">Pink</option>  </select>
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
  <a href="./?hotspot=quick-print&session=test" class="menu active"> <i class="fa fa-print"></i> Quick Print </a>
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
  <div class="dropdown-btn "><i class=" fa fa-gear"></i> Settings 
    <i class="fa fa-caret-down"></i> &nbsp;
  </div>
  <div class="dropdown-container ">
  <a href="./admin.php?id=settings&session=test" class="menu "> <i class="fa fa-gear "></i> Session Settings </a>
  <a href="./admin.php?id=sessions" class="menu "> <i class="fa fa-gear "></i> Admin Settings </a>
  <a href="./?hotspot=uplogo&session=test" class="menu "> <i class="fa fa-upload "></i> Upload Logo </a>
  <a href="./?hotspot=template-editor&template=default&session=test" class="menu "> <i class="fa fa-edit "></i> Template Editor </a>          
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
<div class="main-container" style="display:none">
<div class="row">
	
<div class="col-4">
<div class="card box-bordered">
	<div class="card-header">
	<h3><i class="fa fa-ticket"></i> Add Quick Print <small id="loader" style="display: none;" ><i><i class='fa fa-circle-o-notch fa-spin'></i> Processing... </i></small></h3> 
	</div>
	<div class="card-body">
<form autocomplete="off" method="post" action="">
	<div>
<a class='btn bg-warning' href='./?hotspot=quick-print&session=test'> <i class='fa fa-close'></i> Close</a>
    <button type="submit" name="save" onclick="loader()" class="btn bg-primary" title="Generate User"> <i class="fa fa-save"></i> Save</button>
</div>
<table class="table">
  <tr>
    <td class="align-middle">Name</td><td><div><input class="form-control " type="text" name="name" value="" required="1"></div></td>
  </tr>
  <tr>
    <td class="align-middle">Server</td>
    <td>
		<select class="form-control " name="server" required="1">
			<option>all</option>						</select>
	</td>
	</tr>
	<tr>
    <td class="align-middle">User Mode</td><td>
			<select class="form-control " onchange="defUserl();" id="user" name="user" required="1">
								<option value="up">Username & Password</option>
				<option value="vc">Username = Password</option>
			</select>
		</td>
	</tr>
  <tr>
    <td class="align-middle">Name Length</td><td>
      <select class="form-control " id="userl" name="userl" required="1">
			        <option>4</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
			</select>
    </td>
  </tr>
  <tr>
    <td class="align-middle">Prefix</td><td><input class="form-control " type="text" size="4" maxlength="4" autocomplete="off" name="prefix" value=""></td>
  </tr>
  <tr>
    <td class="align-middle">Character</td><td>
      <select class="form-control " name="char" required="1">
							<option id="lower" style="display:block;" value="lower">Random abcd</option>
				<option id="upper" style="display:block;" value="upper">Random ABCD</option>
				<option id="upplow" style="display:block;" value="upplow">Random aBcD</option>
				<option id="lower1" style="display:none;" value="lower">Random abcd2345</option>
				<option id="upper1" style="display:none;" value="upper">Random ABCD2345</option>
				<option id="upplow1" style="display:none;" value="upplow">Random aBcD2345</option>
				<option id="mix" style="display:block;" value="mix">Random 5ab2c34d</option>
				<option id="mix1" style="display:block;" value="mix1">Random 5AB2C34D</option>
				<option id="mix2" style="display:block;" value="mix2">Random 5aB2c34D</option>
				<option id="num" style="display:none;" value="num">Random 1234</option>
			</select>
    </td>
  </tr>
  <tr>
    <td class="align-middle">Profile</td><td>
			<select class="form-control " onchange="GetVP();" id="uprof" name="profile" required="1">
				<option>default</option>			</select>
		</td>
	</tr>
	<tr>
    <td class="align-middle">Time Limit</td><td><input class="form-control " type="text" size="4" autocomplete="off" name="timelimit" value=""></td>
  </tr>
	<tr>
    <td class="align-middle">Data Limit</td><td>
      <div class="input-group">
      	<div class="input-group-8 col-box-9">
        	<input class="group-item group-item-l" type="number" min="0" max="9999" name="datalimit" value="">
    	</div>
          <div class="input-group-4 col-box-3">
							<select style="padding:4.2px;" class="group-item group-item-r" name="mbgb" required="1">
											        <option value=1048576>MB</option>
				        <option value=1073741824>GB</option>
			        </select>
          </div>
      </div>
    </td>
  </tr>
	<tr>
    <td class="align-middle">Comment</td><td><input class="form-control " type="text" title="No special characters" id="comment" autocomplete="off" name="adcomment" value=""></td>
  </tr>
   <tr >
    <td  colspan="4" class="align-middle w-12"  id="GetValidPrice">
    	    </td>
  </tr>
</table>
</form>
</div>
</div>
</div>

<div class="col-8">
	<div class="card">
		<div class="card-header">
			<h3><i class="fa fa-ticket"></i> Package Quick Print</h3>
		</div>
		<div class="card-body">
            <div class="row">
                <div class="overflow box-bordered">
                <table class="table table-bordered table-hover text-nowrap">
                    <tr>
										<th></th>	
                    <th>Package</th>
                    <th>Server</th>
                    <th>User Mode</th>
                    <th>Name Length</th>
                    <th>Prefix</th>
                    <th>Profile</th>
                    <th>Time Limit</th>
                    <th>Data Limit</th>
                    <th>Validity</th>
					<th>Price</th>
					<th>Selling Price</th>
                    <th>Lock User</th>
                    <th>Comment</th>
                    </tr>
    </table>
    </div>
    </div>
</div>
</div>
</div>
<script>
// get valid $ price
function GetVP(){
  var prof = document.getElementById('uprof').value;
  var url = "./process/getvalidprice.php?name=";
  var session = "&session=test"
  var getvalidprice = url+prof+session
  $("#GetValidPrice").load(getvalidprice);
}
</script>
</div>

</div>
</div>
</div>
<script src="./js/highcharts/highcharts.js"></script>
<script src="./js/highcharts/themes/hc.dark.js"></script>
<script src="./js/mikhmon-ui.dark.min.js"></script>
<script src="./js/mikhmon.js?t=2022-02-23_18:46:24"></script>

</body>
</html>

