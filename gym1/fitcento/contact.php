<?php
require '../include/db_conn.php';
//page_protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Contact Us</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-md-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index.php">HOME</a></li>                                                    
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="price.php">PACKAGE</a></li>
                            <li><a href="gym.php">TRAINING</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">HOME</a>
                  <a href="about.php">ABOUT</a>
                  <a href="price.php">PRICE</a>
                  <a href="gym.php">GYM</a>
                  <a href="class.php">CLASS</a>
                  <a href="contact.php">CONTACT US</a>
                  <a href="#">LOGIN</a>
                  <a href="#">REGISTER</a>
                </div>
                </div>
                <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle.png" class="toggle_menu"></span>
                </div>  
                </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- contact section start -->
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="contact_text_2"><strong>CONTACT US</strong></h1>
            <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
    </div>
    <div class="contact_section ">
        <div class="row">
            <div class="col-md-6 background_bg">
                <div class="contact_bg">
                    <div class="input_main">
                       <div class="container">
                        <h2 class="request_text">REQUEST A CALL BACK</h2>
                         <form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
             <tr>
               <td height="35">MEMBERSHIP ID:</td>
               <td height="35"><input type="text" id="boxx" name="m_id" value="<?php echo time(); ?>" readonly required/></td>
             </tr>
         
         <tr>
               <td height="35">NAME:</td>
               <td height="35"><input name="u_name" id="boxx"  required/></td>
             </tr>
             <tr>
               <td height="35">STREET NAME:</td>
               <td height="35"><input  name="street_name" id="boxx"   required/></td>
             </tr>
             <tr>
               <td height="35">CITY:</td>
               <td height="35"><input <input type="text" name="city" id="boxx" required/ ></td>
             </tr>
             <tr>
               <td height="35">ZIPCODE:</td>
               <td height="35"><input type="number" name="zipcode" id="boxx" maxlength="6" required / ></td>
             </tr>
            <tr>
               <td height="35">STATE:</td>
               <td height="35"><input type="text" name="state" id="boxx" required/ size="30"></td>
             </tr>
            <tr>
               <td height="35">GENDER:</td>
               <td height="35"><select name="gender" id="boxx" required>

          <option value="">--Please Select--</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></td>
             </tr>
            <tr>
               <td height="35">DATE OF BIRTH:</td>
               <td height="35"><input type="date" name="dob" id="boxx" required/ size="30"></td>
             </tr>
       <tr>
               <td height="35">PHONE NO:</td>
               <td height="35"><input type="number" name="mobile" id="boxx" maxlength="10" required/ size="30"></td>
             </tr>
        <tr>
               <td height="35">EMAIL ID:</td>
               <td height="35"><input type="email" name="email" id="boxx" required/ size="30"></td>
             </tr>
       <tr>
               <td height="35">JOINING DATE:</td>
               <td height="35"><input type="date" name="jdate" id="boxx" required size="30"></td>
             </tr>
             <tr>
               <td height="35">PLAN:</td>
               <td height="35"><select name="plan" id="boxx" required onchange="myplandetail(this.value)">
          <option value="">--Please Select--</option>
          <?php
            $query="select * from plan where active='yes'";
            $result=mysqli_query($con,$query);
            if(mysqli_affected_rows($con)!=0){
              while($row=mysqli_fetch_row($result)){
                echo "<option value=".$row[0].">".$row[1]."</option>";
              }
            }

          ?>
          
        </select></td>
             </tr>
      
      <tbody id="plandetls">
             
            </tbody>

             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Register" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
                       </div> 
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118603.36934758106!2d72.93358948885124!3d21.727747527843885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be020a2b22ac421%3A0xa4116c424622fd2a!2sBharuch%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1622485379904!5m2!1sen!2sin" width="600" height="770" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="footer_section_2">
          <div class="container">
            <div class="row map_addres">
              <div class="col-sm-12 col-lg-4">
                <div class="map_text"><img src="images/map-icon.png"><span class="map_icon">No.123 Chalingt Gates, Supper market New York</span></div>
              </div>
                    <div class="col-sm-12 col-lg-4">
                      <div class="map_text"><img src="images/phone-icon.png"><span class="map_icon">( +71 7986543234 )</span></div>
                    </div>
              <div class="col-sm-12 col-lg-4">
                <div class="map_text"><img src="images/email-icon.png"><span class="map_icon">demo@gmail.com</span></div>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/in-icon.png"></a></li>
                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
              </ul>
            </div>
            <p class="copyright_text"> 2021 </p>
          </div>
        </div>
    </div>
    <!-- footer section end -->






    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 


   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>



     
</body>
</html>