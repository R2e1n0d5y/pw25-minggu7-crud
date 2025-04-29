function confirmDelete(id) {
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data akan dihapus secara permanen!",
        icon: 'warning',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm',
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "delete.php?id=" + id;
        }
    })
}