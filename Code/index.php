
<?php include "inc/header.php";?> 

  <div class="container" >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/slide-1.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide-2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/slide-3.jpeg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	<div class="row">
		<div class="col-md-8 left">
			<h1>Pets Information</h1>
			<div class="row">
				<div class="col-md-6 left">
					<img src="images/cat1.jpg" class="img-thumbnail">
				</div>
				<div class="col-md-6 right">
					<h3>Pet Details</h3>
					<p>Pet Details Pet Details Pet Details Pet Details Pet Details Pet Details Pet Details Pet Details Pet Details</p>
					<button><a href="addtocart.php"><i class="fa fa-cart-plus"> Add to cart</i></a></button>
				</div>
			</div>
		</div>
		<div class="col-md-4 right">
			<h1>Category</h1>
			<div class="category">
				<ul>
					<li>Cat</li>
					<li>Dog</li>
					<li>Fish</li>
					<li>Bird</li>
				</ul>
			</div>
		</div>
	</div>
  
  <div class="card text-center">
    <div class="card-body">
      <h5 class="title">Our Goal</h5>
      <p class="text">"Will you like to see your moment framed by thousands of clicks? And we will!
        It's simple: we list the best portfolio of photographers online, help you to make your event successful at the best rates, arrange them in a heartbeat to frame your special events!
        Intrigued? Today, let 's begin our partnership!
        Just stay tuned!"</p>
    </div>
  </div>
</div>


  <footer>
     <div class="footer">
       <div class="logo">
        <h5 class="my-0 mr-md-auto font-weight-normal"> <a href="index.html"><img src="assets/images/logo.jpg" style="height: 50px;" alt=""></a></h5>
       </div>
       <div class="f_menu">
        <ul class="list-group list-group-flush">
          <a href="index.html"> Home </a>
          <a href="about.html"> About</a> 
          <a href="contact.html">Contact Us</a>
        </ul>
       </div>
       <div class="newsteller">
             <div class="sec_1"> <h5>Get Our Newsteller</h5> </div>
             <div class= "sec_2">
               <input type="email" placeholder="Email address.."></input>
               <button type="submit"> Subscribe</button>
             </div> 
             
       </div>
      </div>
  </footer>  

  </body>
  
</html>
