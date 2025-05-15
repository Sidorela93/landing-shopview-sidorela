<section class="py-5 bg-white"> 
  <div class="container">
    <h2 class="text-center mb-4 text-dark">Contact Us</h2>
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">

        <form action="contact-form.php" method="post" style="background: linear-gradient(180deg, #0F0049 25.12%, #4429AD 100%); padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); color: #fff;">
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required style="border-radius: 8px;">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required style="border-radius: 8px;">
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="4" required style="border-radius: 8px;"></textarea>
          </div>

          <div class="form-check mb-4">
            <input type="checkbox" name="consent" id="consent" class="form-check-input" required>
            <label for="consent" class="form-check-label">I consent to the processing of my data.</label>
          </div>

          <button type="submit" class="btn btn-light w-100" style="border-radius: 8px; font-weight: bold; color: #0F0049;">Send Message</button>
        </form>

      </div>
    </div>
  </div>
</section>
