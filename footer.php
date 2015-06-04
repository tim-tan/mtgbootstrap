<!-- Footer Section -->
  <section id="footer" class="footer container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Copyright &copy; 2015 <em><a href="#">Marathon Technology Group.</a></em> All rights reserved.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Scrolling Nav JavaScript -->

  <script type="text/javascript">
    $(document).ready(function() {
      $('#support').multiselect({
        buttonWidth: '200px',
        nonSelectedText: 'IT Support Services'
      });

      $('#software').multiselect({
        buttonWidth: '200px',
        nonSelectedText: 'Software Development'
      });

      $('#marketing').multiselect({
        buttonWidth: '200px',
        nonSelectedText: 'Marketing Development'
      });
    });
  </script>

  <script>
    // A sneaky spy determining active states of the navbar links.
    $('body').scrollspy({
    offset: 70,
    });
  </script>

  <script>
    // Sticky Navbar Spell
    $(window).scroll(function() {
      if ($(window).scrollTop() > 670) {
        $('.navbar').addClass('navbar-fixed');
        $('body').addClass('add-body');
      } else {
        $('.navbar').removeClass('navbar-fixed');
        $('body').removeClass('add-body');
      }
    });
  </script>

<?php wp_footer(); ?>

</body>
</html>
