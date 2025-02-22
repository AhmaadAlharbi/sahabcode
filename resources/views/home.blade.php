@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="container">
    <div class="content">
        <h1 class="title">{{ __('messages.main_title') }}</h1>
        <p class="subtitle">{{ __('messages.subtitle') }}</p>
        <div class="cta-group">
            <a href="#work" class="cta btn-primary">{{ __('messages.view_work') }}</a>
            <a href="#contact" class="cta btn-secondary">{{ __('messages.get_started') }}</a>
        </div>
    </div>
    <div class="scene">
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="cloud">
            <i class="fas fa-cloud"></i>
        </div>
        <div class="rain" id="rain"></div>
    </div>
</div>

<!-- About Section -->
<section id="about" class="about">
    <div class="about-container">
        <h2 class="section-title">{{ __('messages.about_title') }}</h2>
        <p class="section-subtitle">{{ __('messages.about_subtitle') }}</p>

        <div class="about-content">
            <div class="about-image">
                <div class="profile-cloud">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="floating-technologies">
                    <div class="tech-cloud" style="--delay: 0s">
                        <i class="fab fa-react"></i>
                    </div>
                    <div class="tech-cloud" style="--delay: 1s">
                        <i class="fab fa-node-js"></i>
                    </div>
                    <div class="tech-cloud" style="--delay: 2s">
                        <i class="fab fa-python"></i>
                    </div>
                    <div class="tech-cloud" style="--delay: 3s">
                        <i class="fab fa-aws"></i>
                    </div>
                </div>
            </div>

            <div class="about-text">
                <div class="about-card">
                    <h3>{{ __('messages.who_i_am') }}</h3>
                    <p>{{ __('messages.who_i_am_text') }}</p>
                </div>

                <div class="about-card">
                    <h3>{{ __('messages.my_approach') }}</h3>
                    <p>{{ __('messages.my_approach_text') }}</p>
                </div>

                <div class="expertise-clouds">
                    <div class="expertise-item">
                        <i class="fab fa-html5"></i> <span>HTML5</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fab fa-css3-alt"></i> <span>CSS</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fab fa-js"></i> <span>JavaScript</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fab fa-php"></i> <span>PHP</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fab fa-laravel"></i> <span>Laravel</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fab fa-vuejs"></i> <span>Vue JS</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fab fa-bootstrap"></i> <span>Bootstrap</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fas fa-database"></i> <span>MYSQL</span>
                    </div>
                    <div class="expertise-item">
                        <i class="fab fa-git-alt"></i> <span>Git</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-background">
        <div class="floating-cloud"></div>
        <div class="floating-cloud"></div>
        <div class="floating-cloud"></div>
    </div>
</section>

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
<section id="work" class="portfolio">
    <div class="portfolio-header">
        <h2 class="section-title">{{ __('messages.work_title') }}</h2>
        <p class="section-subtitle">{{ __('messages.work_subtitle') }}</p>
    </div>

    <div class="portfolio-showcase">
        <div class="portfolio-item featured" data-category="web">
            <div class="portfolio-content">
                <div class="portfolio-preview">
                    <img src="{{ asset('images/dashboard.png') }}" alt="E-commerce Platform" />
                    <div class="portfolio-rain"></div>
                </div>
                <div class="portfolio-info">
                    <span class="project-category">{{ __('messages.ecommerce') }}</span>
                    <h3>{{ __('messages.modern_shopping') }}</h3>
                    <p>{{ __('messages.ecommerce_description') }}</p>
                    <div class="project-meta">
                        <div class="tech-pills">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                        </div>
                        <a href="#" class="view-project">
                            {{ __('messages.view_project') }}
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-row">
            <div class="portfolio-item" data-category="dashboard">
                <div class="portfolio-content">
                    <div class="portfolio-preview">
                        <img src="{{ asset('images/bright-kids.png') }}" alt="Analytics Dashboard" />
                        <div class="portfolio-rain"></div>
                    </div>
                    <div class="portfolio-info">
                        <span class="project-category">Dashboard</span>
                        <h3>Analytics Platform</h3>
                        <p>Real-time business intelligence dashboard with predictive analytics.</p>
                        <div class="project-meta">
                            <div class="tech-pills">
                                <span>Vue.js</span>
                                <span>D3.js</span>
                            </div>
                            <a href="#" class="view-project">
                                {{ __('messages.view_project') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-content">
                    <div class="portfolio-preview">
                        <img src="{{ asset('images/kahromaa.png') }}" alt="Fitness App" />
                        <div class="portfolio-rain"></div>
                    </div>
                    <div class="portfolio-info">
                        <span class="project-category">Mobile App</span>
                        <h3>Fitness Tracker</h3>
                        <p>Comprehensive fitness and nutrition tracking mobile application.</p>
                        <div class="project-meta">
                            <div class="tech-pills">
                                <span>React Native</span>
                                <span>Firebase</span>
                            </div>
                            <a href="#" class="view-project">
                                {{ __('messages.view_project') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ambient-clouds"></div>
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
                            <p>+965 65579000</p>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <div class="form-cloud">
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="name" required />
                                <label for="name">{{ __('messages.your_name') }}</label>
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="email" required />
                                <label for="email">{{ __('messages.your_email') }}</label>
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <select id="service" required>
                                    <option value="" selected disabled hidden></option>
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
                                <textarea id="message" required></textarea>
                                <label for="message">{{ __('messages.your_message') }}</label>
                                <i class="fas fa-comment-alt"></i>
                            </div>
                        </div>

                        <button type="submit" class="submit-btn">
                            {{ __('messages.send_message') }}
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-clouds">
        <div class="contact-cloud"></div>
        <div class="contact-cloud"></div>
        <div class="contact-cloud"></div>
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
                    <span>سحاب كود</span>
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
                            +965 65579000
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-copyright">
                <p>&copy; 2024 SahabCode. {{ __('messages.all_rights') }}</p>
            </div>
            <div class="footer-legal">
                <a href="#privacy">{{ __('messages.privacy_policy') }}</a>
                <a href="#terms">{{ __('messages.terms_service') }}</a>
            </div>
        </div>
    </div>
</footer>
@endsection