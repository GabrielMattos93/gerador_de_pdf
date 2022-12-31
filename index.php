<?php 

//Texto de exibição
/*echo"<h1>Gerador de PDF</h1>";*/ 

require 'vendor/autoload.php';

// Referenciar o dompdf com namespace
use Dompdf\Dompdf;

//Instanciando a classe dompdf

$gerador_de_pdf = new Dompdf();

//Instanciando o método e loadHtml e enviar o contéudo do PDF
$gerador_de_pdf->loadHtml('Olá Mundo - Este é o Gerador de PDF');

// Orientação da folha do arquivo (Paisagem).
//$gerador_de_pdf->setPaper('A4', 'landscape');

$gerador_de_pdf->setPaper('A4', 'portrait'); 

// Renderizar o Html como PDF
$gerador_de_pdf->render();

// Chamando a função que vai exportar o pdf
$gerador_de_pdf->stream();