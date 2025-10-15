(function () {
    'use strict';

    window.addEventListener('load', function () {
        setTimeout(function () {
            var loadingScreen = document.getElementById('loadingScreen');
            if (loadingScreen) {
                loadingScreen.classList.add('hidden');
            }
        }, 3200);
    });

    document.addEventListener('DOMContentLoaded', function () {
        var cursor = document.querySelector('.cursor');
        var cursorGlow = document.querySelector('.cursor-glow');

        document.addEventListener('mousemove', function (event) {
            if (!cursor || !cursorGlow) {
                return;
            }

            cursor.style.left = event.clientX + 'px';
            cursor.style.top = event.clientY + 'px';
            cursorGlow.style.left = event.clientX - 20 + 'px';
            cursorGlow.style.top = event.clientY - 20 + 'px';
        });

        var hoverSelectors = ['a', 'button', '.service-card', 'input', 'textarea'];
        var hoverElements = document.querySelectorAll(hoverSelectors.join(','));

        hoverElements.forEach(function (element) {
            element.addEventListener('mouseenter', function () {
                if (!cursor || !cursorGlow) {
                    return;
                }
                cursor.classList.add('hover');
                cursorGlow.classList.add('hover');
            });

            element.addEventListener('mouseleave', function () {
                if (!cursor || !cursorGlow) {
                    return;
                }
                cursor.classList.remove('hover');
                cursorGlow.classList.remove('hover');
            });
        });

        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (event) {
                var targetSelector = anchor.getAttribute('href');
                if (targetSelector && targetSelector.length > 1) {
                    var target = document.querySelector(targetSelector);
                    if (target) {
                        event.preventDefault();
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry, index) {
                if (entry.isIntersecting) {
                    setTimeout(function () {
                        entry.target.classList.add('visible');
                    }, index * 100);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.fade-in').forEach(function (element) {
            observer.observe(element);
        });

        window.addEventListener('scroll', function () {
            var nav = document.querySelector('nav');
            if (!nav) {
                return;
            }
            if (window.pageYOffset > 100) {
                nav.style.background = 'rgba(0, 0, 0, 0.98)';
                nav.style.borderBottom = '1px solid rgba(212, 175, 55, 0.4)';
            } else {
                nav.style.background = 'rgba(28, 28, 28, 0.95)';
                nav.style.borderBottom = '1px solid rgba(212, 175, 55, 0.3)';
            }
        });

        var contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function (event) {
                event.preventDefault();
                var button = contactForm.querySelector('.submit-btn');
                if (!button) {
                    return;
                }
                var originalText = button.textContent;

                button.textContent = 'Crafting Message...';
                button.style.background = 'linear-gradient(135deg, #B8941F, #D4AF37)';
                button.style.transform = 'scale(0.98)';

                setTimeout(function () {
                    button.textContent = 'Message Delivered ✨';
                    button.style.background = 'linear-gradient(135deg, #228B22, #32CD32)';
                    button.style.transform = 'scale(1.02)';

                    setTimeout(function () {
                        button.textContent = originalText;
                        button.style.background = 'linear-gradient(135deg, #D4AF37, #FFD700)';
                        button.style.transform = 'scale(1)';
                        contactForm.reset();
                    }, 2500);
                }, 2000);
            });
        }

        var parallaxHandler = function () {
            var hero = document.querySelector('.hero');
            var particles = document.querySelectorAll('.particle');
            var scrolled = window.pageYOffset;

            if (hero) {
                hero.style.transform = 'translateY(' + (scrolled * 0.3) + 'px)';
            }

            particles.forEach(function (particle, index) {
                var speed = (index + 1) * 0.1;
                particle.style.transform = 'translateY(' + (scrolled * speed) + 'px)';
            });
        };

        window.addEventListener('scroll', parallaxHandler);

        document.querySelectorAll('.service-card').forEach(function (card) {
            card.addEventListener('mousemove', function (event) {
                var rect = card.getBoundingClientRect();
                var x = event.clientX - rect.left;
                var y = event.clientY - rect.top;
                var centerX = rect.width / 2;
                var centerY = rect.height / 2;
                var rotateX = (y - centerY) / 10;
                var rotateY = (centerX - x) / 10;

                card.style.transform = 'translateY(-15px) scale(1.02) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
            });
        });

        var tagline = document.querySelector('.hero-tagline');
        if (tagline) {
            var originalText = tagline.getAttribute('data-text') || tagline.textContent.trim();
            tagline.setAttribute('data-text', originalText);
            tagline.textContent = '';

            setTimeout(function () {
                var index = 0;
                (function typeWriter() {
                    if (index < originalText.length) {
                        tagline.textContent += originalText.charAt(index);
                        index += 1;
                        setTimeout(typeWriter, 50);
                    }
                })();
            }, 2500);
        }

        var testimonials = Array.prototype.slice.call(document.querySelectorAll('.testimonial-card'));
        var navDots = Array.prototype.slice.call(document.querySelectorAll('.nav-dot'));
        var currentTestimonial = testimonials.findIndex(function (testimonial) {
            return testimonial.classList.contains('active');
        });
        if (currentTestimonial < 0) {
            currentTestimonial = 0;
        }

        var showTestimonial = function (index) {
            testimonials.forEach(function (testimonial, i) {
                if (i === index) {
                    testimonial.classList.add('active');
                } else {
                    testimonial.classList.remove('active');
                }
            });
            navDots.forEach(function (dot, i) {
                if (i === index) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
            currentTestimonial = index;
        };

        navDots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                var index = parseInt(dot.getAttribute('data-testimonial-index'), 10);
                if (!isNaN(index)) {
                    showTestimonial(index);
                }
            });
        });

        if (testimonials.length > 1) {
            setInterval(function () {
                var nextIndex = (currentTestimonial + 1) % testimonials.length;
                showTestimonial(nextIndex);
            }, 5000);
        }

        var animateCounters = function () {
            var counters = document.querySelectorAll('.stat-number');
            counters.forEach(function (counter) {
                var original = counter.getAttribute('data-original-value');
                if (!original) {
                    original = counter.textContent.trim();
                    counter.setAttribute('data-original-value', original);
                }
                var suffix = counter.getAttribute('data-suffix');
                if (suffix === null) {
                    suffix = original.replace(/\d/g, '');
                    counter.setAttribute('data-suffix', suffix);
                }
                var target = parseInt(original, 10);
                if (isNaN(target)) {
                    return;
                }
                var current = 0;
                var increment = target / 100;
                var interval = setInterval(function () {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target + suffix;
                        clearInterval(interval);
                    } else {
                        counter.textContent = Math.floor(current) + suffix;
                    }
                }, 20);
            });
        };

        var statsSection = document.querySelector('.philosophy-stats');
        if (statsSection) {
            var statsObserver = new IntersectionObserver(function (entries, obs) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        animateCounters();
                        obs.disconnect();
                    }
                });
            }, { threshold: 0.3 });
            statsObserver.observe(statsSection);
        }
    });
})();
