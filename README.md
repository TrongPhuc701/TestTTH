# WordPress Starter - Trầm Hương Việt

Bộ khởi tạo nhanh để bạn dựng website WordPress có phong cách tương tự `tramhuongviet.com`.

## Preview trực tiếp trên GitHub Pages

Repo đã có sẵn trang preview tĩnh trong thư mục `docs/` + workflow deploy GitHub Pages.

Sau khi push code lên GitHub:
1. Vào **Settings → Pages**.
2. Tại mục **Build and deployment**, chọn **Source: GitHub Actions**.
3. Chạy workflow `Deploy static preview to GitHub Pages` (hoặc push commit mới vào branch).
4. Link preview sẽ có dạng: `https://<github-username>.github.io/<repo-name>/`.

> Lưu ý: đây là bản preview UI tĩnh để xem nhanh giao diện. Bản WordPress đầy đủ nằm trong `wp-content/themes/tramhuongviet-clone`.

## Chạy bản WordPress đầy đủ với Docker

```bash
docker compose up -d
```

Sau khi chạy:
- Mở `http://localhost:8080` để cài WordPress.
- Vào `Appearance > Themes` và kích hoạt theme **Tram Huong Viet Clone Starter**.
- Vào `Settings > Reading`, đặt một trang tĩnh làm homepage để dùng giao diện `front-page.php`.

## Thành phần chính

- `docs/`: Bản preview deploy được ngay trên GitHub Pages.
- `.github/workflows/deploy-pages.yml`: Workflow tự động deploy `docs/` lên GitHub Pages.
- `docker-compose.yml`: Môi trường WordPress + MySQL.
- `wp-content/themes/tramhuongviet-clone`: Theme starter mô phỏng bố cục trang chủ bán trầm hương.

## Gợi ý để giống website gốc hơn

1. Cài thêm plugin `WooCommerce`.
2. Tạo danh mục sản phẩm và slider/banner trang chủ.
3. Bổ sung trang: Giới thiệu, Tin tức, Liên hệ.
4. Tinh chỉnh font, màu và hình ảnh theo nhận diện thương hiệu của bạn.
