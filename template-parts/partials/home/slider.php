


<section class="o-section c-section--slider">
  <div class="c-slider">
    <div class="c-slider-main" 
      data-flickity='{ "contain": true, "wrapAround": true, "autoPlay": 4500, "draggable": false, "fade": true }'>
        <?php 
        $images = get_field('sliders');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
                <?php foreach( $images as $image_id ): ?>
                    <div class="c-slider-cell">
                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    </div>
                <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="o-section__wrapper">
      <div class="c-slider__nav">
        <div class="c-slider-nav"
          data-flickity='{ "asNavFor": ".c-slider-main", "contain": true, "pageDots": false, "prevNextButtons": false, "rightToLeft": true, "draggable": false, "adaptiveHeight": true }'>
          <div class="c-slider-navcell">
            <div class="c-slider__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-title-01.webp" alt="">
            </div>
            <a href="#" title="" class="c-slider__cta">اطلاعات بیشتر</a>
          </div>
          <div class="c-slider-navcell">
            <div class="c-slider__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-title-02.webp" alt="">
            </div>
            <a href="#" title="" class="c-slider__cta">اطلاعات بیشتر</a>
          </div>
          <div class="c-slider-navcell">
            <div class="c-slider__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-title-03.webp" alt="">
            </div>
            <a href="#" title="" class="c-slider__cta">اطلاعات بیشتر</a>
          </div>
          <div class="c-slider-navcell">
            <div class="c-slider__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-title-04.webp" alt="">
            </div>
            <a href="#" title="" class="c-slider__cta">اطلاعات بیشتر</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>