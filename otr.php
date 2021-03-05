

<table style="width: 750px;margin-top: 30px;">
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
         include_once("class/class.php");

 $new = new Conexion();
 $conex = new Producto();
 
 $pre  = $conex->mostraridventa();
 $con = $new->conect();
                    $queryDetalle="SELECT p.nombrep,
                    dv.cantidad,
                    dv.precio,
                    dv.subTotal
                    FROM
                    detalleventa as dv
                    INNER JOIN productos AS p ON p.id = dv.idProd
                    WHERE
                    dv.idVenta = '".$pre['idVenta']."'";
             
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
            <td><?php echo "$".money_format("%i",$row['precio']); ?></td>
            <td><?php echo "$".money_format("%i",$row['subTotal']); ?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="3" class="text-right" style="text-align: right;">Total:</td>
            <td><?php echo "$".money_format("%i",$total); ?></td>
        </tr>

    </tbody>
</table>





<?php $html= ob_get_clean(); ?>
<?php
include_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$pdf=new Dompdf();
$pdf->loadHtml($html);
$pdf->setPaper("A4","landingscape");
$pdf->render();
$pdf->stream();
?>