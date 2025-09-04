<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Elegant Jewellery</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

  <style>
    /* Modern CSS variables and reset */
    :root {
      --primary: #8b5a2b;
      --primary-light: #c38e5a;
      --primary-dark: #5a3a1c;
      --text: #2d2d2d;
      --text-light: #5a5a5a;
      --bg: #f8f5f2;
      --surface: #fff;
      --border: #e0d6cc;
      --success: #2e7d32;
      --error: #d32f2f;
      --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.1);
      --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.05), 0 4px 16px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.05), 0 20px 40px rgba(0, 0, 0, 0.15);
      --radius-sm: 8px;
      --radius-md: 12px;
      --radius-lg: 16px;
      --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .xxmain {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 1rem 2rem;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    h1 {
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 0.75rem;
      color: var(--primary-dark);
      line-height: 1.2;
      background: linear-gradient(90deg, var(--primary-dark), var(--primary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    h2 {
      font-weight: 600;
      color: var(--primary);
      margin: 2.5rem 0 1rem 0;
      font-size: 1.5rem;
    }

    p {
      margin-bottom: 1.5rem;
      color: var(--text-light);
      max-width: 600px;
      font-size: 1.05rem;
    }

    a {
      color: var(--primary);
      text-decoration: none;
      transition: var(--transition);
      font-weight: 500;
    }

    a:hover,
    a:focus {
      color: var(--primary-light);
      outline: none;
    }

    .page-container {
      width: 100%;
      max-width: 100%;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      background: var(--surface);
      border-radius: var(--radius-lg);
      padding: 3rem;
      box-shadow: var(--shadow-lg);
      position: relative;
      overflow: hidden;
    }

    .page-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 6px;
      background: linear-gradient(90deg, var(--primary), var(--primary-light));
    }

    @media (max-width: 768px) {
      .page-container {
        grid-template-columns: 1fr;
        padding: 2rem 1.5rem;
        gap: 2rem;
      }
    }

    /* Modern Form Styles */
    form {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      width: 100%;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    label {
      font-weight: 500;
      color: var(--text);
      font-size: 0.95rem;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 0.875rem 1rem;
      font-size: 1rem;
      font-family: inherit;
      color: var(--text);
      background: var(--surface);
      transition: var(--transition);
      resize: vertical;
      min-height: 48px;
      width: 100%;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
      border-color: var(--primary-light);
      outline: none;
      box-shadow: 0 0 0 3px rgba(139, 90, 43, 0.15);
    }

    textarea {
      min-height: 140px;
    }

    button {
      align-self: flex-start;
      background: linear-gradient(135deg, var(--primary), var(--primary-dark));
      color: #fff;
      border: none;
      padding: 0.875rem 2.25rem;
      font-weight: 600;
      font-size: 1rem;
      border-radius: var(--radius-md);
      cursor: pointer;
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      position: relative;
      overflow: hidden;
    }

    button::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, var(--primary-light), var(--primary));
      opacity: 0;
      transition: var(--transition);
    }

    button:hover,
    button:focus {
      box-shadow: var(--shadow-md);
      transform: translateY(-1px);
    }

    button:hover::after,
    button:focus::after {
      opacity: 1;
    }

    button span {
      position: relative;
      z-index: 1;
    }

    button:disabled {
      background: #c6b099;
      cursor: not-allowed;
      box-shadow: none;
      transform: none;
    }

    /* Contact Details Section */
    .contact-info {
      color: var(--text-light);
      font-size: 1rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
    }

    .material-icons {
      color: var(--primary);
      font-size: 1.5rem;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* Decorative Image */
    .contact-image {
      width: 100%;
      max-width: 380px;
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-md);
      justify-self: center;
      align-self: center;
      user-select: none;
      transition: var(--transition);
    }

    .contact-image:hover {
      transform: scale(1.02);
      box-shadow: var(--shadow-lg);
    }

    /* Success message */
    .success-message {
      font-size: 0.95rem;
      font-weight: 500;
      color: var(--success);
      background: #e8f5e9;
      padding: 0.875rem 1.25rem;
      border-radius: var(--radius-sm);
      margin-top: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      animation: fadeIn 0.3s ease-out;
    }

    /* Input error */
    .input-error {
      border-color: var(--error) !important;
      box-shadow: 0 0 0 3px rgba(211, 47, 47, 0.15) !important;
    }

    .error-message {
      color: var(--error);
      font-size: 0.85rem;
      margin-top: 0.25rem;
      display: none;
    }

    /* Animations */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {

      h1,
      p {
        text-align: center;
      }

      .contact-info {
        align-items: center;
        text-align: center;
      }

      .contact-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      button {
        align-self: center;
      }
    }

    /* Accessibility */
    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }

    /* Modern scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    ::-webkit-scrollbar-track {
      background: var(--bg);
    }

    ::-webkit-scrollbar-thumb {
      background: var(--primary-light);
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: var(--primary);
    }

    @font-face {
      font-family: kugile;
      src: url(kugile.ttf);
    }

    .contact {
      font-family: kugile;
      color: white;
      font-size: 4em;
      font-weight: 800;
    }

    /* Map Styles */
    .map-container {
      width: 100%;
      margin-top: 3rem;
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: var(--shadow-lg);
    }

    .map-container iframe {
      width: 100%;
      height: 450px;
      border: none;
      display: block;
    }

    .map-title {
      text-align: center;
      margin: 2rem 0 1rem;
      color: var(--primary-dark);
    }

    @media (max-width: 768px) {
      .map-container iframe {
        height: 350px;
      }
    }
  </style>
</head>

<body>
  <div class="xxmain">
    <!-- New Banner with Contact Us Text -->
    <div class="banner w-100 position-relative" style="height: 90vh;">
      <img
        src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
        alt="Luxury jewelry store interior with glass display cases"
        class="img-fluid w-100 h-100 object-fit-cover"
        loading="eager" />
      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>
      <div class="position-absolute top-50 start-50 translate-middle text-center text-light">
        <p class="contact fs-1 m-0">Contact Us</p>
      </div>
    </div>

    <div data-aos="fade-up">
      <main class="page-container w-100 mt-5" role="main" aria-labelledby="contact-title">
        <section aria-label="Contact form section" tabindex="0" data-aos="fade-up">
          <h2 id="contact-title">Get in Touch</h2>
          <p>Our jewellery experts are ready to assist you. Fill out the form below and we'll respond within 24 hours. Your personal information is always protected.</p>
          <form id="contactForm" novalidate aria-describedby="formInstructions">
            <span id="formInstructions" class="sr-only">All fields are required. Please enter your name, email address, subject, and message.</span>

            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Your full name" aria-required="true" autocomplete="name" />
              <div id="nameError" class="error-message">Please enter your name</div>
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="you@example.com" aria-required="true" autocomplete="email" />
              <div id="emailError" class="error-message">Please enter a valid email address</div>
            </div>

            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Subject of your message" aria-required="true" />
              <div id="subjectError" class="error-message">Please enter a subject</div>
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Write your message here..." aria-required="true" rows="5"></textarea>
              <div id="messageError" class="error-message">Please enter your message</div>
            </div>

            <button type="submit" id="submitBtn" aria-label="Send message">
              <span>Send Message</span>
              <span class="material-icons" aria-hidden="true">send</span>
            </button>

            <div id="successMsg" role="alert" class="success-message" hidden>
              <span class="material-icons" aria-hidden="true">check_circle</span>
              Your message has been sent successfully. We'll respond shortly.
            </div>
          </form>
        </section>

        <aside aria-label="Contact details section" class="contact-info" tabindex="0" data-aos="fade-up">
          <h2>Our Contact Details</h2>
          <div class="contact-item">
            <span class="material-icons" aria-hidden="true">location_on</span>
            <address>123 Luxury Avenue, Diamond District, NY 10001</address>
          </div>
          <div class="contact-item">
            <span class="material-icons" aria-hidden="true">phone</span>
            <a href="tel:+1234567890" aria-label="Phone number">+1 (234) 567-890</a>
          </div>
          <div class="contact-item">
            <span class="material-icons" aria-hidden="true">email</span>
            <a href="mailto:contact@elegantjewellery.com" aria-label="Email address">contact@elegantjewellery.com</a>
          </div>
          <div class="contact-item">
            <span class="material-icons" aria-hidden="true">schedule</span>
            <div>Monday - Saturday: 10AM - 8PM<br>Sunday: 12PM - 6PM</div>
          </div>
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b92c1614-0b36-4fe4-8e92-8121bed9e5b8.png"
            alt="Elegant jewellery store interior with sparkling displays and warm lighting"
            class="contact-image"
            onerror="this.style.display='none'"
            loading="lazy" />
        </aside>
      </main>
    </div>

    <!-- Map Section -->
    <div class="w-100" data-aos="fade-up">
      <h2 class="map-title">Find Us</h2>
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215573291078!2d-73.9878449242396!3d40.75798597138934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzI4LjciTiA3M8KwNTknMTMuNyJX!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus"
          allowfullscreen=""
          loading="lazy"
          aria-label="Map showing location of Elegant Jewellery store at 123 Luxury Avenue, Diamond District, NY 10001"
          title="Elegant Jewellery Store Location">
        </iframe>
      </div>
    </div>
  </div>

  <script>
    // Enhanced form validation and submission handler
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('contactForm');
      const successMsg = document.getElementById('successMsg');
      const submitBtn = document.getElementById('submitBtn');
      const inputs = form.querySelectorAll('input, textarea');
      const errorMessages = {
        name: document.getElementById('nameError'),
        email: document.getElementById('emailError'),
        subject: document.getElementById('subjectError'),
        message: document.getElementById('messageError')
      };

      function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      }

      function clearErrors() {
        inputs.forEach(input => {
          input.classList.remove('input-error');
          const errorId = input.id + 'Error';
          if (errorMessages[input.name]) {
            errorMessages[input.name].style.display = 'none';
          }
        });
      }

      function showError(input, message) {
        input.classList.add('input-error');
        const errorElement = errorMessages[input.name];
        if (errorElement) {
          errorElement.textContent = message;
          errorElement.style.display = 'block';
        }
      }

      function validateForm() {
        clearErrors();
        let isValid = true;

        inputs.forEach(input => {
          if (!input.value.trim()) {
            showError(input, `Please enter your ${input.name}`);
            isValid = false;
          }
        });

        const emailInput = form.email;
        if (emailInput.value && !validateEmail(emailInput.value)) {
          showError(emailInput, 'Please enter a valid email address');
          isValid = false;
        }

        return isValid;
      }

      // Real-time validation
      inputs.forEach(input => {
        input.addEventListener('input', () => {
          if (input.value.trim()) {
            input.classList.remove('input-error');
            errorMessages[input.name].style.display = 'none';
          }
        });
      });

      form.addEventListener('submit', async (e) => {
        e.preventDefault();

        if (!validateForm()) {
          successMsg.hidden = true;
          return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span>Sending...</span><span class="material-icons" aria-hidden="true">hourglass_top</span>';

        // Simulate API call with delay
        try {
          await new Promise(resolve => setTimeout(resolve, 1500));

          // Show success message
          successMsg.hidden = false;
          form.reset();

          // Scroll to success message for better UX
          successMsg.scrollIntoView({
            behavior: 'smooth',
            block: 'nearest'
          });
        } catch (error) {
          console.error('Error submitting form:', error);
        } finally {
          // Reset button state
          submitBtn.disabled = false;
          submitBtn.innerHTML = '<span>Send Message</span><span class="material-icons" aria-hidden="true">send</span>';
        }
      });
    });
  </script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>

<?php
include('footer.php')
?>