@include('layouts.header')

 <!-- BEGIN: Content-->
 <div class="app-content content kanban-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Kanban starts -->
                <section class="app-kanban-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <form class="add-new-board">
                                <label class="add-new-btn mb-2" for="add-new-board-input">
                                    <i class="align-middle" data-feather="plus"></i>
                                    <span class="align-middle">Add new</span>
                                </label>
                                <input type="text" class="form-control add-new-board-input mb-50" placeholder="Add Board Title" id="add-new-board-input" required />
                                <div class="mb-1 add-new-board-input">
                                    <button class="btn btn-primary btn-sm me-75">Add</button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm cancel-add-new">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Kanban content starts -->
                    <div class="kanban-wrapper"></div>
                    <!-- Kanban content ends -->
                    <!-- Kanban Sidebar starts -->
                    <div class="modal modal-slide-in update-item-sidebar fade">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title">Update Item</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <ul class="nav nav-tabs tabs-line">
                                        <li class="nav-item">
                                            <a class="nav-link nav-link-update active" data-bs-toggle="tab" href="#tab-update">
                                                <i data-feather="edit"></i>
                                                <span class="align-middle">Update</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nav-link-activity" data-bs-toggle="tab" href="#tab-activity">
                                                <i data-feather="activity"></i>
                                                <span class="align-middle">Activity</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-2">
                                        <div class="tab-pane tab-pane-update fade show active" id="tab-update" role="tabpanel">
                                            <form class="update-item-form">
                                                <div class="mb-1">
                                                    <label class="form-label" for="title">Title</label>
                                                    <input type="text" id="title" class="form-control" placeholder="Enter Title" />
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label" for="due-date">Due Date</label>
                                                    <input type="text" id="due-date" class="form-control" placeholder="Enter Due Date" />
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label" for="label">Label</label>
                                                    <select class="select2 select2-label form-select" id="label">
                                                        <option value="">&nbsp;</option>
                                                        <option data-color="badge-light-success" value="Economic Dev">Economic Dev</option>
                                                        <option data-color="badge-light-warning" value="Health edu">Health edu</option>
                                                        <option data-color="badge-light-info" value="Food security">Food Security</option>
                                                        <option data-color="badge-light-danger" value="Supply Chain">Supply Chain</option>
                                                        <option data-color="badge-light-success" value="Agri">Agri</option>
                                                        <option data-color="badge-light-primary" value="Water & sanitation">Water & Sanitation</option>
                                                    </select>
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label">Assigned</label>
                                                    <ul class="assigned ps-0"></ul>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="attachments" class="form-label">Attachments</label>
                                                    <input class="form-control file-attachments" type="file" id="attachments" multiple />
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label">Comment</label>
                                                    <div class="comment-editor border-bottom-0"></div>
                                                    <div class="d-flex justify-content-end comment-toolbar">
                                                        <span class="ql-formats me-0">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-image"></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <div class="d-flex flex-wrap">
                                                        <button class="btn btn-primary me-1" data-bs-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane tab-pane-activity pb-1 fade" id="tab-activity" role="tabpanel">
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar bg-light-success my-0 ms-0 me-50">
                                                    <span class="avatar-content">HJ</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0"><span class="fw-bold">Jordan</span> Left the board.</p>
                                                    <small class="text-muted">Today 11:00 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar my-0 ms-0 me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="32" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Dianna</span> mentioned <span class="fw-bold text-primary">@bruce</span> in a
                                                        comment.
                                                    </p>
                                                    <small class="text-muted">Today 10:20 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar my-0 ms-0 me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="32" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Martian</span> added moved Charts & Maps task to the done board.
                                                    </p>
                                                    <small class="text-muted">Today 10:00 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar my-0 ms-0 me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="32" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0"><span class="fw-bold">Barry</span> Commented on App review task.</p>
                                                    <small class="text-muted">Today 8:32 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar bg-light-dark my-0 ms-0 me-50">
                                                    <span class="avatar-content">BW</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0"><span class="fw-bold">Bruce</span> was assigned task of code review.</p>
                                                    <small class="text-muted">Today 8:30 PM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar bg-light-danger my-0 ms-0 me-50">
                                                    <span class="avatar-content">CK</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Clark</span> assigned task UX Research to
                                                        <span class="fw-bold text-primary">@martian</span>
                                                    </p>
                                                    <small class="text-muted">Today 8:00 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar my-0 ms-0 me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="Avatar" height="32" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Ray</span> Added moved <span class="fw-bold">Research</span> task from
                                                        in progress to done.
                                                    </p>
                                                    <small class="text-muted">Today 7:45 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar my-0 ms-0 me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="32" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0"><span class="fw-bold">Barry</span> Complete all the tasks assigned to him.</p>
                                                    <small class="text-muted">Today 7:17 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar bg-light-success my-0 ms-0 me-50">
                                                    <span class="avatar-content">HJ</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0"><span class="fw-bold">Jordan</span> added task to update new images.</p>
                                                    <small class="text-muted">Today 7:00 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar my-0 ms-0 me-50">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" height="32" />
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Dianna</span> moved task <span class="fw-bold">FAQ UX</span> from in progress
                                                        to done board.
                                                    </p>
                                                    <small class="text-muted">Today 7:00 AM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mb-1">
                                                <div class="avatar bg-light-danger my-0 ms-0 me-50">
                                                    <span class="avatar-content">CK</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0">
                                                        <span class="fw-bold">Clark</span> added new board with name <span class="fw-bold">Done</span>.
                                                    </p>
                                                    <small class="text-muted">Yesterday 3:00 PM</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <div class="avatar bg-light-dark my-0 ms-0 me-50">
                                                    <span class="avatar-content">BW</span>
                                                </div>
                                                <div class="more-info">
                                                    <p class="mb-0"><span class="fw-bold">Bruce</span> added new task in progress board.</p>
                                                    <small class="text-muted">Yesterday 12:00 PM</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kanban Sidebar ends -->
                </section>
                <!-- Kanban ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>



    @include('layouts.footer')