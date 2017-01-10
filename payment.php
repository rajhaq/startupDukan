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
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Payment list
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                      <tr>
                        <th class="span1" style="text-align: center;">SL.</th>
                        <th class="span2">Party Name</th>
                        <th class="span2" style="text-align: center;">Purchase Date</th>
                        <th class="span2" style="text-align: center;">Memo Number</th>
                        <th class="span2" style="text-align: center;">Billed</th>
                        <th class="span2" style="text-align: center;">Paid</th>
                        <th class="span2" style="text-align: center;">Outstanding</th>
                        <th class="span1"  style="text-align: center;">Payment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="text-align: center;">1</td>
                        <td>Bhai Brothers LTD</td>
                        <td style="text-align: center;">17 Dec 2016</td>
                        <td style="text-align: center;">#18870</td>
                        <td style="text-align: center;">৳ 
						<?php $number=10000; $number= number_format($number, 2, '.', ',');
						echo $number
						?></a></td>
                        <td style="text-align: center;">৳ 
						<?php $number=1000; $number= number_format($number, 2, '.', ',');
						echo $number
						?></a></td>
                        <td style="text-align: center;">৳ 
						<?php $number=9000; $number= number_format($number, 2, '.', ',');
						echo $number
						?></a></td>
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
								<hr2>Are You Sure</hr2>
								</div>

                  
							</div>
							<div class="modal-footer">
							  <button class="btn" data-dismiss="modal" aria-hidden="true">
								No
							  </button>
							  <button type="submit" class="btn btn-primary">
								Yes
							  </button>
							  </form>
							</div>
						  </div>
						</td>
                      </tr>
                      <tr>
                        <td style="text-align: center;">2</td>
                        <td>Hanger</td>
                        <td style="text-align: center;">29 Dec 2016</td>
                        <td style="text-align: center;">#1830</td>
                        <td style="text-align: center;">৳ 2000</a></td>
                        <td style="text-align: center;">৳ 1000</a></td>
                        <td style="text-align: center;">৳ 1000</a></td>
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
								<hr2>Are You Sure</hr2>
								</div>

                  
							</div>
							<div class="modal-footer">
							  <button class="btn" data-dismiss="modal" aria-hidden="true">
								No
							  </button>
							  <button type="submit" class="btn btn-primary">
								Yes
							  </button>
							  </form>
							</div>
						  </div>
						</td>
                      </tr>
					                       <tr>
                        <td style="text-align: center;">3</td>
                        <td>Amics</td>
                        <td style="text-align: center;">11 Dec 2016</td>
                        <td style="text-align: center;">#4009</td>
                        <td style="text-align: center;">৳ 50000</a></td>
                        <td style="text-align: center;">৳ 1000</a></td>
                        <td style="text-align: center;">৳ 49000</a></td>
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
								<hr2>Are You Sure</hr2>
								</div>

                  
							</div>
							<div class="modal-footer">
							  <button class="btn" data-dismiss="modal" aria-hidden="true">
								No
							  </button>
							  <button type="submit" class="btn btn-primary">
								Yes
							  </button>
							  </form>
							</div>
						  </div>
						</td>
                      </tr>
 
                      <tr>
                        <td style="text-align: center;">4</td>
                        <td>Chick Chki</td>
                        <td style="text-align: center;">12 Jan 2017</td>
                        <td style="text-align: center;">#180</td>
                        <td style="text-align: center;">৳ 2500</a></td>
                        <td style="text-align: center;">৳ 500</a></td>
                        <td style="text-align: center;">৳ 2000</a></td>
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
								<hr2>Are You Sure</hr2>
								</div>

                  
							</div>
							<div class="modal-footer">
							  <button class="btn" data-dismiss="modal" aria-hidden="true">
								No
							  </button>
							  <button type="submit" class="btn btn-primary">
								Yes
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
			<div class="span4">
					<div class="widget">
					<div class="widget-header">
						  <div class="title">
							<span class="fs1" aria-hidden="true" data-icon=""></span> Payment List Filter
						  </div>

					</div>
						<div class="widget-body">

						<form class="form-horizontal">
                      <div class="control-group">
                      <label class="control-label" for="cat">
                        Select Party
                      </label>
                      <div class="controls">
                        <select id="cat" class="span12">
                          <option value="">
                            Party Name...
                          </option>
                          <option value="#">
                            Bhai Brothers LTD
                          </option>
                          <option value="#">
                            Amics
                          </option>
                          <option value="#">
                            Hanger
                          </option>
                          <option value="#">
                            Chick Chik
                          </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                        Filter
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