<?php
class Inventario_model extends CI_Model {

    /**
     * Catalogos_model::__construct()
     * 
     * @return
     */
    function __construct()
    {
        parent::__construct();
    }
    
    
    function por_secuencia()
    {
        $this->db->select('p.sec, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc, sum(inventario) as inventario');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->where('p.fisico', 1);
        $this->db->group_by('sec');
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }

    function por_codigo_de_barras()
    {
        $this->db->select('p.sec, descripcion, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc, inventario');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->where('p.fisico', 1);
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }

    function secuencias_en_cero()
    {
        $this->db->select('p.sec, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc, sum(inventario) as inventario');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->where('p.fisico', 1);
        $this->db->where('inventario <= 0');
        $this->db->group_by('sec');
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }

    function negativos()
    {
        $this->db->select('p.sec, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc, sum(inventario) as inventario');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->where('p.fisico', 1);
        $this->db->where('inventario < 0');
        $this->db->group_by('sec');
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }
    
    function negativos_con_codigo_de_barras()
    {
        $this->db->select('p.sec, descripcion, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc, inventario');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->where('p.fisico', 1);
        $this->db->where('inventario < 0');
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }

    function muebles()
    {
        $this->db->select('mueble');
        $this->db->where('fisico', 1);
        $this->db->group_by('mueble');
        $query = $this->db->get('productos');
        return $query;
    }
    
    function muebles__productos_por_mueble($mueble)
    {
        $this->db->select('p.sec, p.sustancia, p.precio, p.iva, p.fisico, p.antibiotico, linea_desc, sublinea_desc, sum(inventario) as inventario');
        $this->db->from('productos p');
        $this->db->join('lineas l', 'p.linea = l.linea', 'LEFT');
        $this->db->join('sublineas s', 'p.sublinea = s.sublinea and p.linea = s.linea');
        $this->db->where('p.fisico', 1);
        $this->db->where('p.mueble', $mueble);
        $this->db->group_by('sec');
        $this->db->order_by('sec');
        $query = $this->db->get();
        
        return $query;
    }

}