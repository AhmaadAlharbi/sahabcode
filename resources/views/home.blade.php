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
<section id="about" class="enhanced-about">
    <!-- Cloud ambiance background -->
    <div class="about-atmosphere">
        <div class="atmosphere-layer back-layer"></div>
        <div class="atmosphere-layer middle-layer"></div>
        <div class="atmosphere-layer front-layer"></div>
    </div>

    <div class="about-container">
        <div class="section-clouds">
            <div class="section-cloud left-cloud">
                <i class="fas fa-cloud"></i>
            </div>
            <h2 class="section-title">{{ __('messages.about_title') }}</h2>
            <div class="section-cloud right-cloud">
                <i class="fas fa-cloud"></i>
            </div>
        </div>
        <p class="section-subtitle">{{ __('messages.about_subtitle') }}</p>

        <div class="about-content">
            <!-- Profile Section with Cloud Animation -->
            <div class="about-profile">
                <div class="profile-cloud-container">
                    <div class="profile-cloud-ring outer-ring"></div>
                    <div class="profile-cloud-ring middle-ring"></div>
                    <div class="profile-cloud">
                        <i class="fas fa-user-circle"></i>
                        <div class="mini-clouds">
                            <i class="fas fa-cloud mini-cloud mc-1"></i>
                            <i class="fas fa-cloud mini-cloud mc-2"></i>
                            <i class="fas fa-cloud mini-cloud mc-3"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Text with Enhanced Cards -->
            <div class="about-details">
                <div class="about-card">
                    <div class="card-cloud-corner top-left">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>{{ __('messages.who_i_am') }}</h3>
                    <p>{{ __('messages.who_i_am_text') }}</p>
                    <div class="card-cloud-corner bottom-right">
                        <i class="fas fa-cloud"></i>
                    </div>
                </div>

                <div class="about-card">
                    <div class="card-cloud-corner top-right">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>{{ __('messages.my_approach') }}</h3>
                    <p>{{ __('messages.my_approach_text') }}</p>
                    <div class="card-cloud-corner bottom-left">
                        <i class="fas fa-cloud"></i>
                    </div>
                </div>

                <!-- Enhanced Skills Cloud Formation -->
                <div class="skills-cloudscape">
                    <h3 class="skills-title">Skills & Expertise</h3>

                    <div class="cloud-formation">
                        <div class="cloud-skill" data-skill="HTML5">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-html5 skill-icon"></i>
                                    <span>HTML5</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="CSS">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-css3-alt skill-icon"></i>
                                    <span>CSS</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="JavaScript">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-js skill-icon"></i>
                                    <span>JavaScript</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="PHP">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-php skill-icon"></i>
                                    <span>PHP</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="Laravel">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-laravel skill-icon"></i>
                                    <span>Laravel</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="Vue">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-vuejs skill-icon"></i>
                                    <span>Vue JS</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="Bootstrap">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-bootstrap skill-icon"></i>
                                    <span>Bootstrap</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="MySQL">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fas fa-database skill-icon"></i>
                                    <span>MySQL</span>
                                </div>
                            </div>
                        </div>

                        <div class="cloud-skill" data-skill="Git">
                            <div class="cloud-wrapper">
                                <i class="fas fa-cloud skill-cloud"></i>
                                <div class="skill-content">
                                    <i class="fab fa-git-alt skill-icon"></i>
                                    <span>Git</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Animated cloud divider -->
    <div class="cloud-divider">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="white" fill-opacity="0.05"
                d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,224C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
</section>
<script>
    // Enhanced About Section Animations
document.addEventListener("DOMContentLoaded", function() {
    // Initialize enhanced about animations
    initEnhancedAbout();
});

function initEnhancedAbout() {
    // Add cloud particles
    createCloudParticles();
    
    // Initialize 3D effect for skills
    initSkills3DEffect();
    
    // Add parallax effect to about cards
    initAboutCardParallax();
}

// Create and animate small cloud particles in the background
function createCloudParticles() {
    const section = document.querySelector('.enhanced-about');
    if (!section) return;
    
    // Create a container for cloud particles
    const particlesContainer = document.createElement('div');
    particlesContainer.className = 'cloud-particles';
    particlesContainer.style.position = 'absolute';
    particlesContainer.style.top = '0';
    particlesContainer.style.left = '0';
    particlesContainer.style.width = '100%';
    particlesContainer.style.height = '100%';
    particlesContainer.style.overflow = 'hidden';
    particlesContainer.style.pointerEvents = 'none';
    particlesContainer.style.zIndex = '2';
    
    section.appendChild(particlesContainer);
    
    // Create cloud particles
    const particleCount = 20;
    for (let i = 0; i < particleCount; i++) {
        createCloudParticle(particlesContainer);
    }
}

function createCloudParticle(container) {
    const particle = document.createElement('i');
    particle.className = 'fas fa-cloud';
    particle.style.position = 'absolute';
    particle.style.color = 'rgba(255, 255, 255, 0.05)';
    
    // Random size
    const size = Math.random() * 2 + 0.5; // 0.5rem to 2.5rem
    particle.style.fontSize = `${size}rem`;
    
    // Random position
    const posX = Math.random() * 100;
    const posY = Math.random() * 100;
    particle.style.left = `${posX}%`;
    particle.style.top = `${posY}%`;
    
    // Random animation
    const duration = Math.random() * 40 + 20; // 20-60s
    const delay = Math.random() * -30;
    
    // Create animation path
    const startX = posX;
    const startY = posY;
    const endX = startX + (Math.random() * 30 - 15);
    const endY = startY + (Math.random() * 30 - 15);
    
    // Apply the animation
    particle.style.animation = `floatParticle ${duration}s ease-in-out infinite ${delay}s`;
    
    // Add keyframes for this specific particle
    const style = document.createElement('style');
    style.textContent = `
        @keyframes floatParticle {
            0%, 100% { transform: translate(0, 0) rotate(0deg); opacity: 0.3; }
            25% { transform: translate(${Math.random() * 30}px, ${Math.random() * -30}px) rotate(${Math.random() * 20}deg); opacity: 0.7; }
            50% { transform: translate(${Math.random() * 50}px, ${Math.random() * -10}px) rotate(${Math.random() * 40}deg); opacity: 0.5; }
            75% { transform: translate(${Math.random() * 30}px, ${Math.random() * 20}px) rotate(${Math.random() * 20}deg); opacity: 0.7; }
        }
    `;
    document.head.appendChild(style);
    
    container.appendChild(particle);
    
    // Replace the particle after its animation duration (optional)
    setTimeout(() => {
        if (container.contains(particle)) {
            container.removeChild(particle);
            createCloudParticle(container);
        }
    }, duration * 1000);
}

// Initialize 3D tilt effect for skill clouds
function initSkills3DEffect() {
    const skillItems = document.querySelectorAll('.cloud-skill');
    
    skillItems.forEach(item => {
        const wrapper = item.querySelector('.cloud-wrapper');
        const cloud = item.querySelector('.skill-cloud');
        const content = item.querySelector('.skill-content');
        
        // Add 3D tilt effect on mouse move
        item.addEventListener('mousemove', (e) => {
            const itemRect = item.getBoundingClientRect();
            const itemCenterX = itemRect.left + itemRect.width / 2;
            const itemCenterY = itemRect.top + itemRect.height / 2;
            
            // Calculate mouse position relative to the center (-1 to 1)
            const mouseX = (e.clientX - itemCenterX) / (itemRect.width / 2);
            const mouseY = (e.clientY - itemCenterY) / (itemRect.height / 2);
            
            // Apply rotation based on mouse position
            wrapper.style.transform = `rotateX(${mouseY * -10}deg) rotateY(${mouseX * 10}deg) translateY(-10px)`;
            cloud.style.transform = `translateZ(-10px) scale(${1 + Math.abs(mouseX) * 0.1 + Math.abs(mouseY) * 0.1})`;
            content.style.transform = `translateZ(30px)`;
        });
        
        // Reset on mouse leave
        item.addEventListener('mouseleave', () => {
            wrapper.style.transform = '';
            cloud.style.transform = 'translateZ(-10px)';
            content.style.transform = 'translateZ(20px)';
        });
    });
}

// Add parallax effect to about cards
function initAboutCardParallax() {
    const aboutCards = document.querySelectorAll('.about-card');
    
    aboutCards.forEach(card => {
        const cornerClouds = card.querySelectorAll('.card-cloud-corner');
        
        card.addEventListener('mousemove', (e) => {
            const cardRect = card.getBoundingClientRect();
            const cardCenterX = cardRect.left + cardRect.width / 2;
            const cardCenterY = cardRect.top + cardRect.height / 2;
            
            // Calculate mouse position relative to the center (-1 to 1)
            const mouseX = (e.clientX - cardCenterX) / (cardRect.width / 2);
            const mouseY = (e.clientY - cardCenterY) / (cardRect.height / 2);
            
            // Move corner clouds based on mouse position
            cornerClouds.forEach(cloud => {
                const isLeft = cloud.classList.contains('top-left') || cloud.classList.contains('bottom-left');
                const isTop = cloud.classList.contains('top-left') || cloud.classList.contains('top-right');
                
                const xDirection = isLeft ? -1 : 1;
                const yDirection = isTop ? -1 : 1;
                
                cloud.style.transform = `
                    translate(${mouseX * 10 * xDirection}px, ${mouseY * 10 * yDirection}px)
                    scale(1.1)
                    rotate(${mouseX * 5}deg)
                `;
            });
        });
        
        // Reset on mouse leave
        card.addEventListener('mouseleave', () => {
            cornerClouds.forEach(cloud => {
                cloud.style.transform = '';
            });
        });
    });
}

// Add scroll animation for the profile section
window.addEventListener('scroll', () => {
    const profileSection = document.querySelector('.about-profile');
    if (!profileSection) return;
    
    const scrollPosition = window.scrollY;
    const section = document.querySelector('.enhanced-about');
    const sectionTop = section.offsetTop;
    
    // Calculate how far into the section we've scrolled (0 to 1)
    const scrollProgress = Math.max(0, Math.min(1, 
        (scrollPosition - sectionTop + window.innerHeight / 2) / 
        (section.offsetHeight + window.innerHeight / 2)
    ));
    
    // Apply rotation to rings based on scroll
    const outerRing = document.querySelector('.outer-ring');
    const middleRing = document.querySelector('.middle-ring');
    
    if (outerRing && middleRing) {
        outerRing.style.transform = `rotate(${scrollProgress * 180}deg)`;
        middleRing.style.transform = `rotate(${-scrollProgress * 180}deg)`;
    }
});
</script>

<!-- Services Section -->
<section class="services" id="services">
    <div class="services-content">
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <h2 class="section-title">{{ __('messages.services_title') }}</h2>
        <p class="section-subtitle">{{ __('messages.services_subtitle') }}</p>

        <div class="services-grid">
            <div class="service-card" data-service="web">
                <div class="service-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>{{ __('messages.web_dev') }}</h3>
                <ul class="service-features">
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        {{ __('messages.responsive_design') }}
                    </li>
                    <li>
                        <i class="fas fa-paint-brush"></i>
                        {{ __('messages.modern_ui') }}
                    </li>
                    <li>
                        <i class="fas fa-rocket"></i>
                        {{ __('messages.seo') }}
                    </li>
                </ul>
                <div class="cloud-indicator"></div>
            </div>

            <div class="service-card" data-service="dashboard">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>{{ __('messages.business_dashboards') }}</h3>
                <ul class="service-features">
                    <li>
                        <i class="fas fa-chart-pie"></i>
                        {{ __('messages.data_visualization') }}
                    </li>
                    <li>
                        <i class="fas fa-tasks"></i>
                        {{ __('messages.task_management') }}
                    </li>
                    <li>
                        <i class="fas fa-shield-alt"></i>
                        {{ __('messages.secure_solutions') }}
                    </li>
                </ul>
                <div class="cloud-indicator"></div>
            </div>

            <div class="service-card" data-service="uiux">
                <div class="service-icon">
                    <i class="fas fa-magic"></i>
                </div>
                <h3>{{ __('messages.uiux_enhancement') }}</h3>
                <ul class="service-features">
                    <li>
                        <i class="fas fa-vector-square"></i>
                        {{ __('messages.interface_redesign') }}
                    </li>
                    <li>
                        <i class="fas fa-bullseye"></i>
                        {{ __('messages.user_engagement') }}
                    </li>
                    <li>
                        <i class="fas fa-hand-pointer"></i>
                        {{ __('messages.intuitive_navigation') }}
                    </li>
                </ul>
                <div class="cloud-indicator"></div>
            </div>
        </div>
    </div>
    <div class="services-scene"></div>
</section>

<!-- Portfolio Section -->
<!-- Portfolio Section -->
<section id="work" class="portfolio-atmosphere">
    <div class="atmosphere-container">
        <div class="portfolio-header">
            <h2 class="section-title">{{ __('messages.work_title') }}</h2>
            <p class="section-subtitle">{{ __('messages.work_subtitle') }}</p>
        </div>

        <div class="weather-grid">
            <!-- Each project card has identical structure -->
            <div class="weather-card">
                <div class="weather-scene">
                    <div class="cloud-formation">
                        <i class="fas fa-cloud primary-cloud"></i>
                        <i class="fas fa-cloud secondary-cloud"></i>
                        <i class="fas fa-cloud accent-cloud"></i>
                    </div>
                </div>
                <div class="project-capsule">
                    {{-- <span class="weather-badge">{{ __('messages.featured_project') }}</span> --}}
                    <img src="{{ asset('storage/images/landing/images/dashboard.png') }}" alt="Dashboard Project">
                    <div class="project-info">
                        <h3>{{ __('messages.modern_shopping') }}</h3>
                        <p>{{ __('messages.ecommerce_description') }}</p>
                        <a href="{{route('project.school_dashboard')}}" class="atmosphere-link">
                            {{ __('messages.view_project') }}
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 - Same structure -->
            <div class="weather-card">
                <div class="weather-scene">
                    <div class="cloud-formation">
                        <i class="fas fa-cloud primary-cloud"></i>
                        <i class="fas fa-cloud secondary-cloud"></i>
                        <i class="fas fa-cloud accent-cloud"></i>
                    </div>
                </div>
                <div class="project-capsule">
                    {{-- <span class="weather-badge">{{ __('messages.project2_name') }}</span> --}}
                    <img src="{{ asset('storage/images/landing/images/bright-kids.png') }}" alt="Bright Kids Project">
                    <div class="project-info">
                        <h3>{{ __('messages.project2_name') }}</h3>
                        <p>{{ __('messages.project2_description') }}</p>
                        <a href="https://bright-kids.site/" class="atmosphere-link">
                            {{ __('messages.view_project') }}
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 - Same structure -->
            <div class="weather-card">
                <div class="weather-scene">
                    <div class="cloud-formation">
                        <i class="fas fa-cloud primary-cloud"></i>
                        <i class="fas fa-cloud secondary-cloud"></i>
                        <i class="fas fa-cloud accent-cloud"></i>
                    </div>
                </div>
                <div class="project-capsule">
                    {{-- <span class="weather-badge">{{ __('messages.project3_name') }}</span> --}}
                    <img src="{{ asset('storage/images/landing/images/kahromaa.png') }}" alt="Kahromaa Project">
                    <div class="project-info">
                        <h3>{{ __('messages.project3_name') }}</h3>
                        <p>{{ __('messages.project3_description') }}</p>
                        <a href="https://kahromaa.com/" class="atmosphere-link">
                            {{ __('messages.view_project') }}
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials">
    <div class="testimonials-header">
        <h2 class="section-title">{{ __('messages.client_stories') }}</h2>
        <p class="section-subtitle">{{ __('messages.client_subtitle') }}</p>
    </div>

    <div class="testimonials-container">
        <div class="testimonial-track">
            <div class="testimonial-cloud active">
                <div class="cloud-shape">
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
                </div>

            </div>
            <div class="testimonial-cloud active">
                <div class="cloud-shape">
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
                </div>

            </div>
            <div class="testimonial-cloud active">
                <div class="cloud-shape">
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
                </div>

            </div>
            <div class="testimonial-cloud active">
                <div class="cloud-shape">
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
                </div>

            </div>
            <!-- Add more testimonials -->
        </div>

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

    <div class="floating-elements">
        <div class="mini-cloud" style="--delay: 0s">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="mini-cloud" style="--delay: 2s">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="mini-cloud" style="--delay: 4s">
            <i class="fas fa-cloud"></i>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="contact-container">
        <div class="contact-content">
            <div class="contact-info">
                <h2 class="section-title">{{ __('messages.contact_title') }}</h2>
                <p class="section-subtitle">{{ __('messages.contact_subtitle') }}</p>

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
                </div>

                {{-- <div class="social-links">
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Dribbble">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div> --}}
            </div>

            <div class="contact-form-wrapper">
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

<!-- Footer -->
<footer class="footer">
    <div class="footer-clouds">
        <div class="footer-cloud"></div>
        <div class="footer-cloud"></div>
    </div>

    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-brand">
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

            <div class="footer-links">
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
                            {{ __('messages.location_value') }}
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            info@sahabcode.com
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p><span class="phone-number">+965 65579000</span></p>
                        </li>
                    </ul>
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