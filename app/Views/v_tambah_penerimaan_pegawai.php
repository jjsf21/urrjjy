<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_penerimaan_pegawai')?>" method="post">
                <h1></h1>
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Pegawai<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pegawai" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_pegawai" required="required" placeholder="Nama Pegawai">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Status Penerimaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="status_penerimaan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="status_penerimaan" required="required" placeholder="Status Penerimaan">
          </div>
        </div>
        


        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/penerimaan_pegawai" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>