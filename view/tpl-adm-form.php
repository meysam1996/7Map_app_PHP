<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= SITE_TITLE ?> Login Form</title>
    <style>
@font-face {
    font-family: IRANSans;
    font-style: normal;
    font-weight: normal;
    src: url('assets/fonts/IRANSansWeb.woff') format('woff');  /* All Major Browsers */
}
@font-face {
    font-family: IRANSans-Bold;
    font-style: normal;
    font-weight: normal;
    src: url('assets/fonts/IRANSansWeb_Bold.woff') format('woff');  /* All Major Browsers */
}
body{
    font-family: IRANSans;
    background-color: #ccc;
}
/* Bordered form */
form {
     
  direction: rtl;
  background-color: #f1f1f1;
  border: 3px solid #f1f1f1;
  border-radius: 10px;
  width: 500px;
  margin: auto;
  margin-top: 170px;
  -webkit-box-shadow: 0 10px 6px -6px #777;
  -moz-box-shadow: 0 10px 6px -6px #777;
  box-shadow: 0 10px 6px -6px #777;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  font-family: IRANSans;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input:focus {
  transition: 0.2s;
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  border: 1px solid rgba(81, 203, 238, 1);
}

/* Set a style for all buttons */
button {
  font-family: IRANSans;
  background-color: #64a5e2;
  color: white;
  opacity: 1;
  transition: 0.3s;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  background-color: #007bec;
  color: white;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 20%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for form on extra small screens */
@media screen and (max-width: 1600px) {
    form {
        margin-top: 80px;
    }
}

h2 {
    font-family: IRANSans-Bold;
}
span {
    color: #007bec;
}
    </style>
</head>
<body>

    <form action="<?= BASE_URL ?>adm.php" method="post">
        <div class="imgcontainer">
          <img src="<?= BASE_URL ?>assets/img/auth-form-avatar.png" alt="Avatar" class="avatar">
          <h2>ورود به پنل مدیریت <span>سون مپ</span></h2>
        </div>
      
        <div class="container">
          <!-- input username -->
          <label for="uname">نام کاربری :</label>
          <input type="text" placeholder="نام کاربری را وارد کنید" name="username" required>
          <!-- input password -->
          <label for="pass">رمز عبور :</label>
          <input type="password" placeholder="پسورد را وارد کنید" name="password" required>
      
          <button type="submit">ورود</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> من رو به خاطر داشته باش.
          </label>
        </div>
      </form> 
</body>
</html>