<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ventas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!Current_User::user()) {
            redirect('welcome');
        }
        
        $this->load->model('Ventas_model');
        $this->load->helper('utilities');

    }
    
    public function ventas_por_periodo()
    {
        $data['subtitulo'] = "";
        $data['js'] = "ventas/ventas_por_periodo_js";
        $this->load->view('main', $data);
    }
    
    public function ventas_por_periodo__reporte_de_ventas_por_periodo()
    {
        $fecha1 = $this->input->post('fecha1');
        $fecha2 = $this->input->post('fecha2');
        
        $data['query'] = $this->Ventas_model->reporte_de_ventas_por_periodo($fecha1, $fecha2);
        $data['subtitulo'] = "Periodo " .$fecha1 . " al " . $fecha2;
        $data['js'] = "ventas/ventas_por_periodo__reporte_de_ventas_por_periodo_js";
        $this->load->view('main', $data);
    }

}