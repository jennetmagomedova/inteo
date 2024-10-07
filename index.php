<?php 
/*
Template Name: Index
*/

get_header(); ?>
    <main>
      <section class="hero">
        <div class="container">
          <h1><?php the_field('main_title'); ?></h1>
          <p>
            <?php the_field('main_description'); ?>
          </p>
        </div>
        <div class="hero__banner">
          <img
            src="<?php the_field('main_image'); ?>"
            alt="A room with a modern design"
            width="1440"
            height="640"
            loading="lazy"
          />
          <img
            src="<?php echo INTEO_IMG_DIR ?>/hero/get-in-touch.png"
            alt="Get in touch"
            class="hero__badge"
            width="120"
            height="120"
          />
        </div>
        <div class="hero__awards">
          <div class="container hero__awards_inner">
            <h2 class="hero__awards_title">Awards</h2>
            <div class="hero__awards_list">
              <div class="hero__awards_item">
                <svg>
                  <use
                    xlink:href="<?php echo INTEO_IMG_DIR ?>/icons/sprite.svg#german-design-award"
                  ></use>
                </svg>
                <span>German Design Award 2021</span>
              </div>
              <div class="hero__awards_item">
                <svg>
                  <use xlink:href="<?php echo INTEO_IMG_DIR ?>/icons/sprite.svg#a-design-award"></use>
                </svg>
                <span>Gold A’ Design Award 2021</span>
              </div>
              <div class="hero__awards_item">
                <svg>
                  <use
                    xlink:href="<?php echo INTEO_IMG_DIR ?>/icons/sprite.svg#if-design-award"
                  ></use>
                </svg>
                <span>IF Design Award 2020</span>
              </div>
              <div class="hero__awards_item">
                <svg>
                  <use
                    xlink:href="<?php echo INTEO_IMG_DIR ?>/icons/sprite.svg#good-design-award"
                  ></use>
                </svg>
                <span>Good Design Award 2019</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section about container" id="about">
        <div class="about__description">
          <hgroup class="section__header">
            <p>ABOUT US</p>
            <h2><?php the_field('about_title'); ?></h2>
          </hgroup>
          <div class="about__text">
            <p>
              <?php the_field('about_text'); ?>
            </p>
          </div>
        </div>
        <div class="about__images">
          <img
            src="<?php the_field('about_image_1'); ?>"
            alt="Kitchen design"
            width="652"
            height="1116"
            loading="lazy"
          />
          <img
            src="<?php the_field('about_image_2'); ?>"
            alt="Bedroom design"
            width="652"
            height="1116"
            loading="lazy"
          />
          <img
            src="<?php echo INTEO_IMG_DIR ?>/about/badge.png"
            alt=""
            class="about__badge"
            width="120"
            height="120"
          />
        </div>
      </section>
      <section class="metrics container">
        <div class="metrics__list">
          <div>
            <p>100%</p>
            <p>SATISFITATION CLIENTS</p>
          </div>
          <div>
            <p>250</p>
            <p>EMPLOYEES ON WORLDWIDE</p>
          </div>
          <div>
            <p>3469</p>
            <p>PROJECTS COMPLETED ON 60 COUNTRIES</p>
          </div>
        </div>
      </section>
      <section class="section services container" id="services">
        <hgroup class="section__header">
          <p>Our services</p>
          <h2><?php the_field('services_title'); ?></h2>
        </hgroup>
        <div class="services__list">
          <?php if(get_field('services_cards')): ?>
            <?php while(has_sub_field('services_cards')) : ?>
              <div>
                <img
                  src="<?php the_sub_field('services_card_icon'); ?>"
                  alt=""
                  width="48"
                  height="48"
            
                />
                <p><?php the_sub_field('services_card_title'); ?></p>
              </div>   
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </section>
      <section class="section works container" id="works">
        <div class="works__column">
          <hgroup class="section__header">
            <p>Recent works</p>
            <h2><?php the_field('works_title'); ?></h2>
          </hgroup>
          <?php if( have_rows('works_main') ): ?>
            <?php while( have_rows('works_main') ): the_row(); ?>
            <div class="works__item">
              <img
              src="<?php the_sub_field('works_main_image'); ?>"
              alt="Villa Furnishing & Interior"
              width="592"
              height="444"
              loading="lazy"
            />
              <h3><?php the_sub_field('works_main_title'); ?></h3>
            </div>
            <?php endwhile; ?>
          <?php endif; ?> 
        </div>
        <div class="works__column">
          <?php if(get_field('works_items')): ?>
            <?php while(has_sub_field('works_items')) : ?>
              <?php if( have_rows('works_item') ): ?>
                <?php while( have_rows('works_item') ): the_row(); ?>
                <div class="works__item">
                  <img
                  src="<?php the_sub_field('works_image'); ?>"
                  alt="Villa Furnishing & Interior"
                  width="592"
                  height="444"
                  loading="lazy"
                />
                  <h3><?php the_sub_field('works_title'); ?></h3>
                </div>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </section>
      <section class="contacts container" id="contacts">
        <hgroup class="contacts__header">
          <h2><?php the_field('contacts_title'); ?></h2>
          <p>Send us a hi</p>
        </hgroup>
        <div class="contacts__body">
          <div class="contacts__address">
            <p>Brooklyn, New York</p>
            <address>
              <?php the_field('contacts_address'); ?>
            </address>
          </div>
          <div class="contacts__item">
            <p>Email us at</p>
            <a href="mailto:<?php the_field('contacts_email'); ?>"><?php the_field('contacts_email'); ?></a>
          </div>
          <div class="contacts__item">
            <p>If you're hurry, quick call for us</p>
            <?php if( have_rows('contacts_phone') ): ?>
              <?php while( have_rows('contacts_phone') ): the_row(); ?>
                <a href="tel:<?php the_sub_field('phone_link'); ?>"><?php the_sub_field('phone_number'); ?></a>
              <?php endwhile; ?>
            <?php endif; ?> 
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
