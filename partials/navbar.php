<nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
    <div class="container">
        <a href="dashboard" class="navbar-brand">
            <span class="brand-text font-weight-light">eLeave | Simplifying Leave Applications</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">

            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
                <a href="dashboard" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    Employees
                </a>
            </li>
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Leave Applications</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="leave_applications?category=Pending" class="dropdown-item">Pending Approval </a></li>
                    <li><a href="leave_applications?category=Approved" class="dropdown-item">Approved </a></li>
                    <li><a href="leave_applications?category=Declined" class="dropdown-item">Declined </a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Reports</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="reports_employees" class="dropdown-item">Employees </a></li>
                    <li><a href="reports_applications?category=Pending" class="dropdown-item">Pending Approval </a></li>
                    <li><a href="reports_applications?category=Approved" class="dropdown-item">Approved </a></li>
                    <li><a href="reports_applications?category=Declined" class="dropdown-item">Declined </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">
                    <i class="fas fa-power-off"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>