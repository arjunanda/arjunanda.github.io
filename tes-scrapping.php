<?php
require 'simple_html_dom.php'; // Ganti dengan path menuju file "simple_html_dom.php"

// URL halaman yang akan di-scrape
$url = 'https://ghostexploiterteam.blogspot.com/';

// Membuat koneksi ke halaman web
$html = file_get_html($url);

// Memperoleh konten dari halaman web
if ($html) {
    // Memperoleh judul artikel
    $articleTitle = $html->find('h3.item-title', 0)->plaintext;

    // Memperoleh konten artikel
    $articleContent = $html->find('div.post-body.entry-content', 0)->innertext;

    // Tampilkan hasil scraping
    echo "Judul Artikel: " . $articleTitle . PHP_EOL;
    echo "Konten Artikel: " . $articleContent . PHP_EOL;
} else {
    echo "Gagal mengambil halaman web.";
}
?>