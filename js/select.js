document.body.onload = function () {
    var selectArea = document.querySelector('#area');
    var selectMaquina = document.querySelector('#maquina');
    function textMaquina() {
        var newoption = document.createElement('option');
        newoption.value = null;
        newoption.text = "-- Seleccionar Máquina --";
        selectMaquina.appendChild(newoption);
    }
    function resetSelect() {
        $("#maquina").empty();
        textMaquina();
    }
    selectArea.addEventListener('change', (event) => {
        var option = event.target.value;
        var array = [];
        resetSelect();
        if (option == 'Irradiado') {
            array = ['LIR601']
        } else if (option == "Retrabajo") {
            array = ['LRP601', 'LRP602'];
        } else if (option == "Termo fijo") {
            array = ['LAF601', 'LAF602', 'LAF603', 'LAF604', 'LAF605', 'LAF606', 'LAF607'];
        } else if (option == "Termo plástico") {
            array = ['LAP601', 'LAP602', 'LAP603', 'LAP604', 'LAP605', 'LAP606', 'LAP607', 'LAP608', 'LAP609', 'LAP610', 'LAP611'];
        } else if (option == null) {
            resetSelect();
        }
        for (var x = 0; x < array.length; x++) {
            var newoption = document.createElement('option');
            newoption.value = array[x];
            newoption.text = array[x];
            selectMaquina.appendChild(newoption);
        }
    });
};
