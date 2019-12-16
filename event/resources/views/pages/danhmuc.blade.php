@extends('layouts.index')
@section('content')
{{-- <div class="cta filter">
	<a class="blue-btn btn" data-filter="all" href="#" >All</a>
	<a class="blue-btn btn" data-filter="cat1" href="#" role="button">Cat1</a>
	<a class="blue-btn btn" data-filter="cat2" href="#" role="button">Cat2</a>
	<a class="blue-btn btn" data-filter="cat3" href="#" role="button">Cat3</a>
  
  
	<ul class="boxes">
	  <li data-cat="cat1,cat2">cat1 & cat2</li>
	  <li data-cat="cat2">cat2</li>
	  <li data-cat="cat3">cat3</li>
	</ul>
</div> --}}
	<main>
		<section class="list-product filter">
			<div class="banner-search">
				<figure><img class="ofc" src="./images/banner/search-banner.png" alt=""></figure>
				<form action="pages/danhmuc/{{$id}}" method="POST" autocomplete="off">
					@csrf
					<div class="form-group">
						<input type="text" placeholder="Tìm sự kiện, khóa học, khu vui chơi..." name="timkiem">
					</div>
				</form>
			</div>
			<div class="title-catalog wow fadeInLeft" data-wow-delay=".3s" style="margin-top: 50px !important;visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;-webkit-box-align: center !important;-ms-flex-align: center !important;display: -webkit-box !important;display: -ms-flexbox !important;display: flex !important;align-items: center !important;"><a href="http://localhost/A-event/event/public/pages/danhmuc/1"><img class="icon" src="images/icons/add.svg" alt="" srcset="" style="cursor: pointer;
				width: 38px;height: 38px;margin-right: 10px;margin-left: 1.875rem;"></a>
				<div class="name-catalog"><span style="color: #a0a0a0;font-family: Ubuntu,sans-serif;font-size: 12px;font-weight: 700;">A . Event - loại sự kiện</span>
				<a href="http://localhost/A-event/event/public/pages/danhmuc/1">
					<h3 style="color: #ffd800;font-family: Saira Stencil One,cursive;font-size: 24px;line-height: 1.2;text-decoration: underline">{{$danhmuc->ten_loai}}</h3>
				</a>
			</div>
			</div>
			<div class="list-item" style="margin-top: 50px !important;">
				<div class="container">
					<div class="row">
						@foreach($sukien as $sukien)
						<div class="col-lg-4 boxes">
							<a href="{{url('pages/chitiet',$sukien->id)}}">
								<div class="item-event">
									<figure>
										<div class="box-img"><img class="ofc" src="./images/product/{{$sukien->banner}}" alt="" srcset=""></div>
										<figcaption>
											<h3>{{$sukien->ten_su_kien}}</h3>
											<div class="info-event">
												<div class="item">
													<h5>Từ:<span>{{$sukien->gia_ve}}</span></h5>
												</div>
												<div class="item" data-cat="hcm">
													<h5>Địa chỉ:<span>{{$sukien->dia_chi}}</span></h5>
												</div>
												<div class="item" data-cat="hanoi">
													<h5>Thời gian:<span>{{$sukien->ngay_dien_ra}}</span></h5>
												</div>
												<div class="item">
													<h5>Trạng thái:<span>Mở bán</span></h5>
												</div>
											</div>
										</figcaption>
									</figure>
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
