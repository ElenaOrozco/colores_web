<?php $this->load->view('admin/layouts/header'); ?>
    
	<div class="container py-5">
	    <div class="card mt-5 mb-1">
		    <div class="card-header">
		        Edit Entry
		    </div>
	      	<div class="card-body pb-5">
		        <div class="col-md-12 mb-3">
		        
		          <?php $correcto = $this->session->flashdata('correcto') ?>
		          <?php if ($correcto) :?>
		              <?= $correcto ?>
		          <?php endif; ?>
		        </div>
		        <form role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8" action="<?php echo site_url("news/update_entry/" .$entry['id']) ?>">
		            <div class="modal-body row">
		                <div class="col-offset-md-3 col-md-6">
		                  
			                <div class="form-group">
			                    <label for="Nombre"><string>Title</string></label>
			                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required value="<?= $entry['title'] ?>">
			                </div>
			                <div class="form-group">
			                    <label for="Nombre"><string>Tags</string></label>
			                    <input type="text" class="form-control" name="tags" id="tags" placeholder="Tags" required value="<?= $entry['tags'] ?>">
			                    <small>Comma separated</small>
			                   
			                </div>
			                <div class="form-check">
			                    <input class="form-check-input" type="checkbox" value="" name="draft" id="draft" <?= $entry['status'] =='DRAFT' ?'checked': '' ?> >
			                    <label class="form-check-label" for="defaultCheck1">
			                      Draft
			                    </label>
			                </div>
			                <!-- <div class="form-check">
			                    <input class="form-check-input" type="checkbox" value="" id="published" name="published" <?= $entry['status'] =='PUBLISHED' ?'checked': '' ?>>
			                    <label class="form-check-label" for="defaultCheck2">
			                      Published
			                    </label>
			                </div> -->
			                
		                  
		                </div>
		                <div class="col-md-6">
		                	<div class="form-group">
			                    <label for="Nombre"><string>Category</string></label>
			                	<select class="form-control" id="idCategoria" name="idCategoria" value="">
			                      <option>Selecciona una opción</option>
			                      <?php foreach ($categorias->result() as $item): ?>
			                        <option value="<?= $item->id ?>" <?= $entry['idCategoria'] == $item->id ?'selected': '' ?>><?= $item->nombre ?></option>
			                       
			                      <?php endforeach; ?>
			                      
			                    </select>
			                </div>
		                  	
		                  
			                <div class="form-group">
			                    <label for="exampleFormControlFile1"><string>Image</string></label>
			                    <input type="file" class="form-control-file" id="userfile" name="userfile">
			                </div>

			                    
		                </div>
		                <div class="col-md-12">
		                	<div class="form-group">
			                    <label for="descripcion"><string>Abstract</string></label>
			                    <textarea class="form-control myTextarea" name="abstract" id="abstract" rows="3"><?= $entry['abstract'] ?></textarea>
			                </div>
		                	<div class="form-group">
			                    <label for="descripcion"><string>Content</string></label>
			                    <textarea class="form-control myTextarea" name="content" id="content" rows="20"><?= $entry['content'] ?></textarea>
			                </div>
		                </div>
		            </div>
		              
		            <div class="modal-footer">		               
		                <button type="submit" class="btn btn-primary">Guardar</button>
		            </div>
		        </form>
		    </div>
	    </div>
	</div>
<?php $this->load->view('admin/layouts/footer'); ?>
