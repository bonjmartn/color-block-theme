
<footer>

  <div class="container-1000">

        <div class="section group">
          <div class="col span_3_of_12">
            <?php if ( ! dynamic_sidebar( 'footer-1') ): ?>
              <h3>Footer Setup</h3>
              <p>Add widgets to this footer section by going to Appearance > Widgets and adding widgets to the "Footer 1" section.</p>
            <?php endif; ?>
          </div>

          <div class="col span_3_of_12">
            <?php if ( ! dynamic_sidebar( 'footer-2') ): ?>
              <h3>Footer Setup</h3>
              <p>Add widgets to this footer section by going to Appearance > Widgets and adding widgets to the "Footer 2" section.</p>
            <?php endif; ?>
          </div>

          <div class="col span_3_of_12">
            <?php if ( ! dynamic_sidebar( 'footer-3') ): ?>
              <h3>Footer Setup</h3>
              <p>Add widgets to this footer section by going to Appearance > Widgets and adding widgets to the "Footer 3" section.</p>
            <?php endif; ?>
          </div>

          <div class="col span_3_of_12 social-widget">
            <?php if ( ! dynamic_sidebar( 'footer-social-icons') ): ?>
              <h3>Social Icons Setup</h3>
              <p>Add your social media icons here with a widget. Go to Appearance > Widgets and add the Social Icons widgets to the "Footer 4" section.</p>
            <?php endif; ?>
          </div>
      
      </div>

        <!-- Bottom Strip -->
        <div class="footer-strip">
          <span id="copyright">&copy; <?php echo date ('Y') ?> <?php bloginfo('name'); ?> &nbsp; &bull; &nbsp; Color Block Theme by <a href="https://www.zenwebthemes.com/">ZenWebThemes.com</a></span>
        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>