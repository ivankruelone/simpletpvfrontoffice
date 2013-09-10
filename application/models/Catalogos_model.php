<?php
class Catalogos_model extends CI_Model {

    /**
     * Catalogos_model::__construct()
     * 
     * @return
     */
    function __construct()
    {
        parent::__construct();
    }
    
    
    function productos_por_secuencia()
    {
        $this->db->select('p.sec, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->group_by('sec');
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }
    
    function productos_por_codigo_de_barras()
    {
        $this->db->select('p.sec, p.ean, p.descripcion, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }
    
    function tipos_de_clientes()
    {
        $query = $this->db->get('cliente_tipo');
        return $query;
    }
    
    function clientes()
    {
        $query = $this->db->get('clientes');
        return $query;
    }
    
    function clientes_de_credito_autorizados()
    {
        $this->db->select('c.cliente, c.razon, a.activo');
        $this->db->from('clientes_credito_autorizado a');
        $this->db->join('clientes c', 'a.cliente = c.cliente', 'LEFT');
        $query = $this->db->get();
        return $query;
    }
    
    function productos_con_comision()
    {
        $this->db->select('p.sec, ean, descripcion, sustancia, precio, marca, comisionable_descripcion');
        $this->db->from('comisionables c');
        $this->db->join('productos p', 'c.sec = p.sec');
        $this->db->join('comisionables_tipos t', 'c.tipo_comisionable = t.tipo_comisionable', 'LEFT');
        $query = $this->db->get();
        return $query;
    }
    
    function descuentos_por_mayoreo()
    {
        $this->db->order_by('tasa_descuento_mayoreo');
        $query = $this->db->get('descuentos_mayoreo');
        return $query;
    }
    
    function formas_de_pago()
    {
        $this->db->select('idformas_pago, f.cliente_tipo, cliente_tipo_desc, forma_pago, corte');
        $this->db->from('formas_pago f');
        $this->db->join('cliente_tipo c', 'f.cliente_tipo = c.cliente_tipo', 'LEFT');
        $query = $this->db->get();
        return $query;
    }
    
    function lineas()
    {
        $query = $this->db->get('lineas');
        return $query;
    }
    
    function sublineas()
    {
        $this->db->from('lineas l');
        $this->db->join('sublineas s', 'l.linea = s.linea');
        $query = $this->db->get();
        return $query;
    }
    
    function proveedores()
    {
        $query = $this->db->get('proveedores');
        return $query;
    }
    
    function sucursales()
    {
        $query = $this->db->get('sucursales');
        return $query;
    }
    
    function usuarios()
    {
        $this->db->select('nombrecompleto, activo, u.nivel, ultimo_login, puesto');
        $this->db->from('usuarios u');
        $this->db->join('usuarios_niveles n', 'u.nivel = n.nivel', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

}