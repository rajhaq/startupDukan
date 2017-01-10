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
										<td>12 Dec 2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12 Dec 2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12 Dec 2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<td>12 Dec 2016</td>
										<td style="text-align: right;">৳ 844.00</td>
										<td>
											Sales : <a target="_blank" href="http://192.168.1.4/capsol/sales/details/538.aspx" data-original-title="">538</a>                            </td>
										<td>Exploria Solution</td>
									</tr>
									<tr>
										<th>Total</td>
										<th style="text-align: right;">৳ 3375.00</td>
										<th colspan=2></td>

									</tr>
									<tr>
									<td colspan="4" class="center-align-text">
										<a class="btn btn-primary" data-original-title="">
										Print
										</a>
									</td>

									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<div class="span4">
					<div class="widget">
						<div class="widget-header">
							<div class="title">
								<span class="fs1" aria-hidden="true" data-icon=""></span> Income Statement Filter
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
									<label class="control-label" for="employee">Employee</label>
									<div class="controls">
										<select class="span12" name="employee" id="employee">
											<option value="">Employee</option>
																			<option value="114">Abu Sarwar</option>
																			<option value="113">Tarek Ibne Showkot</option>
																			<option value="112">Amrit Dey</option>
																			<option value="111">Ahmed Hiron</option>
																			<option value="110">Harun Miah</option>
																			<option value="109">Ismail Ahmed</option>
																			<option value="108">Kibria Sarwar</option>
																			<option value="107">Tuhel Ahmed</option>
																			<option value="106">Sajeda Binte Saleh</option>
																			<option value="105">Imtiaj Ahmed Khan</option>
																			<option value="104">Exploria Solution</option>
																			<option value="103">Manik Sarkar</option>
																			<option value="102">Liton Ahmed</option>
																			<option value="100">Rajib Uddin</option>
																		</select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="group">Head </label>
									<div class="controls">
										<select id="status" class="span12" name="status">
											<option value="">Head...</option>
											<option value="identifier">Orders</option>
																			<option value="8">Cash Collection</option>
																			<option value="7">Personal Investment</option>
																			<option value="5">Sales</option>
																		</select>
									</div>
								</div>                   
								<div class="form-actions no-margin">
									<label class="btn btn-info pull-right" id="filter_button">Search</label>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

	</div>


</div>
</div>
<?php include 'lib/footer.php';?>