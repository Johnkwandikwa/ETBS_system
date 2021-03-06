

<!--
  <section id="booking">

  <div class="btn-group btn-group-justified">			
			<div class="btn-group">
			<button id="form1btn" type="button" href="#bookingsearch" class="btn btn-primary" value="form1">Bus booking </button>
      </div>
      

			<div class="btn-group">
			<button id="form2btn" type="button" href="#allresults" class="btn btn-primary" value="form2" >Search buses Schedule</button>
			</div>
</div>


    
    
    
      <h2>Choose Your Journey</h2>

      
      <div class="bookingsearch">

      <form class="form-inline" id ="form1">
        
          <label class="sr-only" for="inlineFormInputName2">From</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Travelling from">
        
          <form class="form-inline">
              <label class="sr-only" for="inlineFormInputName2">To</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Travelling To">

              <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Date</label>
                  <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Date">
                  <form class="form-inline">
                      <label class="sr-only" for="inlineFormInputName2">Date</label>
                      <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Date" hidden>

                      <div class="form-group col-md-4">
                          <label for="inputState">Person(s)</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
           
        
          <div class="form-check mb-2 mr-sm-2" hidden>
            <input class="form-check-input" type="radio" id="inlineFormCheck">
            <label class="form-check-label" for="inlineFormCheck"> One way</label>
          
         
              <input class="form-check-input" type="radio" id="inlineFormCheck">
              <label class="form-check-label" for="inlineFormCheck">
               Roundtrip
              </label>
            </div>
        
          <button type="submit" class="btn btn-primary mb-2">Search</button>
          <div>
        </form>
        </div>


        <div class="allresults" id="form2" >
          <form role="form" action ="allsearchresults.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <label for="searchbydate"> Select date </label>
                <input type="date" class="form-control" id="searchdate" name="searchdate"  required>
            </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary"> View available buses </button>
           </div>     
           </div>
          </form>
            </div>
  </section>



  <--   -->



<body>
	<div id="main">
		<div id="tab-btn">

      <div class="btn-group">
			<button id="form1btn" type="button" href="#bookingsearch" class="login active" value="form1">Bus booking </button>
      </div>

      <div class="btn-group">
			<button id="form2btn" type="button" href="#allresults" class="register" value="form2" >Search  Schedule</button>
			</div>
      

      
    </div>
    


		<div class="content">
			<h2>Bus booking</h2>
			<form action="#" method="post" id="login-box">



      <label class="sr-only" for="inlineFormInputName2">From</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Travelling from">
        
          <form class="form-inline">
              <label class="sr-only" for="inlineFormInputName2">To</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Travelling To">

                  <label class="sr-only" for="inlineFormInputName2">Date</label>
                  <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Date">
                

                      <div class="form-group col-md-4">
                          <label for="inputState">Person(s)</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>


                        <button type="submit" class="btn btn-primary mb-2">Search</button>
</div>


        


      </form>
      

    
    


		<div class="other">
			<h2>view schedule</h2>
			<form action="#" method="post" id="reg-box">
        
      

      <div class="row">
              <div class="col-sm-6">
                <label for="searchbydate"> Select date </label>
                <input type="date" class="form-control" id="searchdate" name="searchdate"  required>
            </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary"> View available buses </button>
           </div>     
           </div>


			</form>
		</div>
	</div>





  <!-- Section for other web forms and function-->
  


  <section id="bodyfunction">
    <div class="container">
      <div class="forms">
        <form id="">

        </form>
      </div>
    </div>
  </section>

  

  

    <section id="bodytitle">
        <div id="bodytitles">

      <h2>Top Destination </h2>
      
      
            </div>
            
    </section>


    <section id="addsandcard">
      <div class="container">
        <div class="row">

              <div class="card-deck">
                        <div class="card">
                          <img src="<?php echo base_url();?>assets/img/tanga.jpg" class="card-img-top" alt="Magoroto">
                          <div class="card-body">
                            <h5 class="card-title">Magoroto</h5>
                            <h2 class="card-title">Tanga</h2>
                          <h6 class="card-title">Starting From 14,000 Tsh*</h6>
                           
                            <p class="card-text"></p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Travel From Dar to Magoroto</small>
                          </div>
                        </div>
                        <div class="card">
                          <img src="<?php echo base_url();?>assets/img/mwanza.jpg" class="card-img-top" alt="Mwanza">
                          <div class="card-body">
                            
                              <h2 class="card-title">Mwanza</h2>
                              <h6 class="card-title">Starting From 44,000 Tsh*</h6>
                            
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Travel From Dar to Mwanza</small>
                          </div>
                        </div>
                        <div class="card">
                          <img src="<?php echo base_url();?>assets/img/kilimanjaro.jpg" class="card-img-top" alt="kilimanjaro">

                          <div class="card-body">
                              <h5 class="card-title">Moshi</h5>
                              <h2 class="card-title">kilimanjaro</h2>
                              <h6 class="card-title">Starting From 22,000 Tsh*</h6>
                             
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Travel from Dar to moshi</small>
                          </div>
                        </div>
                      </div>
          
          </div>




      </div>
      

     
    </section>


    <!--Customer care-->
    <section id="customercare">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="messagehelp">
              Facing  any troubles  in your booking, feel free to contact us <br>
            Call +2550123456(Toll free) </p>
              <span>@customercare</span>
              <img src="<?php echo base_url();?>assets/img/cust.jpg">

            </p>

          

            <form>
                <div class="form-group">
                  <label for="EmailArea">Email address</label>
                  <input type="email" class="form-control" id="emailinputs" placeholder="name@example.com">
                </div>
               
                
                <div class="form-group">
                  <label for="MessageArea">Message</label>
                  <textarea class="form-control" id="messagehelptext" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send</button>
              </form>


          </div>
        </div>
      </div>
    </section>


    <section id="ourservices">

      <h2 class="servicesheader">
        Our Services
      </h2>

      
            
          <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="#">Manage Booking</a></h5>
                <img src="<?php echo base_url();?>assets/img/busicon.png" class="card-img-top" alt="...">
              
              <p class="card-text">Travelling for business or pleasure? 
                  You can plan your trip and pay online in just a few minutes from the comfort of
                   your home or office or mobile phone.</p>
              <p class="card-text"><small class="text-muted"> </small></p>
            </div>
       
          </div>



    </section>

    




    
  </body>
</html>
