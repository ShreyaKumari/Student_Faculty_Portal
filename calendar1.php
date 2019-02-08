<?php
include_once 'header4.php';
?>
            <div class="main" style="background-color:white";>
				<div class="inner" style="background-color:white";>
					<header class="align-center" style="background-color:white";>
                    
                    <h2 style="align:center;">Academic Calendar</h2>
                    
                    <img id="myImg" src="oddsem.jpg" alt="Odd Semester 2018" style="width:100%;max-width:300px">
                    <p style="align:center; color:black;background-color:white;">Odd semester 2018</p>
                
					</header>
            </div>
	
            <!-- The Modal -->
                    <div id="myModal" class="modal">
                      <span class="close">&times;</span>
                      <img class="modal-content" id="img01">
                      <div id="caption"></div>
                    </div>
    					

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script>
            // Get the modal
            var modal = document.getElementById('myModal');
            
            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myImg');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }
            </script>

	</body>
</html>
 <?php
        include_once 'footer2.php';
        ?>