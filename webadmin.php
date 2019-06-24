<?php 
 include("head.php");

 ?>

            <div class="row">
                <!-- Grid column --><div class="col-md-3"></div>
                <div class="col-md-6 mb-4">
                    <div class="card near-moon-gradient form-white">
                        <div class="card-body" style="background-image: linear-gradient(to right,white,black);">
                            <!-- Form subscription -->
                          <form action="adminlogin.php" method="post">
                                <h3 class="text-center indigo-text font-bold py-4"><strong>Login</strong></h3>
                                <div class="md-form">
                                    <i class="fa fa-user prefix white-text"></i><label for="form35">username</label>
                                    <input type="text" name="user_name" class="form-control">
                                    
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-lock prefix white-text"></i><label for="form25">password</label>
                                    <input type="password" name="password" class="form-control">
                                    
                                </div>
                                <div class="text-center py-4">
                                    <input class="btn btn-indigo" type="submit" name="adminlog" style="color: white; border: white;" value="Login">
                                </div>
                                </form>
                            <!-- Form subscription -->
                        </div>
                    </div>
                </div> 

<!-- 
<script type="text/javascript">
	function loging()
	{
		var name=document.getElementById('name').value;
		var pw=document.getElementById('pwd').value;
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    // if(this.responseText== "1")
    //  {
    //   window.location.href='index.php';
    //  }
    //  else{
    //   alert("else");
    //  }
    var flag= this.responseText;
    alert(flag);
  
    if (flag==="login") {

    alert(flag);
    }
      else{
        alert("invalid");
      }

    }
  };

  xhttp.open("GET", "loginsample.php?username="+username+"&password="+password, true);


  xhttp.send();
}
	
</script> -->

 <?php 
   include("tail.php");
  ?>