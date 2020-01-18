<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mod_cuaca extends CI_Model
{
    public function index(){
        echo "Forbiden";
    }

    public function cuaca_nad(){
        $xmlfile = "http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-Aceh.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_sumut(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_02_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_sumbar(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_03_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_jambi(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_04_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_bengkulu(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_05_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_riau(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_06_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_kepri(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_07_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_sumsel(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_08_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }


    public function cuaca_babel(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_09_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_lampung(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_10_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_banten(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_11_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_jawabarat(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_13_2.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_jawatengah(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_14_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_diy(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_15_2.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }

    public function cuaca_jawatimur(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_16_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else
                if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                    $c = 0;
                    foreach($child_level_1->children() as $row){
                        $cc = 0;
                        foreach($row->children() as $current_kota){
                            $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                            $cc++;
                        }
                        $ArrayRow[$c] = $ArrayKota;
                        $c++;
                    }
                }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }
}
