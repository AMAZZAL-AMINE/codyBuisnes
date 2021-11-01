@extends('layouts.app')

@section('content')

    <div class="about__top">
        <div class="group__about_us">
                 <div class="text_aboput_us">
                     <h1>About us</h1>
                    <div class="border___">
                        <blockquote cite="aboutUs">
                                Coody is a world-leading online community for creative assets, tools and talent Many people
                                around the world visit Coody to buy and sell creative assets, use smart design templates, learn
                                creative skills or even hire freelancers. With an industry-leading marketplace paired with an
                                unlimited subscription service, Coody helps creatives like you get projects done faster.
                        </blockquote>
                    </div>
                 </div>
        </div>
    </div>


    <!-- start section for our teams -->
    <div class="our_teams">
            <div class="title__our_teams">
                <span></span> <div> <b>Our Teams</b> </div>  
            </div>

        <!-- teams -> first one -->
        <div class="our_teams_perrs one___">
            <div class="our__teams_perr_text__">
                <h2>Amine Amazzal</h2>
                <span><small> full-stake web devloper </small></span>
                <blockquote >
                                I'm amine amazzal from morocco at 21 years old , 
                                i working as a eam Coody from home, I have experience in web programming, 
                                Ul design and, graphic design, and I also love coffee, hiking, nature and 
                                learning new things.
                </blockquote>
            </div>
            <div class="our__teams_perr_img__">
                <img src="/about_img/amine.jpg" alt="">
            </div>
        </div>



                <!-- teams -> first one -->
                <div class="our_teams_perrs two___">
                    <div class="our__teams_perr_img__">
                        <img src="/about_img/men_two.jpg" alt="">
                    </div>
                    <div class="our__teams_perr_text__">
                        <h2>Youssuf  Coding</h2>
                        <span><small> full-stake Mobile devloper </small></span>
                        <blockquote >
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                            printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </blockquote>
                    </div>
                </div>


                <div class="our_teams_perrs tree___">

                    <div class="our__teams_perr_text__">
                        <h2>Hassan Ghannam</h2>
                        <span><small> Graphic design & Video editor </small></span>
                        <blockquote >
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                            printer took a galley of type and scrambled it to make a type specimen book. 
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </blockquote>
                    </div>
                    <div class="our__teams_perr_img__">
                        <img src="/about_img/men_one.webp" alt="">
                    </div>
                </div>

    </div>

    <!-- start content section for our services  -->
    <div class="our_services">
        <div class="title__our_teams">
            <span></span> <div> <b>Our Teams</b> </div>  
        </div>

        <div class="all_services_with_text__heding">
            <h1>Help Your Entire Business</h1>
            <p class="title_serv">its time to be a nice guy like you btother Its Time hh for any time</p>
            <div class="all_servicess__">
                <div class="service__one">
                    <img src="/about_img/xd.png" >
                    <h4>UI UX DESIGN</h4>
                    <p>
                        Designing application interfaces and web pages . My strength on Professional 
                        UI/UX design comprises with: Master of the popular tools like Figma, Adobe XD, etc.
                    </p>
                </div>


                <div class="service__one">
                    <img src="/about_img/photo.png" >
                    <h4>GRAPHIC  DESIGN</h4>
                    <p>
                         i have 4 years in graphic design using 
                         photoshop and i making poster for ads or 
                         logos or image edits
                    </p>
                </div>



                <div class="service__one">
                    <img src="/about_img/video.png" >
                    <h4>VIDEO EDITING</h4>
                    <p>
                    Speedy, talented video editor with 4+ years of experience. Seeking to create moving videos fast at Bent Lodgepole Productions. , 
                    </p>
                </div>


            </div>
            <div class="all_servicess__">
                <div class="service__one">
                    <img src="/about_img/word.png" >
                    <h4>WORDPRESS DEV</h4>
                    <p>
                             WordPress Developers design, implement and manage 
                             websites using WordPress, 
                             a free, open-source content management system (CMS).
                    </p>
                </div>


                <div class="service__one">
                    <img src="/about_img/web.png" >
                    <h4>FULL STAKE DEV</h4>
                    <p>
                         the site web designing with new idea and new design 
                         from zero, and also The website gets its own unique custom UI\UX 
                         design and code
                    </p>
                </div>



                <div class="service__one">
                    <img src="/about_img/mobil.png" >
                    <h4>MOBILE DEV</h4>
                    <p>
                          Mobile Application Developers develop and build apps for various 
                          mobile technologies such as Google’s Android, Apple’s Io’s 
                          and Windows Phone.
                    </p>
                </div>


            </div>
        </div>
    </div>
@endsection