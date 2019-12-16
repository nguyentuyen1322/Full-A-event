<!DOCTYPE html>
<html lang="en">
	<head>
		<title>A Event | Trang Chủ</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" type="image/png" href="images/favicon/favicon.png">
		<style>#loading{-webkit-transition:1.5s;-o-transition:1.5s;position:fixed;top:0;right:0;bottom:0;left:0;z-index:99999;transition:1.5s;background:#000;width:100%;height:100%}#loading #progress{-webkit-transition:1.5s;-o-transition:1.5s;display:none;transition:1.5s;background:#000;width:0;height:1px}#loading #progress,#loading .progstat-wrapper{-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);position:absolute;top:50%;transform:translateY(-50%)}#loading .progstat-wrapper{margin-top:0;width:100%;color:#fff;font-size:14px;font-weight:300;letter-spacing:3px;text-align:center}#loading .logo-loader{-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);margin-top:-100px;width:150px;height:150px}</style>
		<script>!function(){function n(n){return document.getElementById(n)}document.addEventListener("DOMContentLoaded",function(){var e=n("loading"),t=n("progress"),o=n("progstat"),r=document.images,i=0,d=r.length;if(0==d)return u();function a(){var n=100/d*(i+=1)<<0;if(t.style.width=n,o.innerHTML=n,i===d)return u()}function u(){e.style.opacity=0,setTimeout(function(){e.style.display="none";var n=document.getElementById("loading");n.parentNode.removeChild(n)},1500)}for(var c=0;c<d;c++){var s=new Image;s.onload=a,s.onerror=a,s.src=r[c].src}},!1)}();</script>
        <base href="{{ asset('') }}" />
        <link rel="stylesheet" href="css/core.min.css">
		<link rel="stylesheet" href="css/main.min.css"><link href="https://fonts.googleapis.com/css?family=K2D&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pangolin&display=swap" rel="stylesheet">
        <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>


        <style>
            .gmap_canvas{
                width: 100% !important;
                height: auto !important;
            }
            .limit-line p{
                -webkit-line-clamp: 3 !important;
                height: 90px;
                color: #8d8f90;
                font-size: 20px;
			}
			.comment{
				display: flex;
				justify-content: center;
				align-items: center;
				margin: 0 auto;
				padding: 0;
			}
			.comment img{
				border: 2px solid #ffd800;
				border-radius: 50%;
				width: 100px;
				height: 100px;
				display: block;
			}
			.comment_name{
			    padding: 5px 0px;
				width: 15%;
				display: flex;
				position: relative;
				justify-content: center;
				align-items: center;
				border-top: 2px solid #ffd800;
				margin: 0 auto;
				text-align: center;
			}
			.text-comment{
				@media (max-width: 575px){
					font-size: 13px;
				}
			}
        </style>
	</head>
	<body>
		<div id="loading">
			<div class="logo-loader"><img src="images/icons/loading.gif" alt=""></div>
			<div class="progstat-wrapper">Loading: <span id="progstat">0</span>%</div>
			<div id="progress"></div>
		</div>
		<header>
			<div class="container">
				<div class="row">
					<div class="left-menu">
						<div class="logo"><a href="{{ url('pages/index') }}"><img src="images/logo.png" alt=""></a></div>
					</div>
					<div class="add-event"><a href="{{ url('pages/addevent') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" class="sc-ckVGcZ cRPCZL"><g fill="none" fill-rule="evenodd"><circle id="oval-plus" class="sc-dxgOiQ kSEybs" stroke-width="2" cx="12" cy="12" r="11"></circle><path d="M6,12 L18,12" id="Line" class="sc-dxgOiQ kSEybs" stroke-width="2" stroke-linecap="square"></path><path d="M12,6 L12,18" id="Line2" class="sc-dxgOiQ kSEybs" stroke-width="2" stroke-linecap="square"></path></g></svg><span>ADD A EVENT</span></a></div>
					<div class="right-menu">
						@if(!Auth::user() && !isset($loginfb) && !isset($logingg))
						<div class="button-login"><a href="{{ url('pages/login') }}"><svg class="sc-eNPDpu cjclFo" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><g transform="translate(1 1)" stroke="#fff" stroke-width="2" fill="none"><circle cx="12" cy="12" r="12"></circle><path d="M15.65 6.78a3.56 3.56 0 0 0-3.5-3.65H12a3.56 3.56 0 0 0-3.65 3.5v.15c0 .42.42 2.45.42 2.45.3 1.78 1.46 3.3 3.23 3.3s2.92-1.47 3.23-3.3c0 0 .42-2.03.42-2.45zM3.13 20.09v-.37c0-1.62 1.2-2.82 2.82-3.23l6.05-1.1 6.1 1.15c1.57.47 2.77 1.56 2.77 3.23v.37"></path></g></svg><span>Login</span></a></div>
						@endif
						@if(Auth::user())
						<div class="avatar">
							<figure>
								<div class="box-img"><img class="ofc" src="images/user/{{Auth::user()->hinh}}" alt="A-event"></div>
								<figcaption>
								<h5>{{Auth::user()->name}}</h5>
								</figcaption>
							</figure>
							<div id="sub-information">
								<div class="close"><svg width="26" height="24" xmlns="http://www.w3.org/2000/svg"><g><rect fill="none" id="canvas_background" height="26" width="28" y="-1" x="-1"/></g><g><path fill="#91918e" stroke="null" id="svg_2" d="m13.475695,0.194444c-6.483507,0 -11.788195,5.304688 -11.788195,11.788195c0,6.483507 5.304688,11.788195 11.788195,11.788195s11.788195,-5.304688 11.788195,-11.788195c0,-6.483507 -5.304688,-11.788195 -11.788195,-11.788195zm5.776215,15.914063l-1.650347,1.650347l-4.125868,-4.125868l-4.125868,4.125868l-1.650347,-1.650347l4.125868,-4.125868l-4.125868,-4.125868l1.650347,-1.650347l4.125868,4.125868l4.125868,-4.125868l1.650347,1.650347l-4.125868,4.125868l4.125868,4.125868z"/></g></svg></div>
								<figure>
									<div class="box-img"><img class="ofc" src="images/user/{{Auth::user()->hinh}}" alt="A-event"></div>
									<figcaption>
										<h5>{{Auth::user()->name}}<span>{{Auth::user()->vip}}</span></h5>
									</figcaption>
								</figure>
								<ul class="list-item">
									<a href="{{url('pages/eventcreate')}}">
									<li class="item">Sự kiện đã tạo</li></a><a href="{{ url('pages/infouser') }}">
									<li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
									<li class="item">Đăng xuất</li></a>
								</ul>
							</div>
						</div>
						@endif
						@if(isset($loginfb))
						<div class="avatar">
							<figure>
								<div class="box-img"><img class="ofc" src="{{$loginfb->hinh}}" alt="A-event"></div>
								<figcaption>
								<h5>{{$loginfb->name}}</h5>
								</figcaption>
							</figure>
							<div id="sub-information">
								<div class="close"><svg width="26" height="24" xmlns="http://www.w3.org/2000/svg"><g><rect fill="none" id="canvas_background" height="26" width="28" y="-1" x="-1"/></g><g><path fill="#91918e" stroke="null" id="svg_2" d="m13.475695,0.194444c-6.483507,0 -11.788195,5.304688 -11.788195,11.788195c0,6.483507 5.304688,11.788195 11.788195,11.788195s11.788195,-5.304688 11.788195,-11.788195c0,-6.483507 -5.304688,-11.788195 -11.788195,-11.788195zm5.776215,15.914063l-1.650347,1.650347l-4.125868,-4.125868l-4.125868,4.125868l-1.650347,-1.650347l4.125868,-4.125868l-4.125868,-4.125868l1.650347,-1.650347l4.125868,4.125868l4.125868,-4.125868l1.650347,1.650347l-4.125868,4.125868l4.125868,4.125868z"/></g></svg></div>
								<figure>
									<div class="box-img"><img class="ofc" src="{{$loginfb->hinh}}" alt="A-event"></div>
									<figcaption>
										<h5>{{$loginfb->name}}<span>Vip</span></h5>
									</figcaption>
								</figure>
								<ul class="list-item">
									<a href="{{url('pages/eventcreate')}}">
									<li class="item">Sự kiện đã tạo</li></a><a href="{{ url('pages/infouser') }}">
									<li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
									<li class="item">Đăng xuất</li></a>
								</ul>
							</div>
						</div>
						@endif
						@if(isset($logingg))
						<div class="avatar">
							<figure>
								<div class="box-img"><img class="ofc" src="{{$logingg->hinh}}" alt="A-event"></div>
								<figcaption>
								<h5>{{$logingg->name}}</h5>
								</figcaption>
							</figure>
							<div id="sub-information">
								<div class="close"><svg width="26" height="24" xmlns="http://www.w3.org/2000/svg"><g><rect fill="none" id="canvas_background" height="26" width="28" y="-1" x="-1"/></g><g><path fill="#91918e" stroke="null" id="svg_2" d="m13.475695,0.194444c-6.483507,0 -11.788195,5.304688 -11.788195,11.788195c0,6.483507 5.304688,11.788195 11.788195,11.788195s11.788195,-5.304688 11.788195,-11.788195c0,-6.483507 -5.304688,-11.788195 -11.788195,-11.788195zm5.776215,15.914063l-1.650347,1.650347l-4.125868,-4.125868l-4.125868,4.125868l-1.650347,-1.650347l4.125868,-4.125868l-4.125868,-4.125868l1.650347,-1.650347l4.125868,4.125868l4.125868,-4.125868l1.650347,1.650347l-4.125868,4.125868l4.125868,4.125868z"/></g></svg></div>
								<figure>
									<div class="box-img"><img class="ofc" src="{{$logingg->hinh}}" alt="A-event"></div>
									<figcaption>
										<h5>{{$logingg->name}}<span>Vip</span></h5>
									</figcaption>
								</figure>
								<ul class="list-item">
									<a href="{{url('pages/eventcreate')}}">
									<li class="item">Sự kiện đã tạo</li></a><a href="{{ url('pages/infouser') }}">
									<li class="item">Thông tin tài khoản</li></a><a href="{{ url('pages/dangxuat') }}">
									<li class="item">Đăng xuất</li></a>
								</ul>
							</div>
						</div>
						@endif
						<div class="button-search"><a href="{{ url('pages/search') }}"><svg width="26" height="26" xmlns="http://www.w3.org/2000/svg"><g><rect fill="none" id="canvas_background" height="28" width="28" y="-1" x="-1"/></g><g><g stroke="null" id="svg_8"><path fill="#ffffff" stroke="null" id="svg_4" d="m23.537278,25.717651c-0.574281,0 -1.148562,-0.255236 -1.595225,-0.63809l-7.018988,-7.018988c-0.255236,-0.255236 -0.255236,-0.63809 0,-0.893326s0.63809,-0.255236 0.893326,0l7.018988,7.018988c0.382854,0.382854 1.020944,0.382854 1.339989,0c0.382854,-0.382854 0.382854,-1.020944 0,-1.339989l-7.018988,-7.018988c-0.255236,-0.255236 -0.255236,-0.63809 0,-0.893326s0.63809,-0.255236 0.893326,0l7.018988,7.018988c0.893326,0.893326 0.893326,2.297123 0,3.190449c-0.382854,0.319045 -0.957135,0.574281 -1.531416,0.574281z"/><g stroke="null" id="svg_7"><path fill="#ffffff" stroke="null" id="svg_2" d="m10.073583,19.911034c-5.423763,0 -9.826583,-4.40282 -9.826583,-9.826583s4.40282,-9.890392 9.826583,-9.890392s9.890392,4.466629 9.890392,9.890392c0,0.765708 -0.063809,1.531416 -0.255236,2.297123c-0.063809,0.319045 -0.446663,0.574281 -0.765708,0.446663c-0.319045,-0.063809 -0.574281,-0.446663 -0.446663,-0.765708c0.127618,-0.63809 0.255236,-1.27618 0.255236,-1.978078c0,-4.721865 -3.828539,-8.614213 -8.614213,-8.614213s-8.614213,3.892348 -8.614213,8.614213s3.828539,8.614213 8.614213,8.614213c0.701899,0 1.339989,-0.063809 2.041887,-0.255236c0.319045,-0.063809 0.701899,0.127618 0.765708,0.446663c0.063809,0.319045 -0.127618,0.701899 -0.446663,0.765708c-0.829517,0.191427 -1.595225,0.255236 -2.424741,0.255236z"/><path fill="#ffffff" stroke="null" id="svg_6" d="m10.073583,17.422483c-4.019966,0 -7.338033,-3.318067 -7.338033,-7.338033s3.318067,-7.338033 7.338033,-7.338033s7.338033,3.318067 7.338033,7.338033s-3.254258,7.338033 -7.338033,7.338033zm0,-13.399886c-3.318067,0 -6.061853,2.743786 -6.061853,6.061853s2.743786,6.061853 6.061853,6.061853s6.061853,-2.743786 6.061853,-6.061853s-2.679977,-6.061853 -6.061853,-6.061853z"/></g></g></g></svg></a></div>
					</div>
				</div>
			</div>
		</header>
