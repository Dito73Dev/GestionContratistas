Runner.namespace('Runner.lang');

Runner.lang.constants = {

	current_language: "Spanish",

//	for list page
	TEXT_FIRST: 'Primero',
	TEXT_PREVIOUS: 'Anterior',
	TEXT_NEXT: 'Siguiente',
	TEXT_LAST: 'Último',
	TEXT_PROCEED_TO: 'Proceder con',
	TEXT_DETAIL_NOT_SAVED: 'Registros en %s no se han grabado',
	TEXT_NO_RECORDS: 'No se hallaron registros',
	TEXT_DETAIL_GOTO: 'Ir a',
	TEXT_SHOW_ALL: 'Mostrar todo',
	TEXT_SHOW_OPTIONS: 'Mostrar opciones',
	TEXT_HIDE_OPTIONS: 'Ocultar opciones',
	TEXT_SEARCH_SHOW_OPTIONS:'Mostrar opciones de búsqueda',
	TEXT_SEARCH_HIDE_OPTIONS:'Ocultar opciones de búsqueda',
	TEXT_SHOW_SEARCH_PANEL:'Mostrar panel de búsqueda',
	TEXT_HIDE_SEARCH_PANEL:'Ocultar panel de búsqueda',


	TEXT_LOADING: 'cargando',
	TEXT_DELETE_CONFIRM: '?Realmente quiere borrar estos archivos?',
	TEXT_PAGE: 'Página',
	TEXT_PAGEMAX: '/',

//	for editing pages
	TEXT_INVALID_CAPTCHA_CODE: 'Codigo de seguridad no válido',
	TEXT_PLEASE_SELECT: 'Por favor seleccione',
	TEXT_CTRL_CLICK: 'CTRL + click para ordenar por multiples campos',
	TEXT_SAVE: 'Guardar',
	TEXT_CANCEL: 'Cancelar',
	TEXT_PREVIEW: 'previsualizar',
	TEXT_HIDE: 'esconder',
	TEXT_QUESTION_UNSAVED_CHANGES: '¿Quiere abandonar esta página y perder los cambios no grabados?',

	TEXT_EDIT: 'Editar',
	TEXT_COPY: 'Copiar',
	TEXT_VIEW: 'Ver',
	TEXT_INLINE_EDIT: 'Editar',
	TEXT_INLINE_ADD: 'Añadir nuevo',
	TEXT_AA_P_ADD: 'Añadir',

	TEXT_FIELDFILTER_HINT: 'Filtrar valores de campo',

//	for userinfo page
	USERINFO_SENT_EMAIL: 'Un correo electrónico con el código de seguridad fue enviado a %email%.',
	USERINFO_ENTER_CODE: 'Introducir ese código a continuación.',
	USERINFO_SENT_TEXT: 'Un mensaje de texto con el código de seguridad fue enviado a %phone%.',
	USERINFO_INSTALL_APP1: 'Instalar una aplicación de autenticación como Google Authenticator, Authy, Microsoft autenticador o similares en su teléfono.',
	USERINFO_INSTALL_APP2: 'A continuación, escanear el código QR con la aplicación.',
	USERINFO_INSTALL_APP3: 'O cree un nuevo registro en la aplicación manualmente utilizando esta clave:',
	USERINFO_INSTALL_APP4: 'A continuación, introduzca el código de la aplicación a continuación.',

//	for calendar
	TEXT_MONTH_JAN: 'Enero',
	TEXT_MONTH_FEB: 'Febrero',
	TEXT_MONTH_MAR: 'Marzo',
	TEXT_MONTH_APR: 'Abril',
	TEXT_MONTH_MAY: 'Mayo',
	TEXT_MONTH_JUN: 'Junio',
	TEXT_MONTH_JUL: 'Julio',
	TEXT_MONTH_AUG: 'Agosto',
	TEXT_MONTH_SEP: 'Septiembre',
	TEXT_MONTH_OCT: 'Octubre',
	TEXT_MONTH_NOV: 'Noviembre',
	TEXT_MONTH_DEC: 'Diciembre',
	TEXT_DAY_SU: 'DO',
	TEXT_DAY_MO: 'L',
	TEXT_DAY_TU: 'MAR',
	TEXT_DAY_WE: 'MI',
	TEXT_DAY_TH: 'J',
	TEXT_DAY_FR: 'V',
	TEXT_DAY_SA: 'S',
	TEXT_TODAY: 'Hoy',
	TEXT_SELECT_DATE: 'Seleccionar fecha',
	TEXT_TIME: 'Tiempo',
	TEXT_TIME_HOUR: 'Hora',
	TEXT_TIME_MINUTE: 'Minuto',
	TEXT_TIME_SECOND: 'Segundo',

//	for inline message
	TEXT_INLINE_FIELD_REQUIRED: 'Campo requerido',
	TEXT_INLINE_FIELD_ZIPCODE: 'El campo debe ser un código postal válido',
	TEXT_INLINE_FIELD_EMAIL: 'El campo debe ser una dirección de email válida',
	TEXT_INLINE_FIELD_NUMBER: 'El campo debe ser numérico',
	TEXT_INLINE_FIELD_CURRENCY: 'El campo debe ser un número válido de moneda',
	TEXT_INLINE_FIELD_PHONE: 'El campo debe ser un número de teléfono válido',
	TEXT_INLINE_FIELD_PASSWORD1: 'El campo no puede ser la contraseña',
	TEXT_INLINE_FIELD_PASSWORD2: 'El campo puede contener 4 carácteres como máximo',
	TEXT_INLINE_FIELD_STATE: 'El campo debe ser un estado válido',
	TEXT_INLINE_FIELD_SSN: 'El campo debe ser un número de Seguridad  Social válido',
	TEXT_INLINE_FIELD_DATE: 'El campo debe ser una fecha válida',
	TEXT_INLINE_FIELD_DATE_NOT_ALLOWED_DAY: '',
	TEXT_INLINE_FIELD_DATE_NOT_IN_INTERVAL: '',
	TEXT_INLINE_FIELD_DATE_EARLIER_THAN_START: '',
	TEXT_INLINE_FIELD_DATE_LATER_THAN_END: '',
	TEXT_INLINE_FIELD_TIME: 'El campo debe tener un formato de 24 horas',
	TEXT_INLINE_FIELD_CC: 'El campo debe ser un número válido de targeta de credito',
	TEXT_INLINE_ERROR: 'Se ha producido un error',
	TEXT_INLINE_DENY_DUPLICATES: 'El campo no puede contener un valor duplicado',
	TEXT_INLINE_USERNAME_EXISTS1: 'Este nombre de usuario',
	TEXT_INLINE_USERNAME_EXISTS2: 'ya existe. Elija otro nombre de usuario.',
	TEXT_INLINE_EMAIL_ALREADY1: 'Correo electrónico',
	TEXT_INLINE_EMAIL_ALREADY2: 'registrado, si olvidó su nombre de usuario o contraseña use la forma de recordador de contraseña',

	//for RTE
	TEXT_VIEW_SOURCE: 'Ver fuente',
	//for tree-like menu
	TEXT_EXPAND_ALL: 'Expandir todo',
	TEXT_COLLAPSE_ALL: 'Contraer todo',

	//for register page
	SEC_PWD_LEN: 'La contraseña debe contener por lo menos %% carácteres ',
	SEC_PWD_CASE: 'La contraseña debe contener letras en mayúscula y minúscula',
	SEC_PWD_DIGIT: 'La contraseña debe contener por lo menos %% dígitos o símbolos',
	SEC_PWD_UNIQUE: 'La contraseña debe contener %% carácteres únicos',
	PASSWORDS_DONT_MATCH: 'Cambiar contraseña',
	SUCCES_LOGGED_IN: 'Se ha identificado correctamente.',

	//for pdf
	TEXT_PDF_BUILD1: 'Construyendo PDF',
	TEXT_PDF_BUILD2: 'creado',
	TEXT_PDF_BUILD3: 'No se puede crear el PDF',

	CLOSE_WINDOW: 'Cerrar ventana',
	CLOSE: 'Cerrar',
	RESET: 'Reiniciar',

	//for search options
	CONTAINS: 'Contiene',
	EQUALS: 'Equivale',
	STARTS_WITH: 'Empieza con',
	MORE_THAN: 'Más que',
	LESS_THAN: 'Menos que',
	BETWEEN: 'Entre',
	EMPTY: 'Vacio',

	NOT_CONTAINS: 'No contiene',
	NOT_EQUALS: 'No es igual',
	NOT_STARTS_WITH: 'No empieza por',
	NOT_MORE_THAN: 'No mayor que',
	NOT_LESS_THAN: 'No menor que',
	NOT_BETWEEN: 'No está entre',
	NOT_EMPTY: 'No está vacío',

	SEARCH_FOR: 'Buscar por',

	ERROR_MISSING_FILE_NAME: 'No se ha indicado el nombre de fichero',
	ERROR_ACCEPT_FILE_TYPES: 'El tipo de fichero es erróneo',
	ERROR_MAX_FILE_SIZE: 'El tamaño del fichero supera el límite de %s KBytes',
	ERROR_MIN_FILE_SIZE: 'El tamaño del fichero no puede ser menor de %s KBytes',
	ERROR_MAX_TOTAL_FILE_SIZE: 'El tamaño de los ficheros supera el límite de %s KBytes',
	ERROR_MAX_NUMBER_OF_FILES_ONE: 'Solo puede enviar un fichero',
	ERROR_MAX_NUMBER_OF_FILES_MANY: 'No puede enviar más de %s ficheros',

	TEXT_SERVER_ERROR_OCCURRED: 'Ocurrió un error en el servidor',
	TEXT_SEE_DETAILS: 'Ver detalles',

	ERROR_UPLOAD: 'El envío ha fallado',
	START_UPLOAD: 'Enviar',
	CANCEL: 'Cancelar',
	DELETE: 'Borrar artículos seleccionados',

	UPLOAD_DRAG: 'Arrastre aquí los ficheros',

	SELECT_ALL: 'Seleccionar todo',
	UNSELECT_ALL: 'Deseleccionar todo',

	TEXT_WR_REPORT_SAVED: 'Informe grabado',
	TEXT_WR_SOME_PROBLEM: 'Ocurrión algún problema durante la grabación',
	TEXT_WR_CROSS_GROUP: 'Grupo',
	TEXT_WR_HEADER: 'Cabecera',
	TEXT_WR_CROSS_GROUP: 'Grupo',
	TEXT_COUNT: 'Contar',
	TEXT_MIN: 'Min',
	TEXT_MAX: 'Max',
	TEXT_SUM: 'Sum',
	TEXT_AVG: 'Media',
	TEXT_WR_TOTAL_DATA: 'Datos de tabla',
	TEXT_PAGE_SUMMARY: 'Resumen de la pagina',
	TEXT_GLOBAL_SUMMARY: 'Resumen global',
	TEXT_WR_SUMMARY: 'Sumario',
	TEXT_FIELD: 'Campo',
	TEXT_WR_NO_COLOR: 'Sin color',

	TEXT_SEARCH_SAVING: 'Guardando búsqueda',
	TEXT_SEARCH_NAME: 'Nombre de búsqueda',
	TEXT_DELETE_SEARCH_CAPTION: 'Borrar la búsqueda grabada',
	TEXT_DELETE_SEARCH: '¿Quiere borrar esta búsqueda?',
	TEXT_YES: 'Sí',
	TEXT_NO: 'No',

	TEXT_FILTER_APPLY: 'Aplicar',
	TEXT_FILTER_CLEAR: 'borrar',
	TEXT_FILTER_MULTISELECT: 'Multiselección',

	// for rights page
	AA_ADD_NEW_GROUP: 'Añadir nuevo grupo',
	AA_RENAMEGROUP: 'Renombrar grupo',
	AA_GROUP_NEW: 'nuevo grupo',
	AA_DELETEGROUP: 'Realmente quieres borrar el grupo',
	AA_COPY_PERMISS_FROM: 'Elija el grupo del que copiar los permisos:',
	AA_CHOOSE_COLUMNS_TO_DIPLAY: 'Elegir columnas a mostrar',
	AA_SELECT_NONE: 'Limpiar la selección',
	AA_OK: 'OK',

	PREPARE_PAGE_FOR_PRINTING: 'Preparando la página para imprimir',

	// import page
	IMPORT_PROCESSING_RECORDS: 'Procesando registros',
	IMPORT_FAILED: 'La importación falló',

	LOADING_FONTS: 'Carga de fuentes',

	DATEPICKER_CLOSE: '',
	DATEPICKER_SELECT_MONTH: 'Seleccione mes',
	DATEPICKER_NEXT_MONTH: 'Próximo mes',
	DATEPICKER_PREV_MONTH: 'Mes anterior',
	DATEPICKER_SELECT_YEAR: 'Seleccione el año',
	DATEPICKER_NEXT_YEAR: 'El próximo año',
	DATEPICKER_PREV_YEAR: 'El próximo año',

	TODAY: 'Hoy',
	TIME: 'Tiempo',
	TIME_HOUR: 'Hora',
	TIME_MINUTE: 'Minuto',
	SELECT_DATE: 'Seleccionar fecha',

	SESSION_EXPIRED_COMMENT: 'Por razones de seguridad, su sesión se realizará tiempo en %seconds% segundos a menos que continúe',

	NOW: 'ahora',
	NOTI_SECOND: '',
	NOTI_MINUTE: 'm',
	NOTI_HOUR: 'horas',
	NOTI_DAY: 'd',

	
	EXPORT_TO_PDF: 'Exportar a PDF',
	EXPORT_TO_CSV: 'Exportar a CSV',
	SAVE_AS_PNG: 'Guardar como PNG',
	PRINT: 'Imprimir',

	TWOFACTOR_VERIFICATION: 'Verificación de dos factores',
	EMAIL: 'Email',
	TWO_FACTOR_PARAM_EMAIL: 'Dirección de correo electrónico', 
	TWO_FACTOR_PARAM_PHONE: 'Número de teléfono', 
};

Runner.lang.customlabels = {

	prefix: 'CUSTOM_LABEL_',

	// custom labels
	CUSTOM_LABEL_UPDATE_SELECTED: 'Actualizar los seleccionados',
	CUSTOM_LABEL_WERE_SENT: 'Enlace para cambio de contraseña se ha enviado a su correo electrónico personal registrado.\u000a'
};