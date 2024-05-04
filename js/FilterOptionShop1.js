document.addEventListener("DOMContentLoaded", function() {
    const allProducts = Array.from(document.querySelectorAll('.product-card-wrapper'));
    let currentPage = 1;
    const productsPerPage = 8;
    let currentFilter = 'all';
    let filteredProducts = allProducts;

    function applyFilter(filter) {
        currentFilter = filter;
        filteredProducts = (filter === 'all') ? allProducts : allProducts.filter(product => product.getAttribute('data-category') === filter);
        currentPage = 1;
        displayProducts();
    }

    function displayProducts() {
        const start = (currentPage - 1) * productsPerPage;
        const end = start + productsPerPage;
        const productsToShow = filteredProducts.slice(start, end);
    
        const productsGrid = document.getElementById('products-grid');
        // Thay vì thiết lập innerHTML của productsGrid thành '', chúng ta sẽ ẩn tất cả sản phẩm trước tiên
        allProducts.forEach(product => product.style.display = 'none');
        // Sau đó chỉ hiển thị các sản phẩm thuộc phần được phân trang
        productsToShow.forEach(product => product.style.display = '');
    
        updatePaginationControls();
        // Không cần khởi tạo lại sự kiện nút 'Add to Cart' vì chúng không bị xóa khỏi DOM
    }
    
    // Đảm bảo hàm addToCart hoạt động chính xác
    function addToCart(event) {
        event.preventDefault();
        // Xác định sản phẩm được chọn thông qua event.target hoặc các thuộc tính liên quan
        // Logic để thêm sản phẩm vào giỏ hàng ở đây
    }

    function initializeAddToCartButtons() {
        const addToCartButtons = document.querySelectorAll('.js-add-cart');
        addToCartButtons.forEach(button => {
            button.removeEventListener('click', addToCart); // Xóa sự kiện click trước để tránh gắn nhiều lần
            button.addEventListener('click', addToCart);
        });
    }

    function updatePaginationControls() {
        const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
        document.getElementById('prev-page').style.display = currentPage > 1 ? 'inline-block' : 'none';
        document.getElementById('next-page').style.display = currentPage < totalPages ? 'inline-block' : 'none';
        document.getElementById("noProducts").style.display = filteredProducts.length === 0 ? "flex" : "none";
        document.getElementById('current-page').textContent = currentPage;
        // Hiện tại không có 'total-pages' trong mã HTML, nên dòng dưới đây được bình luận lại
        // document.getElementById('total-pages').textContent = totalPages;
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

    applyFilter('all');
});

// Giả định rằng bạn đã có hàm addToCart được định nghĩa ở đâu đó trong mã
function addToCart(event) {
    event.preventDefault();
    // Thêm logic để xử lý thêm sản phẩm vào giỏ hàng tại đây
}
