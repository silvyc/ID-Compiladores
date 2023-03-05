<?php
#Actividad 3
function validar_contrasena($contrasena) {
    # Declaramos los caracteres minimos: longitud (8 caracteres), número de caracteres especiales (2), letras mayúsculas (2) / minúsculas (2), y dígitos (2).

    $longitud_minima = 8;
    $num_caracteres_especiales = 2;
    $num_letras_mayusculas = 2;
    $num_letras_minusculas = 2;
    $num_digitos = 2;

    # strlen() nos devuelve la longitud de una cadena de caracteres
    $longitud = strlen($contrasena);
    # preg_match_all() busca por la cadenas todas las apariciones de la expresion regular en la cadena, devolviendo la cantidad
    # [^\w] es la expresion regular para todos aquellos caracteres que no son letras ni numeros, en este caso caracteres especiales
    $caracteres_especiales = preg_match_all('/[^\w]/', $contrasena);
    # [A-Z] es la e.r para letras mayusculas y  [a-z] es para las letras minusculas
    $letras_mayusculas = preg_match_all('/[A-Z]/', $contrasena);
    $letras_minusculas = preg_match_all('/[a-z]/', $contrasena);
    # \d es la e.r para digitos
    $digitos = preg_match_all('/\d/', $contrasena);

    #Validamos que las condiciones de la contrasena se cumplan
    if ($longitud >= $longitud_minima &&
        $caracteres_especiales >= $num_caracteres_especiales &&
        $letras_mayusculas >= $num_letras_mayusculas &&
        $letras_minusculas >= $num_letras_minusculas &&
        $digitos >= $num_digitos) {
        return "La constraseña es válida.";
    } else {
        return "La constraseña no cumple con los parametros.";
    }
}

// Ejemplo de uso
// $contrasena = "ABac123!@#";
// if (validar_contrasena($contrasena)) {
//     echo "La contraseña es válida";
// } else {
//     echo "La contraseña no es válida";
// }
//
?>
