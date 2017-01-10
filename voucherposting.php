<?php include 'lib/header.php';?>
<div class="container-fluid">
<div class="dashboard-wrapper">
<?php include 'navbar.php';?>	
	<div class="main-container">


          <div class="row-fluid">
				<div class="span12">
					<div class="widget">
						<div class="widget-header">
							<div class="title">
								<span class="fs1" aria-hidden="true" data-icon=""></span>  Voucher Posting
							</div>
						</div>
						<div class="widget-body">
						<form class="form-horizontal">
							<div class="control-group">
								<label class="control-label">Type</label>
								<div class="controls controls-row">
									<select name="voucher" required="required" class="span12" autofocus="on">
										<option value="">Select</option>
										<option value="ci_">Income</option>
										<option value="co_">Expense</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Head</label>
								<div class="controls controls-row">
									<select class="span12" name="purpose" id="purpose" required="required">
										<option value="">Select</option>
																	<option value="8">
										Cash Collection (Income)                                </option>
																	<option value="9">
										Electric Bill (Expense)                                </option>
																	<option value="3">
										Employee Salary (Expense)                                </option>
																	<option value="1">
										Entertainment (Expense)                                </option>
																	<option value="4">
										Clothes Purchase (Expense)                                </option>
																	<option value="2">
										Office Rent (Expense)                                </option>
																	<option value="7">
										Personal Investment (Income)                                </option>
																	<option value="5">
										Sales (Income)                                </option>
																	<option value="6">
										Sales Return (Expense)                                </option>
																	</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Amount</label>
								<div class="controls controls-row">
									<input name="amount" class="input-block-level" id="amount" placeholder="Voucher Amount" required="required" type="text">
								</div>
							</div>
							<div class="control-group">
								<script> $(function() { $("#datepicker").datepicker(); }); </script>
								<label class="control-label">Date</label>
								<div class="controls">
									<input name="datepicker" id="datepicker" class="span12" placeholder="Voucher Date" value="2017-01-09" type="text">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="employee">Employee</label>
								<div class="controls">
									<select class="span12" name="userid" id="userid">
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
								<label class="control-label">Remarks</label>
								<div class="controls controls-row">
									<textarea class="span12" rows="6" name="notes"></textarea>
								</div>
							</div>
						<div class="form-actions no-margin">
						  <button type="submit" class="btn btn-info pull-right">
							Post Voucher
						  </button>
						  <div class="clearfix">
						  </div>
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