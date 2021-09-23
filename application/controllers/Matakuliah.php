<?php
class Matakuliah extends CI_Controller
{

    public function index()

    {
        $this->load->view('view-form-matakuliah');

    }

    public function cetak()
    {
        $this->form validation->set rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus diisi',
            'min lenght' => 'Kode terlalu pendek'
        ]);

        $this->form validation->set rules('nama', 'Nama Matakuliah', 'required|min lenght[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_lenght' => 'Nama terlalu Pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {

        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

        $this->load->view('view-data-matakuliah', $data);
        }
    }
}