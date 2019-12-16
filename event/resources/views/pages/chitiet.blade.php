@extends('layouts.index')
@section('content')

<main>
			<section class="product-detail">
				<div class="banner-event">
					<figure><img class="ofc" src="./images/product/{{$chitiet->banner}}" alt="" srcset=""></figure>
				</div>
				<div class="main-intro">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
                            <div class="overview">
									<h1 class="wow fadeInLeft" data-wow-delay=".3s">{{$chitiet->ten_su_kien}}</h1>
									<div class="item time wow fadeInLeft" data-wow-delay=".6s">
                                    <?php $origDate = "$chitiet->ngay_dien_ra";
                                    $newDate = date(" \N\g\à\y\ d, \T\h\á\\n\\g\ m, \N\ă\m\ Y", strtotime($origDate));
                                    echo $newDate;
                                    ?>
                                    </div>
									<div class="item address wow fadeInLeft" data-wow-delay=".9s">{{$chitiet->dia_chi}}</div>
								</div>
								<div class="details-event">
								<div class="desc">
										<div class="title">GIỚI THIỆU</div>
										<div class="CKEditor">
											{!!htmlspecialchars_decode($chitiet->mo_ta)!!}
										</div>

                                    </div>
                                    <div class="ticket-booking">
										<div class="title">THÔNG TIN VÉ</div>
										<div class="list-ticket wow fadeInDown" data-wow-delay=".3s">
											<div class="item">
												<div class="name">HẠNG THƯỜNG</div>
												<div class="price">{{number_format($chitiet->gia_ve)}} VNĐ </div>
												<div class="info-ticket">
													<p>Vị trí:<span>{{$chitiet->vi_tri_ve_thuong}}</span></p>
													<p> Quà tặng (sẽ nhận tại sự kiện):<span>{{$chitiet->qua_tang_thuong}}</span></p>
													<p>Lưu ý:<span>Trên mỗi đơn hàng, quý khách được đặt tối đa 2 vé</span></p>
												</div>
											</div>
											<div class="item">
												<div class="name">HẠNG VIP</div>
												<div class="price">{{number_format($chitiet->gia_ve_vip)}} VND</div>
												<div class="info-ticket">
													<p>Vị trí:<span>{{$chitiet->vi_tri_ve_vip}}</span></p>
													<p> Quà tặng (sẽ nhận tại sự kiện):<span>{{$chitiet->qua_tang_vip}}</span></p>
													<p>Lưu ý:<span>Trên mỗi đơn hàng, quý khách được đặt tối đa 2 vé</span></p>
												</div>
											</div>

										</div>
                                    </div>


                                    <div class="gmap">
										<div class="title">BẢN ĐỒ</div>
										<div class="google-map">
                                        <div id="map2" class="mapouter" style="width: 100% !important;"><div class="gmap_canvas"><iframe width="870" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q={{$chitiet->dia_chi}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.divi-discounts.com">elegant drag & drop builder</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
										</div>

										<!-- <script>
											var locationsObject = {
												inputLocations : [
													{
														lat: 10.807100,
														lng: 106.661638,
														name: 'Ho Chi Minh Headoffice',
														icon: "./images/icons/gmap.svg",
														address: 'Floor 4, Thang Long Building, 29 Thang Long St., Ward 4,  Tan Binh Dist., HCMC, Vietnam.',
														hotLine: '(+84) 903 910 430 - Mr.Linh',
														phone: '(84.28) 3848 7858',
														fax: '(84.28) 3848 7858',
														email: 'npv-saleadmin@npvexpress.com',
														website: 'www.npvexpress.com',
														optimized: false
													}
												],
											}
										</script> -->
									</div>

                                    <div class="organizer">
										<div class="title">NHÀ TỔ CHỨC</div>
										<div class="content wow fadeInDown" data-wow-delay=".3s">
											<div class="org-img"><img style="width: 105px !important;height: 105px !important;margin-right: 10px !important;" class="ofc" src="./images/logo/{{$chitiet->logo}}" alt="" srcset=""></div>
											<div class="desc">
												<p>{{$chitiet->nha_tai_tro}} tổ chức chương trình.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 aside-boxing">
								<div class="box-booking"><a class="btn wow flipInX" href="{{ url('pages/bookingone',$chitiet->id) }}" data-wow-delay=".5s">MUA VÉ NGAY</a>
									<div class="overview">
										<h1>{{$chitiet->ten_su_kien}}</h1>
										<div class="item time"><?php $origDate = "$chitiet->ngay_dien_ra";
                                        $newDate = date(" \N\g\à\y\ d, \T\h\á\\n\\g\ m, \N\ă\m\ Y", strtotime($origDate));
                                        echo $newDate; ?>   <?php $origDate = "$chitiet->thoi_gian";
                                        $newDate = date("\(\ h:i A \)\ ", strtotime($origDate));
                                        echo $newDate;
                                         ?>
                                    </div>
										<div class="item address">{{$chitiet->dia_chi}}</div>
										<div class="item price">Từ {{number_format($chitiet->gia_ve)}} VNĐ</div>
									</div>
									<div class="facebook-button">
										<div class="item">
											<div class="fb-share-button" data-href="https://aevent.web404.xyz/?fbclid=IwAR2SkA9PfLVMSIdO9HU-CgXxxLR3hskQ5S9vnCBVhKMrEHklC8SVT6lGzoY" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FA-event%2Fevent%2Fpublic%2Fpages%2Findex&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
										</div>
										<div class="item">
											<div class="button fb-save" data-uri="https://www.instagram.com/facebook/" data-size="large"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
			</section>
		</main>


@endsection
