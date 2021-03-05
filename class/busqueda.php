<?php

if($_POST){
  require_once("class.php");

    if($_POST['action'] == 'tlfnodata'){
    
        $intId= ($_POST['valorphone']);
        
        $query = new Producto();
      
        $result = $query->busquedaProductoTelefono($intId);

        $row = count($result);
        
        if($row > 0){
            $arr = '';
            foreach($result as $res){
            $arr .= '<div class="card mb-4" >
            <div class="row no-gutters">
              <div class="col-md-2.5 m-auto p-3">
              <img src="productoimages/'. $res['img'].'"  class="card-img-top  m-auto "style="width:150px;"  alt="'.$res['marca'].'">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                <h5 class="card-title">'.$res['nombrep'].'</h5>
                <p class="card-text text-justify">'. $res['descrip'].'</p>
                <div class="d-flex justify-content-between ">
                <h3>Precio $'. $res['precio'].'</h3>
                <button type="button" class="btn btn-info"> COMPRAR</button> 
                 </div>
                </div>
              </div>
            </div>
          </div>';
          }
          echo json_encode($arr, JSON_UNESCAPED_UNICODE);
        }
          else{
            echo "nodata";
          }
          exit;
        }
      }
    




      
  
?>