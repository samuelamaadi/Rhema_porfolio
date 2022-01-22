
   <p><a href="download.php?file=CURRICULUM-VITAE.docx" class="readmore btn btn-primary">Download CV my here</a></p>

   <?php 

   if (!empty($_GET['file'])){
   	$filename = basename($_GET['file']);
   	$filepath = 'files/'.$filename;

   	if (!empty($filename) && file_exists($filepath)) {
   		

   	// define headers here
   		header("Cache-Control: public");
   		header("Content-Description: File Transfer");
   		header("Content-Disposition: attachment; filename=$filename");
   		header("Content-Type: application/zip");
   	    header("Content-Transfer-Emcoding: binary");

   	    readfile($filepath);
   	    exit;
   	}else{
   		echo "file does not exist";
   	}
   }

   	?>
   	
  