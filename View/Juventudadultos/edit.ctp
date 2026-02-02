<?php $this->layout = 'default_familia' ?>
<?php echo $this->Form->create('Juventudadulto', [
    'class' => 'space-y-6',
    'novalidate' => true
]);
echo $this->Form->hidden('id');
echo $this->Form->hidden('familia_id');

$TipoDeDocumentoOptions = array(
	'CC' => 'Cedula de ciudadania',
	'TI' => 'Tarjeta de identidad',
	'PPT' => 'Permiso Protección Temporal',
	'RC' => 'Registro civil',
	'MS' => 'Menor sin identificación',
	'AS' => 'Adulto sin identificación',
	'CE' => 'Cédula de extranjería',

);

$generoOption = [
    'Masculino' => 'Masculino',
    'Femenino' => 'Femenino',
    'No binario' => 'No binario',
    'Prefiere no informar' => 'Prefiere no informar',

];

$optionAnsiedad = [
	'0' => 'para nada',
	'1' => 'Algunos días',
	'2' => 'Mas de la mitad de los días',
	'3' => 'Casi todos los días',
];

$aseguradoraOption = [
    'Sanitas' => 'Sanitas',
    'Emssanar' => 'Emssanar',
    'Nueva EPS' => 'Nueva EPS',
    'Mallamas' => 'Mallamas',
    'Famisanar' => 'Famisanar',
    'Asmet Salud' => 'Asmet Salud',
    'Sanidad PONAL' => 'Sanidad PONAL',
    'PROINSALUD' => 'PROINSALUD',
    'Fondo UDENAR' => 'Fondo UDENAR',
    'Medicina Prepagada' => 'Medicina Prepagada',
    'Sin afiliación' => 'Sin afiliación',

    'COMFAMILIAR CAMACOL' => 'COMFAMILIAR CAMACOL',
    'COMFAMA' => 'COMFAMA',
    'COMFAMILIAR CARTAGENA' => 'COMFAMILIAR CARTAGENA',
    'COMFABOY' => 'COMFABOY',
    'COMFACOR' => 'COMFACOR',
    'CAFAM' => 'CAFAM',
    'COMFAMILIAR DE LA GUAJIRA' => 'COMFAMILIAR DE LA GUAJIRA',
    'COMFAMILIAR HUILA' => 'COMFAMILIAR HUILA',
    'COMFAMILIAR NARIÑO' => 'COMFAMILIAR NARIÑO',
    'COMFENALCO QUINDIO' => 'COMFENALCO QUINDIO',
    'COMFAMILIAR RISARALDA' => 'COMFAMILIAR RISARALDA',
    'CAJASAI' => 'CAJASAI',
    'CAJASAN' => 'CAJASAN',
    'COMFENALCO SANTANDER' => 'COMFENALCO SANTANDER',
    'COMFASUCRE' => 'COMFASUCRE',
    'CAFABA' => 'CAFABA',
    'COMFENALCO TOLIMA' => 'COMFENALCO TOLIMA',
    'EPSS COMFACARTAGO' => 'EPSS COMFACARTAGO',
    'COMFANORTE' => 'COMFANORTE',
    'COMFAORIENTE' => 'COMFAORIENTE',
    'CCF050 COMFAORIENTE' => 'CCF050 COMFAORIENTE',
    'COMFACUNDI' => 'COMFACUNDI',
    'EPSS COMFENALCO CUNDINAMARCA' => 'EPSS COMFENALCO CUNDINAMARCA',
    'CAJACOPI ATLANTICO' => 'CAJACOPI ATLANTICO',
    'COLSUBSIDIO' => 'COLSUBSIDIO',
    'COMFACHOCO' => 'COMFACHOCO',
    'COMFACA' => 'COMFACA',
    'C.C.F. COMFACHOCO' => 'C.C.F. COMFACHOCO',
    'COMFAMILIAR GUAJIRA' => 'COMFAMILIAR GUAJIRA',
    'CCF de Sucre COMFASUCRE' => 'CCF de Sucre COMFASUCRE',
    'CCFC50 COMFAORIENTE Régimen por efecto de Movilidad' => 'CCFC50 COMFAORIENTE Régimen por efecto de Movilidad',
    'EPM MEDELLIN' => 'EPM MEDELLIN',
    'FONDO DE PASIVO SOCIAL FERROCARRILES' => 'FONDO DE PASIVO SOCIAL FERROCARRILES',
    'ALIANSALUD' => 'ALIANSALUD',
    'SALUD TOTAL' => 'SALUD TOTAL',
    'CAFESALUD' => 'CAFESALUD',
    'ISS' => 'ISS',
    'UNIMEC' => 'UNIMEC',
    'COMPENSAR' => 'COMPENSAR',
    'COMFENALCO ANTIOQUIA' => 'COMFENALCO ANTIOQUIA',
    'SURA - Compania Suramericana de Servicios de Salud SA' => 'SURA - Compania Suramericana de Servicios de Salud SA',
    'COLSEGUROS E.P.S. EN LIQUIDACION' => 'COLSEGUROS E.P.S. EN LIQUIDACION',
    'COMFENALCO VALLE' => 'COMFENALCO VALLE',
    'SALUDCOOP' => 'SALUDCOOP',
    'HUMANA VIVIR' => 'HUMANA VIVIR',
    'SALUD COLPATRIA' => 'SALUD COLPATRIA',
    'COOMEVA' => 'COOMEVA',
    'FAMISANAR' => 'FAMISANAR',
    'SERVICIO OCCIDENTAL DE SALUD SOS' => 'SERVICIO OCCIDENTAL DE SALUD SOS',
    'CAPRECOM' => 'CAPRECOM',
    'ARS CONVIDA' => 'ARS CONVIDA',
    'CRUZ BLANCA' => 'CRUZ BLANCA',
    'CAPRESOCA EPS' => 'CAPRESOCA EPS',
    'SOLSALUD' => 'SOLSALUD',
    'CALISALUD' => 'CALISALUD',
    'EPS SALUD CONDOR' => 'EPS SALUD CONDOR',
    'SELVASALUD SA' => 'SELVASALUD SA',
    'SALUD VIDA' => 'SALUD VIDA',
    'SALUD COLOMBIA' => 'SALUD COLOMBIA',
    'RED SALUD' => 'RED SALUD',
    'MULTIMEDICAS' => 'MULTIMEDICAS',
    'GOLDEN GROUP' => 'GOLDEN GROUP',
    'SAVIA SALUD' => 'SAVIA SALUD',
    'COOSALUD' => 'COOSALUD',
    'Medimas EPS S.A.S' => 'Medimas EPS S.A.S',
    'Fundación Salud MIA EPS' => 'Fundación Salud MIA EPS',
    'SALUD BOLIVAR EPS' => 'SALUD BOLIVAR EPS',
    'MUTUAL SER' => 'MUTUAL SER',
    'EPS La Guaitara' => 'EPS La Guaitara',
    'CONVIDA' => 'CONVIDA',
    'CAPRESOCA' => 'CAPRESOCA',
    'SALUDVIDA S.A.' => 'SALUDVIDA S.A.',
    'CAPITAL SALUD' => 'CAPITAL SALUD',
    'DUSAKAWI' => 'DUSAKAWI',
    'MANEXKA' => 'MANEXKA',
    'ASOCIACION INDIGENA DEL CAUCA AIC' => 'ASOCIACION INDIGENA DEL CAUCA AIC',
    'ANASWAYU' => 'ANASWAYU',
    'PIJAOSALUD' => 'PIJAOSALUD',
    'AIC' => 'AIC',
    'ANAS WAYUU' => 'ANAS WAYUU',
    'PIJAOS' => 'PIJAOS',

    'ESS EMDISALUD' => 'ESS EMDISALUD',
    'COMCAJA' => 'COMCAJA',
    'ESS COOSALUD' => 'ESS COOSALUD',
    'ESS ASMET SALUD' => 'ESS ASMET SALUD',
    'ASOCIACION SOLIDARIA DE SALUD DE ASTREA' => 'ASOCIACION SOLIDARIA DE SALUD DE ASTREA',
    'ESS AMBUQ' => 'ESS AMBUQ',
    'ESS ECOOPSOS' => 'ESS ECOOPSOS',
    'ESS COMPARTA' => 'ESS COMPARTA',
    'EMDISALUD ESS' => 'EMDISALUD ESS',
    'MUTUALSER' => 'MUTUALSER',
    'AMBUQ' => 'AMBUQ',
    'COOSALUD E.S.S.' => 'COOSALUD E.S.S.',
    'COMPARTA' => 'COMPARTA',
    'ASMETSALUD' => 'ASMETSALUD',
    'ECOOPSOS' => 'ECOOPSOS',

    'FONDO DE SOLIDARIDAD PENSIONAL' => 'FONDO DE SOLIDARIDAD PENSIONAL',
    'ECOPETROL' => 'ECOPETROL',
    'FUERZAS MILITARES' => 'FUERZAS MILITARES',
    'FONDO DE PRESTACIONES SOCIALES DEL MAGISTERIO' => 'FONDO DE PRESTACIONES SOCIALES DEL MAGISTERIO',
    'UNIDAD DE SALUD UNIVERSIDAD DEL ATLANTICO' => 'UNIDAD DE SALUD UNIVERSIDAD DEL ATLANTICO',
    'CAJA DE PREVISION SOCIAL DE LA U DE SANTANDER CAPRUIS' => 'CAJA DE PREVISION SOCIAL DE LA U DE SANTANDER CAPRUIS',
    'SERVICIO MEDICO DE LA UNIVERSIDAD DEL VALLE' => 'SERVICIO MEDICO DE LA UNIVERSIDAD DEL VALLE',
    'UNIDAD DE SALUD UNIVERSIDAD NACIONAL' => 'UNIDAD DE SALUD UNIVERSIDAD NACIONAL',
    'UNIDAD DE SALUD UNIVERSIDAD DEL CAUCA' => 'UNIDAD DE SALUD UNIVERSIDAD DEL CAUCA',
    'UNIDAD DE SALUD UNIVERSIDAD DEL CARTAGENA' => 'UNIDAD DE SALUD UNIVERSIDAD DEL CARTAGENA',
    'PROGRAMA DE SALUD UNIVERSIDAD DE ANTIOQUIA' => 'PROGRAMA DE SALUD UNIVERSIDAD DE ANTIOQUIA',
    'UNIDAD DE SALUD UNIVERSIDAD DEL CORDOBA' => 'UNIDAD DE SALUD UNIVERSIDAD DEL CORDOBA',
    'UNIDAD DE SALUD UPTC' => 'UNIDAD DE SALUD UPTC',

    'REUE02' => 'REUE02',
    'REUE03' => 'REUE03',
    'REUE04' => 'REUE04',
    'REUE05' => 'REUE05',
    'REUE06' => 'REUE06',
    'REUE07' => 'REUE07',
    'REUE09' => 'REUE09',

    'CAJASALUD EPSS UT' => 'CAJASALUD EPSS UT',
    'COMFAMILIARES EN SALUD UT' => 'COMFAMILIARES EN SALUD UT',
    'CONVENIO COMFENALCO UT' => 'CONVENIO COMFENALCO UT',
    'CONVENIO CAMACOL COMFAMA UT' => 'CONVENIO CAMACOL COMFAMA UT',
];

$estadoAfiliacionOption = [
    ' ' => 'Elegir',
    'Activo' => 'Activo',
    'Inactivo' => 'Inactivo',
    'No aplica' => 'No aplica',
];

$regimenOption = [
    'Subsidiado' => 'Subsidiado',
    'Contributivo' => 'Contributivo',
    'Regimen especial' => 'Régimen especial',
    'Regimen excepción' => 'Régimen excepción',
    'Particular' => 'Particular',
];

$rolOption = [
    '1.Jefe(a) de familia' => 'Jefe(a) de familia',
    '2.Cónyuge o compañero(a)' => 'Cónyuge o compañero(a)',
    '3.Hijo(a)' => 'Hijo(a)',
    '4.Hermano(a)' => 'Hermano(a)',
    '5.Padre o madre' => 'Padre o madre'
];

$etniaOption = [
    '1.Indígena ' => 'Indígena ',
    '2.ROM (Gitanos) ' => 'ROM (Gitanos) ',
    '3.Raizal (San Andrés y Providencia)'  => 'Raizal (San Andrés y Providencia) ',
    '4.Palenquero de San Basilio de Palenque ' => 'Palenquero de San Basilio de Palenque ',
    '5.Negro(a) ' => 'Negro(a) ',
    '6.Afrocolombiano ' => 'Afrocolombiano ',
    '7.Ninguna de las anteriores' => 'Ninguna de las anteriores'
];

$grupoPoblacional = [
    '1.Niñas, niños y adolescentes' => 'Niñas, niños y adolescentes',
    '2.Gestantes' => 'Gestantes',
    '3.Persona adulta mayor' => 'Persona adulta mayor',
    '4.Persona con condición de discapacidad' => 'Persona con condición de discapacidad',
    '5.Personas con orientación sexual diversa' => 'Personas con orientación sexual diversa',
    '6.Víctimas de violencia' => 'Víctimas de violencia',
    '7.Ninguno' => 'Ninguno'
];

$nivelEducativo = [
    '1.Preescolar ' => 'Preescolar',
    '2.Básica Primaria ' => 'Básica Primaria',
    '3.Básica Secundaria ' => 'Básica Secundaria',
    '4.Media Académica o Clásica ' => 'Media Académica o Clásica',
    '5.Media Técnica (Bachillerato Técnico) ' => 'Media Técnica (Bachillerato Técnico)',
    '6.Normalista ' => 'Normalista',
    '7.Técnica Profesional ' => 'Técnica Profesional',
    '8.Tecnológica ' => 'Tecnológica',
    '9.Profesional Especialización ' => 'Profesional Especialización',
    '10.Especialización ' => 'Especialización',
    '11.Maestría ' => 'Maestría',
    '12.Doctorado ' => 'Doctorado',
    '13.Ninguno' => 'Ninguno'
];

$optionOcupacion = [
    '' => 'Elegir',
    '110- Oficiales de las Fuerzas Militares' => '110- Oficiales de las Fuerzas Militares',
    '210- Suboficiales de las Fuerzas Militares' => '210- Suboficiales de las Fuerzas Militares',
    '310- Otros miembros de las Fuerzas Militares' => '310- Otros miembros de las Fuerzas Militares',
    '1111- Directores formuladores de políticas y normas' => '1111- Directores formuladores de políticas y normas',
    '1112- Directores del gobierno' => '1112- Directores del gobierno',
    '1113- Jefes de comunidades étnicas' => '1113- Jefes de comunidades étnicas',
    '1114- Dirigentes de organizaciones con un interés específico partidos políticos, sindicatos y organizaciones sociales' => '1114- Dirigentes de organizaciones con un interés específico partidos políticos, sindicatos y organizaciones sociales',
    '1120- Directores y gerentes generales' => '1120- Directores y gerentes generales',
    '1211- Directores financieros' => '1211- Directores financieros',
    '1212- Directores de recursos humanos' => '1212- Directores de recursos humanos',
    '1213- Directores de políticas y planificación' => '1213- Directores de políticas y planificación',
    '1219- Directores de administración y servicios no clasificados en otros grupos primarios' => '1219- Directores de administración y servicios no clasificados en otros grupos primarios',
    '1221- Directores de ventas y comercialización' => '1221- Directores de ventas y comercialización',
    '1222- Directores de publicidad y relaciones públicas' => '1222- Directores de publicidad y relaciones públicas',
    '1223- Directores de investigación y desarrollo' => '1223- Directores de investigación y desarrollo',
    '1311- Directores de producción agropecuaria y silvicultura' => '1311- Directores de producción agropecuaria y silvicultura',
    '1312- Directores de producción de piscicultura y pesca' => '1312- Directores de producción de piscicultura y pesca',
    '1321- Directores de industrias manufactureras' => '1321- Directores de industrias manufactureras',
    '1322- Directores de explotaciones de minería' => '1322- Directores de explotaciones de minería',
    '1323- Directores de empresas de construcción' => '1323- Directores de empresas de construcción',
    '1324- Directores de empresas de abastecimiento, distribución y afines' => '1324- Directores de empresas de abastecimiento, distribución y afines',
    '1330- Directores de servicios de tecnología de la información y las comunicaciones' => '1330- Directores de servicios de tecnología de la información y las comunicaciones',
    '1341- Directores de servicios de cuidados infantiles' => '1341- Directores de servicios de cuidados infantiles',
    '1342- Directores de servicios de salud' => '1342- Directores de servicios de salud',
    '1343- Directores de servicios de atención a personas mayores' => '1343- Directores de servicios de atención a personas mayores',
    '1344- Directores de servicios de bienestar social' => '1344- Directores de servicios de bienestar social',
    '1345- Directores de servicios de educación' => '1345- Directores de servicios de educación',
    '1346- Gerentes de sucursales de bancos, de servicios financieros y de seguros' => '1346- Gerentes de sucursales de bancos, de servicios financieros y de seguros',
    '1349- Directores y gerentes de servicios profesionales no clasificados en otros grupos primarios' => '1349- Directores y gerentes de servicios profesionales no clasificados en otros grupos primarios',
    '1411- Gerentes de hoteles' => '1411- Gerentes de hoteles',
    '1412- Gerentes de restaurantes' => '1412- Gerentes de restaurantes',
    '1420- Gerentes de comercios al por mayor y al por menor' => '1420- Gerentes de comercios al por mayor y al por menor',
    '1431- Gerentes de centros deportivos, de esparcimiento y culturales' => '1431- Gerentes de centros deportivos, de esparcimiento y culturales',
    '1439- Otros gerentes de servicios no clasificados en otros grupos primarios' => '1439- Otros gerentes de servicios no clasificados en otros grupos primarios',
    '2111- Físicos y astrónomos' => '2111- Físicos y astrónomos',
    '2112- Meteorólogos' => '2112- Meteorólogos',
    '2113- Químicos' => '2113- Químicos',
    '2114- Geólogos y geofísicos' => '2114- Geólogos y geofísicos',
    '2120- Matemáticos, actuarios y estadísticos' => '2120- Matemáticos, actuarios y estadísticos',
    '2131- Biólogos, botánicos, zoólogos y afines' => '2131- Biólogos, botánicos, zoólogos y afines',
    '2132- Agrónomos, silvicultores, zootecnistas y afines' => '2132- Agrónomos, silvicultores, zootecnistas y afines',
    '2133- Profesionales de la protección medioambiental' => '2133- Profesionales de la protección medioambiental',
    '2141- Ingenieros industriales y de producción' => '2141- Ingenieros industriales y de producción',
    '2142- Ingenieros civiles' => '2142- Ingenieros civiles',
    '2143- Ingenieros medioambientales' => '2143- Ingenieros medioambientales',
    '2144- Ingenieros mecánicos' => '2144- Ingenieros mecánicos',
    '2145- Ingenieros químicos' => '2145- Ingenieros químicos',
    '2146- Ingenieros de minas, metalúrgicos y afines' => '2146- Ingenieros de minas, metalúrgicos y afines',
    '2149- Ingenieros no clasificados en otros grupos primarios' => '2149- Ingenieros no clasificados en otros grupos primarios',
    '2151- Ingenieros electricistas' => '2151- Ingenieros electricistas',
    '2152- Ingenieros electrónicos' => '2152- Ingenieros electrónicos',
    '2153- Ingenieros de telecomunicaciones' => '2153- Ingenieros de telecomunicaciones',
    '2161- Arquitectos constructores' => '2161- Arquitectos constructores',
    '2162- Arquitectos paisajistas' => '2162- Arquitectos paisajistas',
    '2163- Diseñadores de productos y de prendas' => '2163- Diseñadores de productos y de prendas',
    '2164- Planificadores urbanos, regionales y de tránsito' => '2164- Planificadores urbanos, regionales y de tránsito',
    '2165- Cartógrafos y topógrafos' => '2165- Cartógrafos y topógrafos',
    '2166- Diseñadores gráficos y multimedia' => '2166- Diseñadores gráficos y multimedia',
    '2211- Médicos generales' => '2211- Médicos generales',
    '2212- Médicos especialistas' => '2212- Médicos especialistas',
    '2221- Profesionales de enfermería' => '2221- Profesionales de enfermería',
    '2222- Profesionales de partería' => '2222- Profesionales de partería',
    '2230- Profesionales de medicina tradicional y alternativa' => '2230- Profesionales de medicina tradicional y alternativa',
    '2240- Paramédicos e instrumentadores quirúrgicos' => '2240- Paramédicos e instrumentadores quirúrgicos',
    '2250- Veterinarios' => '2250- Veterinarios',
    '2261- Odontólogos' => '2261- Odontólogos',
    '2262- Farmacéuticos' => '2262- Farmacéuticos',
    '2263- Profesionales de la salud y la higiene laboral y ambiental' => '2263- Profesionales de la salud y la higiene laboral y ambiental',
    '2264- Fisioterapeutas' => '2264- Fisioterapeutas',
    '2265- Dietistas y nutricionistas' => '2265- Dietistas y nutricionistas',
    '2266- Fonoaudiólogos y terapeutas del lenguaje' => '2266- Fonoaudiólogos y terapeutas del lenguaje',
    '2267- Optómetras' => '2267- Optómetras',
    '2269- Otros profesionales de la salud no clasificados en otros grupos primarios' => '2269- Otros profesionales de la salud no clasificados en otros grupos primarios',
    '2310- Profesores de instituciones de educación superior' => '2310- Profesores de instituciones de educación superior',
    '2320- Profesores de formación profesional' => '2320- Profesores de formación profesional',
    '2330- Profesores de educación secundaria' => '2330- Profesores de educación secundaria',
    '2341- Profesores de educación primaria' => '2341- Profesores de educación primaria',
    '2342- Profesores de primera infancia' => '2342- Profesores de primera infancia',
    '2351- Especialistas en métodos pedagógicos' => '2351- Especialistas en métodos pedagógicos',
    '2352- Profesores de educación especial e inclusiva' => '2352- Profesores de educación especial e inclusiva',
    '2353- Otros profesores de idiomas' => '2353- Otros profesores de idiomas',
    '2354- Otros profesores de música' => '2354- Otros profesores de música',
    '2355- Otros profesores de artes' => '2355- Otros profesores de artes',
    '2356- Instructores de tecnología de la información' => '2356- Instructores de tecnología de la información',
    '2359- Otros profesionales de la educación no clasificados en otros grupos primarios' => '2359- Otros profesionales de la educación no clasificados en otros grupos primarios',
    '2411- Contadores' => '2411- Contadores',
    '2412- Asesores financieros y de inversiones' => '2412- Asesores financieros y de inversiones',
    '2413- Analistas financieros' => '2413- Analistas financieros',
    '2421- Analistas de gestión y organización' => '2421- Analistas de gestión y organización',
    '2422- Profesionales en políticas de administración' => '2422- Profesionales en políticas de administración',
    '2423- Profesionales de gestión de talento humano' => '2423- Profesionales de gestión de talento humano',
    '2424- Profesionales en formación y desarrollo de personal' => '2424- Profesionales en formación y desarrollo de personal',
    '2431- Profesionales de la publicidad y la comercialización' => '2431- Profesionales de la publicidad y la comercialización',
    '2432- Profesionales de relaciones públicas' => '2432- Profesionales de relaciones públicas',
    '2433- Profesionales de ventas técnicas y médicas (excluyendo las TIC)' => '2433- Profesionales de ventas técnicas y médicas (excluyendo las TIC)',
    '2434- Profesionales de ventas de tecnología de la información y las comunicaciones' => '2434- Profesionales de ventas de tecnología de la información y las comunicaciones',
    '2511- Analistas de sistemas' => '2511- Analistas de sistemas',
    '2512- Desarrolladores de software' => '2512- Desarrolladores de software',
    '2513- Desarrolladores web y multimedia' => '2513- Desarrolladores web y multimedia',
    '2514- Programadores de aplicaciones' => '2514- Programadores de aplicaciones',
    '2519- Desarrolladores y analistas de software y multimedia no clasificados en otros grupos primarios' => '2519- Desarrolladores y analistas de software y multimedia no clasificados en otros grupos primarios',
    '2521- Diseñadores y administradores de bases de datos' => '2521- Diseñadores y administradores de bases de datos',
    '2522- Administradores de sistemas' => '2522- Administradores de sistemas',
    '2523- Profesionales en redes de computadores' => '2523- Profesionales en redes de computadores',
    '2529- Profesionales en bases de datos y en redes de computadores no clasificados en otros grupos primarios' => '2529- Profesionales en bases de datos y en redes de computadores no clasificados en otros grupos primarios',
    '2611- Abogados' => '2611- Abogados',
    '2612- Jueces' => '2612- Jueces',
    '2619- Profesionales en derecho no clasificados en otros grupos primarios' => '2619- Profesionales en derecho no clasificados en otros grupos primarios',
    '2621- Archivistas y curadores de arte' => '2621- Archivistas y curadores de arte',
    '2622- Bibliotecarios, documentalistas y afines' => '2622- Bibliotecarios, documentalistas y afines',
    '2631- Economistas' => '2631- Economistas',
    '2632- Sociólogos, antropólogos y afines' => '2632- Sociólogos, antropólogos y afines',
    '2633- Filósofos, historiadores y especialistas en ciencias políticas' => '2633- Filósofos, historiadores y especialistas en ciencias políticas',
    '2634- Psicólogos' => '2634- Psicólogos',
    '2635- Profesionales del trabajo social y consejeros' => '2635- Profesionales del trabajo social y consejeros',
    '2636- Profesionales religiosos' => '2636- Profesionales religiosos',
    '2641- Autores y otros escritores' => '2641- Autores y otros escritores',
    '2642- Periodistas' => '2642- Periodistas',
    '2643- Traductores, intérpretes y otros lingüistas' => '2643- Traductores, intérpretes y otros lingüistas',
    '2651- Escultores, pintores artísticos y afines' => '2651- Escultores, pintores artísticos y afines',
    '2652- Compositores, músicos y cantantes' => '2652- Compositores, músicos y cantantes',
    '2653- Coreógrafos y bailarines' => '2653- Coreógrafos y bailarines',
    '2654- Directores y productores de cine, de teatro y afines' => '2654- Directores y productores de cine, de teatro y afines',
    '2655- Actores' => '2655- Actores',
    '2656- Locutores de radio, televisión y otros medios de comunicación' => '2656- Locutores de radio, televisión y otros medios de comunicación',
    '2659- Artistas creativos e interpretativos no clasificados en otros grupos primarios' => '2659- Artistas creativos e interpretativos no clasificados en otros grupos primarios',
    '3111- Técnicos en ciencias físicas y químicas' => '3111- Técnicos en ciencias físicas y químicas',
    '3112- Técnicos en ingeniería civil' => '3112- Técnicos en ingeniería civil',
    '3113- Electrotécnicos' => '3113- Electrotécnicos',
    '3114- Técnicos en electrónica' => '3114- Técnicos en electrónica',
    '3115- Técnicos en ingeniería mecánica' => '3115- Técnicos en ingeniería mecánica',
    '3116- Técnicos en química industrial' => '3116- Técnicos en química industrial',
    '3117- Técnicos de minas y metalurgia' => '3117- Técnicos de minas y metalurgia',
    '3118- Delineantes y dibujantes técnicos' => '3118- Delineantes y dibujantes técnicos',
    '3119- Técnicos en ciencias físicas y en ingeniería no clasificados en otros grupos primarios' => '3119- Técnicos en ciencias físicas y en ingeniería no clasificados en otros grupos primarios',
    '3121- Supervisores de minas' => '3121- Supervisores de minas',
    '3122- Supervisores de industrias manufactureras' => '3122- Supervisores de industrias manufactureras',
    '3123- Supervisores de la construcción' => '3123- Supervisores de la construcción',
    '3131- Operadores de plantas de producción de energía' => '3131- Operadores de plantas de producción de energía',
    '3132- Operadores de incineradores, instalaciones de tratamiento de agua y afines' => '3132- Operadores de incineradores, instalaciones de tratamiento de agua y afines',
    '3133- Controladores de instalaciones de procesamiento de productos químicos' => '3133- Controladores de instalaciones de procesamiento de productos químicos',
    '3134- Operadores de instalaciones de refinación de petróleo y gas natural' => '3134- Operadores de instalaciones de refinación de petróleo y gas natural',
    '3135- Operadores de procesos de producción de metales' => '3135- Operadores de procesos de producción de metales',
    '3139- Técnicos en control de procesos no clasificados en otros grupos primarios' => '3139- Técnicos en control de procesos no clasificados en otros grupos primarios',
    '3141- Técnicos en ciencias biológicas (excluyendo la medicina)' => '3141- Técnicos en ciencias biológicas (excluyendo la medicina)',
    '3142- Técnicos agropecuarios' => '3142- Técnicos agropecuarios',
    '3143- Técnicos forestales' => '3143- Técnicos forestales',
    '3151- Oficiales maquinistas en navegación' => '3151- Oficiales maquinistas en navegación',
    '3152- Capitanes, oficiales de cubierta y prácticos' => '3152- Capitanes, oficiales de cubierta y prácticos',
    '3153- Pilotos de aviación y afines' => '3153- Pilotos de aviación y afines',
    '3154- Controladores de tráfico aéreo y marítimo' => '3154- Controladores de tráfico aéreo y marítimo',
    '3155- Técnicos en seguridad aeronáutica' => '3155- Técnicos en seguridad aeronáutica',
    '3211- Técnicos en aparatos de diagnóstico y tratamiento médico' => '3211- Técnicos en aparatos de diagnóstico y tratamiento médico',
    '3212- Técnicos de laboratorios médicos' => '3212- Técnicos de laboratorios médicos',
    '3213- Técnicos y asistentes farmacéuticos' => '3213- Técnicos y asistentes farmacéuticos',
    '3214- Técnicos de prótesis médicas y dentales' => '3214- Técnicos de prótesis médicas y dentales',
    '3221- Técnicos y profesionales del nivel medio en enfermería' => '3221- Técnicos y profesionales del nivel medio en enfermería',
    '3222- Técnicos y profesionales del nivel medio en partería' => '3222- Técnicos y profesionales del nivel medio en partería',
    '3230- Técnicos y profesionales del nivel medio en medicina tradicional y alternativa' => '3230- Técnicos y profesionales del nivel medio en medicina tradicional y alternativa',
    '3240- Técnicos y asistentes veterinarios' => '3240- Técnicos y asistentes veterinarios',
    '3251- Higienistas y asistentes odontológicos' => '3251- Higienistas y asistentes odontológicos',
    '3252- Técnicos en documentación sanitaria' => '3252- Técnicos en documentación sanitaria',
    '3253- Trabajadores comunitarios de la salud' => '3253- Trabajadores comunitarios de la salud',
    '3254- Técnicos en optometría y ópticas' => '3254- Técnicos en optometría y ópticas',
    '3255- Técnicos y asistentes terapeutas' => '3255- Técnicos y asistentes terapeutas',
    '3256- Asistentes médicos' => '3256- Asistentes médicos',
    '3257- Inspectores de seguridad, salud ocupacional, medioambiental y afines' => '3257- Inspectores de seguridad, salud ocupacional, medioambiental y afines',
    '3258- Técnicos en atención prehospitalaria' => '3258- Técnicos en atención prehospitalaria',
    '3259- Otros técnicos y profesionales del nivel medio de la salud, no clasificados en otros grupos primarios' => '3259- Otros técnicos y profesionales del nivel medio de la salud, no clasificados en otros grupos primarios',
    '3311- Agentes de bolsa, cambio y otros servicios financieros' => '3311- Agentes de bolsa, cambio y otros servicios financieros',
    '3312- Analistas de préstamos y créditos' => '3312- Analistas de préstamos y créditos',
    '3313- Técnicos de contabilidad y afines' => '3313- Técnicos de contabilidad y afines',
    '3314- Técnicos y profesionales del nivel medio de servicios estadísticos, matemáticos y afines' => '3314- Técnicos y profesionales del nivel medio de servicios estadísticos, matemáticos y afines',
    '3315- Tasadores y evaluadores' => '3315- Tasadores y evaluadores',
    '3321- Agentes de seguros' => '3321- Agentes de seguros',
    '3322- Representantes comerciales' => '3322- Representantes comerciales',
    '3323- Agentes de compras' => '3323- Agentes de compras',
    '3324- Agentes de operaciones comerciales y consignatarios' => '3324- Agentes de operaciones comerciales y consignatarios',
    '3331- Declarantes o gestores de aduana' => '3331- Declarantes o gestores de aduana',
    '3332- Organizadores de conferencias y eventos' => '3332- Organizadores de conferencias y eventos',
    '3333- Agentes de empleo y contratistas de mano de obra' => '3333- Agentes de empleo y contratistas de mano de obra',
    '3334- Agentes inmobiliarios' => '3334- Agentes inmobiliarios',
    '3339- Agentes de servicios comerciales no clasificados en otros grupos primarios' => '3339- Agentes de servicios comerciales no clasificados en otros grupos primarios',
    '3341- Supervisores de oficina' => '3341- Supervisores de oficina',
    '3342- Secretarios jurídicos' => '3342- Secretarios jurídicos',
    '3343- Secretarios administrativos y ejecutivos' => '3343- Secretarios administrativos y ejecutivos',
    '3344- Secretarios médicos' => '3344- Secretarios médicos',
    '3351- Agentes de aduana e inspectores de frontera' => '3351- Agentes de aduana e inspectores de frontera',
    '3352- Agentes de administración tributaria' => '3352- Agentes de administración tributaria',
    '3353- Agentes de servicios de seguridad social' => '3353- Agentes de servicios de seguridad social',
    '3354- Agentes gubernamentales de expedición de licencias' => '3354- Agentes gubernamentales de expedición de licencias',
    '3355- Inspectores de policía y detectives' => '3355- Inspectores de policía y detectives',
    '3359- Agentes de gobierno y profesionales del nivel medio para la aplicación de regulaciones no clasificados en otros grupos primarios' => '3359- Agentes de gobierno y profesionales del nivel medio para la aplicación de regulaciones no clasificados en otros grupos primarios',
    '3411- Técnicos y profesionales del nivel medio del derecho de servicios legales y afines' => '3411- Técnicos y profesionales del nivel medio del derecho de servicios legales y afines',
    '3412- Trabajadores y asistentes sociales' => '3412- Trabajadores y asistentes sociales',
    '3413- Auxiliares laicos de las religiones' => '3413- Auxiliares laicos de las religiones',
    '3421- Atletas y deportistas' => '3421- Atletas y deportistas',
    '3422- Entrenadores, instructores y árbitros de actividades deportivas' => '3422- Entrenadores, instructores y árbitros de actividades deportivas',
    '3423- Instructores de educación física y actividades recreativas' => '3423- Instructores de educación física y actividades recreativas',
    '3431- Fotógrafos' => '3431- Fotógrafos',
    '3432- Diseñadores y decoradores de interiores' => '3432- Diseñadores y decoradores de interiores',
    '3433- Técnicos en galerías de arte, museos y bibliotecas' => '3433- Técnicos en galerías de arte, museos y bibliotecas',
    '3434- Chefs' => '3434- Chefs',
    '3435- Otros técnicos y profesionales del nivel medio en actividades culturales y artísticas' => '3435- Otros técnicos y profesionales del nivel medio en actividades culturales y artísticas',
    '3511- Técnicos en operaciones de tecnología de la información y las comunicaciones' => '3511- Técnicos en operaciones de tecnología de la información y las comunicaciones',
    '3512- Técnicos en asistencia y soporte al usuario de tecnología de la información y las comunicaciones' => '3512- Técnicos en asistencia y soporte al usuario de tecnología de la información y las comunicaciones',
    '3513- Técnicos en redes y sistemas de computación' => '3513- Técnicos en redes y sistemas de computación',
    '3514- Técnicos de la Web' => '3514- Técnicos de la Web',
    '3521- Técnicos de radiodifusión y grabación audio visual' => '3521- Técnicos de radiodifusión y grabación audio visual',
    '3522- Técnicos de ingeniería de las telecomunicaciones' => '3522- Técnicos de ingeniería de las telecomunicaciones',
    '4110- Oficinistas generales' => '4110- Oficinistas generales',
    '4120- Secretarios generales' => '4120- Secretarios generales',
    '4131- Operadores de máquinas de procesamiento de texto y mecanógrafos' => '4131- Operadores de máquinas de procesamiento de texto y mecanógrafos',
    '4132- Grabadores de datos' => '4132- Grabadores de datos',
    '4211- Cajeros de bancos y afines' => '4211- Cajeros de bancos y afines',
    '4212- Receptores de apuestas y afines' => '4212- Receptores de apuestas y afines',
    '4213- Prestamistas' => '4213- Prestamistas',
    '4214- Cobradores y afines' => '4214- Cobradores y afines',
    '4221- Empleados y consultores de viajes' => '4221- Empleados y consultores de viajes',
    '4222- Empleados de centros de llamadas' => '4222- Empleados de centros de llamadas',
    '4223- Telefonistas' => '4223- Telefonistas',
    '4224- Recepcionistas de hoteles' => '4224- Recepcionistas de hoteles',
    '4225- Empleados de ventanillas de informaciones' => '4225- Empleados de ventanillas de informaciones',
    '4226- Recepcionistas generales' => '4226- Recepcionistas generales',
    '4227- Entrevistadores de encuestas y de investigaciones de mercados' => '4227- Entrevistadores de encuestas y de investigaciones de mercados',
    '4229- Otros empleados de servicios de información al cliente no clasificados en otros grupos primarios' => '4229- Otros empleados de servicios de información al cliente no clasificados en otros grupos primarios',
    '4311- Auxiliares de contabilidad y cálculo de costos' => '4311- Auxiliares de contabilidad y cálculo de costos',
    '4312- Auxiliares de servicios estadísticos, financieros y de seguros' => '4312- Auxiliares de servicios estadísticos, financieros y de seguros',
    '4313- Auxiliares encargados de las nóminas' => '4313- Auxiliares encargados de las nóminas',
    '4321- Empleados de control de abastecimientos e inventario' => '4321- Empleados de control de abastecimientos e inventario',
    '4322- Empleados de servicios de apoyo a la producción' => '4322- Empleados de servicios de apoyo a la producción',
    '4323- Empleados de servicios de transporte' => '4323- Empleados de servicios de transporte',
    '4411- Empleados de bibliotecas' => '4411- Empleados de bibliotecas',
    '4412- Empleados de servicios de correos' => '4412- Empleados de servicios de correos',
    '4413- Codificadores de datos, correctores de pruebas de imprenta y afines' => '4413- Codificadores de datos, correctores de pruebas de imprenta y afines',
    '4414- Escribientes públicos y afines' => '4414- Escribientes públicos y afines',
    '4415- Empleados de archivos' => '4415- Empleados de archivos',
    '4416- Empleados del servicio de personal' => '4416- Empleados del servicio de personal',
    '4419- Otro personal de apoyo administrativo no clasificados en otros grupos primarios' => '4419- Otro personal de apoyo administrativo no clasificados en otros grupos primarios',
    '5111- Personal de servicio a pasajeros' => '5111- Personal de servicio a pasajeros',
    '5112- Revisores y cobradores de los transportes públicos' => '5112- Revisores y cobradores de los transportes públicos',
    '5113- Guías' => '5113- Guías',
    '5120- Cocineros' => '5120- Cocineros',
    '5131- Meseros' => '5131- Meseros',
    '5132- Bármanes' => '5132- Bármanes',
    '5141- Peluqueros' => '5141- Peluqueros',
    '5142- Especialistas en tratamientos de belleza y afines' => '5142- Especialistas en tratamientos de belleza y afines',
    '5151- Supervisores de mantenimiento y limpieza en oficinas, hoteles y otros establecimientos' => '5151- Supervisores de mantenimiento y limpieza en oficinas, hoteles y otros establecimientos',
    '5152- Mayordomos domésticos' => '5152- Mayordomos domésticos',
    '5153- Conserjes y afines' => '5153- Conserjes y afines',
    '5161- Astrólogos, adivinos y trabajadores afines' => '5161- Astrólogos, adivinos y trabajadores afines',
    '5162- Acompañantes' => '5162- Acompañantes',
    '5163- Personal de servicios funerarios y embalsamadores' => '5163- Personal de servicios funerarios y embalsamadores',
    '5164- Cuidadores de animales' => '5164- Cuidadores de animales',
    '5165- Instructores de conducción' => '5165- Instructores de conducción',
    '5169- Otros trabajadores de servicios personales no clasificados en otros grupos primarios' => '5169- Otros trabajadores de servicios personales no clasificados en otros grupos primarios',
    '5211- Vendedores de quioscos y de puestos de mercado' => '5211- Vendedores de quioscos y de puestos de mercado',
    '5212- Vendedores ambulantes de alimentos preparados para consumo inmediato' => '5212- Vendedores ambulantes de alimentos preparados para consumo inmediato',
    '5221- Comerciantes de tiendas' => '5221- Comerciantes de tiendas',
    '5222- Supervisores de tiendas y almacenes' => '5222- Supervisores de tiendas y almacenes',
    '5223- Vendedores y auxiliares de venta en tiendas, almacenes y afines' => '5223- Vendedores y auxiliares de venta en tiendas, almacenes y afines',
    '5230- Cajeros de comercio, taquilleros y expendedores de boletas' => '5230- Cajeros de comercio, taquilleros y expendedores de boletas',
    '5241- Modelos de moda, arte y publicidad' => '5241- Modelos de moda, arte y publicidad',
    '5242- Demostradores de tiendas, almacenes y afines' => '5242- Demostradores de tiendas, almacenes y afines',
    '5243- Vendedores puerta a puerta' => '5243- Vendedores puerta a puerta',
    '5244- Vendedores a través de medios tecnológicos' => '5244- Vendedores a través de medios tecnológicos',
    '5245- Expendedores de combustibles para vehículos' => '5245- Expendedores de combustibles para vehículos',
    '5246- Vendedores de comidas al mostrador' => '5246- Vendedores de comidas al mostrador',
    '5249- Otros vendedores no clasificados en otros grupos primarios' => '5249- Otros vendedores no clasificados en otros grupos primarios',
    '5311- Cuidadores de niños' => '5311- Cuidadores de niños',
    '5312- Auxiliares de maestros' => '5312- Auxiliares de maestros',
    '5321- Trabajadores de los cuidados personales en instituciones' => '5321- Trabajadores de los cuidados personales en instituciones',
    '5322- Trabajadores de los cuidados personales a domicilio' => '5322- Trabajadores de los cuidados personales a domicilio',
    '5329- Trabajadores de los cuidados personales en servicios de salud no clasificados en otros grupos primarios' => '5329- Trabajadores de los cuidados personales en servicios de salud no clasificados en otros grupos primarios',
    '5411- Bomberos y rescatistas' => '5411- Bomberos y rescatistas',
    '5412- Policías' => '5412- Policías',
    '5413- Guardianes de prisión' => '5413- Guardianes de prisión',
    '5414- Guardias de seguridad' => '5414- Guardias de seguridad',
    '5419- Personal de los servicios de protección no clasificadosen otros grupos primarios' => '5419- Personal de los servicios de protección no clasificadosen otros grupos primarios',
    '6111- Agricultores y trabajadores calificados de cultivos extensivos' => '6111- Agricultores y trabajadores calificados de cultivos extensivos',
    '6112- Agricultores y trabajadores calificados de plantaciones de árboles y arbustos' => '6112- Agricultores y trabajadores calificados de plantaciones de árboles y arbustos',
    '6113- Agricultores y trabajadores calificados de huertas, invernaderos, viveros y jardines' => '6113- Agricultores y trabajadores calificados de huertas, invernaderos, viveros y jardines',
    '6114- Agricultores y trabajadores calificados de cultivos mixtos' => '6114- Agricultores y trabajadores calificados de cultivos mixtos',
    '6121- Criadores de ganado y trabajadores de la cría de animales domésticos (excepto aves de corral)' => '6121- Criadores de ganado y trabajadores de la cría de animales domésticos (excepto aves de corral)',
    '6122- Avicultores y trabajadores calificados de la avicultura' => '6122- Avicultores y trabajadores calificados de la avicultura',
    '6123- Criadores y trabajadores calificados de la apicultura y la sericicultura' => '6123- Criadores y trabajadores calificados de la apicultura y la sericicultura',
    '6129- Criadores y trabajadores pecuarios calificados, avicultores y criadores de insectos no clasificados en otros grupos primarios' => '6129- Criadores y trabajadores pecuarios calificados, avicultores y criadores de insectos no clasificados en otros grupos primarios',
    '6130- Productores y trabajadores calificados de explotaciones agropecuarias mixtas cuya producción se destina al mercado' => '6130- Productores y trabajadores calificados de explotaciones agropecuarias mixtas cuya producción se destina al mercado',
    '6210- Trabajadores forestales calificados y afines' => '6210- Trabajadores forestales calificados y afines',
    '6221- Trabajadores de explotaciones de acuicultura' => '6221- Trabajadores de explotaciones de acuicultura',
    '6222- Pescadores de agua dulce y en aguas costeras' => '6222- Pescadores de agua dulce y en aguas costeras',
    '6223- Pescadores de alta mar' => '6223- Pescadores de alta mar',
    '6224- Cazadores y tramperos' => '6224- Cazadores y tramperos',
    '6310- Trabajadores agrícolas de subsistencia' => '6310- Trabajadores agrícolas de subsistencia',
    '6320- Trabajadores pecuarios de subsistencia' => '6320- Trabajadores pecuarios de subsistencia',
    '6330- Trabajadores agropecuarios de subsistencia' => '6330- Trabajadores agropecuarios de subsistencia',
    '6340- Pescadores, cazadores, tramperos y recolectores de subsistencia' => '6340- Pescadores, cazadores, tramperos y recolectores de subsistencia',
    '7111- Constructores de casas' => '7111- Constructores de casas',
    '7112- Albañiles' => '7112- Albañiles',
    '7113- Labrantes, tronzadores y grabadores de piedra' => '7113- Labrantes, tronzadores y grabadores de piedra',
    '7114- Operarios en cemento armado, enfoscadores y afines' => '7114- Operarios en cemento armado, enfoscadores y afines',
    '7115- Carpinteros de armar y de obra blanca' => '7115- Carpinteros de armar y de obra blanca',
    '7119- Oficiales y operarios de la construcción de obra gruesa y afines no clasificados en otros grupos primarios' => '7119- Oficiales y operarios de la construcción de obra gruesa y afines no clasificados en otros grupos primarios',
    '7121- Techadores' => '7121- Techadores',
    '7122- Enchapadores, parqueteros y colocadores de suelos' => '7122- Enchapadores, parqueteros y colocadores de suelos',
    '7123- Revocadores' => '7123- Revocadores',
    '7124- Instaladores de material aislante y de insonorización' => '7124- Instaladores de material aislante y de insonorización',
    '7125- Cristaleros' => '7125- Cristaleros',
    '7126- Fontaneros e instaladores de tuberías' => '7126- Fontaneros e instaladores de tuberías',
    '7127- Mecánicos montadores de aire acondicionado y refrigeración' => '7127- Mecánicos montadores de aire acondicionado y refrigeración',
    '7131- Pintores y empapeladores' => '7131- Pintores y empapeladores',
    '7132- Barnizadores y afines' => '7132- Barnizadores y afines',
    '7133- Limpiadores de fachadas y deshollinadores' => '7133- Limpiadores de fachadas y deshollinadores',
    '7211- Moldeadores y macheros' => '7211- Moldeadores y macheros',
    '7212- Soldadores y oxicortadores' => '7212- Soldadores y oxicortadores',
    '7213- Chapistas y caldereros' => '7213- Chapistas y caldereros',
    '7214- Montadores de estructuras metálicas' => '7214- Montadores de estructuras metálicas',
    '7215- Aparejadores y empalmadores de cables' => '7215- Aparejadores y empalmadores de cables',
    '7221- Herreros y forjadores' => '7221- Herreros y forjadores',
    '7222- Herramentistas y afines' => '7222- Herramentistas y afines',
    '7223- Ajustadores y operadores de máquinas herramientas' => '7223- Ajustadores y operadores de máquinas herramientas',
    '7224- Pulidores de metales y afiladores de herramientas' => '7224- Pulidores de metales y afiladores de herramientas',
    '7231- Mecánicos y reparadores de vehículos de motor' => '7231- Mecánicos y reparadores de vehículos de motor',
    '7232- Mecánicos y reparadores de sistemas y motores de aeronaves' => '7232- Mecánicos y reparadores de sistemas y motores de aeronaves',
    '7233- Mecánicos y reparadores de máquinas agrícolas e industriales' => '7233- Mecánicos y reparadores de máquinas agrícolas e industriales',
    '7234- Reparadores de bicicletas y afines' => '7234- Reparadores de bicicletas y afines',
    '7311- Mecánicos y reparadores de instrumentos de precisión' => '7311- Mecánicos y reparadores de instrumentos de precisión',
    '7312- Fabricantes y afinadores de instrumentos musicales' => '7312- Fabricantes y afinadores de instrumentos musicales',
    '7314- Alfareros y ceramistas (barro y arcilla)' => '7314- Alfareros y ceramistas (barro y arcilla)',
    '7315- Sopladores, modeladores, laminadores, cortadores y pulidores de vidrio' => '7315- Sopladores, modeladores, laminadores, cortadores y pulidores de vidrio',
    '7316- Rotulistas, pintores decorativos y grabadores' => '7316- Rotulistas, pintores decorativos y grabadores',
    '7321- Preimpresores y afines' => '7321- Preimpresores y afines',
    '7322- Impresores' => '7322- Impresores',
    '7323- Encuadernadores y afines' => '7323- Encuadernadores y afines',
    '7331- Tejedores con telares' => '7331- Tejedores con telares',
    '7332- Tejedores con agujas' => '7332- Tejedores con agujas',
    '7333- Otros tejedores' => '7333- Otros tejedores',
    '7341- Cesteros y mimbreros' => '7341- Cesteros y mimbreros',
    '7342- Sombrereros artesanales' => '7342- Sombrereros artesanales',
    '7351- Talladores piezas artesanales de madera' => '7351- Talladores piezas artesanales de madera',
    '7352- Decoradores de piezas artesanales en madera' => '7352- Decoradores de piezas artesanales en madera',
    '7361- Joyeros' => '7361- Joyeros',
    '7362- Orfebres y plateros' => '7362- Orfebres y plateros',
    '7363- Bisuteros' => '7363- Bisuteros',
    '7370- Artesanos del cuero' => '7370- Artesanos del cuero',
    '7391- Artesanos de papel' => '7391- Artesanos de papel',
    '7392- Artesanos del hierro y otros metales' => '7392- Artesanos del hierro y otros metales',
    '7393- Artesanos de las semillas y cortezas vegetales' => '7393- Artesanos de las semillas y cortezas vegetales',
    '7399- Artesanos de otros materiales no clasificados en otros grupos primarios' => '7399- Artesanos de otros materiales no clasificados en otros grupos primarios',
    '7411- Electricistas de obras y afines' => '7411- Electricistas de obras y afines',
    '7412- Mecánicos y ajustadores electricistas' => '7412- Mecánicos y ajustadores electricistas',
    '7413- Instaladores y reparadores de líneas eléctricas' => '7413- Instaladores y reparadores de líneas eléctricas',
    '7421- Mecánicos y reparadores en electrónica' => '7421- Mecánicos y reparadores en electrónica',
    '7422- Instaladores y reparadores en tecnología de la información y las comunicaciones' => '7422- Instaladores y reparadores en tecnología de la información y las comunicaciones',
    '7511- Carniceros, pescaderos y afines' => '7511- Carniceros, pescaderos y afines',
    '7512- Panaderos, pasteleros y confiteros' => '7512- Panaderos, pasteleros y confiteros',
    '7513- Operarios de la elaboración de productos lácteos' => '7513- Operarios de la elaboración de productos lácteos',
    '7514- Operarios de la conservación de frutas, legumbres, verduras y afines' => '7514- Operarios de la conservación de frutas, legumbres, verduras y afines',
    '7515- Catadores y clasificadores de alimentos y bebidas' => '7515- Catadores y clasificadores de alimentos y bebidas',
    '7516- Preparadores y elaboradores de tabaco y sus productos' => '7516- Preparadores y elaboradores de tabaco y sus productos',
    '7521- Operarios del tratamiento de la madera' => '7521- Operarios del tratamiento de la madera',
    '7522- Ebanistas y carpinteros (excluye carpinteros de armar y de obra blanca)' => '7522- Ebanistas y carpinteros (excluye carpinteros de armar y de obra blanca)',
    '7523- Ajustadores y operadores de máquinas para trabajar madera' => '7523- Ajustadores y operadores de máquinas para trabajar madera',
    '7531- Sastres, modistos, peleteros y sombrereros' => '7531- Sastres, modistos, peleteros y sombrereros',
    '7532- Patronistas y cortadores de tela, cuero y afines' => '7532- Patronistas y cortadores de tela, cuero y afines',
    '7533- Costureros, bordadores y afines' => '7533- Costureros, bordadores y afines',
    '7534- Tapiceros, colchoneros y afines' => '7534- Tapiceros, colchoneros y afines',
    '7535- Apelambradores, pellejeros y curtidores' => '7535- Apelambradores, pellejeros y curtidores',
    '7536- Zapateros y afines' => '7536- Zapateros y afines',
    '7541- Buzos' => '7541- Buzos',
    '7542- Dinamiteros y pegadores' => '7542- Dinamiteros y pegadores',
    '7543- Clasificadores y probadores de productos (excluyendo alimentos y bebidas)' => '7543- Clasificadores y probadores de productos (excluyendo alimentos y bebidas)',
    '7544- Fumigadores y otros controladores de plagas y malas hierbas' => '7544- Fumigadores y otros controladores de plagas y malas hierbas',
    '7549- Otros oficiales, operarios y oficios relacionados no clasificados en otros grupos primarios' => '7549- Otros oficiales, operarios y oficios relacionados no clasificados en otros grupos primarios',
    '8111- Mineros y operadores de instalaciones mineras' => '8111- Mineros y operadores de instalaciones mineras',
    '8112- Operadores de instalaciones de procesamiento de minerales y rocas' => '8112- Operadores de instalaciones de procesamiento de minerales y rocas',
    '8113- Perforadores y sondistas de pozos y afines' => '8113- Perforadores y sondistas de pozos y afines',
    '8114- Operadores de máquinas para fabricar cemento y otros productos minerales' => '8114- Operadores de máquinas para fabricar cemento y otros productos minerales',
    '8121- Operadores de instalaciones de procesamiento de metales' => '8121- Operadores de instalaciones de procesamiento de metales',
    '8122- Operadores de máquinas pulidoras, galvanizadoras y recubridoras de metales' => '8122- Operadores de máquinas pulidoras, galvanizadoras y recubridoras de metales',
    '8131- Operadores de plantas y máquinas de productos químicos' => '8131- Operadores de plantas y máquinas de productos químicos',
    '8132- Operadores de máquinas para fabricar productos fotográficos' => '8132- Operadores de máquinas para fabricar productos fotográficos',
    '8141- Operadores de máquinas para fabricar productos de caucho' => '8141- Operadores de máquinas para fabricar productos de caucho',
    '8142- Operadores de máquinas para fabricar productos de material plástico' => '8142- Operadores de máquinas para fabricar productos de material plástico',
    '8143- Operadores de máquinas para fabricar productos de papel' => '8143- Operadores de máquinas para fabricar productos de papel',
    '8151- Operadores de máquinas de preparación de fibras, hilado y devanado' => '8151- Operadores de máquinas de preparación de fibras, hilado y devanado',
    '8152- Operadores de telares y otras máquinas tejedoras' => '8152- Operadores de telares y otras máquinas tejedoras',
    '8153- Operadores de máquinas de coser' => '8153- Operadores de máquinas de coser',
    '8154- Operadores de máquinas de blanqueamiento, teñido y limpieza de tejidos' => '8154- Operadores de máquinas de blanqueamiento, teñido y limpieza de tejidos',
    '8155- Operadores de máquinas de tratamiento de pieles y cueros' => '8155- Operadores de máquinas de tratamiento de pieles y cueros',
    '8156- Operadores de máquinas para la fabricación de calzado y afines' => '8156- Operadores de máquinas para la fabricación de calzado y afines',
    '8157- Operadores de máquinas de lavandería' => '8157- Operadores de máquinas de lavandería',
    '8159- Operadores de máquinas para fabricar productos textiles y artículos de piel y cuero no clasificados en otros grupos primarios' => '8159- Operadores de máquinas para fabricar productos textiles y artículos de piel y cuero no clasificados en otros grupos primarios',
    '8160- Operadores de máquinas para elaborar alimentos y productos afines' => '8160- Operadores de máquinas para elaborar alimentos y productos afines',
    '8171- Operadores de instalaciones para la preparación de pasta para papel y papel' => '8171- Operadores de instalaciones para la preparación de pasta para papel y papel',
    '8172- Operadores de instalaciones de procesamiento de la madera' => '8172- Operadores de instalaciones de procesamiento de la madera',
    '8181- Operadores de máquinas y de instalaciones para elaborar productos de vidrio y cerámica' => '8181- Operadores de máquinas y de instalaciones para elaborar productos de vidrio y cerámica',
    '8182- Operadores de máquinas de vapor y calderas' => '8182- Operadores de máquinas de vapor y calderas',
    '8183- Operadores de máquinas de embalaje, embotellamiento y etiquetado' => '8183- Operadores de máquinas de embalaje, embotellamiento y etiquetado',
    '8189- Otros operadores de máquinas y de instalaciones fijas no clasificados en otros grupos primarios' => '8189- Otros operadores de máquinas y de instalaciones fijas no clasificados en otros grupos primarios',
    '8211- Ensambladores de maquinaria mecánica' => '8211- Ensambladores de maquinaria mecánica',
    '8212- Ensambladores de equipos eléctricos y electrónicos' => '8212- Ensambladores de equipos eléctricos y electrónicos',
    '8219- Ensambladores no clasificados bajo otros grupos primarios' => '8219- Ensambladores no clasificados bajo otros grupos primarios',
    '8311- Maquinistas de locomotoras' => '8311- Maquinistas de locomotoras',
    '8312- Guardafrenos, guardagujas y agentes de maniobras' => '8312- Guardafrenos, guardagujas y agentes de maniobras',
    '8321- Conductores de motocicletas' => '8321- Conductores de motocicletas',
    '8323- Conductores de camionetas y vehículos livianos' => '8323- Conductores de camionetas y vehículos livianos',
    '8324- Conductores de taxis' => '8324- Conductores de taxis',
    '8331- Conductores de buses, microbuses y tranvías' => '8331- Conductores de buses, microbuses y tranvías',
    '8332- Conductores de camiones y vehículos pesados' => '8332- Conductores de camiones y vehículos pesados',
    '8341- Operadores de maquinaria agrícola y forestal móvil' => '8341- Operadores de maquinaria agrícola y forestal móvil',
    '8342- Operadores de máquinas de movimiento de tierras, construcción de vías y afines' => '8342- Operadores de máquinas de movimiento de tierras, construcción de vías y afines',
    '8343- Operadores de grúas, aparatos elevadores y afines' => '8343- Operadores de grúas, aparatos elevadores y afines',
    '8344- Operadores de montacargas' => '8344- Operadores de montacargas',
    '8350- Marineros de cubierta y afines' => '8350- Marineros de cubierta y afines',
    '9111- Personal doméstico' => '9111- Personal doméstico',
    '9112- Aseadores de oficinas, hoteles y otros establecimientos' => '9112- Aseadores de oficinas, hoteles y otros establecimientos',
    '9121- Lavanderos y planchadores manuales' => '9121- Lavanderos y planchadores manuales',
    '9122- Lavadores de vehículos' => '9122- Lavadores de vehículos',
    '9123- Lavadores de ventanas' => '9123- Lavadores de ventanas',
    '9129- Otro personal de limpieza no clasificados bajo otros grupos primarios' => '9129- Otro personal de limpieza no clasificados bajo otros grupos primarios',
    '9211- Obreros y peones de explotaciones agrícolas' => '9211- Obreros y peones de explotaciones agrícolas',
    '9212- Obreros y peones de explotaciones ganaderas' => '9212- Obreros y peones de explotaciones ganaderas',
    '9213- Obreros y peones de explotaciones agropecuarias' => '9213- Obreros y peones de explotaciones agropecuarias',
    '9214- Obreros y peones de jardinería y horticultura' => '9214- Obreros y peones de jardinería y horticultura',
    '9215- Obreros y peones forestales' => '9215- Obreros y peones forestales',
    '9216- Obreros y peones de pesca y acuicultura' => '9216- Obreros y peones de pesca y acuicultura',
    '9311- Obreros y peones de minas y canteras' => '9311- Obreros y peones de minas y canteras',
    '9312- Obreros y peones de obras públicas y mantenimiento' => '9312- Obreros y peones de obras públicas y mantenimiento',
    '9313- Obreros y peones de la construcción de edificios' => '9313- Obreros y peones de la construcción de edificios',
    '9321- Empacadores manuales' => '9321- Empacadores manuales',
    '9329- Obreros y peones de la industria manufacturera no clasificados en otros grupos primarios' => '9329- Obreros y peones de la industria manufacturera no clasificados en otros grupos primarios',
    '9331- Conductores de vehículos accionados a pedal o a brazo' => '9331- Conductores de vehículos accionados a pedal o a brazo',
    '9332- Conductores de vehículos y máquinas de tracción animal' => '9332- Conductores de vehículos y máquinas de tracción animal',
    '9333- Obreros y peones de carga' => '9333- Obreros y peones de carga',
    '9334- Surtidores de estanterías' => '9334- Surtidores de estanterías',
    '9411- Cocineros de comidas rápidas' => '9411- Cocineros de comidas rápidas',
    '9412- Ayudantes de cocina' => '9412- Ayudantes de cocina',
    '9510- Trabajadores ambulantes de servicios y afines' => '9510- Trabajadores ambulantes de servicios y afines',
    '9520- Vendedores ambulantes (excluyendo comidas de preparación inmediata)' => '9520- Vendedores ambulantes (excluyendo comidas de preparación inmediata)',
    '9611- Recolectores de basura y material reciclable' => '9611- Recolectores de basura y material reciclable',
    '9612- Clasificadores de desechos' => '9612- Clasificadores de desechos',
    '9613- Barrenderos y afines' => '9613- Barrenderos y afines',
    '9621- Mensajeros, mandaderos, maleteros y repartidores' => '9621- Mensajeros, mandaderos, maleteros y repartidores',
    '9622- Personas que realizan trabajos varios' => '9622- Personas que realizan trabajos varios',
    '9624- Acarreadores de agua y recolectores de leña' => '9624- Acarreadores de agua y recolectores de leña',
    '9625- Recolectores de dinero y surtidores de máquinas de venta automática' => '9625- Recolectores de dinero y surtidores de máquinas de venta automática',
    '9626- Lectores de medidores' => '9626- Lectores de medidores',
    '9629- Otras ocupaciones elementales no clasificadas en otros grupos primarios' => '9629- Otras ocupaciones elementales no clasificadas en otros grupos primarios',
    '9998- Jubilado, desempleado, ama de casa, estudiante, dedicación al hogar, menor de edad' => '9998- Jubilado, desempleado, ama de casa, estudiante, dedicación al hogar, menor de edad',
    '9999- En los casos en que no se tiene esta información registrar' => '9999- En los casos en que no se tiene esta información registrar',
];

$optionDiscapacidad = array(
    '' => 'Elegir',
    'No' => 'No presenta',
    'Física' => 'Física',
    'Auditiva' => 'Auditiva',
    'Visual' => 'Visual',
    'Sordoceguera' => 'Sordoceguera',
    'Cognitiva o intelectual' => 'Cognitiva o intelectual',
    'Metal' => 'Mental',

);

$optionCronica = array(
    '' => 'Elegir',
    'No |0' => 'No',
    'Hipertensión |1' => 'Hipertensión',
    'Diabetes |1' => 'Diabetes',
    'Hipertiroidismo |0.5' => 'Hipertiroidismo',
    'Hipotiroidismo |0.5' => 'Hipotiroidismo',
    'Dislipidemia |0.5' => 'colesterol, triglicéridos elevados',
    'Neurologica |0.5' => 'Neurológica',
    'Cardiovascular |1' => 'Cardiovascular',
    'Respiratoria |0.5' => 'Respiratoria',
    'Metabólica |0.5' => 'Metabólica',
    'Endocrinológica |0.5' => 'Endocrinológica',
    'Epilepsia |0.5' => 'Epilepsia',
    'Gastrointestinal |0.5' => 'Gastrointestinal',
    'Renal, otras enferemdades cronicas |0.5' => 'renal otras enferemdades cronicas',
);

$optionGinecologico = [
    'No' => 'No',
    'No embarazos' => 'No ha tenido embarazos',
    'Antecedente de abortos' => 'Antecedente de 2 o más abortos',
    'Muerte perinatal' => 'Muerte perinatal',
    'Bajo peso al nacer' => 'Recien nacido con Bajo peso al nacer',
    'Prematurez' => 'Recien nacido Prematuro',
    'Multiparidad' => 'Multiparidad (5 o más partos)',
    'Edad Materna Avanzada' => 'Embarazo mujer mayor de 35 años',
    'Preclampsia' => 'Antecendente de Preclampsia',
    'Eclampsia' => 'Antecendente de eclampsia',
    'No aplica' => 'No Aplica',
];

$optionCitologia = [
    'No |1' => 'No',
    'Citologia VPH |1' => 'Si, Citología VPH',
    'Citologia convencional' => 'Si, Citología convencional',
    'No aplica |1' => 'No informa',
];

$optionVidaSexual = [
    'No aplica ' =>  'Elegir',
    'Si' => 'Si',
    'No' => 'No',
    'No informa' => 'No informa',
];

$optionAnticonceptivos = [
    'No' => 'No',
    'Sin pareja' => 'No tiene pareja en el momento',
    'Si control' => 'Si, con supervisión',
    'Si No control' => 'Si, sin supervisión',
    'Responsabilidad Pareja' => 'Deja la responsabilidad a la pareja',
    'Vasectomía' => 'Vasectomía',
    'Pomeroy' => 'Pomeroy',
    'No informa' => 'No informa',
    'No aplica' => 'No aplica',
];

$optionits = [
    'No' => 'No',
    'Si' => 'Si',
    'No informa' => 'No informa',
];

$optionControlPrenatal = [
    '' =>  'Elegir',
    'No inscrita' => 'No inscrita en control de embarazo',
    'Asistente CPN' => 'Si, Control al día',
    'Inasistente CPN' => 'Si, inasistente a último control',
    'Puerperio' => 'En etapa de puerperio',
    'No informa' => 'No sabe/No informa',
];

$optionRiesgoEmbarazo = [
    'Bajo |0.5' => 'Bajo',
    'Alto |1' => 'Alto',
];

$optionAlarmaEmbarazo = [
    'No aplica ' =>  'Elegir',
    'No' => 'No',
    'Dolor de Cabeza' => 'Dolor de cabeza',
    'Mareo_zumbido' => 'Mareo/zumbido en el oido',
    'Dolor del vientre' => 'Dolor del vientre tipo contracción',
    'Disminucion o ausencia de movimientos del bebe' => 'Disminución o ausencia de movimientos del bebé',
    'Hinchazon de cara y extremidades' => 'Hinchazón de manos, cara, piernas y pies',
    'Visión borrosa o luces parpadeantes' => 'Visión borrosa o luces parpadeantes',
    'Visión borrosa o luces parpadeantes' => 'Visión borrosa o luces parpadeantes',
    'Sangrado vaginal' => 'Sangrado vaginal',
    'No informa' => 'No informa',
];

$optionVacuna = array(
    '' => 'Elegir',
    'No' => 'No',
    'Toxoide tétanico' => 'Toxoide tétanico',
    'Covid' => 'Vacuna Covid-19',
    'Influenza' => 'Influenza Estacional',
    'Fiebre Amarilla' => 'Fiebre Amarilla',
    'No informa' => 'Desconoce la información',
);

$optionMalnutricion = array(
    '' => 'Elegir',
    'No informa' => 'Desconoce la información/no presenta carnet de CYD',
    'Peso adecuado para la talla' => ' Peso adecuado para la talla',
    'Talla adecuada para la edad' => ' Talla adecuada para la edad',
    'Desnutricion Aguda' => 'Bajo peso para la edad',
    'Desnutricion Cronica' => 'Baja talla para la edad',
    'Desnutricion Aguda' => 'Bajo peso para la edad',
    'Desnutricion Cronica' => 'Baja talla para la edad',
    'Sobrepeso' => 'Sobrepeso',
    'Obesidad' => 'Obesidad',
);

$optionLactancia = array(
    '' => 'Elegir',
    'Lactancia materna exclusiva' => 'Solo Leche materna',
    'Lactancia materna y Alimentacion complementaria' => 'Lactancia materna Alimentación complementaria',
    'Leche de formula y Alimentacion complementaria' => 'Leche de formula Alimentación complementaria',
    'Leche materna y leche de formula' => 'Leche materna y leche de formula',
    'Leche materna y otros liquidos' => 'Leche materna y otros liquidos(jugos, agua, aromatica, colada)',
    'Solo Leche de formula' => 'Solo Leche de formula',
    'leche de formula y alimentos solidos' => 'leche de formula y alimentos solidos',
    'Leche materna y canasta básica familiar' => 'Leche materna y alimentos solidos(huevo, arroz, pollo, carne)',
    'Alimentación de la canasta básica familiar' => 'Alimentación de la canasta básica familiar',
);

$optionValoracionMedica = array(
    '' => 'Elegir',
    'Consulta Morbilidad |0.5 ' => 'Consulta de Morbilidad',
    'Consulta Cronicos |0.5' => 'Consulta de Crónicos',
    'Consulta PYP |0' => 'Consulta Promoción y prevención',
    'Consulta Urgencias |0.5' => 'Consulta Urgencias',
    'No asistido |1' => 'No ha asistido',
    'No informa |1' => 'No informa'
);

$opcionNoAtencion = [
    '1.Lugar de atención lejano, cerrado o ausencia del profesional de salud' => 'Lugar de atención lejano, cerrado o ausencia del profesional de salud',
    '2.Horarios de atención restringidos' => 'Horarios de atención restringidos',
    '3.Largos tiempos de espera' => 'Largos tiempos de espera',
    '4.No había disponibilidad de la tecnología' => 'No había disponibilidad de la tecnología',
    '5.Desconocimiento del derecho a las intervenciones de DTPE' => 'Desconocimiento del derecho a las intervenciones de DTPE',
    '6.Desconocimiento que las intervenciones son gratuitas' => 'Desconocimiento que las intervenciones son gratuitas',
    '7.Persona enferma' => 'Persona enferma',
    '8.Persona hospitalizada' => 'Persona hospitalizada',
    '9.Orden médica por enfermedad' => 'Orden médica por enfermedad',
    '10.Falta de tiempo del cuidador' => 'Falta de tiempo del cuidador',
    '11.Rechazo de la atención por tradición o cultura' => 'Rechazo de la atención por tradición o cultura',
    '12.No afiliado' => 'No afiliado',
];

$optionAlternativa = [
    '4.No aplica ' => 'Elegir',
    '4.No refiere' => 'No',
    '1.Medicina indigena' => 'SI',
];

$optionCuidado = [
    '' => 'Elegir',
    'Continuo familiar reponsable' => 'Continuo por un familiar adulto',
    'Continuo familiar vulnerable' => 'Continuo por un familiar menor/persona mayor',
    'Continuo acompañante' => 'Continuo por un acompañante no familiar',
    'Cuidado institucional' => 'Continuo en una institución o grupo',
    'Permanece solo' => 'Permanece solo',
    'No refiere' => 'No informa',
    'SD' => 'Sin dato'
];

$optionEstudio = [
    '' => 'Elegir',
    'Jardín Infantil' => 'Jardín Infantil',
    'Hogar Comuitario' => 'Hogar Comunitario',
    'CDI' => 'CDI',
    'No' => 'Mantiene en casa',
];

$optionConsumospa = [
    'No |0' => 'No',
    'Cigarrillo |0.5' => 'Cigarrillo',
    'Licor |0.5' => 'Licor',
    'Sustancias Psicoactivas |1' => 'Otras Sustancias Psicoactivas',
    'Uso indebido de Medicamentos |0.5' => 'Medicamentos sin prescripción médica(Opioides,Depresores,Estimulantes)',
];

$optionConflictos = [
    'No |0' => 'No se identifica',
    'Difucultades Economicas |0.3' => 'Dificultad económica para suplir necesidades básicas',
    'Conflictos entre padres e hijos |0.3' => 'Conflictos entre padres e hijos',
    'Conflictos entre hermanos |0.3' => 'Conflictos entre hermanos',
    'Conflictos entre Familia |0.3' => 'Conflictos entre Familia',
    'Violencias de género |0.5' => 'Violencias de género',
    'Problemas o Transtornos mentales diagnosticados |0.5' => 'Problemas o Transtornos mentales diagnosticados',
    'Consumo de alcohol o psicoactivos |0.5' => 'Consumo de alcohol o psicoactivos'
];

$optionTiposViolencia = [
    '' => 'Elegir',
    'No |0' => 'No se identifica',
    'Sospecha Violencia Fisica |0.5' => 'Signos de maltrato físico(golpes, quemadura, heridas)',
    'Sospecha Violencia Emocional |0.3' => 'Persona retraida, timida o agresiva',
    'sospecha Violencia Sexual |1' => 'Tocamientos de personas, relaciones sexuales sin consentimiento ',
    'Sospecha Abondono_Negligencia |0.3' => 'Falta de atención a necesidades básicas(alimentación, salud, educación)',
];

$optionCanalizacion =
    [
        '0.No |0' => 'No se requiere canalización',
        '1.Valoración Integral para la PYMS |0.5' => 'Valoración Integral para la PYMS',
        '2.Valoración integral por profesional en odontología para la PYMS |0.3' => 'Odontología P Y M',
        '3.Promoción y apoyo a lactancia materna |0.5' => 'Promoción y apoyo a lactancia materna',
        '4.Aplicación de flúor |0.1' => 'Aplicación de flúor',
        '5.Profilaxis y remoción de placa bacteriana |0.1' => 'Profilaxis y remoción de placa bacteriana',
        'Odontología general |0.2' => 'Odontología general',
        '6.Vacunación |1' => 'Vacunación',
        '12.Tamizaje de riesgo cardiovascular |0.5' => 'Tamizaje de riesgo cardiovascular',
        '14.Tamizaje cáncer cuello uterino |1' => 'Citologia',
        '15.Tamizaje de cáncer de mama |0.5' => 'Tamizaje para cancer de mama',
        '16.Tamizaje de cáncer de próstata |1' => 'Tamizaje para cancer de prostata',
        '17.Tamizaje de cáncer de colon |0.5' => 'Tamizaje para cancer de colon',
        // Planificación familiar

        '11.Planificación familiar |0.5' => 'Asesoría en anticoncepcion',
        '11.Planificación familiar |0' => 'Suministro de anticonceptivos',
        '11.Planificación familiar |0' => 'Suministro de preservativos',
        '11.Planificación familiar |0.3' => 'Prueba de embarazo',
        // ITS
        '13.Tamizaje de ITS | Prueba rapida treponemica |0.3' => 'Prueba rapida treponemica',
        '13.Tamizaje de ITS | Prueba rapida para VIH |0.3' => 'Prueba rapida para VIH',
        '13.Tamizaje de ITS | Asesoria pre y post test VIH |0.3' => 'Asesoria pre y post test VIH',
        '13.Tamizaje de ITS | Prueba rápida hepatitis B |0.3' => 'Prueba rápida hepatitis B',
        '13.Tamizaje de ITS | Prueba rápida hepatitis C |0.3' => 'Prueba rápida hepatitis C',
        // Educación
        '24.Educación para la salud | Primeros auxilios psicologicos |0.5' => 'Primeros auxilios psicologicos',
        '24.Educación para la salud | Activacion de ruta por sospecha de violencias |1' => 'Activacion de ruta por sospecha de violencias',
        '25.Ninguno |0' => 'Ninguno',


        '18.Atención para el cuidado preconcepcional |0.1' => 'Atención para el cuidado preconcepcional',
        '19.Atención para el cuidado prenatal – Controles prenatales |1' => 'Atención para el cuidado prenatal – Controles prenatales',
        '20.Preparación para la maternidad y paternidad |0.3' => 'Preparación para la maternidad y paternidad',
        '21.Interrupción Voluntaria del Embarazo |1' => 'Interrupción Voluntaria del Embarazo',
        '22.Atención del puerperio |1' => 'Atención del puerperio',
        '23.Atención para el seguimiento del recién nacido |1' => 'Atención para el seguimiento del recién nacido',
    ];

$optionEducacion = [
    'No' => 'No',
    'Educacion para la salud individual' => 'Educación para la salud individual',
    'Educacion para la salud familiar' => 'Educación para la salud familiar',
    'Educacion para la salud grupal' => 'Educación para la salud grupal',
    'Valoracion medica' => 'Valoración medíca',
    'Valoracion odontologica' => 'Valoración odontológica',
    'Valoracion Nutricional' => 'Valoración Nutricional',
    'Valoracion Psicologica' => 'Valoración Psicologica',
    'Valoracion Integral' => 'Valoración Integral',
    'Remision a urgencias' => 'Remision a urgencias',
];

$optionEstadoCanalizacion = [
    '' => 'Elegir',
    'No aplica ' => 'No aplica',
    'En proceso ' => 'En proceso',
    'Pendiente' => 'Pendiente',
    'Efectiva' => 'Efectiva',
    'No Efectiva' => 'No efectiva',

];
?>



<div class="max-w-5xl mx-auto text-center mb-8">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4 leading-tight">
        Información de la Personas<br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
            Modulo Persona
        </span>
    </h1>
    <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">
        Ingresar el formulario completamente de otra manera se invalidara la ficha.
    </p>
</div>
<?php
echo $this->Form->input('fechaRegistro', [
    'type' => 'hidden',
    'value' => date('Y-m-d')
]);
?>
<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-person text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Informacion de Identificación</h1>
                <p class="text-gray-500">Complementa la información básica de la persona.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Tipo de Documento -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">Tipo de Documento</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tipodocumento', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $TipoDeDocumentoOptions,
                    'label' => '',
                    'empty' => 'Selecciona tipo de documento',
                ]);

                if (!empty($this->Form->error('tipodocumento'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tipodocumento') . '</div>';
                }
                ?>
            </div>

            <!-- Documento -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">N° de Documento</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('numerodoc', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('numerodoc'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('numerodoc') . '</div>';
                }
                ?>
            </div>

            <!-- Primer Apellido -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">Primer Apellido</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('primerapellido', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('primerapellido'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('primerapellido') . '</div>';
                }
                ?>
            </div>

            <!-- Segundo Apellido -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="nombre" class="font-semibold">Segundo Apellido</label>
                </div>
                <?php
                echo $this->Form->input('segundoapellido', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('segundoapellido'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('segundoapellido') . '</div>';
                }
                ?>
            </div>

            <!-- Primer Nombre -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="nombre" class="font-semibold">Primer Nombre</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('primernombre', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('primernombre'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('primernombre') . '</div>';
                }
                ?>
            </div>

            <!-- Segundo Nombre -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="nombre" class="font-semibold">Segundo Nombre</label>
                </div>
                <?php
                echo $this->Form->input('segundonombre', [
                    'label' => false,
                    'uppercase' => true,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('segundonombre'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('segundonombre') . '</div>';
                }
                ?>
            </div>

            <!-- Fecha de Nacimiento -->
            <div class="col-span-2 md:col-span-2 text-md font-semibold my-4 mb-6 md:mr-4">
                <div class="flex items-center">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">8</span>
                    <label for="resultadoEcomapa" class="font-semibold">Fecha de nacimiento</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <input
                            type="text"
                            name="data[Juventudadulto][fechanac]"
                            id="fecha"
                            value="<?= h($this->Form->value('fechanac')); ?>"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona rango de fecha" />
                        <span class="text-sm text-red-600 ">
                            <?= $this->Form->error('fechanac') ?>
                        </span>
                    </div>

                </div>
            </div>

            <!-- Sexo -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">7</span>
                    <label for="sexo" class="font-semibold">¿Cúal es su sexo?</label>
                </div>

                <?php $selected = $this->Form->value('sexo'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][sexo]"
                            id="sexo-no"
                            value="Hombre"
                            <?php if ($selected === 'Hombre') echo 'checked'; ?>
                            data-target="sexo"
                            class="hidden peer"
                            data-target="sexo"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="sexo-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            Hombre
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][sexo]"
                            id="sexo-si"
                            value="Mujer"
                            data-target="sexo"
                            <?php if ($selected === 'Mujer') echo 'checked'; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="sexo-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            Mujer
                        </label>
                    </div>
                </div>
            </div>

            <!-- Género -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">9</span>
                    <label for="nombre" class="font-semibold">¿Cúal es su género?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('genero', [
                    'type' => 'select',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $generoOption,
                    'label' => '',
                    'empty' => 'Selecciona tipo de documento',
                ]);

                if (!empty($this->Form->error('genero'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('genero') . '</div>';
                }
                ?>
            </div>

            <!-- Aseguradora -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">10</span>
                    <label for="familiograma" class="font-semibold">Aseguradora</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('aseguradora', [
                    'type' => 'select',
                    'id' => 'producto_id',
                    'options' => $aseguradoraOption,
                    'class' => 'w-full',
                    'label' => '',
                    'empty' => 'Seleccione el aseguradora',
                    'error' => false // No mostrar error aquí
                ]);


                if (!empty($this->Form->error('aseguradora'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('aseguradora') . '</div>';
                }
                ?>
            </div>

            <!-- Estado de Afiliacion -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">11</span>
                    <label for="familiograma" class="font-semibold">Estado de Afiliacion</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('estadoafiliacion', [
                    'type' => 'select',
                    'id' => 'producto_id',
                    'options' => $estadoAfiliacionOption,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'label' => '',
                    'empty' => 'Seleccione el estado de afiliacion',
                    'error' => false // No mostrar error aquí
                ]);


                if (!empty($this->Form->error('estadoafiliacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estadoafiliacion') . '</div>';
                }
                ?>
            </div>

            <!-- Regimen -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">11</span>
                    <label for="nombre" class="font-semibold">Regimen</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('regimen', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $regimenOption,
                    'label' => '',
                    'empty' => 'Selecciona el régimen',
                ]);

                if (!empty($this->Form->error('regimen'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('regimen') . '</div>';
                }
                ?>
            </div>

            <!-- Rol -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">12</span>
                    <label for="nombre" class="font-semibold">Rol</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('rol', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $rolOption,
                    'label' => '',
                    'empty' => 'Selecciona el rol',
                ]);

                if (!empty($this->Form->error('rol'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('rol') . '</div>';
                }
                ?>
            </div>

            <!-- Etnia -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">13</span>
                    <label for="nombre" class="font-semibold">Etnia</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('etnia', [
                    'type' => 'select',
                    'id' => 'etnia',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $etniaOption,
                    'label' => '',
                    'empty' => 'Selecciona la etnia',
                ]);

                if (!empty($this->Form->error('etnia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('etnia') . '</div>';
                }
                ?>
            </div>

            <!-- Grupo Poblacional -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">14</span>
                    <label for="nombre" class="font-semibold">Grupo Poblacional</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('grupopoblacional', [
                    'type' => 'select',
                    'id' => 'grupopoblacional',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $grupoPoblacional,
                    'label' => '',
                    'empty' => 'Selecciona el grupo poblacional',
                ]);

                if (!empty($this->Form->error('grupopoblacional'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('grupopoblacional') . '</div>';
                }
                ?>
            </div>

            <!-- Nivel Educativo -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">15</span>
                    <label for="nombre" class="font-semibold">Nivel Educativo</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('niveleducativo', [
                    'type' => 'select',
                    'id' => 'niveleducativo',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $nivelEducativo,
                    'label' => '',
                    'empty' => 'Selecciona el nivel educativo',
                ]);

                if (!empty($this->Form->error('niveleducativo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('niveleducativo') . '</div>';
                }
                ?>
            </div>

            <!-- Ocupacion -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 md:mr-4" id="seccion-ocupacion" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">16</span>
                    <label for="familiograma" class="font-semibold">Ocupacion</label>
                </div>

                <?php
                echo $this->Form->input('ocupacion', [
                    'type' => 'select',
                    'id' => 'ocupacion',
                    'options' => $optionOcupacion,
                    'class' => 'w-full',
                    'label' => '',
                    'empty' => 'Seleccione la ocupacion',
                    'error' => false // No mostrar error aquí
                ]);


                if (!empty($this->Form->error('ocupacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('ocupacion') . '</div>';
                }
                ?>
            </div>

            <!-- Telefono -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="seccion-telefono" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">17</span>
                    <label for="telefono" class="font-semibold">Telefono</label>
                </div>
                <?php
                echo $this->Form->input('telefono', [
                    'label' => false,
                    'type' => 'text',
                    'id' => 'telefono',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 mt-2 font-semibold text-gray-700 text-sm focus:text-gray-900',
                    'error' => false,
                    'maxlength' => 10,               // menos de 11 => máximo 10 dígitos
                    'pattern' => '[0-9]{1,10}',      // sólo números, 1 a 10 dígitos
                    'inputmode' => 'numeric',
                    'title' => 'Solo números, máximo 10 dígitos',
                    // limpia cualquier carácter no numérico y limita a 10 dígitos; muestra/oculta mensaje de error
                    'oninput' => "this.value = this.value.replace(/\\D/g,'').slice(0,10); document.getElementById('telefonoError').style.display = (/^[0-9]{1,10}$/.test(this.value) || this.value.length===0) ? 'none' : 'block';"
                ]);

                if (!empty($this->Form->error('telefono'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('telefono') . '</div>';
                }
                ?>
                <div id="telefonoError" class="text-red-600 text-md mt-1 font-semibold" style="display:none;">
                    Ingrese solo números (máximo 10 dígitos).
                </div>
            </div>

            <!-- Email -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="seccion-email" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">18</span>
                    <label for="nombre" class="font-semibold">Email</label>
                </div>
                <?php
                echo $this->Form->input('email', [
                    'type' => 'text',
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false
                ]);

                if (!empty($this->Form->error('email'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('email') . '</div>';
                }
                ?>
            </div>

        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-person-circle-check text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Anamesis</h1>
                <p class="text-gray-500">Complementa la información segun la valoracion en salud.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">


            <!-- Discapacidad -->
            <div class="col-span-2 md:col-span-2 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">¿Presenta alguna de las siguientes discapacidades?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('discapacidad', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionDiscapacidad,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('discapacidad'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('discapacidad') . '</div>';
                }
                ?>

                <div class="relative inline-block w-full">
                    <button type="button"
                        id="ayudaButtonCURSO"
                        class="mt-4 bg-blue-100 text-blue-700 hover:bg-blue-200 rounded-full w-10 h-10 flex items-center justify-center"
                        aria-label="Ayuda" aria-expanded="false">
                        ?
                    </button>
                    <div id="helpContentCURSO"
                        class="absolute left-0 top-16 mb-2 w-80 bg-blue-50 border border-blue-200 rounded-lg z-50 hidden shadow-lg p-4"
                        role="dialog" aria-hidden="true">
                        <p><strong>Físicas:</strong>
                            Limitaciones o dificultades en la movilidad o funcionamiento físico.
                            <br>
                            <strong>Auditivas:</strong>
                            Dificultades o limitaciones en la capacidad de escuchar o procesar el sonido.
                            <br>
                            <strong>Visuales:</strong>
                            Limitaciones o dificultades en la visión.
                            <br>
                            <strong>Sordoceguera:</strong>
                            Condición en la que una persona tiene tanto discapacidad auditiva como discapacidad visual.
                            <br>
                            <strong>Cognitivas o intelectuales:</strong>
                            Limitaciones en el funcionamiento del cerebro que afectan el procesamiento, comprensión, aprendizaje y memoria de la información.
                            <br>
                            <strong>Mentales:</strong>
                            Limitaciones en las habilidades cognitivas, emocionales y de comportamiento.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Peso -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">Registre Peso en Kg.</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('peso', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'id' => 'peso',
                ]);

                if (!empty($this->Form->error('peso'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('peso') . '</div>';
                }
                ?>
            </div>

            <!-- Talla -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">Registre talla en cm</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('talla', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'id' => 'talla',
                ]);

                if (!empty($this->Form->error('talla'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('talla') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <button type="button" id="calcularIMC" class="bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">Calcular IMC</button>
            </div>

            <!-- Indice de masa corporal -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="nombre" class="font-semibold">Indice de masa corporal</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('indicemasacorporal', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'readonly' => 'readonly',
                    'id' => 'indicemasacorporal',
                ]);

                if (!empty($this->Form->error('indicemasacorporal'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('indicemasacorporal') . '</div>';
                }
                ?>
                <p id="mensajeIMC"></p>
            </div>

            <!-- Tension Arterial mayores de 2 años -->
            <div class="col-span-2 md:col-span-2 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-tension" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">Registre Tensión arterial 0/0</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tensionarterial', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'id' => 'tensionarterial',
                ]);

                if (!empty($this->Form->error('tensionarterial'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tensionarterial') . '</div>';
                }
                ?>

                <p id="mensaje-tension-arterial"></p>
            </div>

            <!-- Enfermedades Cronicas -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="nombre" class="font-semibold">¿Presenta alguna de las siguientes enfermedades crónicas?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('condicioncronica', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionCronica,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('condicioncronica'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('condicioncronica') . '</div>';
                }
                ?>
            </div>

            <!-- Antecedente Ginecologico -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-antecedenteginecologico" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">¿Le han realizado alguna cirugia ginecológica?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('antecedenteginecologico', [
                    'type' => 'select',
                    'id' => 'antecedenteginecologico',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'multiple' => true,
                    'options' => $optionGinecologico,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('antecedenteginecologico'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('antecedenteginecologico') . '</div>';
                }
                ?>
            </div>

            <!-- Tomacitologia -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-tomacitologia" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">¿Se ha realizado el exámen de citología de acuerdo a esquema?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('tomacitologia', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionCitologia,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('tomacitologia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('tomacitologia') . '</div>';
                }
                ?>

                <p class="text-gray-400 text-xs mt-2">Esquema: Citología convencional esquema 1-3-3 edad 25 a 29 años y
                    Citología VPH 1-5-5 edad de 30 a 65 años, Esquemas ante resultado negativo
                </p>
            </div>

            <!-- Mamografia -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-1 text-md font-semibold my-6 mr-4" id="campo-mamografia" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="mamografia" class="font-semibold">Le han realizado Mamografía en los 5 últimos años (Mujer de 50 y más años)</label>
                </div>

                <?php $selectedMamografia = $this->Form->value('mamografia'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][mamografia]"
                            id="mamografia-no"
                            value="NO"
                            class="hidden peer"
                            <?php echo $selectedMamografia === 'NO' ? 'checked' : ''; ?>
                            data-target="mamografia"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="mamografia-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][mamografia]"
                            id="mamografia-si"
                            value="SI"
                            data-target="mamografia"
                            <?php echo $selectedMamografia === 'SI' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="mamografia-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18" id="seccion-sexual" style="display: none;">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-person-half-dress text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Salud Sexual</h1>
                <p class="text-gray-500">Complementa la información correspondiente a la salud sexual.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Vida Sexual -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-iniciovidasexual" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">¿Usted ha iniciado su vida sexual?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('iniciovidasexual', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionVidaSexual,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('iniciovidasexual'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('iniciovidasexual') . '</div>';
                }
                ?>
            </div>

            <!-- Métodos Anticonceptivos -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-metodosanticonceptivos" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">¿Utiliza algún método de planificación familiar?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('metodosanticonceptivos', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionAnticonceptivos,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('metodosanticonceptivos'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('metodosanticonceptivos') . '</div>';
                }
                ?>
            </div>

            <!-- Infecciones de Transmisión Sexual -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-infeccionestransmisionsexual" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">¿Le han diagnosticado alguna Infección de transmisión Sexual?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('infeccionestransmisionsexual', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionits,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('infeccionestransmisionsexual'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('infeccionestransmisionsexual') . '</div>';
                }
                ?>
            </div>

            <!-- Gestacion -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4" id="campo-gestacion" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="sexo" class="font-semibold">¿Mujer en embarazo?</label>
                </div>

                <?php $selectedGestacion = $this->Form->value('gestacion'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][gestacion]"
                            id="gestacion-no"
                            value="No"
                            <?php echo $selectedGestacion === 'No' ? 'checked' : ''; ?>
                            class="hidden peer"
                            data-target="gestacion"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="gestacion-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][gestacion]"
                            id="gestacion-si"
                            value="Si"
                            data-target="gestacion"
                            <?php echo $selectedGestacion === 'Si' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="gestacion-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
                <p class="text-gray-400 text-xs mt-2">Registre información de mujer en gestación o puerperio</p>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18" id="seccion-gestacion" style="display: none;">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-person-pregnant text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Gestacion</h1>
                <p class="text-gray-500">Complementa la información si la personas es gestante.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Control Prenatal -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">¿Esta inscrita en control prenatal?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('controlprenatal', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionControlPrenatal,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('controlprenatal'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('controlprenatal') . '</div>';
                }
                ?>
            </div>

            <!-- Riesgo del Embarazo -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">¿El riesgo del embarazo es?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('riesgoembarazo', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionRiesgoEmbarazo,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('riesgoembarazo'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgoembarazo') . '</div>';
                }
                ?>
            </div>

            <!-- Signos o Síntomas de Alarma -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="nombre" class="font-semibold">¿En el momento presenta alguno de los siguientes signos o síntomas de alarma?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('signoAlarma', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionAlarmaEmbarazo,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('signoAlarma'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('signoAlarma') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12">

        <div class="flex items-center mb-4">
            <i class="fa-solid fa-circle-exclamation text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Atenciones</h1>
                <p class="text-gray-500">Complementa la información de las atenciones.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!--  -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="sexo" class="font-semibold">¿Asistió a consulta de odontología en el último año?</label>
                </div>

                <?php $selectedSaludoral = $this->Form->value('saludoral'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][saludoral]"
                            id="saludoral-no"
                            value="No"
                            <?php echo $selectedSaludoral === 'No' ? 'checked' : ''; ?>
                            class="hidden peer"
                            data-target="saludoral"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="saludoral-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][saludoral]"
                            id="saludoral-si"
                            value="Si"
                            data-target="saludoral"
                            <?php echo $selectedSaludoral === 'Si' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="saludoral-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
            </div>

            <!-- Vacunas Aplicadas -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">¿Le han aplicado alguna de las siguientes vacunas en el último año?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('esquemavacunacion', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionVacuna,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('esquemavacunacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('esquemavacunacion') . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto p-18" id="seccion-menores" style="display: none;">
    <div class="bg-white shadow-2xl rounded-xl p-6 md:p-12">

        <div class="flex items-center mb-4">
            <i class="fa-solid fa-baby text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Salud Menores</h1>
                <p class="text-gray-500">Complementa la información de salud orientada a los menores de edad.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!--  -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-2 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="sexo" class="font-semibold">¿Se ha desparasitado en los últimos seis meses?</label>
                </div>

                <?php $selectedDesparasitacion = $this->Form->value('desparasitacion'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%] md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][desparasitacion]"
                            id="desparasitacion-no"
                            value="No"
                            class="hidden peer"
                            <?php echo $selectedDesparasitacion === 'No' ? 'checked' : ''; ?>
                            data-target="desparasitacion"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="desparasitacion-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][desparasitacion]"
                            id="desparasitacion-si"
                            value="Si"
                            data-target="desparasitacion"
                            <?php echo $selectedDesparasitacion === 'Si' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="desparasitacion-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
            </div>

            <!-- Estado de Nutrición -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="nombre" class="font-semibold">¿Le han informado sobre el estado de nutrición del menor?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('desnutricion', [
                    'type' => 'select',
                    'id' => 'rol',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionMalnutricion,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('desnutricion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('desnutricion') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivos específicos -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="producto_id" class="font-semibold">Informa sobre alguna dificultad del desarrollo</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('desarrolloinfantil', [
                    'label' => '',
                    'type' => 'textarea',
                    'id' => 'desarrolloinfantil',
                    'data-maxlength' => 800,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('desarrolloinfantil'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('desarrolloinfantil') . '</div>';
                }
                ?>
            </div>

            <!-- Enfermedad respiratoria Aguda -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-2 md:col-span-2 text-md font-semibold my-6 mr-4" id="campo-era" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">?</span>
                    <label for="sexo" class="font-semibold">En el momento presenta algún signo de Enfermedad respiratoria Aguda</label>
                </div>
                <?php $selectedEra = $this->Form->value('era'); ?>

                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][era]"
                            id="era-no"
                            value="No"
                            class="hidden peer"
                            <?php echo $selectedEra === 'No' ? 'checked' : ''; ?>
                            data-target="era"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="era-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][era]"
                            id="era-si"
                            value="Si"
                            data-target="era"
                            <?php echo $selectedEra === 'Si' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="era-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>

                <p class="text-gray-400 text-xs mt-2"> NOTA:Tener en cuenta signos y síntomas de alarma AIEPI</p>
            </div>

            <!-- Enfermedad diárreica Aguda -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-2 md:col-span-2 text-md font-semibold my-6 mr-4" id="campo-ira" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="sexo" class="font-semibold">En el momento presenta algún signo de Enfermedad diárreica Aguda</label>
                </div>
                <?php $selectedIra = $this->Form->value('ira'); ?>

                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][eda]"
                            id="eda-no"
                            <?php echo $selectedIra === 'No' ? 'checked' : ''; ?>
                            value="No"
                            class="hidden peer"
                            data-target="eda"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="eda-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][eda]"
                            id="eda-si"
                            value="Si"
                            <?php echo $selectedIra === 'Si' ? 'checked' : ''; ?>
                            data-target="eda"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="eda-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>

                <p class="text-gray-400 text-xs mt-2"> NOTA:Tener en cuenta signos y síntomas de alarma AIEPI</p>
            </div>

            <!-- Prematuro -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-2 md:col-span-2 text-md font-semibold my-6 mr-4" id="campo-prematuro" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="prematuro" class="font-semibold">¿El/la menor nació prematuro?</label>
                </div>

                <?php $selectedPrematuro = $this->Form->value('prematuro'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][prematuro]"
                            id="prematuro-no"
                            value="No"
                            class="hidden peer"
                            data-target="prematuro"
                            <?php echo $selectedPrematuro === 'No' ? 'checked' : ''; ?>
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="prematuro-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][prematuro]"
                            id="prematuro-si"
                            <?php echo $selectedPrematuro === 'Si' ? 'checked' : ''; ?>
                            value="Si"
                            data-target="prematuro"
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="prematuro-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
            </div>

            <!-- anomaliacongenita -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-2 md:col-span-2 text-md font-semibold my-6 mr-4" id="campo-anomaliacongenita" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="prematuro" class="font-semibold">Presenta una anomalía congénita</label>
                </div>

                <?php $selectedAnomaliaCongenita = $this->Form->value('anomaliacongenita'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][anomaliacongenita]"
                            id="anomaliacongenita-no"
                            value="No"
                            class="hidden peer"
                            data-target="anomaliacongenita"
                            <?php echo $selectedAnomaliaCongenita === 'No' ? 'checked' : ''; ?>
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="anomaliacongenita-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][anomaliacongenita]"
                            id="anomaliacongenita-si"
                            value="Si"
                            data-target="anomaliacongenita"
                            <?php echo $selectedAnomaliaCongenita === 'Si' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="anomaliacongenita-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
            </div>

            <!-- Perimetro braquial-->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-perimetrobraquial" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">Registre su perímetro braquial (cm)</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('perimetrobraquial', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'id' => 'perimetrobraquial',
                ]);

                if (!empty($this->Form->error('perimetrobraquial'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('perimetrobraquial') . '</div>';
                }
                ?>
            </div>

            <!-- Perimetro cefalico -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-perimetrocefalico" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">Registre su perímetro cefálico (cm)</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('perimetrocefalico', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'id' => 'perimetrocefalico',
                ]);

                if (!empty($this->Form->error('perimetrocefalico'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('perimetrocefalico') . '</div>';
                }
                ?>
            </div>

            <!-- Perimetro perimetrocintura-->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-perimetrocintura" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">Registre su perímetro perimetrocintura (cm)</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('perimetrocintura', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'id' => 'perimetrocintura',
                ]);

                if (!empty($this->Form->error('perimetrocintura'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('perimetrocintura') . '</div>';
                }
                ?>
            </div>

            <!-- Perimetro perimetrocadera -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-perimetrocadera" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">Registre su perímetro perimetrocadera (cm)</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('perimetrocadera', [
                    'label' => false,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none  focus:ring-1 focus:ring-blue-500 focus:border-blue-500 borde azul  mt-2 font-semibold text-gray-700  text-sm focus:text-gray-900',
                    'error' => false,
                    'placeholder' => '',
                    'id' => 'perimetrocadera',
                ]);

                if (!empty($this->Form->error('perimetrocadera'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('perimetrocadera') . '</div>';
                }
                ?>
            </div>

            <!-- Lactancia Materna -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-lactanciamaterna" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">¿El alimento en El/La menor es: ?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('lactanciamaterna', [
                    'type' => 'select',
                    'id' => 'lactanciamaterna',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionLactancia,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('lactanciamaterna'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('lactanciamaterna') . '</div>';
                }
                ?>
            </div>

        </div>

    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <div class="flex items-center mb-4">
            <i class="fa-solid fa-head-side-mask text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Servicios de salud</h1>
                <p class="text-gray-500">Complementa la información de los servicios de salud.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Valoración Médica -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="nombre" class="font-semibold">¿Ha asistido a Valoración Médica en el ultimo año?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('valoracionmedica', [
                    'type' => 'select',
                    'id' => 'valoracionmedica',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionValoracionMedica,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('valoracionmedica'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('valoracionmedica') . '</div>';
                }
                ?>
            </div>

            <!-- Motivo de anasistencia -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4" id="campo-motivoinasistencia" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">?</span>
                    <label for="motivoinasistencia" class="font-semibold">Motivo de inasistencia</label>
                </div>
                <?php
                echo $this->Form->input('motivoinasistencia', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'options' => $opcionNoAtencion,
                    'class' => 'w-full',
                    'id' => 'motivoinasistencia',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('motivoinasistencia'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('motivoinasistencia') . '</div>';
                }
                ?>
            </div>

            <!-- Motivo de anasistencia -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="saludalternativa" class="font-semibold">¿Hace uso de medicina tradicional Indígena?</label>
                </div>
                <?php
                echo $this->Form->input('saludalternativa', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'options' => $optionAlternativa,
                    'class' => 'w-full',
                    'id' => 'saludalternativa',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('saludalternativa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('saludalternativa') . '</div>';
                }
                ?>
            </div>


        </div>

    </div>
</div>

<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <div class="flex items-center mb-4">
            <i class="fa-solid fa-brain text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Psicosocial</h1>
                <p class="text-gray-500">Complementa la información psicosocial.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="sexo" class="font-semibold">Practica actividad física</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php $selectedActividadFisica = $this->Form->value('actividadfisica'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][actividadfisica]"
                            id="actividadfisica-no"
                            value="No"
                            class="hidden peer"
                            <?php echo $selectedActividadFisica === 'No' ? 'checked' : ''; ?>
                            data-target="actividadfisica"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="actividadfisica-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][actividadfisica]"
                            id="actividadfisica-si"
                            value="Si"
                            data-target="actividadfisica"
                            <?php echo $selectedActividadFisica === 'Si' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="actividadfisica-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
            </div>

            <!-- cuidador -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-cuidador" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">¿El cuidado del menor está a cargo principalmente de?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('cuidador', [
                    'type' => 'select',
                    'id' => 'cuidador',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionCuidado,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('cuidador'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('cuidador') . '</div>';
                }
                ?>
            </div>

            <!-- Hijo de padres con consumo de sustancias psicoactivas -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4" id="campo-padresconsumo" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="sexo" class="font-semibold">Hijo de padres (especialmente la madre) con consumo de sustancias psicoactivas</label>
                </div>

                <?php $selectedPadresConsumo = $this->Form->value('padresconsumo'); ?>
                <div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
                    <!-- Botón NO -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][padresconsumo]"
                            id="padresconsumo-no"
                            value="No"
                            class="hidden peer"
                            <?php echo $selectedPadresConsumo === 'No' ? 'checked' : ''; ?>
                            data-target="padresconsumo"
                            data-show="false"
                            checked /> <!-- 👈 Por defecto NO -->
                        <label for="padresconsumo-no"
                            class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            NO
                        </label>
                    </div>

                    <!-- Botón SÍ -->
                    <div>
                        <input type="radio"
                            name="data[Juventudadulto][padresconsumo]"
                            id="padresconsumo-si"
                            value="Si"
                            data-target="padresconsumo"
                            <?php echo $selectedPadresConsumo === 'Si' ? 'checked' : ''; ?>
                            data-show="true"
                            class="hidden peer cursor-pointer" />
                        <label for="padresconsumo-si"
                            class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
                            SI
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold mt-4 mb-6 md:mr-4" id="campo-estudio" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
                    <label for="nombre" class="font-semibold">¿El menor asiste a una institución educativa o de cuidado?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('estudio', [
                    'type' => 'select',
                    'id' => 'estudio',
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'error' => false,
                    'options' => $optionEstudio,
                    'label' => '',
                    'empty' => 'Selecciona una opción',
                ]);

                if (!empty($this->Form->error('estudio'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estudio') . '</div>';
                }
                ?>
            </div>

            <!-- Consumo SPA	 -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4" id="campo-consumospa" style="display: none;">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">?</span>
                    <label for="consumospa" class="font-semibold">Consumo de Alcohol/Cigarrillo, sustancias Psicoactivas, uso indebido de medicamentos</label>
                </div>
                <?php
                echo $this->Form->input('consumospa', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'options' => $optionConsumospa,
                    'class' => 'w-full',
                    'id' => 'consumospa',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('consumospa'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('consumospa') . '</div>';
                }
                ?>
            </div>

            <!-- Consumo Riesgo	 -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="riesgopsicosocial" class="font-semibold">¿Ha presentado alguna de las siguientes situaciones en el último mes?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('riesgopsicosocial', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'options' => $optionConflictos,
                    'class' => 'w-full',
                    'id' => 'riesgopsicosocial',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('riesgopsicosocial'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riesgopsicosocial') . '</div>';
                }
                ?>
            </div>

            <!-- Sospecha de maltrato	 -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="riesgopsicosocial" class="font-semibold">¿Sospecha de algún tipo de vulneración o violencia?</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('sopechamaltrato', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'options' => $optionTiposViolencia,
                    'class' => 'w-full',
                    'id' => 'sopechamaltrato',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('sopechamaltrato'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('sopechamaltrato') . '</div>';
                }
                ?>
            </div>

            <!-- riegodepresion -->
			<div class="flex flex-col md:flex-row justify-center md:justify-between col-span-1 md:col-span-2 text-md font-semibold my-6 mr-4" id="campo-psicosocial" style="display: none;">
				<div class="flex items-center mb-4">
					<span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
					<label for="riesgodepresion" class="font-semibold">¿Durante los últimos 30 dias ha sentido a menudo desanimado, deprimido o sin esperanza?</label>
				</div>

                <?php $selectedRiesgoDepresion = $this->Form->value('riesgodepresion'); ?>
				<div class="flex space-x-4 items-center justify-center md:justify-start mt-4 pr-0 md:pr-[10%]  md:mt-0 ">
					<!-- Botón NO -->
					<div>
						<input type="radio"
							name="data[Juventudadulto][riesgodepresion]"
							id="riesgodepresion-no"
							value="No"
							class="hidden peer"
                            <?php echo $selectedRiesgoDepresion === 'No' ? 'checked' : ''; ?>
							data-target="riesgodepresion"
							data-show="false"
							checked /> <!-- 👈 Por defecto NO -->
						<label for="riesgodepresion-no"
							class="px-12 py-2 rounded-lg border cursor-pointer hover:text-white hover:bg-teal-600
                       peer-checked:bg-teal-600 peer-checked:text-white">
							NO
						</label>
					</div>

					<!-- Botón SÍ -->
					<div>
						<input type="radio"
							name="data[Juventudadulto][riesgodepresion]"
							id="riesgodepresion-si"
							value="Si"
							data-target="riesgodepresion"
							data-show="true"
                            <?php echo $selectedRiesgoDepresion === 'Si' ? 'checked' : ''; ?>
							class="hidden peer cursor-pointer" />
						<label for="riesgodepresion-si"
							class="px-12 py-2 rounded-lg border hover:bg-teal-600 cursor-pointer hover:text-white
                       peer-checked:bg-teal-600 peer-checked:text-white">
							SI
						</label>
					</div>
				</div>
			</div>

			<!-- riegodansiedad-->
			<div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4" id="campo-ansiedad" style="display: none;">
				<div class="flex items-center mb-4">
					<span class="mr-2 px-2 rounded-lg bg-blue-200 text-md font-semibold">?</span>
					<label for="riegodansiedad" class="font-semibold">¿Que tan seguido se ha molestado por los siguientes problemas? (Sentirse nervioso(a), ansionso(a), o inquieto)</label>
					<p class="text-red-600">*</p>
				</div>
				<?php
				echo $this->Form->input('riegodansiedad', [
					'type' => 'select',
					'id' => 'riegodansiedad',
					'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
					'error' => false,
					'options' => $optionAnsiedad,
					'label' => '',
					'empty' => 'Selecciona una opción',

				]);
				if (!empty($this->Form->error('riegodansiedad'))) {
					echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('riegodansiedad') . '</div>';
				}
				?>
			</div>


        </div>

    </div>
</div>


<div class="max-w-6xl mx-auto p-18">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">

        <div class="flex items-center mb-4">
            <i class="fa-solid fa-hands-holding-child text-teal-600 text-3xl bg-teal-100 px-5 py-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Canalización para el Plan de Cuidado</h1>
                <p class="text-gray-500">Para diligenciar el plan de cuidado es necesario realizar un análisis integral de la persona, ya que este paso es fundamental para definir de manera precisa el impacto esperado de la caracterización.</p>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- canalización  -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">1</span>
                    <label for="canalizacionuno" class="font-semibold">Canalización</label>
                    <p class="text-red-600">*</p>

                </div>
                <?php
                echo $this->Form->input('canalizacionuno', [
                    'type' => 'select',
                    'label' => false,
                    'multiple' => true,
                    'empty' => false,
                    'options' => $optionCanalizacion,
                    'class' => 'w-full',
                    'id' => 'canalizacionuno',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('canalizacionuno'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('canalizacionuno') . '</div>';
                }
                ?>
            </div>

            <!-- Estado de canalizacion	 -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">2</span>
                    <label for="riesgopsicosocial" class="font-semibold">Estado de canalizacion</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('estadocanalizacion', [
                    'type' => 'select',
                    'label' => false,
                    'empty' => false,
                    'options' => $optionEstadoCanalizacion,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'id' => 'estadocanalizacion',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('estadocanalizacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('estadocanalizacion') . '</div>';
                }
                ?>
            </div>

            <!-- Objetivos específicos -->
            <div class="col-span-2 text-md font-semibold my-6">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">3</span>
                    <label for="producto_id" class="font-semibold">Observacion de la atencion </label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('observacion', [
                    'label' => '',
                    'type' => 'textarea',
                    'id' => 'VisitasnegadaObservacion',
                    'data-maxlength' => 800,
                    'class' => 'ckeditor border rounded-lg w-full p-2 focus:ring focus:ring-blue-200',
                    'error' => false // No mostrar error aquí
                ]);
                if (!empty($this->Form->error('observacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('observacion') . '</div>';
                }
                ?>
            </div>

            <!-- Educación	 -->
            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">4</span>
                    <label for="educacion" class="font-semibold">Refiera el tipo de Educación a desarrollar</label>
                    <p class="text-red-600">*</p>
                </div>
                <?php
                echo $this->Form->input('educacion', [
                    'type' => 'select',
                    'label' => false,
                    'empty' => false,
                    'multiple' => true,
                    'options' => $optionEducacion,
                    'class' => 'border border-gray-300 rounded-lg w-full p-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-500 focus:text-gray-800',
                    'id' => 'educacion',
                    'error' => false,
                    'label' => false,

                ]);
                if (!empty($this->Form->error('educacion'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('educacion') . '</div>';
                }
                ?>
            </div>


            <div class="col-span-2 md:col-span-1 text-md font-semibold my-6 mb-6 md:mr-4">
                <div class="flex items-center mb-4">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">5</span>
                    <label for="familiograma" class="font-semibold">IPS referida</label>
                    <p class="text-red-600">*</p>
                </div>

                <?php
                echo $this->Form->input('canalizacion_id', [
                    'type' => 'select',
                    'id' => 'canalizacion_id',
                    'class' => 'w-full',
                    'label' => '',
                    'empty' => 'Seleccione el IPS',
                    'error' => false // No mostrar error aquí
                ]);


                if (!empty($this->Form->error('canalizacion_id'))) {
                    echo '<div class="text-red-600 text-md mt-1 font-semibold">' . $this->Form->error('canalizacion_id') . '</div>';
                }
                ?>
            </div>

            <div class="col-span-2 md:col-span-1 text-md font-semibold my-4 sm:mr-4">
                <div class="flex items-center">
                    <span class="mr-2 px-2 rounded-lg bg-green-200 text-md font-semibold">6</span>
                    <label for="resultadoEcomapa" class="font-semibold">Fecha de Canalizacion</label>
                    <p class="text-red-600">*</p>
                </div>
                <div class="col-span-2 text-md font-semibold mt-6">
                    <div class="flex flex-col w-full">
                        <input
                            type="text"
                            name="data[Juventudadulto][registroCanalizacion]"
                            id="registroCanalizacion"
                            value="<?= h($this->Form->value('registroCanalizacion')); ?>"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 w-full"
                            placeholder="Selecciona rango de fecha" />
                        <span class="text-sm text-red-600 ">
                            <?= $this->Form->error('registroCanalizacion') ?>
                        </span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<div class="max-w-6xl mx-auto p-18 mt-12">
    <div class="bg-white shadow-2xl rounded-xl  p-6  md:p-12">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <i class="fa-solid fa-upload text-teal-600 text-3xl bg-teal-100 p-3 rounded-lg"></i>
            <div class="ml-4">
                <h1 class="text-xl font-semibold">Carga de información</h1>
                <p class="text-gray-500">Realiza la consolidacion del archivo segun tu disponibilidad de Internet recuerda asignar un id manual para la vivienda si lo exportas como JSON.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3">

            <!-- Botón -->
            <div class="w-full p-2">
                <button name="btn" value="Guardar" type="submit" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                            <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                            <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                        </svg>
                    </span>
                    Actualizar
                </button>
            </div>



            <!-- Botón -->
            <div class="w-full  p-2">
                <button name="btn" value="ver familia" type="buttton" class="w-full bg-teal-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition font-medium flex items-center justify-center gap-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save">
                            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            <circle cx="12" cy="12" r="1" />
                            <path d="M18.944 12.33a1 1 0 0 0 0-.66 7.5 7.5 0 0 0-13.888 0 1 1 0 0 0 0 .66 7.5 7.5 0 0 0 13.888 0" />
                        </svg>

                    </span>
                    ver familia
                </button>
            </div>
        </div>
    </div>
</div>


<?php echo $this->Form->end(); ?>


<script type="text/javascript">
    function ocultarYLimpiar(id) {
        const el = document.getElementById(id);

        // Oculta el contenedor
        el.style.display = "none";

        // Limpia TODOS los inputs, selects y textareas dentro
        el.querySelectorAll("input, select, textarea").forEach(item => {
            if (item.type === "checkbox" || item.type === "radio") {
                item.checked = false;
            } else {
                item.value = "";
            }
        });
    }

    $(function() {
        nacimiento = null; // Aquí guardamos la fecha elegida

        $('#fecha').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            locale: {
                format: 'YYYY-MM-DD',
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                monthNames: [
                    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                ],
                firstDay: 1
            }
        }, function(start) {
            nacimiento = start.toDate();
            evaluarCampos();
        });


        // Escuchar cambios en los radios de género
        const radio_genero = document.getElementsByName('data[Juventudadulto][sexo]');
        const radio_gestante = document.getElementsByName('data[Juventudadulto][gestacion]');

        radio_genero.forEach(r => {
            r.addEventListener('change', evaluarCampos);
        });

        radio_gestante.forEach(r => {
            r.addEventListener('change', evaluarCampos);
        });


        // Si hay valor en el campo fecha, inicializar nacimiento y ejecutar evaluarCampo

        var fechaInput = document.getElementById('fecha');
        if (fechaInput && fechaInput.value) {
            nacimiento = new Date(fechaInput.value);
                }
        // Ejecutar evaluarCampos al cargar el formulario
        evaluarCampos();



        function evaluarCampos() {

            if (!nacimiento) return;

            const hoy = new Date();
            let edad = hoy.getFullYear() - nacimiento.getFullYear();
            const mes = hoy.getMonth() - nacimiento.getMonth();

            if (mes < 0 || (mes === 0 && hoy.getDate() < nacimiento.getDate())) {
                edad--;
            }


            // obtener género seleccionado
            let genero = "";
            radio_genero.forEach(r => {
                if (r.checked) genero = r.value;
            });

            let gestacion = "";
            radio_gestante.forEach(r => {
                if (r.checked) gestacion = r.value;
            });

            // Aplicar reglas
            if (edad > 5) {
                document.getElementById("campo-tension").style.display = "block";
                ocultarYLimpiar("campo-era");
                ocultarYLimpiar("campo-ira");
                ocultarYLimpiar("campo-prematuro");
                ocultarYLimpiar("campo-anomaliacongenita");
                ocultarYLimpiar("campo-perimetrobraquial");
                ocultarYLimpiar("campo-perimetrocefalico");
                ocultarYLimpiar("campo-perimetrocintura");
                ocultarYLimpiar("campo-perimetrocadera");
                ocultarYLimpiar("campo-lactanciamaterna");

                if (edad >= 12) {
                    document.getElementById("seccion-sexual").style.display = "block";
                    document.getElementById("campo-iniciovidasexual").style.display = "block";
                    document.getElementById("campo-metodosanticonceptivos").style.display = "block";
                    document.getElementById("campo-infeccionestransmisionsexual").style.display = "block";
                    document.getElementById("campo-consumospa").style.display = "block";
                    document.getElementById("seccion-email").style.display = "block";
                    document.getElementById("seccion-telefono").style.display = "block";
                    document.getElementById("seccion-ocupacion").style.display = "block";
                    document.getElementById("campo-psicosocial").style.display = "block";
                    document.getElementById("campo-ansiedad").style.display = "block";

                    if (genero == "Mujer") {
                        document.getElementById("campo-gestacion").style.display = "flex";
                        if (gestacion === "Si") {
                            document.getElementById("seccion-gestacion").style.display = "block";
                        } else {
                            ocultarYLimpiar("seccion-gestacion");
                        }
                    } else {
                        ocultarYLimpiar("campo-gestacion");
                        ocultarYLimpiar("seccion-gestacion");
                    }

                }

                if (edad < 12) {
                    ocultarYLimpiar("seccion-sexual");
                    ocultarYLimpiar("campo-iniciovidasexual");
                    ocultarYLimpiar("campo-metodosanticonceptivos");
                    ocultarYLimpiar("campo-infeccionestransmisionsexual");
                    ocultarYLimpiar("seccion-email");
                    ocultarYLimpiar("seccion-telefono");
                    ocultarYLimpiar("seccion-ocupacion");
                    ocultarYLimpiar("campo-ansiedad");
                    ocultarYLimpiar("campo-psicosocial");
                    document.getElementById("seccion-menores").style.display = "block";
                    document.getElementById("campo-cuidador").style.display = "block";
                }

                if (edad < 18) {
                    document.getElementById("campo-padresconsumo").style.display = "block";
                    document.getElementById("campo-estudio").style.display = "block";
                }



                if (genero === "Mujer" && edad >= 18) {

                    if (edad >= 25) {
                        document.getElementById("campo-tomacitologia").style.display = "block";
                        document.getElementById("campo-antecedenteginecologico").style.display = "block";
                    }

                    if (edad >= 50) {
                        document.getElementById("campo-mamografia").style.display = "block";
                    }

                }

            } else {
                ocultarYLimpiar("campo-tension");
                ocultarYLimpiar("campo-antecedenteginecologico");
                ocultarYLimpiar("campo-antecedenteginecologico");
                ocultarYLimpiar("campo-tomacitologia");
                ocultarYLimpiar("campo-mamografia");
                ocultarYLimpiar("campo-iniciovidasexual");
                ocultarYLimpiar("campo-infeccionestransmisionsexual");
                ocultarYLimpiar("campo-metodosanticonceptivos");
                ocultarYLimpiar("seccion-gestacion");
                ocultarYLimpiar("campo-psicosocial");
                ocultarYLimpiar("campo-ansiedad");

                document.getElementById("seccion-menores").style.display = "block";
                document.getElementById("campo-era").style.display = "flex";
                document.getElementById("campo-ira").style.display = "flex";
                document.getElementById("campo-prematuro").style.display = "flex";
                document.getElementById("campo-anomaliacongenita").style.display = "flex";
                document.getElementById("campo-perimetrobraquial").style.display = "block";
                document.getElementById("campo-perimetrocefalico").style.display = "block";
                document.getElementById("campo-perimetrocintura").style.display = "block";
                document.getElementById("campo-perimetrocadera").style.display = "block";
                document.getElementById("campo-lactanciamaterna").style.display = "block";

            }
        }

        $('#registroCanalizacion').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            locale: {
                format: 'YYYY-MM-DD',
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                daysOfWeek: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
                monthNames: [
                    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
                ],
                firstDay: 1
            }
        }, function(start) {
            nacimiento = start.toDate();
        });
    });


    document.addEventListener('DOMContentLoaded', function() {



        valoracionmedica = document.getElementById("valoracionmedica");
        motivoinasistencia = document.getElementById("campo-motivoinasistencia");
        valoracionmedica.addEventListener('change', function() {
            if (valoracionmedica.value === 'No asistido |1') {
                motivoinasistencia.style.display = "block";
            } else {
                motivoinasistencia.style.display = "none";
                motivoinasistencia.value = ""; // Limpiar el valor cuando se oculta
            }

        });


        const choices = new Choices("#producto_id", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: false,
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            fuseOptions: {
                includeScore: true,
                threshold: 0.3,
                keys: ['label', 'value']
            },
            renderChoiceLimit: -1, // Sin límite de renderizado
            searchResultLimit: 20, // Puedes aumentar este valor si tienes muchos resultados
        });

        const choices_ocupacion = new Choices("#ocupacion", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: false,
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            fuseOptions: {
                includeScore: true,
                threshold: 0.3,
                keys: ['label', 'value']
            },
            renderChoiceLimit: -1, // Sin límite de renderizado
            searchResultLimit: 20, // Puedes aumentar este valor si tienes muchos resultados
        });

        const choices_riesgoexterno = new Choices("#antecedenteginecologico", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione un vector..."
        });


        const choices_motivoinasistencia = new Choices("#motivoinasistencia", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione motivo de inasistencia..."
        });

        const choices_saludalternativa = new Choices("#saludalternativa", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione salud alternativa..."
        });


        const choices_consumospa = new Choices("#consumospa", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione consumo..."
        });

        const choices_riesgopsicosocial = new Choices("#riesgopsicosocial", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione riesgo psicosocial..."
        });

        const choices_sopechamaltrato = new Choices("#sopechamaltrato", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: -1, // Sin límite
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione tipo de vulneración..."
        });

        const choices_canalizacionuno = new Choices("#canalizacionuno", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: 3, // Límite a 3 items
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione canalización...",
        });

        const choices_educacion = new Choices("#educacion", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: 3, // Límite a 3 items
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione educación...",
        });



        const choices_canalizacion_id = new Choices("#canalizacion_id", {
            searchEnabled: true,
            searchChoices: true,
            removeItemButton: true, // Permite eliminar seleccionados
            itemSelectText: '',
            shouldSort: false,
            searchPlaceholderValue: "Escriba para filtrar...",
            maxItemCount: 3, // Límite a 3 items
            removeItems: true, // Permite quitar seleccionados
            duplicateItemsAllowed: false,
            placeholder: true,
            placeholderValue: "Seleccione IPS...",
        });



        document.querySelectorAll('[id^="ayudaButton"]').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                var id = this.id.replace('ayudaButton', 'helpContent');
                var helpContent = document.getElementById(id);
                var expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', String(!expanded));
                helpContent.classList.toggle('hidden');
                helpContent.setAttribute('aria-hidden', String(expanded));
                e.stopPropagation();
            });
        });



        // Cerrar al hacer clic fuera
        document.addEventListener('click', function(e) {
            document.querySelectorAll('[id^="helpContent"]').forEach(function(help) {
                var btnId = help.id.replace('helpContent', 'ayudaButton');
                var btn = document.getElementById(btnId);
                if (!help.classList.contains('hidden') && !help.contains(e.target) && !btn.contains(e.target)) {
                    help.classList.add('hidden');
                    btn.setAttribute('aria-expanded', 'false');
                    help.setAttribute('aria-hidden', 'true');
                }
            });
        });


        var aseguradoraSelect = document.getElementById('aseguradora');
        var otraAseguradoraDiv = document.getElementById('otraAseguradoraDiv');

        aseguradoraSelect.addEventListener('change', function() {
            var selectedOption = aseguradoraSelect.value;

            if (selectedOption === 'otra') {
                otraAseguradoraDiv.style.display = 'block';
                document.getElementById('otraAseguradora').removeAttribute('disabled');
            } else {
                otraAseguradoraDiv.style.display = 'none';
                document.getElementById('otraAseguradora').setAttribute('disabled', 'disabled');
            }
        });

        // Verifica el estado inicial
        if (aseguradoraSelect.value === 'otra') {
            otraAseguradoraDiv.style.display = 'block';
            document.getElementById('otraAseguradora').removeAttribute('disabled');
        } else {
            otraAseguradoraDiv.style.display = 'none';
            document.getElementById('otraAseguradora').setAttribute('disabled', 'disabled');
        }

    });


    function agregarOpcionSeleccion() {



        $("#JuventudadultoCanalizacionId").prepend(
            "<option value='' selected='selected'>Seleccione</option>");


    }


    /*function gestacion(id) {
        if (id == "yes") {
            $("#yes").show();
            $("#not").hide();


        } else if (id == "not") {
            $("#yes").hide();
            $("#not").show();


        }
    }*/


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
    $(function() {
        $('#ayudaButton').popover();
    });
</script>