<header class="p-3 mb-3 border-bottom bg-danger">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <img width="5%"
                src="https://png.pngtree.com/template/20191023/ourmid/pngtree-human-face-women-logo-design-template-illustration-image_321725.jpg"
                alt="">
            
        </div>
    </div>
</header>
<br>
            <nav class="navbar navbar-expand-lg navbar-light bg-redr">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="/supplier"
                                    class=" text-black nav-link  @if($active=='supplier') active @endif">
                                    Supplier </a>
                            </li>
                            <li class="nav-item">
                                <a href="/storage" 
                                class=" text-black nav-link  @if($active=='storage') active @endif">
                                    Storage </a>
                            </li>
                            <li class="nav-item">
                                <a href="/assets" class=" text-black nav-link  @if($active=='assets') active @endif">
                                    Assets </a>
                            </li>
                            <li class="nav-item">
                                <a href="/distribution"
                                    class=" text-black nav-link  @if($active=='distribution') active @endif">
                                    Distribution </a>
                            </li>
                            <li class="nav-item">
                                <a href="/transportation"
                                    class=" text-black nav-link  @if($active=='transportation') active @endif">
                                    Transportation </a>
                            </li>
                            <li class="nav-item">
                                <a href="/delivery" 
                                class="nav-link active @if($active=='deliveries') active @endif">
                                Deliveries</a>
                            </li>
                            <li class="nav-item">
                                <a href="/return" 
                                class="nav-link active @if($active=='returns') active @endif">
                                Return</a>
                            </li>
                            
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
