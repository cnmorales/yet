<?php
class cliente_model extends CI_Model{

  private $cliente_id;
  private $nombre;
  private $direccion;
  private $web;
  private $mail;
  private $telefono;
  private $enabled;

  function __construct(){
    parent::__construct();
  }

  public function crear($name,$address,$web,$email,$phone){
    //Inserta datos en la tabla usuario
         $data = array(
            'nombre'=>$name,
            'direccion'=>$address,
            'web'=>$web,
            'mail'=>$email,
            'telefono'=>$phone,
            'enabled'=>'1'
         );
        return $this->db->insert('cliente', $data);
  }

}

?>
