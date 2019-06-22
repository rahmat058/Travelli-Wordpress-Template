  <!-- Footer -->
  <footer class="section teal darken-2 white-text center">
    <p class="flow-text">Travelville &copy; 2018</p>
  </footer>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Init Side nav
      $('.button-collapse').sideNav();

      // Init Slider
      $('.slider').slider({
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
      });

      // Autocomplete
      $('.autocomplete').autocomplete({
        data: {
          "Aruba": null,
          "Cancun Mexico": null,
          "Hawaii": null,
          "Florida": null,
          "California": null,
          "Jamaica": null,
          "Europe": null,
          "The Bahamas": null,
        }
      });

      // Init Scrollspy
      $('.scrollspy').scrollSpy();

    });
  </script>
</body>

</html>