<style>
    

        body {
            text-align: center;
            align-items: center;
            justify-content: center;
            height: 100vh;
           
        }

        .bodder {
            border: 4px solid #337ab7; /* Add a thicker border around the form */
            border-radius: 8px; /* Optional: Add border radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Add box shadow for a subtle effect */
            background-color: aqua;
           
            max-width: 450px; /* Limit the maximum width of the modal */
            margin-left: 30%;
            margin-top: 15px;
             margin-bottom: 15px;
        }

        .bodder h2 {
            margin-bottom: 20px;
        }

        .bodder form {
            margin-top: 20px;
        }

        .bodder p {
            margin-top: 20px;
        }
    </style>
<body >
<div class="bodder">
       
    <h2>Bạn có chắc chắn muốn đăng xuất không?</h2>
    <form action="index.php?action=dangxuat&act=dangxuat_action" method="post">
        <input type="submit" name="submit" value="Đồng ý">
    </form>

    <p><a href="index.php">quay lại trang chính</a>.</p>
</div>
</body>

