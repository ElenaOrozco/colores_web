
<!-- 
<section class="my-gallery bg-light">
	
	<div class="container-fluid">
		<h3 class="title-section text-uppercase text-center text-dark pt-5">GALLERY</h3>
		<hr class="border-title pb-5">
	  
		<ul class="pgwSlideshow">
		    <li>
		    	<img src="<?= base_url('img/crispycreme12.jpg') ?>" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
		    <li>
		    	<img src="<?= base_url('img/crispycreme12.jpg') ?>" alt="Rio de Janeiro, Brazil"></li>
		    <li>
		    	<img src="<?= base_url('img/crispycreme12.jpg') ?>" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
		    <li>
		    	<img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li><img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li><img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li><img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li><img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li><img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li><img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li><img src="<?= base_url('img/crispycreme12.jpg') ?>" alt=""></li>
		    <li>
	        <a href="http://en.wikipedia.org/wiki/Monaco" target="_blank">
	            <img src="<?= base_url('img/crispycreme12.jpg') ?>" alt="Monaco">
	        </a>
	    </li>
	</ul>

		<div class="row d-flex justify-content-center py-5">
			<a href="<?= base_url('projects') ?>" class="btn btn-outline-info px-5 text-uppercase font-weight-bold">View More</a>
		</div>
		
		  
	</div>
</section>




		<script type="text/javascript" src='js/jquery.min.js'></script>
		<script type="text/javascript" src='js/swappingwall.jquery.js'></script>
		<script type="text/javascript" src='js/common.js'></script>
		<script type="text/javascript" src='<?= base_url('js/pgwslideshow.js') ?>'></script>
		<script type="text/javascript">
			
			    
			    $('.pgwSlideshow').pgwSlideshow();
				
		</script> -->

<section class="container-gallery">
	<div class="container gallery">
	  <div class="img-w">
	    <img src="https://images.unsplash.com/photo-1485766410122-1b403edb53db?dpr=1&auto=format&fit=crop&w=1500&h=846&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1485793997698-baba81bf21ab?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1485871800663-71856dc09ec4?dpr=1&auto=format&fit=crop&w=1500&h=2250&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1485871882310-4ecdab8a6f94?dpr=1&auto=format&fit=crop&w=1500&h=2250&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1485872304698-0537e003288d?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1485872325464-50f17b82075a?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1470171119584-533105644520?dpr=1&auto=format&fit=crop&w=1500&h=886&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1485881787686-9314a2bc8f9b?dpr=1&auto=format&fit=crop&w=1500&h=969&q=80&cs=tinysrgb&crop=" alt="" /></div>
	  <div class="img-w"><img src="https://images.unsplash.com/photo-1485889397316-8393dd065127?dpr=1&auto=format&fit=crop&w=1500&h=843&q=80&cs=tinysrgb&crop=" alt="" /></div>
	</div>
</section>

<script type="text/javascript">
$(function() {
	
  $(".img-w").each(function() {
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
</script>