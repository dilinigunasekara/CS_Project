// ============================================================
//  script.js — Beauty Care E-Commerce
//  Handles: cart, mobile nav, hero slider, DIY recipes, UI
// ============================================================

// ── CART STORAGE KEY ────────────────────────────────────────
const CART_KEY = 'beautycare_cart';

// ── CART HELPERS ────────────────────────────────────────────

/** Return the current cart array from localStorage */
function getCart() {
    return JSON.parse(localStorage.getItem(CART_KEY) || '[]');
}

/** Save cart to localStorage and refresh the count in the nav */
function saveCart(cart) {
    localStorage.setItem(CART_KEY, JSON.stringify(cart));
    updateCartCount();
}

/** Update the "(0)" badge next to Cart in the navbar */
function updateCartCount() {
    const cart  = getCart();
    const total = cart.reduce((sum, item) => sum + item.quantity, 0);
    document.querySelectorAll('#cart-count').forEach(el => el.textContent = total);
}

/** Add a product to the cart, or increment if already there */
function addToCart(id, name, price) {
    const cart   = getCart();
    const exists = cart.find(i => i.id === id);
    if (exists) {
        exists.quantity++;
    } else {
        cart.push({ id, name, price: parseFloat(price), quantity: 1 });
    }
    saveCart(cart);
    showToast(`"${name}" added to cart! 🛒`);
}

/** Remove a product completely from the cart */
function removeFromCart(id) {
    saveCart(getCart().filter(i => i.id !== id));
    renderCart();
}

/** Change the quantity of a cart item (+1 or -1). Removes if qty reaches 0. */
function changeQty(id, delta) {
    const cart = getCart();
    const item = cart.find(i => i.id === id);
    if (!item) return;
    item.quantity += delta;
    if (item.quantity <= 0) {
        saveCart(cart.filter(i => i.id !== id));
    } else {
        saveCart(cart);
    }
    renderCart();
}

// ── CART PAGE RENDER ────────────────────────────────────────

/** Render the full cart table on cart.php */
function renderCart() {
    const cart        = getCart();
    const tbody       = document.getElementById('cart-items');
    const cartContent = document.getElementById('cart-content');
    const emptyMsg    = document.getElementById('empty-cart-message');
    const totalEl     = document.getElementById('cart-total');

    if (!tbody) return; // Not on cart page

    if (!cart.length) {
        if (cartContent) cartContent.style.display  = 'none';
        if (emptyMsg)    emptyMsg.style.display = 'block';
        return;
    }

    if (cartContent) cartContent.style.display = 'block';
    if (emptyMsg)    emptyMsg.style.display    = 'none';

    let total = 0;
    tbody.innerHTML = '';

    cart.forEach(function(item) {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td style="text-align:left;font-weight:500">${escHtml(item.name)}</td>
            <td>$${item.price.toFixed(2)}</td>
            <td>
                <button class="qty-btn" onclick="changeQty('${item.id}', -1)">−</button>
                <span class="qty-value">${item.quantity}</span>
                <button class="qty-btn" onclick="changeQty('${item.id}', +1)">+</button>
            </td>
            <td>$${subtotal.toFixed(2)}</td>
            <td>
                <button class="remove-btn" onclick="removeFromCart('${item.id}')">Remove</button>
            </td>
        `;
        tbody.appendChild(tr);
    });

    if (totalEl) totalEl.textContent = total.toFixed(2);
}

// ── TOAST NOTIFICATION ──────────────────────────────────────

function showToast(message) {
    // Remove existing toast if any
    const old = document.getElementById('cart-toast');
    if (old) old.remove();

    const toast = document.createElement('div');
    toast.id    = 'cart-toast';
    toast.textContent = message;
    Object.assign(toast.style, {
        position:     'fixed',
        bottom:       '2rem',
        right:        '2rem',
        background:   '#2c2c2c',
        color:        '#fff',
        padding:      '0.9rem 1.5rem',
        borderRadius: '10px',
        fontSize:     '0.95rem',
        zIndex:       '9999',
        boxShadow:    '0 4px 15px rgba(0,0,0,.25)',
        opacity:      '0',
        transition:   'opacity .3s ease',
    });
    document.body.appendChild(toast);
    requestAnimationFrame(() => toast.style.opacity = '1');
    setTimeout(() => {
        toast.style.opacity = '0';
        setTimeout(() => toast.remove(), 300);
    }, 2800);
}

// ── ESCAPE HTML (prevent XSS in JS-rendered content) ────────
function escHtml(str) {
    const d = document.createElement('div');
    d.textContent = str;
    return d.innerHTML;
}

// ── DOM READY ───────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function () {

    // ── Update cart count on every page load ──────────────
    updateCartCount();

    // ── Render cart table if on cart.php ──────────────────
    renderCart();

    // ── Wire up "Add to Cart" buttons ────────────────────
    document.querySelectorAll('.add-to-cart-btn').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const card = this.closest('.product-card');
            if (!card) return;
            addToCart(card.dataset.id, card.dataset.name, card.dataset.price);
        });
    });

    // ── Clear Cart button ─────────────────────────────────
    const clearBtn = document.getElementById('clear-cart-btn');
    if (clearBtn) {
        clearBtn.addEventListener('click', function() {
            if (confirm('Are you sure you want to clear your entire cart?')) {
                saveCart([]);
                renderCart();
            }
        });
    }

    // ── Mobile Navigation Toggle ──────────────────────────
    const hamburger = document.querySelector('.hamburger');
    const navMenu   = document.querySelector('.nav-menu');
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });
    }

    // ── Hero Slider ───────────────────────────────────────
    const slider = {
        currentSlide:    0,
        slides:          document.querySelectorAll('.slide'),
        dots:            document.querySelectorAll('.dot'),
        totalSlides:     0,
        autoPlayInterval: null,

        init() {
            if (!this.slides.length) return;
            this.totalSlides = this.slides.length;

            const prev = document.querySelector('.prev-btn');
            const next = document.querySelector('.next-btn');
            if (prev) prev.addEventListener('click', () => this.prevSlide());
            if (next) next.addEventListener('click', () => this.nextSlide());

            this.dots.forEach((dot, i) => dot.addEventListener('click', () => this.goTo(i)));
            this.startAutoPlay();

            const container = document.querySelector('.slider-container');
            if (container) {
                container.addEventListener('mouseenter', () => this.stopAutoPlay());
                container.addEventListener('mouseleave', () => this.startAutoPlay());
            }
        },

        show(index) {
            this.slides.forEach(s => s.classList.remove('active'));
            this.dots.forEach(d => d.classList.remove('active'));
            if (this.slides[index]) this.slides[index].classList.add('active');
            if (this.dots[index])   this.dots[index].classList.add('active');
            this.currentSlide = index;
        },

        nextSlide()  { this.show((this.currentSlide + 1) % this.totalSlides); },
        prevSlide()  { this.show((this.currentSlide - 1 + this.totalSlides) % this.totalSlides); },
        goTo(index)  { this.show(index); },

        startAutoPlay() {
            this.stopAutoPlay();
            this.autoPlayInterval = setInterval(() => this.nextSlide(), 4000);
        },
        stopAutoPlay() {
            if (this.autoPlayInterval) { clearInterval(this.autoPlayInterval); this.autoPlayInterval = null; }
        }
    };
    if (document.querySelector('.slider-wrapper')) slider.init();

    // ── DIY Recipes — Expand / Collapse ───────────────────
    document.querySelectorAll('.see-more-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const id  = this.dataset.recipe;
            const box = document.getElementById('recipe-' + id);
            if (box) {
                box.classList.add('active');
                this.style.display = 'none';
                setTimeout(() => box.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 100);
            }
        });
    });

    document.querySelectorAll('.see-less-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const id      = this.dataset.recipe;
            const box     = document.getElementById('recipe-' + id);
            const moreBtn = document.querySelector('.see-more-btn[data-recipe="' + id + '"]');
            if (box) {
                box.classList.remove('active');
                if (moreBtn) {
                    moreBtn.style.display = 'block';
                    setTimeout(() => moreBtn.closest('.recipe-card-expandable')
                        .scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 100);
                }
            }
        });
    });

    // ── Contact Form ──────────────────────────────────────
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name    = document.getElementById('name')?.value;
            const email   = document.getElementById('email')?.value;
            const subject = document.getElementById('subject')?.value;
            const message = document.getElementById('message')?.value;
            if (name && email && subject && message) {
                showToast('Message sent! We will get back to you soon. ✉️');
                contactForm.reset();
            }
        });
    }

    // ── Smooth scroll for anchor links ────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

}); // end DOMContentLoaded
