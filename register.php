
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Pass it on</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize.css"/>
</head>

<body>
    <main>
        
        <br>
        <br>
        <div class="container">
            <a href="#" class="brand-logo center-align">
                <img  height="50%"  width='100%' class="" src="header.jpg">
            </a>
            <br>
            <br>
            <h4>Register with "PASS IT ON" Ementoring Africa</h4>
            <h6 class="secondary-title">
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
            </h6>

            <div class="row">
                <form method="post" action="process.php">
                    <div class="row">
                        <div class="container">
                            <div class="col s12 input-field">
                                <p>Please provide your details below</p>
                            </div>
                                 <div class="col s12 input-field">

                                <input type="text" name="firstname" placeholder="Enter Firstname" autocomplete="off" value="<?php echo isset($fields['firstname'])? $fields['firstname']:''?>" required="required" />
<!--                                <label for="password">Password:</label>-->
                             <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['firstname'])? $errors['firstname']:'';?></span>
                            </div>
                            <div class="col s12 input-field">
                                <input type="text" name="lastname" placeholder="Enter lastname" autocomplete="off" id="lastname" value="<?php echo isset($fields['lastname'])? $fields['lastname']:''?>" required="required" />
<!--                                <label for="username">Username / Email :</label>-->
                                  <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['lastname'])? $errors['lastname']:'';?></span>
                            </div>

                              <div class="col s12 input-field">
                                <input type="email" name="emailaddress" placeholder="Enter Email Address" autocomplete="off" id="emailaddress" value="<?php echo isset($fields['emailaddress'])? $fields['emailaddress']:''?>" required="required" />
<!--                                <label for="username">Username / Email :</label>-->
                                  <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['emailaddress'])? $errors['emailaddress']:'';?></span>
                            </div>
                            <div class="col s12 input-field">
                                <input type="password" name="password" placeholder="Enter password" autocomplete="off" id="password" value="<?php echo isset($fields['password'])? $fields['password']:''?>" required="required" />
<!--                                <label for="username">Username / Email :</label>-->
                                  <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['password'])? $errors['password']:'';?></span>
                            </div>
                            <div class="col s12 input-field">
                                <input type="password" name="Confirmpassword" placeholder="Confirm your password" autocomplete="off" id="Confirmpassword" value="<?php echo isset($fields['Confirmpassword'])? $fields['Confirmpassword']:''?>" required="required" />
<!--                                <label for="username">Username / Email :</label>-->
                                  <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['Confirmpassword'])? $errors['Confirmpassword']:'';?></span>
                            </div>


                            <div class="col s12 select">
                            <label style="height: 100%;font-size: 1.0rem;"> Select user Type : </label>
                               <select  name="usertype"required >
                                   <option ></option>
                                      <option value="0">Mentor</option>
                                      <option value="1">Mentee</option>
                                </select>
                                  <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['lastname'])? $errors['lastname']:'';?></span>
                            </div>



                            <div class="col s12 select">
                            <label style="height: 100%;font-size: 1.0rem;">Select Gender : </label>
                               <select name="gender" required>
                                   <option value=""></option>
									  <option value="Male">Male</option>
									  <option value="Female">Female</option>
								</select>
                                  <span style="margin-top:-10px;padding:0px;color:red"><?php echo isset($errors['lastname'])? $errors['lastname']:'';?></span>
                            </div>

                            <div class="col s12 input-field">
                                <button class="btn" type="submit" name="submit">Sign Up</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>
<!--    <script src="js/index.js"></script>-->
</body>
</html>
