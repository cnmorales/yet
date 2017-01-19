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


    public function clientesAsList(){
      $lista = array();
      $query = $this->db->get("cliente");
      foreach ($query->result_array() as $row){
          $cliente = array(
                      "key" => $row['cliente_id'],
                      "nombre" => $row['nombre']);
          array_push($lista, $cliente);
        }
      return $lista;
    }


}

?>
