const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Pesan '+ flashData + ' !',
		// text: 'Berhasil ' + flashData + ' !',
		type: 'success'
	});
}

// tombol-hapus
// $('.tombol-hapus').on('click', function (e) {

// 	const href = $(this).attr('href');

// 	e.preventDefault();

// 	Swal.fire({
// 		title: 'Anda yakin?',
// 		text: "Data mahasiswa akan dihapus",
// 		type: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'Hapus Data',
// 		cancelButtonText: 'Batal'
// 	}).then((result) => {
// 		if (result.value) {
// 			document.location.href = href;
// 		}
// 	})

// });
