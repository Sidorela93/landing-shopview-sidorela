<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
  <?php include 'header.php'; ?>

  <?php include 'sections/contact-form.php'; ?>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script>
  document.querySelector('form').addEventListener('submit', function() {
    if (typeof gtag === 'function') {
      gtag('event', 'form_submit', {
        'event_category': 'Contact',
        'event_label': 'Contact Form',
        'value': 1
      });
    }
  });
</script>
</body>
</html>
