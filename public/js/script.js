// Mobile menu toggle
const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    menuBtn.querySelector("i").classList.toggle("fa-bars");
    menuBtn.querySelector("i").classList.toggle("fa-times");
});

// Close menu when clicking outside
document.addEventListener("click", (e) => {
    if (!e.target.closest(".navbar")) {
        navLinks.classList.remove("active");
        menuBtn.querySelector("i").classList.add("fa-bars");
        menuBtn.querySelector("i").classList.remove("fa-times");
    }
});

// Add this new code to handle link clicks
const links = document.querySelectorAll(".nav-links a");
links.forEach((link) => {
    link.addEventListener("click", () => {
        navLinks.classList.remove("active");
        menuBtn.querySelector("i").classList.add("fa-bars");
        menuBtn.querySelector("i").classList.remove("fa-times");
    });
});

function createRain() {
    const rain = document.getElementById("rain");
    const dropCount = 50;

    for (let i = 0; i < dropCount; i++) {
        const drop = document.createElement("div");
        drop.className = "drop";
        drop.style.left = Math.random() * 100 + "%";
        drop.style.animationDelay = Math.random() * 2 + "s";
        drop.style.opacity = Math.random();
        rain.appendChild(drop);
    }
}

createRain();

// services section
const createServiceClouds = () => {
    const scene = document.querySelector(".services-scene");
    const cloudCount = 15;

    for (let i = 0; i < cloudCount; i++) {
        const cloud = document.createElement("i");
        cloud.className = "fas fa-cloud service-cloud";
        cloud.style.fontSize = Math.random() * 40 + 20 + "px";
        cloud.style.left = Math.random() * 100 + "%";
        cloud.style.top = Math.random() * 100 + "%";

        // Add animation
        cloud.style.animation = `
            float ${Math.random() * 3 + 4}s ease-in-out infinite,
            fade ${Math.random() * 2 + 3}s ease-in-out infinite
        `;

        scene.appendChild(cloud);
    }
};

// Add keyframes for cloud animations
const style = document.createElement("style");
style.textContent = `
    @keyframes float {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(${Math.random() * 30}px, ${
    Math.random() * 30
}px); }
    }
    
    @keyframes fade {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.3; }
    }
`;
document.head.appendChild(style);

// Initialize clouds when document is loaded
document.addEventListener("DOMContentLoaded", createServiceClouds);

// Add hover effect for service cards
document.querySelectorAll(".service-card").forEach((card) => {
    card.addEventListener("mouseenter", () => {
        const clouds = document.querySelectorAll(".service-cloud");
        clouds.forEach((cloud) => {
            cloud.style.color = "rgba(255, 255, 255, 0.2)";
            cloud.style.transform = "scale(1.1)";
        });
    });

    card.addEventListener("mouseleave", () => {
        const clouds = document.querySelectorAll(".service-cloud");
        clouds.forEach((cloud) => {
            cloud.style.color = "rgba(255, 255, 255, 0.1)";
            cloud.style.transform = "scale(1)";
        });
    });
});

// portfolio Selection
// Create ambient clouds
function createAmbientClouds() {
    const ambient = document.querySelector(".ambient-clouds");
    const cloudCount = 10;

    for (let i = 0; i < cloudCount; i++) {
        const cloud = document.createElement("i");
        cloud.className = "fas fa-cloud";
        cloud.style.position = "absolute";
        cloud.style.fontSize = `${Math.random() * 5 + 3}rem`;
        cloud.style.left = `${Math.random() * 100}%`;
        cloud.style.top = `${Math.random() * 100}%`;
        cloud.style.animation = `
        float ${Math.random() * 10 + 20}s linear infinite,
        fade ${Math.random() * 5 + 5}s ease-in-out infinite
      `;
        ambient.appendChild(cloud);
    }
}

// Create rain effect
// function createRainEffect() {
//   const rainContainers = document.querySelectorAll(".portfolio-rain");
//   const dropCount = 20;

//   rainContainers.forEach((container) => {
//     for (let i = 0; i < dropCount; i++) {
//       const drop = document.createElement("div");
//       drop.className = "rain-drop";
//       drop.style.left = `${Math.random() * 100}%`;
//       drop.style.animationDelay = `${Math.random() * 2}s`;
//       drop.style.width = "1px";
//       drop.style.height = "100px";
//       drop.style.position = "absolute";
//       drop.style.background =
//         "linear-gradient(transparent, rgba(255,255,255,0.3))";
//       drop.style.animation = "rain-fall 1.5s linear infinite";
//       container.appendChild(drop);
//     }
//   });
// }

// // Initialize
// document.addEventListener("DOMContentLoaded", () => {
//   createAmbientClouds();
//   createRainEffect();
// });

// // Add keyframes for animations
// const style = document.createElement("style");
// style.textContent = `
//     @keyframes float {
//       from { transform: translateX(-100%); }
//       to { transform: translateX(100%); }
//     }

//     @keyframes fade {
//       0%, 100% { opacity: 0.1; }
//       50% { opacity: 0.3; }
//     }

//     @keyframes rain-fall {
//       0% { transform: translateY(-100%) rotate(15deg); opacity: 0; }
//       10% { opacity: 1; }
//       90% { opacity: 1; }
//       100% { transform: translateY(100%) rotate(15deg); opacity: 0; }
//     }
//   `;
// document.head.appendChild(style);

// testimonials
document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector(".testimonial-track");
    const clouds = Array.from(document.querySelectorAll(".testimonial-cloud"));
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    const dotsContainer = document.querySelector(".testimonial-dots");

    let currentIndex = 0;

    // Create dots
    clouds.forEach((_, index) => {
        const dot = document.createElement("div");
        dot.className = `dot ${index === 0 ? "active" : ""}`;
        dot.addEventListener("click", () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    function updateSlides() {
        clouds.forEach((cloud, index) => {
            cloud.classList.toggle("active", index === currentIndex);
        });

        document.querySelectorAll(".dot").forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateSlides();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % clouds.length;
        updateSlides();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + clouds.length) % clouds.length;
        updateSlides();
    }

    // Event listeners
    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);

    // Auto-advance slides
    let slideInterval = setInterval(nextSlide, 5000);

    // Pause auto-advance on hover
    track.addEventListener("mouseenter", () => clearInterval(slideInterval));
    track.addEventListener("mouseleave", () => {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 5000);
    });

    // Initialize
    updateSlides();
});

//contact
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");

    // Initialize form fields
    const inputs = form.querySelectorAll("input, select, textarea");
    inputs.forEach((input) => {
        input.addEventListener("focus", () => {
            input.parentElement.classList.add("focused");
        });

        input.addEventListener("blur", () => {
            input.parentElement.classList.remove("focused");
        });
    });

    // Form submission
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        // Add loading state
        const submitBtn = form.querySelector(".submit-btn");
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML =
            '<i class="fas fa-spinner fa-spin"></i> Sending...';

        // Simulate form submission
        setTimeout(() => {
            submitBtn.innerHTML = '<i class="fas fa-check"></i> Sent!';
            form.reset();

            setTimeout(() => {
                submitBtn.innerHTML = originalText;
            }, 2000);
        }, 1500);
    });

    // Floating animation for clouds
    const clouds = document.querySelectorAll(".contact-cloud");
    clouds.forEach((cloud) => {
        cloud.style.animationDelay = `${Math.random() * 5}s`;
    });
});
