@extends('Frontend.template.default')
@section('content')
    <section class="my-account-area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="my-account-navigation mb-50">
                        @include('Frontend.userdashboard.sidebar')
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="my-account-content mb-50">
                        <p>The following addresses will be used on the checkout page by default.</p>

                        <div class="row">
                            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                                <h6 class="mb-3">Billing Address</h6>
                                <address>
                                    MD NAZRUL ISLAM <br>
                                    Madhabdi, Narsingdi <br>
                                    Madhabdi <br>
                                    Narsingdi <br>
                                    1600
                                </address>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example2Modal">
                                    Edit Address
                                </button>

                                <!-- Modal -->
                                <div class="modal fade pt-5" id="example2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog mt-2">
                                        <div class="modal-content mt-5">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Address</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mt-5">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="first_name">First Name</label>
                                                            <input type="text" class="form-control" id="first_name" placeholder="First Name" value="" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="last_name">Last Name</label>
                                                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" value="" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="company">Company Name</label>
                                                            <input type="text" class="form-control" id="company" placeholder="Company Name" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="email_address">Email Address</label>
                                                            <input type="email" class="form-control" id="email_address" placeholder="Email Address" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="phone_number">Phone Number</label>
                                                            <input type="number" class="form-control" id="phone_number" min="0" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="country">Country</label>
                                                            <select class="custom-select d-block w-100 form-control" id="country">
                                                                <option value="usa">United States</option>
                                                                <option value="uk">United Kingdom</option>
                                                                <option value="ger">Germany</option>
                                                                <option value="fra">France</option>
                                                                <option value="ind">India</option>
                                                                <option value="aus">Australia</option>
                                                                <option value="bra">Brazil</option>
                                                                <option value="cana">Canada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="street_address">Street address</label>
                                                            <input type="text" class="form-control" id="street_address" placeholder="Street Address" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="apartment_suite">Apartment/Suite/Unit</label>
                                                            <input type="text" class="form-control" id="apartment_suite" placeholder="Apartment, suite, unit etc" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="city">Town/City</label>
                                                            <input type="text" class="form-control" id="city" placeholder="Town/City" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="state">State</label>
                                                            <input type="text" class="form-control" id="state" placeholder="State" value="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="postcode">Postcode/Zip</label>
                                                            <input type="text" class="form-control" id="postcode" placeholder="Postcode / Zip" value="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-3">Shipping Address</h6>
                                <address>
                                    You have not set up this type of address yet.
                                </address>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Edit Address
                                </button>

                                <!-- Modal -->
                                <div class="modal fade pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog mt-2">
                                         <div class="modal-content mt-5">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Shipping</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mt-5">
                                              <form>
                                                  <div class="row">
                                                      <div class="col-md-6 mb-3">
                                                          <label for="first_name">First Name</label>
                                                          <input type="text" class="form-control" id="first_name" placeholder="First Name" value="" required>
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="last_name">Last Name</label>
                                                          <input type="text" class="form-control" id="last_name" placeholder="Last Name" value="" required>
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="company">Company Name</label>
                                                          <input type="text" class="form-control" id="company" placeholder="Company Name" value="">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="email_address">Email Address</label>
                                                          <input type="email" class="form-control" id="email_address" placeholder="Email Address" value="">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="phone_number">Phone Number</label>
                                                          <input type="number" class="form-control" id="phone_number" min="0" value="">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="country">Country</label>
                                                          <select class="custom-select d-block w-100 form-control" id="country">
                                                              <option value="usa">United States</option>
                                                              <option value="uk">United Kingdom</option>
                                                              <option value="ger">Germany</option>
                                                              <option value="fra">France</option>
                                                              <option value="ind">India</option>
                                                              <option value="aus">Australia</option>
                                                              <option value="bra">Brazil</option>
                                                              <option value="cana">Canada</option>
                                                          </select>
                                                      </div>
                                                      <div class="col-md-12 mb-3">
                                                          <label for="street_address">Street address</label>
                                                          <input type="text" class="form-control" id="street_address" placeholder="Street Address" value="">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="apartment_suite">Apartment/Suite/Unit</label>
                                                          <input type="text" class="form-control" id="apartment_suite" placeholder="Apartment, suite, unit etc" value="">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="city">Town/City</label>
                                                          <input type="text" class="form-control" id="city" placeholder="Town/City" value="">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="state">State</label>
                                                          <input type="text" class="form-control" id="state" placeholder="State" value="">
                                                      </div>
                                                      <div class="col-md-6 mb-3">
                                                          <label for="postcode">Postcode/Zip</label>
                                                          <input type="text" class="form-control" id="postcode" placeholder="Postcode / Zip" value="">
                                                      </div>
                                                  </div>
                                              </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
