

function canalizacion(id) {
	if (id != "No") {
		$("#Canalizacion").show();
	} else {
		$("#Canalizacion").hide();
	}
}


	
	document.addEventListener('DOMContentLoaded', function() {
        var condicioncronicaSelect = document.getElementById('condicioncronica');
       
    
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
    
            if (selectedValue !== 'No' && selectedValue !== 'SD' && selectedValue !== '') {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos condicioncronica y desparasitacion
        condicioncronicaSelect.addEventListener('change', function() {
            applyRedValidation(condicioncronicaSelect);
        });
    
		
    
        // Aplica la validación cuando se carga la página
        applyRedValidation(condicioncronicaSelect);
       
    });

	document.addEventListener('DOMContentLoaded', function() {
		var saludoralSelect = document.getElementById('saludoral');  
		var vacunacionSelect = document.getElementById('esquemavacunacion'); 
		var cydSelect = document.getElementById('crecimientoydesarrollo'); 
		var desparasitacionSelect = document.getElementById('desparasitacion');
	
		// Función para aplicar la validación de color rojo
		function applyRedValidation(selectElement) {
			var selectedValue = selectElement.value;
			if (selectedValue === 'No' || selectedValue === 'Incompleto' || selectedValue === 'No inscrito en CYD' ) {
				selectElement.style.color = 'red';
			} else {
				selectElement.style.color = '';
			}
		}
	
		// Agrega eventos de cambio para los campos salud oral y vacunación
		saludoralSelect.addEventListener('change', function() {
			applyRedValidation(saludoralSelect);
		});
	
		vacunacionSelect.addEventListener('change', function() {
			applyRedValidation(vacunacionSelect);
		});

		cydSelect.addEventListener('change', function() {
			applyRedValidation(cydSelect);
		});

		desparasitacionSelect.addEventListener('change', function() {
            applyRedValidation(desparasitacionSelect);
        });
	
		// Aplica la validación cuando se carga la página
		applyRedValidation(saludoralSelect);
		applyRedValidation(vacunacionSelect);
		applyRedValidation(cydSelect);
		applyRedValidation(desparasitacionSelect);
	});
	document.addEventListener('DOMContentLoaded', function() {   
			var maltratoSelect = document.getElementById('sopechamaltrato');
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
			
    
            if (selectedValue !== 'No' && selectedValue !== '' && selectedValue !== 'No informa' && 'SD') {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos maltrato, riesgo 
       
		
		 maltratoSelect.addEventListener('change',function(){
			applyRedValidation(maltratoSelect);
		 });
		

        // Aplica la validación cuando se carga la página        
		
				
		
		applyRedValidation(maltratoSelect);		
		
		
      
    });

	document.addEventListener('DOMContentLoaded', function() {   
		var desnutricionSelect = document.getElementById('desnutricion');
	// Función para aplicar la validación de color rojo
	function applyRedValidation(selectElement) {
		var selectedValue = selectElement.value;
		

		if (selectedValue !== 'No informa'  && selectedValue !== 'Talla adecuada para la edad' && selectedValue !== 'No informa'  
		&& selectedValue !== 'SD' 
		&& selectedValue !== 'Peso adecuado para la talla' 
		&& selectedValue !== 'Talla adecuada para la edad'
		&& selectedValue !== ''
		) {

			selectElement.style.color = 'red';
		} else {
			selectElement.style.color = '';
		}
	}

	
   
	
	desnutricionSelect.addEventListener('change',function(){
		applyRedValidation(desnutricionSelect);
	 });
	

	// Aplica la validación cuando se carga la página        
	
			
	
	applyRedValidation(desnutricionSelect);		
	
	
  
});

