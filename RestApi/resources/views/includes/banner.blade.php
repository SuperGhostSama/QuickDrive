<!-- Banner -->
<section id="banner" class="position-relative">
    <img src="{{ asset('img/banner.png') }}" alt="banner" width="100%">
            <form id="searchBar" action="" method="POST" class="bottom-0 d-flex justify-content-center flex-wrap row m-0 pb-5 pt-4 border border-dark" style="background-color: #071620;">
                <h3 class="text-center" style="color: #007CC7;">Search</h3>
                <input class="col-10 col-sm-4" name="text" type="text" placeholder="Search by car name">
                <input class="col-10 col-sm-4 date-selection" type="text" name="date" placeholder="📅Select date">
                <button type="submit" name="search" class="btn-prim col-10 col-sm-2 text-white"><i class="bi bi-search"></i> Search</button>
            </form>   
</section>