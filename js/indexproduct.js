document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.nav-link');
    const allProducts = document.querySelectorAll('.product-card');
    let currentCategory = document.querySelector('.nav-link.active').getAttribute('data-category');

    function filterProducts(category) {
        // Update the current category
        currentCategory = category;

        allProducts.forEach(product => {
            // Use requestAnimationFrame for smooth transitions
            requestAnimationFrame(() => {
                if (product.dataset.category === category || category === 'all') {
                    product.classList.add('show');
                    product.style.display = 'block';
                } else {
                    product.classList.remove('show');
                    // Use a slight delay to allow for transition, then hide if category hasn't changed
                    setTimeout(() => {
                        if (currentCategory !== product.dataset.category) {
                            product.style.display = 'none';
                        }
                    }, 500);
                }
            });
        });
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', function (e) {
            e.preventDefault();
            // Reset all tabs and set the clicked one as active
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const category = this.getAttribute('data-category');
            filterProducts(category);
        });
    });

    // Initial display
    filterProducts(currentCategory);
});
