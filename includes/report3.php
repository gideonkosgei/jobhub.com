<?php
session_start();
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{

    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
	 $this->Ln(10);
    $this->Cell(120,10,'REPORT',0,0,'C');
    // Line break
    $this->Ln(0);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
include("database.php");

$query=mysql_query("SELECT * FROM employer_job_post,employer_details WHERE employer_job_post.employer_id=employer_details.id");
if(!$query)
{
echo "error";
}

 $pdf->SetLineWidth(.3);
   $pdf->SetFont('','B');
    // Header
    $w = array(40,45,25,25,25,30);
	$header = array('EMPLOYER NAME', 'INDUSTRY', 'POST', 'POSITIONS','TERMS','DATE POSTED');
	
	//pages separator.
	$pdf->Cell(11,31,'',0,2);
	
    for($i=0;$i<count($header);$i++)
       $pdf->Cell($w[$i],7,$header[$i],1,0);
   $pdf->Ln();
    // Color and font restoration
   $pdf->SetFillColor(224,235,255);
   $pdf->SetTextColor(0);
   $pdf->SetFont('','','B');
    // Data
    $fill = false;
   while($job=mysql_fetch_array($query)){
	$pdf->Cell($w[0],5.5,$job['business_name'],'LR',0,'L',$fill);
       $pdf->Cell($w[1],5.5,$job['industry'],'LR',0,'L',$fill);
       $pdf->Cell($w[2],5.5,$job['post_vacant'],'LR',0,'LR',$fill);
	    $pdf->Cell($w[3],5.5,$job['positions'],'LR',0,'R',$fill);
		$pdf->Cell($w[3],5.5,$job['terms_of_service'],'LR',0,'R',$fill);
		$pdf->Cell($w[3],5.5,$job['date_posted'],'LR',0,'R',$fill);
       $pdf->Ln();
        $fill = !$fill;
	}
    // Closing line
   $pdf->Cell(array_sum($w),0,'','T');


 
$pdf->Output();
?>