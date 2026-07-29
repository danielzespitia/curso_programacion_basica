<?php

// 1️⃣ Contador de Pares e Impares
echo "1️⃣ CONTADOR DE PARES E IMPARES:\n";
$pares = 0;
$impares = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 === 0) {
        $pares++;
    } else {
        $impares++;
    }
}
echo "Del 1 al 50 hay {$pares} números pares y {$impares} números impares.\n\n";


// 2️⃣ Tabla de Multiplicar del 8
echo "2️⃣ TABLA DE MULTIPLICAR DEL 8:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = 8 * $i;
    echo "8 x {$i} = {$resultado}\n";
}
echo "\n";


// 3️⃣ Juego: Adivina el Número
echo "3️⃣ JUEGO: ADIVINA EL NÚMERO:\n";
$numero_secreto = rand(1, 10); // Genera un número secreto aleatorio (ej. del 1 al 10)
$intento = 1;
$adivinado = false;

// Simulación de los intentos (en un caso real, leerías de consola en cada iteración)
while ($intento <= 10 && !$adivinado) {
    echo "Intento {$intento}: Probando número...\n";
    if ($intento === $numero_secreto) {
        echo "¡Correcto! El número secreto era {$numero_secreto}. Encontrado en el intento {$intento}.\n";
        $adivinado = true;
    }
    $intento++;
}
echo "\n";


// 4️⃣ Suma de Impares del 1 al 100
echo "4️⃣ SUMA DE IMPARES (1 AL 100):\n";
$suma_impares = 0;
for ($i = 1; $i <= 100; $i += 2) {
    $suma_impares += $i;
}
echo "La suma de los números impares del 1 al 100 es: {$suma_impares}\n\n";


// 5️⃣ Verificación para Licencia de Conducir
echo "5️⃣ LICENCIA DE CONDUCIR:\n";
$edad = 25; // Puedes cambiar la variable para simular diferentes edades
if ($edad >= 18 && $edad <= 65) {
    echo "Edad: {$edad} años. Cumples los requisitos para obtener la licencia.\n";
} else {
    echo "Edad: {$edad} años. NO cumples los requisitos (debes tener entre 18 y 65 años).\n";
}
echo "\n";


// 6️⃣ Dibujo de un Cuadrado con #
echo "6️⃣ DIBUJO DE UN CUADRADO:\n";
for ($fila = 0; $fila < 5; $fila++) {
    for ($columna = 0; $columna < 5; $columna++) {
        echo "# ";
    }
    echo "\n";
}
echo "\n";


// 7️⃣ Clasificación de un Número
echo "7️⃣ CLASIFICACIÓN DE UN NÚMERO:\n";
$numero = -15; // Cambiar para probar positivo/negativo/cero
if ($numero > 0) {
    echo "El número {$numero} es Positivo.\n";
} elseif ($numero < 0) {
    echo "El número {$numero} es Negativo.\n";
} else {
    echo "El número es Cero.\n";
}
echo "\n";


// 8️⃣ Impresión Condicional: Mar y Tierra
echo "8️⃣ MAR Y TIERRA:\n";
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "MarTierra ";
    } elseif ($i % 3 === 0) {
        echo "Mar ";
    } elseif ($i % 5 === 0) {
        echo "Tierra ";
    } else {
        echo "{$i} ";
    }
}
echo "\n\n";


// 9️⃣ Clasificación de Temperatura
echo "9️⃣ CLASIFICACIÓN DE TEMPERATURA:\n";
$temperatura = 18; // Cambiar para probar
if ($temperatura < 10) {
    echo "Temperatura ({$temperatura}°C): Fría ❄️\n";
} elseif ($temperatura >= 10 && $temperatura <= 25) {
    echo "Temperatura ({$temperatura}°C): Templada 🌤️\n";
} else {
    echo "Temperatura ({$temperatura}°C): Calurosa 🔥\n";
}
echo "\n";


// 🔟 Cuenta Regresiva de Año Nuevo
echo "🔟 CUENTA REGRESIVA DE AÑO NUEVO:\n";
for ($i = 10; $i >= 1; $i--) {
    echo "{$i}...\n";
    // Opcional: sleep(1); // Descomentar para hacer una pausa de 1 seg por iteración
}
echo "¡Feliz Año Nuevo! 🎉\n";
