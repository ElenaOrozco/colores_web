<section class="card-news">
    <div class="container">
        <h3 class="title-section text-uppercase text-center p-5 animated zoomIn">News Letter</h3>
        <div class="card-group pb-5">
            <?php foreach ($entries->result() as $entry) :?>  
                 
                <?php 
                    $date=date_create($entry->updated_at);
                    
                ?>
                <div class="card">
                    <img src="<?= base_url('uploads/' . $entry->image)?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?= $entry->title ?></h5>
                      
                      <p class="card-text"><?= $entry->abstract ?></p>

                        <p><small class="text-muted">Last updated <?= date_format($date,"d-m-Y");?></small>
                        </p>
                      <a href="<?= base_url('news/getEntry/' .$entry->permalink)  ?>" class="btn btn-outline-primary">View More</a>
                      
                    </div>
                </div>
            <?php endforeach; ?>
          
        </div>
    </div>
</section>

