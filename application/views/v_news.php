<?php $this->load->view('layouts/header') ?>
<div class="container-video">
    <video class="video-slider" loop autoplay muted preload="auto">
        <source  src="<?= base_url('img/Universe - 13100.mp4') ?>" type="video/mp4" />
    </video>
    <div class="container d-flex justify-content-end align-items-center">
        <p  class="h1 animated bounceInRight delay-1s text-white">NEWS</p>
    </div>
</div>
<div class="container d-flex">
    <div class="row">
        <div class="col-12 col-md-4">
            <h3>Category</h3>

            <ul class="nav flex-column">
                <?php if ($categorias->num_rows()> 0): ?>
                    <?php foreach ($categorias->result() as $row): ?>
                        <li class="nav-item">
                            <a class="nav-link active text-dark" href="#"><?= $row->nombre ?></a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>
        </div>
        <div class="col-12 col-md-8">
            <?php if ($entries->num_rows()> 0): ?>
                <?php foreach ($entries->result() as $row): ?>
                    <article class="py-5">
                        <a href="<?= base_url('news/' .$row->permalink)  ?>"><h3><?= $row->title ?></h3></a>
                        <?= $row->content ?>
                        <small class="text-muted">Autor: <?= $row->author?><?= date('d-m-Y') ?></small>
                    </article>
                    <hr>
                <?php endforeach; ?>
            <?php endif; ?>

            <div class="d-flex justify-content-center py-5">
                <button class="btn btn-outline-info">VIEW MORE</button>
            </div>



        </div>
    </div>


</div>
<?php $this->load->view('layouts/footer') ?>