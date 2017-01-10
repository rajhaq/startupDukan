<?php include 'lib/header.php';?>
<div class="container-fluid">
<div class="dashboard-wrapper">
<?php include 'navbar.php';?>	
	<div class="main-container">


<div class="row-fluid">  
    <div class="span8">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    
                    <span class="fs1" aria-hidden="true" data-icon=""></span> Leger Head Report
                </div>
            </div>
            <div class="widget-body">
                                <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="span1">
							SL
                            </th>
                            <th>
							Head
                            </th>
                            <th style="text-align: right;">
							Amount
                            </th>
                        </tr>
                    </thead>
                    <tbody id="invtable">
						<tr>
                            <td style="text-align: center;">
                            01                                    
                            </td>
                            <td>
							Bkash
                            </td>
                            <td style="text-align: right;">
                               ৳ 500
							</td>
                        </tr>
						<tr>
                            <td style="text-align: center;">
                            02                                    
                            </td>
                            <td>
							Food
                            </td>
                            <td style="text-align: right;">
                               ৳ 500
							</td>
                        </tr>
						<tr>
                            <td style="text-align: center;">
                            03                                    
                            </td>
                            <td>
							Clothes
                            </td>
                            <td style="text-align: right;">
                               ৳ 23500
							</td>
                        </tr>
						<tr>
                            <td style="text-align: center;">
                            04                                    
                            </td>
                            <td>
							Cash
                            </td>
                            <td style="text-align: right;">
                               ৳ 2500
							</td>
                        </tr>
						
					</tbody>
                </table>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon=""></span> Ledger Head Filter
                </div>                   
            </div>                
            <div class="widget-body">
                <form class="form-horizontal no-margin">
                    <script>
                        $(function() {
                            $("#starting").datepicker();
                            $("#endingday").datepicker();
                        });
                    </script>
                    <div class="control-group">
                        <label class="control-label" for="from">From</label>
                        <div class="controls">
                            <input name="starting" id="starting" class="span12" placeholder="Select Starting Date" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="to">To</label>
                        <div class="controls">
                            <input name="endingday" id="endingday" class="span12" placeholder="Select Ending Date" type="text">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="employee">Head</label>
                        <div class="controls">
                            <select class="span12" name="employee" id="employee">
                                <option value="">Head...</option>
                                                                <option value="104">Clothes</option>
                                                                <option value="103">Food</option>
                                                                <option value="102">Bkash</option>
                                                                <option value="100">Cash</option>
                                                            </select>
                        </div>
                    </div>

                    <div class="form-actions no-margin">
                        <label class="btn btn-info pull-right" id="filter_button">Filter</label>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>

    </div>
</div>
	
	
	</div>


</div>
</div>
<?php include 'lib/footer.php';?>