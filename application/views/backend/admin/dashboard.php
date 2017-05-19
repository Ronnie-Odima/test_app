<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo base_url() ;?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-md-12">
                <h4>
                    System statistics
                </h4>
            </div>
            <hr>
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
                <form id="search_customers" action="<?php echo base_url("admin/search_customers")?>" method="post">
                    <div class="portlet box grey-mint">
                        <div class="portlet-title">
                            <div class="caption">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-bookmark"></i>
                                    &nbsp; Search Customer
                                </div>
                            </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-md-9" style="margin-bottom: 15px;">
                                    <input type="text" class="form-control" name="content" placeholder="serach by Id or Mobile" required>
                                </div>

                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                        &nbsp;
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <table class="table table-responsive table-hover table-striped">
                    <tr id="search_results"></tr>
                </table>
            </div>
        </div>
    </div>
</div>