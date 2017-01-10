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
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Party Report
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                      <tr>
                        <th class="span1" style="text-align: center;">SL.</th>
                        <th class="span4">Party Name</th>
                        <th class="span3" style="text-align: center;">Purchase</th>
                        <th class="span2" style="text-align: center;">Sold</th>
                        <th class="span2" style="text-align: center;">Remaining</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="text-align: center;">1</td>
                        <td>Bhai Brothers LTD</td>                        
						<td style="text-align: center;">৳ 
						<?php $number=12000; $number= number_format($number, 2, '.', ',');
						echo $number
						?></a></td>
                        <td style="text-align: center;">৳ 
						<?php $number=9000; $number= number_format($number, 2, '.', ',');
						echo $number
						?></a></td>
                        <td style="text-align: center;">৳ 
						<?php $number=3000; $number= number_format($number, 2, '.', ',');
						echo $number
						?></a></td>

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
							<span class="fs1" aria-hidden="true" data-icon=""></span> Party Report Filter
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
					
					<div class="control-group">
                        <label class="control-label" for="from">Starting Date</label>
                        <div class="controls">
                            <input name="starting" id="starting" class="span12" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="from">Ending Date</label>
                        <div class="controls">
                            <input name="ending" id="ending" class="span12" type="text">
                        </div>
                    </div>
					<script>
                        $(function() {
                            $("#starting").datepicker();
                            $("#ending").datepicker();
                        });
                    </script>

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