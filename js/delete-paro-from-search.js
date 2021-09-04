function confirmar(id) {
    Swal.fire({
        icon: 'error',
        showCancelButton: true,
        title: '¿Estas seguro de que quieres eliminar este registro?',
        text: 'Esta acción es irreversible',
        confirmButtonText: 'Eliminar',
        confirmButtonColor: '#dc3545',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
          if(result.isConfirmed) {
              window.location = 'delete-maestros/delete-paro.php?id='+id;
          }
      })
}