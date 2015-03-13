<?php
session_start();
//echo "<pre>";print_r($_GET);exit;

//echo $img;
require('fpdf/fpdf.php');
class PDF extends FPDF
{
function Header()
{
    global $title;

	$this->Image('http://meetuniv.com/assets/pdfImages/new_logo.png',10,6,50);
    // Arial bold 15
  // Logo
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(65,10,'THE CAREER BATTERY',1,0,'C');
    // Line break
    $this->Ln(20);
}

function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Text color in gray
    $this->SetTextColor(128);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
    // Line break
    $this->Ln(4);
}

function ChapterBody($file)
{
    // Read text file
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);
    // Output justified text
    $this->MultiCell(0,5,$txt);
    // Line break
    $this->Ln();
    // Mention in italics
    //$this->SetFont('','I');
	
	$this->Image('http://meetuniv.com/assets/pdfImages/images1.jpg',80,127,27);
    $this->Cell(0,40, $_GET['maxtext1']);
	$this->Ln();
	$this->Cell(0,-20, $_GET['mintext1']);
	
	 $this->Ln();
	
	$this->Image('http://meetuniv.com/assets/pdfImages/image2.jpg',80,160,27);
    $this->Cell(0,70, $_GET['maxtext2']);
	$this->Ln();
	$this->Cell(0,-50, $_GET['mintext2']);
	
	 $this->Ln();
	 if($_GET['value'] == '1'){
		$this->Image('http://meetuniv.com/assets/pdfImages/upper_left.png',12,200,90);
	}else if($_GET['value'] == '2'){
		$this->Image('http://meetuniv.com/assets/pdfImages/lower_right.png',12,200,90);
	}else if($_GET['value'] == '3'){
		$this->Image('http://meetuniv.com/assets/pdfImages/lower_right.png',12,200,90);
	}else if($_GET['value'] == '4'){
		$this->Image('http://meetuniv.com/assets/pdfImages/upper_right.png',12,200,90);
	}
    //$this->Cell(0,110,'some text');

	
}


function PrintChapter($file)
{
    $this->AddPage();
    //$this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
	
}
}

$pdf = new PDF();
$title = 'THE CAREER BATTERY';
$pdf->SetTitle($title);
//$pdf->SetAuthor('Jules Verne');
$pdf->PrintChapter('http://meetuniv.com/assets/test.html');
//$pdf->PrintChapter(2,'THE CAREER BATTERY','http://localhost/CodeIgniter1/assets/test.html');
$pdf->Output();
?>