<x-layout
    title="HLA Architects | South Africa"
    active-page="home">
    <x-slot name="afterHeader">
        <div id="images" class="w-100 border-top-light shadow-lg vh-100-minus-header">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">
                <div class="carousel-indicators">
                    @foreach ($images as $i => $v)
                        <button type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"
                            aria-current="true" aria-label="Slide {{ $i }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($images as $i => $image)
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                            <img class="d-block w-100 shadow-sm" src="{{ get_image_url($image->name) }}" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $image->project != null ? $image->project->title : '' }}</h5>
                                <p></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="w-100 bg-body-tertiary py-5" style="height: 200px">
            <div class="container">
                <p>HLArchitects 2025 all rights reserved</p>
            </div>
        </div>

    </x-slot>
    <x-slot name="afterBody">
        <script type="text/javascript">
            jQuery(document).ready(function() {
                $("#scrollToImagesButton").click(function(e) {
                    e.preventDefault();
                    $("#images").get(0).scrollIntoView({behavior: 'smooth'});
        
                })
            });
        </script>
    </x-slot>
</x-layout>
