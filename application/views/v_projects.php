<?php $this->load->view('layouts/header') ?>
<div class="container-video">
	<video class="video-slider" loop autoplay muted preload="auto">
		<source  src="<?= base_url('img/Universe - 13100.mp4') ?>" type="video/mp4" />				
	</video>
	<div class="container d-flex justify-content-end align-items-center">
		<p  class="h1 animated bounceInRight delay-1s text-white">OUR PROJECTS</p>
	</div>			
</div>


<section class="my-gallery pb-5">
	
	<div class="container">
		<h3 class="title-section text-center p-5">PROJECTS</h3>
	  	<div id="buttons"></div>
		<div class="row" id="my-gallery">
			<div class="col-md-4 p-0">
				<img data-tags="Painting,Carpenty" src="<?= base_url('img/capp1.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4 p-0">
				<img data-tags="Plaster,Dry Wall" src="<?= base_url('img/capp2.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4 p-0">
				<img data-tags="Plaster,Dry Wall" src="<?= base_url('img/IMG_goodyear2.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4 p-0">
				<img data-tags="Renovation" src="<?= base_url('img/frederick1.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4 p-0">
				<img data-tags="Dry Wall" src="<?= base_url('img/IMG_justtires1.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4 p-0">
				<img data-tags="Renovation" src="<?= base_url('img/crispycreme1.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4">
				<img data-tags="Painting,Plaster" src="<?= base_url('img/crispycreme1.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4">
				<img data-tags="Renovation" src="<?= base_url('img/crispycreme11.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4">
				<img data-tags="Painting,Carpenty" src="<?= base_url('img/crispycreme12.jpg') ?>" alt="" />
			</div>
			<div class="col-md-4">
				<img data-tags="Painting,Carpenty" src="<?= base_url('img/crispycreme1.jpg') ?>" alt="" />
			</div>
		   
		</div>
		
		  
	</div>
</section>
<?php $this->load->view('layouts/footer') ?>