
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>A-Event | Admin Login</title>
        <base href="{{ asset('') }}" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" type="image/png" href="images/favicon/favicon.png">
		<style>#loading{-webkit-transition:1.5s;-o-transition:1.5s;position:fixed;top:0;right:0;bottom:0;left:0;z-index:99999;transition:1.5s;background:#000;width:100%;height:100%}#loading #progress{-webkit-transition:1.5s;-o-transition:1.5s;display:none;transition:1.5s;background:#000;width:0;height:1px}#loading #progress,#loading .progstat-wrapper{-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);position:absolute;top:50%;transform:translateY(-50%)}#loading .progstat-wrapper{margin-top:0;width:100%;color:#fff;font-size:14px;font-weight:300;letter-spacing:3px;text-align:center}#loading .logo-loader{-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);margin-top:-100px;width:150px;height:150px}</style>
		<script>!function(){function n(n){return document.getElementById(n)}document.addEventListener("DOMContentLoaded",function(){var e=n("loading"),t=n("progress"),o=n("progstat"),r=document.images,i=0,d=r.length;if(0==d)return u();function a(){var n=100/d*(i+=1)<<0;if(t.style.width=n,o.innerHTML=n,i===d)return u()}function u(){e.style.opacity=0,setTimeout(function(){e.style.display="none";var n=document.getElementById("loading");n.parentNode.removeChild(n)},1500)}for(var c=0;c<d;c++){var s=new Image;s.onload=a,s.onerror=a,s.src=r[c].src}},!1)}();</script>
		<link rel="stylesheet" href="css_admin/dist/css/core.min.css">
		<link rel="stylesheet" href="css_admin/dist/css/main.min.css"><link href="https://fonts.googleapis.com/css?family=K2D&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pangolin&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="loading">
			<div class="logo-loader"><img src="images/icons/loading.gif" alt=""></div>
			<div class="progstat-wrapper">Loading: <span id="progstat">0</span>%</div>
			<div id="progress"></div>
		</div>
		<main>
			<section class="admin-login bg-main">
				<div class="container">	
					<div class="box-login">
						@if(session('thongbao'))
							<p style="text-align: center !important;margin-bottom: 10px !important;text-align: center !important;margin-top: 10px !important;color: #ffd800; !important">
									{{session('thongbao')}}
							</p>
						@endif
						<h1>Admin - A-EVENT</h1>
						<div class="box-form-login">
							<form action="admin/login" method="POST">
								@csrf
								<div class="form-group">
									<label for="user-name">Admin Tên:</label>
									<div class="form-input">
										<input id="user-name" type="text" placeholder="Nhập tên admin" name="name">
										@if($errors->has('name'))
											<span class="error">
												{{$errors->first('name')}}
											</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label for="pass">Mật khẩu:</label>
									<div class="form-input">
										<input id="pass" type="password" placeholder="Nhập mật khẩu" name="password">
										@if($errors->has('password'))
											<span class="error">
												{{$errors->first('password')}}
											</span>
										@endif
									</div>
								</div>
								<button class="btn" type="submit">ĐĂNG NHẬP</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?&amp;key=AIzaSyCHvmyTralDp2Y0m7zEiN185u1vtArcC5s&amp;libraries=places"></script>
		<script type="text/javascript" src="css_admin/dist/js/core.min.js"></script>
		<script type="text/javascript" src="css_admin/dist/js/main.min.js"></script>
		<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
	</body>
</html>