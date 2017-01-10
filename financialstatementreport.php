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
                    
                    <!-- Sale/Invoice List -->
                    <span class="fs1" aria-hidden="true" data-icon=""></span> Financial Statement Report
                </div>
            </div>
            <div class="widget-body">
                <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                        <tr>
                            <th style="text-align: right;">
							Total Purchase
                            </th>
                            <th>
							50000000000
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">
							Total Income
                            </th>
                            <th>
							2450040
                            </th>
                        </tr>
                    </thead>

                </table>
				<div class="row-fluid">
				<div class="span6">
					<div class="widget">
						<div class="widget-header">
							<div class="title">
								<span class="fs1" aria-hidden="true" data-icon=""></span> Income Statement 
							</div>
						</div>
						<div class="widget-body">
							<table class="table table-bordered table-condensed no-margin">
								<thead>
									<tr>
										<th>Time</th>
										<th style="text-align: right;">Amount</th>
										<th>Purpose</th>
										<th>Employee</th>
									</tr>
								</thead>
								<tbody id="invtable">
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>


									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="widget">
						<div class="widget-header">
							<div class="title">
								<span class="fs1" aria-hidden="true" data-icon=""></span> Expence Statement 
							</div>
						</div>
						<div class="widget-body">
							<table class="table table-bordered table-condensed no-margin">
								<thead>
									<tr>
										<th>Time</th>
										<th style="text-align: right;">Amount</th>
										<th>Purpose</th>
										<th>Notes</th>
										<th>Employee</th>
									</tr>
								</thead>
								<tbody id="invtable">
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales return 
										</td>
										<td>Sales return by Bhai Brothers</td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Purchase  
										</td>
										<td></td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											 Purchase  
										</td>
										<td></td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12-12-2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales return 
										</td>
										<td>Sales return by Bhai Brothers</td>
										<td>Exploria Solution</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
	</div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon=""></span> Financial Statement Filter
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