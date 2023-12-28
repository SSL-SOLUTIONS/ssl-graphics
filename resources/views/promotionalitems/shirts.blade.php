@include('navbar')
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>SSL Graphics</title>
    <style>
       .bodddy{
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;}
        .BC {
            font-size: 25px;
            color: white;
        }

        .let {
            font-size: 17px;
            font-weight: 400;
            color: white;
        }

        .contn {
            padding: 30px;
        }

        .sbc {
            font-size: 25px;
            color: black;
            font-weight: 500;
        }

        .you {
            font-size: 17px;
            font-weight: 400;
            color: black;

        }
        .card{
            border-radius: 10px;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            /* Here's the box shadow */
        }

        .card-title {
            font-weight: bold;
        }

        .product-btn {
            position: absolute;
            bottom: 10px;
        }

        .product-btn a {
            color: rgba(247, 172, 57, 1);
            text-decoration: none;
            font-weight: 800;
            font-size: 17px;
        }
        
    </style>
</head>

<body  class="bodddy">
    <div style="margin-top: -112px;"
     class="container-fluid bg-dark contn text-center">
        <p class="BC">Shirts</p>
        <p class="let">Let your Shirts do the talking <br> with special finishes and unique sizes <br>
            guaranteed to make an
            impression.</p>
    </div>

    <div class="text-center">
        <p class="sbc mb-0 mt-3">Shop Shirts</p>
        <p class="you">You can’t go wrong. We start at premium Shirts and go all the way to extra fancy.

        </p>
    </div>
    <div class="container mt-5 align-items-stretch">
    <div class="row mb-5 align-items-stretch">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{asset('website/businesscards/images/shrt.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Print names on your shirts</h5>
                        <p class="card-text">Logos on your shirts and hoodies will make you cool.Print your names as well.</p>
                        <div class="product-btn">
                            <a href="">
                                <b style="font-weight: bolder;">Buy Now</b>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mb-3">
                <img class="card-img-top" src="{{asset('website/businesscards/images/shirt.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Logos on black are damn</h5>
                        <p class="card-text">Enhance beauty of your shirts by Printing your name and images on it.</p>
                        <div class="product-btn">
                            <a href="">
                                <b style="font-weight: bolder;">Buy Now</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
       
            
        </div>
    </div>
</body>
</html>
@include('footer')