<?php $this->load->view('admin/layouts/header'); ?>

    <div class="container first-container pb-5">
        <div class="card">
            <div class="card-header">
                Edit Project
            </div>
              <div class="card-body pb-5">
                <div class="col-md-12 mb-3">

                  <?php $correcto = $this->session->flashdata('correcto') ?>
                  <?php if ($correcto) :?>
                      <?= $correcto ?>
                  <?php endif; ?>
                </div>
                <form role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8" action="<?php echo site_url("projects/edit_project/") . $project['id']?>">
                    <div class="modal-body row">
                        <div class="col-offset-md-3 col-md-6">

                            <div class="form-group">
                                <label for="Nombre">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?= $project['title'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Change Image Before</label>
                                <input type="file" class="form-control-file" id="before" name="before">
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="draft" id="draft"  checked>
                                <label class="form-check-label" for="defaultCheck1">
                                  Draft
                                </label>
                            </div>
                            


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Nombre">Category</label>
                                <select class="form-control" id="idCategoria" name="idCategoria" value="">
                                  <option>Selecciona una opción</option>
                                  <?php foreach ($categorias->result() as $item): ?>
                                    <option value="<?= $item->id ?>" <?= $project['idCategoria'] == $item->id ?'selected': '' ?>><?= $item->nombre ?></option>

                                  <?php endforeach; ?>

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlFile1">Change Image After</label>
                                <input type="file" class="form-control-file" id="after" name="after">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Content</label>
                                <textarea class="form-control myTextarea" name="content" id="content" rows="20"><?= $project['content'] ?></textarea>
                            </div>

                        </div>

                        

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>

                <form>

            </div>
        </div>
    </div>


<?php $this->load->view('admin/layouts/footer'); ?>

