$(function() {

     var edad_data = [
        {"elapsed": '0 a 5', Hombre: 57, Mujer: 61, Total: 118},
        {"elapsed": '6 a 12', Hombre: 305, Mujer: 448, Total: 752},
        {"elapsed": '13 a 18', Hombre: 205, Mujer: 721, Total: 926},
        {"elapsed": '18 a 24', Hombre: 490, Mujer: 1778, Total: 2268},
        {"elapsed": '25 a 40', Hombre: 326, Mujer: 943, Total: 1269},
        {"elapsed": '41 a 60', Hombre: 479, Mujer: 528, Total: 1007},
        {"elapsed": '61 y mas', Hombre: 97, Mujer: 176, Total: 273},
        {"elapsed": 'Sin dato', Hombre: 30, Mujer: 69, Total: 99}
      ];

      Morris.Line({
        element: 'morris-area-chart',
        data: edad_data,
        xkey: 'elapsed',
        ykeys: ['Hombre','Mujer','Total'],
        labels: ['Hombre', 'Mujer', 'Total'],
        hideHover: 'auto',
        parseTime: false
      });

   var participante_data = [
        {"elapsed": 'CSSM', Participantes: 2114},
        {"elapsed": 'GDPV', Participantes: 375},
        {"elapsed": 'SAL', Participantes: 1074},
        {"elapsed": 'SAN', Participantes: 664},
        {"elapsed": 'SDSDR', Participantes: 1498},
        {"elapsed": 'TDM', Participantes: 574},
        {"elapsed": 'VSCNT', Participantes: 1773},
        {"elapsed": 'VSCT', Participantes: 1756}
      ];

  Morris.Area({
        element: 'morris-area-chart1',
        data: participante_data,
        xkey: 'elapsed',
        // ykeys: ['Hombre','Mujer','Total'],
        //labels: ['Hombre', 'Mujer', 'Total'],
        ykeys: ['Participantes'],
        labels: ['Participantes'],
        parseTime: false,
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Información para la salud",
            value: 29.53
        }, {
            label: "Educación para la salud",
            value: 36.23
        }, {
            label: "Fortalecimiento social-comunitario",
            value: 16.87
        }, {
            label: "Jornadas de salud",
            value: 0.74
         }, {
            label: "Otras",
            value: 16.63   
        }],
        resize: true,
             hideHover: 'auto'
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'CSSM',
            a: 75
           
        }, {
            y: 'GDPV',
            a: 44
            
        }, {
            y: 'SAL',
            a: 52
            
        }, {
            y: 'SAN',
            a: 33
           
        }, {
            y: 'SDSDR',
            a: 66
           
        }, {
            y: 'TDM',
            a: 50
           
        }, {
            y: 'VSCNT',
            a: 32
            
        }, {
            y: 'VSCT',
            a: 51
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Actividades'],
        hideHover: 'auto',
        resize: true,
        pointSize: 2,       
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart1',
        data: [{
            y: '2014',
            a: '1493',
            b: 149
        }, {
            y: '2015',
            a: '3177',
            b: 272
        }, {
            y: '2016',
            a: '3881',
            b: 332
        }, {
            y: '2017',
            a: '2973',
            b: 183
        }, {
            y: '2018',
            a: '12082',
            b: 308
        }, {
            y: '2019',
            a: '6763',
            b: 403
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Participantes', 'Actividades'],
        hideHover: 'auto',
        resize: true
    });
    
});
