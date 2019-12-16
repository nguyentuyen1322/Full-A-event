@extends('layouts.index')
@section('content')
<main>
    <section class="login bg-main">
        <div class="container">
            <div class="box-login">
                <ul class="menu-login-register">
                    <li class="item active"><a href="{{ url('pages/login') }}">ĐĂNG NHẬP</a></li>
                    <li class="item"><a href="{{ url('pages/register') }}">ĐĂNG KÍ</a></li>
                </ul>
                <div class="login-with"><span>LOGIN WITH</span><a href="{{ url('pages/login/google') }}"><img src="images/icons/google.svg" alt="" srcset=""></a><a href="{{$linkloginfb}}"><img src="images/icons/facebook.svg" alt="" srcset=""></a></div>
                <div class="or-login"><span>or</span></div>
                <div class="box-form-login">
                    <form action="pages/login" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user-name">Tên tài khoản hoặc Email:</label>
                            <div class="form-input">
                            <input id="user-name" type="text" placeholder="Username hoặc e-mail" name="email">
                            @if($errors->has('email'))
                                <span class="error">
                                    {{$errors->first('email')}}
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass">Mật khẩu:</label>
                            <div class="form-input">
                            <input id="pass" type="password" placeholder="Password" name="password">
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

@endsection