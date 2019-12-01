$(document).ready(function () {
    $('data_table').Tabledit({
        deleteButton: true,
        editButton: true,
        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'correo_admi'], [2, 'nombre_admi'], [3, 'fechanac_admi'], [4, 'celular_admi'], [5,'salario_admi']]
        },
        hideIdentifier: true,
        url: 'ediciontabla.php'
    });
});

