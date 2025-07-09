<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
</head>
<body>
    <section class="faq-section">
  <div class="faq-container">
    <h2 class="faq-heading">Frequently Asked Questions</h2>

    <div class="faq-item">
      <button class="faq-question">1. What is Beingscholar?</button>
      <div class="faq-answer">
        <p>Beingscholar is a student-focused platform offering guidance on scholarships, career paths, and study-abroad tips.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">2. Is Beingscholar free to use?</button>
      <div class="faq-answer">
        <p>Yes, all our core resources and guides are completely free for students.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">3. How do I start my scholarship journey?</button>
      <div class="faq-answer">
        <p>Start by exploring our curated list of scholarships and follow our step-by-step preparation guide.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">4. Do I need IELTS to study abroad?</button>
      <div class="faq-answer">
        <p>Not always. Many countries offer IELTS waivers. We provide a full breakdown per country and university.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">5. Does Beingscholar offer 1-on-1 mentorship?</button>
      <div class="faq-answer">
        <p>Yes! Our premium mentorship program offers personalized help with SOPs, CVs, and interviews.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">6. Can I get help with writing a Statement of Purpose?</button>
      <div class="faq-answer">
        <p>Of course! We have detailed SOP templates, video guides, and review services to help you craft a killer SOP.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">7. What countries are covered by Beingscholar?</button>
      <div class="faq-answer">
        <p>We cover the US, UK, Canada, Germany, Netherlands, Sweden, Australia, and many more!</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">8. Are there opportunities for low CGPA students?</button>
      <div class="faq-answer">
        <p>Definitely! We highlight programs and countries that focus more on motivation and experience than CGPA.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">9. How often is the scholarship list updated?</button>
      <div class="faq-answer">
        <p>We update our scholarship database every month so you never miss a chance!</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">10. How can I contact the team?</button>
      <div class="faq-answer">
        <p>You can reach out through our contact form or drop us a message on our official social media pages.</p>
      </div>
    </div>

  </div>
</section>

<script>
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    question.addEventListener('click', () => {
      item.classList.toggle('active');
    });
  });
</script>

</body>
</html>