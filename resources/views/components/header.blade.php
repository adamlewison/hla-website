<div class="bg-lines-light d-flex py-4 justify-content-around align-items-center">

    <div>
        <h1 id="logo" style="font-size: calc(1.375rem + 3.5vw)">
            HLA<span style="color:green;">rchitects</span>
        </h1>
    </div>

    <div>
        <nav class="nav justify-content-center text-uppercase">
            @if ($activePage == 'home')
                <a class="nav-link border bg-light rounded-1 p-2 text-black mx-1" href="#" id="scrollToImagesButton">Slideshow</a>
            @else
                <a class="nav-link border bg-light rounded-1 p-2 text-black mx-1" href="/">Home</a>
            @endif
            
            <a class="nav-link border bg-light rounded-1 p-2 text-black mx-1 {{($activePage == 'projects') ? 'active' : ''}}" href="/projects">projects</a>
            <a class="nav-link border bg-light rounded-1 p-2 text-black mx-1 {{($activePage == 'about') ? 'active' : ''}}" href="/about">about</a>
            <a class="nav-link border bg-light rounded-1 p-2 text-black mx-1 {{($activePage == 'contact') ? 'active' : ''}}" href="/contact">contact</a>
        </nav>
    </div>

    

</div>