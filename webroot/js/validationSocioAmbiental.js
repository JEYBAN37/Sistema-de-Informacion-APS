 // Establecer el campo de fecha de nacimiento como vacío



 document.addEventListener('DOMContentLoaded', function() {
	var hacinamientoSelect = document.getElementById('hacinamiento');
   

	
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
hacinamientoSelect.addEventListener('change', function() {
	applyRedValidation(hacinamientoSelect);
});



// Aplica la validación cuando se carga la página
applyRedValidation(hacinamientoSelect);

});

document.addEventListener('DOMContentLoaded', function() {
	var vacunacionSelect = document.getElementById('vacunacion');
	var desparasitacionSelect = document.getElementById('desparasitacion');
   

	
 // Función para aplicar la validación de color rojo
 function applyRedValidation(selectElement) {
	var selectedValue = selectElement.value;

	if (selectedValue !== 'Si' && selectedValue !== 'SD' && selectedValue !== 'No aplica') {
		selectElement.style.color = 'red';
	} else {
		selectElement.style.color = '';
	}
}

// Agrega eventos de cambio para los campos condicioncronica y desparasitacion
vacunacionSelect.addEventListener('change', function() {
	applyRedValidation(vacunacionSelect);
});

desparasitacionSelect.addEventListener('change', function() {
	applyRedValidation(desparasitacionSelect);
});



// Aplica la validación cuando se carga la página
applyRedValidation(vacunacionSelect);
applyRedValidation(desparasitacionSelect);

});



