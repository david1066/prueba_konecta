<div class="container">

<h2>Producto mas vendido</h2>
<code>
SELECT productos.nombre, productos.referencia , MAX(ventas.cantidad) as cantidad
FROM inventory.productos 
JOIN inventory.ventas ON ventas.producto_id = productos.id 
GROUP BY productos.id
HAVING MAX(ventas.cantidad)
order by  cantidad desc limit 1
</code>

<h2>Producto mas stock</h2>
<code>
SELECT nombre , referencia, stock
FROM inventory.productos order by stock desc limit 1;
</code>


</div>