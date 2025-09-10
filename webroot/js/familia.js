$(document).ready(function() {


    function calcularApgar() {
       
        let sumaApgar = 0;

        $('select.sumar').each(function() {
            sumaApgar += parseInt($(this).val()) || 0;
        });

        $('#resultado-input').val(sumaApgar);
       

        var apgarField = document.getElementById('resultado-input');
        var resultApgar = document.getElementById('result');

        switch (true) {
            case sumaApgar === 0:
                apgarField.style.color = 'red';
               resultApgar.value ='Sin resultado';
                break;
            case sumaApgar <= 9:
                apgarField.style.color = 'red';
               resultApgar.value ='4.Disfunción severa';
                break;

            case sumaApgar >= 10 && sumaApgar <= 12:
                apgarField.style.color = 'orange';
                resultApgar.value = '3.Disfunción moderada';
                break;

            case sumaApgar >= 13 && sumaApgar <= 16:
                apgarField.style.color = '#FAA80D';
                resultApgar.value = '2.Disfunción leve';
                break;

            case sumaApgar >= 17:
                apgarField.style.color = 'green';
                resultApgar.value = '1.Normal';
                break;

            default:
                apgarField.style.color = 'black';
                resultApgar.value = '';
        }

        var apgarField = document.getElementById('apgarFuncionalidad');
      
    }

    $('select.sumar').on('change', calcularApgar);
    calcularApgar();


});


$(document).ready(function() {

    function calcularZarit() {
       
        let sumaZarit = 0;

        $('select.sumar2').each(function() {
            sumaZarit += parseInt($(this).val()) || 0;
        });

        $('#Zarit-input').val(sumaZarit);

        var zaritField = document.getElementById('Zarit-input');
        var resultZarit = document.getElementById('result2');

        switch (true) {
            case sumaZarit === 0:
                zaritField.style.color = 'red';
                resultZarit.value ='Sin resultado';

                break;
            case sumaZarit <= 46:
                zaritField.style.color = 'green';
                resultZarit.value = '1.Ausencia de sobrecarga';
                break;

            case sumaZarit >= 47 && sumaZarit <= 55:
                zaritField.style.color = 'orange';
                resultZarit.value = '2.Sobrecarga ligera';
                break;

            case sumaZarit >= 59:
                zaritField.style.color = 'red';
                resultZarit.value = '3.Sobrecarga intensa';
                break;

            default:
                zaritField.style.color = 'black';
        }



        var zaritField = document.getElementById('zaritFuncionalidad');
        
    }


    $('select.sumar2').on('change', calcularZarit);
    calcularZarit();

});





