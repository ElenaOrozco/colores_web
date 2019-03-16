<!-- Footer -->
<footer class="page-footer font-small text-white">

   
    <!-- Footer Links -->

   
    <div class="container-fluid text-center  bg-dark-blue text-md-left  pt-4">

	    <div class="container">
	    	<!-- Grid row -->
		    <div class="row d-flex align-items-center bg-negro">

		        <!-- Grid column -->
		        <div class="col-md-7 col-lg-8">

		          <!--Copyright-->
		          <p class="text-center text-md-left">© <?= date('Y' ) ?> Copyright: <strong> Colores Painting Company</strong>
		           
		          </p>

		        </div>
		        <!-- Grid column -->

		       

		    </div>
		    <!-- Grid row -->
	    </div>
	</div>

</footer>
<!-- Footer -->

	

	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="<?= base_url('js/tinymce/tinymce.min.js') ?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('js/swappingwall.jquery.js') ?>" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('js/SweetAlert/sweetalert.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>js/tinymce/jquery.tinymce.min.js"></script>
    
  
   
	<script type="text/javascript">


		$(document).ready(function(){

			// var menu = $('#products').offset().top/3;
			// var marketing = $('.marcas').offset().top;

			// tinymce.init({
   //              selector: 'textarea',
   //              language: 'es',
   //              plugins: "table code paste",
   //              menubar: "tools table format view edit pastetext"
   //          });  
   						 $(".add-campo").on("click",function(e){
                    var dato = $(this).data("info");
                    tinyMCE.activeEditor.execCommand('mceInsertContent', false, dato);
                    return false;                    
                });

                tinymce.init({
                    selector: 'textarea',
                    language: 'es',
                    plugins: "table code paste",
                    menubar: "tools table format view edit pastetext"
                }); 



			$(window).on('scroll', function(){
				
				if ( $(window).scrollTop() < 100){

					$("#nav-datos").fadeIn(1000, function() {
					    $(this).addClass("d-sm-block");
					    $("header nav").removeClass('fixed-top')
					}); 
				}
				if ( $(window).scrollTop() > 100){

					$("#nav-datos").fadeIn(1000, function() {
					    $(this).removeClass("d-sm-block");
					    $("header nav").addClass('fixed-top')
					}); 
				}
				

					
			});


		    $("#myTable").DataTable({
		      "language": {
		                        "url": "<?php echo base_url() . 'assets/dataTables.spanish.lang'; ?>"
		                    }, 
				     "buttons": [
				    'copy', 'excel', 'pdf'
				]
			});

			$("#myTableLg").DataTable({
				"scrollX": true,
		      	"language": {
		                        "url": "<?php echo base_url() . 'assets/dataTables.spanish.lang'; ?>"
		                    },

				     "buttons": [
				    'copy', 'excel', 'pdf'
				] 
			});


	        $('#example2').DataTable({
	          "paging": true,
	          "lengthChange": false,
	          "searching": false,
	          "ordering": false,
	          "info": true,
	          "autoWidth": false,
	          "buttons": [
			        'copy', 'excel', 'pdf'
			    ]
			});

			/*$('#myTable').DataTable();*/

      });


		


		$("#btn-search").click(function() {
			$("#input-search").toggle()
			  			
		});


	
	</script>

  </body>
</html>