<?php
class Ventas_model extends CI_Model {

    /**
     * Catalogos_model::__construct()
     * 
     * @return
     */
    function __construct()
    {
        parent::__construct();
    }
    
    function reporte_de_ventas_por_periodo($fecha1, $fecha2)
    {
        $fecha1 = $fecha1 . " 00:00:00";
        $fecha2 = $fecha2 . " 23:59:59";
        
        $this->db->select('v.venta, c.razon, v.fecha, v.caja, u1.nombrecompleto as cajero, u2.nombrecompleto as vendedor, sum(d.cantidad) as cantidad, sum(d.iva) as iva, sum(d.total) as total');
        $this->db->from('ventas v');
        $this->db->join('clientes c', 'v.cliente = c.cliente', 'LEFT');
        $this->db->join('usuarios u1', 'v.cajero = u1.numeroempleado', 'LEFT');
        $this->db->join('usuarios u2', 'v.vendedor = u2.numeroempleado', 'LEFT');
        $this->db->join('detalle d', 'v.venta = d.venta', 'LEFT');
        $this->db->where('v.estatus', 1);
        $this->db->where('fecha >=', $fecha1);
        $this->db->where('fecha <=', $fecha2);
        $this->db->group_by('v.venta');
        $query = $this->db->get();
        
        return $query;
        
    }
    
}