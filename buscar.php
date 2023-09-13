<?php include("includes/header.php") ?>
    <div class="container p-4">

    <div class="row">
         <div>
            <form action="buscar.php" method="post">
                <input type="text" name="buscar" id="">
                <input type="submit" value="Buscar">
                <a href="..vistas/productos.php">Añadir Nuevo</a>
            </form>
        </div>

        <div class="col-md-8">
            <table class="table table-border">
                <tr>
                    <td>Id</td>
                    <td>Codigo</td>
                    <td>Producto</td>
                    <td>Marca</td>
                    <td>Precio</td>
                    <td>Stock</td>
                </tr>

        </div>
        


    </div>
        

    </div>
            <?php
                $buscar = $_POST['buscar'];
                $cnx = mysqli_connect("localhost", "root", "", "dbprueba");
                $sql = "SELECT id, codigo, producto, marca, precio, stock FROM talumno WHERE producto like '$buscar' '%' order by producto desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                        <td><?php echo $mostrar[5] ?></td>
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar[0] ?> &
                            codigo=<?php echo $mostrar[1] ?> &
                            producto=<?php echo $mostrar[2] ?> &
                            marca=<?php echo $mostrar[3] ?> &
                            precio=<?php echo $mostrar[4] ?> &
                            stock=<?php echo $mostrar[5] ?>
                            ">Editar</a>
                            <a href="speliminar.php? id=<?php echo $mostrar[0] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>

<?php include("includes/footer.php") ?>