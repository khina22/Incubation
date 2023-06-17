<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview" id="dashboard">
                <a href="/dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @if(strpos(strtolower(session('user_details')['role_name']),'admin')!==false)
                <li class="treeview bg-black-active" id="master_management">
                    <a href="#">
                        <i class="fa fa-database"></i>
                        <span>Master Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/master/status_master"><i class="fa fa-angle-double-right"></i> Status Master</a></li>
                        <li><a href="/master/department_master"><i class="fa fa-angle-double-right"></i> Department</a></li>
                        <li><a href="/master/facilities_master"><i class="fa fa-angle-double-right"></i> Facility Master</a></li>
                        <li><a href="/master/reason_master"><i class="fa fa-angle-double-right"></i> Reason Master</a></li>
                        <li><a href="/master/role_master"><i class="fa fa-angle-double-right"></i> Role Master</a></li>
                        <li><a href="/master/program_master"><i class="fa fa-angle-double-right"></i> Program Master</a></li>
                        <li><a href="/master/approval_user"><i class="fa fa-angle-double-right"></i>User Management</a></li>
                    </ul>
                </li>
            @endif
            @if(strpos(strtolower(session('user_details')['role_name']),'student')!==false)
                <li><a href="/workflow/apply"><i class="fa fa-angle-double-right"></i> Apply for NDC</a></li>
            @endif
        </ul>
    </section>
</aside>