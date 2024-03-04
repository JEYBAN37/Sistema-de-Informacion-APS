 // Establecer el campo de fecha de nacimiento como vacío


 function vulnerable(id) {
	if (id != "No") {
		$("#yes").show();
	} else {
		$("#yes").hide();
	}
}

function cronica(id) {
    if (id !== "No" && id !== 'SD' && id !== 'No aplica') {
        $("#Cronica").show();
    } else {
        $("#Cronica").hide();
    }
}

function sintomatico(id) {
    if (id !== "No" && id !== 'SD' && id !== 'No aplica') {
        $("#Sintomatico").show();
    } else {
        $("#Sintomatico").hide();
    }
}

function psicosocial(id) {
	if (id !== "No" && id !== 'SD' && id !== 'No aplica') {
		$("#Psicosocial").show();
	} else {
		$("#Psicosocial").hide();
	}
}

function programaSocial(id) {
	if (id !== "No" && id !== 'SD' && id !== 'No aplica' && id !== 'No sabe' && id !== 'No recibe') {
		$("#Social").show();
	} else {
		$("#Social").hide();
	}
}



