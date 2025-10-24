// Establecer el campo de fecha de nacimiento como vacío

// Función para aplicar la validación de color rojo
function applyRedValidation(selectElement, campo) {
  var selectedValue = selectElement.value;
  console.log("Valor seleccionado:", selectedValue);

  if (selectedValue === campo && selectedValue !== "") {
    selectElement.style.color = "red";
  } else {
    selectElement.style.color = "black";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var hacinamientoSelect = document.getElementById("hacinamiento");
  var vacunacionSelect = document.getElementById("vacunacion");
  var desparasitacionSelect = document.getElementById("desparasitacion");

  // Agrega eventos de cambio para los campos hacinamiento, vacunacion y desparasitacion
  hacinamientoSelect.addEventListener("change", function () {
    applyRedValidation(hacinamientoSelect, "Si");
  });
  vacunacionSelect.addEventListener("change", function () {
    applyRedValidation(vacunacionSelect, "No");
  });

  desparasitacionSelect.addEventListener("change", function () {
    applyRedValidation(desparasitacionSelect, "No");
  });

  // Aplica la validación cuando se carga la página
  applyRedValidation(hacinamientoSelect, "Si");
  applyRedValidation(vacunacionSelect, "No");
  applyRedValidation(desparasitacionSelect, "No");
});
