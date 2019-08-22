<div class="jumbotron jumbotron-fluid bg-dark text-light text-center">
  <div class="container">
    <h1 class="display-5">#Kontak <span class="font-weight-bold text-warning">Saya</span></h1>
    <p class="lead">Ada yang ingin ditanyakan?</p>
  </div>
</div>

<!-- form -->

<div class="container">
    <div class="row">
    
        <div class="col-md-6 bg-white visible-sm mt-3">
        <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash');?>"></div>
          <?php if($this->session->flashdata('flash')) : ?>
          <?php endif;?>
            
            <form action="" method="post">
              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="inputName">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputName" placeholder="" name="nama_lengkap">
                  <small class="form-text text-danger"><?= form_error('nama_lengkap');?></small>
                </div>

                <div class="form-group col-md-6">
                  <label for="inputEmail">E-mail</label>
                  <input type="text" class="form-control" id="inputEmail" placeholder="" name="email">
                  <small class="form-text text-danger"><?= form_error('email');?></small>
                </div>

                <div class="form-group col-md-12 border-success">
                  <label for="inputText">Isi Pesan</label>
                  <textarea type="text" class="form-control" rows="5" id="inputText" placeholder="" name="pesan"></textarea> 
                  <small class="form-text text-danger"><?= form_error('pesan');?></small>
                </div>

              </div>
              
              <button type="submit" name="kirimPesan" class="btn btn-primary col-lg-3 col-md-4 col-sm-12 mt-1">Kirim Pesan</button>
            </form>
        </div>

        <div class="col-md-6 mt-5">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.531446255669!2d106.88825871476904!3d-6.193385695516346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4dfbed3cfb9%3A0x1f4851a22bdd6634!2sJl.+Pemuda%2C+Pulo+Gadung%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sid!2sid!4v1551542023870" width="100%" height="280" frameborder="0" style="border:0"></iframe>
        </div>

    </div>
</div>


<!-- end form -->


