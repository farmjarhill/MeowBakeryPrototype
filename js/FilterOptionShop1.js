document.addEventListener("DOMContentLoaded", function() {
    const allProducts = Array.from(document.querySelectorAll('.product-card-wrapper')); // Chuyển NodeList thành Array
    let currentPage = 1;
    const productsPerPage = 8;
    let currentFilter = 'all';
    let filteredProducts = allProducts; // Khởi tạo mặc định bằng tất cả sản phẩm

    function applyFilter(filter) {
        currentFilter = filter;
        filteredProducts = (filter === 'all') 
            ? allProducts 
            : allProducts.filter(product => product.getAttribute('data-category') === filter);
        currentPage = 1; // Đặt lại trang hiện tại về 1 mỗi khi áp dụng bộ lọc mới
        displayProducts();
    }

    function displayProducts() {
        const start = (currentPage - 1) * productsPerPage;
        const end = start + productsPerPage;
        const productsToShow = filteredProducts.slice(start, end);

        document.getElementById('products-grid').innerHTML = ''; // Xóa sản phẩm hiện tại
        productsToShow.forEach(product => document.getElementById('products-grid').appendChild(product.cloneNode(true)));

        updatePaginationControls();
    }

    function updatePaginationControls() {
        const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
        document.getElementById('prev-page').style.display = currentPage > 1 ? 'inline-block' : 'none';
        document.getElementById('next-page').style.display = currentPage < totalPages ? 'inline-block' : 'none';
        document.getElementById("noProducts").style.display = filteredProducts.length === 0 ? "flex" : "none";
        document.getElementById('current-page').textContent = currentPage; // Hiển thị số trang hiện tại
        document.getElementById('total-pages').textContent = totalPages; // Hiển thị tổng số trang
    }

    document.getElementById("filterOption").addEventListener("change", function() {
        applyFilter(this.value);
    });

    document.getElementById('next-page').addEventListener('click', function() {
        const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayProducts();
        }
    });

    document.getElementById('prev-page').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            displayProducts();
        }
    });

    applyFilter('all'); // Áp dụng bộ lọc 'all' khi trang được tải
});