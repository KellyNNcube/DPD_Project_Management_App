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
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
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
                                    <h4 class="card-title" style="color: #ff7a3d;">Welcome Back {{ Auth::user()->name }}</h4>
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
                                <h4 class="card-title">Employee Task</h4>
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="card-body">
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Ryan Harrington</h6>
                                            <small>iOS Developer</small>
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
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Louisa Norton</h6>
                                            <small>UI Designer</small>
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
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-1.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Jayden Duncan</h6>
                                            <small>Java Developer</small>
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
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Cynthia Howell</h6>
                                            <small>Anguler Developer</small>
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
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-16.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Helena Payne</h6>
                                            <small>Marketing</small>
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
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-13.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">Troy Jensen</h6>
                                            <small>iOS Developer</small>
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
                                        <h4 class="card-title mb-25">Developer Meetup</h4>
                                        <p class="card-text mb-0">Meet world popular developers</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">Sat, May 25, 2020</h6>
                                        <small>10:AM to 6:PM</small>
                                    </div>
                                </div>
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">Central Park</h6>
                                        <small>Manhattan, New york City</small>
                                    </div>
                                </div>
                                <div class="avatar-group">
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Billy Hopkins" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Amy Carson" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Brandon Miles" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Daisy Weber" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Jenny Looper" class="avatar pull-up">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
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
                                            <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="42" height="42" />
                                        </div>
                                        <div class="user-info">
                                            <h5 class="mb-0">Mittie Evans</h5>
                                            <small class="text-muted">Updated 12m ago</small>
                                        </div>
                                    </div>
                                    <span class="badge rounded-pill badge-light-primary">Design</span>
                                </div>
                                <h5 class="apply-job-title">Need a designer to form branding essentials for my business.</h5>
                                <p class="card-text mb-2">
                                    Design high-quality designs, graphics, mock-ups and layouts for both new and existing web sites/ web
                                    applications / mobile applications.
                                </p>
                                <div class="apply-job-package bg-light-primary rounded">
                                    <div>
                                        <sup class="text-body"><small>$</small></sup>
                                        <h2 class="d-inline me-25">9,800</h2>
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
                    <!-- User Timeline Card -->
                    <div class="col-lg-8 col-12">
                        <div class="card card-user-timeline">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <i data-feather="list" class="user-timeline-title-icon"></i>
                                    <h4 class="card-title">User Timeline</h4>
                                </div>
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="card-body">
                                <ul class="timeline ms-50">
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>12 Invoices have been paid</h6>
                                                <span class="timeline-event-time me-1">12 min ago</span>
                                            </div>
                                            <p>Invoices have been paid to the company.</p>
                                            <div class="d-flex flex-row align-items-center">
                                                <img class="me-1" src="{{ ENV('APP_URL') }}/app-assets/images/icons/json.png" alt="data.json" height="23" />
                                                <h6 class="mb-0">data.json</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Client Meeting</h6>
                                                <span class="timeline-event-time me-1">45 min ago</span>
                                            </div>
                                            <p>Project meeting with john @10:15am</p>
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="avatar me-50">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="38" height="38" />
                                                </div>
                                                <div class="user-info">
                                                    <h6 class="mb-0">John Doe (Client)</h6>
                                                    <p class="mb-0">CEO of Infibeam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Create a new project for client</h6>
                                                <span class="timeline-event-time me-1">2 day ago</span>
                                            </div>
                                            <p>Add files to new design folder</p>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Billy Hopkins" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Amy Carson" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Brandon Miles" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Daisy Weber" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="Jenny Looper" class="avatar pull-up">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Create a new project for client</h6>
                                                <span class="timeline-event-time me-1">5 day ago</span>
                                            </div>
                                            <p class="mb-0">Add files to new design folder</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ User Timeline Card -->

                    <!-- Chat Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card chat-widget">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="34" height="34" />
                                        <span class="avatar-status-online"></span>
                                    </div>
                                    <h5 class="mb-0">Carrie Hawkins</h5>
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
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Hey John, I am looking for the best admin template.</p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>It should be Bootstrap 4 compatible.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Absolutely!</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>Vuexy admin is the responsive bootstrap 4 admin template.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Looks clean and fresh UI. 😃</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>It's perfect for my next project.</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>How can I purchase it?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>Thanks.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Great, Feel free to get in touch on</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>https://pixinvent.ticksy.com/</p>
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

                    <!-- App Design Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-app-design">
                            <div class="card-body">
                                <span class="badge badge-light-primary">03 Sep, 20</span>
                                <h4 class="card-title mt-1 mb-75">App design</h4>
                                <p class="card-text font-small-2 mb-2">
                                    You can Find Only Post and Quotes Related to IOS like ipad app design, iphone app design
                                </p>
                                <div class="design-group">
                                    <h6 class="section-label">Team</h6>
                                    <span class="badge badge-light-warning me-1">Figma</span>
                                    <span class="badge badge-light-primary">Wireframe</span>
                                </div>
                                <div class="design-group">
                                    <h6 class="section-label">Members</h6>
                                    <div class="avatar">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-9.jpg" width="34" height="34" alt="Avatar" />
                                    </div>
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">PI</div>
                                    </div>
                                    <div class="avatar">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-14.jpg" width="34" height="34" alt="Avatar" />
                                    </div>
                                    <div class="avatar">
                                        <img src="{{ ENV('APP_URL') }}/app-assets/images/portrait/small/avatar-s-20.jpg" width="34" height="34" alt="Avatar" />
                                    </div>
                                    <div class="avatar bg-light-secondary">
                                        <div class="avatar-content">AL</div>
                                    </div>
                                </div>
                                <div class="design-planning-wrapper">
                                    <div class="design-planning">
                                        <p class="card-text mb-25">Due Date</p>
                                        <h6 class="mb-0">12 Apr, 21</h6>
                                    </div>
                                    <div class="design-planning">
                                        <p class="card-text mb-25">Budget</p>
                                        <h6 class="mb-0">$49251.91</h6>
                                    </div>
                                    <div class="design-planning">
                                        <p class="card-text mb-25">Cost</p>
                                        <h6 class="mb-0">$840.99</h6>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary">Join Team</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ App Design Card -->

                <!--/ Card Advance -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@include('layouts.footer')