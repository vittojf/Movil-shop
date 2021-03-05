<?php

include_once("config.php");

class Conexion extends PDO {

    public $srv = "localhost";
    public $usr = "root";
    public $pas = "";
    public $bdn = "movilshop";
  
    
    private $conex;
    
    public function __construct (){

    }
    public function conect(){
        try {
            $dsn = new PDO("mysql:host=localhost; dbname=movilshop", "root", "");
            $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dsn->exec("SET CHARACTER SET utf8");
          
        } catch (PDOException $e) {
            echo "Error:".$e->getMessage();
            exit();
        }
        $this->conex = $dsn;
        return $this->conex;
    }

    public function cerrar(){
        $this->conex();
    }
}

class Producto extends Conexion{
    public $dat;
     private $id;
     private $nombrep;
     private $descrip;
     private $marca;
     private $precio;
     private $img;
     private $data;
     private $cnn;
// variables clientes
     private $nombre;
     private $email;
     private $direccion;
     private $correo;
     private $telefono;
//variables detalle venta
    private $subTotal;
    private $idProd;
    private $cantidad;
    private $idVenta;
    private $tipo;  
     public function __construct(){
         $this->cnn = new Conexion();
         $this->cnn = $this->cnn->conect();
     }


     //Getter t Setters
     public function setData($data){
         $this->data  = $data;
     }
     public function getData(){
         return $this->data;
     }
     public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
     public function setId($id){
         $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
     public function setNombrep($nombrep){
         $this->nombrep = $nombrep;

     }
     public function getNombrep(){
         return $this->nombrep;
     }

     public function setDescrip($descrip){
         $this->descrip = $descrip;
    }
    public function getDescrip(){
        return $this->descrip;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function setImg($img){
        $this->img = $img;
    }
    public function getImg(){
        return $this->img;
    }

    // SETTERS Y GETTERS DEL CLIENTE
    public function setNombre($nombre){
        $this->nombre  = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }


    public function setEmail($email){
        $this->email  = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setDireccion($direccion){
        $this->direccion  = $direccion;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    public function setTelefono($telefono){
        $this->telefono  = $telefono;
    }
    public function getTelefono(){
        return $this->telefono;
    }
//detalle producto
public function setIdprod($idProd){
    $this->idProd  = $idProd;
}
public function getIdProd(){
    return $this->idProd;
} 

public function setIdVenta($idVenta){
    $this->idVenta  = $idVenta;
}
public function getIdVenta(){
    return $this->idVenta;
}

public function setCantidad($cantidad){
    $this->cantidad  = $cantidad;
}
public function getCantidad(){
    return $this->cantidad;
}

public function setSubTotal($subTotal){
    $this->subTotal  = $subTotal;
}
public function getSubTotal(){
    return $this->subTotal;
}


    //CRUD

    public function consultarTodosProductos(){
        try{
        $stmt = $this->cnn->prepare("SELECT * FROM productos");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt-> execute();

//  echo "<br>Se devolvieron: ".$stmt->rowCount()." Registros<br>";
        return $stmt->fetchAll();
        }catch(PDOException $e){
            echo "error: ".$e->getMessage();
            die();
        }
    }

    public function insertarProducto(){
        try{	

            $stmt = $this->cnn->prepare("INSERT INTO productos (id, nombrep, marca, descrip, precio, img, tipo) 
                                         VALUES (:id, :nombrep, :marca, :descrip, :precio, :img, :tipo)");
            
            // Asignamos valores a los parametros
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':nombrep', $this->nombrep);
            $stmt->bindParam(':marca', $this->marca);
            $stmt->bindParam(':descrip', $this->descrip);
            $stmt->bindParam(':precio', $this->precio);
            $stmt->bindParam(':img', $this->img, PDO::PARAM_LOB);
            $stmt->bindParam(':tipo', $this->tipo);

            // Ejecutamos
            $exito = $stmt->execute();

            // Numero de Filas Afectadas
            echo "<br>Se Afecto: ".$stmt->rowCount()." Registro<br>";

            // Devuelve los resultados obtenidos
            return $exito; // si es verdadero se insertó correctamente el registro	

        }catch(PDOException $error) {
            // Mostramos un mensaje genérico de error.
            echo "Error: ejecutando consulta SQL.".$error->getMessage();
            exit();
        } 
    }

    public function consultarMarcaProducto(){
        try{
        $stmt=$this->cnn->prepare("SELECT * FROM productos WHERE marca = :marca" );
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(':marca',$this->marca);
        $stmt->execute();

        return $stmt->fetchAll();
        }catch(PDOException $e){
            echo "Ocurrio un Error en el SQL. Mensaje: ".$e->getMessage();
            die();
        }
    }

    public function busquedaProductoTelefono($dat){
        try{
            $stmt= $this->cnn->prepare("SELECT * FROM productos WHERE nombrep LIKE :valor OR marca LIKE :valor OR precio LIKE :valor AND tipo = 'telefono'");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(array(':valor' => '%'.$dat.'%'));
            $rs = $stmt->fetchAll();

            return $rs;
        }catch(PDOException $e){
            echo "Ocurrio un Error en el SQL. Mensaje: ".$e->getMessage();
            die();
        }
    }

    public function productosAleatoriosTelefonos(){
        try{
            $stmt= $this->cnn->prepare("SELECT * FROM productos  WHERE  tipo = 'telefono' ORDER BY RAND() LIMIT 3  ");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            
            return $stmt->fetchAll();


        }catch(PDOException $e){
            echo "Ocurrio un error en EL SQL. Mensaje".$e->getMessage();
            die();
        }
    }

    
    public function productosAleatoriosAccesorio(){
        try{
            $stmt= $this->cnn->prepare("SELECT * FROM productos   WHERE  tipo = 'accesorio' ORDER BY RAND() LIMIT 3");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            
            return $stmt->fetchAll();


        }catch(PDOException $e){
            echo "Ocurrio un error en EL SQL. Mensaje".$e->getMessage();
            die();
        }
    }

    public function productoTelefonos(){
        try{
            $stmt = $this->cnn->prepare("SELECT * FROM productos WHERE tipo = 'telefono'");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt-> execute();
    
    //  echo "<br>Se devolvieron: ".$stmt->rowCount()." Registros<br>";
            return $stmt->fetchAll();
            }catch(PDOException $e){
                echo "error: ".$e->getMessage();
                die();
            }
    }
    
    public function productoAccesorio(){
        try{
            $stmt = $this->cnn->prepare("SELECT * FROM productos WHERE tipo = 'accesorio'");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt-> execute();
    
    //  echo "<br>Se devolvieron: ".$stmt->rowCount()." Registros<br>";
            return $stmt->fetchAll();
            }catch(PDOException $e){
                echo "error: ".$e->getMessage();
                die();
            }
    }
    public function detalleProducto(){ 
         try{
             $stmt = $this->cnn->prepare("SELECT id, nombrep, descrip, marca, precio, img FROM productos WHERE id = :id");
             $stmt->setFetchMode(PDO::FETCH_ASSOC);
             $stmt->bindParam(':id',$this->id);
             $stmt->execute();

             return $stmt->fetch();
         }catch(PDOException $e){
             echo "Ocurrio un error en el SQL. Mensaje".$e->getMessage();
             die();
         }

    }

    public function datosCliente(){
        try{
            $stmt=$this->cnn->prepare("INSERT INTO clientes (id, email, nombre, direccion, telefono) VALUES( :id ,:email,:nombre,:direccion,:telefono )");    
            $stmt->bindParam(':id',$this->id);
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':nombre',$this->nombre);
            $stmt->bindParam(':direccion',$this->direccion);
            $stmt->bindParam(':telefono',$this->telefono);
            $exito = $stmt->execute();

            return $exito;
        }catch(PDException $e){
 
            echo "Ocurrio un error en el query. Mensaje:".$e->getMessage();
            exit();

        }
    }
    public function insertarDetalleVenta(){
        try{
            $stmt=$this->cnn->prepare("INSERT INTO detalleventa(idProd, idVenta, cantidad, precio, subTotal ) VALUES( :idProd, :idVenta, :cantidad, :precio,:subTotal )");    
            $stmt->bindParam(':idProd',$this->idProd);
            $stmt->bindParam(':idVenta',$this->idVenta);
            $stmt->bindParam(':cantidad',$this->cantida);
            $stmt->bindParam(':precio',$this->precio);
            $stmt->bindParam(':subTotal',$this->subTotal);
            $exito = $stmt->execute();

            return $exito;
        }catch(PDException $e){
 
            echo "Ocurrio un error en el query. Mensaje:".$e->getMessage();
            exit();

        }
    }

    public function mostrarCliente(){
        try {
            $stmt = $this->cnn->prepare("SELECT nombre, email, direccion, telefono FROM clientes WHERE id= :id");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam(':id',$this->id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Ocurrio un Error en el query. MENSAJE:".$e->getMessage();
            exit();
        }
    }
    public function mostraridcliente(){
        try {
            $stmt = $this->cnn->prepare("SELECT id FROM clientes");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt-> execute();
    return $stmt->fetch();
        } catch (PDOException $th) {
            echo "error".$th->getMessage();
            exit();
        }
    }

    public function mostraridventa(){
        try {
            $stmt = $this->cnn->prepare("SELECT idVenta FROM detalleventa");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt-> execute();
    return $stmt->fetch();
        } catch (PDOException $th) {
            echo "error".$th->getMessage();
            exit();
        }
    }

    public function mostrarVenta(){
        try{

            $stmt=$this->cnn->prepare("SELECT * from detalleventa WHERE idVenta= :idVenta");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->bindParam(':idVenta',$this->idVenta);
            $stmt->execute();
          return $stmt->fetch();  
        }catch(PDOException $e){
            echo "Ocurrio un Error en el Query. Mensaje".$e->getMessage();
            exit();
        }
    }
}
?>