<footer>
    <div class="container">
        <div class="row list-info-company">
            <div class="col-lg-6">
                <h5>HOGASH STUDIOS</h5>
                <p>Were a full-service digital agency that believes being a Favorite brand is more valuable than just being a Famous one. We craft beautifully useful, connected ecosystems that grow businesses and build enduring relationships between brands and humans.</p>
            </div>
            <div class="col-lg-2">
                <h5>COMPANY</h5>
                <ul class="list-item-footer">
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Our Blog</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Instagram</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Snapchat</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Facebook</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Twitter</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Dribbble</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5>MEMBER</h5>
                <ul class="list-item-footer">
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Home</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">About</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Pricing</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Blog</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Services</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Shop</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5>FOLLOW</h5>
                <ul class="list-item-footer">
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Account</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Billing</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Membership</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Receipt</a></li>
                    <li class="item-footer"><a href="{{ url('pages/erorr') }}">Invoice</a></li>
                </ul>
            </div>
        </div>
        <div class="coppy-right">
            <h3>@ 2020 <a href="https://www.facebook.com/A-Event-117903549608295/" target="_blank"><span>A EVENT | ALL COPYRIGHT BY A EVENT</span></a></h3>
            <p>This is Project of Hùng, Tuyến, Huy, Sơn.</p>
        </div>
    </div>
</footer>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
    FB.init({
    xfbml            : true,
    version          : 'v4.0'
    });
    };
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    window.fbAsyncInit = function() {
          FB.init({
            appId      : '{420853728859282}',
            cookie     : true,
            xfbml      : true,
            version    : '{5.0}'
          });

          FB.AppEvents.logPageView();

        };

        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
</script>

    <div class="fb-customerchat" attribution="setup_tool" page_id="117903549608295" theme_color="#ffc300" logged_in_greeting="A Event xin chào, chúng tôi giúp gì được cho bạn ?" logged_out_greeting="A Event xin chào, chúng tôi giúp gì được cho bạn ?"></div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?&amp;key=AIzaSyCHvmyTralDp2Y0m7zEiN185u1vtArcC5s&amp;libraries=places"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=420853728859282&autoLogAppEvents=1"></script>
    <script type="text/javascript" src="js/core.min.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script> -->
    <script type="text/javascript" src="js/validate.js"></script>
    <script type="text/javascript" src="js/filters.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    @yield('script')
</body>
</html>
