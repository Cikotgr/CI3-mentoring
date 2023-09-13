<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->helper('romawiconverter');
		$this->load->library('date');
	}

	public function index()
	{
		$romawi = 'XXI';
		$integer = '1200';

		$data['int_to_romawi'] = 'Romawi '.$romawi.' jika diubah angka menjadi = '.romawiToInt($romawi);
		$data['romawi_to_int'] = 'Angka '.$integer.' jika diubah romawi menjadi = '.intToRomawi($integer);
		$data['ymd'] = 'tanggal sekarang format y-m-d = '. $this->date->dateymd();
		$data['dmy'] = 'tanggal sekarang format DMY = '. $this->date->datedmy();
    
		$this->load->view('welcome_message',$data);
	}
}
