<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalogos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!Current_User::user()) {
            redirect('welcome');
        }
        
        $this->load->model('Catalogos_model');
        $this->load->helper('utilities');

    }

    public function productos_por_secuencia()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->productos_por_secuencia();
        $data['js'] = "catalogos/productos_por_secuencia_js";
        $this->load->view('main', $data);
    }

    public function productos_por_codigo_de_barras()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->productos_por_codigo_de_barras();
        $data['js'] = "catalogos/productos_por_codigo_de_barras_js";
        $this->load->view('main', $data);
    }

    public function tipos_de_clientes()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->tipos_de_clientes();
        $data['js'] = "catalogos/tipos_de_clientes_js";
        $this->load->view('main', $data);
    }

    public function clientes()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->clientes();
        $data['js'] = "catalogos/clientes_js";
        $this->load->view('main', $data);
    }

    public function clientes_de_credito_autorizados()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->clientes_de_credito_autorizados();
        $data['js'] = "catalogos/clientes_de_credito_autorizados_js";
        $this->load->view('main', $data);
    }

    public function productos_con_comision()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->productos_con_comision();
        $data['js'] = "catalogos/productos_con_comision_js";
        $this->load->view('main', $data);
    }

    public function descuentos_por_mayoreo()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->descuentos_por_mayoreo();
        $data['js'] = "catalogos/descuentos_por_mayoreo_js";
        $this->load->view('main', $data);
    }

    public function formas_de_pago()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->formas_de_pago();
        $data['js'] = "catalogos/formas_de_pago_js";
        $this->load->view('main', $data);
    }

    public function lineas()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->lineas();
        $data['js'] = "catalogos/lineas_js";
        $this->load->view('main', $data);
    }

    public function sublineas()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->sublineas();
        $data['js'] = "catalogos/sublineas_js";
        $this->load->view('main', $data);
    }

    public function proveedores()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->proveedores();
        $data['js'] = "catalogos/proveedores_js";
        $this->load->view('main', $data);
    }

    public function sucursales()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->sucursales();
        $data['js'] = "catalogos/sucursales_js";
        $this->load->view('main', $data);
    }

    public function usuarios()
    {
        $data['subtitulo'] = "Catalogados";
        $data['query'] = $this->Catalogos_model->usuarios();
        $data['js'] = "catalogos/usuarios_js";
        $this->load->view('main', $data);
    }
}
