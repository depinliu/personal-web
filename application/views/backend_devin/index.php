<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto mt-4">
			<table class="table">
				
				
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Email</th>
			      <th scope="col">Pesan</th>
			    </tr>
			  </thead>
			  <?php $i=1; foreach($pesan as $pesan): ?>
			  <tbody>
			    <tr>
			      <th scope="row"><?=$i++;?></th>
			      <td><?=$pesan['nama_lengkap'];?></td>
			      <td><?=$pesan['email'];?></td>
			      <td><?=$pesan['pesan'];?></td>
			    </tr>
			    <tr>
			  </tbody>
			<?php endforeach;?>
			</table>
		</div>
	</div>
</div>		