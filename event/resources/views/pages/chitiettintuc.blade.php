@extends('layouts.index')
@section('content')
<main>

			<section class="detail-news">
				<div class="container">
					<div class="row">
						<div class="content-news col-lg-9">
                        <h1>{{$chitiet->tieu_de}}</h1>
                        {!!htmlspecialchars_decode($chitiet->noi_dung)!!}
						</div>
						<div class="the-same-news col-lg-3">
                            <div class="list-sanme-news">
								@foreach($danhmuclienquan as $danhmuclienquan)
								<div class="item-same-news"><a href="{{url('pages/chitiettintuc',$danhmuclienquan->id)}}">
										<figure>
											<div class="box-img"><img class="ofc" src="./images/news/{{$danhmuclienquan->banner}}" alt="" srcset=""></div>
											<figcaption>
												<h5>{{$danhmuclienquan->tieu_de}}</h5><span class="time"><?php
														$d=strtotime($danhmuclienquan->created_at);
														echo "" . date("d-m-Y", $d);
														?>
														</span>
														<div class="limit-content-same-news">
															  {!!htmlspecialchars_decode($danhmuclienquan->noi_dung)!!} 
														</div>
											</figcaption>
										</figure></a>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>




@endsection