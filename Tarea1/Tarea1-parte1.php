<?php
#Ejercicio 1: Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando si fue un buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.
$ventas = 6000;
if ($ventas >= 5000) {
    echo "Fue un buen día de ventas.";
} else {
    echo "Ventas bajas.";
}  

#Ejericio 2: Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.
$gastos= [150, 200, 250, 300, 350, 400, 450, 500];
$total_gastos = 0;
for ($i = 0; $i < count($gastos); $i++) {
    $total_gastos += $gastos[$i];
}
echo "Total de gastos: $total_gastos";
echo "Promedio semanal: " . ($total_gastos / count($gastos));

#Ejercicio 3: Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado, calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.
$gastos_diarios = [150, 200, 250, 300, 350, 400, 450];
$total_gastos = 0;
foreach ($gastos_diarios as $gasto) {
    $total_gastos += $gasto;
} 
$promedio_semanal = $total_gastos / count($gastos_diarios);
echo "Total de gastos: $total_gastos<br>";
echo "Promedio semanal: $promedio_semanal<br>";

#Ejercicio 4: Haz un programa que guarde una lista de al menos cinco clientes en un arreglo indexado y muestre el nombre de cada cliente utilizando un ciclo.
$clientes = ["Gabriel, Carlos, Samuel, Mario, Enrique,"];
foreach ($clientes as $clientes) {
    echo "Nombre del cliente: $clientes<br>";
}

#Ejercicio 5: Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo, muestre cada producto con la cantidad vendida y calcule el total de productos vendidos. 
$ventas_productos = [
    "Producto A" => 150,
    "Producto B" => 200,
    "Producto C" => 250,
    "Producto D" => 300,
    "Producto E" => 350
]; 
$total_productos_vendidos = 0;
foreach ($ventas_productos as $producto => $cantidad) {
    echo "Producto: $producto, Cantidad vendida: $cantidad<br>";
    $total_productos_vendidos += $cantidad;
}

#Ejercicio 6: Haz un programa que guarde los precios de varios productos en un arreglo y calcule el precio total sumando todos los valores.
$precio_productos = [100, 200, 300, 400, 500];
$precio_total = 0;
foreach ($precio_productos as $precio) {
    $precio_total += $precio;
}
echo "Precio total de los productos: $precio_total<br>";

#Ejercicio 7: Haz un programa que almacene los nombres de varios empleados en un arreglo y muestre cuántos empleados hay registrados.
$nombres_empleados = ["Pedro", "Santiago", "Ian", "Juan", "Kevin"];
$cantidad_empleados = count($nombres_empleados);
echo "Cantidad de empleados registrados: $cantidad_empleados<br>";

#Ejercicio 8: Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.
$numeros = [20, 35, 66, 90, 77, 45, 12, 88];
foreach ($numeros as $numeros) {
    if ($numeros > 50) {
        echo "Número mayor a 50: $numeros<br>";
    }
}

#Ejercicio 9: Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000.
$ventas_semanales = [2500, 3200, 4500, 2800, 5000, 1500, 4000];
$dias_mayores_3000 = 0;
foreach ($ventas_semanales as $venta)
    if ($venta > 3000) {
        $dias_mayores_3000++;
    }
     echo "Días con ventas mayores a $3,000: $dias_mayores_3000<br>";

#Ejercicio 10: Haz un programa que almacene el total de ventas de varios vendedores y determine cuál obtuvo la mayor venta.
$ventas_vendedores = [
    "Vendedor 1" => 5000,
    "Vendedor 2" => 7000,
    "Vendedor 3" => 6000,
];
$dias_mayores_3000 = 0; 
$mayor_venta = 0; 
$vendedor_exitoso = "";
foreach ($ventas_vendedores as $vendedor => $venta) {
    if ($venta > $mayor_venta) {
        $mayor_venta = $venta;
        $vendedor_exitoso = $vendedor;
    }
} 

echo "El vendedor con la mayor venta es $vendedor_exitoso con una venta de $mayor_venta.<br>";
?>