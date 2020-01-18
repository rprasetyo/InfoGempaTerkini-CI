<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mod_gempa extends CI_Model
{
    public function index(){
        echo "Forbiden";
    }

    public function fetch_gempa(){
        $xmlfile = "http://data.bmkg.go.id/gempaterkini.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayGempa = array();
        $ArrayGempaAll = array();
        $d = 0;
        foreach($data->children() as $row_gempa){
            $c = 0;
            foreach($row_gempa->children() as $gempa){
//                echo $gempa->getName(). " : " .$gempa. "<br>";
                if($gempa->getName()=="point"){
                    foreach($gempa->children() as $coord){
                        $ArrayGempa[$c] = array("point"=>"$coord");
                    }
                }else{
                    $ArrayGempa[$c] = array($gempa->getName()=>"$gempa");
                }
                $c++;
            }
            $ArrayGempaAll[$d] = array("id"=>$d,"current_gempa" => $ArrayGempa);
            $d++;
        }
        return json_encode($ArrayGempaAll);
    }
}
