<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkg extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mod_cuaca');
        $this->load->model('mod_gempa');
//        $this->load->model('mod_dirasakan');
    }

    public function index()
    {
        $this->load->view('mkg/header');
        $this->load->view('mkg/navigation');
        $this->load->view('mkg/footer');
    }

    public function cuaca()
    {
        $this->load->view('mkg/header');
        $this->load->view('mkg/navigation');
        if ($this->uri->segment(3) == "nad") {
            $paket["respon"] = $this->mod_cuaca->cuaca_nad();
        } else
            if ($this->uri->segment(3) == "sumut") {
                $paket["respon"] = $this->mod_cuaca->cuaca_sumut();
            } else
                if ($this->uri->segment(3) == "sumbar") {
                    $paket["respon"] = $this->mod_cuaca->cuaca_sumbar();
                } else
                    if ($this->uri->segment(3) == "jambi") {
                        $paket["respon"] = $this->mod_cuaca->cuaca_jambi();
                    } else
                        if ($this->uri->segment(3) == "bengkulu") {
                            $paket["respon"] = $this->mod_cuaca->cuaca_bengkulu();
                        } else
                            if ($this->uri->segment(3) == "riau") {
                                $paket["respon"] = $this->mod_cuaca->cuaca_riau();
                            } else
                                if ($this->uri->segment(3) == "kepri") {
                                    $paket["respon"] = $this->mod_cuaca->cuaca_kepri();
                                } else
                                    if ($this->uri->segment(3) == "sumsel") {
                                        $paket["respon"] = $this->mod_cuaca->cuaca_sumsel();
                                    } else
                                        if ($this->uri->segment(3) == "babel") {
                                            $paket["respon"] = $this->mod_cuaca->cuaca_babel();
                                        } else
                                            if ($this->uri->segment(3) == "lampung") {
                                                $paket["respon"] = $this->mod_cuaca->cuaca_lampung();
                                            } else
                                                if ($this->uri->segment(3) == "banten") {
                                                    $paket["respon"] = $this->mod_cuaca->cuaca_banten();
                                                } else
                                                    if ($this->uri->segment(3) == "jawabarat") {
                                                        $paket["respon"] = $this->mod_cuaca->cuaca_jawabarat();
                                                    } else
                                                        if ($this->uri->segment(3) == "jawatengah") {
                                                            $paket["respon"] = $this->mod_cuaca->cuaca_jawatengah();
                                                        } else
                                                            if ($this->uri->segment(3) == "diy") {
                                                                $paket["respon"] = $this->mod_cuaca->cuaca_diy();
                                                            } else
                                                                if ($this->uri->segment(3) == "jawatimur") {
                                                                    $paket["respon"] = $this->mod_cuaca->cuaca_jawatimur();
                                                                } else {
                                                                    $paket["respon"] = "ERROR";
                                                                }
        $this->load->view('mkg/body_cuaca', $paket);
        $this->load->view('mkg/footer');
    }

    public function gempa(){
        $this->load->view('mkg/header');
        $this->load->view('mkg/navigation');
        $paket["respon"] = $this->mod_gempa->fetch_gempa();
        $this->load->view('mkg/body_gempa',$paket);
        $this->load->view('mkg/footer');
    }

    public function dirasakan()
    {
        $this->load->view('mkg/header');
        $this->load->view('mkg/navigation');
//        $paket["respon"] = $this->mod_dirasakan->fetch_gempa_dirasakan();
        $this->load->view('mkg/body_dirasakan');
        $this->load->view('mkg/footer');

    }
}
