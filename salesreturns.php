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
                    
                    <!-- Sale/Invoice List -->
                    <span class="fs1" aria-hidden="true" data-icon=""></span> Return List
                </div>
            </div>
            <div class="widget-body">
                                <table class="table table-bordered table-condensed table-striped no-margin">
                    <thead>
                        <tr>
                            <th>
							SL
                            </th>
                            <th>
							Date
                            </th>
                            <th>
							Item Name
                            </th>
                            <th>
							Party Name
                            </th>
                            <th style="text-align: right;">
							Amount
                            </th>
                        </tr>
                    </thead>
                    <tbody id="invtable">
						<tr>
                            <td>
                            01                                    
                            </td>
                            <td>
                            12-12-2016                                    
                            </td>
                            <td >
                                Tshirt                            
							</td> 
                            <td>
                               Bhai Brothers LTD                            
							</td>
                            <td style="text-align: right;">
                                5
								</td>
                        </tr>
						
						<tr>
                            <td>
                            02                                   
                            </td>
                            <td>
                            12-12-2016                                    
                            </td>
                            <td >
                                Tshirt                            
							</td> 
                            <td>
                               Amics                           
							</td>
                            <td style="text-align: right;">
                                1
								</td>
                        </tr>
						
						<tr>
                            <td>
                            03                                    
                            </td>
                            <td>
                            13-12-2016                                    
                            </td>
                            <td >
                                Tshirt                            
							</td> 
                            <td>
                               Bhai Brothers LTD                            
							</td>
                            <td style="text-align: right;">
                                1
								</td>
                        </tr>
						
						<tr>
                            <td>
                            04                                    
                            </td>
                            <td>
                            15-12-2016                                    
                            </td>
                            <td >
                                Tshirt                            
							</td> 
                            <td>
                               Bhai Brothers LTD                            
							</td>
                            <td style="text-align: right;">
                                1
								</td>
                        </tr>
						
					</tbody>
                </table>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon=""></span> Return List Filter
                </div>                   
            </div>                
            <div class="widget-body">
                <form class="form-horizontal no-margin">
                    <script>
                        $(function() {
                            $("#starting").datepicker();
                            $("#endingday").datepicker();
                        });
                    </script>
                    <div class="control-group">
                        <label class="control-label" for="from">From</label>
                        <div class="controls">
                            <input name="starting" id="starting" class="span12" placeholder="Select Starting Date" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="to">To</label>
                        <div class="controls">
                            <input name="endingday" id="endingday" class="span12" placeholder="Select Ending Date" type="text">
                        </div>
                    </div>
<!--                    <div class="control-group">
                        <label class="control-label" for="customer">Customer</label>
                        <div class="controls">
                            <input type="text" name="customer" id="customer" class="span12" placeholder="Customer Name" autocomplete="off" />
                        </div>
                    </div>-->
                    <div class="control-group">
                        <label class="control-label" for="employee">Employee</label>
                        <div class="controls">
                            <select class="span12" name="employee" id="employee">
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
                        <label class="control-label" for="group">Party</label>
                        <div class="controls">
                            <select id="status" class="span12" name="status">
                                <option value="">Party...</option>
                                <option value="0">Bhai Brothers LTD</option>
                                <option value="1">Amics</option>
                                <option value="2">The Hanger</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions no-margin">
                        <label class="btn btn-info pull-right" id="filter_button">Search</label>
                        <div class="clearfix"></div>
                    </div>
<!--                    <div class="no-margin span12">
                        <table class="table span12">
                            <thead>
                                <tr>
                                    <th colspan="4">Quick View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 25%;" class="center-align-text span12"><label style="min-height: 80px;" class="btn btn-info span12" onclick="get_sales(0)">This Running Month</label></td>
                                    <td style="width: 75%;" class="center-align-text span12"><label class="btn btn-success span12" onclick="get_sales(1)">Last <input type="number" value="2" id="numberofmonth" name="numberofmonth" /> Month </label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>-->
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
<!--        <div class="widget">
            <div class="widget-header">
                <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe0b5;"></span> Sale/Invoice List Information
                </div>
            </div>
            <div class="widget-body">
                <p>The list shows the <b style="color: red;">last 50,000 sales</b> made by all employees, Primarily the table loads all kind of sales made by the employees, you can always filter the sales from the right side bar.</p>
            </div>
        </div>-->
    </div>
</div>
	
	
	</div>


</div>
</div>
<?php include 'footer.php';?>