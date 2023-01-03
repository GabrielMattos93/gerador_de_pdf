<?php 

use Dompdf\Dompdf;
use Dompdf\Options;

//Texto de exibição
/*echo"<h1>Gerador de PDF</h1>";*/ 

require 'vendor/autoload.php';

//Instanciando a classe dompdf

$Dompdf = new Dompdf(['enable_remote' => true]);

$dados = "Hello Word - Esse é um sistema gerador de PDF"; 
$dados .= "<img src='imagem/icone.png'>";  

//Instanciando o método e loadHtml e enviar o contéudo do PDF
$Dompdf->loadHtml($dados);

// Orientação da folha do arquivo (Paisagem).
//$gerador_de_pdf->setPaper('A4', 'landscape');

$Dompdf->setPaper('A4', 'portrait'); 

// Renderizar o Html como PDF
$Dompdf->render();

// Chamando a função que vai exportar o pdf
$Dompdf->stream('Gerador de PDF', array("Attachment" => false));