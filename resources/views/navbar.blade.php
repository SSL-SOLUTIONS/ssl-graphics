<!doctype html>
<html lang="en">

<head>
  <title>SSL Graphics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{asset('website/navbar/css/style.css')}}">
  <link rel="shortcut icon" href="{{asset('website/navbar/images/logo.png')}}" type="image/x-icon">
  <style>
    .nav-item:hover {
      background-color: rgba(247, 172, 57, 1);
      
    }

    .dropdown-item:hover {
      color: black !important;
    }

    @media (min-width: 1200px) {
      .gyab {
        display: none;
      }
    }

    @media (max-width: 767.98px) {
      .logogyab {
        display: none;

      }
    }
  </style>

</head>

<body>
  <section style="margin-top: -100px;  background-color: white;" class="ftco-section">
    <div class="container gyab">
      <div class="row justify-content-between">
        <div class="col d-flex">
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('website/navbar/images/logo.png')}}" alt="" style="width: 60px; height: 50px; margin-top:-10px;"></a>
        </div>
        <div class="col d-flex justify-content-end">
          <div class="social-media">
            <p class="mb-0 d-flex">
              <a href="https://api.whatsapp.com/send?phone=923011114504" target="_blank" class="d-flex align-items-center justify-content-center">
                <span class="fab fa-whatsapp">
                  <i class="sr-only">WhatsApp</i>
                </span>
              </a>
              <a href="" class="d-flex align-items-center justify-content-center">
                <span class="fa fa-shopping-cart">
                  <i class="sr-only">Cart</i>
                </span>
              </a>
              <a href="{{route('login')}}" class="d-flex align-items-center justify-content-center">
                <span class="fa fa-user">
                  <i class="sr-only">Profile</i>
                </span>
              </a>
          </div>
        </div>
      </div>
    </div>
    <nav style="margin-top: -10px; padding:0px;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " id="ftco-navbar">
      <div class="container">
        <div class="col d-flex">
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('website/navbar/images/logo.png')}}" alt="" style="width: 60px; height: 50px; margin-top:-10px; margin-bottom:-30px;"></a>
        </div>


        <button style="margin-right: 20px;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <!--  <li class="nav-item active"><a href="#" class="nav-link">Home</a></li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Business Material</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('businesscards')}}">Business Cards</a>
                <a class="dropdown-item" href="{{route('letterheads')}}">Letterheads</a>
                <a class="dropdown-item" href="{{route('flyers')}}">Flyers</a>
                <a class="dropdown-item" href="{{route('filefolders')}}">File Folder</a>
                <a class="dropdown-item" href="{{route('brouchers')}}">Brouchers</a>
                <a class="dropdown-item" href="{{route('invoices')}}">Invoices</a>
                <a class="dropdown-item" href="{{route('envelopes')}}">Envelopes</a>
                <a class="dropdown-item" href="{{route('notepads')}}">Notepads</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Packaging</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('customboxes')}}">Custom Boxes</a>
                <a class="dropdown-item" href="{{route('ecommercepackaging')}}">Ecommerce Packaging</a>
                <a class="dropdown-item" href="{{route('corrugatedboxes')}}">Corrugated Boxes</a>
                <a class="dropdown-item" href="{{route('whitelabelpackaging')}}">White Label Packaging</a>
                <a class="dropdown-item" href="{{route('foodpackaging')}}">Food Packaging</a>
              </div>
            </li>
            <li class="nav-item"><a href="{{route('bottles')}}" class="nav-link">Bottles</a></li>
            <li class="nav-item"><a href="{{route('stickers')}}" class="nav-link">Stickers</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Invitations</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('birthdayinvites')}}">Birthday Invites</a>
                <a class="dropdown-item" href="{{route('weddinginvites')}}">Wedding Invites</a>
                <a class="dropdown-item" href="{{route('babyshowerinvites')}}">Baby Shower Invites</a>
                <a class="dropdown-item" href="{{route('bridalshower')}}">Bridal Shower</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Promotional Items</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('shirts')}}">Shirts</a>
                <a class="dropdown-item" href="{{route('mugs')}}">Mugs</a>
                <a class="dropdown-item" href="{{route('bottles')}}">Bottles</a>
                <a class="dropdown-item" href="{{route('clocks')}}">Clocks</a>
                <a class="dropdown-item" href="{{route('pens')}}">Pens</a>
                <a class="dropdown-item" href="{{route('rings')}}">Rings</a>
                <a class="dropdown-item" href="{{route('booklets')}}">Booklets</a>

              </div>
            </li>

            <li class="nav-item">
              <a href="{{route('login')}}" class="nav-link">
                <span class="fa fa-user"></span>
                <i class="sr-only">Profile</i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://api.whatsapp.com/send?phone=923011114504" target="_blank" class="nav-link">
                <span class="fab fa-whatsapp"></span>
                <i class="sr-only">WhatsApp</i>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <span class="fa fa-shopping-cart"></span>
                <i class="sr-only">Card</i>
              </a>
            </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Large Prints</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">Vehicle Branding</a>
                <a class="dropdown-item" href="#">Kiosk Branding</a>
                <a class="dropdown-item" href="#">Roll Ups</a>
                <a class="dropdown-item" href="#">Banners</a>
                <a class="dropdown-item" href="#">In Store Branding</a>
              </div>
            </li> -->
          </ul>

        </div>
      </div>
    </nav>

    <!-- END nav -->
  </section>
  <script src="{{asset('website/navbar/js/jquery.min.js')}}"></script>
  <script src="{{asset('website/navbar/js/popper.js')}}"></script>
  <script src="{{asset('website/navbar/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('website/navbar/js/main.js')}}"></script>

</body>

</html>