@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="container">
    <div class="content">
        <h1 class="title">{{ __('messages.main_title') }}</h1>
        <p class="subtitle">{{ __('messages.subtitle') }}</p>
        <div class="cta-container">
            <a href="#work" class="cta-button primary">
                <span class="button-content">
                    <i class="fas fa-eye"></i>
                    <span>{{ __('messages.view_work') }}</span>
                </span>
            </a>
            <a href="#contact" class="cta-button secondary">
                <span class="button-content">
                    <i class="fas fa-rocket"></i>
                    <span>{{ __('messages.get_started') }}</span>
                </span>
            </a>
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
                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fab fa-html5 skill-icon"></i>
                                <span>HTML5</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fab fa-css3-alt skill-icon"></i>
                                <span>CSS</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fab fa-js skill-icon"></i>
                                <span>JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fab fa-php skill-icon"></i>
                                <span>PHP</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fab fa-laravel skill-icon"></i>
                                <span>Laravel</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fab fa-vuejs skill-icon"></i>
                                <span>Vue JS</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fab fa-bootstrap skill-icon"></i>
                                <span>Bootstrap</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
                            <div class="skill-content">
                                <i class="fas fa-database skill-icon"></i>
                                <span>MYSQL</span>
                            </div>
                        </div>
                    </div>

                    <div class="cloud-skill">
                        <div class="cloud-shape">
                            <i class="fas fa-cloud cloud-bg"></i>
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