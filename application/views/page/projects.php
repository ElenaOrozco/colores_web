<section class="features15 cid-rmVaZb1IUJ" id="features15-q">
    <div class="container">
        <h2 class="mbr-dark align-center pb-5 mbr-fonts-style mbr-bold display-2">
            OUR PROJECTS
        </h2>
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style">
            Experts in residential remodeling, interior or exterior painting, repair, renovation and commercial projects.
        </h3>

        <div class="container">
            <div class="row">
                <?php foreach ($projects->result() as $item) : ?>
                    <div class="col-12 col-md-6 mb-4 col-lg-4 pt-3 pb-1">
                        <div class="card flip-card p-5 align-center">
                            <div class="card-front card_cont">
                                <img src="<?= base_url('uploads/before') .'/'. $item->image_after ?>" alt="<?= $item->title ?>">
                            </div>
                            <div class="card_back card_cont d-flex align-items-center">
                                <h4 class="card-title display-5 mbr-fonts-style m-auto">
                                    <?= $item->title ?>
                                </h4>
                               
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-md-12 mbr-section-btn d-flex justify-content-center">
                    <a class="btn btn-primary display-4" href="<?= base_url('listProjects') ?>">View More</a> 
                </div>
            </div>
            
        </div>

        
    </div>
</section>
