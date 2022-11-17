<?php
require 'db.php';

$db = new Database();
$conexion = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1 ;");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de Jean Vernier</title>

    <link rel="stylesheet" href="catalogo.css">
    <script src="js/catalogo.js"></script>
</head>
<body>
 
    <div id="menu">
        <h1>JEAN Vernier</h1>
        <input type="radio" name="filtro" id="todos" checked="yes">
        <label for="todos">Todos</label>

        <input type="radio" name="filtro" id="remeras">
        <label for="remeras">Remeras</label>

        <input type="radio" name="filtro" id="pantalones">
        <label for="pantalones">Pantalones</label>

        <input type="radio" name="filtro" id="camperas">
        <label for="camperas">Camperas</label>

        <input type="radio" name="filtro" id="bermudas">
        <label for="bermudas">Bermudas</label>
        
        <div id="productos">
            <?php foreach($resultado as $row) { ?>
            <div  class="remera">
                <section>
                    <img src="img-jean/jeanCamisetaBeigl.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div  class="remera">
                <section>
                    <img src="img-jean/jeanCamisetaBlanca.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div  class="remera">
                <section>
                    <img src="img-jean/jeanCamisetaNegraEstampada.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div  class="remera">
                <section>
                    <img src="img-jean/jeanCamisetaTresColores.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div class="pantalon">
                <section>
                    <img src="img-jean/jeanPantalonAzul.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>
            
            <div class="pantalon">
                <section>
                    <img src="img-jean/jeanPantalonBeig.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div class="pantalon">
                <section>
                    <img src="img-jean/jeanPantalonNegro.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div class="pantalon">
                <section>
                    <img src="img-jean/jeanPantalonVerde.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>
            
            <div  class="campera">
                <section>
                    <img src="img-jean/jeanCamperaNeoprenoAzul.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>
            
            <div  class="campera">
                <section>
                    <img src="img-jean/jeanCamperaNegra.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div  class="campera">
                <section>
                    <img src="img-jean/jeanCamperaAzul.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div  class="campera">
                <section>
                    <img src="img-jean/jeanCamperaRoja.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div class="bermuda">
                <section>
                    <img src="img-jean/JeanBermudaBeige.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>
            
            <div class="bermuda">
                <section>
                    <img src="img-jean/JeanBermudaGris.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

            <div class="bermuda">
                <section>
                    <img src="img-jean/JeanBermudaNegra.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>
            
            <div class="bermuda">
                <section>
                    <img src="img-jean/jeanBermudaVerde.jpg">
                </section>
                <div class="cuerpo">
                    <h5>Camiseta Color Beige</h5>
                    <p>$500,00</p>
                    <div class="botones">
                        <div class="detalles">
                            <a href="#" class="mas-info">Detalles</a>
                        </div>
                        <a href="#" class="agregar">Agregar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>