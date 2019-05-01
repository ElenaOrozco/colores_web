<?php $this->load->view('layouts/header') ?>
<section class="mbr-section content5 cid-rmVaMoaz5U mbr-parallax-background" id="content5-j">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    PROJECTS
                </h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<!-- <section class="projects py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($projects->result() as $item) : ?>
                <div class="col-12 col-md-6 pb-3">
                    <div class="ba-slider">
                      <img src="<?= base_url('uploads/before') .'/'. $item->image_after ?>" alt="">       
                      <div class="resize">
                        <img src="<?= base_url('uploads/before') .'/'. $item->image_before ?>" alt="">
                      </div>
                      <span class="handle"></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>  
    </div>
</section> -->


<section class="mbr-gallery mbr-slider-carousel cid-rmV95BgyKp" id="gallery2-d">

    

    <div class="container">
        <div>
            <!-- Filter -->
            <div class="mbr-gallery-filter container gallery-filter-active">
                <ul buttons="0">
                    <li class="mbr-gallery-filter-all">
                        <a class="btn btn-md btn-primary-outline active display-7" href="">All</a>
                    </li>
                </ul>
            </div>
            <!-- Gallery -->
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    <div>
                        <div>
                            <?php $i = 0 ?>
                            <?php foreach ($projects->result() as $item) : ?>
                                
                                    <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="<?= $item->tags ?>">
                                        <div href="#lb-gallery2-d" data-slide-to="<?= $i ?>" data-toggle="modal">
                                            <img src="<?= base_url('uploads/before') .'/'. $item->image_before ?>" alt="<?=  $item->title ?>" title="<?=  $item->title ?>">
                                            <span class="icon-focus"></span>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                               
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Lightbox -->
            <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-d">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel-inner">
                                <?php $i = 0 ?>
                                <?php foreach ($projects->result() as $item) : ?>
                                
                                    <div class="carousel-item <?= $i== 0 ? 'active':'' ?>">
                                        <img src="<?= base_url('uploads/before') .'/'. $item->image_before ?>" alt="<?=  $item->title ?>" title="<?=  $item->title ?>">
                                    </div>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                                
                            </div>
                            <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-d">
                                <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-d">
                                <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <a class="close" href="#" role="button" data-dismiss="modal">
                                <span class="sr-only">Close</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



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
                        <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="BLEKghVYzNh4BKQeTWY9ydDABBGI3+n9Eys4TZfsl1mStOuPd0isVmjqZ35/tTBxlWKPZez/o3+HAUdFN0JMSIXdW2PdKr6qIZ1tLiJGD3uF+kTcSlf1GKpjSHrhozpx">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
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
                                    <button type="submit" class="btn btn-success btn-form display-4">SEND </button>
                                </div>
                            </div>
                        </form><!---Formbuilder Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
 --></section>



<?php $this->load->view('layouts/footer') ?>
