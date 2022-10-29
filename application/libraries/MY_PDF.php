<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Incluimos el archivo fpdf
require_once APPPATH."/third_party/fpdf/fpdf.php";
//Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
class MY_PDF extends FPDF {
    
    public function __construct() {
        parent::__construct();
    }

    // Cabeçalho do arquivo final,
    public function Header(){
  
        $this->Image('images/logo.png',15,10,40);
        $this->SetFont('Arial','B',13);
        $this->Cell(30);
        $this->Cell(155,10,"ORDEM DE DESPACHO DE MERCADORIAS ",0,0,'R');
        $this->Ln(0);
        $this->Ln(10);
        $this->Ln(20);
    }

    // Rodapé do PDF
    public function Footer($signature=''){
        $this->SetY(-29);
    
        if($signature){
            $this->SetFont('Arial','I',8);
            $this->Cell(155,10,'Assinatura',0,0,'L');
            $this->Ln(5);
            $this->Image('file_uploads/'.$signature,11,$this->GetY(),25,25); 
            $this->Ln(5);
            $this->Cell(0,10,MESSAGE_FOOTER,0,0,'C');
            $this->Ln(5);
            $this->Cell(0,10,MESSAGE_FOOTER_,0,0,'C');
        }
        
        $this->Ln(6);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    
    }

}