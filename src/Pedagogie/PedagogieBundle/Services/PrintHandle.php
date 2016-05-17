<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrintHandle
 *
 * @author MouhamadouTidianeElB
 */
namespace Pedagogie\PedagogieBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class PrintHandle {
    //put your code here
    
    private $printcontenu ;
   
	public function saveGrpToPdf($contenu,$filename,$param,$script,$controleur)
    {
		$cssstyle = $controleur->get('kernel')->getRootDir(). "/../web/includes/css/printstyle.css";
		$header = file_get_contents($cssstyle) ;
		$allcontent = "<style>".$header."</style><page>".$contenu."</page>";
		$html2pdf = $controleur->get('html2pdf_factory')->create('P', 'A4', 'fr', true, 'UTF-8', array(10, 15, 10, 15));
		$html2pdf->pdf->IncludeJS($script);
		$html2pdf->writeHTML($allcontent);
		$html2pdf->Output($filename,$param);
		
	}



    
}
