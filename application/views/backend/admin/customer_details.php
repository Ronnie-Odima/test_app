<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo base_url() ;?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Customer Details</span>
                </li>
            </ul>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box white">
                    <div class="portlet-title">
                        <div class="caption">
                            <div class="icon">
                                <i class="glyphicon glyphicon-bookmark"></i>
                                &nbsp; Customer Details
                            </div>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <?php foreach ($customer_details as $customer_detail) :?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Personal Details
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <tr>
                                            <th style="width: 25%;" class="text-primary">Name</th>
                                            <td><?php echo $customer_detail->name;?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-primary">Gender</th>
                                            <td><?php echo $customer_detail->gender;?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-primary">Email</th>
                                            <td><?php echo $customer_detail->email;?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-primary">Mobile number</th>
                                            <td><?php echo $customer_detail->phone;?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-primary">Id Number</th>
                                            <td><?php echo $customer_detail->id_no;?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Debt Report
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <tr>
                                            <th class="text-primary" style="width: 25%;">Amount Owed</th>
                                            <td>
                                                <?php
                                                    $total_amount = $this->db->get_where('tbl_due_listing',array('c_id'=>$customer_detail->id))->row('total_amount');
                                                    echo $total_amount;
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="text-primary">Amount Paid</th>
                                            <td>
                                                <?php
                                                $amount_paid = $this->db->get_where('tbl_due_listing',array('c_id'=>$customer_detail->id))->row('amount_paid');
                                                echo $amount_paid;
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="text-primary">Balance</th>
                                            <td>
                                                <?php

                                                echo $total_amount - $amount_paid;
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>