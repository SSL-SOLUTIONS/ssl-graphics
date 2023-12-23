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
         body{
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;}
        input {
            border: 1px solid #808080 !important;
            border-radius: 7px !important;
            margin-bottom: 16px !important;
            width: 100% !important;
            outline: none !important;
            padding: 10px 5px !important;
        }

        textarea {
            width: 100% !important;
            /* border: none; */
            border: 1px solid #808080 !important;
            border-radius: 7px !important;
            margin-bottom: 16px !important;
            outline: none !important;
            padding: 10px 5px !important;
        }

        .form-btn {
            background-color:rgba(247, 172, 57, 1);;
            border: none;
            color: #fff;
            padding: 9px;
            width: 150px;
            border-radius: 99px;
            font-size: 19px;
            font-weight: 500;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .quote{
margin-top: -100px;
        }
    </style>
</head>
<body>
    <div class="quote">
        <h2 style="text-align: center;" class=" mt-4">Get A Quote</h2>
    </div>
    <div class="detail">
        <p class="text-center">
            <strong>
                Don't see what you are looking for?
            </strong>
            Don't worry, we have you covered!
        </p>
        <p class="text-center">
            We offer a wide range of solutions bound to meet your requirements.
        </p>
        <p class="text-center">Tell us little about your requirements and let us design a Free Custom Design Mockup for
            Your product
            packaging.
        </p>
    </div>

    <!-- form start -->
    <div class="form" style="width: 60%; margin: auto; margin-top: 5%;">
        <form action="">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="fname" placeholder="First Name">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="lname" placeholder="Last Name">
                </div>
            </div>
            <input type="tel" name="phone" placeholder="Phone Number">
            <input type="email" name="email" placeholder="Email">
            <textarea placeholder="Your Message" name="msg" id="" cols="30" rows="3"
                style="min-height: 47px;"></textarea>
            <div class="button">
                <button class="form-btn">Send</button>
            </div>
        </form>
    </div>
      <!-- form end -->
</body>

</html>
@include('footer')