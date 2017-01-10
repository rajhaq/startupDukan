<?php
	$link=$_SERVER['REQUEST_URI'];
?>


      <div class="dashboard-wrapper">
        <div id="main-nav" class="hidden-phone hidden-tablet">
          <ul>
            <li>
              <a href="dashboard.php" <?php if($link=="/startup/dashboard.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></span> Dashboard
              </a>
            </li>
            <li>
              <a href="product.php" <?php if($link=="/startup/product.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Product
              </a>
					<ul>
						<li>
						  <a href="categorylist.php">Category List</a>
						</li>
						<li>
						  <a href="productlist.php">Product List</a>
						</li>
						<li>
						  <a href="stockreport.php">Stock Report</a>
						</li>
					</ul>
            </li>
            <li>
              <a href="party.php" <?php if($link=="/startup/party.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Party
              </a>
					<ul>
						<li>
						  <a href="partylist.php" >Party List</a>	
						</li>
						<li>
						  <a href="purchase.php" >Purchase</a>	
						</li>
						<li>
						  <a href="payment.php">Payment</a>
						</li>
						<li>
						  <a href="partycredit.php">Party Credit</a>
						</li>
						<li>
						  <a href="partyreport.php">Report</a>
						</li>
					</ul>			  
            </li>
            <li>
              <a href="accounts.php" <?php if($link=="/startup/accounts.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Accounts
              </a>
					<ul>
						<li>
						  <a href="voucherposting.php">Voucher Posting</a>
						</li>
						<li>
						  <a href="incomestatement.php">Income Statement</a>
						</li>
						<li>
						  <a href="expencestatement.php">Expense Statement</a>
						</li>
						<li>
						  <a href="voucherhead.php">Voucher Head</a>
						</li>
						<li>
						  <a href="voucherreport.php">Report</a>
						</li>
					</ul>			  
            </li>
            <li>
              <a href="sales.php" <?php if($link=="/startup/sales.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Sales
              </a>
					<ul>
						<li>
						  <a href="sales.php">Sales</a>
						</li>
						<li>
						  <a href="#">Item Sales</a>
						</li>
						<li>
						  <a href="#">Invoice Sales</a>
						</li>
						<li>
						  <a href="salesreturns.php">Sales Return</a>
						</li>
					</ul>			  
            </li>
            <li>
              <a href="settings.php" <?php if($link=="/startup/settings.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></span> Settings
              </a>
					<ul>
						<li>
						  <a href="#">Daily Backup</a>
						</li>
						<li>
						  <a href="#">Create User</a>
						</li>
					</ul>			  

            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        
