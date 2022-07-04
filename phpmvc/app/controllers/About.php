<?php 

class About extends Controller {
    public function index($nama = 'jingse', $pekerjaan = 'kuda', $umur = 97){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'Index About';
        $this->view('templates/header', $data);
        $this->view('About/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $this->view('About/page');
    }
    
}


?>