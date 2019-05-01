<section class="header15 cid-rmV8YeaDCn mbr-fullscreen mbr-parallax-background" id="header15-a">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    FREE ESTIMATE
                </h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Send us the description of your project to request your free estimate or contact us.
                </p>

                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-sm btn-primary display-4" href="tel:+1-415-235-3155">
                        <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                        </span>
                        +1-415-235-315
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <!---Formbuilder Form-->
                        <form id="contact-form" name="contact-form" action="<?= base_url('welcome/enviar_mensaje')?>" method="POST">
                            <div class="row">
                                <!-- <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div> -->
                                <!-- <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div> -->

                                <?php if ($this->session->flashdata('email_sent')): ?>
                                    <div  data-form-alert="" class="alert alert-success col-12"><?= $this->session->flashdata('email_sent')?></div>
                
                                <?php endif; ?>
                            </div>
                            <div class="dragArea row">
                                <div class="col-md-12 form-group " data-for="name">
                                    <input type="text" name="name" placeholder="Name" data-form-field="Name" required="required" class="form-control px-3 display-7" id="name-header15-a">
                                </div>
                                <div class="col-md-12 form-group " data-for="email">
                                    <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control px-3 display-7" id="email-header15-a">
                                </div>
                                <div data-for="phone" class="col-md-12 form-group ">
                                    <input type="tel" name="phone" placeholder="Phone" data-form-field="Phone" class="form-control px-3 display-7" id="phone-header15-a">
                                </div>
                                <div data-for="message" class="col-md-12 form-group ">
                                    <textarea name="message" placeholder="Add Project details ..." data-form-field="Message" class="form-control px-3 display-7" id="message-header15-a"></textarea>
                                </div>
                                <div class="col-md-12 input-group-btn">
                                    <button type="submit" class="btn btn-success btn-form display-4" onclick="document.getElementById('contact-form').submit()">SEND </button>
                                </div>
                            </div>
                        </form><!---Formbuilder Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>
<!-- <section class="mbr-section form4 cid-rmVbcGhV9e" id="form4-t">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Drop a Line
                </h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">
                            Ready for offers and cooperation
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Phone: +1 (0) 000 0000 001 <br>
                            Email: youremail@mail.com
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <!--Formbuilder Form
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="4C5qwHxP3LiwSl317N9nEKWMsqrabM7PJgIG6HnWNnE/qiNaraMyKXi7lGgQfP1f5vs/yQXslaUwERiYED5VSgjn/T9AYURJhoJM4CvsyySukISt38pEF4zM5L4Mc7v6">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
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
                                <button type="submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form><!---Formbuilder Form>
                </div>
            </div>
        </div>
    </div>
</section> -->