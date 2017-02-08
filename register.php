



<!--

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pass it on</title>
  
  <link rel="stylesheet" href="chat.css"  type="text/css">

  </head>

<body>

   <center><h1><img src="header.png"></h1></center>

	<div class="login">
	<fieldset>
	<legend>Please fill in all the fields below</legend>
    <form Method="POST" action="process.php" >
	
    	<input type="text" name="fname" placeholder="First Name" required="required" />
        <input type="text" name="sname" placeholder="Second name" required="required" />
        <input type="email" name="email" placeholder="example@domain.com"  id="email"  required="required" />
        <input type="password" name="password" id="password" placeholder="Password" required="required" />
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required="required" />
		
		
		<br/>
       <select name="mentor" required>
	   <option value=" ">--Select user type--</option>
	   <option value="1">Mentor</option>
	   <option value="0">Mentee</option>
       </select>
         <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Sign up</button>
        
    </form>
	
	<br/>
	<br/>
	 <a href="index.php"> <button  class="btn btn-primary btn-block btn-large">Sign in.</button></a>
	 
	 </fieldset>
	</div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/confirm_password.js"></script>
   

</body>
</html>

-->


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pass it on</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  
  
    <link href="bootstrap.css" rel="stylesheet"/>
  <link href="bootstrap-responsive.css" rel="stylesheet"/>

  </head>

<body>


   <div class="container">
        <div class="row-fluid">





  
  
  
  <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
  
   <h1><center><img src="header.png"></center></h1>
   
   </div>
   </div>
   </div>
   
   
   <div class="span4">
      
	  
	     <div class="hero-unit-3">
                    <div class="alert-index alert-success">
					<h3>Welcome to Ementoring Africa</h3>
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
					
	
                </div>
                </div>
   
   
   
  
  <div class="span6">
  
   <div class="hero-unit-3">
    <div class="alert-index alert-success">  
    <div class="container">
        <div class="row-fluid">
  
	 <fieldset> <legend id="small"> Enter your details below: </legend>
	   
	<table align="left" >
	
      <form Method="POST" action="process.php" >
	
	
	
	<div class="control-group">
	<tr>
	
	<td>
	
	   <label class="control-label" for="inputPassword">First Name :</label>
	
	</td>
	
    	<td>
		
		
		  <div class="controls">
		<input type="text" name="fname" placeholder="First Name" required="required" />
		
		</div>
		
		</td>
		
		</tr>
		
		</div>
		
		<div class="control-group">
	<tr>
	
	<td>
	
	   <label class="control-label" for="inputPassword">Second Name :</label>
	
	</td>
	
    	<td>
		
		
		  <div class="controls">
		<input type="text" name="sname" placeholder="Second name" required="required" />
		
		</div>
		
		</td>
		
		</tr>
		
		</div>
		
<div class="control-group">
		<tr>
		<td>     <label class="control-label" for="inputPassword">User Type:</label> </td>
       	<div class="control"><td> 
		
		<select name="mentor" required>
	   <option value=" ">--Select user type--</option>
	   <option value="1">Mentor</option>
	   <option value="0">Mentee</option>
       </select></td>
		
		</div>
		</tr>
		
		
		</div>
		
		
		
		
		
		
		
		<div class="control-group">
	<tr>
	
	<td>
	
	   <label class="control-label" for="inputPassword">	Email Addres :</label>
	
	</td>
	
    	<td>
		
		
		  <div class="controls">
		<input type="email" name="email" placeholder="example@domain.com"  id="email"  required="required" />
		
		</div>
		
		</td>
		
		</tr>
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<div class="control-group">
		<tr>
		<td>     <label class="control-label" for="inputPassword">Password:</label> </td>
       	<div class="control"><td> 
		
		<input type="password" name="password" id="password" placeholder="Password" required="required" /></td>
		
		</div>
		</tr>
		
		
		</div>			
		
		
		
		<div class="control-group">
		<tr>
		<td>     <label class="control-label" for="inputPassword">Confirm Password:</label> </td>
       	<div class="control"><td> 
		
		<input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required="required" /></td>
		
		</div>
		</tr>
		
		
		</div>

	<div class="control-group">
		<tr>
		<td colspan="2" align="center">
        <button type="submit" name="submit" class="btn btn-primary ">Sign up</button>
      </td>
	  </tr>
	  
	  </div>
	  
	  
	  	<div class="control-group">
	  
	  
	  	<div class="control-group">
    </form>
	
<tr>
	  <td colspan="2" align="center">
    	 <a href="index.php"> <button  class="btn btn-primary ">Sign in.</button></a>
      </td>
	  </tr>
	
	
	</table>
	</fieldset>

	
	</div>
	</div>
	</div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/confirm_password.js"></script>
    <script src="js/index.js"></script>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


