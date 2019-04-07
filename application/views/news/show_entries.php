<?php $this->load->view('admin/layouts/header'); ?>
    <div class="container py-5">
        <div class="row">
            <h3 class="font-weigth-bolder mt-5 mb-1 text-blue">News</h3>
            <div class="col-md-12 mb-3">
                <?php $correcto = $this->session->flashdata('correcto') ?>
                <?php if ($correcto) :?>
                    <?= $correcto ?>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <a href="<?= base_url('news/entry')?>" class="btn btn-primary my-3">
                    <i class="fa fa-plus" aria-hidden="true"></i> New Entry
                </a>
            </div>

            <div class="col-md-12  table-responsive mb-5">
                <?php if (!empty($entries)) : ?>
                <table class="table table-bordered table-condensed"  id="myTableLg" width="100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Image</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($entries->result() as $entry) : ?>
                        <tr>
                            <td>
                                <a href="<?= base_url('news/editForm') .'/' . $entry->id ?>" class="btn btn-success btn-sm">
                                  <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>

                                <button onclick="entry_remove(<?= $entry->id ?>)" class="btn btn-danger btn-sm" >
                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td><?= $entry->title ?></td>
                            <td><?= $entry->tags ?></td>
                            <td>
                              <?php if($entry->image): ?>
                                <img height="50" src="<?= base_url('uploads/') .'/'. $entry->image ?>" />
                              <?php else: ?>
                                 <img height="50" src="<?= base_url('uploads/') .'/nodisponible.png' ?>" />
                              <?php endif; ?>
                            </td>
                            <td><?= $entry->status ?></td>

                        </tr>

                      <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else : ?>
                    <h1>No entries</h1>
                <?php endif; ?>
            </div>

        </div>

    </div>

<script type="text/javascript">
  

  function entry_remove(id){
    swal({
      title: "Deseas Eliminar Entrada?",
      
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            console.log(id)
          $.post( "<?= base_url('news/entryRemove/' )?>"  +id, function( data ) {
            console.log(data)
            if(data.type == 'success'){
              swal({
                title:"Entrada Eliminada!",
                text: "Entrada Eliminada con Exito",
                icon: "success",
                button: "Cerrar",
              });
              location.reload();
            }else{
              swal({
                title: "Error!",
                text: "No se ha podido eliminar la Entrada!",
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