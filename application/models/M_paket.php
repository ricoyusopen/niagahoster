<?php
/**
 *
 */
class M_paket extends CI_model{

  public function view_paket($table, $order){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by($order,"ASC");
    return $this->db->get();
  }

  public function show_menu($table, $order){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where('id_parent', "0");
    $this->db->where('is_active', "1");  
    $this->db->order_by($order,"ASC");
    return $this->db->get();
  }

}

 ?>
