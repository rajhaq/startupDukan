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
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Stock Report
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                      <tr>
                        <th class="span4">Item</th>
                        <th class="span3">Category</th>
                        <th class="span2 "style="text-align: center;">Opening</th>
                        <th class="span1 "style="text-align: center;">In</th>
                        <th class="span1 "style="text-align: center;">Out</th>
                        <th class="span1"style="text-align: center;">Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Antonia Tshirt</td>
                        <td>Tshirt</td>
                        <td style="text-align: center;">10</td>
                        <td  style="text-align: center;">15</td>
                        <td  style="text-align: center;">12</td>
                        <td  style="text-align: center;">13</td>
                      </tr>
                      <tr>
                        <td>Antonia 2 Tshirt</td>
                        <td>Tshirt</td>
                        <td  style="text-align: center;">10</td>
                        <td  style="text-align: center;">10</td>
                        <td  style="text-align: center;">5</td>
                        <td  style="text-align: center;">15</td>
                      </tr>
                      <tr>
                        <td>Souljabi</td>
                        <td>Panjabi</td>
                        <td  style="text-align: center;">5</td>
                        <td  style="text-align: center;">5</td>
                        <td  style="text-align: center;">3</td>
                        <td  style="text-align: center;">7</td>
                      </tr>
                      <tr>
                        <td>Solarize</td>
                        <td>Panjabi</td>
                        <td  style="text-align: center;">5</td>
                        <td  style="text-align: center;">5</td>
                        <td  style="text-align: center;">4</td>
                        <td  style="text-align: center;">6</td>
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
							<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Choose Category
						  </div>

					</div>
						<div class="widget-body">
						<div class="controls">
						<form class="form-horizontal no-margin">
						<div class="control-group">
                        <select id="country" class="span12">
                          <option value="">
                            Category...
                          </option>
                          <option value="">
                            Tshirt
                          </option>
                          <option value="">
                            Panjabi
                          </option>
                          <option value="">
                            Shirt
                          </option>
                          <option value="">
                            Solarize
                          </option>
                        </select>
                      </div>

                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                        Go
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
</div>
<?php include 'lib/footer.php';?>