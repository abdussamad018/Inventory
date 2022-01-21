<?php
 $usercheck=Session::get('sess_role');
if($usercheck=="Sales Man"){?>
    <div class="sidebar-header">
            <div>
              <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">INVENTORY</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Sell</div>
              </a>
              <ul>
                <li> <a href="sell"><i class="bi bi-arrow-right-short"></i>New Sell</a>
                </li>
                <li> <a href="#"><i class="bi bi-arrow-right-short"></i>Manage Invoice</a>
                </li>
                <li> <a href="#"><i class="bi bi-arrow-right-short"></i>POS</a>
                </li>
              </ul>
            </li>
          </ul>
<?php }else{?>
<div class="sidebar-header">
            <div>
              <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">INVENTORY</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Sell</div>
              </a>
              <ul>
                <li> <a href="sell"><i class="bi bi-arrow-right-short"></i>New Sell</a>
                </li>
                <li> <a href="employeeManage.php"><i class="bi bi-arrow-right-short"></i>Manage Invoice</a>
                </li>
                <li> <a href="employeeDocument.php"><i class="bi bi-arrow-right-short"></i>POS</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Suite</div>
              </a>
              <ul>
                  <li> <a href="addbrand"><i class="bi bi-arrow-right-short"></i>Add Brand</a>
                  </li>
                <li> <a href="addcategori"><i class="bi bi-arrow-right-short"></i>Add Category</a>
                </li>
                  <li> <a href="addunit"><i class="bi bi-arrow-right-short"></i>Add Unit</a>
                  </li>
                <li> <a href="addproduct"><i class="bi bi-arrow-right-short"></i>Add Product</a>
                </li>
                <li> <a href="manageProduct"><i class="bi bi-arrow-right-short"></i>Manage Product</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-award"></i>
                </div>
                <div class="menu-title">Customer</div>
              </a>
              <ul>

                <li> <a href="addcustomer"><i class="bi bi-arrow-right-short"></i>Add Customer</a>
                </li>
                <li> <a href="managecustomer"><i class="bi bi-arrow-right-short"></i>Manage Customer</a>
                </li>
                <li> <a href="creditcustomer"><i class="bi bi-arrow-right-short"></i>Credit Customer</a>
                </li>
                <li> <a href="paidcustomer"><i class="bi bi-arrow-right-short"></i>Paid Customer</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-bag-check"></i>
                </div>
                <div class="menu-title">Supplier</div>
              </a>
              <ul>
                <li> <a href="addsupplier"><i class="bi bi-arrow-right-short"></i>Add Supplier</a>
                </li>
                <li> <a href="manageSupplier"><i class="bi bi-arrow-right-short"></i>Manage Supplier</a>
                </li>
                <li> <a href="addLeaveType.php"><i class="bi bi-arrow-right-short"></i>Supplier Ledger</a>
                </li>
                <li> <a href="leaveTypeManage.php"><i class="bi bi-arrow-right-short"></i>Supplier Actual ledger</a>
                </li>
                <li> <a href="leaveTypeManage.php"><i class="bi bi-arrow-right-short"></i>Supplier payment</a>
                </li>
                <li> <a href="leaveTypeManage.php"><i class="bi bi-arrow-right-short"></i>Supplier Details</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-bookmark-star"></i>
                </div>
                <div class="menu-title">Purchase</div>
              </a>
              <ul>
                <li> <a href="purchase"><i class="bi bi-arrow-right-short"></i>Add Purchase</a>
                </li>
                <li> <a href="managepurchase"><i class="bi bi-arrow-right-short"></i>Manage Purchase</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down"></i>
                </div>
                <div class="menu-title">Accounts</div>
              </a>
              <ul>
                <li> <a href="addSalary.php"><i class="bi bi-arrow-right-short"></i>Create Account</a>
                </li>
                <li> <a href="addSalaryType.php"><i class="bi bi-arrow-right-short"></i>Manage Account</a>
                </li>
                <li> <a href="salaryTypeManage.php"><i class="bi bi-arrow-right-short"></i>Payment</a>
                </li>
                <li> <a href="salaryTypeManage.php"><i class="bi bi-arrow-right-short"></i>Receipt</a>
                </li>
                <li> <a href="salaryTypeManage.php"><i class="bi bi-arrow-right-short"></i>Transaction</a>
                </li>
                <li> <a href="salaryTypeManage.php"><i class="bi bi-arrow-right-short"></i>Closing</a>
                </li>
                <li> <a href="salaryTypeManage.php"><i class="bi bi-arrow-right-short"></i>Account Report</a>
                </li>
              </ul>
            </li>
             <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-cloud-arrow-down"></i>
                </div>
                <div class="menu-title">Stock</div>
              </a>
              <ul>
                <li> <a href="attendanceReport.php"><i class="bi bi-arrow-right-short"></i>Stock Report</a>
                </li>
                <li> <a href="salaryReport.php"><i class="bi bi-arrow-right-short"></i>Supplier Wise</a>
                </li>
                <li> <a href="payslipReport.php"><i class="bi bi-arrow-right-short"></i>Product Wise</a>
                </li>
              </ul>
            </li>

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-lock"></i>
                </div>
                <div class="menu-title">Report</div>
              </a>
              <ul>
                <li> <a href="addUser.php"><i class="bi bi-arrow-right-short"></i>Purchase Report</a>
                </li>
                <li> <a href="userManage.php"><i class="bi bi-arrow-right-short"></i>Sales Product Wise</a>
                </li>
                <li> <a href="userRole.php"><i class="bi bi-arrow-right-short"></i>Profit Invoice wise</a>
                </li>
                <li> <a href="userRole.php"><i class="bi bi-arrow-right-short"></i>Today's Sales</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet"></i>
                </div>
                <div class="menu-title">Expense</div>
              </a>
              <ul>
                <li> <a href="expense"><i class="bi bi-arrow-right-short"></i>Add Expense </a>
                </li>
                <li> <a href="expenseItem"><i class="bi bi-arrow-right-short"></i>Expense Item </a>
                </li>
                <li> <a href="Addition.php"><i class="bi bi-arrow-right-short"></i>Expense Statment </a>
                </li>
              </ul>
            </li>

              <li>
                  <a class="has-arrow" href="javascript:;">
                      <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet"></i>
                      </div>
                      <div class="menu-title">User</div>
                  </a>
                  <ul>
                      <li> <a href="UserRole"><i class="bi bi-arrow-right-short"></i>Add User Role </a>
                      </li>
                      <li> <a href="user"><i class="bi bi-arrow-right-short"></i>Add User </a>
                      </li>
                      <li> <a href="manageUser"><i class="bi bi-arrow-right-short"></i>Manage User </a>
                      </li>
                  </ul>
              </li>


            <li>
              <a href="#">
                <div class="parent-icon"><i class="bi bi-exclamation-triangle"></i>
                </div>
                <div class="menu-title">FAQ</div>
              </a>
            </li>


            <li>
              <a href="#" target="_blank">
                <div class="parent-icon"><i class="bi bi-file-earmark-code"></i>
                </div>
                <div class="menu-title">Documentation</div>
              </a>
            </li>
            <li>
              <a href="message.php">
                <div class="parent-icon"><i class="bi bi-headset"></i>
                </div>
                <div class="menu-title">Support</div>
              </a>
            </li>
          </ul>
<?php }?>


