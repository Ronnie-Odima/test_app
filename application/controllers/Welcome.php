<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        if ($this->session->userdata('loggedin')) {
            $sess_data = $this->session->userdata('loggedin');
            $data = array(
                'u_id' => $sess_data['u_id'],
                'title'=> 'Dashboard',
                'customers' => $this->db->get('tbl_profiles')->result(),
                'debtors' => $this->db->get_where('tbl_due_listing', array('cleared'=> 0))->result()
            );

            $this->load->view('backend/temps/head',$data);
            $this->load->view('backend/temps/header', $data);
            $this->load->view('backend/temps/sidebar' ,$data);
            $this->load->view('backend/admin/dashboard', $data);
            $this->load->view('backend/temps/footer', $data);
            $this->load->view('backend/temps/end_scripts',$data);

        } else {
            redirect('auth/login');
        }

    }

    public function configure_system()
    {
        $data = array(

            array(
                'c_id' => 1,
                'total_amount' => 50000,
                'amount_paid' => 23000,
                'due_date' => '2017-05-01',

                'cleared' => 0,
            ),

            array(
                'c_id' => 2,
                'total_amount' => 65000,
                'amount_paid' => 32000,
                'due_date' => '2017-05-03',
                'cleared' => 0,
            ),
            array(
                'c_id' => 3,
                'total_amount' => 23000,
                'amount_paid' => 23000,
                'due_date' => '2017-05-05',
                'cleared' => 1,
            ),

            array(
                'c_id' => 4,
                'total_amount' => 16000,
                'amount_paid' => 16000,
                'due_date' => '2017-05-02',
                'cleared' => 1,
            ),

            array(
                'c_id' => 5,
                'total_amount' => 63000,
                'amount_paid' => 40000,
                'due_date' => '2017-05-07',
                'cleared' => 0,
            ),

            array(
                'c_id' => 6,
                'total_amount' => 42000,
                'amount_paid' => 40000,
                'due_date' => '2017-05-09',
                'cleared' => 0,
            ),

            array(
                'c_id' => 7,
                'total_amount' => 32000,
                'amount_paid' => 32000,
                'due_date' => '2017-05-10',
                'cleared' => 1,
            ),

            array(
                'c_id' => 8,
                'total_amount' => 100000,
                'amount_paid' => 100000,
                'due_date' => '2017-05-13',
                'cleared' => 1,
            ),

            array(
                'c_id' => 9,
                'total_amount' => 85000,
                'amount_paid' => 61000,
                'due_date' => '2017-05-15',
                'cleared' => 0,
            ),

            array(
                'c_id' => 10,
                'total_amount' => 56000,
                'amount_paid' => 23550,
                'due_date' => '2017-05-17',
                'cleared' => 0,
            ),

        );

        $data2 = array(

            array(
                'name' => 'Ian Duncan',
                'gender' => 'Male',
                'phone' => '0711259995',
                'email' => 'ian@gmail.com',
                'id_no' => '30959853',
            ),

            array(
                'name' => 'Mary Hills',
                'gender' => 'Female',
                'phone' => '0752125985',
                'email' => 'mary@gmail.com',
                'id_no' => '25875215',
            ),

            array(
                'name' => 'Joel Austin',
                'gender' => 'Male',
                'phone' => '0751259535',
                'email' => 'joel@gmail.com',
                'id_no' => '78512568',
            ),

            array(
                'name' => 'Martha Agustin',
                'gender' => 'Female',
                'phone' => '0721548562',
                'email' => 'martha@gmail.com',
                'id_no' => '25123698',
            ),

            array(
                'name' => 'Michael Henry',
                'gender' => 'Male',
                'phone' => '0725421258',
                'email' => 'michael@gmail.com',
                'id_no' => '254210258',
            ),

            array(
                'name' => 'Judith Hilda',
                'gender' => 'Female',
                'phone' => '0752132658',
                'email' => 'judith@gmail.com',
                'id_no' => '25452126',
            ),

            array(
                'name' => 'Collins Davids',
                'gender' => 'Male',
                'phone' => '0751248521',
                'email' => 'collins@gmail.com',
                'id_no' => '25421586',
            ),

            array(
                'name' => 'Sharon Miles',
                'gender' => 'Female',
                'phone' => '0751248521',
                'email' => 'sharon@gmail.com',
                'id_no' => '25421586',
            ),

            array(
                'name' => 'Harrison King',
                'gender' => 'Male',
                'phone' => '0752158426',
                'email' => 'harrison@gmail.com',
                'id_no' => '25417899',
            ),

            array(
                'name' => 'Ethredah Chao',
                'gender' => 'Female',
                'phone' => '0712596258',
                'email' => 'ethy@gmail.com',
                'id_no' => '21548952',
            ),

        );

        $data3 = array(
            'username' => 'dev001',
            'password' => 'EV5gy2pQPDhC4H&fg3$5qzWL*9P4=D2K8ta9x&Qr2'
        );

        $this->db->insert_batch('tbl_due_listing', $data);

        $this->db->insert_batch('tbl_profiles', $data2);

        $this->db->insert_batch('tbl_users', $data3);

        redirect(base_url());
    }
}
