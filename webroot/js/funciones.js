/*  * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. */
function validar() {    var c1 = document.getElementById("cla");    var c2 = document.getElementById("con");    if (c1.value.length < 8) {        alert("La clave debe tener al menos 8 caracteres");        c1.value = "";        c2.value = "";        c1.focus();    } else if (c1.value !== c2.value) {        alert("La contraseña y la confirmación son diferentes");        c1.value = "";        c2.value = "";        c1.focus();    }}
function captcha() {    var lienzo = document.getElementById("myCanvas");    var vercod = document.getElementById("vercod");    var dibujo = lienzo.getContext("2d");    var texto = "";    var letra = "";    var numero = 0;    for (ind = 0; ind < 5; ind++) {        while ((numero < 49) || ((numero > 57) && (numero < 65)) || (numero > 90)) {            numero = parseInt(Math.random() * 255);        }        texto += String.fromCharCode(numero);        numero = 0;    }    var gra = dibujo.createLinearGradient(0, 0, lienzo.width, 0);    gra.addColorStop("0", "#FF0000");    gra.addColorStop("0.5", "#90EC3D");    gra.addColorStop("1.0", "#0000FF");    dibujo.font = "bold 40px Serif";    dibujo.fillStyle = gra;    dibujo.fillRect(0, 0, lienzo.width, lienzo.height);    dibujo.fillStyle = "rgba(0, 0, 0, 0.3)";    dibujo.fillText(texto, ((lienzo.width - dibujo.measureText(texto).width) / 2), (lienzo.height - 20));    vercod.value = texto;}
function verCod() {    var codigo = document.getElementById("codigo");        var vercod = document.getElementById("vercod");    if (codigo.value.toUpperCase() !== vercod.value) {        alert("El codigo no corresponde");        codigo.value = "";        codigo.focus();        captcha();    }}
function errFrm() {    var frmval = document.ingusu.checkValidity();    if (!frmval) {        alert("Errores en el formulario");        c1.value = "";        c2.value = "";        c1.focus();    } else {        document.ingusu.submit();    }}
function pasar(chk) {    var usus = document.getElementById("usus");    if (chk.checked) {        usus.value += "|" + chk.value;    } else {        var us = usus.value.split("|");        usus.value = "";        for (i = 1; i < us.length; i++) {            if ((us[i] != chk.value)&&(us[i]!="")) {                usus.value += "|" + us[i];            }        }    }}
function mayus(cmp) {    cmp.value = cmp.value.toUpperCase();}


var js = jQuery.noConflict();
js(document).ready(function () {
        js("#dimension_id").change(function () {
        	js.ajax({
        		type:"GET",
        		url:"../verificacionesController/add"+js(this).val(), 
        		beforeSend:function () {
        			js('#imgcargas').html('<div class="rating-flash" id="cargando_div"><img src="..img/escudo.png" whith= "60px;" height="60px;"/>Cargando</div>');

        		},
        		success: function (respuesta) {
        			js('#imgcargas').html(respuesta);
        		}




        	})
           
        })
       
    })