import './bootstrap';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

// Initialize smooth scrolling
document.addEventListener('DOMContentLoaded', function() {
    // Initialize ScrollSmoother
    ScrollSmoother.create({
        smooth: 2,
        effects: true,
        normalizeScroll: true,
        wrapper: '#smooth-wrapper',
        content: '#smooth-content'
    });

    // Initialize animations
    initAnimations();
});

function initAnimations() {
    // Animate elements on scroll
    gsap.utils.toArray('.animate-on-scroll').forEach((element) => {
        gsap.fromTo(element, 
            { opacity: 0, y: 50 },
            {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    // Counter animations
    gsap.utils.toArray('.counter').forEach((counter) => {
        const endValue = parseInt(counter.getAttribute('data-end'));
        const duration = parseFloat(counter.getAttribute('data-duration')) || 2;
        
        gsap.fromTo(counter, 
            { innerText: 0 },
            {
                innerText: endValue,
                duration: duration,
                ease: "power2.out",
                snap: { innerText: 1 },
                scrollTrigger: {
                    trigger: counter,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });
}

// Smooth scroll to element
function scrollToElement(selector) {
    const element = document.querySelector(selector);
    if (element) {
        element.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Export functions for global use
window.scrollToElement = scrollToElement;
