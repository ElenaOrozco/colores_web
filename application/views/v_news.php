<?php $this->load->view('layouts/header') ?>
<section class="mbr-section content5 cid-rmVaMoaz5U mbr-parallax-background" id="content5-j">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    NEWS
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    We are here to help you!
                </h3>
                
                
            </div>
        </div>
    </div>
</section>
<div class="container d-flex">
    <div class="row">
        <div class="col-12 col-md-4">
            <h3 class="pt-5">Category</h3>

            <ul class="nav flex-column">
                <?php if ($categorias->num_rows()> 0): ?>
                    <?php foreach ($categorias->result() as $row): ?>
                        <li class="nav-item">
                            <a class="nav-link active text-dark text-uppercase display-7" href="#"><?= $row->nombre ?></a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>
        </div>
        <div class="col-12 col-md-8">
            <?php if ($entries->num_rows()> 0): ?>
                <?php foreach ($entries->result() as $row): ?>
                    <article class="py-5">
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <img src="<?= base_url('uploads/') .'/' . $row->image ?>" class="image-new" alt="...">
                            </div> 
                            <div class="col-md-8">
                                <a href="<?= base_url('news/getEntry/' .$row->permalink)  ?>"><h4 class="title-news text-dark mb-3"><?= $row->title ?></h4></a>
                                <p class="lead mbr-text mbr-fonts-style mb-3">
                                    <?= strip_tags($row->abstract) ?> 
                                </p>
                                <div class="row">
                                    <div class="col-md-12 mbr-section-btn d-flex justify-content-center">
                                        <a class="btn btn-md btn-primary-outline display-4" href="<?= base_url('news/getEntry/' .$row->permalink)  ?>">View More</a> 
                                    </div>
                                </div>
                                
                                <!-- <small class="text-muted">Autor: <?= $row->author?> <?= date('d-m-Y') ?></small> -->
                            </div> 
                        </div>
                        
                    </article>
                    <hr>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- <div class="d-flex justify-content-center py-5">
                <button class="btn btn-outline-info">VIEW MORE</button>
            </div> -->



        </div>
    </div>


</div>
<?php $this->load->view('layouts/footer') ?>