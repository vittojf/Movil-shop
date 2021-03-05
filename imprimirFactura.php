<?php

include_once("class/class.php");

$new = new Conexion();
$conex = new Producto();
$idVenta = $_REQUEST['idVenta']??'';
$con = $new->conect();
                   $queryDetalle="SELECT dv.idVenta
                   FROM
                   detalleventa as dv
                   WHERE dv.idVenta = '$idVenta' ";
            
                   $query= $con->prepare($queryDetalle);
                   $query->execute();
                   $resultado = $query->fetch(PDO::FETCH_ASSOC);


?>
<?php ob_start()?>


<link rel="stylesheet" href="style/style.css" />

<div style="">


<div class="font"  style="color:black;" >
             <div>
                <h1>Móvil Shop</h1>
            </div>

</div>

<div >

            <h3>Datos de la Factura</h3>

           <strong>ID de Factura: </strong><a><?php echo $resultado['idVenta']?></a>

</div>


</div>

<!--Tabla productos - Detalle VENTAS-->
<table style="width:750px; margin-top:30px;">
    <thead>

        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>SubTotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
                    $queryDetalle="SELECT p.nombrep,
                    dv.cantidad,
                    dv.precio,
                    dv.subTotal
                    FROM
                    detalleventa as dv
                    INNER JOIN productos AS p ON p.id = dv.idProd
                    WHERE
                    dv.idVenta = '$idVenta'";
             
                    $query= $con->prepare($queryDetalle);
                    $query->execute();
                    $total=0;
                    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($resultado as $row){
                        
                        $total=$total+$row['subTotal'];
                    
         
              
                ?>

        <tr>
            <td><?php echo $row['nombrep'] ?></td>
            <td><?php echo $row['cantidad'] ?></td>
            <td><?php echo $row['precio'] ?></td>
            <td><?php echo $row['subTotal'] ?></td>
        </tr>
        <?php
                    }
                ?>

<tr>
                    <td colspan="3" >Total:</td>
                    <td><?php echo $total; ?></td>
                </tr>

            </tbody>
        </table>
<?php $html= ob_get_clean();?>
<?php
include_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$pdf= new dompdf();
$pdf->loadHtml($html);
$pdf->setPaper("A4","landscape");  
$pdf->render();
$pdf->stream();      
        
?>