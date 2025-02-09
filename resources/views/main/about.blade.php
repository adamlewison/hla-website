<x-layout 
    active-page='about' 
    title="HLA Architects | South Africa | About Us">

    <x-slot name="head">
        <link rel='stylesheet' type='text/css' href='/css/style_old.css' />
    </x-slot>

    <x-slot name="content">
        <div id="type-nav" class="w-100 d-flex justify-content-center shadow-sm bg-light p-2"> 
            <span class="type-link active m-3" data-recolor="practice">The practice</span> 
            <span class="type-link m-3" data-recolor="team">Team members</span> 
        </div>
    
        <div class="w-100 shadow-sm m-3 p-3 bg-light jumbotron" data-display="practice">
            <div class="container">
                <h1 class="display-4">The practice</h1>
                <p class="lead">Hlarchitects is a Johannesburg based architectural and design firm. The practice is
                    involved in a wide range of projects including residential, commercial, leisure and educational
                    buildings. Working in all scales we approached each projects with ambition and passion. Our goal is
                    to create beautiful, vibrant and sustainable buildings that have meaning and value to the user and
                    to the society that occupy them.</p>
                <p>We strive to achieve functional, cost effective and handsome buildings within budget and delivered on
                    time. This approach is evident in in the successful work completed thus far and our on-going
                    relationship with the majority of our clients.</p>
                <p>Our practice has been offering a professional service for over 20 years seeing through this time
                    three generations of partners.</p>
            </div>
        </div>
    
        <div class="w-100 shadow-sm m-3 p-3 bg-light jumbotron" data-display="team" style="display: none;">
            <div class="container">
                <h1 class="display-4">Team members</h1>
                <p class="lead">Our team of professional architects serve our clients' needs with passion, focus and
                    commitment. Each member of our team is fully involved in all aspects of the practice and equipped to
                    offer a high level of service. These include production management, quality control, design and
                    administration.</p>
                <p>We offer a variety of skills and versatility but specifically we offer a personalised service where a
                    partner is involved in every project from inception to completion.</p>
                <p>The present principle Martin Lewison joined the company in 1991 and became partner in 2002. He is a
                    registered Professional Architect and has been practicing architecture for approximately 25 years.
                </p>
                <p>
                    Martin Lewison has without compromise contributed his specific areas of expertise and vision to the
                    quality of design, creativity and high level of service which forms the backbone of Hlarchitects.
                </p>
            </div>
        </div>
    </x-slot>

    <x-slot name="afterBody">
        <script type="text/javascript">
            jQuery(document).ready(function() {
        
                var active_type;
        
                // data-display, data-recolor
        
                $(".type-link").click(function() {
                    active_type = $(this).attr("data-recolor");
        
        
                    $(".type-link").removeClass("active");
                    $(".type-link[data-recolor='" + active_type + "']").addClass("active");
        
                    $(".jumbotron").hide();
                    $(".jumbotron[data-display='" + active_type + "']").slideToggle();
                })
            });
        </script>
    </x-slot>
</x-layout>

<!--


-->