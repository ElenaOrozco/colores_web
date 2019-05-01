<section class="features3 cid-rmVaRlMztw py-5" id="features3-l">

    

    
    <div class="container">
        <h2 class="mbr-dark align-center pb-5 mbr-fonts-style mbr-bold display-2">
            NEWS LETTER
        </h2>
        <div class="media-container-row">

            <?php foreach ($entries->result() as $entry) :?>  
                 
                <?php 
                    $date=date_create($entry->updated_at);
                    
                ?>
                
               

                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="<?= base_url('uploads/' . $entry->image)?>" alt="Mobirise">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                <?= $entry->title ?>
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <?= strip_tags($entry->abstract) ?> 
                            </p>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="<?= base_url('news/getEntry/' .$entry->permalink)  ?>" class="btn btn-primary display-4">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>   
            
        </div>
    </div>
</section>


