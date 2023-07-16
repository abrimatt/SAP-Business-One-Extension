<ul class="metismenu" id="menu-bar">
    <li class="menu-title">Navigation</li>

    <li>
        <a href="/">
            <i data-feather="home"></i>
            <span class="badge badge-success float-right">1</span>
            <span> Dashboard </span>
        </a>
    </li>
    <li class="menu-title">Apps</li>
    <li>
        <a href="/apps/calendar">
            <i data-feather="calendar"></i>
            <span> Calendar </span>
        </a>
    </li>
    

    <li>
        <a href="javascript: void(0);">
            <i data-feather="briefcase"></i>
            <span> Sales </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/orders">Orders</a>
            </li>
            <li>
                <a href="/invoices">Invoices</a>
            </li>
            <li>
                <a href="/payments/">Receivables</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i data-feather="briefcase"></i>
            <span> Procurement </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/purchaseorders">Purchase Orders</a>
            </li>
            <li>
                <a href="/grpos">GRPOs</a>
            </li>
            <li>
                <a href="/apinvoices">AP Invoices</a>
            </li>
            <li>
                <a href="/outgoingpayments/">Payables</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i data-feather="briefcase"></i>
            <span> Stock Transactions </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/goodsissues">Goods Issue</a>
            </li>
            <li>
                <a href="/goodsreceipts">Goods Receipts</a>
            </li>
            <li>
                <a href="/stocktransferrequests">Stock Stransfer Request</a>
            </li>
            <li>
                <a href="/stocktransfers/">Stock Stransfer</a>
            </li>
            <li>
                <a href="/stockcounts/">Stock Count</a>
            </li>
            <li>
                <a href="/stockpostings/">Stock Posting</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i data-feather="bookmark"></i>
            <span> Reports </span>
            <span class="menu-arrow"></span>
        </a>
    
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="<?php echo e(url('/items')); ?>">Stock Report</a>
            </li>
            <li>
                <a href="<?php echo e(url('/stockoverview')); ?>">Stock Overview</a>
            </li>
            <li>
                <a href="<?php echo e(url('/goodsIssue')); ?>">Stock Issued Report</a>
            </li>
            <li>
                <a href="<?php echo e(url('/goodsreceipt')); ?>">Stock Received Report</a>
            </li>
        </ul>
    </li>

    

    

    

    

    

    

    
</ul>
<?php /**PATH D:\Projects\Laravel\laravel\resources\views/layouts/shared/app-menu.blade.php ENDPATH**/ ?>