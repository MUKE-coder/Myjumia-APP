<?php include 'header.php'; ?>
<div class="container">
					<div class="row">						
						<div class="col-lg-8 col-md-12">
							<form>
								<!-- Heading -->
								<h4 class="my-3 myColor"><i class="far fa-address-book" aria-hidden="true"></i>&nbsp;Billing Details</h4>

								<!-- Billing details -->
								<div class="row mb-5">
									<div class="col-12 col-md-6">
										<!-- First Name -->
										<div class="form-group">
										<label for="checkoutBillingFirstName">First Name *</label>
										<input class="form-control form-control-md" id="checkoutBillingFirstName" type="text" placeholder="First Name" required="">
										</div>
									</div>
									
									<div class="col-12 col-md-6">
										<!-- Last Name -->
										<div class="form-group">
										<label for="checkoutBillingLastName">Last Name *</label>
										<input class="form-control form-control-md" id="checkoutBillingLastName" type="text" placeholder="Last Name" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Email -->
										<div class="form-group">
										<label for="checkoutBillingEmail">Email *</label>
										<input class="form-control form-control-md" id="checkoutBillingEmail" type="email" placeholder="Email" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Company Name -->
										<div class="form-group">
										<label for="checkoutBillingCompany">Company name *</label>
										<input class="form-control form-control-md" id="checkoutBillingCompany" type="text" placeholder="Company name (optional)">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Country -->
										<div class="form-group">
										<label for="checkoutBillingCountry">Country *</label>
										<input class="form-control form-control-md" id="checkoutBillingCountry" type="text" placeholder="Country" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Address Line 1 -->
										<div class="form-group">
										<label for="checkoutBillingAddress">Address Line 1 *</label>
										<input class="form-control form-control-md" id="checkoutBillingAddress" type="text" placeholder="Address Line 1" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Address Line 2 -->
										<div class="form-group">
										<label for="checkoutBillingAddressTwo">Address Line 2</label>
										<input class="form-control form-control-md" id="checkoutBillingAddressTwo" type="text" placeholder="Address Line 2 (optional)">
										</div>
									</div>
								
									<div class="col-12 col-md-6">
										<!-- Town / City -->
										<div class="form-group">
										<label for="checkoutBillingTown">Town / City *</label>
										<input class="form-control form-control-md" id="checkoutBillingTown" type="text" placeholder="Town / City" required="">
										</div>
									</div>
								
									<div class="col-12 col-md-6">
										<!-- ZIP / Postcode -->
										<div class="form-group">
										<label for="checkoutBillingZIP">ZIP / Postcode *</label>
										<input class="form-control form-control-md" id="checkoutBillingZIP" type="text" placeholder="ZIP / Postcode" required="">
										</div>
									</div>
								
									<div class="col-12">
										<!-- Mobile Phone -->
										<div class="form-group mb-0">
										<label for="checkoutBillingPhone">Mobile Phone *</label>
										<input class="form-control form-control-md" id="checkoutBillingPhone" type="tel" placeholder="Mobile Phone" required="">
										</div>
									</div>
								
								</div>

								<!-- Heading -->
								<h4 class="mb-3 myColor"><i class="fas fa-paper-plane"></i>&nbsp;Shipping Details</h4>

								<!-- Shipping details -->
								<div class="table-responsive mb-3">
									<table class="table table-bordered table-sm table-hover mb-0" style="height: 100px;">
										<tbody>
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingStandard" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingStandard">Standard Shipping</label>
													</div>
												</td>
												<td>Delivery in 5 - 7 working days</td>
												<td>$8.00</td>
											</tr>
											
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingExpress" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingExpress">Express Shipping</label>
													</div>
												</td>
												<td>Delivery in 3 - 5 working days</td>
												<td>$12.00</td>
											</tr>
											
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingShort" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingShort">1 - 2 Shipping</label>
													</div>
												</td>
												<td>Delivery in 1 - 2 working days</td>
												<td>$18.00</td>
											</tr>
											
											<tr>
												<td>
													<div class="custom-control custom-radio">
														<input class="custom-control-input" id="checkoutShippingFree" name="shipping" type="radio">
														<label class="custom-control-label text-body text-nowrap" for="checkoutShippingFree">Free Shipping</label>
													</div>
												</td>
												<td>Living won't the He one every subdue meat replenish face was you morning firmament darkness.</td>
												<td>$0.00</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!-- Address -->

                <div class="mb-5">
                <p>
                    <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-plus"></i>&nbsp;Ship to adifferent Address&nbsp;<i class="far fa-address-book" aria-hidden="true"></i>
                    </button>
                  </p>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body product-card">
                        	<!-- Shipping details -->
                      <div class="row mb-5">
                        <div class="col-12 col-md-6">
                          <!-- First Name -->
                          <div class="form-group">
                          <label for="checkoutBillingFirstName">First Name *</label>
                          <input class="form-control form-control-md" id="checkoutBillingFirstName" type="text" placeholder="First Name" required="">
                          </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                          <!-- Last Name -->
                          <div class="form-group">
                          <label for="checkoutBillingLastName">Last Name *</label>
                          <input class="form-control form-control-md" id="checkoutBillingLastName" type="text" placeholder="Last Name" required="">
                          </div>
                        </div>
                      
                        <div class="col-12">
                          <!-- Email -->
                          <div class="form-group">
                          <label for="checkoutBillingEmail">Email *</label>
                          <input class="form-control form-control-md" id="checkoutBillingEmail" type="email" placeholder="Email" required="">
                          </div>
                        </div>
                      
                        <div class="col-12">
                          <!-- Company Name -->
                          <div class="form-group">
                          <label for="checkoutBillingCompany">Company name *</label>
                          <input class="form-control form-control-md" id="checkoutBillingCompany" type="text" placeholder="Company name (optional)">
                          </div>
                        </div>
                      
                        <div class="col-12">
                          <!-- Country -->
                          <div class="form-group">
                          <label for="checkoutBillingCountry">Country *</label>
                          <input class="form-control form-control-md" id="checkoutBillingCountry" type="text" placeholder="Country" required="">
                          </div>
                        </div>
                      
                        <div class="col-12">
                          <!-- Address Line 1 -->
                          <div class="form-group">
                          <label for="checkoutBillingAddress">Address Line 1 *</label>
                          <input class="form-control form-control-md" id="checkoutBillingAddress" type="text" placeholder="Address Line 1" required="">
                          </div>
                        </div>
                      
                        <div class="col-12">
                          <!-- Address Line 2 -->
                          <div class="form-group">
                          <label for="checkoutBillingAddressTwo">Address Line 2</label>
                          <input class="form-control form-control-md" id="checkoutBillingAddressTwo" type="text" placeholder="Address Line 2 (optional)">
                          </div>
                        </div>
                      
                        <div class="col-12 col-md-6">
                          <!-- Town / City -->
                          <div class="form-group">
                          <label for="checkoutBillingTown">Town / City *</label>
                          <input class="form-control form-control-md" id="checkoutBillingTown" type="text" placeholder="Town / City" required="">
                          </div>
                        </div>
                      
                        <div class="col-12 col-md-6">
                          <!-- ZIP / Postcode -->
                          <div class="form-group">
                          <label for="checkoutBillingZIP">ZIP / Postcode *</label>
                          <input class="form-control form-control-md" id="checkoutBillingZIP" type="text" placeholder="ZIP / Postcode" required="">
                          </div>
                        </div>
                      
                        <div class="col-12">
                          <!-- Mobile Phone -->
                          <div class="form-group mb-0">
                          <label for="checkoutBillingPhone">Mobile Phone *</label>
                          <input class="form-control form-control-md" id="checkoutBillingPhone" type="tel" placeholder="Mobile Phone" required="">
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                </div>

								<!-- Heading -->
								<h4 class="mb-3 myColor"><i class="far fa-money-bill-alt"></i>&nbsp;Payment</h4>

								<!-- List group -->
								<div class="list-group list-group-sm mb-5">
									<div class="list-group-item">
										<!-- Radio -->
										<div class="custom-control custom-radio">
											<!-- Input -->
											<input class="custom-control-input" id="checkoutPaymentCard" name="payment" type="radio" data-toggle="collapse" data-action="show" data-target="#checkoutPaymentCardCollapse" checked>
											<!-- Label -->
											<label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentCard">Credit Card &nbsp;<i class="fab fa-cc-visa"></i></label>
										</div>
									</div>
									<div class="list-group-item collapse show py-0" id="checkoutPaymentCardCollapse">

										<!-- Form -->
										<div class="form-row py-5">
											<div class="col-12">
												<div class="form-group mb-4">
													<label class="bold-simple">Card Number</label>
													<input class="form-control form-control-sm" id="checkoutPaymentCardNumber" type="text" placeholder="Card Number *" required="">
												</div>
											</div>
											
											<div class="col-12">
												<div class="form-group mb-4">
													<label class="bold-simple">Name on Card</label>
													<input class="form-control form-control-sm" id="checkoutPaymentCardName" type="text" placeholder="Name on Card *" required="">
												</div>
											</div>
											
											<div class="col-12 col-md-4">
												<div class="form-group mb-md-0">
													<label class="bold-simple">Month</label>
													<select class="custom-select form-control" id="checkoutPaymentMonth">
														<option>January</option>
														<option>February</option>
														<option>March</option>
													</select>
												</div>
											</div>
											
											<div class="col-12 col-md-4">
												<div class="form-group mb-md-0">
													<label class="bold-simple">Year</label>
														<select class="custom-select form-control" id="checkoutPaymentCardYear">
														<option>2017</option>
														<option>2018</option>
														<option>2019</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-4">
												<div class="form-group mb-md-0">
													<label class="bold-simple">CCV</label>
													<div class="input-group input-group-merge">
													<input class="form-control form-control-sm" id="checkoutPaymentCardCVV" type="text" placeholder="CVV *" required="">
														<div class="input-group-append">
															<span class="input-group-text" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards." data-original-title="" title="">
															<i class="ti-help"></i>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								
									<div class="list-group-item">
										<!-- Radio -->
										<div class="custom-control custom-radio">
											<!-- Input -->
											<input class="custom-control-input" id="checkoutPaymentPaypal" name="payment" type="radio" data-toggle="collapse" data-action="hide" data-target="#checkoutPaymentPaypalCollapse">
											<!-- Label -->
											<label class="custom-control-label font-size-sm text-body text-nowrap" for="checkoutPaymentPaypal">&nbsp;<i class="fab fa-cc-paypal fa-2x" aria-hidden="true"></i></label>
										</div>
                  </div>
                  
                  <div class="list-group-item collapse show py-0" id="checkoutPaymentPaypalCollapse">

						<!-- Form -->
						<div class="form-row py-5">
							<div class="col-12">
								<div class="form-group mb-4">
									<label class="bold-simple">Full Name</label>
									<input class="form-control form-control-sm" id="checkoutPaymentCardNumber" type="text" placeholder="Full Name *" required="">
								</div>
							</div>
							
							<div class="col-12">
								<div class="form-group mb-4">
									<label class="bold-simple">Email</label>
									<input class="form-control form-control-sm" id="checkoutPaymentCardName" type="email" placeholder="Email *" required="">
								</div>
							</div>
							
							<div class="col-12 col-md-4">
                        <div class="form-group mb-2">
													<input class="btn btn-dark btn-block" id="checkoutPaymentCardName" type="submit" >
												</div>
											</div>
							
										</div>

									</div>
									
								</div>

							

							</form>
						</div>
						
						<div class="col-12 col-md-12 col-lg-4">
              <h4 class="mt-3 text-center myColor"><i class="fas fa-shopping-bag"></i>&nbsp;Order Summary</h4>
              <div class="cart_detail_box mt-5 mb-2" style="width:550px">
              <div class="card product-card">
              
								<div class="card-body">
                  <table class="table  table-responsive">
                    <thead>
                      <tr>
                        
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
							<img src="../assets/phones/1.png" width="100" alt="image1" class="img-fluid">
							<p>Samsung Galaxy 10</p>
                        </td>
                        <td ">
                          1
                        </td>
                        <td >
                          Ksh.15000  
                        </td>
                      </tr>
                      
                      <tr>
                        <td>
                          <img src="../assets/phones/2.png" width="100" alt="image1" class="img-fluid">
                          <p>Samsung Galaxy 10</p>
                        </td>
                        <td ">
                          1
                        </td>
                        <td >Ksh.15000</td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>VAT</b></td>
                        <td><b>Ksh.00.00</b></td>
                      </tr>
                      <tr>
                        <td colspan="2"><b>TOTAL</b></td>
                        <td><b>Ksh.30000</b></td>
                      </tr>

					  <tr>
                        
                        <td colspan="4"><b><a href="cart.php" class="btn btn-dark btn-block">MODIFY CART</a></b></td>
                      </tr>
                    </tbody>
                  </table>
 
                </div>
                
				</div>
              </div>
                <div class="" style="width:550px">
                  <div class="card product-card">
                      <div class="card-body">
                        <div class="py-0">
                            <h6><b>NEED HELP?</b></h6>
                            <h6>Contact an Expert Now</h6>
                            <hr>
                            <a  href="#"><button class=myBtn><i class="far fa-comment-alt"></i>&nbsp;&nbsp;LIVE CHAT</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
						</div>
						
					</div>
				</div>
  <?php include 'footer.php'; ?>