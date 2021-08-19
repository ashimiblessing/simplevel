<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./css/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://kit.fontawesome.com/4e274e72e0.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <title>{{$page_title}} | Finchglow Travels</title>
</head>
<body>
    <div class="top-space" style="height: 30px;position: absolute;top: 0px;left: 0px;background: #002D4F;z-index: 999;width: 100%;">
</div>
    <div class="main">
        
        @yield('content')
        
        
        
        
        
        
        
        
           </div>   
    
    <footer class="">
        <div class="container">
            <div class="row">
                <div class="col-md-2 footer-logo">
                    <img src="./img/logo/finchglow_white_logo.png" alt="">
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 footer-links">
                            <ul>
                                <li class="pb-3"><a href="/"> Home </a></li>
                                <li class="pb-3"><a href="services"> Services </a></li>
                                <li class="pb-3"><a href="#"> Private Policy </a></li>
                            </ul>
                        </div>
    
                        <div class="footer-links col-md-6">
                            <ul>
                                <li class="pb-3"><a href="about-us"> About Us </a> </li>
                                <li class="pb-3"><a href="#"> Terms and Conditions </a></li>
                                <li class="pb-3"><a href="flight-deals"> Flight Deals </a> </li>
                            </ul>
                        </div>
 
                        <!--<div class="footer-links col-md-4">-->
                        <!--    <ul>-->
                        <!--        <li class="pb-3"><a href="flight-deals.html"> Flight Deals </a> </li>-->
                                
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div> 

                <div class="col-md-4 media d-flex flex-column align-items-left">
                    <div class="media-links d-flex justify-items-between">
                        <div>
                            <a href="http://finchglowtravels.com/blog/app-icon2.png" target="_blank">
                                <i class="fab fa-instagram fa-2x mr-4"></i>
                            </a>
                        </div>
                        
                        <div>
                            <a href="http://finchglowtravels.com/blog/app-icon2.png" target="_blank">
                                <i class="fab fa-twitter fa-2x mr-4"></i>
                            </a>
                        </div>
                        
                        <div>
                            <a href="http://finchglowtravels.com/blog/app-icon2.png" target="_blank">
                                <i class="fab fa-facebook fa-2x mr-4"></i>
                            </a>
                        </div>
                        
                    

                    </div>

                    <div class="copyright">
                        <p> Copyright &copy; 2020 Finchglow Travels. All rights reserved.</p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <script>
        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            freeScroll: true,
            freeScroll: true,
            contain: true,
        });
        
        
     
        
        @if(!empty($_SESSION['contact_status']) && $_SESSION['contact_status'] == 'success')
        
        iziToast.show({
            position:'topRight',
    title: 'Success',
    message: 'Thank you! we have received your request'
});



 @elseif(!empty($_SESSION['contact_status']) && $_SESSION['contact_status'] == 'fail')
       iziToast.show({
            position:'topRight',
    title: 'Sorry',
    message: 'There was a problem with your submission. Please try again'
});


@else
@endif

@php
 unset($_SESSION['contact_status']);
        
@endphp    
        
        
        
        
        
        
        
        
        
        
        
        
    </script>
</body>
</html>