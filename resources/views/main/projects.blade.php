<x-layout 
    active-page='projects' 
    title="HLA Architects | South Africa | Our Projects">
    <x-slot name="head">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href='/css/style_old.css?v=<?= time() ?>' />
        <style>
            .project_thumb {
                width: 100%;
                height: 225px;
                background-position: center center;
                background-size: cover;
    
            }
    
            .card.shadow-sm:hover {
                box-shadow: 0 .125rem .25rem rgba(57, 188, 82, 0.46) !important;
                cursor: pointer;
                transition: 0.5s ease;
                -webkit-transition: 0.5s ease;
            }
    
            .card-text {
                color: black !important;
    
            }
        </style>
    </x-slot>

    <x-slot name="afterHeader">
        <div class="w-100 d-flex align-items-center bg-lines-light-drop-shadow vh-100-minus-header">
            <div class="d-flex w-100 justify-content-around" id="project-types">
                @foreach (App\Category::all() as $category)
                    <span class="type-link">{{ $category->name }}</span>
                @endforeach
            </div>
        </div>
    
        <div class="bg-light shadow-lg py-5 border-top-light" id="projects">
            <div class="album">
                <div class="container">
                    <div class="row" id="project-container">
                        <?php
                        $current_id = -1;
                        foreach ($images as $image) {
    
                        if ($current_id != $image->project_id) {
                            $current_id = $image->project_id;
                            $project = $image->project;
                        ?>
    
                            <div class="col-md-4"
                                data-search="{{ $project['title'] . ' ' . $project['type'] . ' ' . $project['client'] }}"
                                data-type="{{ $project['category'] }}">
                                <div class="card mb-4 shadow-sm">
                                    <a href="/projects/{{ $project['id'] }}" style="text-decoration : none">
                                        <?php
                                        if (isset($project['thumb'])) {
                                            $img = $project['thumb'];
                                        } else {
                                            $img = $project['name'];
                                        }
                                        ?>
                                        <div class="project_thumb" style="background-image: url('<?= get_image_url($img) ?>')"></div>
    
    
                                        <div class="card-body">
                                            <p class="card-text"><?= $project['title'] ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <!--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>-->
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
                            <?php
                        }
                        }
                        ?>
    
    
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="afterBody">
        <div class="d-none" id="projects-json">

        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
        
        
                $(".type-link").click(function() {
                    $("#projects").get(0).scrollIntoView({
                        behavior: 'smooth'
                    });
                    var a = $(this).text();
                    console.log(a);
                    $('div[data-type]').hide();
                    $('div[data-type="' + a + '"]').show("slow");
        
                })
        
            });
        
            function display_projects(projects, container) {
                projects.forEach(function() {
        
                })
                container.html("")
            }
        </script>
    </x-slot>
</x-layout>


