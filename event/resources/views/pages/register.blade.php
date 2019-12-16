@extends('layouts.index')
@section('content')
<main>
    <section class="register bg-main">
        <div class="container">
            <div class="box-register">
                <ul class="menu-login-register">
                    <li class="item"><a href="{{ url('pages/login') }}">ĐĂNG NHẬP</a></li>
                    <li class="item active"><a href="{{ url('pages/register') }}">ĐĂNG KÍ</a></li>
                </ul>
                <div class="box-form-register">
                    <form action="pages/register" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="email">Email *</label>
                                <div class="form-input">
                                    <input id="email" type="text" placeholder="Địa chỉ email *" name="email">
                                       @if($errors->has('email'))
                                       <span class="error">
                                           {{$errors->first('email')}}
                                        </span>
                                       @endif
                                  
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="user-name">Tài khoản *</label>
                                <div class="form-input">
                                    <input id="user-name" type="text" placeholder="Tên tài khoản *" name="name">
                                    @if($errors->has('name'))
                                       <span class="error">
                                           {{$errors->first('name')}}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="pass">Mật khẩu *</label>
                                <div class="form-input">
                                    <input id="pass" type="password" placeholder="Mật khẩu *" name="password">
                                    @if($errors->has('password'))
                                        <span class="error">
                                            {{$errors->first('password')}}
                                        </span>
                                     @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="repass">Nhập lại mật khẩu *</label>
                                <div class="form-input">
                                    <input id="repass" type="password" placeholder="Nhập lại mật khẩu *" name="password">
                                    @if($errors->has('password'))
                                        <span class="error">
                                            {{$errors->first('password')}}
                                        </span>
                                     @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="address">Số điện thoại *</label>
                                <div class="form-input">
                                    <input id="address" type="phone" placeholder="Số điện thoại" name="dien_thoai">
                                    @if($errors->has('dien_thoai'))
                                    <span class="error">
                                        {{$errors->first('dien_thoai')}}
                                    </span>
                                 @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="address">Địa chỉ</label>
                                <div class="form-input">
                                    <input id="address" type="text" placeholder="Địa chỉ" name="dia_chi">
                                    @if($errors->has('dia_chi'))
                                    <span class="error">
                                        {{$errors->first('dia_chi')}}
                                    </span>
                                 @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="address">Ngày sinh *</label>
                                <div class="form-input">
                                    <input type="date" name="ngay_sinh">
                                    @if($errors->has('ngay_sinh'))
                                    <span class="error">
                                        {{$errors->first('ngay_sinh')}}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="address">Giới tính *</label>
                                <div class="form-input">
                                    <select id="vip" name="gioi_tinh">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                    @if($errors->has('gioi_tinh'))
                                    <span class="error">
                                        {{$errors->first('gioi_tinh')}}
                                    </span>
                                 @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="choose-file" for="file-avatar" style="margin-bottom: 0 !important;">Chọn ảnh đại diện</label>
                                <div class="form-input">
                                    <input id="file-avatar" type="file" hidden name="hinh">
                                    @if($errors->has('hinh'))
                                        <span class="error" style="margin-top: 10px !important">
                                            {{$errors->first('hinh')}}
                                        </span>
                                    @endif
                                </div>
                                <p></p>
                            </div>
                            <div class="form-group col-lg-6">
                                <div class="form-input">
                                    <select id="vip" name="vip">
                                        <option value="Normal">Normal</option>
                                        <option value="V.I.P">V.I.P</option>
                                    </select>
                                    @if($errors->has('vip'))
                                    <span class="error">
                                        {{$errors->first('vip')}}
                                    </span>
                                 @endif
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}" style="text-align: -webkit-center;"></div>

                                @if($errors->has('g-recaptcha-response'))
                                    <span class="error" style="text-align: center;display: inherit;color: #bc2e31;">
                                        {{$errors->first('g-recaptcha-response')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button class="btn" type="submit">ĐĂNG KÝ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection