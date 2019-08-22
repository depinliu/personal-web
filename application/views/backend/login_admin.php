<div class="container p-4">
	<div class="row">

		<div class="col-md-4 mx-auto mt-5 bg-white p-5 border">
			
			<form action="" method="post" class="bg-white">

				<div class="text-center">
					<img src="<?=base_url();?>assets/img/logo1.png" width="100">	
				</div>
		
			  <div class="form-group mt-2">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" autocomplete="off">
			    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Kata Sandi</label>
			    <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" name="password">
			  </div>
			  <!-- <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div> -->
			  <button type="submit" name="login" class="btn btn-info col-md-12 mt-2">Login</button>
			</form>

		</div>
		
	</div>
</div>