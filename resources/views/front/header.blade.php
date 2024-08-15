<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flipkart-like Header and Menu</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
    }
    .header {
        display: none;
    }
    .logo {
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
        color: #fff;
    }
    .search-box {
        margin-top: 10px;
        padding: 10px;
        background-color: #fff;
    }
    .search-box input[type="text"] {
        width: calc(100% - 50px);
        border: none;
        outline: none;
        font-size: 16px;
        padding: 10px;
        margin-right: 10px;
    }
    .search-box button {
        background-color: #ff9f00;
        border: none;
        padding: 10px;
        cursor: pointer;
        color: #fff;
        font-size: 16px;
    }
    .user-options {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }
    .user-options a {
        color: #fff;
        text-decoration: none;
        margin-right: 20px;
    }
    .menu-bar {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }
    .menu-bar ul {
        display: none;
        list-style-type: none;
    }
    .menu-bar ul li {
        margin-bottom: 10px;
    }
    .menu-bar ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
        display: block;
        transition: all 0.3s ease;
    }
    .menu-bar ul li:hover a {
        background-color: #555;
    }
    .toggle-btn {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        display: block;
    }
    @media screen and (min-width: 769px) {
        .header {
            display: block;
            background-color: #2874f0;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu-bar {
            display: none;
        }
        .menu-bar ul {
            display: flex;
            list-style-type: none;
        }
        .menu-bar ul li {
            position: relative;
            margin-right: 20px;
        }
        .menu-bar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: all 0.3s ease;
        }
        .menu-bar ul li:hover a {
            background-color: #555;
        }
        .mega-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            padding: 20px;
            display: none;
            z-index: 1;
            width: 600px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .menu-bar ul li:hover .mega-menu {
            display: block;
        }
    }
</style>
</head>
<body>

<header class="header">
    <a href="#" class="logo">YourLogo</a>
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <button>Search</button>
    </div>
    <div class="user-options">
        <a href="#">Login</a>
        <a href="#">Cart</a>
        <a href="#">Become a Seller</a>
    </div>
</header>

<div class="menu-bar">
    <button class="toggle-btn">Menu</button>
    <ul>
        <li><a href="#">Electronics</a></li>
        <li><a href="#">Fashion</a></li>
        <li><a href="#">Home & Furniture</a></li>
        <li><a href="#">Books & More</a></li>
        <li><a href="#">Sports & Fitness</a></li>
    </ul>
</div>

<script>
    const toggleBtn = document.querySelector('.toggle-btn');
    const menuBar = document.querySelector('.menu-bar');

    toggleBtn.addEventListener('click', () => {
        menuBar.classList.toggle('active');
    });
</script>

</body>
</html>
