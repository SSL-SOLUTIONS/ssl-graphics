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
        <p class="BC">Pens</p>
        <p class="let">Let your Pens do the talking <br> with special finishes and unique sizes <br>
            guaranteed to make an
            impression.</p>
    </div>

    <div class="text-center">
        <p class="sbc mb-0 mt-3">Shop Pens</p>
        <p class="you">You can’t go wrong. We start at premium Pens and go all the way to extra fancy.

        </p>
    </div>
    <div class="container mt-5 align-items-stretch">
    <div class="row mb-5 align-items-stretch">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen a.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Timeless Printed Pens </h5>
                        <p class="card-text"> Indulge in the enduring charm of our Classic Elegance collection. Each printed pen exudes timeless</p>
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
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen b.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Playful Printed Pens</h5>
                        <p class="card-text">Unleash your creativity with our Whimsical Wonders pens. Vibrant colors and whimsical designs. </p>
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
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen c.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Professional Printed Pens</h5>
                        <p class="card-text">  Elevate your professional image with our Executive Essentials pens. Sleek and polished,</p>
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
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen d.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> High-Contrast Printed Pens"</h5>
                        <p class="card-text">Make a bold statement with our High-Contrast pens. Featuring striking designs and vivid colors </p>
                        <div class="product-btn">
                            <a href="">
                                <b style="font-weight: bolder;">Buy Now</b>
                            </a>

                        </div>
                    </div>
                </div> 
            </div>
            </div>
       
            <div class="row mb-5 align-items-stretch">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen a.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Timeless Printed Pens </h5>
                        <p class="card-text"> Indulge in the enduring charm of our Classic Elegance collection. Each printed pen exudes timeless</p>
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
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen b.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Playful Printed Pens</h5>
                        <p class="card-text">Unleash your creativity with our Whimsical Wonders pens. Vibrant colors and whimsical designs. </p>
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
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen c.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Professional Printed Pens</h5>
                        <p class="card-text">  Elevate your professional image with our Executive Essentials pens. Sleek and polished,</p>
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
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen d.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> High-Contrast Printed Pens"</h5>
                        <p class="card-text">Make a bold statement with our High-Contrast pens. Featuring striking designs and vivid colors </p>
                        <div class="product-btn">
                            <a href="">
                                <b style="font-weight: bolder;">Buy Now</b>
                            </a>

                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{asset('website/businesscards/images/pen a.png')}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Timeless Printed Pens </h5>
                        <p class="card-text"> Indulge in the enduring charm of our Classic Elegance collection. Each printed pen exudes timeless</p>
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
</body>
</html>
@include('footer')