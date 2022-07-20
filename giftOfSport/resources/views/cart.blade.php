@extends('layouts.master')
  @section('style')
 <!----------------- cart style ------------------>
 <link rel="stylesheet" href="../assets/css/cart.css">
 @endsection
 @section('title','cart')
 
@section('content')
<hr>

<!-- <div class="container-fluid pt-4" style="padding-bottom:10%;">
  <div class="row px-xl-5">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius:20px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8">
                      <div class="p-4">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                          <h6 class="mb-0 text-muted">3 items</h6>
                        </div>
                        <hr class="my-4">
      
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
                              class="img-fluid rounded" alt="Cotton T-shirt">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted">Shirt</h6>
                            <h6 class="text-black mb-1">Cotton T-shirt</h6>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              <i class="fas fa-minus"></i>
                            </button>
      
                            <input id="form1" min="0" name="quantity" value="1" type="number"
                              class="form-control form-control-sm" />
      
                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">44.00 JD</h6>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>
      
                        <hr class="my-4">
      
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                              src="https://images.pexels.com/photos/4397838/pexels-photo-4397838.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                              class="img-fluid rounded" alt="Cotton T-shirt">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted">dumbbells</h6>
                            <h6 class="text-black mb-0">Vinyl-Coated Dumbbells, Pair</h6>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              <i class="fas fa-minus"></i>
                            </button>
      
                            <input id="form1" min="0" name="quantity" value="1" type="number"
                              class="form-control form-control-sm" />
      
                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">22.31 JD</h6>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>
      
                        <hr class="my-4">
      
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                              class="img-fluid rounded" alt="Cotton T-shirt">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <h6 class="text-muted">Shirt</h6>
                            <h6 class="text-black mb-0">Cotton T-shirt</h6>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              <i class="fas fa-minus"></i>
                            </button>
      
                            <input id="form1" min="0" name="quantity" value="1" type="number"
                              class="form-control form-control-sm" />
      
                            <button class="btn btn-link px-2"
                              onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0"> 44.00 JD</h6>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                          </div>
                        </div>
      
                        <hr class="my-4">
      
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="product.html"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 bg-black rounded">
                      <div class="p-4">
                        <h3 class="fw-bold-1 mt-2 pt-1">Summary</h3>
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-4">
                          <h5 class="text-uppercase fw-bold-1">items 3</h5>
                          <h5 class="fw-bold-1">132.00 JD</h5>
                        </div>
      
                        <h5 class="text-uppercase mb-3 fw-bold-1">Shipping</h5>
      
                        <div class="mb-4 pb-2">
                          <select class="select">
                            <option value="1">Standard-Delivery- 5.00 JD</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                          </select>
                        </div>
      
                        <h5 class="text-uppercase mb-3 fw-bold-1">Discount code</h5>
      
                        <div class="mb-5">
                          <div class="form-outline">
                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                            <label class="form-label fw-bold-1" for="form3Examplea2 ">Enter your code</label>
                          </div>
                        </div>
      
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-5">
                          <h5 class="text-uppercase fw-bold-1">Total price</h5>
                          <h5 class="fw-bold-1"> 137.00 JD</h5>
                        </div>
      
                        <a href="bill.html" target="framename"><button type="button" class="btn btn-dark btn-block btn-primary"
                          data-mdb-ripple-color="dark" >Checkout</button></a>
      
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
    </div> -->


    <div class="container-fluid pt-3">
      <div class="row px-xl-5">
          <div class="col-lg-8 table-responsive mb-5">
              <table class="table table-bordered text-center mb-0">
                  <thead>
                      <tr>
                          <th>Products</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                          <th>Remove</th>
                      </tr>
                  </thead>
                  <tbody class="align-middle">
                      <tr>
                          <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Colorful
                              Stylish Shirt</td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle">
                              <div class="input-group quantity mx-auto" style="width: 100px;">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-minus">
                                          <i class="fa fa-minus"></i>
                                      </button>
                                  </div>
                                  <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                      value="1">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-plus">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                              </div>
                          </td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                      class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                          <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;"> Colorful
                              Stylish Shirt</td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle">
                              <div class="input-group quantity mx-auto" style="width: 100px;">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-minus">
                                          <i class="fa fa-minus"></i>
                                      </button>
                                  </div>
                                  <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                      value="1">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-plus">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                              </div>
                          </td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                      class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                          <td class="align-middle"><img src="img/product-3.jpg" alt="" style="width: 50px;"> Colorful
                              Stylish Shirt</td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle">
                              <div class="input-group quantity mx-auto" style="width: 100px;">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-minus">
                                          <i class="fa fa-minus"></i>
                                      </button>
                                  </div>
                                  <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                      value="1">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-plus">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                              </div>
                          </td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                      class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                          <td class="align-middle"><img src="img/product-4.jpg" alt="" style="width: 50px;"> Colorful
                              Stylish Shirt</td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle">
                              <div class="input-group quantity mx-auto" style="width: 100px;">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-minus">
                                          <i class="fa fa-minus"></i>
                                      </button>
                                  </div>
                                  <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                      value="1">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-plus">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                              </div>
                          </td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                      class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                          <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> Colorful
                              Stylish Shirt</td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle">
                              <div class="input-group quantity mx-auto" style="width: 100px;">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-minus">
                                          <i class="fa fa-minus"></i>
                                      </button>
                                  </div>
                                  <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                      value="1">
                                  <div class="input-group-btn">
                                      <button class="btn btn-sm btn-primary btn-plus">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                              </div>
                          </td>
                          <td class="align-middle">$150</td>
                          <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                      class="fa fa-times"></i></button></td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <div class="col-lg-4">
              <form class="mb-5" action="">
                  <div class="input-group">
                      <input type="text" class="form-control p-4" placeholder="Coupon Code">
                      <div class="input-group-append">
                          <button class="btn btn-primary">Apply Coupon</button>
                      </div>
                  </div>
              </form>
              <div class="card border-secondary mb-5">
                  <div class="card-header bg-secondary border-0">
                      <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                  </div>
                  <div class="card-body">
                      <div class="d-flex justify-content-between mb-3 pt-1">
                          <h6 class="font-weight-medium">Subtotal</h6>
                          <h6 class="font-weight-medium">$150</h6>
                      </div>
                      <div class="d-flex justify-content-between">
                          <h6 class="font-weight-medium">Shipping</h6>
                          <h6 class="font-weight-medium">$10</h6>
                      </div>
                  </div>
                  <div class="card-footer border-secondary bg-transparent">
                      <div class="d-flex justify-content-between mt-2">
                          <h5 class="font-weight-bold">Total</h5>
                          <h5 class="font-weight-bold">$160</h5>
                      </div>
                      <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Cart End -->
@endsection