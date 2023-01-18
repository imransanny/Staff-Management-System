

<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');



* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}

body {
	background: linear-gradient(90deg, #ecedb4, #ffffff);	
	position:fixed; 
    top:0; 
    bottom:0; 
    left:0; 
    right:0; 	
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
}

.screen {		
	background: linear-gradient(90deg, #ffffff, #e5e9a1);		
	position: relative;	
	height: 600px;
	width: 360px;	
	box-shadow: 0px 0px 24px #e9c72e;
margin-left: auto;
margin-right: 8%;

}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #f5f36d;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #ece93c, #f4f8a7);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #ffffff;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
	padding-top: 30px;
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #161a62;
}

.login__input {
	border: none;
	border-bottom: 2px solid #161a62;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #161a62;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 10px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 80%;
	color: #000000;
	box-shadow: 0px 2px 2px #161a62;
	cursor: pointer;
	transition: .2s;
}
.signUp__submit {
	background: #fff;
	
	font-size: 14px;
	margin-left: 20px;
	margin-top: 10px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 60%;
	color: #000000;
	box-shadow: 0px 2px 2px #161a62;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #161a62;
	outline: none;
}
.signUp__submit:active,
.signUp__submit:focus,
.signUp__submit:hover {
	border-color: #161a62;
	outline: none;
}

.button__icon {
	font-size: 30px;
	margin-left: auto;
	color: #120d50;
}

.social-login {	
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #161a62;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #161a62;
	text-decoration: none;	
	text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
	transform: scale(1.5);	
}

nav{
	padding: 5px;
	text-align: center;
	font-size: 25px;
	color: #151779;
font-style: normal;
}
.logo{

	display: block;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	width: 45%;
	padding-left: 30px;
	padding-top: 20px;

}

.pic{

	height: 400px;
	
	width: 80%;
}




</style>

<head>

	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>East West University Staff Management - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">
</head>

<div class="container">

	

	<div class="screen" >
				
		<div class="screen__content">
            
            <div class = "logo">
                <img src = "https://upload.wikimedia.org/wikipedia/commons/1/16/East-west-university-LogoSVG.svg" alt = "logo" >
            </div>
			<form class="login" action = "authentication.php" method = "POST">
            
                <div class="title" >
                    <nav> <h4> ইস্ট ওয়েস্ট ইউনিভার্সিটি স্টাফ ম্যানেজমেন্ট সিস্টেম</h4> </nav>
                 </div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name ="email"  class="login__input" placeholder="ইমেইল">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name = "password" class="login__input" placeholder="পাসওয়ার্ড">
				</div>
				<button type = "submit" name ="login_admin" class="button login__submit">
					
					<span class="button__text" >লগইন করুন</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
							
			</form>
			<div class="social-login">
				<h4>লগইন এর মাধ্যম</h4>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>

            
		</div>		
	</div>

	
	
</div>