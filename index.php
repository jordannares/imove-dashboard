
<?php @include"header.php"; ?>

<div id="wrapper">
	<!-- header -->
	<div class="header-wrapper fixed-top">
	<div class="header-top">

		<div class="header-container">
			<div class="navbar-header">
				<a href="#" class="disIB lfloat">
					<img class="logo" src="resources/images/imove-logo.svg">
				</a>
			</div>

			<!-- <nav class="nav navbar-nav"> -->
			<ul class="nav navbar-top-links float-right">
				<li class="item-list">
					<a href="javascript:void(0);" class="link-nav">
						<span class="navlink-bg">
							<i class="top-icon nav-notice" ></i>
						</span>
						<span class="notice"></span>
					</a>
					<ul class="notice_tips dropdown-menu">
						<li><a class="dropdown-item" href="#">セキュアではありません。コチラから2段階認証を設定してください。</a></li>
						<li><a class="dropdown-item" href="#">セキュアではありません。コチラから2段階認証を設定してください。</a></li>
						<li><a class="dropdown-item" href="#">セキュアではありません。コチラから2段階認証を設定してください。</a></li>
					</ul>
				</li> 
				<li class="item-list">
					<a href="javascript:void(0);" class="link-nav">
						<i class="top-icon nav-user"></i>
						123456
					</a>
					<ul class="notice_tips dropdown-menu">
						<li><a class="dropdown-item" href="#">企業 様</a></li>
						<li><a class="dropdown-item" href="#">Notice</a></li>
						<li><a class="dropdown-item" href="#">General Settings</a></li>
						<li><a class="dropdown-item" href="#">Change Password</a></li>
						<li><a class="dropdown-item" href="#">KYC Verification</a></li>
						<li><a class="dropdown-item" href="#">認証アプリ登録</a></li>
						<li><a class="dropdown-item" href="#">認証機能設定</a></li>
					</ul>
				</li>
				<li class="item-list">
					<a href="javascript:void(0);" class="link-nav">
						<i class="top-icon nav-support"></i>
						<span class="badge badge-danger support-badge">5</span>
					</a>
				</li>
				<li class="item-list">
					<a href="javascript:void(0);" class="link-nav">
						<i class="top-icon nav-power"></i>
					</a>
				</li>

				<li class="item-list ">
					<div class="m-toggler-wrapper">
						<a href="javascript:void(0)" class="nav-toggler m-open-btn">
							<i class="b-close ti-menu"></i>
						</a>
					</div>
				</li>


			</ul>

			<!-- 	</nav> -->
			<!-- collapse button -->
			<!-- <div class="m-toggler-wrapper">
				<a href="javascript:void(0)" class="nav-toggler m-open-btn">
					<i class="b-close ti-menu"></i>
				</a>
			</div> -->

		</div>
	</div> <!-- end of header-top --> 

	<!--======================================= 
					mobile menu
	=========================================== -->
	<aside class="left-sidebar">
		<div class="menu-sidebar">
			<ul class="sidenav-items-link">
				<li class="sidenav-link-list">
					<a href="#"><i class="sidenav-icon nav-dashboard"></i>Dashboard</a>
				</li>
				<li class="sidenav-link-list">
					<a href="#"><i class="sidenav-icon nav-withdrawal"></i>Withdrawal</a>
				</li>
				<li class="sidenav-link-list">
					<a href="#"><i class="sidenav-icon nav-deposit"></i>Deposit</a>
				</li>
				<li class="sidenav-link-list">
					<a href="#"><i class="sidenav-icon nav-card"></i>Card<span class="side-arrow arrow-current"></span></a>
					<ul class="nav-bar-main dropdown-sidemenu">
						<li class="nav-item-list"><a href="#" class="dropdown-item">Card Details</a></li>
						<li class="nav-item-list"><a href="#" class="dropdown-item">Transaction History</a></li>
					</ul>

				</li>
				<li class="sidenav-link-list">
					<a href="#"><i class="sidenav-icon nav-exchange"></i>Exchange</a>
				</li>
				<li class="sidenav-link-list">
					<a href="#"><i class="sidenav-icon nav-settings"></i>Settings<span class="side-arrow arrow-current"></span></a>
					<ul class="nav-bar-main dropdown-sidemenu">
						<li class="nav-item-list"><a href="#" class="dropdown-item">Card Details</a></li>
						<li class="nav-item-list"><a href="#" class="dropdown-item">Transaction History</a></li>
					</ul>
					<!-- <ul class="nav-bar-main dropdown-menu">
						<li class="nav-item-list"><a href="#" class="dropdown-item">Settings 1</a></li>
						<li class="nav-item-list"><a href="#" class="dropdown-item">Settings 2</a></li>
						<li class="nav-item-list"><a href="#" class="dropdown-item">Settings 3</a></li>
					</ul> -->
				</li>
				
			</ul>
		</div>
	</aside>
	<!-- mobile menu -->

	<div class="cb"></div>

	<!--======================================= 
				main navigation menu
	=========================================== -->
	<div class="nav-left">
		<div class="nav-items d-flex">
			<ul class="nav-items-link">
				<li class="link_list">
					<a href=""><i class="nav-icon nav-dashboard"></i>Dashboard</a>
				</li>
				<li class="link_list">
					<a href=""><i class="nav-icon nav-withdrawal"></i>Withdrawal</a>
				</li>
				<li class="link_list">
					<a href=""><i class="nav-icon nav-deposit"></i>Deposit</a>
				</li>
				<li class="link_list">
					<a href=""><i class="nav-icon nav-card"></i>Card</a>
					<ul class="nav-bar-main dropdown-menu">
						<li class="nav-item-list"><a href="#" class="dropdown-item">Card Details</a></li>
						<li class="nav-item-list"><a href="#" class="dropdown-item">Transaction History</a></li>
					</ul>
				</li>
				<li class="link_list">
					<a href=""><i class="nav-icon nav-exchange"></i>Exchange</a>
				</li>
				<li class="link_list">
					<a href=""><i class="nav-icon nav-settings"></i>Settings</a>
					<ul class="nav-bar-main dropdown-menu">
						<li class="nav-item-list"><a href="#" class="dropdown-item">Settings 1</a></li>
						<li class="nav-item-list"><a href="#" class="dropdown-item">Settings 2</a></li>
						<li class="nav-item-list"><a href="#" class="dropdown-item">Settings 3</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>

	</div>
	<!--  End of main navigation menu -->
	<!-- End of header -->

	<div class="main-wrapper">

		
		<div class="container-fluid mt-4">
			<div class="row">

				<!-- col 1 -->
				<div class="col-lg-8 col-md-12">
					<div class="row">

						<div class="col-lg-4 col-md-12">
							<div class="card portfolio">
								<div class="card-body">
									<h1 class="card-title text-center">Portfolio</h1>

									<div id="chart"></div>
										
									<div class="panel-body mt-0 pt-0">
									</div>
									
									<h2 class="text-center pt-4 pb-1 mb-0">$ 123, 456, 789</h2>
								</div>
							</div>
						</div>

						<div class="col-lg-8 col-md-12 mobile-t-20">
							<div class="card" style="overflow: hidden; position: relative;">
								<div class="card-body pb-0">
									<h4 class="card-title text-center">History</h4>
									<hr class="hr-red mb-4">

										<div class="card-body-inner d-flex">

											<div class="v-menu-wrapper">
												<ul class="nav-menu-v">
													<li>
														<a href="#"><i class="nav-icon-h deposit-icon"></i></a>
													</li>
													<li>
														<a href="#"><i class="nav-icon-h withdraw-icon"></i></a>
													</li>
													<li>
														<a href="#"><i class="nav-icon-h return-icon"></i></a>
													</li>
												</ul>
											</div>

											<ul class="history-list">
												<li>
													<div class="crypnum">
														<i class="btc-icon"></i>
														 000.123456789
													</div>
													<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
												</li>
												<li>
													<div class="crypnum">
														<i class="usd-icon"></i>
														 000.123456789
													</div>
													<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
												</li>
												<li>
													<div class="crypnum">
														<i class="btc-icon"></i>
														 000.123456789
													</div>
													<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
												</li>
												<li>
													<div class="crypnum">
														<i class="usd-icon"></i>
														 000.123456789
													</div>
													<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
												</li>
												<li>
													<div class="crypnum">
														<i class="usd-icon"></i>
														 000.123456789
													</div>
													<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
												</li>
												

											</ul>

										</div>


								</div>
								<div class="card-body p-0 card-bottom">
									<ul class="nav-menu-h">
										<li>
											<a href="#"><i class="nav-icon-h deposit-icon"></i></a>
										</li>
										<li>
											<a href="#"><i class="nav-icon-h withdraw-icon"></i></a>
										</li>
										<li>
											<a href="#"><i class="nav-icon-h return-icon"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>


						<!-- news -->
						<div class="col-md-12 mt-4">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">News</h4>
									<ul class="news">
										<li>
											<div class="bg-light-info ml-0">
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
											</div>
											<span class="text-muted">2015/05/20</span>
										</li>
										<li>
											<div class="bg-light-info">
												 Sed ut perspiciatis unde omnis iste natus error sit.
											</div>
											<span class="text-muted">2015/05/20</span>
										</li>
										<li>
											<div class="bg-light-info">
												 At vero eos et accusamus et iusto odio dignissimos ducimus qui.
											</div>
											<span class="text-muted">2015/05/20</span>
										</li>
										<li>
											<div class="bg-light-info">
												 At vero eos et accusamus et iusto odio dignissimos ducimus qui.
											</div>
											<span class="text-muted">2015/05/20</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- end of col 1 -->

				<!-- col 2 Aside -->
				<div class="col-lg-4 col-md-12 mobile-t-20">
					<div class="row">
						<div class="col-md-12 mb-4 mt-0 pt-0">
							<!-- <div class="slider-wrapper"> -->
								
							<h4 class="card-slide-title text-center mb-3">Card</h4>
							<div class="swiper-container">
								
							    <div class="swiper-wrapper">
							      	<div class="card swiper-slide iusecard">
							      		<div class="card-body w-100">
											<div class="d-flex">
												<div class="stats w-100">
													<div class="card-top">
														<img class="card-logo" src="resources/images/iuse-logo.png">
														<a href="#" class="btn btn-rounded btn-outline font-14 btn-card-top text-light">残高確認</a>
													</div>
													<div class="cb"></div>
													<h4 class="text-center my-4 text-light">**** **** **** 1234</h4>
													<div class="text-center">
														<a href="" class="btn btn-rounded btn-outline font-14 btn-card">入金</a>
													</div>
												</div>
											</div>
										</div>
							  		</div>
							      	<div class="card swiper-slide cspcard">
							      		<div class="card-body w-100">
											<div class="d-flex">
												<div class="stats w-100">
													<div class="card-top">
														<img class="card-logo" src="resources/images/csplogo-card.png">
														<a href="#" class="btn btn-rounded btn-outline font-14 btn-card-top text-light">残高確認</a>
													</div>
													<div class="cb"></div>
													<h4 class="text-center my-4 text-light">**** **** **** 1234</h4>
													<div class="text-center">
														<a href="" class="btn btn-rounded btn-outline font-14 btn-card">入金</a>
													</div>
												</div>
											</div>
										</div>
							  		</div>
							  		<div class="card swiper-slide add-card">
							      		<div class="card-body w-100">
											<div class="d-flex">
												<div class="stats w-100">

													<div class="add-card-content">
														<h4 class="text-center">Card not yet</h4>
														<a href="#" class="btn addcard-inner">
															<i class="plus-icon"></i>
														</a>
													</div>
													
													
												</div>
											</div>
										</div>
							  		</div>
							      
							    </div>
							    <!-- Add Pagination -->
							    <div class="swiper-pagination"></div>
							  </div>

													
						</div>

						<div class="col-md-12 mt-4">
						
							<div class="card" style="overflow: hidden;">
								<div class="card-body">
									
									<ul class="card-history">
										
										<li>
											<div class="crypnum">
												<i class="ch-icon"><img src="resources/images/deposit.svg"></i>
												$1,789
											</div>
											<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
										</li>
										<li>
											<div class="crypnum">
												<i class="ch-icon"><img src="resources/images/withdraw.svg"></i>
												$1,789
											</div>
											<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
										</li>
										<li>
											<div class="crypnum">
												<i class="ch-icon"><img src="resources/images/deposit.svg"></i>
												$1,789
											</div>
											<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
										</li>
										<li>
											<div class="crypnum">
												<i class="ch-icon"><img src="resources/images/withdraw.svg"></i>
												$1,789
											</div>
											<span class="text-muted"><i class="time-icon"></i>10/8/2018 16:00</span>
										</li>

									
									</ul>
								</div>

								<div class="card-body p-2 card-bottom">
									<a href="#" class="float-right link-bm">more</a>
								</div>
							</div>
						
						</div>


						<!-- try -->
						



						<!-- promotion -->
						<div class="col-md-12 mt-4">
						
							<div class="card ad_pr">
								<div class="card-body p-0 m-0">
									<img src="resources/images/giraffeclick-ad.png">
								</div>

								
							</div>
						
						</div>


					</div>
					

					
				</div>
				<!-- end of col 2 -->

			</div>
		</div>
	</div>

</div>


<?php @include"footer.php"; ?>