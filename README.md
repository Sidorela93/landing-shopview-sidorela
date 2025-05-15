# ShopView Landing Page

Creative front-end test to build a responsive landing page based on provided UI guidelines and business goals.
https://www.figma.com/design/OQk8JabZ2OkKHxftNc49B6/Untitled?node-id=0-1&t=Dtzs1zrSSgg3kqeW-1

---

🛠️ How to Install & Run the Project Locally
To run this project on your local machine using XAMPP, follow these steps:

1. Clone or Download the Repository
git clone https://github.com/Sidorela93/landing-shopview-sidorela.git
Or Download ZIP and extract it.

2. Move the Folder to XAMPP
Place the entire project folder into your XAMPP htdocs directory:

C:\xampp\htdocs\landing-shopview-sidorela
3. Start XAMPP
Open XAMPP Control Panel

Start Apache (no database is required)

4. Open in Browser
Go to:
http://localhost/landing-shopview-sidorela/
You should now see the homepage rendered with all sections.

✅ Requirements
XAMPP (or any PHP server)

Modern web browser (Chrome, Firefox, Edge)

Internet connection (for loading Bootstrap, Google Fonts, etc.)

## 🔧 Tech Stack
- HTML5, CSS3, Bootstrap 5
- PHP (modular, include-based)
- JavaScript (GA4 event tracking)
- Google Tag Manager (placeholder included)
- Responsive Design (desktop & mobile)


## 📁 Structure
- `index.php` – entry point that includes all sections
- `sections/` – each section as a separate PHP file for modularity
- `css/style.css` – custom styles
- `js/ga4-tracking.js` – Google Analytics 4 tracking events
- `contact-form.php` – contact form and its simulated handler
- `head.php`, `header.php`, `footer.php` – layout base components

Responsive Landing Page
Converted the provided Figma design into a fully responsive landing page.
Used HTML5, CSS3 (with Bootstrap 5), PHP includes for modular layout.
Fully compatible on desktop and mobile.

1.
![image](https://github.com/user-attachments/assets/46120c2a-b3dd-4401-a983-9ff97af7f53a)
![image](https://github.com/user-attachments/assets/8162cbf9-79c3-4d03-85bd-395c79308d21)

2.
![image](https://github.com/user-attachments/assets/878b83df-11dc-465b-87eb-64785ba79669)

![image](https://github.com/user-attachments/assets/64bdd03f-8556-496a-a5ec-0d3b35311030)

3.
![image](https://github.com/user-attachments/assets/21c0f072-4bd7-46b0-a343-930c5c82625a)
![image](https://github.com/user-attachments/assets/7ce323fb-9e88-413f-8282-c28b00f1af3b)

4.![image](https://github.com/user-attachments/assets/bcba68b8-87b4-465b-9612-761baf1c716d)
5.![image](https://github.com/user-attachments/assets/aee48959-8dc4-4bc6-b818-696479052a81)


6.![image](https://github.com/user-attachments/assets/ad379c5b-f41b-4e98-abc6-7bb576639695)
![image](https://github.com/user-attachments/assets/32116e7e-69b8-4b37-91ea-d2bf28cb80e5)

7.![image](https://github.com/user-attachments/assets/ccf3caa5-4f67-4f97-a034-a8e433ce08d0)
![image](https://github.com/user-attachments/assets/57a29468-c977-4709-8a0c-1f65ea254dee)

8.
![image](https://github.com/user-attachments/assets/b001d04e-b8dc-47f5-9df7-78d957ffd60f)

9.![image](https://github.com/user-attachments/assets/7e2c21fe-5117-4f43-8ec1-dbf4e9abcf5f)
10. ![image](https://github.com/user-attachments/assets/abf3b853-325c-401e-91bc-a95cb16ec54d)
11. ![image](https://github.com/user-attachments/assets/18ca84d6-40b0-41b5-a834-77dff5667ecd)


12.![image](https://github.com/user-attachments/assets/3aee1f59-beac-4050-80d7-b39076d15f94)
![image](https://github.com/user-attachments/assets/6546b903-ad34-4c49-9534-5d72a9820392)

13.![image](https://github.com/user-attachments/assets/221c8c87-1d10-4fb2-bc30-235383eafd8d)


## 📩 Contact Form Implementation – Summary & Validation

### ✅ 1. Contact Form Section
- The form is built with HTML + Bootstrap in `contact-form.php`.
- Uses the POST method and submits to itself to simulate a backend process.
- Fields included:
  - Name
  - Email
  - Message
  - Consent (required checkbox)
  ![image](https://github.com/user-attachments/assets/b41344b3-4674-4595-bbea-ad5dbe1f57c6)

![image](https://github.com/user-attachments/assets/16177c68-10ea-4f3e-88c0-e21ccb9c263a)
![image](https://github.com/user-attachments/assets/27293227-0da6-41ce-b31f-5facf640a7e3)

![image](https://github.com/user-attachments/assets/b1ce79ae-f2d1-48d7-b625-609f89645d15)
Located in sections/contact-form.php

Submitted via POST to contact-form.php and returns a confirmation message.

Validation included.

### ✅ 2. Form Submission Simulation
- After form submission, a confirmation message is shown with user input.
- Fully tested and functional in a local XAMPP environment.

### ✅ 3. Google Tag Manager Placeholder
- A placeholder GTM snippet is added in `head.php`:
```html
<!-- Google Tag Manager (Placeholder) -->
<!--
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXXXX');</script>
-->
<!-- End Google Tag Manager -->
```
- Ready to be activated by replacing `GTM-XXXXXXX` with the actual GTM ID.

### ✅ 4. GA4 Event Tracking
- A `gtag()` event listener is added in `contact.php` for form submission:
```html
<script>
  document.querySelector('form').addEventListener('submit', function () {
    if (typeof gtag === 'function') {
      gtag('event', 'form_submit', {
        'event_category': 'Contact',
        'event_label': 'Contact Form',
        'value': 1
      });
    }
  });
</script>
```
- Requires `gtag.js` to be initialized in `head.php` (add real tracking ID if needed).


## 🕒 Time Spent
- ~10–12 hours to convert the Figma design into a modular, responsive, working layout with form integration and tracking simulation.

## ✨ Developed by
**Sidorela** 
