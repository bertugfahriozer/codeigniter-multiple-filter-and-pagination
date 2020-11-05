<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $view = new stdClass();
        $view->ils = $this->common->lists([], 'province');
        $this->load->view('welcome_message', $view);
    }

    public function search()
    {
        /*petshopName=&province=6&district=&neighborhood=&mahalle=*/
        $where = ['petshops.petshopName' => $this->input->get('petshopName', true),
            'petshops.province_id' => $this->input->get('province', true),
            'petshops.district_id' => $this->input->get('district', true),
            'petshops.neighborhood_id' => $this->input->get('neighborhood', true),
            'petshops.mahalle_id' => $this->input->get('mahalle', true)];

        $where = clearFilter($where);
        $perPage = 12;
        $uriSegment = 3;
        $usePageNumber = true;
        $pageSegment = $this->uri->segment(3);
        if (empty($pageSegment))
            $pageSegment = 1;
        $links = paginationHelper(base_url('welcome/search'),
            $this->common->count('petshops', $where),
            $perPage, $uriSegment, $usePageNumber, ['class' => 'page-link'], true);

        if ($usePageNumber == true)
            $pkCount = ($pageSegment-1) * $perPage;

        $view = new stdClass();
        $view->shops = $this->common->petshops('*', $where, $pkCount,$perPage);
        //__printrDie($this->db->last_query());
        $view->links = $links;
        $this->load->view('search', $view);
    }

    public function district()
    {
        if ($this->input->is_ajax_request() && $this->input->method() == 'post')
            echo json_encode($this->common->lists(['province_id' => $this->input->post('province')], 'district'));
    }

    public function neigh()
    {
        if ($this->input->is_ajax_request() && $this->input->method() == 'post')
            echo json_encode($this->common->lists(['district_id' => $this->input->post('district')], 'neighborhood'));
    }

    public function mah()
    {
        if ($this->input->is_ajax_request() && $this->input->method() == 'post')
            echo json_encode($this->common->lists(['neighborhood_id' => $this->input->post('neighborhood')], 'mahalle'));
    }
}
