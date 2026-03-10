<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="hero">
    <div class="container hero-grid">
        <div>
            <h1>Không gian trầm hương sang trọng, chuẩn phong cách Việt</h1>
            <p>
                Đây là giao diện khởi tạo mô phỏng bố cục của website tramhuongviet.com,
                phù hợp để phát triển thành website bán hàng với WooCommerce.
            </p>
            <a href="#san-pham" class="btn">Khám phá sản phẩm</a>
        </div>
        <div class="hero-image" role="img" aria-label="Sản phẩm trầm hương"></div>
    </div>
</section>

<section id="san-pham" class="section">
    <div class="container">
        <h2>Sản phẩm nổi bật</h2>
        <div class="products">
            <?php
            $products = [
                ['name' => 'Nhang trầm cao cấp', 'price' => '390.000₫', 'img' => 'https://images.unsplash.com/photo-1508182314998-3bd49473002f?auto=format&fit=crop&w=600&q=80'],
                ['name' => 'Vòng tay trầm hương', 'price' => '890.000₫', 'img' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=600&q=80'],
                ['name' => 'Tượng gỗ trầm', 'price' => '1.250.000₫', 'img' => 'https://images.unsplash.com/photo-1523419409543-7fffc8a6f3f6?auto=format&fit=crop&w=600&q=80'],
                ['name' => 'Tinh dầu trầm', 'price' => '540.000₫', 'img' => 'https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=600&q=80'],
            ];

            foreach ($products as $product) :
                ?>
                <article class="product-card">
                    <img src="<?php echo esc_url($product['img']); ?>" alt="<?php echo esc_attr($product['name']); ?>">
                    <div class="content">
                        <h3><?php echo esc_html($product['name']); ?></h3>
                        <p><?php echo esc_html($product['price']); ?></p>
                    </div>
                </article>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Giá trị khác biệt</h2>
        <div class="features">
            <div class="feature-card">
                <h3>Nguyên liệu chọn lọc</h3>
                <p>Trầm hương có nguồn gốc rõ ràng, mùi hương tự nhiên, phù hợp sử dụng lâu dài.</p>
            </div>
            <div class="feature-card">
                <h3>Thiết kế tinh tế</h3>
                <p>Phong cách tối giản nhưng sang trọng, nhấn mạnh trải nghiệm mua hàng hiện đại.</p>
            </div>
            <div class="feature-card">
                <h3>Dễ mở rộng</h3>
                <p>Sẵn sàng tích hợp WooCommerce, blog chia sẻ kiến thức và landing page sản phẩm.</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
