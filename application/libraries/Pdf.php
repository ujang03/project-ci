<?php


defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

/**
 *
 * Libraries Pdf
 *
 * This Libraries for ...
 * 
 * @package		CodeIgniter
 * @category	Libraries
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Pdf extends Dompdf
{
  public $filename;
  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->filename = "Bukti_Peminjaman.pdf";
  }

  function ci()
  {
    return get_instance();
  }

  function load_view($view, $data = array())
  {
    $html = $this->ci()->load->view($view, $data, true);
    $this->load_html($html);
    $this->render();
    $this->stream($this->filename, array('Attachment' => false));
  }
  // ------------------------------------------------------------------------
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */