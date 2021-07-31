<?php

class SupplierModel extends CI_Model
{
    public function get_all_data_supplier()
    {
        $query = "SELECT * FROM supplier";
        return $this->db->query($query)->result_array();
    }

    public function simpansupplier()
    {
    }
}
