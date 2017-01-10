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
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Party detais
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                      <tr>
                        <th class="span3">Name</th>
                        <th class="span2">Contact</th>
                        <th class="span7">Address</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td >Bhai Brothers LTD</td>
                        <td>+8801711123123</td>
                        <td>House#15, Kazitula, Sylhet</td>
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
							<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Party Balance
						  </div>

					</div>
						<div class="widget-body">
						<div class="row-fluid">
						<div class="page-header">
				<ul class="stats">
				<li class="color-first hidden-phone">
                  <span class="fs1" aria-hidden="true" data-icon=""></span>
                  <div class="details">
                    <span class="big">30000</span>
                    <span>Credit</span>
                  </div>
                </li>
				</ul>
						</div>
						</div>
						</div>
					</div>
				</div>


			</div>
			<div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Invoice list
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                      <tr>
                        <th class="span1" style="text-align: center;">SL.</th>
                        <th class="span2">Purchase Date</th>
                        <th class="span2" style="text-align: center;">Memo</th>
                        <th class="span2" style="text-align: center;">Billed</th>
                        <th class="span2" style="text-align: center;">Paid</th>
                        <th class="span2" style="text-align: center;">Outstanding</th>
                        <th class="span1"  style="text-align: center;">Payment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="text-align: center;">1</td>
                        <td>2017-01-06</td>
                        <td style="text-align: center;">#18870</td>
                        <td style="text-align: center;">40000</td>
                        <td style="text-align: center;">10000</a></td>
                        <td style="text-align: center;">30000</td>
                        <td style="text-align: center;">
						  <a href="#myModal" role="button" class="btn btn-small btn-success btn-block" data-toggle="modal" data-original-title="">
							Pay
						  </a>

						  <!-- Modal -->
						  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								×
							  </button>
							  <h4 id="myModalLabel">
								Payment
							  </h4>
							</div>
							<div class="modal-body">
				<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal no-margin" >
				<div class="control-group">
				  <label class="control-label">
					Amount
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="text" name="name">
				  </div>
				</div>

                  
							</div>
							<div class="modal-footer">
							  <button class="btn" data-dismiss="modal" aria-hidden="true">
								Close
							  </button>
							  <button type="submit" class="btn btn-primary">
								Save changes
							  </button>
							  </form>
							</div>
						  </div>
						</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

			</div>
	</div>


</div>
</div>
<?php include 'lib/footer.php';?>