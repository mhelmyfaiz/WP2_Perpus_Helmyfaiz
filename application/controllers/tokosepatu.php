<?php
class tokosepatu extends CI_Controller
{
    public function _construct(){
        parent::_construct();
    }
    
    public function index()
    {
        
        $this->load->view('view-input-sepatu');
    }
    public function cetak()
    {
        $this->load->model (['ModelSepatu']);
        $data = [
                'nama' => $this->input->post('nama'),
                'no' => $this->input->post('no'),
                'merk' => $this->input->post('merk'),
                'harga' => $this->ModelSepatu->getHarga($this->input->post('merk')),
                'ukr' => $this->input->post('ukr')
            ];
                 $this->load->view('view-output-sepatu', $data);
        
    }
}