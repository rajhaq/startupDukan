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
							<span class="fs1" aria-hidden="true" data-icon=""></span> Purchase
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
                        <label class="control-label" for="from">Purchase Date</label>
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
				  <label class="control-label">
					Party Memo Number
				  </label>
				  <div class="controls">
					<input class="span12" name="memo" placeholder="" type="text">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">
					Billed Amount
				  </label>
				  <div class="controls">
					<input class="span12" name="billed" placeholder="" type="text">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">
					Paid Amount
				  </label>
				  <div class="controls controls-row">
					<input class="span12" name="paid" placeholder="" type="text">
				  </div>
				</div>
				<div class="control-group">
				<label class="control-label">
					Number Of Item
				  </label>
				  <div class="controls controls-row">
					<input class="span12" name="items" placeholder="" type="text">
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
                        Submit Purchase Order
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