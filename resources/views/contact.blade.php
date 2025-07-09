<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <section class="contact-wrapper" id="contact">
  <div class="contact-container">
    
    <!-- Left: Contact Info -->
    <div class="contact-info-box">
      <h2>Contact Information</h2>
      <p>Say something to start a live chat!</p>

      <ul class="contact-details">
        <li><i class="fas fa-phone-alt"></i> +1012 3456 789</li>
        <li><i class="fas fa-envelope"></i> demo@gmail.com</li>
        <li><i class="fas fa-map-marker-alt"></i> 132 Dartmouth Street Boston, <br> Massachusetts 02156 United States</li>
      </ul>

      <div class="social-icons">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-discord"></i></a>
      </div>
    </div>

    <!-- Right: Contact Form -->
    <div class="contact-form-box">
      <h2>Contact Us</h2>
      <p>Any question or remarks? Just write us a message!</p>

      <form class="contact-form" action="#" method="POST">
        <div class="form-row">
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="John" required>
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Doe" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+1 012 3456 789">
          </div>
        </div>

        <div class="form-group">
          <label>Select Subject?</label>
          <div class="radio-options">
            <label><input type="radio" name="subject" value="general" checked> General Inquiry</label>
            <label><input type="radio" name="subject" value="courses"> Courses</label>
            <label><input type="radio" name="subject" value="mentorship"> Mentorship</label>
            <label><input type="radio" name="subject" value="others"> Others</label>
          </div>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" placeholder="Write your message.." required></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="send-btn">
            Send Message <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </form>

    </div>
  </div>
</section>


<script>
  const form = document.querySelector(".contact-form");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const name = form.fname.value + " " + form.lname.value;
    const email = form.email.value;
    const message = form.message.value;

    if (!name || !email || !message) {
      alert("Please fill in all required fields.");
      return;
    }

    alert(`🎉 Thank you, ${name}! Your message has been sent successfully.`);
    form.reset();
  });
</script>


</body>
</html>