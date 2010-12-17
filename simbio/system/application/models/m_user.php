<?php

class M_user extends Model {

    function M_user()
    {
        parent::Model();
    }

    function get_user($id)
    {
        $data = array();
        $q = $this->db->get_where('tb_user', array('id_user' => $id));
        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

    function get_semua_user()
    {
        $data = array();

        $this->db->order_by('username');
        $q = $this->db->get('tb_user');
        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
              $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }


}
