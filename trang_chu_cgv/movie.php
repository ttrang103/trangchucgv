<?php
phpinfo();
?>
<?php
// Mảng chứa thông tin phim
$movies = [
    [
        'name' => 'Công Tử Bạc Liêu',
        'image' => './image',
        'rating' => 'T13',
        'release_date' => '06.12.2024',
        'trailer_url' => 'https://youtube.com/trailer1',
    ],
    [
        'name' => 'Moana 2',
        'image' => '',
        'rating' => 'P',
        'release_date' => 'Đang Chiếu Tại Rạp',
        'trailer_url' => 'https://youtube.com/trailer2',
    ],
    [
        'name' => 'Cuộc Chiến Của Rohirrim',
        'image' => './images/cuoc-chien-rohirrim.jpg',
        'rating' => 'T13',
        'release_date' => '13.12.2024',
        'trailer_url' => 'https://youtube.com/trailer3',
    ],
    [
        'name' => 'Linh Miêu',
        'image' => './images/linh-mieu.jpg',
        'rating' => 'T18',
        'release_date' => 'Đang Chiếu Tại Rạp',
        'trailer_url' => 'https://youtube.com/trailer4',
    ],
];

// Xử lý hành động từ các nút
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['details'])) {
        $movieName = $_POST['details'];
        echo "<script>alert('Xem chi tiết phim: $movieName');</script>";
        // Redirect đến trang chi tiết (tùy chỉnh URL)
        // header("Location: details.php?movie=$movieName");
    } elseif (isset($_POST['buy_ticket'])) {
        $movieName = $_POST['buy_ticket'];
        echo "<script>alert('Mua vé cho phim: $movieName');</script>";
        // Redirect đến trang mua vé (tùy chỉnh URL)
        // header("Location: buy-ticket.php?movie=$movieName");
    } elseif (isset($_POST['play_trailer'])) {
        $trailerUrl = $_POST['play_trailer'];
        echo "<script>window.open('$trailerUrl', '_blank');</script>";
    }
}