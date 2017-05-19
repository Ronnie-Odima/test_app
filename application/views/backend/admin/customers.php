<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo base_url() ;?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Customers</span>
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
                <div class="portlet box grey-mint">
                    <div class="portlet-title">
                        <div class="caption">
                            <div class="icon">
                                <i class="glyphicon glyphicon-bookmark"></i>
                                &nbsp; Customers
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
                            foreach ($customers as $customer):
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $z++ ;?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/view_customer/'.$customer->id)?>">
                                            <?php echo $customer->name ;?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $customer->gender ;?>
                                    </td>
                                    <td>
                                        <?php echo $customer->phone ;?>
                                    </td>
                                    <td>
                                        <?php echo $customer->email ;?>
                                    </td>
                                    <td>
                                        <?php echo $customer->id_no ;?>
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