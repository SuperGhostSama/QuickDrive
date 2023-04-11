<!-- Banner -->
<section id="banner" class="position-relative">
    <img src="{{ asset('img/banner.png') }}" alt="banner" width="100%">
    
            <form id="searchBar" action="{{ route('search') }}" method="GET" class="bottom-0 d-flex justify-content-center flex-wrap row m-0 pb-5 pt-4 border border-dark" style="background-color: #071620;">
                <h3 class="text-center" style="color: #007CC7;">Search</h3>
                <input class="col-10 col-sm-4" name="query" type="text" placeholder="Search for a car or brand">
                <button type="submit" name="search" class="btn-prim col-10 col-sm-2 text-white"><i class="bi bi-search"></i> Search</button>
            </form>   
</section>