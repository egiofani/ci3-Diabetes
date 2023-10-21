

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Data Pasien</h1>
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
      <a href="<?php echo base_url('diabetes/home') ?>"><button type="button" class="m-2 btn btn-sm btn-outline-danger">kembali</button></a>
      <div class="table-responsive small">
      <form method="post" action="<?php echo base_url('diabetes/update') ?>">
    <table class="col-md-8">
    <?php foreach ($pasien as $data) :?>
        <input type="text" name="IdPasien" value="<?= $data->IdPasien; ?>" hidden>
            <tr>
                <td>Nama Pasien </td>
                <td>:</td>
                <td><input  class="form-control m-1" type="text" name="nama" value="<?= $data->nama?>"></td>
            </tr>
            <tr>
                <td>Umur </td>
                <td>:</td>
                <td><input  class="form-control m-1" type="text" name="umur" value="<?= $data->umur?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td>:</td>
                <td>
                
                  <input   type="radio" id="html" <?= ($data->jenisKelamin == 'Laki-Laki') ? 'checked' : '' ?>  name="jenisKelamin" value="Laki-Laki">
                  <label for="html">Laki-Laki</label>
                  <input   type="radio" id="css" <?= ($data->jenisKelamin == 'Perempuan') ? 'checked' : '' ?>  name="jenisKelamin" value="Perempuan">
                  <label for="css">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Tinggi </td>
                <td>:</td>
                <td><input  class="form-control m-1" type="number" value="<?= $data->tinggi?>" name="tinggi"></td>
            </tr>
            <tr>
                <td>Berat </td>
                <td>:</td>
                <td><input  class="form-control m-1" type="number" value="<?= $data->berat?>" name="berat"></td>
            </tr>
            <tr>
                <td>Tekanan Darah </td>
                <td>:</td>
                <td><input  class="form-control m-1" type="text" value="<?= $data->tekananDarah?>" name="tekananDarah"></td>
            </tr>
            <tr>
                <td>Gula </td>
                <td>:</td>
                <td><input  class="form-control m-1" type="text" value="<?= $data->gula?>" name="gula"></td>
            </tr>
            <tr>
                <td>Diagnosis </td>
                <td>:</td>
                <td>
                  <select name="idDiagnosa" class="form-select" aria-label="Default select example">
                  
                      <?php foreach ($diagnosa as $ds) : ?>
                        <?php if ($ds-> idDiagnosa == $data-> idDiagnosa) : ?>
                          <option selected value="<?= $ds-> idDiagnosa?>"><?= $ds-> diagnosa?></option>
                        <?php else:?>
                          <option value="<?= $ds-> idDiagnosa?>"><?= $ds-> diagnosa?></option>
                        <?php endif;?>
                      <?php endforeach;?>
                  </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" class="btn btn-primary mt-3   ">Submit</button></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <form>
      </div>
    </main>
  </div>
</div>
<script src="<?php echo base_url('') ?>./assets/dashboard_files/bootstrap.bundle.min.js.download" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('') ?>./assets/dashboard_files/chart.umd.js.download" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="./dashboard_files/dashboard.js.download"></script>

</body></html>