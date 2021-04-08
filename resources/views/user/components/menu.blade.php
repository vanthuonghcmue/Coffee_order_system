<section id="menu" class="menu">
    <div class="container">

        <div class="section-title">
            <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">Show All</li>
                    <li data-filter=".filter-starters">Milk Tea</li>
                    <li data-filter=".filter-salads">Macchiato</li>
                    <li data-filter=".filter-specialty">Fruit Tea</li>
                </ul>
            </div>
        </div>

        <div class="row menu-container">
            @foreach($products as $product )
            <div class="col-lg-6 menu-item filter-starters">
                <div class="menu-content">
                    <a href="#">{{$product->name}}</a><span>{{$product->Price}}</span>
                </div>
                <div class="menu-ingredients">
                    Lorem, deren, trataro, filede, nerada
                </div>
            </div>
            @endforeach
        </div>
</section><!-- End Menu Section -->
