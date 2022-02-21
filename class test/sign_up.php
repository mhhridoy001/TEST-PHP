<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form validation</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="main.php">

</head>
<body>

    <form method="post" action= "main.php">
    <div class="checkout">
      <div class="checkout-bill">
        <h3>Sign Up For Free</h3>
        <h5 style="text-align: center; padding: 15px 0;">Join Thousands of Compaines Use Global Crypto Every Day</h5>

        <div class="con-box">
          <div class="con_box_left">
            <input type="text" placeholder="First Name *" name="fname" value="" autocomplete="off"  value="">
            <span style="font-size: 12px;" id="fname"></span>
            <input type="text" placeholder="User Name *" name="uname" value="" autocomplete="off" >
            <span style="font-size: 12px; color: red;" id="err_uname"></span>
            <input type="text" placeholder="Mobile *" name="mobile" value="" autocomplete="off" >
            <span style="font-size: 12px; color: red;" id="err_mobile"></span>
            <input type="text" placeholder="Password *" name="password" value="" autocomplete="off" >
            <span style="font-size: 12px; color: red;" id="err_password"></span>
          </div>

          <div class="con_box_right">
            <input type="text" placeholder="Last Name *" name="lname" value="" autocomplete="off" >
            <span style="font-size: 12px; color: red;" id="err_lname"></span>
            <input type="text" placeholder="Sponsor ID *" name="sponID" value="" autocomplete="off" >
            <span style="font-size: 12px; color: red;" id="err_sponID"></span>
            <input type="text" placeholder="Your email *" name="email" value="" autocomplete="off" >
            <span style="font-size: 12px; color: red;" id="err_email"></span>
            <input type="text" placeholder="Confirm pass *" name="conPass" value="" autocomplete="off" >
            <span style="font-size: 12px; color: red; display: block;" id="err_conpass"></span>
          </div>
        </div>

        <div class="gender">
          <span style="font-size: 13px; margin-right: 5px;">Gender :</span>
          <input type="radio" name="same" > <span>Male</span>
          <input type="radio" name="same" > <span>Female</span>
        </div>

        <div class="bill_form">
          <span style="font-size: 13px;">Source of funds</span>
          <select name="select" id="" >
            <option value="SELECTED">Select One</option>
            <option value="">Saving</option>
            <option value="">Deposite</option>
          </select>
          <span style="font-size: 12px; color: red;"></span>

          <span style="font-size: 13px; margin-top: 10px; display: block;">Message :</span>
          <textarea name="" id="" placeholder="Write your comment"></textarea>
          <div class="file">
            <span style="font-size: 13px;">File Name:</span>
            <input type="file">
          </div>
        </div>


        <div class="checkbox">
          <input type="checkbox"> <span>I accept the <a href="#">Terms and Condation</a></span><br>
          <input type="checkbox"> <span>I accept the <a href="#">Terms and Condation</a></span>
        </div>

        <input type="submit" name="button" value="Sign Up" style="width: 100%; color: #fff;
        background: #0652DD; outline: 0; border: 1px solid #fff; padding: 10px; margin-top: 10px;
        border-radius: 5px; font-weight: bold; font-size: 14px; letter-spacing: 1px;">

      </div>

    </div>
    </form>

</body>
</html>