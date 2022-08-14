<?php defined('BASEPATH') or exit('No direct script access allowed');


class Tabien extends BackendController
{

    public function __construct()
    {
        $this->load->model('tabien_model');
    }
    public function index()
    {
        $this->template('tabien/index', $this->data, true);
    }
    public function get_tabien()
    {
        $data = $this->tabien_model->get_tabien();

        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function create_form()
    {
        $this->template('tabien/create', $this->data, true);
    }
    public function add_tabien()
    {
        $this->load->library('upload');
        $image = array();
        $ImageCount = count($_FILES['tabienfile']['name']);
        for ($i = 0; $i < $ImageCount; $i++) {
            $_FILES['file']['name']       = $_FILES['tabienfile']['name'][$i];
            $_FILES['file']['type']       = $_FILES['tabienfile']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['tabienfile']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['tabienfile']['error'][$i];
            $_FILES['file']['size']       = $_FILES['tabienfile']['size'][$i];
            // File upload configuration
            $uploadPath = 'issets/img/tag/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if ($this->upload->do_upload('file')) {
                // Uploaded file data
                $imageData = $this->upload->data();
                $uploadImgData[$i]['t_img'] = $imageData['file_name'];
            }
        }
        if (!empty($uploadImgData)) {
            $this->tabien_model->multiple_images($uploadImgData);
            $this->tabien_model->add_tabien();
        }

        redirect('backend/tabien');
    }




    public function update_form()
    {
        $this->template('tabien/update', $this->data, true);
    }


    public function update_tabien()
    {
        $id = $this->input->post('id');
        $data = $this->tabien_model->update_tabien($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function delete_tabien()
    {
        $id = $this->input->post('id');
        $data = $this->tabien_model->delete_tabien($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
}
