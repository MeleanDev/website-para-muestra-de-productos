@extends('Ecoommerce.layouts.app')

@section('tittle', 'Producto Unico')

@section('content')
    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Single Product</h1>
              </div>
            </div>
            <div class="col-md-6">
              <div class="product-slider">
                <div id="slider" class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="assets/images/big-01.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/big-02.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/big-03.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/big-04.jpg" />
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
                <div id="carousel" class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="assets/images/thumb-01.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/thumb-02.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/thumb-03.jpg" />
                    </li>
                    <li>
                      <img src="assets/images/thumb-04.jpg" />
                    </li>
                    <!-- items mirrored twice, total of 12 -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-content">
                <h4>Single Product Name</h4>
                <h6>$55.00</h6>
                <p>Proin commodo, diam a ultricies sagittis, erat odio rhoncus metus, eu feugiat lorem lacus aliquet arcu. Curabitur in gravida nisi, non placerat nibh. Praesent sit amet diam ultrices, commodo turpis id, dignissim leo. Suspendisse mauris massa, porttitor non fermentum vel, ullamcorper scelerisque velit. </p>
                <span>7 left on stock</span>
                <form action="" method="get">
                  <label for="quantity">Quantity:</label>
                  <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                      onfocus="if(this.value == '1') { this.value = ''; }" 
                      onBlur="if(this.value == '') { this.value = '1';}"
                      value="1">
                  <input type="submit" class="button" value="Order Now!">
                </form>
                <div class="down-content">
                  <div class="categories">
                    <h6>Category: <span><a href="#">Pants</a>,<a href="#">Women</a>,<a href="#">Lifestyle</a></span></h6>
                  </div>
                  <div class="share">
                    <h6>Encuéntranos en: <span><a href="{{$empresaD->facebook}}"><i class="fa fa-facebook"></i></a><a href="{{$empresaD->instagramD}}"><i class="fa fa-instagram"></i></a></span></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Page Ends Here -->
  
  
      <!-- Similar Starts Here -->
      @include('Ecoommerce.components.SimilarProdutc')
      <!-- Similar Ends Here -->
@endsection