
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Diagnosa</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"></use></svg>
            This week
          </button>
        </div>
      </div>
      <?php echo $this->session->flashdata('pesan'); ?>
      <a href="<?php echo base_url('diagnosa/form') ?>"><button type="button" class="m-2 btn btn-primary">Tambah Data</button></a>
      <div class="table-responsive small">
      <table class="table table-hover text-center" border="1">
        <thead class="table-dark" >
            <tr>
                <td>ID</td>
                <td>Diagnosa</td>
                <td >Action</td>
            </tr>
        </thead>
        <tbody >
            <?php $no=1; foreach ($diagnosa as $data) :?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data->diagnosa?></td>
                <td>
                    <a  href="<?php echo base_url('diagnosa/hapus/'. $data->idDiagnosa); ?>"><button class="btn  btn-sm btn-outline-danger"><i class="m-1 fa-solid fa-trash-can"></i></button></a>
                    <a href="<?php echo base_url('diagnosa/update/'. $data->idDiagnosa); ?>"><button class="btn btn-sm btn-outline-primary"><i class=" m-1 fa-regular fa-pen-to-square"></i></button></a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
      </div>
    </main>
  </div>
</div>
<script src="<?php echo base_url('') ?>./assets/dashboard_files/bootstrap.bundle.min.js.download" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('') ?>./assets/dashboard_files/chart.umd.js.download" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="./dashboard_files/dashboard.js.download"></script>

</body></html>