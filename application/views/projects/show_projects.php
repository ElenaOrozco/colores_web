<?php $this->load->view('admin/layouts/header'); ?>
    <div class="container first-container">
        <div class="row">
            <div class="col-md-12 pt-5">
                <h3 class="font-weigth-bolder text-center text-blue">Projects</h3>
            </div>
            <div class="col-md-12 mb-3">
                <?php $correcto = $this->session->flashdata('correcto') ?>
                <?php if ($correcto) :?>
                    <?= $correcto ?>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <a href="<?= base_url('projects/newProject')?>" class="btn btn-primary my-3">
                    <i class="fa fa-plus" aria-hidden="true"></i> New Project
                </a>
            </div>

            <div class="col-md-12  table-responsive mb-5">
                <?php if (!empty($projects)) : ?>
                <table class="table table-bordered table-condensed"  id="myTableLg" width="100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image Before</th>
                            <th>Image After</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($projects->result() as $project) : ?>
                        <tr>
                            <td>
                                <a href="<?= base_url('projects/editForm') .'/' . $project->id ?>" class="btn btn-success btn-sm">
                                  <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>

                                <button onclick="projects_remove(<?= $project->id ?>)" class="btn btn-danger btn-sm" >
                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td><?= $project->title ?></td>
                            <td><?= $project->content ?></td>
                            <td>
                                <?php if($project->image_before): ?>
                                  <img height="50" src="<?= base_url('uploads/before') .'/'. $project->image_before ?>" />
                                <?php else: ?>
                                   <img height="50" src="<?= base_url('uploads/') .'/nodisponible.png' ?>" />
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($project->image_after): ?>
                                  <img height="50" src="<?= base_url('uploads/before') .'/'. $project->image_after ?>" />
                                <?php else: ?>
                                   <img height="50" src="<?= base_url('uploads/') .'/nodisponible.png' ?>" />
                                <?php endif; ?>
                            </td>
                            <td><?= $project->status ?></td>

                        </tr>

                      <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else : ?>
                    <h1>No Projects</h1>
                <?php endif; ?>
            </div>

        </div>

    </div>

<script type="text/javascript">
  

  function projects_remove(id){
    swal({
      title: "Deseas Eliminar Projecto?",
      
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            console.log(id)
          $.post( "<?= base_url('projects/projectRemove/' )?>"  +id, function( data ) {
            console.log(data)
            if(data.type == 'success'){
              swal({
                title:"Projecto Eliminado!",
                text: "Projecto Eliminado con Exito",
                icon: "success",
                button: "Cerrar",
              });
              location.reload();
            }else{
              swal({
                title: "Error!",
                text: "No se ha podido eliminar el Projecto!",
                icon: "danger",
                button: "Cerrar",
              });
            }

            
          }, "json");
          
        } 
      })


  }

</script>
<?php $this->load->view('admin/layouts/footer') ?>