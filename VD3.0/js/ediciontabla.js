$(document).ready(function () {
    $('#tabla_administradores').Tabledit({
        deleteButton: false,
        editButton: false,
        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'correo_admi'], [2, 'nombre_admi'], [3, 'fechanac_admi'], [4, 'celular_admi'], [5,'salario_admi']]
        },
        hideIdentifier: true,
        url: 'ediciontabla.php'
    });
});

