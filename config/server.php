<?php
	//? Constantes para la conexión a la base de datos
	const DB_SERVER = "localhost";
	const DB_NAME = "nombreBaseDatos";
	const DB_USER = "root"; 	//!Cambair por la que el hosting te proporciona
	const DB_PASSWORD = "";	 //!Cambair por la que el hosting te proporciona

	//* Configuración de cifrado: método, clave secreta y vector de inicialización
	const METHOD = "AES-256-CBC";     // Método de cifrado
	const SECRET_KEY = '$PRESTAMOS@2025'; 	// Clave secreta
	const SECRET_IV = "037970";      // Vector de inicialización