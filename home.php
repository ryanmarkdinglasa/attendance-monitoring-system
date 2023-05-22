
<style type="text/css">

/*.bg{

  background:url(../images/bg/home_bg.png) no-repeat;
}
*/
.ssgmenu  > li > a {

  font-size: 25px;
  /*font-weight: bold;*/
  padding: 15px;
  color: #000;

} 
.ssgmenu > li > a:hover,
.ssgmenu > li > a:focus{
  background: #47c9af;
  color: #fff;
} 
 
.motto p {
  font-size: 32px;
  /*font-weight: bold;*/
  margin-top: 5%;
  line-height: 32px;

}
.motto{
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
  color: #000;
  font-size:16px;
    
}
.timeh1{
   text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
  color: #000;
 
}
.span10 img {
  width: 100%;
  height: 200px;
}
.primary-text-color{
			color:rgb(25,49,83);
		}
		.logo{
			margin:0 auto;
			width:60%;
			/height:300px;
			/border:1px solid red;
			/margin:20px 0;
		}
		.logo-con{
			width:50%;
			/border:1px solid red;
			float:left;
		}
		.button{
			height:50px;
			width:200px;
			background:rgb(25,49,83);
			border-radius:5px;
			color:white;
			border:none;
		}
		.button:hover{
			/background:rgb(15,30,51);
			background:white;
			color:rgb(15,30,51);
			transition:0.7s;
			border:1px solid rgb(15,30,51);
		}
		#footer{
			margin-top:-100px;
		}
		#home-active a{
			color:rgb(25,49,83);
		}
		#home-active a:after {
		  background: white;
		  
		}
</style>  
  <section id="" class="w3-container"   >
        <div class="w3-container"   >
        <div class="container bg">
          <div class="row">
            <div class="center wow fadeInDown "> 
			<div>
				<img class="" width="500px" height="150px" src="images/philsca-logo2.png">
			</div>
			<br>
			<br>
			<div class="logo">
				<div class="logo-con">
					<h1 class="primary-text-color" target="_blank"style="margin-top:-10px;font-size:60px;text-align:right;">Attendance Monitoring System</h1>
					<!--<img class="" width="250px" height="350px" src="images/philsca-logo.png">-->
				</div>
				<div class="logo-con ">
					<div class="w3-card-4">
					<div class="col-md-12 "> 
                          <h2 class="primary-text-color"id="tick2" class="" style="font-size:px;"> </h2>
                          <p>
						  <?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y'); 
                          ?> 
						  </p>
                    </div>
					
					<div class="col-md-12 ">
						<br>
						<!--<button onclick="checkattendance();" type="submit"  class="button"  >Check Attendance</button>-->
					</div>
					</div>
				</div>
            </div> 
            
            </div> 
          </div>
        </div><!--/.container-->
    </div><!--/#feature--> 
    </section><!--/#feature--> 


    <script>
	function checkattendance(){
	location.href="attendance/check_attendance.php"
}
// <!--/. tells about the time  -->

function show2(){
if (!document.all&&!document.getElementById)
return
thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
var ctime=hours+":"+minutes+":"+seconds+" "+dn
thelement.innerHTML=ctime
setTimeout("show2()",1000)
}
window.onload=show2
//-->

</script>   