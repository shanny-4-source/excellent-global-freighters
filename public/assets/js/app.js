window.addEventListener('scroll', () => {

    const navbar = document.querySelector('.navbar');

    if(window.scrollY > 50){
        navbar.style.background = "#ffffff";
        navbar.style.boxShadow =
        "0 2px 20px rgba(0,0,0,.15)";
    }else{
        navbar.style.boxShadow = "none";
    }

});

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add("show");
        }
    });
});

document.querySelectorAll(".about-content, .about-image").forEach(el => {
    observer.observe(el);
});

const cards = document.querySelectorAll('.service-card');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('active');
        }
    });
});

cards.forEach(card => observer.observe(card));

document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');
    const chatBtn = document.getElementById('chatBtn');

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Simple validation flag
            let isValid = true;
            const requiredFields = contactForm.querySelectorAll('[required]');

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = 'var(--brand-red)';
                } else {
                    field.style.borderColor = 'var(--border-color)';
                }
            });

            if (!isValid) {
                alert('Please fill out all required fields.');
                return;
            }

            // Target submit button text dynamic adjustment
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalContent = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span>Sending...</span> <i class="fas fa-spinner fa-spin"></i>';
            submitBtn.style.pointerEvents = 'none';

            // Simulate Ajax Submit 
            setTimeout(() => {
                alert('Thank you! Your message has been sent successfully to Xcellent Global Cargo Freighters.');
                contactForm.reset();
                submitBtn.innerHTML = originalContent;
                submitBtn.style.pointerEvents = 'auto';
            }, 1500);
        });
    }

    // Floating Widget click simulation
    if (chatBtn) {
        chatBtn.addEventListener('click', function () {
            alert('Opening Live Customer Support Chat...');
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const quoteForm = document.getElementById('quoteForm');

    if (quoteForm) {
        quoteForm.addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;
            const requiredFields = quoteForm.querySelectorAll('[required]');

            // Loop checking empty conditions
            requiredFields.forEach(field => {
                if (!field.value || !field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = 'var(--brand-red)';
                } else {
                    field.style.borderColor = 'var(--border-color)';
                }
            });

            if (!isValid) {
                alert('Please make sure all required fields marked with * are completely filled.');
                return;
            }

            // Visual indicator configuration upon sending status
            const submitBtn = quoteForm.querySelector('.quote-submit-btn');
            const buttonText = submitBtn.querySelector('span');
            const buttonIcon = submitBtn.querySelector('i');
            
            buttonText.textContent = 'Processing Request...';
            buttonIcon.className = 'fas fa-circle-notch fa-spin';
            submitBtn.style.pointerEvents = 'none';

            // Simulate server-side processing delay
            setTimeout(() => {
                alert('Success! Your quote request details have been transmitted safely. An agent from Xcellent Global Cargo Freighters will review and reach back shortly.');
                quoteForm.reset();
                
                // Return button to default baseline state
                buttonText.textContent = 'Send Request';
                buttonIcon.className = 'fas fa-paper-plane';
                submitBtn.style.pointerEvents = 'auto';
            }, 1800);
        });
    }
});