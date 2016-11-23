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

  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v){ return $this->$k = $v; }


}

?>
