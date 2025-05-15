document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
  
    if (form) {
      form.addEventListener("submit", function () {
        if (typeof gtag === "function") {
          gtag("event", "form_submit", {
            event_category: "Contact",
            event_label: "Contact Form",
          });
        } else {
          console.log("GA4 not loaded - simulated event: form_submit");
        }
      });
    }
  });
  