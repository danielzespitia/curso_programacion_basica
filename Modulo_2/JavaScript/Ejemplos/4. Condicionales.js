// Sistema de calificación de un examen
const puntaje = 78;
let calificacionLetra;
let mensaje;

if (puntaje >= 90) {
    calificacionLetra = "A";
    mensaje = "¡Excelente trabajo!";
    console.log("¡Felicidades por tu excelente desempeño!");
}

else if (puntaje >= 80) {
    calificacionLetra = "B";
    mensaje = "¡Buen trabajo, sigue así!";
    console.log("¡Buen trabajo, sigue así!");
}

else if (puntaje >= 70) {
    calificacionLetra = "C";
    mensaje = "Aprobado, pero puedes mejorar.";
    console.log("Aprobado, pero puedes mejorar.");
} 
else if (puntaje >= 60) {
    calificacionLetra = "D";
    mensaje = "Necesitas estudiar más.";
    console.log("Necesitas estudiar más."); 
}

else {
    calificacionLetra = "F";
    mensaje = "Reprobado. Por favor, consulta al profesor.";
}

console.log(`Tu puntaje es ${puntaje}.`);
console.log(`Calificación: ${calificacionLetra}.`);
console.log(`Comentario: ${mensaje}`);
