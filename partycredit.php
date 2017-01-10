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
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Party Credit
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                      <tr>
                        <th class="span1" style="text-align: center;">SL.</th>
                        <th class="span2">Party Name</th>
                        <th class="span2" style="text-align: center;">Credit Date</th>
                        <th class="span2" style="text-align: center;">Credit Amount</th>
                        <th class="span2" style="text-align: center;">Paid Amount</th>
                        <th class="span1" style="text-align: center;">Method</th>
                        <th class="span2">Remarks</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="text-align: center;">1</td>
                        <td>Bhai Brothers LTD</td>
                        <td style="text-align: center;">11 Dec 2016</td>
                        <td style="text-align: center;">৳ 2000</a></td>
                        <td style="text-align: center;">৳ 5000</a></td>
                        <td style="text-align: center;">Cash</a></td>
                        <td>Payment before new year</a></td>
                      </tr>
                      <tr>
                        <td style="text-align: center;">2</td>
                        <td>Hanger</td>
                        <td style="text-align: center;">11 Dec 2016</td>
                        <td style="text-align: center;">৳ 1000</a></td>
                        <td style="text-align: center;">৳ 1000</a></td>
                        <td style="text-align: center;">Cash</a></td>
                        <td>Payment before new year</a></td>
                      </tr>
					  <tr>
                        <td style="text-align: center;">3</td>
                        <td>Amics</td>
                        <td style="text-align: center;">26 Dec 2016</td>
                        <td style="text-align: center;">৳ 50000</a></td>
                        <td style="text-align: center;">৳ 100000</a></td>
                        <td style="text-align: center;">Bank Deposit</a></td>
                        <td>New mouse shipping</a></td>
                      </tr>
 
                      <tr>
                        <td style="text-align: center;">4</td>
                        <td>Chick Chki</td>
                        <td style="text-align: center;">01 Dec 2017</td>
                        <td style="text-align: center;">৳ 2500</a></td>
                        <td style="text-align: center;">৳ 5000</a></td>
                        <td style="text-align: center;">Cash</a></td>
                         <td>New stuff for new year</a></td>
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
							<span class="fs1" aria-hidden="true" data-icon=""></span> Add Credit
						  </div>

					</div>
				<div class="widget-body">
			  <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
				<div class="control-group">
				  <label class="control-label" for="party">
					Party Name
				  </label>
				  <div class="controls">
					<select class="span12" name="category" id="party">
					<option value="">Party...</option>
					<option value="">Bhai Brothers LTD</option>
					<option value="">Hnager Corp</option>
					</select>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label">
					Credit Amount
				  </label>
				  <div class="controls">
					<input class="span12" name="memo" placeholder="" type="text">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">
					Paid Amount
				  </label>
				  <div class="controls">
					<input class="span12" name="billed" placeholder="" type="text">
				  </div>
				</div>
	
					<div class="control-group">
                        <label class="control-label" for="from">Payment Date</label>
                        <div class="controls">
                            <input name="starting" id="starting" class="span12" type="text">
                        </div>
                    </div>
					<script>
                        $(function() {
                            $("#starting").datepicker();
                        });
                    </script>
				<div class="control-group">
				  <label class="control-label" for="party">
					Payment Method
				  </label>
				  <div class="controls">
					<select class="span12" name="category" id="party">
					<option value="">Method...</option>
					<option value="">Cash</option>
					<option value="">Bank Deposit</option>
					<option value="">AC Check</option>
					</select>
				  </div>
				</div>
				<div class="control-group">
                      <label class="control-label">
                        Remarks
                      </label>
                      <div class="controls">
                        <textarea class="input-block-level no-margin" style="height: 75px"></textarea>
                      </div>
                    </div>
                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                        Submit Credit
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