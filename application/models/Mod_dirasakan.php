<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mod_dirasakan extends CI_Model
{
    public function index(){
        echo "Forbiden";
    }

    public function fetch_gempa_dirasakan(){
        $xmlfile = "http://data.bmkg.go.id/gempadirasakan.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayGempa = array();
        $ArrayGempaAll = array();
        $d = 0;
        foreach($data->children() as $row_gempa){
            $c = 0;
            foreach($row_gempa->children() as $Gempa){
//                echo $Gempa->getName(). " : " .$Gempa. "<br>";
                if($Gempa->getName()=="point"){
                    foreach($Gempa->children() as $coord){
                        $ArrayGempa[$c] = array("point"=>"$coord");
                    }
                }else{
                    $ArrayGempa[$c] = array($Gempa->getName()=>"$Gempa");
                }
                $c++;
            }
            $ArrayGempaAll[$d] = array("id"=>$d,"current_Gempa" => $ArrayGempa);
            $d++;
        }
        return json_encode($ArrayGempaAll);
    }
}
