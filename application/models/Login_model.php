<?php
class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function verifyCredentials($usuario, $password)
    {

        $sql = "select * from usuarios where numeroempleado = ? and password = md5(?) and activo = 1;";
        $query = $this->db->query($sql, array($usuario, $password));

        if ($query->num_rows() > 0) {
            $this->__asignSessionParameters($query);
            return true;
        } else {
            return false;
        }

    }

    function __asignSessionParameters($query)
    {
        
        $row = $query->row();

        $newdata = array(
            'numeroempleado' => $row->numeroempleado,
            'nombrecompleto' => $row->nombrecompleto,
            'nivel' => $row->nivel,
            'logged_in' => true);

        $this->session->set_userdata($newdata);

    }


}
