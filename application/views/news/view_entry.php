<?php $this->load->view('layouts/header') ?>
<div class="container">
    
	<article class="py-5">
		
        <h2 class="text-info py-5"><?= $entry['title'] ?></h2>
        <?= $entry['content'] ?>
        	
    	
    	<?php if($entry['image']): ?>
    		<div class="d-flex justify-content-center">
    			<img src="<?= base_url('uploads/') .'/' . $entry['image'] ?>" class="py-5" alt="...">
    		</div>			
		<?php endif; ?>
		<br>
        <small class="text-muted">Autor: <?= $entry['author']?><?= date('d-m-Y') ?></small>
    </article>
</div>
<?php $this->load->view('layouts/footer') ?>