<?php
class usuario_model extends CI_Model{

  private $usuario_id;
  private $username;
  private $password;
  private $email;
  private $enabled;

  function __construct(){
    parent::__construct();
  }

  // public function __GET($k){
  //   return $this->$k;
  // }
  //
  // public function __SET($k, $v){
  //    return $this->$k = $v;
  //  }

  public function agregar_usuario($nombre,$apellido,$email,$clave){
    //Inserta datos en la tabla usuario
         $data = array(
            'username'=>$nombre,
            'password'=>$clave,
            'email'=>$email,
            'enabled'=>'1'
         );
         $this->db->insert('usuario', $data);
  }
  // function comprar($producto,$total){
  //      //Inserta datos en la tabla compras
  //      $data = array(
  //         'importe_total' => $total
  //      );
  //      $this->db->insert('compras', $data);
  //      //Obtiene el ultimo id agregado en compras
  //      $compras_id = $this->db->insert_id();
  //      //Agrega compras productos
  //      if(!empty($producto)){
  //          foreach($producto as $k=>$v){
  //              $data = array(
  //                 'compras_id' => $compras_id,
  //                 'productos_id'=>$v["id"],
  //                 'precio'=>$v["precio"]
  //              );
  //              $this->db->insert('compras_productos', $data);
  //          }
  //      }
  //      //Eliminar session
  //      $this->session->unset_userdata('carrito');
  // }
}

?>
