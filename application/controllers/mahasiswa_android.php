<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Kontak_android extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    //Menampilkan data kontak
    function index_get() { 
        $rest_coba = $this->db->get('mahasiswa')->result();
        $this->response(array("result"=>$rest_coba, 200));
    }

}
?>