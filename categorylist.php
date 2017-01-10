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
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Category list
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                      <tr>
                        <th class="span1" style="text-align: center;">SL.</th>
                        <th class="span4">Category Name</th>
                        <th class="span5 "style="text-align: center;"> Item</th>
                        <th class="span2 "style="text-align: center;">Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="text-align: center;">1</td>
                        <td>Name one</td>
                        <td class="hidden-phone" style="text-align: center;">1</td>
                        <td class="hidden-phone" style="text-align: center;"><a href="#"><span class="fs1" aria-hidden="true" data-icon=""></span></a></td>
                      </tr>
                      <tr>
                        <td style="text-align: center;">2</td>
                        <td>Name two</td>
                        <td class="hidden-phone"style="text-align: center;">2</td>
                        <td class="hidden-phone"style="text-align: center;"><a href="#"><span class="fs1" aria-hidden="true" data-icon=""></span></a></td>
                      </tr>
                      <tr>
                        <td style="text-align: center;">3</td>
                        <td>Name three</td>
                        <td class="hidden-phone"style="text-align: center;">3</td>
                        <td class="hidden-phone"style="text-align: center;"><a href="#"><span class="fs1" aria-hidden="true" data-icon=""></span></a></td>
                      </tr>
                      <tr>
                        <td style="text-align: center;">4</td>
                        <td>Name four</td>
                        <td class="hidden-phone"style="text-align: center;">2</td>
                        <td class="hidden-phone"style="text-align: center;"><a href="#"><span class="fs1" aria-hidden="true" data-icon=""></span></a></td>
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
							<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Add Category
						  </div>

					</div>
						<div class="widget-body">
                 <form class="form-horizontal no-margin">
                    <div class="control-group">
                      <label class="control-label">
                        Category Name
                      </label>
                      <div class="controls controls-row">
                        <input class="span12" name="name" type="text">
                      </div>
                    </div>

                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                        Add
                      </button>
                      <div class="clearfix">
                      </div>
                    </div>
                  </form>						
				  </div>
					</div>
				</div>

				<div class="span4">
					<div class="widget">
					<div class="widget-header">
						  <div class="title">
							<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Filter Category
						  </div>

					</div>
						<div class="widget-body">
                 <form class="form-horizontal no-margin">
                    <div class="control-group">
                      <label class="control-label">
                        Search
                      </label>
                      <div class="controls controls-row">
                        <input class="span12" name="name" type="text">
                      </div>
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
<?php include 'lib/footer.php';?>