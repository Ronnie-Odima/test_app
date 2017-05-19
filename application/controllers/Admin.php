<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{


    //check session then load admin dashboard
    public function dashboard()
    {
        //check session
        if ($this->session->userdata('loggedin')) {
            $sess_data = $this->session->userdata('loggedin');

            $data = array(
                'u_id' => $sess_data['u_id'],
                'title'=> 'Dashboard',
                'customers' => $this->db->get('tbl_profiles')->result(),
                'debtors' => $this->db->get_where('tbl_due_listing', array('cleared'=> 0))->result()
            );

            //load admin dashboard
            $this->load->view('backend/temps/head',$data);
            $this->load->view('backend/temps/header', $data);
            $this->load->view('backend/temps/sidebar' ,$data);
            $this->load->view('backend/admin/dashboard', $data);
            $this->load->view('backend/temps/footer', $data);
            $this->load->view('backend/temps/end_scripts',$data);

        } else {

            //no session data found...redirect to login page
            redirect('auth/login');
        }


    }

    //check session then load customers page
    public function customers()
    {

        //check session
        if ($this->session->userdata('loggedin')) {
            $sess_data = $this->session->userdata('loggedin');

            $data = array(
                'u_id' => $sess_data['u_id'],
                'title'=> 'Customers',
                'customers' => $this->db->get('tbl_profiles')->result(),
                'debtors' => $this->db->get_where('tbl_due_listing', array('cleared'=> 0))->result()
            );

            //load customers page
            $this->load->view('backend/temps/head',$data);
            $this->load->view('backend/temps/header', $data);
            $this->load->view('backend/temps/sidebar' ,$data);
            $this->load->view('backend/admin/customers', $data);
            $this->load->view('backend/temps/footer', $data);
            $this->load->view('backend/temps/endscript2',$data);

        } else {

            //no session data found...redirect to login page
            redirect('auth/login');
        }

    }

    //check session and load debtors page
    public function debtors()
    {

        //check session
        if ($this->session->userdata('loggedin')) {
            $sess_data = $this->session->userdata('loggedin');

            $data = array(
                'u_id' => $sess_data['u_id'],
                'title'=> 'Debtors',
                'customers' => $this->db->get('tbl_profiles')->result(),
                'debtors' => $this->db->get_where('tbl_due_listing', array('cleared'=> 0))->result()
            );

            //session data found....load debtors page
            $this->load->view('backend/temps/head',$data);
            $this->load->view('backend/temps/header', $data);
            $this->load->view('backend/temps/sidebar' ,$data);
            $this->load->view('backend/admin/debtors', $data);
            $this->load->view('backend/temps/footer', $data);
            $this->load->view('backend/temps/end_scripts',$data);

        } else {
            redirect('auth/login');
        }
    }


    //search customer from database
    public function search_customers()
    {
        $content = $this->input->post('content');

        $this->db->like('id_no', $content);
        $this->db->or_like('phone', $content);

        $query = $this->db->get('tbl_profiles');

        if($query)
        {

            //if data found print out
            if($query->num_rows() > 0) {
                foreach ($query->result() as $value) {
                    $link = base_url() . "/" . "admin/view_customer/" . $value->id;
                    echo

                        "<td>
                   <a href='" . $link . "'>
                        $value->name
                    </a>
                </td>";
                }
            }

            //no data found...
            else{
                echo
                "<div class='alert alert-danger'>
                No results found
            </div>";
            }

        }
    }


    //view customer details
    public function view_customer()
    {
        if ($this->session->userdata('loggedin')) {
            $sess_data = $this->session->userdata('loggedin');
            $id = $this->uri->segment(3);
            $data = array(
                'u_id' => $sess_data['u_id'],
                'title'=> 'Debtors',
                'customers' => $this->db->get('tbl_profiles')->result(),
                'debtors' => $this->db->get_where('tbl_due_listing', array('cleared'=> 0))->result(),
                'customer_details' => $this->db->get_where('tbl_profiles', array('id' => $id))->result()
            );

            $this->load->view('backend/temps/head',$data);
            $this->load->view('backend/temps/header', $data);
            $this->load->view('backend/temps/sidebar' ,$data);
            $this->load->view('backend/admin/customer_details', $data);
            $this->load->view('backend/temps/footer', $data);
            $this->load->view('backend/temps/end_scripts',$data);

        } else {
            redirect('auth/login');
        }

    }
}