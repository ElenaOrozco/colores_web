<?php $this->load->view('layouts/header') ?>
<div class="container-video">
	<video class="video-slider" loop autoplay muted preload="auto">
		<source  src="<?= base_url('img/24419024-preview.mp4') ?>" type="video/mp4" />				
	</video>
	<div class="container d-flex justify-content-end align-items-center">
		<p  class="h1 animated bounceInRight delay-1s text-white">ABOUT US</p>
	</div>			
</div>
<section class="about">
	<div class="container">
		<div class="col-md-10">
			
			<p class="text-justify pt-5">
				Founded in 1995, Colores Painting Company is proudly owned and operated by Hugo Ruiz. Bonded and insured,Hugo and his team strive to deliver the finest work at the best rates. Colores Painting Company brings the highest level of expertise to each job. Their number one goal is to exceed your expectations and to finish your project on time and within your budget. They stand behind their 20 year record of 100% customer satisfaction. 
			</p>
			<p class="text-justify ">
				Colores Painting Company loves a challenge. From planning to all the details of finishing, they will be by your side until your project is complete and you are fully satisfied with their work - guaranteed! Colores Painting Company can help you with your project whether it is a small residential remodel, interior or exterior painting, a repair and renovation job or a major commercial project.
			</p>
		</div>
		
	</div>
</section>

<section class="bg-orange text-white p-5">
	<h3 class="text-uppercase text-center text-dark pb-2 pt-5">COUNT ON COLORES</h3>
			<h4 class="text-uppercase text-center text-dark pb-5">FOR INTEGRITY, EXCELLENCE, VALUE AND PERSONAL ATTENTION</h4>
			
</section>
<section class="p-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 py-3">
				<div class="box">
					<p>LICENSE C</p>
					<p>#757621</p>
				</div>
			</div>
			<div class="col-md-4 py-3">
				<div class="box">
					<p>AMK LICENCE B</p>
					<p>#936966</p>
				</div>
			</div>
			<div class="col-md-4 py-3">
				<div class="box">
					<p>BUILDING ENGINEERS</p>
					<p>LICENSE A</p>
				</div>
			</div>
		</div>
	</div>
	
</section>

<?php $this->load->view('layouts/footer') ?>