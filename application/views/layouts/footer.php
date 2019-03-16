<!-- Footer -->
<footer class="page-footer font-small text-white">

    <!-- Footer Links -->
    <div class="container-fluid text-center bg-medium-blue text-md-left  pt-4">
		<div class="container">
			<!-- Footer links -->
		    <div class="row text-center text-md-left mt-3 pb-3">

		        <!-- Grid column -->
		        <div class="col-md-6 mt-3">
		          <h6 class="text-uppercase mb-4 font-weight-bold">COLORES PAINTING COMPANY</h6>
		          <p>INTEGRITY, EXCELLENCE, VALUE AND PERSONAL ATTENTION.</p>

		          
		        </div>
		        <!-- Grid column -->

		        <hr class="w-100 clearfix d-md-none">

		        

		        <hr class="w-100 clearfix d-md-none">

		        <!-- Grid column -->
		        <div class="col-md-2 mt-3">
		          <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
		          <p>
		            <a href="<?= base_url('') ?>" class="text-white">Home</a>
		          </p>
		          <p>
		            <a href="<?= base_url('/services') ?>" class="text-white">Services</a>
		          </p>
		          <p>
		            <a href="<?= base_url('/about') ?>" class="text-white">Abous Us</a>
		          </p>
		          <p>
		            <a href="<?= base_url('/projects') ?>" class="text-white">Projects</a>
		          </p>
		          <p>
		            <a href="<?= base_url('/news') ?>" class="text-white">News</a>
		          </p>
		          <p>
		            <a href="<?= base_url('/contact') ?>" class="text-white">Contact</a>
		          </p>
		        </div>

		        <!-- Grid column -->
		        <hr class="w-100 clearfix d-md-none">

		        <!-- Grid column -->
		        <div class="col-md-4 mt-3">
		          <h6 class="text-uppercase mb-4 font-weight-bold">Contact US</h6>
		          <p>
		            <i class="fas fa-home mr-3"></i>Po Box 743, Daly City CA 94017.</p>
		          <p>
		            <i class="fas fa-envelope mr-3"></i> info@colorespaintingcompany.com</p>
		          <p>
		            <i class="fas fa-phone mr-3"></i>(415) 235-3155</p>
		          
		        </div>
		        <!-- Grid column -->

		    </div>
		    <!-- Footer links -->
		</div>
		    

    	

	    

    </div>
    <!-- Footer Links -->

   
    <div class="container-fluid text-center  bg-dark-blue text-md-left  pt-4">

	    <div class="container">
	    	<!-- Grid row -->
		    <div class="row d-flex align-items-center bg-negro">

		        <!-- Grid column -->
		        <div class="col-md-7 col-lg-8">

		          <!--Copyright-->
		          <p class="text-center text-md-left">© <?= date('Y' ) ?> Copyright:  COLORES PAINTING COMPANY
		           
		          </p>

		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-5 col-lg-4 ml-lg-0">

		          <!-- Social buttons -->
		          <div class="text-center text-md-right">
		            <ul class="list-unstyled list-inline">
		              <li class="list-inline-item">
		                <a class="btn-floating btn-sm rgba-white-slight mx-1">
		                  <i class="fab fa-facebook-f"></i>
		                </a>
		              </li>
		              <li class="list-inline-item">
		                <a class="btn-floating btn-sm rgba-white-slight mx-1">
		                  <i class="fab fa-twitter"></i>
		                </a>
		              </li>
		              <li class="list-inline-item">
		                <a class="btn-floating btn-sm rgba-white-slight mx-1">
		                  <i class="fab fa-google-plus-g"></i>
		                </a>
		              </li>
		              <li class="list-inline-item">
		                <a class="btn-floating btn-sm rgba-white-slight mx-1">
		                  <i class="fab fa-linkedin-in"></i>
		                </a>
		              </li>
		            </ul>
		          </div>

		        </div>
		        <!-- Grid column -->

		    </div>
		    <!-- Grid row -->
	    </div>
	</div>

</footer>
<!-- Footer -->

		


	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="<?= base_url('js/tinymce/tinymce.min.js') ?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('js/swappingwall.jquery.js') ?>" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>js/tinymce/jquery.tinymce.min.js"></script>
	<!--
	<script type="text/javascript">
		(function() {
  var $imgs = $('#gallery img');
  var $buttons = $('#buttons');
  var tagged = {};

  $imgs.each(function() {
    var img = this;
    var tags = $(this).data('tags');

    if (tags) {
      tags.split(',').forEach(function(tagName) {
        if (tagged[tagName] == null) {
          tagged[tagName] = [];
        }
        tagged[tagName].push(img);
      })
    }
  })

  $('<button/>', {
    text: 'Show All',
    class: 'active',
    click: function() {
      $(this)
        .addClass('active')
        .siblings()
        .removeClass('active');
      $imgs.show();
    }
  }).appendTo($buttons);

  $.each(tagged, function(tagName) {
    var $n = $(tagged[tagName]).length;
    $('<button/>', {
      text: tagName + '(' + $n + ')',
      click: function() {
        $(this)
          .addClass('active')
          .siblings()
          .removeClass('active');
        $imgs
          .hide()
          .filter(tagged[tagName])
          .show();
      }
    }).appendTo($buttons);
  });
}())


		
	</script>-->
	<script type="text/javascript">
	(function() {
  		var $imgs = $('#my-gallery img');
  		var $buttons = $('#buttons');
  		var tagged = {};

  		$imgs.each(function() {
    		var img = this;
    		var tags = $(this).data('tags');

	    if (tags) {
		    tags.split(',').forEach(function(tagName) {
		        if (tagged[tagName] == null) {
		            tagged[tagName] = [];
		        }
		        tagged[tagName].push(img);
		      })
	    }

	    $(".img-w").each(function() {
	    	alert('IMG')
    $(this).wrap("<div class='img-c'></div>")
    let imgSrc = $(this).find("img").attr("src");
     $(this).css('background-image', 'url(' + imgSrc + ')');
  })
            
  
  $(".img-c").click(function() {
    let w = $(this).outerWidth()
    let h = $(this).outerHeight()
    let x = $(this).offset().left
    let y = $(this).offset().top
    
    
    $(".active").not($(this)).remove()
    let copy = $(this).clone();
    copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active")
    $(".active").css('top', y - 8);
    $(".active").css('left', x - 8);
    
      setTimeout(function() {
    copy.addClass("positioned")
  }, 0)
    
  }) 
  
  

  
})

$(document).on("click", ".img-c.active", function() {
  let copy = $(this)
  copy.removeClass("positioned active").addClass("postactive")
  setTimeout(function() {
    copy.remove();
  }, 500)
	  })

	  $('<button/>', {
	    text: 'Show All',
	    class: 'btn btn-outline-info active',
	    click: function() {
	      $(this)
	        .addClass('active')
	        .siblings()
	        .removeClass('active');
	      $imgs.show();
	    }
	  }).appendTo($buttons);

	  $.each(tagged, function(tagName) {
	    var $n = $(tagged[tagName]).length;
	    $('<button/>', {
	      text: tagName + '(' + $n + ')',
	      class: 'btn btn-outline-info',
	      click: function() {
	        $(this)
	          .addClass('active')
	          .siblings()
	          .removeClass('active');
	        $imgs
	          .hide()
	          .filter(tagged[tagName])
	          .show();
	      }
	    }).appendTo($buttons);
	  });
	}())



		
	</script>

  </body>
</html>