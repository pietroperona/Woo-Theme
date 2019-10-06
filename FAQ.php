<?php
/**
 * Template Name: FAQ
 * Template for displaying a koodit businesses single page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="container container-faq">
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                  <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                  <i class="fas fa-globe-europe faq-ico"></i> <?php the_field('faq_sec_tit_1'); ?>
                  </a>
                  <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                  <i class="fas fa-sign-in-alt faq-ico"></i> <?php the_field('faq_sec_tit_2'); ?>
                  </a>
                  <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                  <i class="fas fa-shopping-basket faq-ico"></i> <?php the_field('faq_sec_tit_3'); ?>
                  </a>
                  <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                  <i class="fas fa-gifts faq-ico"></i> <?php the_field('faq_sec_tit_4'); ?>
                  </a>
                  <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5" aria-selected="false">
                  <i class="far fa-credit-card faq-ico"></i><?php the_field('faq_sec_tit_5'); ?>
                  </a>
                  <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
                  <i class="fas fa-truck faq-ico"></i> <?php the_field('faq_sec_tit_6'); ?>
                  </a>
              </div>
          </div>
          <div class="col-lg-8">
              <div class="tab-content" id="faq-tab-content">
                  <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                    <?php if( have_rows('collapse_1') ): ?>
                    <div id="accordion" role="tablist">
                      <?php $i=1; while ( have_rows('collapse_1') ) : the_row(); ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php the_sub_field('title'); ?>
                                </a>
                              </h5>
                            </div>
                            <div id="collapse-<?php echo $i; ?>" class="collapse <?php if ($i==1) { echo 'show'; } ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
                              <div class="card-body">
                              <p><?php the_sub_field('body'); ?></p>
                              </div>
                            </div>
                        </div>
                      <?php $i++; endwhile; ?>
                    </div>
                      <?php endif; ?>
                  </div>
                  <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                  <?php if( have_rows('collapse_2') ): ?>
                    <div id="accordion" role="tablist">
                      <?php $i=1; while ( have_rows('collapse_2') ) : the_row(); ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php the_sub_field('title'); ?>
                                </a>
                              </h5>
                            </div>
                            <div id="collapse-<?php echo $i; ?>" class="collapse <?php if ($i==1) { echo 'show'; } ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
                              <div class="card-body">
                              <p><?php the_sub_field('body'); ?></p>
                              </div>
                            </div>
                        </div>
                      <?php $i++; endwhile; ?>
                    </div>
                      <?php endif; ?>
                  </div>
                  <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                  <?php if( have_rows('collapse_3') ): ?>
                    <div id="accordion" role="tablist">
                      <?php $i=1; while ( have_rows('collapse_3') ) : the_row(); ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php the_sub_field('title'); ?>
                                </a>
                              </h5>
                            </div>
                            <div id="collapse-<?php echo $i; ?>" class="collapse <?php if ($i==1) { echo 'show'; } ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
                              <div class="card-body">
                              <p><?php the_sub_field('body'); ?></p>
                              </div>
                            </div>
                        </div>
                      <?php $i++; endwhile; ?>
                    </div>
                      <?php endif; ?>
                  </div>
                  <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                  <?php if( have_rows('collapse_4') ): ?>
                    <div id="accordion" role="tablist">
                      <?php $i=1; while ( have_rows('collapse_4') ) : the_row(); ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php the_sub_field('title'); ?>
                                </a>
                              </h5>
                            </div>
                            <div id="collapse-<?php echo $i; ?>" class="collapse <?php if ($i==1) { echo 'show'; } ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
                              <div class="card-body">
                              <p><?php the_sub_field('body'); ?></p>
                              </div>
                            </div>
                        </div>
                      <?php $i++; endwhile; ?>
                    </div>
                      <?php endif; ?>
                  </div>
                  <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                  <?php if( have_rows('collapse_5') ): ?>
                    <div id="accordion" role="tablist">
                      <?php $i=1; while ( have_rows('collapse_5') ) : the_row(); ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php the_sub_field('title'); ?>
                                </a>
                              </h5>
                            </div>
                            <div id="collapse-<?php echo $i; ?>" class="collapse <?php if ($i==1) { echo 'show'; } ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
                              <div class="card-body">
                              <p><?php the_sub_field('body'); ?></p>
                              </div>
                            </div>
                        </div>
                      <?php $i++; endwhile; ?>
                    </div>
                      <?php endif; ?>
                  </div>
                  <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                  <?php if( have_rows('collapse_6') ): ?>
                    <div id="accordion" role="tablist">
                      <?php $i=1; while ( have_rows('collapse_6') ) : the_row(); ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                              <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php the_sub_field('title'); ?>
                                </a>
                              </h5>
                            </div>
                            <div id="collapse-<?php echo $i; ?>" class="collapse <?php if ($i==1) { echo 'show'; } ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
                              <div class="card-body">
                              <p><?php the_sub_field('body'); ?></p>
                              </div>
                            </div>
                        </div>
                      <?php $i++; endwhile; ?>
                    </div>
                      <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



<?php get_footer(); ?>