<?php
session_start();

// Simple product catalogue for now
$products = [
    'video1' => [
        'name'  => 'Leadership & EI — Deep Dive',
        'meta'  => 'Masterclass · 45 min',
        'price' => 9.99,
        'thumb' => '../images/video-thumbnail-1.jpg',
    ],
    'video2' => [
        'name'  => 'Advanced Emotion Regulation',
        'meta'  => 'Techniques for leaders · 30 min',
        'price' => 6.49,
        'thumb' => '../images/video-thumbnail-2.jpg',
    ],
    'video3' => [
        'name'  => 'Emotional Agility Workshop',
        'meta'  => 'Workshop recording · 60 min',
        'price' => 12.00,
        'thumb' => '../images/video-thumbnail-3.jpg',
    ],
];

$id = $_GET['id'] ?? '';

if (!isset($products[$id])) {
    // invalid product id → back to multimedia
    header('Location: multimedia.php');
    exit;
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['qty'] += 1;
} else {
    $_SESSION['cart'][$id] = [
        'name'  => $products[$id]['name'],
        'meta'  => $products[$id]['meta'],
        'price' => $products[$id]['price'],
        'thumb' => $products[$id]['thumb'],
        'qty'   => 1,
    ];
}

header('Location: cart.php');
exit;
