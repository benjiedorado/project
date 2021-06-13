<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" >
        

  			<div class="logo">

  			<!-- 	<span class="fa fa-hands-helping"></span> -->

  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>Recruitment Management System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?><!--  <i class="fa fa-power-off"> -->
         <p class="col-md float-right text-white" style="position:relative; ">Log out</p></i></a>
	    </div>
    </div>
  </div>
  
</nav>