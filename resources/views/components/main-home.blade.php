<div>
    <meta property="og:image" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:secure_url" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" /><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link href="/css/style2.css" rel="stylesheet">

    <div class="shell">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img">
                  <img src="https://3.bp.blogspot.com/-eDeTttUjHxI/WVSvmI-552I/AAAAAAAAAKw/0T3LN6jABKMyEkTRUUQMFxpe6PLvtcMMwCPcBGAYYCw/s1600/001-culture-clash-matthew-gianoulis.jpg" alt="Product" class="img-responsive" />
                </div>
                <div class="wsk-cp-text">
                  <div class="category">
                      @foreach($Testimonials as $testimonial)
                    <span>Type: {{ $testimonial->category }}</span>
                  </div>
                  <div class="title-product">
                    <h3>Name: {{ $testimonial->name }}</h3>
                  </div>
                  <div class="description-prod">
                    <p>Description: {{ $testimonial->description }}</p>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">R$ {{ $testimonial->price }}</span></div>
                    <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img"><img src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg" alt="Product" class="img-responsive" /></div>
                <div class="wsk-cp-text">
                  <div class="category">
                    <span>Type</span>
                  </div>
                  <div class="title-product">
                    <h3>Catagory</h3>
                  </div>
                  <div class="description-prod">
                    <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">R$ 500.00</span></div>
                    <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img"><img src="https://1.bp.blogspot.com/-XL_Ba-178Fo/WVSvm5AbApI/AAAAAAAAAK4/X5109HTqUiAhPjbmz4NFVHcpL7ZWe6T3ACPcBGAYYCw/s1600/wow-29.jpg" alt="Product" class="img-responsive" /></div>
                <div class="wsk-cp-text">
                  <div class="category">
                    <span>Type</span>
                  </div>
                  <div class="title-product">
                    <h3>Catagory</h3>
                  </div>
                  <div class="description-prod">
                    <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">R$ 500.00</span></div>
                    <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img"><img src="https://3.bp.blogspot.com/-iUes8qr4uC8/WVSvl6Wf_fI/AAAAAAAAAKs/JiTUUVvdbqEC_QGGaQhuVJiezIN3LIqEgCPcBGAYYCw/s1600/IMG_5367-bp.jpg" alt="Product" class="img-responsive" /></div>
                <div class="wsk-cp-text">
                  <div class="category">
                    <span>Type</span>
                  </div>
                  <div class="title-product">
                    <h3>Catagory</h3>
                  </div>
                  <div class="description-prod">
                    <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">R$ 500.00</span></div>
                    <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img"><img src="https://1.bp.blogspot.com/-b-2SgNUrFHg/WVSvmewWqgI/AAAAAAAAAK0/1K4YCcbYjhokHwV_IgiVJN9mEnQoWunIwCPcBGAYYCw/s1600/fashion-portrait-nicole-6347.jpg" alt="Product" class="img-responsive" /></div>
                <div class="wsk-cp-text">
                  <div class="category">
                    <span>Type</span>
                  </div>
                  <div class="title-product">
                    <h3>Catagory</h3>
                  </div>
                  <div class="description-prod">
                    <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">R$ 500.00</span></div>
                    <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
