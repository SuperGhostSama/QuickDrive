<!-- Carousel SplideJS-->
<div>
    <section id="main-carousel" class="splide" aria-label="My Awesome Gallery" >
      <div class="splide__track" >
        <ul class="splide__list" >

          @php
            $arr = json_decode($car->images);
          @endphp

        @if ($arr)
          @foreach ($arr as $image)

            <li class="splide__slide" >
              <img src="{{ "/storage".str_replace("public","",$image) }}" alt="" >
            </li>
          @endforeach
        @endif
        </ul>
      </div>
    </section>

    <ul id="thumbnails" class="thumbnails">

      @php
        $arr = json_decode($car->images);
      @endphp
    @if ($arr)
      @foreach ($arr as $image)

        <li class="thumbnail">
          <img src="{{ "/storage".str_replace("public","",$image) }}" alt="">
        </li>
      @endforeach
    @endif
    </ul>
  </div>