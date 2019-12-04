<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entry1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('entry1_model');
    }

    public function index()
    {
        $this->load->view('entry1/index');
    }

    public function add()
    {
        $this->load->view('entry1/create-form', $data);
    }

    public function edit($id)
    {
        $data = array(
            'data' => $this->entry1_model->get_row_by_id($id)
        );

        $this->load->view('entry1/update-form', $data);
    }

    public function delete($id)
    {
        $this->entry1_model->delete($id);
        $this->session->set_flashdata("success", "Data berhasil dihapus.");
        redirect('entry1/index', 'refresh');
    }

    public function create()
    {
        $data = array(
            'items' => $this->input->post('items'),
            'descriptions' => $this->input->post('descriptions'),
        );

        $this->entry1_model->insert($data);
        $this->session->set_flashdata("success", "Data berhasil disimpan.");
        redirect('entry1/index', 'refresh');
    }

    public function update($id)
    {
        $data = array(
            'items' => $this->input->post('items'),
            'descriptions' => $this->input->post('descriptions'),
        );

        $this->entry1_model->update($id, $data);
        $this->session->set_flashdata("success", "Data berhasil diupdate.");
        redirect('entry1/index', 'refresh');
    }

    public function datatable()
    {
        $this->datatables->select('*')
                ->from('entry1');

        $this->output->set_output(
            $this->datatables->generate('json')
        );
    }

    public function delete_all()
    {
        $this->entry1_model->delete_all();
        $this->session->set_flashdata("success", "Semua data berhasil dihapus.");
        redirect('entry1/index', 'refresh');
    }
}