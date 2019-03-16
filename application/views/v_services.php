<?php $this->load->view('layouts/header') ?>
<div class="container-video">
	<video class="video-slider" loop autoplay muted preload="auto">
		<source  src="<?= base_url('img/1007014867-preview.mp4') ?>" type="video/mp4" />				
	</video>
	<div class="container d-flex justify-content-end align-items-center">
		<p  class="h1 animated bounceInRight delay-1s text-white">OUR SERVICES</p>
	</div>			
</div>

<section class="services">
	<div class="container">
		<h3 class="title-section text-center p-5">OUR SERVICES</h3>
		<div class="row pb-3">
			<div class="col-md-4  d-flex flex-column align-items-center justify-content-center">
				<div class="d-flex justify-content-center align-items-center rounded-circle bg-red icons">
					<i class="flaticon-036-paint-brush"></i>

				</div>
				<p class="font-weight-bold text-uppercase pt-1 pb-3">Painting</p>
			</div>
			<div class="col-md-4  d-flex flex-column align-items-center justify-content-center">
				<div class="d-flex justify-content-center align-items-center rounded-circle bg-red icons">
					<i class="flaticon-009-trowel"></i>

				</div>
				<p class="font-weight-bold text-uppercase pt-1 pb-3">Plaster</p>
			</div>
			<div class="col-md-4  d-flex flex-column align-items-center justify-content-center">
				<div class="d-flex justify-content-center align-items-center rounded-circle bg-red icons">
					<i class="flaticon-010-tools"></i>

				</div>
				<p class="font-weight-bold text-uppercase pt-1 pb-3">Carpentry</p>
			</div>
		</div>
		
		<div class="row pb-5">
			<div class="col-md-4  d-flex flex-column align-items-sm-center justify-content-center">
				<div class="d-flex justify-content-center align-items-center rounded-circle bg-yellow icons">
					<i class="flaticon-014-tape"></i>

				</div>
				<p class="font-weight-bold text-uppercase pt-1 pb-3">Dry Wall</p>
			</div>
			<div class="col-md-4  d-flex flex-column align-items-sm-center justify-content-center">
				<div class="d-flex justify-content-center align-items-center rounded-circle bg-olive icons">
					<i class="flaticon-063-drill"></i>

				</div>
				<p class="font-weight-bold text-uppercase pt-1 pb-3">Renovation</p>
			</div>
			<div class="col-md-4  d-flex flex-column align-items-sm-center justify-content-center">
				<div class="d-flex justify-content-center align-items-center rounded-circle bg-green icons">
					<i class="flaticon-043-measuring-tape"></i>

				</div>
				<p class="font-weight-bold text-uppercase pt-1 pb-3">Carpentry</p>
			</div>
		</div>
		
		

		
	</div>
</section>

<?php $this->load->view('layouts/footer') ?>