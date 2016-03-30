/** Modulo que contiene las funciones y variables necesarias para el modulo Actividad
 * @author Alexander Londoño Espejo
 * @since 2016-03-20
 */
var Actividad = {};

/**
 * Funcion que define variables y funciones
 */
(function () {

    /** variable para almacenar el nombre del contenedor de la tabla de asignacion de maquinas */
    Actividad.countTableElement = 0;
    Actividad.actividadId = '';
    Actividad.divDetails = '';
    /**
     * Metodo para cargar la tabla de referencias AJAX
     */
    Actividad.loadDataTable = function () {
        var d = {};
        d.activity_id = Actividad.actividadId;
        d.token = $("#_token").val();
        Util.callAjax(d, rootUrl + 'ajax/get_machine_data_table', 'POST', Actividad.loadDataTableSuccess);
    };

    /**
     * Metodo Handler la ejecucion exitosa de metodo ajax en Actividad.loadDataTable
     */
    Actividad.loadDataTableSuccess = function (data) {
        if (data.valid) {
            Actividad.dataActividad = data.activity;
            Actividad.dataMachine = data.machines;
            //se muestras los nombres de las columnas de la tabla dinamica
            Actividad.createTable(Actividad.divDetails, ['Acción', 'Asignación de Máquina'], Actividad.addRowDetails);
            if (Actividad.actividadId != '') {
                Actividad.loadPreviousTable();
            } else {
                Actividad.addRowDetails();
            }
        }
    };

    /**
     * Metodo para cargar en las tablas los valores previamente guardados
     */
    Actividad.loadPreviousTable = function () {
        for (var i in  Actividad.dataActividad.machines) {
            Actividad.addRowDetails( Actividad.dataActividad.machines[i].pivot);
        }
    };

    Actividad.removeRowTable = function (d) {
        console.log(d);
    };
    /**
     * Metodo para la creacion dinamica de la tabla
     * @param {String} container
     */
    Actividad.createTable = function (containerId, arrayColumnsHeader, callbackOnClickAddRow) {
        var container = $('#' + containerId);
        // se construye la tabla con lista de fuentes de financiacion y el plan de desarrollo
        var table = document.createElement('table');
        table.setAttribute('id', containerId + '_table');
        table.setAttribute('class', 'table table-bordered');
        var header = table.createTHead();
        var body = table.createTBody();
        body.setAttribute('id', containerId + '_table_body');
        var rowHeader = header.insertRow(0);
        var th = '';
        var percent = 100 / (parseInt(arrayColumnsHeader.length) - 1);
        // se genera el encabezado de la tabla
        for (var j = 0; j < arrayColumnsHeader.length; j++) {
            th = document.createElement('th');
            th.appendChild(document.createTextNode(arrayColumnsHeader[j]));
            if (j > 0) {
                th.height = percent + '%';
            }
            rowHeader.appendChild(th);
        }
        var div_button = document.createElement('div');
        div_button.style.display = 'inline';
        var add_button = document.createElement('a');
        add_button.text = ' Agregar';
        add_button.addEventListener('click', callbackOnClickAddRow);
        add_button.setAttribute('class', 'glyphicon glyphicon-plus-sign btn btn-primary');
        //se agrega la tabla al contenedor
        div_button.appendChild(document.createElement('br'));
        div_button.appendChild(document.createElement('br'));
        div_button.appendChild(add_button);
        container.empty();
        container.append(div_button);
        container.append(table);
    };

    /**
     * Metodo que agrega una fila a la tabla de detalles
     */
    Actividad.addRowDetails = function (setData) {
        var c = Actividad.countTableElement++;
        var input = null;
        var divId = Actividad.divDetails;
        var body = $('#' + divId + '_table_body');
        var deletable = $('#deletable').val();
        var editable = $('#editable').val();
        var td = document.createElement('td');
        var countColumn = 2;
        var countData = Actividad.dataMachine.length;
        var row = document.createElement('tr');
        //ahora se insertan las casillas para ingresar valores
        for (var j = 0; j < countColumn; j++) {
            //columna de acciones
            td = document.createElement('td');
            td.setAttribute('class', 'table_input_td');
            if (j == 0) {
                input = document.createElement('a');
                if (deletable == 'true') {
                    input.addEventListener('click', function (event) {
                        var arrInput = event.target.parentElement.parentElement.getElementsByTagName('input');
                        var deleteId = null;
                        for (var i in arrInput) {
                            if (arrInput[i].type.toLowerCase() == 'hidden') {
                                deleteId = arrInput[i].value;
                                break;
                            }
                        }
                        event.target.parentElement.parentElement.remove();
                        Actividad.removeRowTable(deleteId);
                    });
                    input.setAttribute('class', 'glyphicon glyphicon-trash btn btn-default btn-xs');
                    input.style.marginRight = '10px';
                }
                //se agrega ID del elemento
                var input2 = document.createElement('input');
                input2.id = 'tr_' + divId + '_id_' + c;
                input2.type = 'hidden';
                input2.value = c;
                td.appendChild(input2);
            }
            //Maquina
            else if (j == 1) {
                input = document.createElement('select');
                input.id = 'tr_' + divId + '_machine_id_' + c;
                input.setAttribute('class', 'select_style_none table_input');
                var option = document.createElement('option');
                option.value = 0;
                option.text = 'Seleccione....';
                input.appendChild(option);
                for (var k = 0; k < countData; k++) {
                    option = document.createElement('option');
                    option.value = Actividad.dataMachine[k].id;
                    option.text = Actividad.dataMachine[k].name + " " + Actividad.dataMachine[k].reference;
                    description = Actividad.dataMachine[k].description;
                    input.appendChild(option);
                }
                if (setData != undefined && setData.machine_id != undefined) {
                    input.value = setData.machine_id;
                }
            }
            if (editable == 'false') {
                input.setAttribute('readonly', 'true');
                input.disabled = true;
            }
            td.appendChild(input);
            row.appendChild(td);
        }
        //se agrega fila a la tabla
        body.append(row);
    };

    /**
     * Metodo que convierte los valores de la tabla en un objeto
     * @param {String} divId
     * @param {String} inputId
     */
    Actividad.tableToObject = function (divId, inputId) {
        var tableObject = {};
        var arr = [];
        for (var j = 0; j < Actividad.countTableElement; j++) {
            var elem = {};
            if (Util.getValue('tr_' + divId + '_id_' + j) != null) {
                elem.id = Util.getValue('tr_' + divId + '_id_' + j);
                elem.machine_id = Util.getValue('tr_' + divId + '_machine_id_' + j);
                if(elem.machine_id > 0){
                  arr.push(elem);
                }
            }
        }
        tableObject.elements = arr;
        document.getElementById(inputId).value = JSON.stringify(tableObject);
    };

    /**
     * Metodo que convierte el objeto que contiene los datos, en una tabla
     * @param {String} tableId
     * @param {String} inputId
     */
    Actividad.objectToTable = function (tableId, inputId) {
        if (document.getElementById(inputId).value != '') {
            var elem = JSON.parse(document.getElementById(inputId).value);
            $.each($('#' + tableId + ' input[type="text"]'), function (k, v) {
                var val = elem[v.name];
                v.checked = false;
                if (val == 'si') {
                    v.checked = true;
                }
            });
        }
    };

    /**
     * Metodo que inicializa el modulo
     */
    Actividad.initialize = function () {
        Actividad.actividadId = $('#activity_id').val();
        Actividad.divDetails = 'div_details';
        //Carga la tabla dinamica
        Actividad.loadDataTable();
        $('#form_activity').submit(function (event) {
            //event.preventDefault();
            Actividad.tableToObject(Actividad.divDetails, 'table_details');
            return true;
        });
    };

})();
/** funcion que se ejecuta al terminar el cargar el documento */
$(function () {
    Actividad.initialize();
});
