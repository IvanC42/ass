<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VTC - Book Online Airline Tickets</title>
  <link rel = "icon" href = "./images/favicon.png" type = "image/x-icon"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css1/style.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">	
    <link href="https://fonts.googleapis.com/css2?family=Italianno&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script><style media="all" id="fa-v4-shims">
    </style><style id="__web-inspector-hide-shortcut-style__">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
visibility: hidden !important;
}
</style></head>
<style>
footer {
bottom: 0;
width: 100%;
height: 2.5rem;         
}
form.logout_form {
background: transparent;
padding: 10px !important;
}
body {
background: #bdc3c7;  
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7); 
background: linear-gradient(to right, #2c3e50, #bdc3c7); 
}

h1,h2,h3,h4,h5,h6{
font-family: 'Montserrat', sans-serif;

}
h5.text-light {
margin-top: 10px;
}
@font-face {
font-family: 'product sans';
src: url('assets/css/Product Sans Bold.ttf');
}
h1{
font-family :'product sans' !important;
color:cornflowerblue ;
font-size:50px;
margin-top:50px;
text-align:center;
}

.main-agileinfo{
margin:50px auto;
width:50%;
}
/*--SAP--*/
.sap_tabs{
clear:both;
padding: 0;
}
.tab_box{
background:#fd926d;
padding: 2em;
}
.top1{
margin-top: 2%;
}
.resp-tabs-list {
list-style: none;
padding: 15px 0px;
margin: 0 auto;
text-align: center;
/* background: rgb(33, 150, 243); */
background: rgb(78 103 114);
}
.resp-tab-item {
font-size: 1.1em;
font-weight: 500;
cursor: pointer;
display: inline-block;
margin: 0;
text-align: center;
list-style: none;
outline: none;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
-ms-transition: all 0.3s;
-o-transition: all 0.3s;
transition: all 0.3s;
text-transform: uppercase;
margin: 0 1.2em 0;
color:#b1b1b1;
padding:7px 15px;
}

.resp-tab-active {
color:#fff;	
}
.resp-tabs-container {
padding: 0px;
clear: left;	
}
h2.resp-accordion {
cursor: pointer;
padding: 5px;
display: none;
}
.resp-tab-content {
display: none;
}
.resp-content-active, .resp-accordion-active {
display: block;
}
form {
background:rgba(3, 3, 3, 0.57);
padding: 25px;
}

h3 {
font-size: 16px;
color:rgb(255, 255, 255);
margin-bottom: 7px;
}
.from,.to,.date,.depart,.return{
width:48%;
float:left;
}

.from,.to,.date{
margin-bottom:40px;
}
.from,.date,.depart{
margin-right:4%;
}
input[type="text"]{
padding:10px;
width:93%;
float:left;
}
input#datepicker,input#datepicker1,input#datepicker2,input#datepicker3 {
width: 85%;
margin-bottom:10px;
}
select#w3_country1 {
padding: 10px;
float:left;
}
label.checkbox {
display: inline-block;
}
.checkbox {
position: relative;
font-size: 0.95em;
font-weight: normal;
color:#dedede;
padding: 0em 0.5em 0em 2em;
}
.checkbox i {
position: absolute;
bottom: 1px;
left: 2px;
display: block;
width: 18px;
height: 18px;
outline: none;
background: #fff;
border: 1px solid #6A67CE;
}
.checkbox i {
font-size: 20px;
font-weight: 400;
color: #999;
font-style: normal;
}
.checkbox input:checked + i:after {
opacity: 1;
}
.checkbox input + i:after {
position: absolute;
opacity: 0;
transition: opacity 0.1s;
-o-transition: opacity 0.1s;
-ms-transition: opacity 0.1s;
-moz-transition: opacity 0.1s;
-webkit-transition: opacity 0.1s;
}
.checkbox input + i:after {
content: '';
background: url("assets/images/tick.png") no-repeat 5px 5px;
top: -1px;
left: -1px;
width: 15px;
height: 15px;
font: normal 12px/16px FontAwesome;
text-align: center;
}
input[type="checkbox"]{
opacity:0;
margin:0;
display:none;
}

.quantity-select .entry.value-minus {
margin-left: 0;
}
.value-minus, .value-plus {
height: 40px;
line-height: 24px;
width: 40px;
margin-right: 3px;
display: inline-block;
cursor: pointer;
position: relative;
font-size: 18px;
color: #fff;
text-align: center;
-webkit-user-select: none;
-moz-user-select: none;
border: 1px solid #b2b2b2;
vertical-align: bottom;
}

.value {
cursor: default;
width: 40px;
height:33px;
color: #000;
line-height: 24px;
border: 1px solid #E5E5E5;
background-color: #fff;
text-align: center;
display: inline-block;
margin-right: 3px;
padding-top:7px;
}

.quantity-select .entry.value-minus:hover, .quantity-select .entry.value-plus:hover {
background:rgba(0, 0, 0, 0.6);;
}
.value-minus, .value-plus {
height: 40px;
line-height: 24px;
width: 40px;
margin-right: 3px;
display: inline-block;
cursor: pointer;
position: relative;
font-size: 18px;
text-align: center;
-webkit-user-select: none;
-moz-user-select: none;
border: 1px solid #b2b2b2;
vertical-align: bottom;
}
.quantity-select .entry.value-minus:before, .quantity-select .entry.value-plus:before {
content: "";
width: 13px;
height: 2px;
background: #fff;
left: 50%;
margin-left: -7px;
top: 50%;
margin-top: -0.5px;
position: absolute;
}
.quantity-select .entry.value-plus:after {
content: "";
height: 13px;
width: 2px;
background: #fff;
left: 50%;
margin-left: -1.4px;
top: 50%;
margin-top: -6.2px;
position: absolute;
}

.numofppl,.adults,.child{
width:50%;
float:left;
}
.class{
width:48%;
float:left;
}
input[type="submit"] {
font-size: 18px;
color: #fff;
background:#4caf50;
border: none;
outline: none;
padding: 10px 20px;
margin-top: 50px;
cursor:pointer;
 transition: 0.5s all ease;
-webkit-transition: 0.5s all ease;
-moz-transition: 0.5s all ease;
-o-transition: 0.5s all ease;
-ms-transition: 0.5s all ease;
}
input[type="submit"]:hover  {
background:#212121;
color:#fff;
}
.spcl{
position:relative;
}

.ui-datepicker {width:16.2%;
padding: 0 0em 0;
}
.ui-datepicker .ui-datepicker-header {
  position: relative;
  padding: .56em 0;
  background:rgb(33, 150, 243);;
  text-transform: uppercase;
}

form.blackbg{
background:rgba(3, 3, 3, 0.57);
}

@media (max-width:1440px){
.checkbox {
    font-size: 0.9em;
}
}
@media (max-width:1366px){
.main-agileinfo {
    width: 53%;
}
}
@media (max-width:1280px){
.main-agileinfo {
    width: 57%;
}
}
@media (max-width:1080px){
h1 {
    color: #fff;
    font-size: 47px;
}
.main-agileinfo {
    width: 68%;
}
}
@media (max-width:1024px){
.main-agileinfo {
    width: 71%;
}
}
@media (max-width:991px){
.from, .to, .date, .depart, .return {
    width: 49%;
    float: left;
}
.from, .date, .depart {
    margin-right: 2%;
}
}
@media (max-width:966px){
.main-agileinfo {
    width: 73%;
}

}
@media (max-width:900px){
.checkbox {
    font-size: 0.82em;
}
}
@media (max-width:800px){
.main-agileinfo {
    width: 81%;
}
}
@media (max-width:768px){
.main-agileinfo {
    width: 85%;
}
.checkbox i {
    width: 15px;
    height: 15px;
}
.checkbox input + i:after {
    top: -3px;
    left: -3px;
}
}
@media (max-width:736px){
.main-agileinfo {
    width: 88%;
    margin:40px auto;
}
h1 {
    color: #fff;
    font-size: 43px;
    margin-top:40px;
}
input[type="text"] {
    padding: 10px;
    width: 90%;
    float: left;
}
input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
    width: 79%;
}
.value-minus, .value-plus {
    height: 30px;
    width: 30px;
}
.value {
    width: 33px;
    height: 25px;
    padding-top: 6px;
}
}
@media (max-width:667px){
.numofppl {
    width: 60%;
}
.roundtrip .date {
    width: 68%;
    float:left;
}
.roundtrip .class{
    width:30%;
    float:left;
}
.oneway .depart,.multicity .depart{
    width: 68%;
}
}
@media (max-width:600px){
select#w3_country1 {
    width: 100%;
}
}
@media (max-width:568px){
h1 {
    font-size: 40px;
}
.resp-tab-item {
    padding: 7px 13px;
    margin: 0 1em 0;
}
.numofppl {
    width: 70%;
}
}
@media (max-width:480px){
.resp-tab-item {
    padding: 7px 7px;
    margin: 0 0.7em 0;
}
 input[type="text"] {
    padding: 10px;
    width: 86%;
    float: left;
}
.roundtrip .date {
    width: 100%;
    float: left;
}
input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
    width: 86%;
}
.roundtrip .class{
    width: 100%;
    float: left;
    margin-bottom:40px;
}
.numofppl {
    width: 80%;
}
.oneway .depart, .multicity .depart {
    width: 100%;
}
}
@media (max-width:414px){
h1 {
    font-size: 35px;
    margin-top:30px;
}
.resp-tab-item {
    padding: 7px 7px;
    margin: 0 0.5em 0;
    font-size: 15px;
}
.numofppl {
    width: 100%;
}
}
@media (max-width:384px){
h1 {
    font-size: 32px;
}
h3 {
    font-size: 15px;
}
.from, .to, .date, .depart, .return {
    width: 100%;
    float: left;
    margin-bottom:25px;
}
.date{
    margin-bottom:0;
}
.resp-tab-item {
    padding: 7px 7px;
    margin: 0 0em 0;
    font-size: 15px;
}
.class {
    width: 100%;
    float: left;
    margin-bottom: 40px;
}
input[type="text"] {
    padding: 10px;
    width: 91.5%;
}
input#datepicker, input#datepicker1, input#datepicker2, input#datepicker3 {
    width: 91.5%;
}
}
@media (max-width:320px){
h1 {
    font-size: 26px;
    margin-top:25px;
}
form{
    padding:15px;
}
.resp-tab-item {
    padding: 7px 5px;
    margin: 0 0em 0;
    font-size: 14px;
}
.adults, .child {
    width: 100%;
    float: left;
}
.adults{
    margin-bottom:25px;
}
}
@font-face {
font-family: 'product sans';
src: url('assets/css/Product Sans Bold.ttf');
}
h1 {
font-family: 'product sans';
font-size: 40px !important;	
}	
</style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="bottom-nav">
        <ul class="bottom-nav-list">
           <li><a href="main.php">Booking Record</a></li>
          <li><a href="booking.php">Buy Ticket</a></li>
          <li><a href="main.php">My Page</a></li>
          <li><a href="login.php"> Log Out</a></li>
		  
        </ul>
  </div>
        <div class="top-nav">
        <div class="left-nav">
        <a href="index.html"><img src="vtc.png" alt="logo" class="nav-item logo logo-nav"></a>
        <div class="nav-item">
		
      </div>
    </div>
        <div>
        
          <a href="#" class="nav-item"><i class="fas fa-bars"></i></a>
        </div>
      </div>
    
    </nav>
  </header>
  <main>
<link rel="stylesheet" type="text/css" href="styles%2c_bootstrap4%2c_bootstrap.min.css%2bplugins%2c_font-awesome-4.7.0%2c_css%2c_font-awesome.min.css%2bplugins%2c_OwlCarousel2-2.2.1%2c_owl.carousel.css%2bplugins%2c_OwlCarousel2-2.2.1%2c_owl">
<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } ;</script>	
<div class="main-agileinfo">
    <h1 class="text-light brand mt-2">			
    Searching Flight</h1>
    <div class="sap_tabs">			
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <div class="clearfix"> </div>	
            <div class="resp-tabs-container">
               
                    <form action="search.php" method="post"> <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Round Trip</h2><div class="tab-1 resp-tab-content roundtrip resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                        <input type="hidden" name="type" value="round">
                        <div class="from">
                            <h3 >From</h3>								
                            <select value="0" name="dep_city" id="w3_country1">
                            <option selected="" disabled="">Departure</option><option value="HK" jose="">Hong Kong</option></select> 														
                        </div>
                        <div class="to">
                            <h3>To</h3>								
                            <select value="0" name="arr_city" id="w3_country1">
                            <option selected="" disabled="">Arrival</option><option value="Shanghai" jose="">Shanghai Pudong</option><option value="Kansai">Kansai</option><option value="Taoyuan">Taoyuan</option></select>
                        </div>
                        <div class="clear"></div>
                        <div class="date">
                            <div class="depart">
                                <h3 >Depart</h3>
                                <input class="form-control" name="dep_date" type="date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                            </div>
                        </div>

                        <input type="submit" value="Search Flights" name="search_but">
                    </form>						
                </div>					
    


  </main>
  </div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>     
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',         
                width: 'auto', 
                fit: true   
            });
        });		
    </script>
    
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>

</body>
</html>