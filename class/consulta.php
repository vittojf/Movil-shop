<?php
if($_POST){
    require_once("class.php");
    if($_POST['action'] == 'buscar'){
        if(!empty($_POST['id'])){
           $marca =$_POST['id'];
            $id = new Producto();
            $id->setMarca($marca);
            $consulta = $id->consultarMarcaProducto();
            $result =count($consulta);
            $htmlresultado = '';
            if($result > 0){
                foreach ($consulta as $registro) {
                    $htmlresultado .='<div class="card mb-4" >
                <div class="row no-gutters">
                  <div class="col-md-2.5 m-auto p-3">
                  <img src="productoimages/'. $registro['img'].'"  class="card-img-top  m-auto "style="width:150px;"  alt="'.$registro['marca'].'">
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                    <h5 class="card-title">'.$registro['nombrep'].'</h5>
                    <p class="card-text text-justify">'. $registro['descrip'].'</p>
                    <div class="d-flex justify-content-between ">
                    <h3>Precio $'. $registro['precio'].'</h3>
                    <button type="button" class="btn btn-info"> COMPRAR</button> 
                     </div>
                    </div>
                  </div>
                </div>
              </div>';
                }
                echo json_encode($htmlresultado, JSON_UNESCAPED_UNICODE);
            }else{
                echo "no encontrado";
            }
            exit;
        }

    
    
      } 
    }




        
    

?>