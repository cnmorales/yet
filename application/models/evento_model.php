<?php
class evento_model extends CI_Model{

  private $evento_id;
  private $fecha_desde;
  private $fecha_hasta;
  private $hora_desde;
  private $hora_hasta;
  private $descripcion;
  private $calendario_id;

  function __construct(){
    parent::__construct();
  }

  public function __GET($k){ return $this->$k; }
  public function __SET($k, $v){ return $this->$k = $v; }


}

?>
