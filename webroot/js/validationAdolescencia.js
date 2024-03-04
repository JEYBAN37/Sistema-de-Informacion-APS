 // Establecer el campo de fecha de nacimiento como vacío


function gestacion(id) {
	if (id === "Si") {
		$("#yes").show();
		$("#not").hide();
	} else if (id === "No") {
		$("#yes").hide();
		$("#not").hide();
	}
}

function iniciovidasexual(id) {
	if (id === "Si") {
		$("#yess").show();
		$("#nott").hide();
	} else if (id === "No") {
		$("#yess").hide();
		$("#nott").hide();
	} else if (id === "SD") {
		$("#yess").hide();
		$("#nott").hide();
	} else if (id === "No informa") {
		$("#yess").hide();
		$("#nott").hide();
	}
}

function mujer(id) {
	if (id === "Si") {
		$("#yesss").show();
		$("#nottt").hide();
	} else if (id === "No") {
		$("#yesss").hide();
		$("#nottt").hide();
	} else if (id === "SD") {
		$("#yesss").hide();
		$("#nottt").hide();
	} else if (id === "No informa") {
		$("#yesss").hide();
		$("#nottt").hide();
	}
}

function canalizacion(id) {
	if (id != "No") {
		$("#Canalizacion").show();
	} else {
		$("#Canalizacion").hide();
	}
}

function spa(id) {
	if (id != "No") {
		$("#Consumospa").show();
	} else {
		$("#Consumospa").hide();
	}
}

function psicosocial(id) {
	if (id != "No") {
		$("#Psicosocial").show();
	} else {
		$("#Psicosocial").hide();
	}
}
function cronica(id) {
	if (id != "No" && selectedValue !== 'SD' && selectedValue !== 'No aplica') {
		$("#Cronica").show();
	} else {
		$("#Cronica").hide();
	}
}



	
	document.addEventListener('DOMContentLoaded', function() {
        var condicioncronicaSelect = document.getElementById('condicioncronica');
       
		
    
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
    
            if (selectedValue !== 'No' && selectedValue !== 'SD' && selectedValue !== '' && selectedValue !== 'No aplica ') {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos condicioncronica y condicioncronica1
        condicioncronicaSelect.addEventListener('change', function() {
            applyRedValidation(condicioncronicaSelect);
        });
    
       
		

	
    
        // Aplica la validación cuando se carga la página
        applyRedValidation(condicioncronicaSelect);
      
		
    });

	document.addEventListener('DOMContentLoaded', function() {
        var saludoralSelect = document.getElementById('saludoral');
        var metodopfSelect = document.getElementById('metodosanticonceptivos');		
		var vacunacionSelect = document.getElementById('esquemavacunacion'); 
		var desparasitacionSelect = document.getElementById('desparasitacion');
		
	
    
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
			
    
            if (selectedValue == 'No' ) {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos salud oral, planificacion famliar, citologia, vacunacion,
        saludoralSelect.addEventListener('change', function() {
            applyRedValidation(saludoralSelect);
        });
		 
		  metodopfSelect.addEventListener('change', function() {
            applyRedValidation(metodopfSelect);
        });

		
		 vacunacionSelect.addEventListener('change',function(){
			applyRedValidation(vacunacionSelect);
		 });	
		 
		 desparasitacionSelect.addEventListener('change', function() {
            applyRedValidation(desparasitacionSelect);
        });

		// Aplica la validación cuando se carga la página
        applyRedValidation(saludoralSelect);
		applyRedValidation(metodopfSelect);		
		applyRedValidation(vacunacionSelect);	
		applyRedValidation(desparasitacionSelect);
		
		
      
    });
	document.addEventListener('DOMContentLoaded', function() {
      
		var spaSelect = document.getElementById('consumospa');
		var spa1Select = document.getElementById('consumospa1');
		var maltratoSelect = document.getElementById('sopechamaltrato');
		var riesgoSelect = document.getElementById('riesgopsicosocial');
		var riesgo1Select = document.getElementById('riesgopsicosocial1');
		var alarmaSelect = document.getElementById('riesgoembarazo');
    
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
			
    
            if (selectedValue !== 'No' && selectedValue !== 'SD' && selectedValue !== '' && selectedValue !== 'No aplica ') {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos Cosumo SPA, maltrato, riesgo 
       
		 

		 spa1Select.addEventListener('change',function(){
			applyRedValidation(spa1Select);
		 });

		 spaSelect.addEventListener('change',function(){
			applyRedValidation(spaSelect);
		 });
		 maltratoSelect.addEventListener('change',function(){
			applyRedValidation(maltratoSelect);
		 });
		 riesgo1Select.addEventListener('change',function(){
			applyRedValidation(riesgo1Select);
		 });
		 riesgoSelect.addEventListener('change',function(){
			applyRedValidation(riesgoSelect);
		 });
		 alarmaSelect.addEventListener('change',function(){
			applyRedValidation(alarmaSelect);
		 });		 

        // Aplica la validación cuando se carga la página        
		
				
		applyRedValidation(spaSelect);
		applyRedValidation(spa1Select);
		applyRedValidation(maltratoSelect);		
		applyRedValidation(riesgo1Select);
		applyRedValidation(riesgoSelect);
		applyRedValidation(alarmaSelect);
		
      
    });

	document.addEventListener('DOMContentLoaded', function() {
      
		var itsSelect = document.getElementById('infeccionestransmisionsexual');
		
		
    
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
			
    
            if (selectedValue == 'Si' ) {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos Cosumo SPA, maltrato, riesgo 
       
		 

		 itsSelect.addEventListener('change',function(){
			applyRedValidation(itsSelect);
		 });

		
		 

        // Aplica la validación cuando se carga la página
        applyRedValidation(itsSelect);
		
		
      
    });

	document.addEventListener('DOMContentLoaded', function () {
		const tensionArterialInput = document.querySelector('.tension-arterial-input');
		const mensajeTensionArterial = document.getElementById('mensaje-tension-arterial');
	
		tensionArterialInput.addEventListener('input', function () {
			const valor = tensionArterialInput.value;
	
			// Dividir la cadena en dos partes (sistólica y diastólica)
			const partes = valor.split('/');
			const sistolica = parseInt(partes[0]);
			const diastolica = parseInt(partes[1]);
	
			if (sistolica > 90 && diastolica > 60) {
				tensionArterialInput.style.color = 'green'; // Tensión óptima
				mensajeTensionArterial.textContent = 'Óptima';mensajeTensionArterial.style.color = 'black';
			} else if (sistolica <= 90 && diastolica <= 60) {
				tensionArterialInput.style.color = 'rpurple'; // Tensión baja
				mensajeTensionArterial.textContent = 'Grave';mensajeTensionArterial.style.color = 'black';
			} 			
			else if (sistolica < 130 && diastolica < 85) {
				tensionArterialInput.style.color = 'blue'; // Tensión normal
				mensajeTensionArterial.textContent = 'Normal';
			} else if (sistolica >= 130 && sistolica <= 139 && diastolica >= 85 && diastolica <= 89) {
				tensionArterialInput.style.color = 'yellow'; // Tensión normal-alta
				mensajeTensionArterial.textContent = 'Normal-alta';mensajeTensionArterial.style.color = 'black';
			} else if (sistolica >= 140 && sistolica <= 159 && diastolica >= 90 && diastolica <= 99) {
				tensionArterialInput.style.color = 'orange'; // Tensión ligera
				mensajeTensionArterial.textContent = 'Ligera';mensajeTensionArterial.style.color = 'black';
			} else if (sistolica >= 160 && sistolica <= 179 && diastolica >= 100 && diastolica <= 109) {
				tensionArterialInput.style.color = 'red'; // Tensión moderada
				mensajeTensionArterial.textContent = 'Moderada';mensajeTensionArterial.style.color = 'black';
			} 
			else {
				tensionArterialInput.style.color = 'purple'; // Tensión grave
				mensajeTensionArterial.textContent = 'Grave';
			}
		});
	});

	


	function mostrar(id) {
		if (id === "Mujer") {
			$("#si").show();
			$("#no").hide();
		} else if (id === "Hombre") {
			$("#si").hide();
			$("#no").hide();
		}

	

		document.getElementById('calcularIMC').addEventListener('click', function() {
			var peso = parseFloat(document.getElementById('peso').value);
			var talla = parseFloat(document.getElementById('talla').value);

			if (!isNaN(peso) && !isNaN(talla) && talla > 0) {
				var altura = talla / 100; // Convertir de cm a m
				var imc = peso / (altura * altura);

				// Mostrar el IMC calculado en el campo indicemasacorporal
				var imcField = document.getElementById('indicemasacorporal');
				imcField.value = imc.toFixed(2); // Redondear a 2 decimales

				// Determinar el mensaje y el color según el rango del IMC
				var mensaje = '';
				if (imc < 18.5) {
					mensaje = 'Peso insuficiente';
					imcField.style.color = 'red'; // Cambiar el color del texto a rojo
				} else if (imc >= 18.5 && imc <= 24.9) {
					mensaje = 'Peso normal o saludable';
					imcField.style.color = 'green'; // Cambiar el color del texto a verde
				} else if (imc >= 25.0 && imc <= 29.9) {
					mensaje = 'Sobrepeso';
					imcField.style.color = 'orange'; // Cambiar el color del texto a naranja
				} else {
					mensaje = 'Obesidad';
					imcField.style.color = 'red'; // Cambiar el color del texto a rojo
				}

				// Mostrar el mensaje en el elemento mensajeIMC
				var mensajeIMC = document.getElementById('mensajeIMC');
				mensajeIMC.textContent = mensaje;
			} else {
				alert('Por favor, ingrese valores válidos para peso y talla.');
			}
		});


		

	}
