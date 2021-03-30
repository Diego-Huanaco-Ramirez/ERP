<?php
require_once('fpdf181/fpdf.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsreport
 *
 * @author alexis
 */

class PDF extends FPDF
{
var $fecha;    
function fecha($fecha){
    $this->fecha= $fecha;
}
function Header()
{
    // Logo
 //   $this->Image('../imagenes/linux.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',8);
    // Move to the right
    $this->Cell(40);
    // Title
    $this->Cell(110,3,"Agenda Diaria Centro MejorVision -  fecha: $this->fecha ",1,0,'C');
    // Line break
    $this->Ln(4);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,8,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',8);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,3,"Atencion $num : $label",0,1,'L',true);
    // Line break
    $this->Ln(1);
}
function FECHATitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',8);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,3,"$label",0,1,'L',true);
    // Line break
    $this->Ln(2);
}
}

