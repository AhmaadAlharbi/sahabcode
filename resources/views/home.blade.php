@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<!-- Enhanced Hero Section -->
<section class="enhanced-hero">
    <div class="hero-bg-elements">
        <!-- Dynamic clouds will be added via JS -->
        <div class="floating-clouds" id="floating-clouds"></div>
        <div class="rain-container" id="rain-container"></div>

        <!-- Cloud clusters -->
        <div class="cloud-clusters">
            <div class="cloud-cluster cluster-1">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster cluster-2">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster cluster-3">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster cluster-4">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
        </div>
    </div>

    <div class="hero-content-wrapper">
        <div class="hero-content">
            <div class="logo-cloud">
                <i class="fas fa-cloud"></i>
            </div>
            <h1 class="hero-title">{{ __('messages.main_title') }}</h1>
            <p class="hero-subtitle">{{ __('messages.subtitle') }}</p>
            <div class="hero-cta-container">
                <a href="#work" class="hero-cta-button primary">
                    <span class="button-content">
                        <i class="fas fa-eye"></i>
                        <span>{{ __('messages.view_work') }}</span>
                    </span>
                </a>
                <a href="#contact" class="hero-cta-button secondary">
                    <span class="button-content">
                        <i class="fas fa-rocket"></i>
                        <span>{{ __('messages.get_started') }}</span>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Animated foreground clouds -->
    <div class="foreground-clouds">
        <div class="fg-cloud fg-cloud-1">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="fg-cloud fg-cloud-2">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="fg-cloud fg-cloud-3">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="fg-cloud fg-cloud-4">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="fg-cloud fg-cloud-5">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="fg-cloud fg-cloud-6">
            <i class="fas fa-cloud-sun"></i>
        </div>
    </div>

    <!-- Rain toggle button -->
    <button class="weather-toggle" id="weather-toggle" aria-label="Toggle rain effect">
        <i class="fas fa-cloud-sun"></i>
    </button>
</section>


<!-- About Section -->
<!-- About Section -->
<!-- Enhanced About Section -->
<!-- Cohesive About Section - Matching Hero Style -->
<section id="about" class="cohesive-about">
    <!-- Background Elements (matching hero) -->
    <div class="about-bg-elements">
        <!-- Cloud clusters (like hero section) -->


        <!-- Floating clouds container -->
        <div class="floating-clouds" id="about-floating-clouds"></div>

    </div>

    <div class="about-container">
        <!-- Section Header -->
        <div class="about-header">
            <div class="logo-cloud">
                <i class="fas fa-cloud"></i>
            </div>
            <h2 class="section-title">{{ __('messages.about_title') }}</h2>
            <p class="section-subtitle">{{ __('messages.about_subtitle') }}</p>
        </div>

        <div class="about-content">
            <!-- Profile/About Column -->
            <div class="about-profile">
                <div class="profile-cloud">
                    <i class="fas fa-user-circle"></i>
                </div>
            </div>

            <!-- About Details Column -->
            <div class="about-text">
                <div class="about-card">
                    <h3>{{ __('messages.who_i_am') }}</h3>
                    <p>{{ __('messages.who_i_am_text') }}</p>
                </div>

                <div class="about-card">
                    <h3>{{ __('messages.my_approach') }}</h3>
                    <p>{{ __('messages.my_approach_text') }}</p>
                </div>
            </div>
        </div>

        <!-- Cloud-Focused Skills Section -->
        <div class="skills-section">

            <div class="skills-cloud-wrapper">
                <!-- HTML Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-html5"></i>
                        </div>
                    </div>
                    <span class="skill-name">HTML5</span>
                </div>

                <!-- CSS Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                    </div>
                    <span class="skill-name">CSS</span>
                </div>

                <!-- JavaScript Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-js"></i>
                        </div>
                    </div>
                    <span class="skill-name">JavaScript</span>
                </div>

                <!-- PHP Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-php"></i>
                        </div>
                    </div>
                    <span class="skill-name">PHP</span>
                </div>

                <!-- Laravel Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-laravel"></i>
                        </div>
                    </div>
                    <span class="skill-name">Laravel</span>
                </div>

                <!-- Vue Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-vuejs"></i>
                        </div>
                    </div>
                    <span class="skill-name">Vue JS</span>
                </div>

                <!-- Bootstrap Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-bootstrap"></i>
                        </div>
                    </div>
                    <span class="skill-name">Bootstrap</span>
                </div>

                <!-- MySQL Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fas fa-database"></i>
                        </div>
                    </div>
                    <span class="skill-name">MySQL</span>
                </div>

                <!-- Git Skill Cloud -->
                <div class="skill-cloud-item">
                    <div class="skill-cloud-visual">
                        <i class="fas fa-cloud cloud-bg"></i>
                        <div class="skill-icon">
                            <i class="fab fa-git-alt"></i>
                        </div>
                    </div>
                    <span class="skill-name">Git</span>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Cohesive About Section JavaScript - Matching Hero Style
document.addEventListener("DOMContentLoaded", function() {
    // Initialize about section effects
    initAboutSection();
});

function initAboutSection() {
    // Create floating clouds (like in hero section)
    createAboutFloatingClouds();
    
    // Add hover effects for profile
    addProfileInteraction();
    
    // Add scroll animations
    initScrollAnimations();
}

// Create floating clouds similar to hero section
function createAboutFloatingClouds() {
    const cloudContainer = document.getElementById('about-floating-clouds');
    if (!cloudContainer) return;
    
    const cloudCount = 20; // Number of clouds to create
    
    for (let i = 0; i < cloudCount; i++) {
        const cloud = document.createElement('div');
        cloud.className = 'floating-cloud';
        
        // Create cloud icon
        const cloudIcon = document.createElement('i');
        
        // Add variety with different cloud icons
        const cloudTypes = ['fa-cloud', 'fa-cloud', 'fa-cloud', 'fa-cloud-meatball', 'fa-cloud'];
        const randomCloudType = cloudTypes[Math.floor(Math.random() * cloudTypes.length)];
        cloudIcon.className = `fas ${randomCloudType}`;
        
        cloud.appendChild(cloudIcon);
        
        // Set random properties
        const size = Math.random() * 4 + 3; // Random size between 3-7rem
        const posX = Math.random() * 100; // Random X position
        const posY = Math.random() * 100; // Random Y position
        const opacity = Math.random() * 0.15 + 0.05; // Random opacity
        const animDuration = Math.random() * 20 + 30; // Animation duration
        const animDelay = Math.random() * -30; // Animation delay
        
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

// Add interactive effects to profile
function addProfileInteraction() {
    const profileCloud = document.querySelector('.profile-cloud');
    if (!profileCloud) return;
    
    profileCloud.addEventListener('mouseenter', () => {
        profileCloud.style.transform = 'scale(1.05)';
        profileCloud.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.2)';
        profileCloud.style.borderColor = 'rgba(255, 255, 255, 0.3)';
        
        const icon = profileCloud.querySelector('i');
        if (icon) {
            icon.style.transform = 'scale(1.1)';
        }
    });
    
    profileCloud.addEventListener('mouseleave', () => {
        profileCloud.style.transform = '';
        profileCloud.style.boxShadow = '';
        profileCloud.style.borderColor = '';
        
        const icon = profileCloud.querySelector('i');
        if (icon) {
            icon.style.transform = '';
        }
    });
}

// Add scroll animations for better performance
function initScrollAnimations() {
    const elements = [
        document.querySelector('.about-header'),
        document.querySelector('.about-profile'),
        document.querySelector('.about-text'),
        document.querySelector('.skills-section')
    ].filter(Boolean);
    
    // Create intersection observer for animation on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -10% 0px'
    });
    
    // Observe elements and add classes for animation
    elements.forEach(element => {
        // Add base styles
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        
        // Add class when visible
        observer.observe(element);
    });
    
    // Add the visible class style
    const style = document.createElement('style');
    style.textContent = `
        .visible {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    `;
    document.head.appendChild(style);
}

// Add mouse tracking for the skill clouds
function addSkillCloudInteraction() {
    const skillItems = document.querySelectorAll('.skill-cloud-item');
    
    skillItems.forEach(item => {
        const cloudBg = item.querySelector('.cloud-bg');
        const skillIcon = item.querySelector('.skill-icon');
        
        item.addEventListener('mousemove', (e) => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            // Calculate position relative to center (values from -1 to 1)
            const xPos = (x / rect.width) * 2 - 1;
            const yPos = (y / rect.height) * 2 - 1;
            
            // Apply subtle movement
            if (cloudBg) {
                cloudBg.style.transform = `translate(${xPos * 5}px, ${yPos * 5}px)`;
            }
            
            if (skillIcon) {
                skillIcon.style.transform = `translate(${xPos * -3}px, ${yPos * -3}px)`;
            }
        });
        
        item.addEventListener('mouseleave', () => {
            if (cloudBg) {
                cloudBg.style.transform = '';
            }
            
            if (skillIcon) {
                skillIcon.style.transform = '';
            }
        });
    });
}

// Call this after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Wait a bit for all elements to be ready
    setTimeout(addSkillCloudInteraction, 500);
});
</script>
<!-- Services Section -->
<!-- Cloud-Themed Services Section -->
<section class="cloud-services" id="services">
    <!-- Background Elements (matching hero & about) -->
    <div class="services-bg-elements">
        <!-- Dynamic clouds will be added via JS -->
        <div class="floating-clouds" id="services-floating-clouds"></div>

        <!-- Cloud clusters -->
        <div class="cloud-clusters">
            <div class="cloud-cluster service-cluster-1">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster service-cluster-2">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
        </div>

        <!-- Foreground clouds -->
        <div class="foreground-clouds">
            <div class="fg-cloud service-fg-cloud-1">
                <i class="fas fa-cloud"></i>
            </div>
            <div class="fg-cloud service-fg-cloud-2">
                <i class="fas fa-cloud"></i>
            </div>
        </div>
    </div>

    <div class="services-container">
        <!-- Section Header -->
        <div class="services-header">
            <div class="logo-cloud">
                <i class="fas fa-cloud"></i>
            </div>
            <h2 class="section-title">{{ __('messages.services_title') }}</h2>
            <p class="section-subtitle">{{ __('messages.services_subtitle') }}</p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Web Development Service -->
            <div class="service-card" data-service="web">
                <div class="card-cloud-bg">
                    <i class="fas fa-cloud"></i>
                </div>
                <div class="service-content">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-laptop-code service-icon"></i>
                    </div>
                    <h3>{{ __('messages.web_dev') }}</h3>
                    <ul class="service-features">
                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <span>{{ __('messages.responsive_design') }}</span>
                        </li>
                        <li>
                            <i class="fas fa-paint-brush"></i>
                            <span>{{ __('messages.modern_ui') }}</span>
                        </li>
                        <li>
                            <i class="fas fa-rocket"></i>
                            <span>{{ __('messages.seo') }}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-accent-clouds">
                    <i class="fas fa-cloud accent-cloud ac1"></i>
                    <i class="fas fa-cloud accent-cloud ac2"></i>
                </div>
            </div>

            <!-- Business Dashboards Service -->
            <div class="service-card" data-service="dashboard">
                <div class="card-cloud-bg">
                    <i class="fas fa-cloud"></i>
                </div>
                <div class="service-content">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-chart-line service-icon"></i>
                    </div>
                    <h3>{{ __('messages.business_dashboards') }}</h3>
                    <ul class="service-features">
                        <li>
                            <i class="fas fa-chart-pie"></i>
                            <span>{{ __('messages.data_visualization') }}</span>
                        </li>
                        <li>
                            <i class="fas fa-tasks"></i>
                            <span>{{ __('messages.task_management') }}</span>
                        </li>
                        <li>
                            <i class="fas fa-shield-alt"></i>
                            <span>{{ __('messages.secure_solutions') }}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-accent-clouds">
                    <i class="fas fa-cloud accent-cloud ac1"></i>
                    <i class="fas fa-cloud accent-cloud ac2"></i>
                </div>
            </div>

            <!-- UI/UX Enhancement Service -->
            <div class="service-card" data-service="uiux">
                <div class="card-cloud-bg">
                    <i class="fas fa-cloud"></i>
                </div>
                <div class="service-content">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-magic service-icon"></i>
                    </div>
                    <h3>{{ __('messages.uiux_enhancement') }}</h3>
                    <ul class="service-features">
                        <li>
                            <i class="fas fa-vector-square"></i>
                            <span>{{ __('messages.interface_redesign') }}</span>
                        </li>
                        <li>
                            <i class="fas fa-bullseye"></i>
                            <span>{{ __('messages.user_engagement') }}</span>
                        </li>
                        <li>
                            <i class="fas fa-hand-pointer"></i>
                            <span>{{ __('messages.intuitive_navigation') }}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-accent-clouds">
                    <i class="fas fa-cloud accent-cloud ac1"></i>
                    <i class="fas fa-cloud accent-cloud ac2"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Cloud-Themed Services Section JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Initialize services section
    initCloudServices();
});

function initCloudServices() {
    // Create floating clouds for services section
    createServicesFloatingClouds();
    
    // Add hover effects to service cards
    enhanceServiceCards();
    
    // Add scroll animations
    initServicesScrollAnimation();
}

// Create floating clouds similar to hero section
function createServicesFloatingClouds() {
    const cloudContainer = document.getElementById('services-floating-clouds');
    if (!cloudContainer) return;
    
    const cloudCount = 15; // Fewer clouds than hero for better performance
    
    for (let i = 0; i < cloudCount; i++) {
        const cloud = document.createElement('div');
        cloud.className = 'floating-cloud';
        
        // Create cloud icon
        const cloudIcon = document.createElement('i');
        
        // Add variety with different cloud icons
        const cloudTypes = ['fa-cloud', 'fa-cloud', 'fa-cloud', 'fa-cloud-meatball'];
        const randomCloudType = cloudTypes[Math.floor(Math.random() * cloudTypes.length)];
        cloudIcon.className = `fas ${randomCloudType}`;
        
        cloud.appendChild(cloudIcon);
        
        // Set random properties
        const size = Math.random() * 4 + 2; // Random size between 2-6rem
        const posX = Math.random() * 100; // Random X position
        const posY = Math.random() * 100; // Random Y position
        const opacity = Math.random() * 0.15 + 0.05; // Random opacity
        const animDuration = Math.random() * 20 + 30; // Animation duration
        const animDelay = Math.random() * -30; // Animation delay
        
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

// Add enhanced hover effects to service cards
function enhanceServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        // Add mousemove effect for a subtle 3D feel
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left; // x position within the card
            const y = e.clientY - rect.top; // y position within the card
            
            // Calculate rotation degrees based on mouse position
            // We want subtle rotation, so we'll limit it to +/- 3 degrees
            const rotateX = (y / rect.height - 0.5) * -6; // Invert the Y rotation
            const rotateY = (x / rect.width - 0.5) * 6;
            
            // Apply the rotation
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
            
            // Move accent clouds based on mouse position
            const accentClouds = card.querySelectorAll('.accent-cloud');
            accentClouds.forEach((cloud, index) => {
                const factor = index % 2 === 0 ? 1 : -1; // Move clouds in opposite directions
                const cloudX = (x / rect.width - 0.5) * 15 * factor;
                const cloudY = (y / rect.height - 0.5) * 15 * factor;
                
                cloud.style.transform = `translate(${cloudX}px, ${cloudY}px)`;
            });
            
            // Also move the main cloud icon slightly
            const cloudBg = card.querySelector('.card-cloud-bg i');
            if (cloudBg) {
                cloudBg.style.transform = `translate(${(x / rect.width - 0.5) * -10}px, ${(y / rect.height - 0.5) * -10}px)`;
            }
        });
        
        // Reset on mouse leave
        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
            
            const accentClouds = card.querySelectorAll('.accent-cloud');
            accentClouds.forEach(cloud => {
                cloud.style.transform = '';
            });
            
            const cloudBg = card.querySelector('.card-cloud-bg i');
            if (cloudBg) {
                cloudBg.style.transform = '';
            }
        });
    });
}

// Add scroll animation to services section
function initServicesScrollAnimation() {
    const servicesSection = document.querySelector('.cloud-services');
    const servicesHeader = document.querySelector('.services-header');
    const serviceCards = document.querySelectorAll('.service-card');
    
    if (!servicesSection || !servicesHeader || serviceCards.length === 0) return;
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // If it's the services header
                if (entry.target === servicesHeader) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                } 
                // If it's a service card
                else if (entry.target.classList.contains('service-card')) {
                    // Get the index to create a staggered animation
                    const index = Array.from(serviceCards).indexOf(entry.target);
                    entry.target.style.transitionDelay = `${index * 0.1}s`;
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
                
                // Unobserve after animation
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Set initial styles and observe elements
    
    // Header
    servicesHeader.style.opacity = '0';
    servicesHeader.style.transform = 'translateY(20px)';
    servicesHeader.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(servicesHeader);
    
    // Service cards
    serviceCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        // Add a small delay between observing each card
        setTimeout(() => {
            observer.observe(card);
        }, 100);
    });
}

// Add ambient animations to service section clouds
function addServiceCloudAnimations() {
    // Get cloud clusters
    const cloudClusters = document.querySelectorAll('.cloud-cluster');
    
    cloudClusters.forEach(cluster => {
        // Add subtle pulsing animation
        setInterval(() => {
            const clouds = cluster.querySelectorAll('i');
            
            clouds.forEach(cloud => {
                // Apply subtle scale animation
                cloud.style.transition = 'transform 3s ease-in-out';
                cloud.style.transform = 'scale(1.05)';
                
                // Reset after animation
                setTimeout(() => {
                    cloud.style.transform = 'scale(1)';
                }, 1500);
            });
        }, 5000); // Every 5 seconds
    });
}

// Call this after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Wait a bit to ensure all elements are ready
    setTimeout(addServiceCloudAnimations, 1000);
});
</script>

<!-- Portfolio Section -->
<!-- Portfolio Section -->
<!-- Cloud-Themed Portfolio Section -->
<section id="work" class="cloud-portfolio">
    <!-- Background Elements (matching hero & other sections) -->
    <div class="portfolio-bg-elements">
        <!-- Dynamic clouds will be added via JS -->
        <div class="floating-clouds" id="portfolio-floating-clouds"></div>

        <!-- Cloud clusters -->
        <div class="cloud-clusters">
            <div class="cloud-cluster portfolio-cluster-1">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster portfolio-cluster-2">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
        </div>

        <!-- Foreground clouds -->
        <div class="foreground-clouds">
            <div class="fg-cloud portfolio-fg-1">
                <i class="fas fa-cloud"></i>
            </div>
            <div class="fg-cloud portfolio-fg-2">
                <i class="fas fa-cloud"></i>
            </div>
        </div>
    </div>

    <div class="portfolio-container">
        <!-- Section Header -->
        <div class="portfolio-header">
            <div class="logo-cloud">
                <i class="fas fa-cloud"></i>
            </div>
            <h2 class="section-title">{{ __('messages.work_title') }}</h2>
            <p class="section-subtitle">{{ __('messages.work_subtitle') }}</p>
        </div>

        <!-- Enhanced Project Grid -->
        <div class="project-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <div class="project-cloud-scene">
                    <div class="scene-clouds">
                        <i class="fas fa-cloud-sun scene-icon"></i>
                        <i class="fas fa-cloud cloud-float cf1"></i>
                        <i class="fas fa-cloud cloud-float cf2"></i>
                        <i class="fas fa-cloud cloud-float cf3"></i>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-image-container">
                        <img src="{{ asset('storage/images/landing/images/dashboard.png') }}" alt="Dashboard Project"
                            class="project-image">
                        <div class="image-overlay">
                            <div class="overlay-clouds">
                                <i class="fas fa-cloud overlay-cloud oc1"></i>
                                <i class="fas fa-cloud overlay-cloud oc2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">{{ __('messages.modern_shopping') }}</h3>
                        <p class="project-description">{{ __('messages.ecommerce_description') }}</p>
                        <a href="{{route('project.school_dashboard')}}" class="project-link">
                            <span>{{ __('messages.view_project') }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-cloud-scene">
                    <div class="scene-clouds">
                        <i class="fas fa-cloud scene-icon"></i>
                        <i class="fas fa-cloud cloud-float cf1"></i>
                        <i class="fas fa-cloud cloud-float cf2"></i>
                        <i class="fas fa-cloud cloud-float cf3"></i>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-image-container">
                        <img src="{{ asset('storage/images/landing/images/bright-kids.png') }}"
                            alt="Bright Kids Project" class="project-image">
                        <div class="image-overlay">
                            <div class="overlay-clouds">
                                <i class="fas fa-cloud overlay-cloud oc1"></i>
                                <i class="fas fa-cloud overlay-cloud oc2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">{{ __('messages.project2_name') }}</h3>
                        <p class="project-description">{{ __('messages.project2_description') }}</p>
                        <a href="https://bright-kids.site/" class="project-link">
                            <span>{{ __('messages.view_project') }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <div class="project-cloud-scene">
                    <div class="scene-clouds">
                        <i class="fas fa-cloud-rain scene-icon"></i>
                        <i class="fas fa-cloud cloud-float cf1"></i>
                        <i class="fas fa-cloud cloud-float cf2"></i>
                        <i class="fas fa-cloud cloud-float cf3"></i>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-image-container">
                        <img src="{{ asset('storage/images/landing/images/kahromaa.png') }}" alt="Kahromaa Project"
                            class="project-image">
                        <div class="image-overlay">
                            <div class="overlay-clouds">
                                <i class="fas fa-cloud overlay-cloud oc1"></i>
                                <i class="fas fa-cloud overlay-cloud oc2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">{{ __('messages.project3_name') }}</h3>
                        <p class="project-description">{{ __('messages.project3_description') }}</p>
                        <a href="https://kahromaa.com/" class="project-link">
                            <span>{{ __('messages.view_project') }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Cloud-Themed Portfolio Section JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Initialize portfolio section
    initCloudPortfolio();
});

function initCloudPortfolio() {
    // Create floating clouds for portfolio section
    createPortfolioFloatingClouds();
    
    // Add interactive effects to project cards
    enhanceProjectCards();
    
    // Add scroll animations
    initPortfolioScrollAnimation();
}

// Create floating clouds similar to hero section
function createPortfolioFloatingClouds() {
    const cloudContainer = document.getElementById('portfolio-floating-clouds');
    if (!cloudContainer) return;
    
    const cloudCount = 15; // Number of clouds to create
    
    for (let i = 0; i < cloudCount; i++) {
        const cloud = document.createElement('div');
        cloud.className = 'floating-cloud';
        
        // Create cloud icon
        const cloudIcon = document.createElement('i');
        
        // Add variety with different cloud icons
        const cloudTypes = ['fa-cloud', 'fa-cloud', 'fa-cloud', 'fa-cloud-meatball', 'fa-cloud'];
        const randomCloudType = cloudTypes[Math.floor(Math.random() * cloudTypes.length)];
        cloudIcon.className = `fas ${randomCloudType}`;
        
        cloud.appendChild(cloudIcon);
        
        // Set random properties
        const size = Math.random() * 4 + 2; // Random size between 2-6rem
        const posX = Math.random() * 100; // Random X position
        const posY = Math.random() * 100; // Random Y position
        const opacity = Math.random() * 0.15 + 0.05; // Random opacity
        const animDuration = Math.random() * 20 + 30; // Animation duration
        const animDelay = Math.random() * -30; // Animation delay
        
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

// Add enhanced interactive effects to project cards
function enhanceProjectCards() {
    const projectCards = document.querySelectorAll('.project-card');
    
    projectCards.forEach(card => {
        // Enhanced hover effects
        card.addEventListener('mouseenter', () => {
            // Make scene clouds move faster
            const cloudElements = card.querySelectorAll('.cloud-float');
            cloudElements.forEach(cloud => {
                cloud.style.animationDuration = '4s';
            });
            
            // Get random weather icon for scene to make it more dynamic
            const sceneIcon = card.querySelector('.scene-icon');
            if (sceneIcon) {
                const weatherIcons = [
                    'fa-cloud-sun', 
                    'fa-cloud-moon', 
                    'fa-cloud-sun-rain',
                    'fa-cloud'
                ];
                
                // Don't change the icon class if it's already randomized
                if (!sceneIcon.dataset.randomized) {
                    const currentClass = sceneIcon.className.split(' ').filter(cls => cls.startsWith('fa-'))[0];
                    const availableIcons = weatherIcons.filter(icon => icon !== currentClass);
                    const randomIcon = availableIcons[Math.floor(Math.random() * availableIcons.length)];
                    
                    // Update icon class
                    sceneIcon.classList.remove(currentClass);
                    sceneIcon.classList.add(randomIcon);
                    sceneIcon.dataset.randomized = 'true';
                    
                    // Remember original icon to restore it later
                    sceneIcon.dataset.originalIcon = currentClass;
                }
            }
        });
        
        // Reset effects on mouseleave
        card.addEventListener('mouseleave', () => {
            // Reset cloud animation speed
            const cloudElements = card.querySelectorAll('.cloud-float');
            cloudElements.forEach(cloud => {
                cloud.style.animationDuration = '';
            });
            
            // Restore original weather icon
            const sceneIcon = card.querySelector('.scene-icon');
            if (sceneIcon && sceneIcon.dataset.originalIcon) {
                const currentClass = sceneIcon.className.split(' ').filter(cls => cls.startsWith('fa-'))[0];
                sceneIcon.classList.remove(currentClass);
                sceneIcon.classList.add(sceneIcon.dataset.originalIcon);
                delete sceneIcon.dataset.randomized;
            }
        });
        
        // Add parallax effect to image overlay clouds
        const imageContainer = card.querySelector('.project-image-container');
        if (imageContainer) {
            imageContainer.addEventListener('mousemove', (e) => {
                const rect = imageContainer.getBoundingClientRect();
                const x = e.clientX - rect.left; // x position within the element
                const y = e.clientY - rect.top;  // y position within the element
                
                // Calculate position percentage
                const xPercent = x / rect.width;
                const yPercent = y / rect.height;
                
                // Move overlay clouds
                const overlayClouds = imageContainer.querySelectorAll('.overlay-cloud');
                overlayClouds.forEach((cloud, index) => {
                    const factor = index % 2 === 0 ? 1 : -1;
                    const moveX = (xPercent - 0.5) * 30 * factor;
                    const moveY = (yPercent - 0.5) * 30 * factor;
                    
                    cloud.style.transform = `translate(${moveX}px, ${moveY}px) scale(1) rotate(0)`;
                });
            });
            
            // Reset overlay clouds position on mouse leave
            imageContainer.addEventListener('mouseleave', () => {
                const overlayClouds = imageContainer.querySelectorAll('.overlay-cloud');
                overlayClouds.forEach((cloud, index) => {
                    if (index === 0) {
                        cloud.style.transform = 'scale(0) rotate(-20deg)';
                    } else {
                        cloud.style.transform = 'scale(0) rotate(20deg)';
                    }
                });
            });
        }
    });
}

// Add scroll animation to portfolio section
function initPortfolioScrollAnimation() {
    const portfolioHeader = document.querySelector('.portfolio-header');
    const projectCards = document.querySelectorAll('.project-card');
    
    if (!portfolioHeader || projectCards.length === 0) return;
    
    // Create intersection observer for animation on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target === portfolioHeader) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                } else {
                    // For project cards, add a delay based on their index
                    const index = Array.from(projectCards).indexOf(entry.target);
                    entry.target.style.transitionDelay = `${index * 0.15}s`;
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
                
                // Stop observing after animation
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Set initial styles and observe header
    portfolioHeader.style.opacity = '0';
    portfolioHeader.style.transform = 'translateY(20px)';
    portfolioHeader.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(portfolioHeader);
    
    // Observe each project card
    projectCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(40px)';
        card.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
        observer.observe(card);
    });
}

// Add dynamic cloud movement to scene
function addDynamicCloudMovement() {
    const sceneElements = document.querySelectorAll('.project-cloud-scene');
    
    sceneElements.forEach(scene => {
        // Add subtle pulsing to main icon
        const sceneIcon = scene.querySelector('.scene-icon');
        if (sceneIcon) {
            // Create pulsing animation
            setInterval(() => {
                sceneIcon.style.transform = 'scale(1.1)';
                sceneIcon.style.filter = 'drop-shadow(0 0 10px rgba(255, 255, 255, 0.3))';
                
                setTimeout(() => {
                    sceneIcon.style.transform = '';
                    sceneIcon.style.filter = '';
                }, 1000);
            }, 5000);
        }
        
        // Make floating clouds occasionally change speed
        const cloudFloats = scene.querySelectorAll('.cloud-float');
        cloudFloats.forEach(cloud => {
            setInterval(() => {
                // Randomly change animation duration
                const newDuration = 3 + Math.random() * 4; // 3-7 seconds
                cloud.style.animationDuration = `${newDuration}s`;
                
                // Reset after a while
                setTimeout(() => {
                    cloud.style.animationDuration = '';
                }, newDuration * 1000);
            }, 10000 + Math.random() * 5000); // Random interval between 10-15 seconds
        });
    });
}

// Call this after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Wait a bit to ensure all elements are ready
    setTimeout(addDynamicCloudMovement, 1000);
});
</script>
<!-- Testimonials Section -->
<!-- Cloud-Themed Testimonials Section -->
<section id="testimonials" class="cloud-testimonials">
    <!-- Background Elements (matching hero & other sections) -->
    <div class="testimonials-bg-elements">
        <!-- Dynamic clouds will be added via JS -->
        <div class="floating-clouds" id="testimonials-floating-clouds"></div>

        <!-- Cloud clusters -->
        <div class="cloud-clusters">
            <div class="cloud-cluster testimonial-cluster-1">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster testimonial-cluster-2">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
        </div>

        <!-- Foreground clouds -->
        <div class="foreground-clouds">
            <div class="fg-cloud testimonial-fg-1">
                <i class="fas fa-cloud"></i>
            </div>
            <div class="fg-cloud testimonial-fg-2">
                <i class="fas fa-cloud"></i>
            </div>
        </div>
    </div>

    <!-- Section Header -->
    <div class="testimonials-header">
        <div class="logo-cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <h2 class="section-title">{{ __('messages.client_stories') }}</h2>
        <p class="section-subtitle">{{ __('messages.client_subtitle') }}</p>
    </div>

    <div class="testimonials-container">
        <div class="testimonial-track">
            <!-- Testimonial 1 -->
            <div class="testimonial-cloud active">
                <div class="testimonial-wrapper">
                    <div class="cloud-shape-bg">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p>{{ __('messages.testimonial1') }}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="author-info">
                                <h4>Anonymous</h4>
                            </div>
                        </div>
                        <div class="content-accent-clouds">
                            <i class="fas fa-cloud accent-cloud ac1"></i>
                            <i class="fas fa-cloud accent-cloud ac2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-cloud">
                <div class="testimonial-wrapper">
                    <div class="cloud-shape-bg">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p>{{ __('messages.testimonial2') }}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="author-info">
                                <h4>Anonymous</h4>
                            </div>
                        </div>
                        <div class="content-accent-clouds">
                            <i class="fas fa-cloud accent-cloud ac1"></i>
                            <i class="fas fa-cloud accent-cloud ac2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-cloud">
                <div class="testimonial-wrapper">
                    <div class="cloud-shape-bg">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p>{{ __('messages.testimonial3') }}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="author-info">
                                <h4>Anonymous</h4>
                            </div>
                        </div>
                        <div class="content-accent-clouds">
                            <i class="fas fa-cloud accent-cloud ac1"></i>
                            <i class="fas fa-cloud accent-cloud ac2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-cloud">
                <div class="testimonial-wrapper">
                    <div class="cloud-shape-bg">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="testimonial-content">
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p>{{ __('messages.testimonial4') }}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="author-info">
                                <h4>Anonymous</h4>
                            </div>
                        </div>
                        <div class="content-accent-clouds">
                            <i class="fas fa-cloud accent-cloud ac1"></i>
                            <i class="fas fa-cloud accent-cloud ac2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls - keeping the same structure for JS compatibility -->
        <div class="testimonial-controls">
            <button class="control-btn prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="testimonial-dots"></div>
            <button class="control-btn next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
<script>
    // Cloud-Themed Testimonials JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Initialize testimonials
    initTestimonials();
    
    // Create floating clouds in background
    createTestimonialsFloatingClouds();
});

function initTestimonials() {
    const track = document.querySelector('.testimonial-track');
    const clouds = Array.from(document.querySelectorAll('.testimonial-cloud'));
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const dotsContainer = document.querySelector('.testimonial-dots');
    
    // If any required element is missing, exit
    if (!track || !clouds.length || !prevBtn || !nextBtn || !dotsContainer) {
        console.warn('Missing required elements for testimonials');
        return;
    }
    
    let currentIndex = 0;
    let slideInterval;
    
    // Clear any existing dots and create new ones
    dotsContainer.innerHTML = '';
    
    // Create dots based on number of testimonials
    clouds.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.className = `dot ${index === 0 ? "active" : ""}`;
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });
    
    // Function to update the active state of testimonials and dots
    function updateSlides() {
        // Update testimonial clouds
        clouds.forEach((cloud, index) => {
            cloud.classList.toggle('active', index === currentIndex);
        });
        
        // Update dots
        document.querySelectorAll('.dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Navigate to a specific slide
    function goToSlide(index) {
        currentIndex = index;
        updateSlides();
    }
    
    // Go to next slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % clouds.length;
        updateSlides();
    }
    
    // Go to previous slide
    function prevSlide() {
        currentIndex = (currentIndex - 1 + clouds.length) % clouds.length;
        updateSlides();
    }
    
    // Add event listeners to navigation buttons
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    // Start auto-advance slideshow
    function startSlideshow() {
        // Clear any existing interval
        if (slideInterval) clearInterval(slideInterval);
        // Set new interval
        slideInterval = setInterval(nextSlide, 6000);
    }
    
    // Pause slideshow on hover
    track.addEventListener('mouseenter', () => {
        if (slideInterval) clearInterval(slideInterval);
    });
    
    track.addEventListener('mouseleave', () => {
        startSlideshow();
    });
    
    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });
    
    // Initialize slideshow
    startSlideshow();
    
    // Make sure the first slide is active
    updateSlides();
    
    // Add slight movement to testimonial cards on mouse move
    clouds.forEach(cloud => {
        const content = cloud.querySelector('.testimonial-content');
        const wrapper = cloud.querySelector('.testimonial-wrapper');
        
        if (content && wrapper) {
            wrapper.addEventListener('mousemove', (e) => {
                // Only apply effect if this cloud is active
                if (!cloud.classList.contains('active')) return;
                
                const rect = wrapper.getBoundingClientRect();
                const x = e.clientX - rect.left; // x position within the element
                const y = e.clientY - rect.top;  // y position within the element
                
                // Calculate position percentage
                const xPercent = x / rect.width;
                const yPercent = y / rect.height;
                
                // Very subtle rotation (max 2 degrees)
                const rotateX = (yPercent - 0.5) * -4; // Invert Y for natural movement
                const rotateY = (xPercent - 0.5) * 4;
                
                // Apply transform
                content.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                
                // Move accent clouds
                const accentClouds = wrapper.querySelectorAll('.accent-cloud');
                accentClouds.forEach((cloud, index) => {
                    const factor = index % 2 === 0 ? 1 : -1;
                    const moveX = (xPercent - 0.5) * 20 * factor;
                    const moveY = (yPercent - 0.5) * 20 * factor;
                    
                    cloud.style.transform = `translate(${moveX}px, ${moveY}px)`;
                });
            });
            
            // Reset transformations on mouse leave
            wrapper.addEventListener('mouseleave', () => {
                content.style.transform = '';
                
                const accentClouds = wrapper.querySelectorAll('.accent-cloud');
                accentClouds.forEach(cloud => {
                    cloud.style.transform = '';
                });
            });
        }
    });
}

// Create floating clouds in the background (similar to other sections)
function createTestimonialsFloatingClouds() {
    const cloudContainer = document.getElementById('testimonials-floating-clouds');
    if (!cloudContainer) return;
    
    const cloudCount = 12; // Number of clouds to create
    
    for (let i = 0; i < cloudCount; i++) {
        const cloud = document.createElement('div');
        cloud.className = 'floating-cloud';
        
        // Create cloud icon
        const cloudIcon = document.createElement('i');
        
        // Add variety with different cloud icons
        const cloudTypes = ['fa-cloud', 'fa-cloud', 'fa-cloud', 'fa-cloud-meatball'];
        const randomCloudType = cloudTypes[Math.floor(Math.random() * cloudTypes.length)];
        cloudIcon.className = `fas ${randomCloudType}`;
        
        cloud.appendChild(cloudIcon);
        
        // Set random properties
        const size = Math.random() * 4 + 2; // Random size between 2-6rem
        const posX = Math.random() * 100; // Random X position
        const posY = Math.random() * 100; // Random Y position
        const opacity = Math.random() * 0.15 + 0.05; // Random opacity
        const animDuration = Math.random() * 20 + 30; // Animation duration
        const animDelay = Math.random() * -30; // Animation delay
        
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
</script>

<!-- Contact Section -->
<!-- Cloud-Themed Contact Section -->
<section id="contact" class="cloud-contact">
    <!-- Background Elements (matching other cloud sections) -->
    <div class="contact-bg-elements">
        <!-- Dynamic clouds will be added via JS -->
        <div class="floating-clouds" id="contact-floating-clouds"></div>

        <!-- Cloud clusters -->
        <div class="cloud-clusters">
            <div class="cloud-cluster contact-cluster-1">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster contact-cluster-2">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
        </div>

        <!-- Foreground clouds -->
        <div class="foreground-clouds">
            <div class="fg-cloud contact-fg-1">
                <i class="fas fa-cloud"></i>
            </div>
            <div class="fg-cloud contact-fg-2">
                <i class="fas fa-cloud"></i>
            </div>
        </div>
    </div>

    <!-- Section Header -->
    <div class="contact-header">
        <div class="logo-cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <h2 class="section-title">{{ __('messages.contact_title') }}</h2>
        <p class="section-subtitle">{{ __('messages.contact_subtitle') }}</p>
    </div>

    <div class="contact-container">
        <div class="contact-content">
            <!-- Contact Information -->
            <div class="contact-info">
                <div class="info-cloud-wrapper">
                    <div class="info-cloud-bg">
                        <i class="fas fa-cloud"></i>
                    </div>

                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h3>{{ __('messages.location') }}</h3>
                                <p>{{ __('messages.location_value') }}</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h3>{{ __('messages.email') }}</h3>
                                <p>info@sahabcode.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h3>{{ __('messages.phone') }}</h3>
                                <p><span class="phone-number">+965 65579000</span></p>
                            </div>
                        </div>

                        <div class="info-accent-clouds">
                            <i class="fas fa-cloud accent-cloud info-ac1"></i>
                            <i class="fas fa-cloud accent-cloud info-ac2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <div class="form-cloud-wrapper">
                    <div class="form-cloud-bg">
                        <i class="fas fa-cloud"></i>
                    </div>

                    <div class="form-cloud">
                        <form class="contact-form" id="contactForm">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="name" name="name" required placeholder=" " />
                                    <label for="name">{{ __('messages.your_name') }}</label>
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" id="email" name="email" required placeholder=" " />
                                    <label for="email">{{ __('messages.your_email') }}</label>
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <select id="service" name="service" required>
                                        <option value="" disabled selected></option>
                                        <option value="web">{{ __('messages.web_dev') }}</option>
                                        <option value="dashboard">{{ __('messages.business_dashboards') }}</option>
                                        <option value="ui">{{ __('messages.uiux_enhancement') }}</option>
                                        <option value="other">{{ __('messages.other') }}</option>
                                    </select>
                                    <label for="service">{{ __('messages.service_needed') }}</label>
                                    <i class="fas fa-briefcase"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <textarea id="message" name="message" required placeholder=" "></textarea>
                                    <label for="message">{{ __('messages.your_message') }}</label>
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                            </div>

                            <button type="submit" class="submit-btn">
                                {{ __('messages.send_message') }}
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>

                        <div class="form-accent-clouds">
                            <i class="fas fa-cloud accent-cloud form-ac1"></i>
                            <i class="fas fa-cloud accent-cloud form-ac2"></i>
                        </div>
                    </div>

                    <script>
                        document.getElementById("contactForm").addEventListener("submit", function(event) {
                        event.preventDefault();
                        
                        let formData = new FormData(this);
                        
                        fetch("{{ route('contact.submit') }}", {
                            method: "POST",
                            body: formData,
                            headers: {
                                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert("Message sent successfully!");
                                document.getElementById("contactForm").reset();
                            } else {
                                alert("Failed to send message. Please try again.");
                            }
                        })
                        .catch(error => console.error("Error:", error));
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Contact Section Cloud Animation
document.addEventListener('DOMContentLoaded', function() {
    // Only run if the element exists
    if (document.getElementById('contact-floating-clouds')) {
        createFloatingClouds('contact-floating-clouds', 10); // Create 10 floating clouds
    }
});

// Function to create floating clouds
function createFloatingClouds(containerId, count) {
    const container = document.getElementById(containerId);
    if (!container) return;
    
    for (let i = 0; i < count; i++) {
        createFloatingCloud(container);
    }
}

// Create a single floating cloud
function createFloatingCloud(container) {
    const cloud = document.createElement('i');
    cloud.className = 'fas fa-cloud floating-cloud';
    
    // Random positioning
    const posX = Math.random() * 100; // Random X position (0-100%)
    const posY = Math.random() * 100; // Random Y position (0-100%)
    
    // Random size (2-5rem)
    const size = 2 + Math.random() * 3;
    
    // Random duration for animation (20-40s)
    const duration = 20 + Math.random() * 20;
    
    // Random delay for animation start (0-10s)
    const delay = Math.random() * 10;
    
    // Apply styles
    cloud.style.left = `${posX}%`;
    cloud.style.top = `${posY}%`;
    cloud.style.fontSize = `${size}rem`;
    cloud.style.opacity = `${0.1 + Math.random() * 0.1}`; // Random opacity (0.1-0.2)
    cloud.style.animation = `floatCloud ${duration}s linear infinite`;
    cloud.style.animationDelay = `${delay}s`;
    
    // Custom animation path for each cloud
    const randomPath = generateRandomCloudPath();
    
    // Create and apply keyframes for this specific cloud
    const styleSheet = document.styleSheets[0];
    const keyframesRule = `
        @keyframes floatCloud {
            0% { transform: translate(0, 0); }
            25% { transform: translate(${randomPath.x1}px, ${randomPath.y1}px); }
            50% { transform: translate(${randomPath.x2}px, ${randomPath.y2}px); }
            75% { transform: translate(${randomPath.x3}px, ${randomPath.y3}px); }
            100% { transform: translate(0, 0); }
        }
    `;
    
    // Add the keyframes to the document
    try {
        styleSheet.insertRule(keyframesRule, styleSheet.cssRules.length);
    } catch (error) {
        // If there's an error with the styleSheet approach, use a fallback
        const style = document.createElement('style');
        style.innerHTML = keyframesRule;
        document.head.appendChild(style);
    }
    
    // Add cloud to the container
    container.appendChild(cloud);
}

// Generate random path for cloud movement
function generateRandomCloudPath() {
    return {
        x1: -30 - Math.random() * 70,
        y1: -30 - Math.random() * 70,
        x2: Math.random() > 0.5 ? 70 + Math.random() * 70 : -70 - Math.random() * 70,
        y2: Math.random() > 0.5 ? 70 + Math.random() * 70 : -70 - Math.random() * 70,
        x3: 30 + Math.random() * 70,
        y3: 30 + Math.random() * 70
    };
}
</script>
<!-- Footer -->
<!-- Clean Cloud-Themed Footer Section -->
<footer class="cloud-footer">
    <!-- Background Elements (matching other cloud sections) -->
    <div class="footer-bg-elements">
        <!-- Dynamic clouds will be added via JS -->
        <div class="floating-clouds" id="footer-floating-clouds"></div>

        <!-- Cloud clusters -->
        <div class="cloud-clusters">
            <div class="cloud-cluster footer-cluster-1">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
            <div class="cloud-cluster footer-cluster-2">
                <i class="fas fa-cloud cloud-large"></i>
                <i class="fas fa-cloud cloud-medium"></i>
                <i class="fas fa-cloud cloud-small"></i>
            </div>
        </div>

        <!-- Foreground clouds -->
        <div class="foreground-clouds">
            <div class="fg-cloud footer-fg-1">
                <i class="fas fa-cloud"></i>
            </div>
            <div class="fg-cloud footer-fg-2">
                <i class="fas fa-cloud"></i>
            </div>
        </div>
    </div>

    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-brand">
                <div class="brand-cloud-wrapper">
                    <div class="brand-cloud-bg">
                        <i class="fas fa-cloud"></i>
                    </div>

                    <div class="brand-content">
                        <a href="#" class="footer-logo">
                            <i class="fas fa-cloud"></i>
                            @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
                            سحاب كود
                            @else
                            SahabCode
                            @endif
                        </a>
                        <p class="footer-description">{{ __('messages.footer_text') }}</p>
                        <div class="footer-social">
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                            <a href="#" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-links">
                <div class="links-cloud-wrapper">
                    <div class="links-cloud-bg">
                        <i class="fas fa-cloud"></i>
                    </div>

                    <div class="links-content">
                        <div class="footer-groups">
                            <div class="footer-group">
                                <h3>{{ __('messages.services') }}</h3>
                                <ul>
                                    <li><a href="#services">{{ __('messages.web_dev') }}</a></li>
                                    <li><a href="#services">{{ __('messages.business_dashboards') }}</a></li>
                                    <li><a href="#services">{{ __('messages.uiux_enhancement') }}</a></li>
                                </ul>
                            </div>

                            <div class="footer-group">
                                <h3>{{ __('messages.company') }}</h3>
                                <ul>
                                    <li><a href="#about">{{ __('messages.about') }}</a></li>
                                    <li><a href="#work">{{ __('messages.work') }}</a></li>
                                    <li><a href="#contact">{{ __('messages.contact') }}</a></li>
                                    <li><a href="#careers">{{ __('messages.careers') }}</a></li>
                                </ul>
                            </div>

                            <div class="footer-group">
                                <h3>{{ __('messages.contact') }}</h3>
                                <ul class="footer-contact">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>{{ __('messages.location_value') }}</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <span>info@sahabcode.com</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <span class="phone-number">+965 65579000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-copyright">
                <p>&copy; {{ date('Y') }} SahabCode. {{ __('messages.all_rights') }}</p>
            </div>
            <div class="footer-legal">
                <a href="#privacy">{{ __('messages.privacy_policy') }}</a>
                <a href="#terms">{{ __('messages.terms_service') }}</a>
            </div>
        </div>
    </div>
</footer>
@endsection