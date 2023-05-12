<section id="contact">
  <div class="container mt-lg-5 pt-5">
    <div class="row">
      <div class="col-lg-6 mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.226154894321!2d106.78914289252958!3d-6.20391062850161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6c12f9b66af%3A0xa5a54e174c41bd1b!2sJl.%20Kemanggisan%20Pulo%201%2C%20Palmerah%2C%20Kec.%20Palmerah%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011480!5e0!3m2!1sid!2sid!4v1683896561864!5m2!1sid!2sid" class="rounded-3 rounded-lg col-12" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-6 mt-5">
        <p class="fw-bold fs-3">Contact</p>
        <form action="<?= BASEURL; ?>/home/send" method="post" accept-charset="utf-8" target="_blank">
          <div class="mb-4">
            <label for="exampleInputText1" class="form-label d-block">Your Full Name</label>
            <input type="text" name="name" class="form col-12 text-sec-clr text-capitalize" id="name" required autocomplete="off">
          </div>
          <div class="mb-4">
            <label for="exampleInputText2" class="form-label d-block">Message</label>
            <input type="text" name="message" class="form col-12 text-sec-clr text-capitalize" id="message" required autocomplete="off">
          </div>
          <button type="submit" name="submit" id="submit" class="btn text-light" style="background-color: rgb(66, 66, 66);">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>