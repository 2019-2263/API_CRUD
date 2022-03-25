
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
<a id="cpage" class="navbar-left" href="javascript:void(0)">Users</a>
</div>
 <div class="navbar-right">
  <a id="logout" href="./?hotspot=logout&session=test" ><i class="fa fa-sign-out mr-1"></i> Logout</a>
  <select class="stheme ses text-right mr-t-10 pd-5">
    <option> Theme</option>
    <option value="/?hotspot=users&profile=all&session=test&set-theme=dark">Dark</option><option value="/?hotspot=users&profile=all&session=test&set-theme=light">Light</option><option value="/?hotspot=users&profile=all&session=test&set-theme=blue">Blue</option><option value="/?hotspot=users&profile=all&session=test&set-theme=green">Green</option><option value="/?hotspot=users&profile=all&session=test&set-theme=pink">Pink</option>  </select>
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
  <div class="dropdown-btn active"><i class="fa fa-wifi"></i> Hotspot
    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container menu-open">
   <!--users--> 
  <div class="dropdown-btn active"><i class="fa fa-users"></i> Users    <i class="fa fa-caret-down"></i>
  </div>
  <div class="dropdown-container menu-open">
    <a href="./?hotspot=users&profile=all&session=test" class="active"> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> User List </a>
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
<div class="col-12">
<div class="card">
<div class="card-header">
    <h3><i class="fa fa-users"></i> Users      <span style="font-size: 14px">
                 &nbsp; | &nbsp; <a href="./?hotspot-user=add&session=test" title="Add User"><i class="fa fa-user-plus"></i> Add</a>
        &nbsp; | &nbsp; <a href="./?hotspot-user=generate&session=test" title="Generate User"><i class="fa fa-users"></i> Generate</a>
         &nbsp; | &nbsp; <a href="/?hotspot=export-users&profile=all&session=test&export=script" title="Download User List as Mikrotik Script"><i class="fa fa-download"></i> Script</a>&nbsp; | &nbsp; <a href="/?hotspot=export-users&profile=all&session=test&export=csv" title="Download User List as CSV"><i class="fa fa-download"></i> CSV</a>
        </span>  &nbsp;
        <small id="loader" style="display: none;" ><i><i class='fa fa-circle-o-notch fa-spin'></i> Processing... </i></small>
    </h3>
    
</div>
<div class="card-body">
  <div class="row">
   <div class="col-6 pd-t-5 pd-b-5">
  <div class="input-group">
    <div class="input-group-4 col-box-4">
      <input id="filterTable" type="text" style="padding:5.8px;" class="group-item group-item-l" placeholder="Search">
    </div>
    <div class="input-group-4 col-box-4">
      <select style="padding:5px;" class="group-item group-item-m" onchange="location = this.value; loader()" title="Filter by Profile">
        <option>Profile </option>
        <option value="./?hotspot=users&profile=all&session=test">Show All</option>
      <option value='./?hotspot=users&profile=default&session=test'>default</option>    </select>
  </div>
  <div class="input-group-4 col-box-4">
    <select style="padding:5px;" class="group-item group-item-r" id="comment" name="comment" onchange="location = './?hotspot=users&comment='+ this.value +'&session=test';">
    <option value=''>Comment</option>    </select>
  </div>
  </div>
  </div>
 
  <div class="col-6">
      <script>
    function printV(a,b){
    var comm = document.getElementById('comment').value;
    var url = "./voucher/print.php?id="+comm+"&"+a+"="+b+"&session=test";
    if (comm === "" ){
            alert('Please choose one of the Comments first!');
          }else{
      var win = window.open(url, '_blank');
      win.focus();
    }}
  </script>
  <button class="btn bg-primary" title='Print' onclick="printV('qr','no');"><i class="fa fa-print"></i> Default</button>
  <button class="btn bg-primary" title='Print QR' onclick="printV('qr','yes');"><i class="fa fa-print"></i> QR</button>
  <button class="btn bg-primary" title='Print Small'onclick="printV('small','yes');"><i class="fa fa-print"></i> Small</button>
  </div>
</div>
<div class="overflow mr-t-10 box-bordered" style="max-height: 75vh">
<table id="dataTable" class="table table-bordered table-hover text-nowrap">
  <thead>
  <tr>
    <th style="min-width:50px;" class="align-middle text-center" id="cuser">1</th>
    <th style="min-width:50px;" class="pointer" title="Click to sort"><i class="fa fa-sort"></i> Server</th>
    <th class="pointer" title="Click to sort"><i class="fa fa-sort"></i> Name</th>
    <th>Print</th>
    <th class="pointer" title="Click to sort"><i class="fa fa-sort"></i> Profile</th>
    <th class="pointer" title="Click to sort"><i class="fa fa-sort"></i> Mac Address</th>
    <th class="text-right align-middle pointer" title="Click to sort"><i class="fa fa-sort"></i> Uptime</th>
    <th class="text-right align-middle pointer" title="Click to sort"><i class="fa fa-sort"></i> Bytes In</th>
    <th class="text-right align-middle pointer" title="Click to sort"><i class="fa fa-sort"></i> Bytes Out</th>
    <th class="pointer" title="Click to sort"><i class="fa fa-sort"></i> Comment</th>
    </tr>
  </thead>
  <tbody id="tbody">
<tr>  <td style='text-align:center;'>  <i class='fa fa-minus-square text-danger pointer' onclick="if(confirm('Are you sure to delete username (default-trial)?')){loadpage('./?remove-hotspot-user=*0&session=test')}else{}" title='Remove default-trial'></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <span class="pointer" title="Disable User default-trial"  onclick="loadpage('./?disable-hotspot-user=*0&session=test')"><i class="fa fa-unlock "></i></span></td><td></td><td><a title='Open User default-trial' href=./?hotspot-user=*0&session=test><i class='fa fa-edit'></i> default-trial </a></td><td class"text-center"><a title="Print default-trial" href="javascript:window.open('./voucher/print.php?user=up-default-trial&qr=no&session=test','_blank','width=320,height=550').print();"><i class="fa fa-print"></i></a> &nbsp <a title="Print default-trial" href="javascript:window.open('./voucher/print.php?user=up-default-trial&qr=yes&session=test','_blank','width=320,height=550').print();"><i class="fa fa-qrcode"></i> </a></td><td></td><td style=' text-align:left'></td><td style=' text-align:right'> 00:00:00</td><td style=' text-align:right'>0 Byte</td><td style=' text-align:right'>0 Byte</td><td></td>  </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

	
	

</div>
</div>
</div>
<script src="./js/highcharts/highcharts.js"></script>
<script src="./js/highcharts/themes/hc.dark.js"></script>
<script src="./js/mikhmon-ui.dark.min.js"></script>
<script src="./js/mikhmon.js?t=2022-02-23_21:54:24"></script>


<script>
$(document).ready(function(){
  makeAllSortable();
  $("#filterTable").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#dataTable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
</body>
</html>

