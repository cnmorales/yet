<?php
class notificacion_model extends CI_Model{

  private $notificacion_id;
  private $fecha;
  private $hora;
  private $descripcion;
  private $evento_id;

  function __construct(){
    parent::__construct();
  }

  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v){ return $this->$k = $v; }


}

?>
