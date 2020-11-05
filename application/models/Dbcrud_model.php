<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @author Kunduz Yazılım - Bertuğ Fahri ÖZER
 * @contact kunduzyazilim.com
 * Date: 06 - 07 - 2018
 */
class Dbcrud_model extends CI_Model
{
    public function lists($where = [], $table, $select = '*', $order = 'id')
    {
        return $this->db->select($select)->where($where)->order_by($order)->get($table)->result();
    }

    public function create($table, $data = [])
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function edit($table, $data = [], $where = [])
    {
        return $this->db->update($table, $data, $where);
    }

    public function delete($table, $where = [])
    {
        $this->db->delete($table, $where);
    }

    public function selectOne($where = [], $table, $select = '*')
    {
        return $this->db->select($select)->where($where)->get($table)->row();

    }

    public function count($table, $where = [])
    {
        return $this->db->where($where)->count_all_results($table);
    }

    public function petshops($select,$where,$start,$limit)
    {
        return $this->db->select($select)
            ->join('province','petshops.province_id=province.id','left')
            ->join('district','petshops.district_id=district.id','left')
            ->join('neighborhood','petshops.neighborhood_id=neighborhood.id','left')
            ->join('mahalle','petshops.mahalle_id=mahalle.id','left')
            ->where($where)
            ->limit($limit,$start)
            ->order_by('petshops.id')
            ->get('petshops')
            ->result();
    }
}
