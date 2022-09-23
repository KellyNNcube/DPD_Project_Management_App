@include('layouts.header')

<!-- BEGIN: Content-->
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <!-- <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Card Advance -->

                <div class="row match-height">
                    <!-- Greetings Card starts -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card ">
                                <div class="card-body text-center">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title" style="color: #ff7a3d; padding-left: 110px; padding-bottom: 20px; font-size: 24px;">Welcome Back {{ Auth::user()->name }}</h4>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Greetings Card ends -->
                </div>

                <div class="row match-height">
                    <!-- Employee Task Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-employee-task">
                            <div class="card-header">
                                <h4 class="card-title">Recent Projects</h4>
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="card-body">
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Malaria Combat Research</h6>
                                            <small>Health System Advisory</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">9hr 20m</small>
                                        <div class="employee-task-chart-primary-1"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Advert Enhancer</h6>
                                            <small>Development Consulting</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">4hr 17m</small>
                                        <div class="employee-task-chart-danger"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">AI in Medicine</h6>
                                            <small>Digital Health Research</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">12hr 8m</small>
                                        <div class="employee-task-chart-success"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">SWOT Analysis For JMJ Plc</h6>
                                            <small>Project Implementation</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">3hr 19m</small>
                                        <div class="employee-task-chart-secondary"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Marketing For Joe Restaurant</h6>
                                            <small>Development Consulting</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">9hr 50m</small>
                                        <div class="employee-task-chart-warning"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Global Pandemic Research</h6>
                                            <small>Digital Health Research</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75">4hr 48m</small>
                                        <div class="employee-task-chart-primary-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Employee Task Card -->

                    <!-- Developer Meetup Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <div class="meetup-img-wrapper rounded-top text-center">
                                <img src="{{ ENV('APP_URL') }}/app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170" />
                            </div>
                            <div class="card-body">
                                <div class="meetup-header d-flex align-items-center">
                                    <div class="meetup-day">
                                        <h6 class="mb-0">THU</h6>
                                        <h3 class="mb-0">24</h3>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="card-title mb-25">Stand-Up Meeting</h4>
                                        <p class="card-text mb-0">Status Reports</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">Wed, May 25, 2022</h6>
                                        <small>10:00AM to 6:00PM</small>
                                    </div>
                                </div>
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">Zoom Meeting</h6>
                                        <small>https:zoom-asdfghj.com</small>
                                    </div>
                                </div>
                                <div class="avatar-group">
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Billy Hopkins" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Amy Carson" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Brandon Miles" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Daisy Weber" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Jenny Looper" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <h6 class="align-self-center cursor-pointer ms-50 mb-0">+6</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Developer Meetup Card -->

                    <!-- Apply Job Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-apply-job">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-1">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="42" height="42" />
                                        </div>
                                        <div class="user-info">
                                            <h5 class="mb-0">Chiamaka Tella </h5>
                                            <small class="text-muted">Updated 2hrs ago</small>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill badge-light-primary">Design</span>
                                </div>
                                <h5 class="apply-job-title">Need a designer to form branding essentials for my business.</h5>
                                <p class="card-text mb-2">
                                    Design high-quality designs, graphics, mock-ups and layouts for both new and existing web sites/web
                                    applications.
                                </p>
                                <br>
                                <div class="apply-job-package bg-light-primary rounded">
                                    <div>
                                        <sup class="text-body"><small>₦</small></sup>
                                        <h2 class="d-inline me-25">80,000</h2>
                                        <sub class="text-body"><small>/ month</small></sub>
                                    </div>
                                    <span class="badge rounded-pill badge-light-primary">Full Time</span>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary">Apply For This Job</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row match-height">
                    <!-- Project Alert Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-app-design">
                            <div class="card-body">
                                <span class="badge badge-light-primary">03 Sep, 22</span>
                                <h4 class="card-title mt-1 mb-75">Malaria Endemic</h4>
                                <p class="card-text font-small-2 mb-2">
                                    You have been invited to join a health research on malaria as an endemic.
                                </p>
                                <div class="design-group">
                                    <h6 class="section-label">Focus Area</h6>
                                    <span class="badge badge-light-warning me-1">Health System Advisory</span>
                                    <span class="badge badge-light-primary">Digital Health Research</span>
                                </div>
                                <div class="design-group">
                                    <h6 class="section-label">Members</h6>
                                    <div class="avatar">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" width="34" height="34" alt="Avatar" />
                                    </div>
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">OA</div>
                                    </div>
                                    <div class="avatar">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" width="34" height="34" alt="Avatar" />
                                    </div>
                                    <div class="avatar bg-light-secondary">
                                        <div class="avatar-content">EC</div>
                                    </div>
                                    <div class="avatar">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" width="34" height="34" alt="Avatar" />
                                    </div>
                                    <div class="avatar bg-light-secondary">
                                        <div class="avatar-content">TT</div>
                                    </div>
                                </div>
                                <div class="design-planning-wrapper">
                                    <div class="design-planning">
                                        <p class="card-text mb-25">Due Date</p>
                                        <h6 class="mb-0">12 Jan, 23</h6>
                                    </div>
                                    <div class="design-planning">
                                        <p class="card-text mb-25">Budget</p>
                                        <h6 class="mb-0">₦500,000.00</h6>
                                    </div>
                                    <div class="design-planning">
                                        <p class="card-text mb-25">Cost</p>
                                        <h6 class="mb-0">₦410,234.99</h6>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary">Join Team</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Project Alert Card -->

                    <!-- Project Timeline Card -->
                    <div class="col-lg-8 col-12">
                        <div class="card card-user-timeline">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <i data-feather="list" class="user-timeline-title-icon"></i>
                                    <h4 class="card-title">Project Timeline</h4>
                                </div>
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="card-body">
                                <ul class="timeline ms-50">
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Approved</h6>
                                                <span class="timeline-event-time me-1">5 days ago</span>
                                            </div>
                                            <p>Project has been approved.</p>
                                            <!-- <div class="d-flex flex-row align-items-center">
                                                <img class="me-1" src="{{ ENV('APP_URL') }}/app-assets/images/icons/json.png" alt="data.json" height="23" />
                                                <h6 class="mb-0">data.json</h6>
                                            </div> -->
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Initialized</h6>
                                                <span class="timeline-event-time me-1">2 days ago</span>
                                            </div>
                                            <p>Project has commenced.</p>
                                            <!-- <div class="d-flex flex-row align-items-center">
                                                <div class="avatar me-50">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="38" height="38" />
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="mb-0">John Doe (Client)</h6>
                                                    <p class="mb-0">CEO of Infibeam</p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Ongoing</h6>
                                                <span class="timeline-event-time me-1">45 min ago</span>
                                            </div>
                                            <p>Project is ongoing.</p>
                                            <!-- <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Billy Hopkins" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Amy Carson" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Brandon Miles" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Daisy Weber" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Jenny Looper" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                            </div> -->
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Completed</h6>
                                                <span class="timeline-event-time me-1">2 min ago</span>
                                            </div>
                                            <p class="mb-0">Project has been completed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Project Timeline Card -->

                    <!-- Chat Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card chat-widget">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="Avatar" width="34" height="34" />
                                        <span class="avatar-status-online"></span>
                                    </div>
                                    <h5 class="mb-0">Damilola Adegoke</h5>
                                </div>
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                            </div>
                            <!-- User Chat messages -->
                            <section class="chat-app-window">
                                <div class="user-chats">
                                    <div class="chats">
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Good Morning</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Good Morning</p>
                                                    <p>How can i help? 🙂</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>Did you get my mail?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Oh yes! I did</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>I need you to do a follow up on the Marketing for Joe Restaurant Project.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Alright, I'll check it out. 😃</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>Give me some time.</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>How soon do you want me to send a feedback?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Alright, Thanks. I need the feedback ASAP</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Okay, i will check it out now 👍</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>Send the link.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Great, Thanks</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>https://marketingforjoerestaurant.com/</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Submit Chat form -->
                                <form class="chat-app-form" action="javascript:void(0);" onsubmit="enterChat();">
                                    <div class="input-group input-group-merge me-50 w-75 form-send-message">
                                        <span class="input-group-text">
                                            <label for="attach-doc" class="attachment-icon mb-0">
                                                <i data-feather="image" class="cursor-pointer text-secondary"></i>
                                                <input type="file" id="attach-doc" hidden /> </label></span>
                                        <input type="text" class="form-control message" placeholder="Type your message" />
                                    </div>
                                    <button type="button" class="btn btn-primary send" onclick="enterChat();">
                                        <i data-feather="send" class="d-lg-none"></i>
                                        <span class="d-none text-nowrap d-lg-block">Send</span>
                                    </button>
                                </form>
                                <!--/ Submit Chat form -->
                            </section>
                            <!-- User Chat messages -->
                        </div>
                    </div>
                    <!--/ Chat Card -->

                <!--/ Card Advance -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@include('layouts.footer')