
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
<a id="cpage" class="navbar-left" href="javascript:void(0)">Traffic Monitor</a>
</div>
 <div class="navbar-right">
  <a id="logout" href="./?hotspot=logout&session=test" ><i class="fa fa-sign-out mr-1"></i> Logout</a>
  <select class="stheme ses text-right mr-t-10 pd-5">
    <option> Theme</option>
    <option value="/?interface=traffic-monitor&session=test&set-theme=dark">Dark</option><option value="/?interface=traffic-monitor&session=test&set-theme=light">Light</option><option value="/?interface=traffic-monitor&session=test&set-theme=blue">Blue</option><option value="/?interface=traffic-monitor&session=test&set-theme=green">Green</option><option value="/?interface=traffic-monitor&session=test&set-theme=pink">Pink</option>  </select>
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
  <a href="./?interface=traffic-monitor&session=test" class="menu active"><i class=" fa fa-area-chart"></i> Traffic Monitor</a>
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
<script>
   var _0x381f=["\x63\x68\x61\x6E\x67\x65","\x76\x61\x6C","\x49\x6E\x74\x65\x72\x66\x61\x63\x65\x5F","\x76\x61\x6C\x75\x65","\x4D\x69\x6B\x68\x6D\x6F\x6E\x53\x65\x73\x73\x69\x6F\x6E","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x73\x65\x74\x49\x74\x65\x6D","\x50\x6C\x65\x61\x73\x65\x20\x75\x73\x65\x20\x47\x6F\x6F\x67\x6C\x65\x20\x43\x68\x72\x6F\x6D\x65","\x72\x65\x6C\x6F\x61\x64","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x6F\x6E","\x23\x64\x5F\x69\x6E\x74\x65\x72\x66\x61\x63\x65"];$(function(){$(_0x381f[12])[_0x381f[11]](_0x381f[0],function(){var _0xd273x1=$(this)[_0x381f[1]]();var _0xd273x2=_0x381f[2]+ document[_0x381f[5]](_0x381f[4])[_0x381f[3]];if(_0xd273x1){if( typeof (Storage)!== _0x381f[6]){sessionStorage[_0x381f[7]](_0xd273x2,_0xd273x1)}else {alert(_0x381f[8])};window[_0x381f[10]][_0x381f[9]]()};return false})})
</script>
          <div class="card">
            <div class="card-header"><h3><i class="fa fa-area-chart"></i> Traffic Monitor </h3></div>
          
              <div class="card-body">
                <div class="row">
                                    <div class="col-12">
                  <select id="d_interface" class="dropd pd-5" >
                    <option>Select Interface</option>
                    <option value="ether-ISP">[1] ether-ISP</option><option value="ether2">[2] ether2</option><option value="ether3">[3] ether3</option><option value="ether4">[4] ether4</option><option value="ether5">[5] ether5</option><option value="bridge-HS">[6] bridge-HS</option><option value="bridge-LAN">[7] bridge-LAN</option><option value="bridge-PPPOE">[8] bridge-PPPOE</option>                  </select>
                  </div>
                  <script type="text/javascript"> 
                    var chart;
                    var sessiondata = "test";

                    function requestDatta(session,iface) {
                      $.ajax({
                        url: './traffic/traffic.php?session='+session+'&iface='+iface,
                        datatype: "json",
                        success: function(data) {
                          var midata = JSON.parse(data);
                          if( midata.length > 0 ) {
                            var TX=parseInt(midata[0].data);
                            var RX=parseInt(midata[1].data);
                            var x = (new Date()).getTime(); 
                            shift=chart.series[0].data.length > 19;
                            chart.series[0].addPoint([x, TX], true, shift);
                            chart.series[1].addPoint([x, RX], true, shift);
                          }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                          console.error("Status: " + textStatus + " request: " + XMLHttpRequest); console.error("Error: " + errorThrown); 
                        }       
                      });
                    }	

                    $(document).ready(function() {
                        Highcharts.setOptions({
                          global: {
                            useUTC: false
                          },
                          chart: {
                            height: 500,

                          },
                        });

                        Highcharts.addEvent(Highcharts.Series, 'afterInit', function () {
	                        this.symbolUnicode = {
    	                    circle: '???',
                          diamond: '???',
                          square: '???',
                          triangle: '???',
                          'triangle-down': '???'
                          }[this.symbol] || '???';
                        });

                          chart = new Highcharts.Chart({
                          chart: {
                          renderTo: 'trafficMonitor',
                          animation: Highcharts.svg,
                          type: 'areaspline',
                          events: {
                            load: function () {
                              setInterval(function () {
                                var _0xe05e=["\x49\x6E\x74\x65\x72\x66\x61\x63\x65\x5F","\x76\x61\x6C\x75\x65","\x4D\x69\x6B\x68\x6D\x6F\x6E\x53\x65\x73\x73\x69\x6F\x6E","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x67\x65\x74\x49\x74\x65\x6D"];var sesIface=_0xe05e[0]+ document[_0xe05e[3]](_0xe05e[2])[_0xe05e[1]];var interface=sessionStorage[_0xe05e[4]](sesIface)
                                requestDatta(sessiondata,interface);
                                chart.setTitle({ text: 'Interface ' + interface });
                              }, 3000);
                            }				
                          }
                        },
                        title: {
                          text: 'Loading Interface...'
                        },
                        
                        xAxis: {
                          type: 'datetime',
                          tickPixelInterval: 150,
                          maxZoom: 20 * 1000,
                        },
                        yAxis: {
                            minPadding: 0.2,
                            maxPadding: 0.2,
                            title: {
                              text: null
                            },
                            labels: {
                              formatter: function () {      
                                var bytes = this.value;                          
                                var sizes = ['bps', 'kbps', 'Mbps', 'Gbps', 'Tbps'];
                                if (bytes == 0) return '0 bps';
                                var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                                return parseFloat((bytes / Math.pow(1024, i)).toFixed(2)) + ' ' + sizes[i];                    
                              },
                            },       
                        },
                        
                        series: [{
                          name: 'Tx',
                          data: [],
                          marker: {
                            symbol: 'circle'
                          }
                        }, {
                          name: 'Rx',
                          data: [],
                          marker: {
                            symbol: 'circle'
                          }
                        }],

                        tooltip: {
                          formatter: function () { 
                            var _0x2f7f=["\x70\x6F\x69\x6E\x74\x73","\x79","\x62\x70\x73","\x6B\x62\x70\x73","\x4D\x62\x70\x73","\x47\x62\x70\x73","\x54\x62\x70\x73","\x3C\x73\x70\x61\x6E\x20\x73\x74\x79\x6C\x65\x3D\x22\x63\x6F\x6C\x6F\x72\x3A","\x63\x6F\x6C\x6F\x72","\x73\x65\x72\x69\x65\x73","\x3B\x20\x66\x6F\x6E\x74\x2D\x73\x69\x7A\x65\x3A\x20\x31\x2E\x35\x65\x6D\x3B\x22\x3E","\x73\x79\x6D\x62\x6F\x6C\x55\x6E\x69\x63\x6F\x64\x65","\x3C\x2F\x73\x70\x61\x6E\x3E\x3C\x62\x3E","\x6E\x61\x6D\x65","\x3A\x3C\x2F\x62\x3E\x20\x30\x20\x62\x70\x73","\x70\x75\x73\x68","\x6C\x6F\x67","\x66\x6C\x6F\x6F\x72","\x3A\x3C\x2F\x62\x3E\x20","\x74\x6F\x46\x69\x78\x65\x64","\x70\x6F\x77","\x20","\x65\x61\x63\x68","\x3C\x62\x3E\x4D\x69\x6B\x68\x6D\x6F\x6E\x20\x54\x72\x61\x66\x66\x69\x63\x20\x4D\x6F\x6E\x69\x74\x6F\x72\x3C\x2F\x62\x3E\x3C\x62\x72\x20\x2F\x3E\x3C\x62\x3E\x54\x69\x6D\x65\x3A\x20\x3C\x2F\x62\x3E","\x25\x48\x3A\x25\x4D\x3A\x25\x53","\x78","\x64\x61\x74\x65\x46\x6F\x72\x6D\x61\x74","\x3C\x62\x72\x20\x2F\x3E","\x20\x3C\x62\x72\x2F\x3E\x20","\x6A\x6F\x69\x6E"];var s=[];$[_0x2f7f[22]](this[_0x2f7f[0]],function(_0x3735x2,_0x3735x3){var _0x3735x4=_0x3735x3[_0x2f7f[1]];var _0x3735x5=[_0x2f7f[2],_0x2f7f[3],_0x2f7f[4],_0x2f7f[5],_0x2f7f[6]];if(_0x3735x4== 0){s[_0x2f7f[15]](_0x2f7f[7]+ this[_0x2f7f[9]][_0x2f7f[8]]+ _0x2f7f[10]+ this[_0x2f7f[9]][_0x2f7f[11]]+ _0x2f7f[12]+ this[_0x2f7f[9]][_0x2f7f[13]]+ _0x2f7f[14])};var _0x3735x2=parseInt(Math[_0x2f7f[17]](Math[_0x2f7f[16]](_0x3735x4)/ Math[_0x2f7f[16]](1024)));s[_0x2f7f[15]](_0x2f7f[7]+ this[_0x2f7f[9]][_0x2f7f[8]]+ _0x2f7f[10]+ this[_0x2f7f[9]][_0x2f7f[11]]+ _0x2f7f[12]+ this[_0x2f7f[9]][_0x2f7f[13]]+ _0x2f7f[18]+ parseFloat((_0x3735x4/ Math[_0x2f7f[20]](1024,_0x3735x2))[_0x2f7f[19]](2))+ _0x2f7f[21]+ _0x3735x5[_0x3735x2])});return _0x2f7f[23]+ Highcharts[_0x2f7f[26]](_0x2f7f[24], new Date(this[_0x2f7f[25]]))+ _0x2f7f[27]+ s[_0x2f7f[29]](_0x2f7f[28])
                          },
                          shared: true                                                      
                        },
                      });
                    });
                  </script>
                  <div class="col-12" id="trafficMonitor"></div>
                </div>
              </div>  
</div>
</div>
</div>
<script src="./js/highcharts/highcharts.js"></script>
<script src="./js/highcharts/themes/hc.dark.js"></script>
<script src="./js/mikhmon-ui.dark.min.js"></script>
<script src="./js/mikhmon.js?t=2022-02-23_21:58:04"></script>

</body>
</html>

