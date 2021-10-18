@extends('layouts.app')

@section('content')

    <div class="about__top">
        <div class="group__about_us">
                 <div class="text_aboput_us">
                     <h1>About us</h1>
                    <div class="border___">
                        <blockquote cite="aboutUs">
                            It is a long established fact that a reader will be distracted by 
                            the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', 
                            making it look like readable English. Many desktop publishing packages 
                            and web page editors now use Lorem Ipsum as their default model text,
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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged.
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
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>


                <div class="service__one">
                    <img src="/about_img/photo.png" >
                    <h4>GRAPHIC  DESIGN</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>



                <div class="service__one">
                    <img src="/about_img/video.png" >
                    <h4>VIDEO EDITING</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>


            </div>
            <div class="all_servicess__">
                <div class="service__one">
                    <img src="/about_img/word.png" >
                    <h4>WORDPRESS DEV</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>


                <div class="service__one">
                    <img src="/about_img/web.png" >
                    <h4>FULL STAK DEV</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>



                <div class="service__one">
                    <img src="/about_img/mobil.png" >
                    <h4>MOBILE DEV</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                        standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>


            </div>
        </div>
    </div>
@endsection