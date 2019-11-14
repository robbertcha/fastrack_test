<?php
    include_once "header.php";
?>

<main>
      <section id="intro_cont">
            <div class="container">
                  <div class="content_box blue_bg">
                        <label>Welcome</label>
                        <span>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin. Suspendisse egestas ex non aliquet efficitur.<br><br>Quisque vel nunc tempor, scelerisque magna vitae, viverra erat. Fusce iaculis metus ut ex elementum interdum.
                        </span>
                  </div>
            
                  <div class="content_box">
                        <label>Book Now</label>
                        <span>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin.
                        </span>

                        <form method="post" action="/">
                              <input type="text" id="datepicker" class="col-md-12 col-xs-12" placeholder="Check-in Date">

                              <input type="text" id="day_night" placeholder="Nights">

                              <button id="btn_submit">Check Availability</button>
                        </form>
                  </div>
            
                  <div class="content_box">
                        <label>Facilities</label>
                        <span>
                              Quisque vel nunc tempor, scelerisque magna vitae, viverra erat. Fusce iaculis metus ut ex elementum interdum.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sodales mauris vitae nisl lacinia, a ullamcorper dolor sollicitudin. Suspendisse egestas ex non aliquet efficitur.
                        </span>
                  </div>
            
                  <div class="content_img">
                        <img src="assets/images/img1.png" width="530" height="300">
                  </div>
            </div>
      </section>

      <section id="gmap_cont">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.560392421399!2d153.0436835156007!3d-27.45180792251578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91599134ce470d%3A0xdd8f9f49e770a576!2s9%20Longland%20St%2C%20Newstead%20QLD%204006!5e0!3m2!1sen!2sau!4v1573731526014!5m2!1sen!2sau" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </section>

</main>

<?php
    include_once "footer.php";
?>