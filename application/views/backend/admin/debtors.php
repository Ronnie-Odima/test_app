<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo base_url() ;?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Debtors</span>
                </li>
            </ul>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue-chambray" href="<?php echo base_url('admin/customers')?>">
                    <div class="visual" style="height: 90px; width: 100px; margin-bottom: 30px;">
                        <img src="<?php echo base_url('images/customer.png')?>" class="img-responsive" style="padding-left: 10px;">
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?php echo count($customers);?>">0</span></div><br>
                        <div class="desc">Customer (s)</div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue-chambray" href="<?php echo base_url('admin/debtors')?>">
                    <div class="visual" style="height: 90px; width: 100px; margin-bottom: 30px;">
                        <img src="<?php echo base_url('images/debt.png')?>" class="img-responsive" style="padding-left: 10px;">
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?php echo count($debtors);?>">0</span></div><br>
                        <div class="desc">Debtor (s)</div>
                    </div>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box white">
                    <div class="portlet-title">
                        <div class="caption">
                            <div class="icon">
                                <i class="glyphicon glyphicon-bookmark"></i>
                                &nbsp; Debtors
                            </div>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Gender </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Id No. </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $z = 1;
                            foreach ($debtors as $debtor):
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $z++ ;?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/view_customer/'.$debtor->c_id)?>">
                                            <?php
                                            $name = $this->db->get_where('tbl_profiles',array('id'=>$debtor->c_id))->row('name');
                                            echo $name;
                                            ;?>
                                        </a>

                                    </td>
                                    <td>
                                        <?php
                                        $gender = $this->db->get_where('tbl_profiles',array('id'=>$debtor->c_id))->row('gender');
                                        echo $gender;
                                        ;?>
                                    </td>
                                    <td>
                                        <?php
                                        $phone = $this->db->get_where('tbl_profiles',array('id'=>$debtor->c_id))->row('phone');
                                        echo $phone;
                                        ;?>
                                    </td>
                                    <td>
                                        <?php
                                        $email = $this->db->get_where('tbl_profiles',array('id'=>$debtor->c_id))->row('email');
                                        echo $email;
                                        ;?>
                                    </td>
                                    <td>
                                        <?php
                                        $id_no = $this->db->get_where('tbl_profiles',array('id'=>$debtor->c_id))->row('id_no');
                                        echo $id_no;
                                        ;?>
                                    </td>
                                </tr>
                            <?php endforeach ; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>