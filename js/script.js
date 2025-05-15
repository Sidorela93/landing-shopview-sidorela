
document.querySelectorAll('.tabs button').forEach(button => {
    button.addEventListener('click', () => {
      document.querySelectorAll('.tabs button').forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      // Optional: Add content change based on tab
    });
  });
  