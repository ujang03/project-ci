<?php


defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;
require 'vendor/autoload.php';

class Pdf extends Dompdf
{
  // public $filename;
  // // ------------------------------------------------------------------------

  // public function __construct()
  // {
  //   parent::__construct();
  //   $this->filename = "Bukti_Peminjaman.pdf";
  // }

  // function ci()
  // {
  //   return get_instance();
  // }

  // public function load_view($view, $data = array())
  // {
  //   $html = $this->ci()->load->view($view, $data, true);
  //   $this->loadHtml($html);
  //   $this->render();
  //   $this->stream($this->filename, array('Attachment' => false));
  // }
  // ------------------------------------------------------------------------

  public function generate($html, $filename='', $paper = '', $orientation = '', $stream=TRUE)
  {   
      $options = new Options();
      $options->set('isRemoteEnabled', TRUE);
      $dompdf = new Dompdf($options);
      $dompdf->loadHtml($html);
      $dompdf->setPaper($paper, $orientation);
      $dompdf->render();
      if ($stream) {
          $dompdf->stream($filename.".pdf", array("Attachment" => 0));
          exit();
      } else {
          return $dompdf->output();
      }
  }

}
