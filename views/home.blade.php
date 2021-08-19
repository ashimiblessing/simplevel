@extends('app')
@section('content')
    @include('partials.nav')

        <div class="banner">
        </div>

        <div class="container our-services">
            <h3 class="pb-5 text-white"> OUR SERVICES</h3>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <img src="./img/corporate-travel.png" alt="" class="card-img-top">
        
                        <div class="card-body">
                            <h5 class="card-title"> CORPORATE TRAVEL </h5>
                            <p class="card-text"> As a foremost travel management company, Finchglow Travels possesses years of  experience in providing the 
                            perfect blend of top tier consumer-specific innovations, professional service, highly skilled and knowledgeable staff and value 
                            for money on your travel expenses. 
                            </p>
                            <a href="corporate-travel" class="btn btn-primary"> FIND OUT MORE <i class="fas fa-angle-right ml-2"></i> </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <img src="./img/woman-in-black-blazer-sitting-on-black-office-chair-3727464.png" alt="" class="card-img-top">
        
                        <div class="card-body">
                            <h5 class="card-title"> CUSTOMER TRAVEL </h5>
                            <p class="card-text"> 
                                The way people study, schedule, and book their travel experiences has changed drastically thanks to technological advances. 
                                Customers nowadays use the internet at almost every point of their 
                                travel journey, from choosing where they want to go to posting images from their holiday on social media once they arrive at their destination.
                            </p>
                            <a href="customer-travel" class="btn btn-primary"> FIND OUT MORE <i class="fas fa-angle-right ml-2"></i> </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <img src="./img/Image-26.png" alt="" class="card-img-top">
        
                        <div class="card-body">
                            <h5 class="card-title"> TRADE PARTNER PLUS </h5>
                            <p class="card-text"> Finchglow Travels provides easy, but feature-rich, customized travel products and services to help you expand your current product and service portfolio while achieving incremental growth. 
                            The three critical stages of the travel customer journey are dreaming, preparing, and booking. 
                            </p>
                            <a href="trade-partner-plus" class="btn btn-primary"> FIND OUT MORE <i class="fas fa-angle-right ml-2"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="container business-core">
            <h2 class="pb-5 text-center"> You are the core of our Business </h2>

            <div class="row pt-4">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-center img-icons mb-4">
                        <img src="./img/icons/Layer_x0020_1.svg" alt="">
                    </div>
                    <div class="card">
                        <div class="card-body pb-5">
                            <h5 class="card-title text-center"> CONSULT WITH AN EXPERT </h5>
                            <p class="card-text text-center"> We’ll match you with an authority on your destination from our team of widely published writers 
                                who travel the globe.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-center img-icons mb-4">
                        <img src="./img/icons/Layer_x0020_1 (1).svg" alt="">
                    </div>
                    <div class="card">
                        <div class="card-body pb-5">
                            <h5 class="card-title text-center"> GET A CUSTOMIZED PLAN </h5>
                            <p class="card-text text-center"> Our expert will map out your entire trip, with insider recommendations about where to go, what to do, 
                                how to get around and where to stay.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-center img-icons mb-4">
                        <img src="./img/icons/Layer_x0020_1 (2).svg" alt="">
                        <img src="./img/icons/Layer_x0020_1 (3).svg" class="img-2" alt="">
                    </div>
                    <div class="card">
                        <div class="card-body pb-5">
                            <h5 class="card-title text-center"> BOOK YOUR TRIP </h5>
                            <p class="card-text text-center"> Finally, our in-house specialists will seamlessly help you book the hotels or activities on your itinerary 
                                at the best available rates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-products pt-5">
            <div class="container text-center">
                <h2 class="pb-5 text-center"> Our Products </h2>

                <div class="row pt-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card product-card">
                            <img src="./img/9853.png" alt="" class="card-img-top">
            
                            <div class="card-body">
                                <h5 class="card-title"> CORPORATE TRAVELLER </h5>
                                <p class="card-text"> 
                                As a foremost travel management company, Finchglow Travels possesses years of experience in providing the perfect blend of top tier consumer-specific innovations, professional service, highly skilled and knowledgeable staff and value for money on your travel expenses. 
                                As a corporate you need to make sure that your top executives are taken care of and their ever-changing busy itineraries can be accommodated without problems.
                                </p>
                                <a href="corporate-traveler" class="btn btn-primary" style="background: transparent; color: #333;"> FIND OUT MORE <i class="fas fa-angle-right ml-2"></i> </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card product-card">
                            <img src="./img/Image 42.png" alt="" class="card-img-top">
            
                            <div class="card-body">
                                <h5 class="card-title"> FINCH CONNECT </h5>
                                <p class="card-text"> Real-time Ticketing Solution is a fully automated solution to manage pricing, comparison and ticketing in the remote points of sales to ease relationship between non-IATA locations making the bookings (Subagents) and IATA travel agencies in charge of fulfilment activities(Consolidator).
                                </p>
                                <a href="finch-connect" class="btn btn-primary" style="background: transparent; color: #333;"> FIND OUT MORE <i class="fas fa-angle-right ml-2"></i> </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="card product-card">
                            <img src="./img/finch-affiliates.png" alt="" class="card-img-top">
            
                            <div class="card-body">
                                <h5 class="card-title"> FINCH AFFILIATES </h5>
                                <p class="card-text"> Most corporates already use travel agencies for booking tickets and organizing airport transfers. 
                                    At Finchglow Travels we do that too, but we believe that that is just the tip of the iceberg. As a corporate you need 
                                    to make sure that your top executives are taken care of and their ever-changing busy itineraries can be accommodated 
                                    without problems.
                                </p>
                                <a href="finch-affiliates" class="btn btn-primary" style="background: transparent; color: #333;"> FIND OUT MORE <i class="fas fa-angle-right ml-2"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container our-partners">
            <h2 class="pb-5 text-center"> Our Partners </h2>

            <div class="main-carousel">
                <div class="carousel-cell pic">
                    <img src="./img/airlines/AT.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/BA.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/EK.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/ET.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/EY.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/HF.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/kenya.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/KL.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/LH.png" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/medview.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/P4.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/rwandair.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/SA.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/TK.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/VS.jpg" alt="">
                </div>
                <div class="carousel-cell pic">
                    <img src="./img/airlines/W3.jpg" alt="">
                </div>
            </div>
        </div>

        <!--<div class="latest-news pt-5 pb-5">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-6 news-grid">-->
        <!--                <h4 class="news "> Latest News </h4>-->
        <!--                <hr style="width: 150px; background: #D2D2D2;">-->

        <!--                <div class="news-card mt-5">-->
        <!--                    <div class="d-flex">-->
        <!--                        <img src="./img/garden-by-the-bay-503897_1280.jpg" alt="">-->
        <!--                        <div class="content flex-column" >-->
        <!--                            <p> -->
        <!--                                <strong> -->
        <!--                                    It is a long established fact that a reader will be distracted by the readable content -->
        <!--                                    of a page when looking at its layout. -->
        <!--                                </strong> -->
        <!--                            </p> -->
    
        <!--                            <small> February 21, 2019 </small>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        
        <!--                <div class="news-card">-->
        <!--                    <div class="d-flex">-->
        <!--                        <img src="./img/garden-by-the-bay-503897_1280.jpg" alt="">-->
        <!--                        <div class="content flex-column" >-->
        <!--                            <p> -->
        <!--                                <strong> -->
        <!--                                    It is a long established fact that a reader will be distracted by the readable content -->
        <!--                                    of a page when looking at its layout. -->
        <!--                                </strong> -->
        <!--                            </p> -->
    
        <!--                            <small> February 21, 2019 </small>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
                        
        <!--                <div class="news-card">-->
        <!--                    <div class="d-flex">-->
        <!--                        <img src="./img/garden-by-the-bay-503897_1280.jpg" alt="">-->
        <!--                        <div class="content flex-column" >-->
        <!--                            <p> -->
        <!--                                <strong> -->
        <!--                                    It is a long established fact that a reader will be distracted by the readable content -->
        <!--                                    of a page when looking at its layout. -->
        <!--                                </strong> -->
        <!--                            </p> -->
    
        <!--                            <small> February 21, 2019 </small>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
                    
        <!--            <div class="col-md-6">-->
        <!--                <h4 class="news" > Newsletter </h4>-->
        <!--                <hr style="width: 150px; background: #D2D2D2;">-->

        <!--                <p class="mb-5 mt-5"> Subscribe to our Newsletter to receive latest news on our services </p>-->

        <!--                <form action="" class="newsletter">-->
        <!--                    <div class="form-group mb-5">-->
        <!--                        <input type="text" class="form-control" id="name" placeholder="Full name" required>-->
        <!--                    </div>-->
                            
        <!--                    <div class="form-group">-->
        <!--                        <input type="email" class="form-control" id="email" placeholder="Email" required>-->
        <!--                    </div>-->

        <!--                    <p class="mt-5">We keep your data private and share your data only with third parties that make this service possible.</p>-->

        <!--                    <button type="submit" class="btn btn-primary btn-lg sub-btn col-lg-3">-->
        <!--                        Subscribe &nbsp;-->
        <!--                        <i class="fas fa-paper-plane"></i>-->
        <!--                    </button>-->
        <!--                </form>-->

        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        @include('partials.latestnews')
        
  @endsection