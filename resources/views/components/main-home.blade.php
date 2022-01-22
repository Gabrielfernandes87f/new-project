<div>
    <meta property="og:image" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:secure_url" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" /><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link href="/css/style2.css" rel="stylesheet">

    <div class="shell">
       @if(count($albums) > 0)
       <div class="container">
           <div class="row">
              @foreach($albums as $album)
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img">
                  <img src="https://3.bp.blogspot.com/-eDeTttUjHxI/WVSvmI-552I/AAAAAAAAAKw/0T3LN6jABKMyEkTRUUQMFxpe6PLvtcMMwCPcBGAYYCw/s1600/001-culture-clash-matthew-gianoulis.jpg" alt="Product" class="img-responsive" />
                </div>
                <div class="wsk-cp-text">
                  <div class="category">

                    <span> {{ $album->name }} </span>
                  </div>
                  <div class="title-product">
                    <h3> {{ $album->category }} </h3>
                  </div>
                  <div class="description-prod">
                    <h4>{{ $album->description }} </h4>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">Galeria </span></div>
                    <div class="wcf-right"><a href="#" class="buy-btn"><i class="bi bi-images"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endif
        </div>
      </div>
</div>
