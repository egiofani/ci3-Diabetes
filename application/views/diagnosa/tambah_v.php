    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Pasien</h1>
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
      <a href="<?php echo base_url('diagnosa') ?>"><button type="button" class="m-2 btn btn-sm btn-outline-danger">kembali</button></a>
      <div class="table-responsive small">
            <form class="form" method="post" action="<?php echo base_url('diagnosa/insert') ?>">
                <table class="col-md-8">
                    <tr>
                        <td ><label for="" class="form-label">Tipe Diabetes</label> </td>
                        <td>:</td>
                        <td><input class="form-control m-1" type="text" name="diagnosa"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" class="btn btn-primary mt-3 btn-sm  ">Tambah</button></td>
                    </tr>
                </table>
            <form>
      </div>
    </main>
  </div>
</div>
<script src="<?php echo base_url('') ?>./assets/dashboard_files/bootstrap.bundle.min.js.download" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('') ?>./assets/dashboard_files/chart.umd.js.download" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="./dashboard_files/dashboard.js.download"></script>

</body></html>