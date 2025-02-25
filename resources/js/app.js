import "./bootstrap";
// Enhanced Hero Section Animations
document.addEventListener("DOMContentLoaded", function () {
    // Initialize enhanced hero animations
    initEnhancedHero();
});

function initEnhancedHero() {
    // Create dynamic floating clouds with better distribution
    createFloatingClouds();

    // Create enhanced rain effect - enabled by default
    createEnhancedRain(true);

    // Initialize weather toggle - set to rainy by default
    initWeatherToggle(true);

    // Parallax effect on scroll
    initParallaxEffect();

    // Add extra cloud animations
    animateCloudClusters();
}

// Create multiple floating clouds with random sizes and positions
function createFloatingClouds() {
    const cloudContainer = document.getElementById("floating-clouds");
    if (!cloudContainer) return;

    const cloudCount = 25; // Adjusted number of clouds

    // Create a grid system to better distribute clouds and avoid merging
    const gridSize = 5; // 5x5 grid
    const grid = [];
    for (let i = 0; i < gridSize; i++) {
        grid[i] = [];
        for (let j = 0; j < gridSize; j++) {
            grid[i][j] = false; // false means cell is empty
        }
    }

    for (let i = 0; i < cloudCount; i++) {
        const cloud = document.createElement("div");
        cloud.className = "floating-cloud";

        // Create cloud icon - randomly choose between different cloud icons
        const cloudIcon = document.createElement("i");

        // Add variety with different cloud icons
        const cloudTypes = [
            "fa-cloud",
            "fa-cloud",
            "fa-cloud",
            "fa-cloud-meatball",
            "fa-cloud",
        ];
        const randomCloudType =
            cloudTypes[Math.floor(Math.random() * cloudTypes.length)];
        cloudIcon.className = `fas ${randomCloudType}`;

        cloud.appendChild(cloudIcon);

        // Find an empty cell in the grid
        let gridX, gridY;
        let attempts = 0;

        do {
            gridX = Math.floor(Math.random() * gridSize);
            gridY = Math.floor(Math.random() * gridSize);
            attempts++;

            // After many attempts, force placement
            if (attempts > 20) break;
        } while (grid[gridX][gridY]);

        grid[gridX][gridY] = true; // Mark cell as occupied

        // Calculate position based on grid
        const baseX = (gridX / gridSize) * 100;
        const baseY = (gridY / gridSize) * 100;

        // Add small randomness within the cell
        const posX = baseX + (Math.random() * 15 - 7.5);
        const posY = baseY + (Math.random() * 15 - 7.5);

        // Set random properties
        const size = Math.random() * 5 + 3; // Adjusted size between 3-8rem
        const opacity = Math.random() * 0.2 + 0.1;
        const animDuration = Math.random() * 20 + 30;
        const animDelay = Math.random() * -30;

        // Apply styles
        cloudIcon.style.fontSize = `${size}rem`;
        cloud.style.left = `${posX}%`;
        cloud.style.top = `${posY}%`;
        cloud.style.opacity = opacity;
        cloud.style.animation = `floatCloud ${animDuration}s ease-in-out infinite`;
        cloud.style.animationDelay = `${animDelay}s`;

        // Add to container
        cloudContainer.appendChild(cloud);
    }
}

// Create improved rain effect with option to show/hide
function createEnhancedRain(isVisible = true) {
    const rainContainer = document.getElementById("rain-container");
    if (!rainContainer) return;

    const rainCount = 100; // Increased number of raindrops

    // Clear any existing rain
    rainContainer.innerHTML = "";

    // Set initial visibility
    rainContainer.style.opacity = isVisible ? "1" : "0";
    rainContainer.style.transition = "opacity 0.5s ease";

    for (let i = 0; i < rainCount; i++) {
        const drop = document.createElement("div");
        drop.className = "rain-drop";

        // Set random properties
        const posX = Math.random() * 100; // Random horizontal position
        const height = Math.random() * 40 + 20; // Random height (20-60px)
        const duration = Math.random() * 0.7 + 0.8; // Random animation duration (0.8-1.5s)
        const delay = Math.random() * 2; // Random delay
        const opacity = Math.random() * 0.3 + 0.1; // Random opacity
        const width = Math.random() * 2 + 1; // Varying widths for raindrops (1-3px)

        // Apply styles
        drop.style.left = `${posX}%`;
        drop.style.height = `${height}px`;
        drop.style.width = `${width}px`;
        drop.style.opacity = opacity;
        drop.style.animation = `rainDrop ${duration}s linear infinite`;
        drop.style.animationDelay = `${delay}s`;

        // Add to container
        rainContainer.appendChild(drop);
    }

    return rainContainer;
}

// Initialize parallax effect for clouds and content
function initParallaxEffect() {
    window.addEventListener("scroll", function () {
        const scrollPosition = window.scrollY;

        // Only apply parallax if we're at or near the hero section
        if (scrollPosition < window.innerHeight * 1.5) {
            // Move foreground clouds
            const foregroundClouds = document.querySelectorAll(".fg-cloud");
            foregroundClouds.forEach((cloud) => {
                const speed = 0.05;
                const yPos = scrollPosition * speed;
                cloud.style.transform = `translateY(${yPos}px)`;
            });

            // Subtle effect on the hero content
            const heroContent = document.querySelector(".hero-content");
            if (heroContent) {
                const contentSpeed = 0.2;
                const contentYPos = scrollPosition * contentSpeed;
                heroContent.style.transform = `translateY(${contentYPos}px)`;
            }
        }
    });

    // Add hover effect to floating clouds
    const floatingClouds = document.querySelectorAll(".floating-cloud");
    floatingClouds.forEach((cloud) => {
        cloud.addEventListener("mouseenter", function () {
            // Pause animation and slightly grow on hover
            this.style.animationPlayState = "paused";
            this.style.transform = "scale(1.1)";
            this.style.opacity = parseFloat(this.style.opacity) + 0.1;
            this.style.transition = "all 0.3s ease";
        });

        cloud.addEventListener("mouseleave", function () {
            // Resume animation and return to original size
            this.style.animationPlayState = "running";
            this.style.transform = "scale(1)";
            this.style.opacity = parseFloat(this.style.opacity) - 0.1;
        });
    });
}

// Add new functions to enhance the cloud theme

// Animate the cloud clusters for a more dynamic feel
function animateCloudClusters() {
    const clusters = document.querySelectorAll(".cloud-cluster");

    clusters.forEach((cluster) => {
        // Add mouse interaction
        cluster.addEventListener("mouseenter", () => {
            const clouds = cluster.querySelectorAll("i");
            clouds.forEach((cloud) => {
                cloud.style.transform = "scale(1.1)";
                cloud.style.filter =
                    "drop-shadow(0 0 15px rgba(255, 255, 255, 0.3))";
            });
        });

        cluster.addEventListener("mouseleave", () => {
            const clouds = cluster.querySelectorAll("i");
            clouds.forEach((cloud) => {
                cloud.style.transform = "scale(1)";
                cloud.style.filter =
                    "drop-shadow(0 0 10px rgba(255, 255, 255, 0.1))";
            });
        });
    });
}

// Initialize weather toggle functionality
function initWeatherToggle(isRainingDefault = true) {
    const toggleBtn = document.getElementById("weather-toggle");
    const rainContainer = document.getElementById("rain-container");
    const heroSection = document.querySelector(".enhanced-hero");

    if (!toggleBtn || !rainContainer || !heroSection) return;

    let isRaining = isRainingDefault;

    // Set initial state
    if (isRaining) {
        rainContainer.style.opacity = "1";
        toggleBtn.innerHTML = '<i class="fas fa-cloud-sun"></i>';
        heroSection.style.background =
            "linear-gradient(135deg, var(--primary), #1a4694);";
        addLightningEffect();
    } else {
        rainContainer.style.opacity = "0";
        toggleBtn.innerHTML = '<i class="fas fa-cloud-rain"></i>';
    }

    toggleBtn.addEventListener("click", () => {
        isRaining = !isRaining;

        // Toggle rain visibility
        rainContainer.style.opacity = isRaining ? "1" : "0";

        // Change button icon
        toggleBtn.innerHTML = isRaining
            ? '<i class="fas fa-cloud-sun"></i>'
            : '<i class="fas fa-cloud-rain"></i>';

        // Add lightning effect when raining
        if (isRaining) {
            // Make background slightly darker when raining
            heroSection.style.background =
                "linear-gradient(135deg, var(--primary), #1a4694)";
            addLightningEffect();
        } else {
            // Restore original background
            heroSection.style.background =
                "linear-gradient(135deg, var(--primary), #1a4694)";
            // Remove lightning overlay if exists
            const overlay = document.querySelector(".lightning-overlay");
            if (overlay) overlay.remove();
        }
    });
}

// Add a subtle lightning effect occasionally
function addLightningEffect() {
    const heroSection = document.querySelector(".enhanced-hero");
    if (!heroSection) return;

    // Remove existing lightning overlay if any
    const existingOverlay = document.querySelector(".lightning-overlay");
    if (existingOverlay) existingOverlay.remove();

    // Create lightning overlay
    const lightningOverlay = document.createElement("div");
    lightningOverlay.className = "lightning-overlay";
    lightningOverlay.style.position = "absolute";
    lightningOverlay.style.top = "0";
    lightningOverlay.style.left = "0";
    lightningOverlay.style.width = "100%";
    lightningOverlay.style.height = "100%";
    lightningOverlay.style.backgroundColor = "rgba(255, 255, 255, 0)";
    lightningOverlay.style.zIndex = "4";
    lightningOverlay.style.pointerEvents = "none";
    lightningOverlay.style.transition = "background-color 0.1s ease";

    heroSection.appendChild(lightningOverlay);

    // Function to create a lightning flash
    function createLightningFlash() {
        // Check if we should continue (rain might have been toggled off)
        if (!document.querySelector(".lightning-overlay")) return;

        lightningOverlay.style.backgroundColor = "rgba(255, 255, 255, 0.2)";

        setTimeout(() => {
            if (!document.querySelector(".lightning-overlay")) return;
            lightningOverlay.style.backgroundColor = "rgba(255, 255, 255, 0)";

            setTimeout(() => {
                if (!document.querySelector(".lightning-overlay")) return;
                lightningOverlay.style.backgroundColor =
                    "rgba(255, 255, 255, 0.1)";

                setTimeout(() => {
                    if (!document.querySelector(".lightning-overlay")) return;
                    lightningOverlay.style.backgroundColor =
                        "rgba(255, 255, 255, 0)";
                }, 50);
            }, 100);
        }, 50);

        // Schedule next lightning at random interval
        const nextLightning = Math.random() * 10000 + 5000; // 5-15 seconds
        setTimeout(createLightningFlash, nextLightning);
    }

    // Start lightning effect after a delay
    setTimeout(createLightningFlash, Math.random() * 5000 + 3000);
}
// Mobile menu toggle
// Cloud Navbar JavaScript
document.addEventListener("DOMContentLoaded", function () {
    // Elements
    const navbar = document.querySelector(".cloud-navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const navLinks = document.querySelectorAll(".nav-link");

    // Throttle function to improve scroll performance
    function throttle(callback, delay) {
        let timeout = null;
        return function () {
            if (!timeout) {
                timeout = setTimeout(function () {
                    callback.call();
                    timeout = null;
                }, delay);
            }
        };
    }

    // Handle scroll behavior with throttling for better performance
    const handleScroll = throttle(function () {
        if (window.scrollY > 50) {
            if (!navbar.classList.contains("scrolled")) {
                navbar.classList.add("scrolled");
            }
        } else {
            if (navbar.classList.contains("scrolled")) {
                navbar.classList.remove("scrolled");
            }
        }
    }, 100);

    window.addEventListener("scroll", handleScroll);

    // Check initial scroll position
    handleScroll();

    // Function to toggle menu state
    function toggleMenu(open = null) {
        if (open === null) {
            // Toggle if no state specified
            document.body.classList.toggle("menu-open");
        } else if (open === true) {
            document.body.classList.add("menu-open");
        } else {
            document.body.classList.remove("menu-open");
        }

        // Update overflow
        document.body.style.overflow = document.body.classList.contains(
            "menu-open"
        )
            ? "hidden"
            : "";
    }

    // Mobile menu toggle
    menuBtn.addEventListener("click", function (e) {
        e.preventDefault();
        toggleMenu();
    });

    // Close menu when clicking a link
    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            toggleMenu(false);
        });
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (e) {
        if (
            document.body.classList.contains("menu-open") &&
            !e.target.closest(".nav-links") &&
            !e.target.closest(".menu-btn")
        ) {
            toggleMenu(false);
        }
    });

    // Close menu with Escape key
    document.addEventListener("keydown", function (e) {
        if (
            e.key === "Escape" &&
            document.body.classList.contains("menu-open")
        ) {
            toggleMenu(false);
        }
    });

    // Handle resize events
    window.addEventListener("resize", function () {
        if (
            window.innerWidth > 768 &&
            document.body.classList.contains("menu-open")
        ) {
            toggleMenu(false);
        }
    });

    // Add active state to current section link
    function setActiveNavLink() {
        const sections = document.querySelectorAll("section[id]");
        const scrollPosition = window.scrollY + 100;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            const navLink = document.querySelector(
                `.nav-link[href="#${sectionId}"]`
            );

            if (
                navLink &&
                scrollPosition >= sectionTop &&
                scrollPosition < sectionTop + sectionHeight
            ) {
                navLinks.forEach((link) => link.classList.remove("active"));
                navLink.classList.add("active");
            }
        });
    }

    // Update active link on scroll (throttled)
    window.addEventListener("scroll", throttle(setActiveNavLink, 200));

    // Set initial active link
    setTimeout(setActiveNavLink, 100);
});
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
