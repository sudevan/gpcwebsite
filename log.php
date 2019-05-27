<?php 
 include("head.php");

 ?>
   <section>
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 bg-info text-wh">
        <!-- <form action="" style="margin-left: 5%; margin-right: 5%;" id="loginform" method="post"> -->
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="username" id="name" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="text" id="pw" class="form-control" name="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="button" name="login" class="btn btn-danger" onclick="loging()">login</button>
<!-- </form> -->

      </div>
      
    </div>
    
  </div>
</section>


<script type="text/javascript">
	function loging()
	{
		var name=document.getElementById('name').value;
		var pw=document.getElementById('pw').value;
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
  
    // if (flag==="") {

    // alert(flag);
    // }
    //   else{
    //     alert("invalid");
    //   }

    }
  };

  xhttp.open("GET", "loginsample.php?username="+username+"&password="+password, true);
      xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


  xhttp.send();
}
	
</script>

 <?php 
   include("tail.php");
  ?>