<?php
  $page_title = 'About';
  include_once('includes/header.php');
?>

        <h1>About</h1>

        <!-- Bio -->
        <section id="bio">
          <img src="img/placeholder.png" alt="Photo of Ryan Boone">
          <h2>Hello.</h2>
          <p class="entry__subheading">My name is Ryan. I love to <span class="js-d-text" data-text="create learn explore play-guitar watch-old-movies design eat-BBQ">create</span>.</p>
          <p>I'm a multi-disciplinary designer and developer based in Fort Worth, TX…. (expanded bio)</p>
          <p><a class="btn" href="about.php#contact">Get in touch</a></p>
        </section>

        <section id="skills"></section>
        <section id="experience"></section>
        <section id="accomplishments"></section>

        <!-- Contact -->
        <section id="contact">
          <h2>Get in touch</h2>
          <p>I currently work full-time, but if you have a project you think would be perfect for me, or even if you just want to chat, drop me a line below. I promise to get back as soon as I can.</p>
          <form action="#">
            <div class="input-group">
              <label for="name">Name</label>
              <input id="name" type="text">
            </div>
            <div class="input-group">
              <label for="email">Email</label>
              <input id="email" type="email">
            </div>
            <div class="input-group">
              <label for="subject">I want to talk to you about</label>
              <select name="subject" id="subject">
                <option disabled selected>choose</option>
                <option value="design">design work</option>
                <option value="web">web work</option>
                <option value="whatever">whatever</option>
                <option value="stuff">stuff, bro</option>
              </select>
            </div>
            <div class="input-group input-group--stacked">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <div class="input-group">
              <button>Send message</button>
            </div>
          </form>
          <p>Other places you can find me:</p>
          <ul>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">CodePen</a></li>
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Dribbble</a></li>
            <li><a href="#">LinkedIn</a></li>
          </ul>
        </section>

<?php include_once('includes/footer.php'); ?>