<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <link rel="stylesheet" href="contact.css">
  <title>Pustaka Ilmiah</title>
</head>
<body>

  <!-- Navbar -->
  <div id="navbar"></div>
  <!-- End of Navbar -->

  <!-- GoogleMaps -->
  <iframe class="min-vh-50 w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.7512199504536!2d103.13602981404495!3d5.301464737633199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b7be521f626f6d%3A0x3696394ac71a3ad2!2sPustaka%20Ilmiah!5e0!3m2!1sen!2smy!4v1639968124196!5m2!1sen!2smy" loading="lazy"></iframe>
  <!-- End of GoogleMaps -->


  <section class="min-vh-50 w-100 p-3">
    <div class="container d-md-flex justify-content-around">

      <!-- Accordion -->
      <div class="vw-md-40 p-3 m-1">
        <h6>FREQUENTLY ASKED QUESTIONS</h6>
        <hr>
        <div class="accordion accordion-flush" id="accordionFlush">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                What are the delivery charges for orders from the Online Shop?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
              <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi impedit quae veritatis modi aperiam aliquam ad soluta voluptate atque reprehenderit.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Which payment methods are accepted in the Online Shop?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
              <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem quisquam quibusdam voluptate porro aut!</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                How long will delivery take?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
              <div class="accordion-body">Lorem ipsum dolor sit amet.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                How secure is shopping in the Online Shop? Is my data protected?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
              <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ducimus molestiae sit beatae porro mollitia! Iste dolores nobis pariatur ex odio alias? Id, voluptatum reiciendis?</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                What exactly happens after ordering?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
              <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nisi, saepe inventore vel quis quod rem, unde quos natus ad repellendus dolores voluptas esse, ducimus culpa aliquam neque possimus similique.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                Do i receive an invoice for my order?
              </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
              <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error exercitationem blanditiis dignissimos, labore maiores repudiandae!</div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Accordion -->

      <!-- Form -->
      <div class="vw-md-40 p-3 m-1">
        <h6>SEND US AN EMAIL</h6>
        <hr>
        <div class="w-100">
          <form>
            <label class="p-1" for="name">Your Name (required)</label>
            <input class="w-100 p-2 shadow-sm" type="text" name="name" id="name" required>
            <label class="p-1" for="email">Your Email (required)</label>
            <input class="w-100 p-2 shadow-sm" type="text" name="email" id="email" required>
            <label class="p-1" for="message">Your Message (required)</label>
            <textarea class="w-100 p-2 shadow-sm" type="text" name="message" id="message" required></textarea>
            <button class="btn bg-maroon text-white">SUBMIT</button>
          </form>
        </div>
        
      </div>
      <!-- End of Form -->

    </div>
  </section>
  
  <hr>

  <!-- Footer -->
  <div id="footer"></div>
  <!-- End of Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    $("#footer").load("footer.php"); 
    $("#navbar").load("navbar.php"); 
  </script>
</body>
</html>