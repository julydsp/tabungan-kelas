function editForm() {
        Swal.fire({
            title: 'Sukses!',
            text: 'Data siswa berhasil diubah.',
            icon: 'success'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                document.getElementById('editSiswaForm').submit();
            }
        });
    }