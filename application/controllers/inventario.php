<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inventario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!Current_User::user()) {
            redirect('welcome');
        }
        
        $this->load->model('Inventario_model');
        $this->load->helper('utilities');

    }

    public function por_secuencia()
    {
        $data['subtitulo'] = "";
        $data['query'] = $this->Inventario_model->por_secuencia();
        $data['js'] = "inventario/por_secuencia_js";
        $this->load->view('main', $data);
    }

    public function por_codigo_de_barras()
    {
        $data['subtitulo'] = "";
        $data['query'] = $this->Inventario_model->por_codigo_de_barras();
        $data['js'] = "inventario/por_codigo_de_barras_js";
        $this->load->view('main', $data);
    }

    public function secuencias_en_cero()
    {
        $data['subtitulo'] = "";
        $data['query'] = $this->Inventario_model->secuencias_en_cero();
        $data['js'] = "inventario/secuencias_en_cero_js";
        $this->load->view('main', $data);
    }

    public function negativos()
    {
        $data['subtitulo'] = "";
        $data['query'] = $this->Inventario_model->negativos();
        $data['js'] = "inventario/negativos_js";
        $this->load->view('main', $data);
    }
    
    function negativos_con_codigo_de_barras()
    {
        $data['subtitulo'] = "";
        $data['query'] = $this->Inventario_model->negativos_con_codigo_de_barras();
        $data['js'] = "inventario/negativos_con_codigo_de_barras_js";
        $this->load->view('main', $data);
    }

    public function muebles()
    {
        $data['subtitulo'] = "";
        $data['query'] = $this->Inventario_model->muebles();
        $data['js'] = "inventario/muebles_js";
        $this->load->view('main', $data);
    }

    public function muebles__productos_por_mueble($mueble)
    {
        $data['subtitulo'] = "";
        $data['query'] = $this->Inventario_model->muebles__productos_por_mueble($mueble);
        $data['js'] = "inventario/muebles__productos_por_mueble_js";
        $this->load->view('main', $data);
    }

}