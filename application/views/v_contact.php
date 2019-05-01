<?php $this->load->view('layouts/header') ?>
<section class="mbr-section content5 cid-rmVaMoaz5U mbr-parallax-background" id="content5-j">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    CONTACT
                </h2>
                <!-- <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    We are here to help you!
                </h3> -->
                
                
            </div>
        </div>
    </div>
</section>
<section class="mbr-section form4 cid-rmVbcGhV9e" id="form4-t">

    

    
    <div class="container" id="#header15-a">
    	<!-- <h2 class="mbr-dark align-center py-4 mbr-fonts-style mbr-bold display-2">
            CONTACT
        	</h2> -->
        <div class="row">
        	
            <div class="col-md-6">
                
                	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3157.1207410027732!2d-122.4694379851319!3d37.69336335111944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1549642727716" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               
            </div>
            <div class="col-md-6">
                <!-- <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Contact
                </h2> -->
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            We are here to help you!
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <!-- <h5 class="align-left mbr-fonts-style display-7">
                            We are here to help you!
                        </h5> -->
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                        	Address: Po Box 743, Daly City CA 94017<br>
                            Phone: +1 415 235 315 <br>
                            Email: info@colorespaintingcompany.com
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <!--Formbuilder Form -->
                    <form  id="contact-form" name="contact-form" action="<?= base_url('welcome/enviar_mensaje')?>" method="POST">
                        <div class="row">
                            <!-- <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
 -->                            <?php if ($this->session->flashdata('email_sent')): ?>
                                    <div  data-form-alert="" class="alert alert-success col-12"><?= $this->session->flashdata('email_sent')?></div>
                
                                <?php endif; ?>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-6  form-group" data-for="name">
                                <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-t">
                            </div>
                            <div class="col-md-6  form-group" data-for="phone">
                                <input type="text" name="phone" placeholder="Phone" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-t">
                            </div>
                            <div data-for="email" class="col-md-12  form-group">
                                <input type="text" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-t">
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <textarea name="message" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-form4-t"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" class="btn btn-primary btn-form display-4" onclick="document.getElementById('contact-form').submit();">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form><!--Formbuilder Form-->
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('layouts/footer') ?>