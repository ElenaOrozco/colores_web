<?php $this->load->view('admin/layouts/header'); ?>
    <div class="container">
        <div class="row">
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


<?php $this->load->view('admin/layouts/footer') ?>