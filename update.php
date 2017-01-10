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
							<span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Update Party
						  </div>

					</div>
						<div class="widget-body">

			  <form action="form.php" method="post" enctype="multipart/form-data" class="form-horizontal no-margin" >
				<div class="control-group">
				  <label class="control-label">
					Name
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="text" name="name" value="Party Name">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" >
					Contact
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="number" name="contact" value="017123123123">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">
					Balance
				  </label>
				  <div class="controls controls-row">
					<input class="span12" type="text" name="blance" value="+30000">
				  </div>
				</div>
                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info pull-right">
                        Update
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