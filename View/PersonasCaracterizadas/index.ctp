<?php $this->layout = 'default_familia' ?>
<style>
.btn-group {
    position: relative;
    display: inline-block;
}

.my-buttonOne {
    background-color: #3366CC;
    display: flex;
    justify-items: center;
    align-items: center;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: #3366CC;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.caret {
    border-top: 5px solid white;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    margin-left: 5px;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-menu li {
    padding: 5px;
    text-decoration: none;
    display: block;
}

.dropdown-menu li a {
    color: black;
    text-decoration: none;
    font-size: 14px;
}

.dropdown-menu li:hover {
    background-color: #f1f1f1;
}

.btn-group.show .dropdown-menu {
    display: block;
}
</style>


<!-- Formulario de búsqueda -->
<?= $this->Form->create('PersonasCaracterizada', array('action' => 'index', 'method' => 'post')) ?>
<div style="margin: 20px;">
    <?= $this->Form->input('NumeroDoc', array('label' => 'Número de Documento', 'required' => true)); ?>

    <button type="submit" class="my-button">Buscar</button>
    <?php echo $this->Form->end(); ?>

</div>


<!-- Tabla de resultados -->
<table width="100%" class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id_familia'); ?></th>
            <th><?php echo $this->Paginator->sort('id_sociambiental'); ?></th>
            <th><?php echo $this->Paginator->sort('fecha'); ?></th>
            <th><?php echo $this->Paginator->sort('microterritorio'); ?></th>
            <th><?php echo $this->Paginator->sort('direccion'); ?></th>
            <th><?php echo $this->Paginator->sort('profesional_EBS'); ?></th>
            <th><?php echo $this->Paginator->sort('NumeroDoc'); ?></th>
            <th><?php echo $this->Paginator->sort('primerapellido'); ?></th>
            <th><?php echo $this->Paginator->sort('primernombre'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($personasCaracterizadas)) : ?>
        <?php foreach ($personasCaracterizadas as $personasCaracterizada) : ?>
        <tr>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['familia_id']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['sociambiental_id']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['fecha']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['microterritorio']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['direccion']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['profesional_EBS']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['NumeroDoc']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['primerapellido']); ?>&nbsp;</td>
            <td><?php echo h($personasCaracterizada['PersonasCaracterizada']['primernombre']); ?>&nbsp;</td>
        </tr>
        <?php endforeach; ?>
        <?php else : ?>
        <tr>
            <td colspan="9">No se encontraron resultados.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>


<script>
function toggleDropdown(event) {
    event.stopPropagation();
    var dropdown = event.currentTarget.parentElement;
    dropdown.classList.toggle('show');
}

window.onclick = function(event) {
    if (!event.target.matches('.my-button')) {
        var dropdowns = document.getElementsByClassName('btn-group');
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
$(document).ready(function() {
    // Inicializar Select2
    $('.select-search').select2();

    // Agregar opciones iniciales y cargar selección desde localStorage
    agregarOpcionSeleccion();
    cargarSeleccionDesdeLocalStorage();

    // Agregar evento para guardar selección en localStorage cuando cambia el valor
    $('.select-search').on('change', function() {
        guardarSeleccionLocalStorage();
    });

    $('#dataTables-example').DataTable({
        "pagingType": "simple",
        "pageLength": 10,
        responsive: true,
        dom: 'Bfrtip',
        language: {
            searchBuilder: {
                button: 'Filter',
            }
        },
        buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'colvis',
            'searchBuilder'
        ]

    });

});

function fnExcelReport() {
    var tab_text = "<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange;
    var j = 0;
    tab = document.getElementById('dataTables-example'); // id of table

    for (j = 0; j < tab.rows.length; j++) {
        tab_text = tab_text + tab.rows[j].innerHTML + "</tr>";
    }

    tab_text = tab_text + "</table>";

    tab_text = tab_text.replace(/<A[^>]*>|<\/A>/g, ""); //remove if u want links in your table
    tab_text = tab_text.replace(/<img[^>]*>/gi, ""); // remove if u want images in your table
    tab_text = tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.matc(/Trident.*rv\:11\./)) // If Internet Explorer
    {
        txtArea1.document.open("txt/html", "replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus();
        sa = txtArea1.document.execCommand("SaveAs", true, "Say Thanks to Sumit.xls");
    } else
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

    //return (sa);
}

function agregarOpcionSeleccion() {
    // Para el select con id FamiliaEncuestadorId
    var familiaEncuestadorId = $("#FamiliaEncuestadorId");
    if (!familiaEncuestadorId.find("option[value='0']").length) {
        familiaEncuestadorId.prepend("<option value='0'>Selecciona una opción</option>");
    }

    // Para el select con id SociambientalResponsableId
    var sociambientalResponsableId = $("#SociambientalResponsableId");
    if (!sociambientalResponsableId.find("option[value='']").length) {
        sociambientalResponsableId.prepend("<option value=''>Selecciona una opción</option>");
    }
}

function cargarSeleccionDesdeLocalStorage() {
    // Obtener valores guardados en localStorage
    var familiaEncuestadorIdValue = localStorage.getItem('familiaEncuestadorId');
    var sociambientalResponsableIdValue = localStorage.getItem('sociambientalResponsableId');

    // Establecer la selección en los selectores si hay valores en localStorage
    if (familiaEncuestadorIdValue !== null) {
        $("#FamiliaEncuestadorId").val(familiaEncuestadorIdValue).trigger('change');
    }
    if (sociambientalResponsableIdValue !== null) {
        $("#SociambientalResponsableId").val(sociambientalResponsableIdValue).trigger('change');
    }
}

function guardarSeleccionLocalStorage() {
    // Obtener valor seleccionado de FamiliaEncuestadorId y SociambientalResponsableId
    var familiaEncuestadorIdValue = $("#FamiliaEncuestadorId").val();
    var sociambientalResponsableIdValue = $("#SociambientalResponsableId").val();
    // Guardar en localStorage
    localStorage.setItem('familiaEncuestadorId', familiaEncuestadorIdValue);
    localStorage.setItem('sociambientalResponsableId', sociambientalResponsableIdValue);
}
</script>


<?php
$this->Html->css([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',

], ['block' => 'css']);
$this->Html->script([
	'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>

<style>
/* Personaliza el botón desplegable en DataTables Responsive */
table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control:before,
table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control:before {

    left: 15px;
}
</style>