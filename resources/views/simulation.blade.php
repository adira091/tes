<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .part-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .progress-bar {
            transition: width 0.5s ease-in-out;
        }
        #confetti-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1000;
        }
        .dropdown-enter {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .dropdown-enter-active {
            max-height: 500px;
        }
        .dropdown-exit {
            max-height: 500px;
            overflow: hidden;
            transition: max-height 0.3s ease-in;
        }
        .dropdown-exit-active {
            max-height: 0;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Mulai menyalin seluruh konten body dari HTML Anda -->
    <!-- (Konten HTML Anda berada di sini) -->
</body>
</html>