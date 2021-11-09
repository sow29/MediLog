<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Patient Page</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   <script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
   
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
.wrapper{
	
}
.navbar{
	position: fixed;
	height: 80px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(0,0,0,0.4);
}


.navbar ul{
	float: right;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 20px;
	font-family: 'Roboto', sans-serif;
	color: white;
	padding: 6px 13px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
	background: red;
	border-radius: 2px;
}
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 55%;
	transform: translate(-50%, -50%);
	font-family: sans-serif;
	user-select: none;
}

.center .buttons{
	margin: 35px 280px;
	
}

.column {
  float: left;
  width: 65%;
  padding: 65px;
}

.buttons button{
	height: 50px;
	width: 150px;
	font-size: 18px;
	font-weight: 600;
	color: #ffb3b3;
	background: red;
	outline: none;
	cursor: pointer;
	border: 1px solid #cc0000;
	border-radius: 25px;
	transition: .4s;
	position: center;
	-webkit-transition: -webkit-transform 1s;
}



    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  z-index: 500;
}

.modal-message {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 75px; /* Location of the box */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 50%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:transparent; /* Fallback color */
  background-color:transparent; /* Black w/ opacity */
  /* float:right */
  margin-left:35%
}
.modal-content-message {
  background-color: transparent;
  margin: auto;
  padding: auto;
  /* border: 1px solid #888; */
  width: 30%;
  z-index: 500;
  float:right;
}
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}
.info-msg {
  color: #059;
  background-color: #BEF;
}
.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}
.error-msg {
  color: #D8000C;
  background-color: #FFBABA;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
<body>
<div class="row">
    <div class="column">
      <img src="../img/doctor.jpg" alt="Snow" style="height:180%" >
    </div>

<div class="wrapper">
      
      <nav class="navbar">
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
        <h8 style="float:left;font-family:OCR A Std, monospace;font-size:50px;color:#e8135a; padding=0px">Medilog</h8>
        <ul>
          
          <li><a href="../html/home.html">Home</a></li>
          <li><a class = "active" href="#">Patient</a></li>
          <li><a href="../php/Allergy.php">Allergies</a></li>
          <li><a href="../php/Records.php">Records</a></li>
          <li><a href="../patient/patientill.php">Illness</a></li>
          <li><a href="../php/Medication.php">Medication</a></li>
        </ul>
      </nav>
</div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="dashboard.html">
                        <b class="logo-icon">
                          
                            <img src="plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                     
                        <span class="logo-text">
                        
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                   
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
              
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                   
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                       
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                    
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Steave</span></a>
                        </li>
                     
                    </ul>
                </div>
            </nav>
        </header> -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6" style="z-index: -10;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <!-- <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Basic Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Icon</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Google Map</span>
                            </a>
                        </li> -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Paitent</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/ampleadmin/"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Upgrade to Pro</a>
                        </li> -->
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Please Be Cautious when entering the Information of Patients..!!!</h4>
                    </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a>
                        </div>
                    </div> -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <!-- <h3 class="box-title">Blank Page</h3> -->
                            <button type="button" style="background-color: #003adc;border: none;width: 250px;height: 50px;border-radius: 5px;margin-left: 75%;color: #fff;font-size: larger;font-weight: 600;" onclick="addPaitent()">Add Paitent</button>
                        </div>
                    </div>
                </div>
                <div id="myModal" class="modal" >
                    <div class="row modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                        <!-- Column -->
                        <!-- <div class="col-lg-4 col-xlg-3 col-md-12">
                            <div class="white-box">
                                <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                    <div class="overlay-box">
                                        <div class="user-content">
                                            <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg"
                                                    class="thumb-lg img-circle" alt="img"></a>
                                            <h4 class="text-white mt-2">User Name</h4>
                                            <h5 class="text-white mt-2">info@myadmin.com</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-btm-box mt-5 d-md-flex">
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <h1>258</h1>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <h1>125</h1>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <h1>556</h1>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Column -->
                        <!-- Column -->
                       
                        <div class="col-lg-12 col-xlg-12 col-md-12">
                            <div style="text-align: center;">
                                <h3 >Add Patient</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal form-material">
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">NIC Number</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" placeholder="4852456852v"
                                                    class="form-control p-0 " id="nic" > </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="example-email" class="col-md-12 p-0">Full Name</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" placeholder="Jhone peter"
                                                    class="form-control p-0 " name="example-email"
                                                    id="name">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Phone No</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="number" placeholder="123 456 7890"
                                                    class="form-control p-0 " id="phone">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Address</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <textarea rows="5" class="form-control p-0 " id="address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-sm-12">Select Gender</label>
    
                                            <div class="col-sm-12 border-bottom">
                                                <select class="form-select shadow-none p-0 border-0 form-control-line" id="gender">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-sm-12">Blood Group</label>
    
                                            <div class="col-sm-12 border-bottom">
                                                <select class="form-select shadow-none p-0 border-0 form-control-line" id="blood">
                                                    <option value="A+">A+</option>
                                                    <option value="B+">B+</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="O+">O+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="col-sm-12" style="text-align: center;">
                                                <button class="btn btn-success" style="width: 250px;height: 50px;" onclick="savePaitent(false)" type="button" id="savePatient">Save Details</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <div id="error" class="modal-message">
                    <div class="row modal-content-message">
                        <div class="error-msg">
                            <i class="fa fa-times-circle"></i>
                        This is a error message.
                        </div>
                    </div>
                </div>

                <div id="success" class="modal-message">
                    <div class="row modal-content-message">
                        <div class="success-msg">
                        <i class="fa fa-check"></i>
                        Successfully Saved.
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Patient Details</h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive" id="table">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script>

        window.onload=getAllPaitent();

        function getAllPaitent(){
            $.ajax({
                    url : 'action/patient.php',
                    type : 'GET',
                    success : function (result) {
                        document.getElementById('table').innerHTML = result
                        console.log ('success');
                    },
                    error : function (err) {
                        console.log ('error',err);
                    }
                    }); 
        }

        function addPaitent(){
            clearFeild();
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }

        function updatePaitentClick(nicNo,nameRec,phoneRec,addressRec,bloodRec,genderRec){
            addPaitent();
            clearFeild();
            // ,phoneRec,addressRec,bloodRec,genderRec
            console.log(nameRec);
            let nic = document.getElementById('nic');
            nic.value = nicNo;
            nic.disabled = true;
            let name = document.getElementById('name');
            let phone = document.getElementById('phone');
            let address = document.getElementById('address');
            let gender = document.getElementById('gender');
            let blood = document.getElementById('blood');
            name.value = nameRec;
            phone.value = phoneRec;
            address.value = addressRec;
            gender.value = genderRec;
            blood.value = bloodRec;
            document.getElementById('savePatient').setAttribute("onclick","savePaitent(true)");
        }
        function closeModal(){
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
        function savePaitent(updateStatus){
            let nic = document.getElementById('nic');
            let name = document.getElementById('name');
            let phone = document.getElementById('phone');
            let address = document.getElementById('address');
            let gender = document.getElementById('gender');
            let blood = document.getElementById('blood');

            if(updateStatus){
                if(nic.value!='' && name.value!='' 
            && phone.value!='' && address.value!='' 
            && gender.value!='' && blood.value!=''){
                $.ajax({
                    url : 'action/updatePaitent.php',
                    type : 'POST',
                    data: {
                        nic:nic.value,
                        name:name.value,
                        phone:phone.value,
                        address:address.value,
                        gender:gender.value,
                        blood:blood.value
                    },
                    success : function (result) {
                        console.log (result);
                        document.getElementById('success').style.display = "block";
                        timeOut('success');
                        getAllPaitent();
                        closeModal();
                        clearFeild();
                    },
                    error : function (err) {
                        console.log ('error',err);
                    }
                    });
            }else{
                if(nic.value==''){
                    nic.style.borderBottomColor ="#f01616";
                }else{
                    nic.style.borderBottomColor ="#e9ecef";
                }
                if(name.value==''){
                    name.style.borderBottomColor ="#f01616";
                }else{
                    name.style.borderBottomColor ="#e9ecef";
                }
                if(phone.value==''){
                    phone.style.borderBottomColor ="#f01616";
                }else{
                    phone.style.borderBottomColor ="#e9ecef";
                }
                if(address.value==''){
                    address.style.borderBottomColor ="#f01616";
                }else{
                    address.style.borderBottomColor ="#e9ecef";
                }
            }
            }else{
                if(nic.value!='' && name.value!='' 
            && phone.value!='' && address.value!='' 
            && gender.value!='' && blood.value!=''){
                $.ajax({
                    url : 'action/savePaitent.php',
                    type : 'POST',
                    data: {
                        nic:nic.value,
                        name:name.value,
                        phone:phone.value,
                        address:address.value,
                        gender:gender.value,
                        blood:blood.value
                    },
                    success : function (result) {
                        console.log (result);
                        document.getElementById('success').style.display = "block";
                        timeOut('success');
                        getAllPaitent();
                        closeModal();
                        clearFeild();
                    },
                    error : function (err) {
                        console.log ('error',err);
                    }
                    });
            }else{
                if(nic.value==''){
                    nic.style.borderBottomColor ="#f01616";
                }else{
                    nic.style.borderBottomColor ="#e9ecef";
                }
                if(name.value==''){
                    name.style.borderBottomColor ="#f01616";
                }else{
                    name.style.borderBottomColor ="#e9ecef";
                }
                if(phone.value==''){
                    phone.style.borderBottomColor ="#f01616";
                }else{
                    phone.style.borderBottomColor ="#e9ecef";
                }
                if(address.value==''){
                    address.style.borderBottomColor ="#f01616";
                }else{
                    address.style.borderBottomColor ="#e9ecef";
                }
            }
            }
           
        }

        function clearFeild(){
            let nic = document.getElementById('nic');
            nic.disabled = false;
            document.getElementById('nic').value = "";
            document.getElementById('name').value = "";
            document.getElementById('phone').value = "";
            document.getElementById('address').value  = "";
            document.getElementById('gender').value = "";
            document.getElementById('blood').value = "";  
        }

        function timeOut(message) {
            setTimeout(function(){ 
                if(message='success'){
                document.getElementById('success').style.display = "none";
                }else{

                }
                }, 5000);
        }  
    </script>
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>