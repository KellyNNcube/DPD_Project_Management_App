@include('layouts.header')

 <!-- BEGIN: Content-->
 <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="invoice-edit-wrapper">
                    <div class="row invoice-edit">
                        <!-- Invoice Edit Left starts -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-preview-card">
                                <!-- Header starts -->
                                <div class="card-body invoice-padding pb-0">
                                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                        <div>
                                            <div class="logo-wrapper">
                                                <!-- Brand logo--><a class="brand-logo" href="#">
                        <img src="../../../app-assets/images/ico/dpd.ico" class="img-fluid" alt="Brand logo">
                        </a>
                        <!-- /Brand logo-->
                                            </div>
                                            <p class="card-text mb-25">3rd Floor, Suite 25, Vicbalkon Towers</p>
                                            <p class="card-text mb-25">Vicbalkon Street, Utako, Abuja</p>
                                            <p class="card-text mb-0">+234 (0) 703 684 8035</p>
                                        </div>
                                        <div class="invoice-number-date mt-md-0 mt-2">
                                            <div class="d-flex align-items-center justify-content-md-end mb-1">
                                                <h4 class="invoice-title">Invoice</h4>
                                                <div class="input-group input-group-merge invoice-edit-input-group">
                                                    <div class="input-group-text">
                                                        <i data-feather="hash"></i>
                                                    </div>
                                                    <input type="text" class="form-control invoice-edit-input" placeholder="53634" />
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="title">Date:</span>
                                                <input type="text" class="form-control invoice-edit-input date-picker" />
                                            </div>
                                            <!-- <div class="d-flex align-items-center">
                                                <span class="title">Due Date:</span>
                                                <input type="text" class="form-control invoice-edit-input due-date-picker" />
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Header ends -->

                                <hr class="invoice-spacing" />

                                <!-- Address and Contact starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-xl-8 p-0">
                                            <h6 class="mb-2">Invoice To:</h6>
                                            <h6 class="mb-25">EM Kabile</h6>
                                            <p class="card-text mb-25">Devstork Holdings Limited</p>
                                            <p class="card-text mb-25">Small Heath, B10 0HF, UK</p>
                                            <p class="card-text mb-25">718-986-6062</p>
                                            <p class="card-text mb-0">emkabile@dpd.ng</p>
                                        </div>
                                        <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                            <h6 class="mb-2">Payment Details:</h6>
                                            <table>
                                                <tbody>
                                                <tr>
                                                        <td class="pe-1">Total Due:</td>
                                                        <td><strong></div>
                                                    <input type="text" class="form-control invoice-edit-input" placeholder="₦12,110.55" />
                                                </div></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">Bank name:</td>
                                                        <td><input type="text" class="form-control invoice-edit-input" placeholder="Standard Bank" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">Country:</td>
                                                        <td><input type="text" class="form-control invoice-edit-input" placeholder="Nigeria" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">IBAN:</td>
                                                        <td><input type="text" class="form-control invoice-edit-input" placeholder="ETD95476213874685" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">SWIFT code:</td>
                                                        <td><input type="text" class="form-control invoice-edit-input" placeholder="BR91905" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address and Contact ends -->

                                <!-- Product Details starts -->
                                <div class="card-body invoice-padding invoice-product-details">
                                    <form class="source-item">
                                        <div data-repeater-list="group-a">
                                            <div class="repeater-wrapper" data-repeater-item>
                                                <div class="row">
                                                    <div class="col-12 d-flex product-details-border position-relative pe-0">
                                                        <div class="row w-100 pe-lg-0 pe-1 py-2">
                                                            <div class="col-lg-5 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                                                                <p class="card-text col-title mb-md-50 mb-0">Item</p>
                                                                <select class="form-select item-details">
                                                                    <option value="App Design">App Design</option>
                                                                    <option value="App Customization" selected>App Customization</option>
                                                                    <option value="ABC Template">ABC Template</option>
                                                                    <option value="App Development">App Development</option>
                                                                </select>
                                                                <textarea class="form-control mt-2" rows="1">Customization & Bug Fixes</textarea>
                                                            </div>
                                                            <div class="col-lg-3 col-12 my-lg-0 my-2">
                                                                <p class="card-text col-title mb-md-2 mb-0">Cost</p>
                                                                <input type="number" class="form-control" value="24" placeholder="24" />
                                                                <div class="mt-2">
                                                                    <span>Discount:</span>
                                                                    <span class="discount">0%</span>
                                                                    <span class="tax-1 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                                                                    <span class="tax-2 ms-50" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-12 my-lg-0 my-2">
                                                                <p class="card-text col-title mb-md-2 mb-0">Qty</p>
                                                                <input type="number" class="form-control" value="1" placeholder="1" />
                                                            </div>
                                                            <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                                                                <p class="card-text col-title mb-md-50 mb-0">Price</p>
                                                                <p class="card-text mb-0">₦24.00</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column align-items-center justify-content-between border-start invoice-product-actions py-50 px-25">
                                                            <i data-feather="x" class="cursor-pointer font-medium-3" data-repeater-delete></i>
                                                            <div class="dropdown">
                                                                <i class="cursor-pointer more-options-dropdown me-0" data-feather="settings" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                </i>
                                                                <div class="dropdown-menu dropdown-menu-end item-options-menu p-1" aria-labelledby="dropdownMenuButton">
                                                                    <div class="mb-1">
                                                                        <label for="discount-input" class="form-label">Discount(%)</label>
                                                                        <input type="number" class="form-control" id="discount-input" />
                                                                    </div>
                                                                    <div class="form-row mt-50">
                                                                        <div class="mb-1 col-md-6">
                                                                            <label for="tax-1-input" class="form-label">Tax 1</label>
                                                                            <select name="tax-1-input" id="tax-1-input" class="form-select tax-select">
                                                                                <option value="0%" selected>0%</option>
                                                                                <option value="1%">1%</option>
                                                                                <option value="10%">10%</option>
                                                                                <option value="18%">18%</option>
                                                                                <option value="40%">40%</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-1 col-md-6">
                                                                            <label for="tax-2-input" class="form-label">Tax 2</label>
                                                                            <select name="tax-2-input" id="tax-2-input" class="form-select tax-select">
                                                                                <option value="0%" selected>0%</option>
                                                                                <option value="1%">1%</option>
                                                                                <option value="10%">10%</option>
                                                                                <option value="18%">18%</option>
                                                                                <option value="40%">40%</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-divider my-1"></div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <button type="button" class="btn btn-outline-primary btn-apply-changes">Apply</button>
                                                                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-12 px-0">
                                                <button type="button" class="btn btn-primary btn-sm btn-add-new" data-repeater-create>
                                                    <i data-feather="plus" class="me-25"></i>
                                                    <span class="align-middle">Add Item</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Product Details ends -->

                                <!-- Invoice Total starts -->
                                <div class="card-body invoice-padding">
                                    <div class="row invoice-sales-total-wrapper">
                                        <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                            <div class="d-flex align-items-center mb-1">
                                                <label for="salesperson" class="form-label">Consultant:</label>
                                                <input type="text" class="form-control ms-50" id="salesperson" placeholder="Edward Crowley" />
                                            </div>
                                        </div> 
                                        <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
                                            <div class="invoice-total-wrapper">
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Subtotal:</p>
                                                    <p class="invoice-total-amount">₦1800</p>
                                                </div>
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Discount:</p>
                                                    <p class="invoice-total-amount">₦28</p>
                                                </div>
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Tax:</p>
                                                    <p class="invoice-total-amount">21%</p>
                                                </div>
                                                <hr class="my-50" />
                                                <div class="invoice-total-item">
                                                    <p class="invoice-total-title">Total:</p>
                                                    <p class="invoice-total-amount">₦1690</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Total ends -->

                                <hr class="invoice-spacing mt-0" />

                                <div class="card-body invoice-padding py-0">
                                    <!-- Invoice Note starts -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label for="note" class="form-label fw-bold">Note:</label>
                                                <textarea class="form-control" rows="2" id="note">
It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Invoice Note ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Invoice Edit Left ends -->

                        <!-- Invoice Edit Right starts -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
                                        Send Invoice
                                    </button>
                                    <a href="/invoice-preview" class="btn btn-outline-primary w-100 mb-75">Preview</a>
                                    <button type="button" class="btn btn-outline-primary w-100 mb-75">Save</button>
                                    <button class="btn btn-success w-100 mb-75" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
                                        Add Payment
                                    </button>
                                </div>
                            </div>
                            <!-- <div class="mt-2">
                                <p class="mb-50">Accept payments via</p>
                                <select class="form-select">
                                    <option value="Bank Account">Bank Account</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="UPI Transfer">UPI Transfer</option>
                                </select>
                                <div class="invoice-terms mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="invoice-terms-title mb-0" for="paymentTerms">Payment Terms</label>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" checked id="paymentTerms" />
                                            <label class="form-check-label" for="paymentTerms"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between py-1">
                                        <label class="invoice-terms-title mb-0" for="clientNotes">Client Notes</label>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" checked id="clientNotes" />
                                            <label class="form-check-label" for="clientNotes"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <label class="invoice-terms-title mb-0" for="paymentStub">Payment Stub</label>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="paymentStub" />
                                            <label class="form-check-label" for="paymentStub"></label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- Invoice Edit Right ends -->
                    </div>

                    <!-- Send Invoice Sidebar -->
                    <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title">
                                        <span class="align-middle">Send Invoice</span>
                                    </h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <form>
                                        <div class="mb-1">
                                            <label for="invoice-from" class="form-label">From</label>
                                            <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com" placeholder="company@email.com" />
                                        </div>
                                        <div class="mb-1">
                                            <label for="invoice-to" class="form-label">To</label>
                                            <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com" placeholder="company@email.com" />
                                        </div>
                                        <div class="mb-1">
                                            <label for="invoice-subject" class="form-label">Subject</label>
                                            <input type="text" class="form-control" id="invoice-subject" value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods" />
                                        </div>
                                        <div class="mb-1">
                                            <label for="invoice-message" class="form-label">Message</label>
                                            <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="11">
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of ₦95.59

We would appreciate payment of this invoice by 05/11/2019</textarea>
                                        </div>
                                        <div class="mb-1">
                                            <span class="badge badge-light-primary">
                                                <i data-feather="link" class="me-25"></i>
                                                <span class="align-middle">Invoice Attached</span>
                                            </span>
                                        </div>
                                        <div class="mb-1 d-flex flex-wrap mt-2">
                                            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Send Invoice Sidebar -->

                    <!-- Add Payment Sidebar -->
                    <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title">
                                        <span class="align-middle">Add Payment</span>
                                    </h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <form>
                                        <div class="mb-1">
                                            <input id="balance" class="form-control" type="text" value="Invoice Balance: 5000.00" disabled />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="amount">Payment Amount</label>
                                            <input id="amount" class="form-control" type="number" placeholder="₦1000" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="payment-date">Payment Date</label>
                                            <input id="payment-date" class="form-control date-picker" type="text" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="payment-method">Payment Method</label>
                                            <select class="form-select" id="payment-method">
                                                <option value="" selected disabled>Select payment method</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Bank Transfer">Bank Transfer</option>
                                                <option value="Debit">Debit</option>
                                                <option value="Credit">Credit</option>
                                                <option value="Paypal">Paypal</option>
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="payment-note">Internal Payment Note</label>
                                            <textarea class="form-control" id="payment-note" rows="5" placeholder="Internal Payment Note"></textarea>
                                        </div>
                                        <div class="d-flex flex-wrap mb-0">
                                            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Add Payment Sidebar -->
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

@include('layouts.footer')

