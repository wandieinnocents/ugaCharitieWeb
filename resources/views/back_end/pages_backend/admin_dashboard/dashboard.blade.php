@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')
<div class="content-body rightside-event">
            <!-- row -->
			<div class="container-fluid">
				<!-- start of row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="welcome-card rounded pl-5 pt-5 pb-4 mt-3 position-relative mb-5">
							<h4 class="text-warning">UGA CHARITIE</h4>
							<p>Uga charitie is a charity organisation in uganda that is helping the needy.</p>
								<a class="btn-link text-dark ml-3" href="javascript:void(0);">VISIT</a>

							<a class="btn btn-warning btn-rounded" href="/">HOME PAGE <i class="las la-long-arrow-alt-right ml-4"></i></a>
							<img src="assets/backendassets/image/svg/welcom-card.svg" alt="" class="position-absolute">
						</div>
					</div>

				</div>
				<!-- end of row -->

				<!-- ROW FOR GRIDS -->
				<div class="row">
					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">{{ $count_users }} </h2>
										<p class="font-w100 fs-20 text-black">Users</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="/users" class="text-primary">View Details <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->

					
					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">{{ $count_feedbacks }} </h2>
										<p class="font-w100 fs-20 text-black">Feedback</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="/contacts" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->



					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">{{ $count_projects }}</h2>
										<p class="font-w100 fs-20 text-black">Projects</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="/projects" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->



					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">{{ $count_services }} </h2>
										<p class="font-w100 fs-20 text-black">Services</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="/services" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->


				</div>
				<!-- END OF ROW FOR GRIDS -->



				<!-- ROW FOR GRIDS -->
				<div class="row">
					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600"> {{ $count_images }} </h2>
										<p class="font-w100 fs-20 text-black">Photos</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="galleries" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->

					
					<!-- col -->
					<div class="col-md-3" style="visibility:hidden;">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">862 <small class="fs-18 ml-2 font-w600 mb-1">pcs</small></h2>
										<p class="font-w100 fs-20 text-black">Users</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="javascript:void(0);" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->



					<!-- col -->
					<div class="col-md-3" style="visibility:hidden;">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">86 <small class="fs-18 ml-2 font-w600 mb-1">pcs</small></h2>
										<p class="font-w100 fs-20 text-black">Users</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="javascript:void(0);" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->



					<!-- col -->
					<div class="col-md-3" style="visibility:hidden;">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">10 <small class="fs-18 ml-2 font-w600 mb-1">pcs</small></h2>
										<p class="font-w100 fs-20 text-black">Users</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="javascript:void(0);" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->


				</div>
				<!-- END OF ROW FOR GRIDS -->

            </div>
        </div>
@endsection



