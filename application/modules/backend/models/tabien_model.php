<?php defined('BASEPATH') or exit('No direct script access allowed');


class tabien_model extends CI_Model
{

    public function get_tabien()

    {

        $this->db->select('*')
            ->from('tbl_tabien')
            ->join('tbl_img', 'tbl_tabien.t_img_id = tbl_img.t_img_id')
            ->group_by("tbl_img.t_img_id");
        $query = $this->db->get();
        $result = [];

        foreach ($query->result() as $row) { //การปั้น array

            $result[] = array(
                "id" => $row->t_id,
                "name" => $row->t_name,
                "detail" => $row->t_detail,
                "price" => $row->t_price,
                "img" => $row->t_img,
                "status" => $row->t_status,
            );
        }

        return $result;
    }
    public function add_tabien()
    {


        $data = array(
            't_name' => $this->input->post('t_name'),
            't_img_id' => $this->input->post('t_name'),
            't_type' => $this->input->post('t_type'),
            't_detail' => $this->input->post('t_detail'),
            't_score' => $this->input->post('t_score'),
            't_promotion_id' => $this->input->post('t_promotion_id'),
            't_price' => $this->input->post('t_price'),
            't_status' => 'เข้าใหม่',
        );

        $this->db->insert('tbl_tabien', $data);

        // return $this->db->insert_batch('profile_images', $image);
    }


    public function delete_tabien($id)
    {
        $this->db->where('t_id', $id);
        $this->db->delete('tbl_tabien');

        return json_encode(200);
    }



    public function multiple_images($image = array())
    {
        $data = array();

        foreach ($image as $row) {
            $data[] = array(
                't_img_id' => $this->input->post('t_name'),
                't_img' => $row['t_img'],
                't_img_status' => 'img_list',
            );
        }
        $this->db->insert_batch('tbl_img', $data);
    }
}
