<?php
function cetakData($html){
	require("dompdf/dompdf_config.inc.php");
	define('DOMPDF_ENABLE_AUTOLOAD', false);
	 
	    $dompdf = new DOMPDF();
	    $dompdf->load_html($html);
	    $dompdf->set_paper('A4', 'landscape');
	    $dompdf->render();
	    $dompdf->stream('laporan_barcode'.'.pdf',array("Attachment"=>0));
	}

?>