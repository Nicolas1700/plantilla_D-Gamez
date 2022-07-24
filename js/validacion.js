//--------------- Variables para validar --------------------------------
//Se guarda en una variable el formulario a validar
const formulario = document.getElementById('formulario_validacion');
//Se guaran los inputs dentro de un formulario
const inputs = document.querySelectorAll('#formulario_validacion input');


const expresiones = {
	//------------ Validación de correo --------------------------------------------
	//Valida el correo
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9_.+-]+\.[a-zA-Z0-9_.+-]+$/, //Validación anterior / ^[^@]+@[^@]+\.[a-zA-Z]{2,}$/ 
	//Minimo entre 4 y 12 caracteres 
	contraseña: /^.{4,12}$/,

	//------------ Validación de registro ----------------------------------------

	//Validar nombre
	nombre: /^[a-zA-Z]+([._ ]?[a-zA-Z]+)*$/,
	//Validad apellido
	apellidos: /^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)$/,
	//Validar correo es ta arriba

	//validar numero de celular
	celular: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im,  					// 10 a 13 numeros.
	//validar contraseña
	//validar contraseña esta arriba

}

const validarFormulario = (e) => {		//e.target hace referencia a el elemnto HTML clickeado y con ,name hae refencia a el nombre que se le puso en el HTML
	switch (e.target.name) {				//Seleccionamos que el valor que resulte del switch va a estrar a un caso, al coincidir su valor
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
			break;
		case "contraseña":
			validarCampo(expresiones.contraseña, e.target, 'contraseña');
			validarPassword();
			break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		case "apellidos":
			validarCampo(expresiones.apellidos, e.target, 'apellidos');
			break;
		case "celular":
			validarCampo(expresiones.celular, e.target, 'celular');
			break;
		case "confirmar_contraseña":
			validarPassword();
			break;
	}
};


const validarCampo = (expresion, input, campo) => {
	if (input.value == "") {																// 		---Al estar vacia muestra lo de vacio
		document.getElementById(`validacion_${campo}-vacio`).classList.remove("d-none");			// Remueve el la clase que oculta el campo vacio
		document.getElementById(`${campo}`).classList.add("border-danger"); 						// Agrega borde rojo al campo vacio
		document.getElementById(`validacion_${campo}-incorrecta`).classList.add("d-none");			// Oculta el elemento de campo invalido

	} else if (expresion.test(input.value)) {	// Al ser correcta muestra que es correcta
		document.getElementById(`${campo}`).classList.remove("border-danger");						// Remueve borde rojo de correo
		document.getElementById(`${campo}`).classList.add("border-success");						// Agrega borde verde
		document.getElementById(`validacion_${campo}-correcta`).classList.remove("d-none");			// Remueve el la clase que oculta el campo valido
		document.getElementById(`validacion_${campo}-incorrecta`).classList.add("d-none");			// Oculta el elemento de campo invalido
		document.getElementById(`validacion_${campo}-vacio`).classList.add("d-none");				// Oculta el elemento de campo vacio
		document.getElementById(`validacion_${campo}-vacio`).classList.remove("border-danger"); 	// Remueve borde rojo de campo vacio
	} else { //al no ser coorecta muestra el mensaje de error
		document.getElementById(`validacion_${campo}-incorrecta`).classList.remove("d-none");		// Remueve el la clase que oculta el campo invalido
		document.getElementById(`validacion_${campo}-correcta`).classList.add("d-none");			// Oculta el elemento de campo valido
		document.getElementById(`${campo}`).classList.remove("border-success");						// Remueve borde rojo de correo
		document.getElementById(`${campo}`).classList.add("border-danger");							// Remueve borde rojo de campo vacio
		document.getElementById(`validacion_${campo}-vacio`).classList.add("d-none");				// Oculta el elemento de campo valido		
	}
}

const validarPassword = () => {
	const inputPassword1 = document.getElementById('contraseña');
	const inputPassword2 = document.getElementById('confirmar_contraseña');

	if (inputPassword1.value && inputPassword2.value == "") {
		document.getElementById(`validacion_confirmar_contraseña-correcta`).add("d-none"); //ARREGLAR PARA CUANDO EN CAMPO ESTE VACIO
		console.log("funciona")
	} else if (inputPassword1.value !== inputPassword2.value) {
		document.getElementById(`validacion_confirmar_contraseña-incorrecta`).classList.remove("d-none");		// Remueve el la clase que oculta el campo invalido
		document.getElementById(`validacion_confirmar_contraseña-correcta`).classList.add("d-none");			// Oculta el elemento de campo valido
		document.getElementById(`confirmar_contraseña`).classList.remove("border-success");						// Remueve borde rojo de correo
		document.getElementById(`confirmar_contraseña`).classList.add("border-danger");							// Remueve borde rojo de campo vacio
		document.getElementById(`validacion_confirmar_contraseña-vacio`).classList.add("d-none");
	} else {
		document.getElementById(`validacion_confirmar_contraseña-incorrecta`).classList.add("d-none");		// Remueve el la clase que oculta el campo invalido
		document.getElementById(`validacion_confirmar_contraseña-correcta`).classList.remove("d-none");			// Oculta el elemento de campo valido
		document.getElementById(`confirmar_contraseña`).classList.add("border-success");						// Remueve borde rojo de correo
		document.getElementById(`confirmar_contraseña`).classList.remove("border-danger");							// Remueve borde rojo de campo vacio
		document.getElementById(`validacion_confirmar_contraseña-vacio`).classList.add("d-none");
	}
}

inputs.forEach((input) => {
	input.addEventListener('blur', validarFormulario);
	input.addEventListener('Keyup', validarFormulario);
});
