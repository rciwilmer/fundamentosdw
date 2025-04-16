
<?php include('header.php'); ?>
    <h2>Lista de Productos</h2>

    <!-- Tabla de productos -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad en Stock</th>
            </tr>
        </thead>
        <tbody>
            <!-- Producto 1 -->
            <tr>
                <td>1</td>
                <td>Smartphone</td>
                <td>Teléfono inteligente con cámara de 12MP</td>
                <td>$299.99</td>
                <td>50</td>
            </tr>
            <!-- Producto 2 -->
            <tr>
                <td>2</td>
                <td>Laptop</td>
                <td>Computadora portátil con procesador i7 y 16GB RAM</td>
                <td>$899.99</td>
                <td>30</td>
            </tr>
            <!-- Producto 3 -->
            <tr>
                <td>3</td>
                <td>Tablet</td>
                <td>Tableta con pantalla de 10 pulgadas y 64GB de almacenamiento</td>
                <td>$199.99</td>
                <td>100</td>
            </tr>
            <!-- Producto 4 -->
            <tr>
                <td>4</td>
                <td>Auriculares</td>
                <td>Auriculares inalámbricos con cancelación de ruido</td>
                <td>$79.99</td>
                <td>150</td>
            </tr>
        </tbody>
    </table>

<?php include('footer.php'); ?>