@include('layouts.header');

<!-- BEGIN: Content-->
<div class="app-content content todo-application">
    <div class="content-overlay"></div>
    <section class="app-user-list">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div style="background-color:blue; text-align:center;" class="card">
                    <!-- <div class="card-body d-flex align-items-center justify-content-between"> -->
                    <!-- <div> -->
                    <!-- <h5 style="color:white; white-space:nowrap;" class="fw-bolder mb-75">Development Consulting</h5> -->
                    <!-- <span>Total Users</span> -->
                    <!-- </div> -->
                    <!-- <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <i data-feather="user" class="font-medium-4"></i>
                                </span>
                            </div> -->
                    <!-- </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div style="background-color:green; text-align:center;" class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h5 style="color:white; white-space:nowrap;" class="fw-bolder mb-75">Health System Advisory</h5> -->
                    <!-- <span>Total Users</span> -->
                    <!-- </div> -->
                    <!-- <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <i data-feather="user" class="font-medium-4"></i>
                                </span>
                            </div> -->
                    <!-- </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div style="background-color:orange; text-align:center;" class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h5 style="color:white; white-space:nowrap;" class="fw-bolder mb-75">Digital Health Research</h5> -->
                    <!-- <span>Total Users</span> -->
                    <!-- </div> -->
                    <!-- <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <i data-feather="user" class="font-medium-4"></i>
                                </span>
                            </div> -->
                    <!-- </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div style="background-color:red; text-align:center;" class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h5 style="color:white; white-space:nowrap;" class="fw-bolder mb-75">Project Implementation</h5> -->
                    <!-- <span>Total Users</span> -->
                    <!-- </div> -->
                    <!-- <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <i data-feather="user" class="font-medium-4"></i>
                                </span>
                            </div> -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
    </section>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content todo-sidebar">
                    <div class="todo-app-menu">
                        <div class="add-task">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#new-task-modal">
                                Create Project
                            </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-filters">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">All Projects</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="star" class="font-medium-3 me-50"></i> <span class="align-middle">Ongoing</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="check" class="font-medium-3 me-50"></i> <span class="align-middle">Completed</span>
                                </a>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="alert-circle" class="font-medium-3 me-50"></i> <span class="align-middle">Terminated</span>
                                </a>
                                <!-- <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="trash" class="font-medium-3 me-50"></i> <span class="align-middle">Deleted</span>
                                </a> -->
                            </div>
                            <div class="mt-3 px-2 d-flex justify-content-between">
                                <h6 class="section-label mb-1">Focus areas</h6>
                                <i data-feather="plus" class="cursor-pointer"></i>
                            </div>
                            <div class="list-group list-group-labels">
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-primary me-1"></span>Economic Development
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-success me-1"></span>Health
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-warning me-1"></span>Education
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger me-1"></span>Food Security
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger me-1"></span>Supply Chain
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger me-1"></span>Agri Business
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger me-1"></span>Water & sanitation
                                </a>


                                <br><br>

                                <!-- <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-info me-1"></span>Update
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <div class="todo-app-list">
                        <!-- Todo search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ms-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    <input type="text" class="form-control" id="todo-search" placeholder="Search project" aria-label="Search..." aria-describedby="todo-search" />
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle hide-arrow me-1" id="todoActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="more-vertical" class="font-medium-2 text-body"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="todoActions">
                                    <a class="dropdown-item sort-asc" href="#">Sort A - Z</a>
                                    <a class="dropdown-item sort-desc" href="#">Sort Z - A</a>
                                    <a class="dropdown-item" href="#">Sort Team Leads</a>
                                    <a class="dropdown-item" href="#">Sort Start Date</a>
                                    <a class="dropdown-item" href="#">Sort End date</a>
                                    <a class="dropdown-item" href="#">Sort by </a>

                                </div>
                            </div>
                        </div>
                        <!-- Todo search ends -->

                        <!-- Project Table  -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Client</th>
                                        <th>Teams</th>
                                        <th>Project Status</th>
                                        <th>Focus Area</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <!-- <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" /> -->
                                            <span class="fw-bold">Malaria Project</span>
                                        </td>
                                        <td>USAID</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Numa">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Ola">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="John">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning waves-effect">Status</button>
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                    <a class="dropdown-item" href="#">Completed</a>
                                                    <a class="dropdown-item" href="#">Terminated</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Proposal Submitted</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Health
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        <td>
                                            <!-- <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" /> -->
                                            <span class="fw-bold">Malaria Project</span>
                                        </td>
                                        <td>USAID</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Numa">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Ola">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="John">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning waves-effect">Status</button>
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                    <a class="dropdown-item" href="#">Completed</a>
                                                    <a class="dropdown-item" href="#">Terminated</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Proposal Submitted</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Health
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!-- <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" /> -->
                                            <span class="fw-bold">Malaria Project</span>
                                        </td>
                                        <td>USAID</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Numa">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Ola">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="John">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning waves-effect">Status</button>
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                    <a class="dropdown-item" href="#">Completed</a>
                                                    <a class="dropdown-item" href="#">Terminated</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Proposal Submitted</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Health
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        <td>
                                            <!-- <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" /> -->
                                            <span class="fw-bold">Malaria Project</span>
                                        </td>
                                        <td>USAID</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Numa">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Ola">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="John">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning waves-effect">Status</button>
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                    <a class="dropdown-item" href="#">Completed</a>
                                                    <a class="dropdown-item" href="#">Terminated</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Proposal Submitted</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Health
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!-- <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" /> -->
                                            <span class="fw-bold">Malaria Project</span>
                                        </td>
                                        <td>USAID</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Numa">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Ola">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="John">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning waves-effect">Status</button>
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                    <a class="dropdown-item" href="#">Completed</a>
                                                    <a class="dropdown-item" href="#">Terminated</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Proposal Submitted</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Health
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        <td>
                                            <!-- <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" /> -->
                                            <span class="fw-bold">Malaria Project</span>
                                        </td>
                                        <td>USAID</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Numa">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Ola">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="John">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning waves-effect">Status</button>
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                    <a class="dropdown-item" href="#">Completed</a>
                                                    <a class="dropdown-item" href="#">Terminated</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Proposal Submitted</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Health
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        <td>
                                            <!-- <img src="../../../app-assets/images/icons/angular.svg" class="me-75" height="20" width="20" alt="Angular" /> -->
                                            <span class="fw-bold">Malaria Project</span>
                                        </td>
                                        <td>USAID</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Numa">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Ola">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="John">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-warning waves-effect">Status</button>
                                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                    <a class="dropdown-item" href="#">Ongoing</a>
                                                    <a class="dropdown-item" href="#">Completed</a>
                                                    <a class="dropdown-item" href="#">Terminated</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Proposal Submitted</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            Health
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                  
                                    <!-- <tr>
                                        <td>
                                            <img src="../../../app-assets/images/icons/vuejs.svg" class="me-75" height="20" width="20" alt="Vuejs" />
                                            <span class="fw-bold">Vuejs Project</span>
                                        </td>
                                        <td>Jack Obes</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="../../../app-assets/images/icons/bootstrap.svg" class="me-75" height="20" width="20" alt="Bootstrap" />
                                            <span class="fw-bold">Bootstrap Project</span>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Alberto Glotzbach">
                                                    <img src="../../../app-assets/images/portrait/small/avatar.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <!-- Project Table  -->


                        <!-- Todo List starts -->
                        <!-- <div class="todo-task-list-wrapper list-group">
                            <ul class="todo-task-list media-list" id="todo-task-list">
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                    <label class="form-check-label" for="customCheck1"></label>
                                                </div>
                                                <span class="todo-title">Fix Responsiveness for new structure ????</span>
                                            </div>
                                        </div> -->
                        <!-- <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-primary">Team</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 08</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2" />
                                                    <label class="form-check-label" for="customCheck2"></label>
                                                </div>
                                                <span class="todo-title">Plan a party for development team ????</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-primary">Team</span>
                                                <span class="badge rounded-pill badge-light-danger">High</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 30</small>
                                            <div class="avatar bg-light-warning">
                                                <div class="avatar-content">MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck3" />
                                                    <label class="form-check-label" for="customCheck3"></label>
                                                </div>
                                                <span class="todo-title">Hire 5 new Fresher or Experienced, frontend and backend developers </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-info">Update</span>
                                                <span class="badge rounded-pill badge-light-warning">Medium</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-5.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4" checked />
                                                    <label class="form-check-label" for="customCheck4"></label>
                                                </div>
                                                <span class="todo-title">Skype Tommy for project status & report</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-danger">High</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 18</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-8.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck5" />
                                                    <label class="form-check-label" for="customCheck5"></label>
                                                </div>
                                                <span class="todo-title">Send PPT with real-time reports</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-warning">Medium</span>
                                                <span class="badge rounded-pill badge-light-success">Low</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 22</small>
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">LM</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck6" />
                                                    <label class="form-check-label" for="customCheck6"></label>
                                                </div>
                                                <span class="todo-title">Submit quotation for Abid's ecommerce website and admin project </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-primary">Team</span>
                                                <span class="badge rounded-pill badge-light-success">Low</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 24</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck7" checked />
                                                    <label class="form-check-label" for="customCheck7"></label>
                                                </div>
                                                <span class="todo-title">Reminder to mail clients for holidays</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-primary">Team</span>
                                                <span class="badge rounded-pill badge-light-warning">Medium</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 27</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck8" />
                                                    <label class="form-check-label" for="customCheck8"></label>
                                                </div>
                                                <span class="todo-title">Refactor Code and fix the bugs and test it on server </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-success">Low</span>
                                                <span class="badge rounded-pill badge-light-warning">Medium</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 27</small>
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">KL</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck9" />
                                                    <label class="form-check-label" for="customCheck9"></label>
                                                </div>
                                                <span class="todo-title">List out all the SEO resources and send it to new SEO team. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted me-1">Sept 15</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck10" />
                                                    <label class="form-check-label" for="customCheck10"></label>
                                                </div>
                                                <span class="todo-title">Finish documentation and make it live</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-success">Low</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-7.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck11" checked />
                                                    <label class="form-check-label" for="customCheck11"></label>
                                                </div>
                                                <span class="todo-title">Pick up Nats from her school and drop at dance class???? </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted me-1">Aug 17</small>
                                            <div class="avatar bg-light-primary">
                                                <div class="avatar-content">PK</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck12" />
                                                    <label class="form-check-label" for="customCheck12"></label>
                                                </div>
                                                <span class="todo-title">Plan new dashboard design with design team for Google app store. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-info">Update</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Sept 02</small>
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">LO</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck13" />
                                                    <label class="form-check-label" for="customCheck13"></label>
                                                </div>
                                                <span class="todo-title">Conduct a mini awareness meeting regarding health care. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted me-1">Sept 05</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-17.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck14" checked />
                                                    <label class="form-check-label" for="customCheck14"></label>
                                                </div>
                                                <span class="todo-title">Test functionality of apps developed by dev team for enhancements. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-danger">High</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Sept 07</small>
                                            <div class="avatar bg-light-info">
                                                <div class="avatar-content">VB</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck15" />
                                                    <label class="form-check-label" for="customCheck15"></label>
                                                </div>
                                                <span class="todo-title">Answer the support tickets and close completed tickets. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-primary">Frontend</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Sept 12</small>
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">SW</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck16" />
                                                    <label class="form-check-label" for="customCheck16"></label>
                                                </div>
                                                <span class="todo-title">Meet Jane and ask for coffee ??????</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper me-1">
                                                <span class="badge rounded-pill badge-light-info">Update</span>
                                                <span class="badge rounded-pill badge-light-warning">Medium</span>
                                                <span class="badge rounded-pill badge-light-success">Low</span>
                                            </div>
                                            <small class="text-nowrap text-muted me-1">Aug 10</small>
                                            <div class="avatar">
                                                <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-2.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="no-results">
                                <h5>No Items Found</h5>
                            </div> -->
                    </div>
                    <!-- Todo List ends -->
                </div>

                <!-- Right Sidebar starts -->
                <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <form id="form-modal-todo" class="todo-modal needs-validation" novalidate onsubmit="return false">
                                <div class="modal-header align-items-center mb-1">
                                    <h5>Add Project</h5>
                                    <div class="todo-item-action d-flex align-items-center justify-content-between ms-auto">
                                        <span class="todo-item-favorite cursor-pointer me-75"><i data-feather="star" class="font-medium-2"></i></span>
                                        <i data-feather="x" class="cursor-pointer" data-bs-dismiss="modal" stroke-width="3"></i>
                                    </div>
                                </div>
                                <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                    <div class="action-tags">
                                        <div class="mb-1">
                                            <label for="todoTitleAdd" class="form-label">Project name</label>
                                            <input type="text" id="todoTitleAdd" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Project Name" />
                                        </div>
                                        <div class="mb-1 position-relative">
                                            <label for="team-leader" class="form-label d-block">Project Team Leader</label>
                                            <select class="select2 form-select" id="team-leader" name="team-leader">
                                                <option data-img="../../../app-assets/images/portrait/small/avatar.jpg" value="Halima" selected>
                                                    Halima
                                                </option>
                                                <option data-img="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-1.jpg" value="Chandler Bing">
                                                    Jessy
                                                </option>
                                                <option data-img="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-4.jpg" value="Ross Geller">
                                                    Julius
                                                </option>

                                            </select>
                                        </div>
                                        <div class="mb-1 position-relative">
                                            <label for="task-assigned" class="form-label d-block">Team Members</label>
                                            <select class="select2 form-select" id="task-assigned" name="task-assigned" multiple="multiple">
                                                <option data-img="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-3.jpg" value="Phill Buffer" selected>
                                                    Halima
                                                </option>
                                                <option data-img="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-1.jpg" value="Chandler Bing">
                                                    jessy
                                                </option>
                                                <option data-img="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-4.jpg" value="Ross Geller">
                                                    Julius
                                                </option>

                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label for="task-due-date" class="form-label">Due Date</label>
                                            <input type="text" class="form-control task-due-date" id="task-due-date" name="task-due-date" />
                                        </div>
                                        <div class="mb-1">
                                            <label for="task-tag" class="form-label d-block">Focus Areas</label>
                                            <select class="form-select task-tag" id="task-tag" name="task-tag" multiple="multiple">
                                                <option value="Team">Development Consulting</option>
                                                <option value="Low">Health System Advisory</option>
                                                <option value="Medium">Digital Health Research</option>
                                                <option value="High">Project Implementation</option>
                                                <option value="Update">Update</option>
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Description</label>
                                            <div id="task-desc" class="border-bottom-0" data-placeholder="Write Your Description"></div>
                                            <div class="d-flex justify-content-end desc-toolbar border-top-0">
                                                <span class="ql-formats me-0">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-align"></button>
                                                    <button class="ql-link"></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <button type="submit" class="btn btn-primary d-none add-todo-item me-1">Add</button>
                                        <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                        <button type="button" class="btn btn-primary d-none update-btn update-todo-item me-1">Update</button>
                                        <button type="button" class="btn btn-outline-danger update-btn d-none" data-bs-dismiss="modal">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar ends -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- END: Content-->

<!-- BEGIN: Page Vendor JS-->
<!-- <script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/editors/quill/katex.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/editors/quill/quill.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/extensions/dragula.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ ENV('APP_URL') }}/app-assets/vendors/js/extensions/toastr.min.js"></script> -->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="{{ ENV('APP_URL') }}/app-assets/js/scripts/pages/app-todo.js"></script> -->
<!-- END: Page JS-->


@include('layouts.footer');