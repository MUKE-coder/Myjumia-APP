<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-8 col-md-12">
                        <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">CHECKOUT</span>
            
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0 myColor float-left"><b>1.&nbsp;ADDRESS DETAILS</b></h6>
                <br>
                <hr>
                <small class="text-muted">
                    <h5><b>MUKE JOHNBAPTIST</b></h5>
                    <h6>Shaurimoyo-Jogoo Road, Pumwani-Nairobi
                    <br>Mobile : 0715-675-985
                    </h6>
                    
                </small>
              </div>
              <span class="text-muted">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary logbtn" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-plus"></i>Add Details
                </button>
              </span>
              <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      
                          <!-- Modal Header -->
                          <div class="modal-header">
                          <h4 class="modal-title"><b>ADD YOUR DETAILS</b></h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                          </div>
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                          <?php include ('address-form.php'); ?>
                          </div>
                          
                          <!-- Modal footer -->
                          <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                          
                      </div>
                    </div>
                </div>
            </li>
            <!---End of item--->

            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0 myColor float-left"><b>2.&nbsp;DELIVERY METHOD</b></h6>
                <div class="clearfix"></div>
                <hr>
                <p>How Do you want your Order Delivered?</p>
                <!--OPTION 1-->
                <form>
                
                    <div class="pb-2">
                      <input type="radio" class="myColor" name="station" id="">&nbsp;<b>Pick Up Station</b>
                    </div>
                    <p>Ready for pickup between <b>Friday 21 Aug</b> and <b>Wednesday 26 Aug</b>With cheaper Shipping fees</p>
                    <h5 ><a href="" class="myColor">SELECT PICKUP STATION</a></h5>
                    <hr>
                   
                    <div class="pb-2">
                      <input type="radio" class="myColor" name="station" id=""><b>&nbsp;Delivery to Your Home or Office</b>
                    </div>
                    <p>Ready for pickup between <b>Friday 21 Aug</b> and <b>Wednesday 26 Aug</b>With cheaper Shipping fees</p>
                    <ul class="text-muted ml-5">
                        <li>Large items like Freezers and fridges may arrive 2 bussiness days later than other products</li>
                        <li>Please you have entered your Home Address so that we can deliver to you successfully for <b>Ksh.419</b>></li>
                    </ul>
                    

                </form>
              </div>
                
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0 myColor float-left"><b>SHIPPMENT DETAILS</b></h6>
                <br>
                <hr>
                <div class="pt-2 ">
                  <small class="text-muted pt-2 ">
                    <h6 class="float-left"><b>Shippment 1 of 2</b></h6>
                    <br>
                    <ul class="text-muted ml-3 float-left py-2" style="list-style:none">
                        <li>Samsung Galaxy-10 4GB RAM</li>
                        <li>Delivered between <b>Friday 21 Aug</b> and <b>Wednesday 26 Aug</b>Please check exact dates in the checkout page</li>
                    </ul>
                    <br>
                    <h6 class="float-left"><b>Shippment 2 of 2</b></h6>
                    <br>
                    <ul class="text-muted ml-3 float-left py-2" style="list-style:none">
                        <li>Redmi Note 8GB RAM</li>
                        <li>Delivered between <b>Friday 21 Aug</b> and <b>Wednesday 26 Aug</b>Please check exact dates in the checkout page</li>
                    </ul>
                    
                  </small>
                </div>
                
              </div>
             
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <a href="cardpay.php" class="btn btn-primary logbtn btn-block btn-lg">PROCEED TO NEXT STEP</a>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <h6 class="py-0 myColor"><b>3.&nbsp;PAYMENT METHODS</b></h6>
            </li>
          </ul>
          <!-- Cart -->
        </div>
            
    <div class="col-lg-4 col-md-12">
            <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Cart Summary</span>
            <span class="badge badge-secondary mybg badge-pill">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <img src="../assets/phones/1.png" width="100" class="img-fluid" alt="">
                <h6 class="my-0">Samsung Galaxy-10</h6>
                <small class="text-muted">4GB RAM 64GB Space</small>
              </div>
              <span class="text-muted">Qty:&nbsp;1</span>
              <span class="text-muted">Ksh.15000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <img src="../assets/phones/2.png" width="100" class="img-fluid" alt="">
                <h6 class="my-0">Redmi Note</h6>
                <small class="text-muted">8GB RAM 64GB Space</small>
              </div>
              <span class="text-muted">Qty:&nbsp;1</span>
              <span class="text-muted">Ksh.20000</span>
              
            </li>
            
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="myColor">
                <h6 class="my-0"><b>TOTAL (KSH)</b></h6>
                
              </div>
              <span class="myColor"><b>Ksh.35,000</b></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <a href="cart.php" class="btn btn-dark btn-block">MODIFY CART</a>
            </li>
            <hr>
            <li class="list-group-item d-flex justify-content-between">
              <div class="py-0">
              <h6><b>NEED HELP?</b></h6>
              <h6>Contact an Expert Now</h6>
              <a  href="#"><button class=myBtn><i class="far fa-comment-alt"></i>&nbsp;&nbsp;LIVE CHAT</button></a>
              </div>
            </li>
          </ul>
          <!-- Cart -->
        </div>

        
    </div>

</div>

<?php include 'footer.php'?>