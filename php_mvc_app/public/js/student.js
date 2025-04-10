$(document).ready(function () {
    // Evento para actualizar datos en la tabla (incluyendo district_id y carrer_id)
    $('#studentTable').on('change', 'select, input', function () {
        let row = $(this).closest('tr');
        let id = row.data('id');
        let column = $(this).data('column');
        let value = $(this).val();

        $.post('../controllers/StudentController.php?action=update', {
            id: id,
            column: column,
            value: value
        }, function (response) {
            console.log(response);
            Swal.fire("Actualizado", "El dato ha sido actualizado.", "success");
        }).fail(function () {
            Swal.fire("Error", "No se pudo actualizar.", "error");
        });
    });
});
