<?php /**
 *
 */
class m_login extends CI_Model
{
  function cek_login($table, $where){
    $this->db->select('nip, username_guru, password_guru');
    return $this->db->get_where($table, $where);
  }
}
 ?>
