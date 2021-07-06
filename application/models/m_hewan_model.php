<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_hewan_model extends CI_Model
{
    public $_table = "data_hewan";

    public $id_hewan;
    public $jenis_hewan;
    // public $price;
    // public $image = "default.jpg";
    // public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_hewan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_hewan = uniqid();
        $this->jenis_hewan = $post["jenis"];
        // $this->price = $post["price"];
        // $this->description = $post["description"];
        return $this->db->insert($this->_table, $this);
    }

     public function get_hewan_by_id($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_hewan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_hewan" => $id));
    }


}