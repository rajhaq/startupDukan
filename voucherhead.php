<?php include 'lib/header.php';?>
<div class="container-fluid">
<div class="dashboard-wrapper">
<?php include 'navbar.php';?>	
	<div class="main-container">

	<div class="row-fluid">
    <div class="span8">
        <div class="widget no-margin">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Voucher Head
                </div>
            </div>
            <div class="widget-body">
                 
                <div id="dt_example" class="example_alt_pagination">
                    <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
                        <thead>
                            <tr>
                                <th style="width:70%;">Name</th>
                                <th class="center-align-text" style="width:10%;">Type</th>
                                <th class="center-align-text" style="width:10%;">Status</th>
                                <th class="center-align-text" style="width:10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="medtable">
                                                        <tr>
                                <td>Electric Bill</td>
                                <td class="center-align-text">Expense</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Cash Collection</td>
                                <td class="center-align-text">Income</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Personal Investment</td>
                                <td class="center-align-text">Income</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Sales Return</td>
                                <td class="center-align-text">Expense</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Sales</td>
                                <td class="center-align-text">Income</td>
                                <td class="center-align-text">Inactive</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Medicine Purchase</td>
                                <td class="center-align-text">Expense</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Employee Salary</td>
                                <td class="center-align-text">Expense</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Office Rent</td>
                                <td class="center-align-text">Expense</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                        <tr>
                                <td>Entertainment</td>
                                <td class="center-align-text">Expense</td>
                                <td class="center-align-text">Active</td>
                                <td class="hidden-phone center-align-text">
                                    <a  data-original-title="Edit" href="#"><i class="icon-edit"></i></a>
                                </td>                       
                            </tr>
                                                    </tbody>                    
                    </table>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span>Create Voucher Head
                </div>
            </div>
            <div class="widget-body">
                 <form class="form-horizontal no-margin" action="http://192.168.1.4/capsol/accounts/createledger.aspx" method="post">
                     <div class="control-group">
                         <label class="control-label">Ledger Name</label>
                         <div class="controls controls-row">
                             <input class="span12" type="text" placeholder="Maximum 255 Characters" name="ledgername" required="required" />
                             <input type="hidden" name="trigger" value="createledger" />
                         </div>
                     </div>
                     <div class="control-group">
                         <label class="control-label">Head Type</label>
                         <div class="controls controls-row">
                             <select class="span12" name="type" required="required">
                                 <option value="">Select</option>
                                 <option value="1">Income</option>
                                 <option value="2">Expense</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-actions no-margin">
                         <button type="submit" class="btn btn-info pull-right"> Create</button>
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