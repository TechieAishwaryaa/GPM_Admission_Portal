<!DOCTYPE html>
<html>
<head>
    <title>Admission Confirmation</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            text-align: center;
            position: relative;
        }

        h1 {
            color: #333;
            font-size: 36px;
            font-weight: bold;
        }

        p {
            color: #666;
            font-size: 24px;
        }

        .sprinkles {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .sprinkle {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #f1c40f;
            animation: sprinkleAnimation 4s linear infinite;
        }

        @keyframes sprinkleAnimation {
            0% {
                transform: translateY(100vh);
            }
            100% {
                transform: translateY(-100vh);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Congratulations!</h1>
        <p>Your admission is submited !</p>
        <div class="sprinkles">
            <?php
            for ($i = 0; $i < 100; $i++) {
                echo '<div class="sprinkle" style="top: ' . rand(0, 100) . '%; left: ' . rand(0, 100) . '%;"></div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
