// assets/js/script.js

// Smooth scrolling for navigation
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Update URL without page jump
                if (history.pushState) {
                    history.pushState(null, null, targetId);
                } else {
                    window.location.hash = targetId;
                }
            }
        });
    });

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(44, 62, 80, 0.95)';
            navbar.style.backdropFilter = 'blur(10px)';
        } else {
            navbar.style.background = 'linear-gradient(135deg, #2c3e50, #3498db)';
            navbar.style.backdropFilter = 'none';
        }
    });

    // Initialize animations
    initAnimations();
    
    // Button hover effects
    initButtonEffects();
    
    // Gallery modal functionality
    initGallery();
});

// Initialize animations on scroll
function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationDelay = (entry.target.dataset.delay || '0.2s');
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
}

// Button hover effects
function initButtonEffects() {
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}

// Gallery modal functionality
function initGallery() {
    // Create modal container if it doesn't exist
    if (!document.getElementById('galleryModal')) {
        const modalHTML = `
        <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Galeri Foto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImage" src="" class="img-fluid" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>`;
        document.body.insertAdjacentHTML('beforeend', modalHTML);
    }

    // Add click handlers to gallery images
    document.querySelectorAll('.gallery-img').forEach(img => {
        img.addEventListener('click', function() {
            const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
            const modalImg = document.getElementById('modalImage');
            
            // Use actual image source if available, otherwise use placeholder
            const imgSrc = this.dataset.src || this.src;
            modalImg.src = imgSrc;
            modalImg.alt = this.alt;
            
            // Set modal title from alt text
            document.querySelector('#galleryModal .modal-title').textContent = this.alt || 'Galeri Foto';
            
            modal.show();
        });
    });
}

// Scroll to section function (can be called from HTML onclick)
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
        
        // Update URL
        if (history.pushState) {
            history.pushState(null, null, '#' + sectionId);
        } else {
            window.location.hash = '#' + sectionId;
        }
    }
}

// Show alert notification
function showAlert(message, type = 'info') {
    // Remove any existing alerts first
    const existingAlerts = document.querySelectorAll('.alert-notification');
    existingAlerts.forEach(alert => alert.remove());

    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-notification alert-dismissible fade show position-fixed`;
    alertDiv.style.top = '20px';
    alertDiv.style.right = '20px';
    alertDiv.style.zIndex = '9999';
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    document.body.appendChild(alertDiv);
    
    // Auto dismiss after 5 seconds
    setTimeout(() => {
        const bsAlert = new bootstrap.Alert(alertDiv);
        bsAlert.close();
    }, 5000);
}

// Functions for events page (acara.php)
function resetEventForm() {
    document.getElementById('eventModalTitle').textContent = 'Tambah Acara Baru';
    document.getElementById('formAction').value = 'create';
    document.getElementById('eventId').value = '';
    document.getElementById('eventName').value = '';
    document.getElementById('eventDate').value = '';
    document.getElementById('eventDescription').value = '';
}

function editEvent(id, name, date, description) {
    document.getElementById('eventModalTitle').textContent = 'Edit Acara';
    document.getElementById('formAction').value = 'update';
    document.getElementById('eventId').value = id;
    document.getElementById('eventName').value = name;
    document.getElementById('eventDate').value = date;
    document.getElementById('eventDescription').value = description;
}

function searchEvents() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const eventCards = document.querySelectorAll('.event-card');
    
    let found = false;
    
    eventCards.forEach(card => {
        const title = card.querySelector('h5').textContent.toLowerCase();
        const description = card.querySelector('p:last-child').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.closest('.col-md-6').style.display = 'block';
            found = true;
        } else {
            card.closest('.col-md-6').style.display = 'none';
        }
    });
    
    if (!found) {
        showAlert('Tidak ditemukan acara yang sesuai dengan pencarian', 'warning');
    }
}

// Initialize event search on enter key
if (document.getElementById('searchInput')) {
    document.getElementById('searchInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            searchEvents();
        }
    });
}