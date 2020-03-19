<?php get_header(); ?>

    
        <div class="hero-box">
            <div class="btn-animate-right"></div>
            <div class="hero-box-logo">
                <img src="<?php echo get_bloginfo('template_url') ?>/img/donnas-pizza-logo-transparent-small.png"/ style="height: 100%;width: 100%;object-fit: contain;">
            </div>
            <div class="hero-text-box-1">

            Simply the Best</div>
            <div class="hero-text-box-2">For Over 50 Years </div>
            <a href="#popup" class="hero-btn btn btn-red">Pizza Menu</a>
            <a href="#locations" class="btn btn-green hero-btn-2">Order Now!</a>
        </div>

        <div class="locations">
            <div id="locations" class="locations-main-text heading">CHOOSE YOUR LOCATION</div>
            <a href="#cliffside-park" class="title-green locations-mobile-choice--1">Cliffside Park</a>
            <a href="#pompton-lakes" class="title-red locations-mobile-choice--2">Pompton Lakes</a>
            <a href="#saddle-brook" class="title-green locations-mobile-choice--3">Saddle Brook</a>
            <a href="#palisades-park" class="title-red locations-mobile-choice--4">Palisades Park</a>

            <div id="cliffside-park" class="title-green store-1">CLIFFSIDE PARK</div>
            <a href="#" class="store-1-picture"></a>
            <div class="store-1-content">
                    <ul>
                        <li>Express take-out and delivery</li> 
                        <li>694 Anderson Avenue, Cliffside Park, NJ</li> 
                        <li>Mon - Sat: 11AM - 10PM</li> 
                        <li>Sun: 12PM - 10PM</li> 
                    </ul>
            </div>
            <a href="tel:12019410077" class="store-1-call-us btn btn-gold">
                <i class="fa fa-phone"></i> CALL US!
            </a>

            <a href="http://google.com" class="store-button store-1-order-now btn btn-green">Order Now!</a>

            <div id="pompton-lakes" class="title-grey store-2">POMPTON LAKES</div>
            <a href="#" div class="store-2-picture"></a>
            <div class="store-2-content">
                    <ul>
                        <li>Coming soon!</li>  
                    </ul>
            </div>

            <!--
            <a href="#" class="store-2-call-us btn btn-gold">
                
                <i class="fa fa-phone icon-padding "></i> CALL US!
            </a>

            <a href="#" class="store-button store-2-order-now btn btn-red ">Order Now!</a>

            -->

            <a href="#" class="store-2-call-us btn btn-grey">Coming Soon!</a>

            <div id="saddle-brook" class="title-green store-3">SADDLE BROOK</div>
            <a href="#" div class="store-3-picture"></a>
            <div class="store-3-content">
                <div class="store-text">
                    <ul>
                        <li>Express take-out and delivery</li> 
                        <li>487 Market St, Saddle Brook, NJ 07663</li> 
                        <li>Mon - Sat: 11AM - 10PM</li> 
                        <li>Sun: 12PM - 10PM</li> 
                    </ul>
                </div>
            </div>
            <a href="tel:12017129400" class="store-3-call-us btn btn-gold">
                <i class="fa fa-phone icon-padding"></i>  CALL US!
            </a>
            <a href="#" class="store-button store-3-order-now btn btn-green ">Order Now!</a>
            
            <div id="palisades-park" class="title-red store-4">PALISADES PARK</div>
            <a href="tel:12019442158" div class="store-4-picture"></a>
            <div class="store-4-content">
                <div class="store-text">
                    <ul>
                        <li>Express take-out and delivery</li> 
                        <li>404 Broad Ave, Palisades Park, NJ</li> 
                        <li>Mon - Sat: 11AM - 10PM</li> 
                        <li>Sun: 12PM - 10PM</li> 
                    </ul>
                </div>
            </div>
            <a href="" class="store-4-call-us btn btn-gold">
                <i class="fa fa-phone icon-padding"></i> CALL US!
            </a>

            <!--<a href="#" class="store-button store-4-order-now btn btn-red ">Order Now!</a> -->
        </div>

    <div class="container">
            <div class="about-us-box">
                <div class="heading about-us-box-text">
                    About Us
                </div>
                <div class="about-us-box-details">
                    Discover the tradition of Donna's
                </div>
                <a href="about" class="btn btn-green about-us-box-button">Discover</a>

            </div>

            <div class="catering">
                <div class="heading catering-text">
                    Catering
                </div>
                <div class="catering-details">
                    Count on us for your special occasions
                </div>
                <a href="catering" class="btn btn-red catering-button">Catering</a>
            </div>

            <div class="franchise">
                <div class="heading franchise-text">
                    Franchise
                </div>
                <div class="franchise-details">
                    Be a part of the best Pizzeria in NJ 
                </div>
                <a href="franchise" class="btn btn-green franchise-button">Franchise</a>
            </div>
    </div>

    <div class="popup" id="popup">
        <div class="popup-content">
            <div class="popup-carousel">
                <div class="popup-slide">
                    <div class="slide-name heading">Traditional Pizza</div>
                    <img src="/img/hero.jpg" alt="Traditional Pizza" class="slide-image">
                    <div class="slide-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt quae repellat odit, fuga nisi ut facilis aperiam autem in pariatur. Fugit, eligendi quis. Ipsum, molestias ab esse et at ullam?.</div>
                </div>
                <div class="popup-slide">
                    <div class="slide-name heading">Sicilian Pizza</div>
                    <img src="/img/catering.jpg" alt="Sicilian Pizza" class="slide-image">
                    <div class="slide-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt quae repellat odit, fuga nisi ut facilis aperiam autem in pariatur. Fugit, eligendi quis. Ipsum, molestias ab esse et at ullam?.</div>
                </div>
                    <div class="popup-slide">
                    <div class="slide-name heading">Margherita Pizza</div>
                    <img src="/img/hero.jpg" alt="Margherita Pizza" class="slide-image">
                    <div class="slide-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt quae repellat odit, fuga nisi ut facilis aperiam autem in pariatur. Fugit, eligendi quis. Ipsum, molestias ab esse et at ullam?.</div>
                </div>
                <div class="popup-slide">
                    <div class="slide-name heading">Chicken Bacon Pizza</div>
                    <img src="/img/hero.jpg" alt="Chicken Bacon Pizza" class="slide-image">
                    <div class="slide-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt quae repellat odit, fuga nisi ut facilis aperiam autem in pariatur. Fugit, eligendi quis. Ipsum, molestias ab esse et at ullam?.</div>
                </div>
            </div>
            <a href="#locations" class="popup-button btn btn-green">Order Now!</a>

            <a href="#" class="popup-close">&times;</a>
        </div>
    </div>

<?php get_footer() ?>
