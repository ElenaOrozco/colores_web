<?php $this->load->view('layouts/header') ?>
<section class="contact-us pb-5">
			<div class="container">
				<h3 class="title-section text-uppercase text-center text-dark p-5">Contact Us </h3>
				<p class="text-uppercase text-center">Po Box 743, Daly City Ca 94017</p>
				<p class="text-center">info@colorespaintingcompany.com</p>
				
				<div class="row">
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3157.1207410027732!2d-122.4694379851319!3d37.69336335111944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1549642727716" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6">
					<form class="p-5">
						
						<div class="form-group">
						    <label for="exampleFormControlInput1">Name</label>
						    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
						</div>
						<div class="form-group">
						    <label for="exampleFormControlInput1">Email</label>
						    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
						</div>
						
					  
					  
					  	<div class="form-group">
					    	<label for="exampleFormControlTextarea1">Message</label>
					    	<textarea class="form-control" id="message" name="message" rows="3" placeholder="Add a brief message..."></textarea>
					  	</div>
					  	<div class="text-center">
					  		<button type="submit" class="btn btn-primary">Submit</button>

					  	</div>
					</form>
				</div>
			</div>
			</div>
			
			
		</section>


<?php $this->load->view('layouts/footer') ?>