
@extends('layouts.app_web')

@section('content')   
		<header class="header-base">
			<div class="container" style="margin-top: 0px; opacity: 1;">
				<h1>{{$halaman}}</h1>
				<ol class="breadcrumb">
					<li><a href="https://www.krakatausteel.com/">Home</a></li>
					<li><a href="#">{{$halaman}}</a></li>
				</ol>
			</div>
		</header>
		<main id="main">
			
			<section class="section-base section-overflow-top" id="section">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="title">
								<h2>{{$kategori}}</h2>
								
								
							</div>
							<p>{!!$data['name']!!}</p>
						</div>
						<div class="col-lg-3 widget">
							<hr class="space visible-md">
							<form class="form-box">
								<div class="input-text-btn">
									<input class="input-text" type="text" placeholder="Search ..."><input type="submit" value="Search" class="btn">
								</div>
							</form>
							<hr class="space-sm">
							<h3>Categories</h3>
							<hr class="space-xs">
							<div class="menu-inner menu-inner-vertical">
								<ul>
									<li>
										<a href="{{url('about?kategori=sekilas')}}">Sekilas KPDP</a>
									</li>
									<li>
										<a href="{{url('about?kategori=visi')}}">Visi Misi</a>
									</li>
									<li>
										<a href="{{url('about?kategori=corporate')}}">Corporate Value</a>
									</li>
									<li>
										<a href="{{url('about?kategori=sertifikat')}}">Sertifikat</a>
									</li>
										
								</ul>
							</div>
							<hr class="space-sm">
							<h3>
							
								Berita Terbaru
													</h3>
							<hr class="space-sm">
							<div class="menu-inner menu-inner-vertical menu-inner-image">
								<ul>
																								<li>
										<a href="#">
											<img src="https://www.krakatausteel.com/public/images/news/" alt="">
											<span>Nov 22, 2020</span>
											Rekrutmen Rekanan Baru Periode ...
										</a>
									</li>
																								<li>
										<a href="#">
											<img src="https://www.krakatausteel.com/public/images/news/" alt="">
											<span>Nov 05, 2020</span>
											Pengumuman Pengadaan Ulang ...
										</a>
									</li>
																								<li>
										<a href="#">
											<img src="https://www.krakatausteel.com/public/images/news/" alt="">
											<span>Oct 01, 2020</span>
											Pengumuman Pengadaan ...
										</a>
									</li>
																								<li>
										<a href="#">
											<img src="https://www.krakatausteel.com/public/images/news/semangatbaru.jpeg" alt="">
											<span>Sep 29, 2020</span>
											Ganti Logo, Krakatau Steel ...
										</a>
									</li>
															</ul>
							</div>
							
						</div>
					</div>
					
				</div>
			</section>
			<section class="section-base section-color" id="section">
				<div class="container">
					<div class="row" data-anima="fade-bottom" data-time="1000">
						<div class="col-lg-6">
							<div class="title">
								
								<h2>Berita Krakatau Steel</h2>
								<p>Berita</p>
															
							</div>
						</div>
						<div class="col-lg-6 align-right align-left-md">
							<hr class="space-sm hidden-md" />
							
							<a href="#" class="btn-text active">Semua Berita</a>
													
						</div>
					</div>
					<hr class="space" />
					<div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
						<div class="grid-box">
														
								
								<div class="grid-item">
									<div class="cnt-box cnt-box-blog-top" data-href="viewnews/2410.html">
										<a href="#" class="img-box">
											<div class="blog-date">
												<span>29</span>
												<span>AUG 2020</span>
											</div>
											<img src="{{url('public/web/images/news/semangatbaru.jpg')}}" alt="" />
										</a>
										<div class="caption">
											<h2>Ganti Logo, Krakatau Steel Mengusung Semangat Baru Untuk Kinerja Lebih ...</h2>
											<ul class="icon-list icon-list-horizontal">
												<li><i class="icon-bookmark"></i><a href="#">Krakatau Steel</a></li>
												<li class="icon-links">
													<a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
													<a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
													<a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a>
												</li>
											</ul>
											<p>
												Jakarta, (28/8) – Memasuki usia 50 tahun, Krakatau Steel memberikan semangat baru dalam meningkatkan kinerja positif. Setelah sekian lama menggunakan
											</p>
										</div>
									</div>
								</div>
								
														
								
								<div class="grid-item">
									<div class="cnt-box cnt-box-blog-top" data-href="viewnews/2409.html">
										<a href="#" class="img-box">
											<div class="blog-date">
												<span>27</span>
												<span>AUG 2020</span>
											</div>
											<img src="{{url('public/web/images/news/newsbaru-01.jpg')}}" alt="" />
										</a>
										<div class="caption">
											<h2>Anak Perusahaan Group Krakatau Steel Raih Laba Positif ...</h2>
											<ul class="icon-list icon-list-horizontal">
												<li><i class="icon-bookmark"></i><a href="#">Krakatau Steel</a></li>
												<li class="icon-links">
													<a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
													<a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
													<a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a>
												</li>
											</ul>
											<p>
												Jakarta (26/8) – Selain induk perusahaan yang tetap berusaha mempertahankan kinerja positif, Anak Perusahaan Krakatau Steel menunjukkan kontribusi menggembirakan dengan
											</p>
										</div>
									</div>
								</div>
								
														
								
								<div class="grid-item">
									<div class="cnt-box cnt-box-blog-top" data-href="viewnews/2408.html">
										<a href="#" class="img-box">
											<div class="blog-date">
												<span>06</span>
												<span>AUG 2020</span>
											</div>
											<img src="{{url('public/web/images/news/news1-01.jpg')}}" alt="" />
										</a>
										<div class="caption">
											<h2>Asosiasi Industri Besi Dan Baja Nasional Resmi Luncurkan Situs Web ...</h2>
											<ul class="icon-list icon-list-horizontal">
												<li><i class="icon-bookmark"></i><a href="#">Krakatau Steel</a></li>
												<li class="icon-links">
													<a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
													<a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
													<a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a>
												</li>
											</ul>
											<p>
												Jakarta (05/08) â€“ Asosiasi Industri Besi dan Baja Nasional/The Indonesian Iron and Steel Industry Association (IISIA) resmi meluncurkan
											</p>
										</div>
									</div>
								</div>
								
													
						</div>
					</div>
				</div>
			</section>
			
			
			
		</main>
@endsection   