<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Map List</title>
    <style>
        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: normal;
            src: url('assets/fonts/IRANSansWeb.woff') format('woff');  /* All Major Browsers */
        }
        @font-face {
            font-family: IRANSans-Bold;
            font-style: normal;
            font-weight: normal;
            src: url('assets/fonts/IRANSansWeb_Bold.woff') format('woff');  /* All Major Browsers */
        }
        body {
            direction: rtl;
            background-color:#ccc;
        }

        .container {
            font-family: IRANSans;
            width: 1000px;
            /* text-align: center; */
            margin: auto;
            margin-top: 40px;
        }

        .titr {
            font-family: IRANSans-Bold;
            text-align: center;
        }

        span {
            color: #007bec;
        }

        .admin {
            margin-top: 50px;
            padding: 10px;
            background-color: white;
            border: 1px solid none;
            border-radius: 8px;
            height: 43px;
            -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
            -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
        }

        img {
            width: 40px;
            border-radius: 50%;
            float: right;
        }

        button {
            font-family: IRANSans;
            cursor: pointer;
        }

        .b-enORdisable-admin {
            font-size: 16px;
            margin: 5px;
            margin-right: 20px;
            padding: 3px;
            width: 70px;
            height: 80%;
            border: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        /* Admin buttons */
        .active, .b-enORdisable-admin:hover {
            background-color: #4CAF50;
            color: white;
        }
        
        /* Close button style */
        #b-close {
            float: left;
        }

        #b-close:hover {
            background-color: #f44336;
            color: white;
        }

        .content-table {
            margin-top: 20px;
            padding: 10px;
            background-color: white;
            border: 1px solid none;
            border-radius: 8px;
            height: 600px;
            position:relative;
            -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
            -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3);
        }

        table {
            font-family: IRANSans;
            width: 100%;
            padding: 5px;
        }

        th {
            font-family: IRANSans-Bold;
            text-align: right;
        }

        .b-enable,.b-disable {
            font-size: 16px;
            margin: 5px;
            width: 70px;
            height: 80%;
            border: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        /* Table buttons */
        .active, .b-enable:hover {
            background-color: #4CAF50;
            color: white;
        }

        /* .deactivate {
            background-color: #f44336;
            color: white;
        } */

        th,td {
            padding: 1px 8px;
        }

        /* highlight table rows */
        tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        /* <td> tag style Button enable and disable in table */
        .buttom-td {
            width: 100px; 
            text-align: center;
            padding: 1px 1px;
        }

        #mapWindow {
            width: 100%;
            height: 500px;
            margin-bottom: 5px;
        }
        .modal {
            display: none;
            direction: rtl;
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

            /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 7% auto; /* 15% from the top and centered */
            padding: 20px;
            height: 530px;
            border: 1px solid #888;
            border-radius: 12px;
            width: 35%; /* Could be more or less, depending on screen size */
        }

            /* The Close Button */
        .close {
            color: #aaa;
            float: left;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="titr">پنل مدیریت <span>سون مپ</span></h1>
        <div class="admin">
            <a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>assets/img/—Pngtree—vector house icon_3792370.png" alt=""></a>
            <a href=""><button type="button" class="b-enORdisable-admin active">فعال</button></a>
            <a href=""><button type="button" class="b-enORdisable-admin">غیر فعال</button></a>
            <a href="?logout=1"><button type="button" class="b-enORdisable-admin" id="b-close">خروج</button></a>
        </div>
        <div class="content-table">
            <table class="t-map">
                <tr>
                  <th>عنوان مکان</th>
                  <th style="text-align: center;">تاریخ ثبت</th>
                  <th style="text-align: center;">lat</th>
                  <th style="text-align: center;">lng</th>
                  <th style="text-align: center;">وضعیت</th>
                  <th>مشاهده</th>
                </tr>
                <?php foreach ($locations as $location) :?>
                <tr>
                  <td style="width: 350px;"><?= $location->title ?></td>
                  <td style="text-align: center;"><?= $location->created_at ?></td>
                  <td style="text-align: center;"><?= $location->lat ?></td>
                  <td style="text-align: center;"><?= $location->lng ?></td>
                  <td class="buttom-td">
                    <button id="b-change" class="b-enable active" value="button-active" onclick="change()">فعال</button>
                  </td>
                  <td><a href="#" class="preview" data-loc='<?= $location->id ?>'>مشاهده</a></td>
                </tr>
                <?php endforeach; ?>
              </table>
        </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <iframe id="mapWindow" src="#" frameborder="0"></iframe>
        </div>
    </div>

    <script src="<?= BASE_URL ?>assets/js/jquery.min.js"></script>
    <script>
      function change(){
        var elem = document.getElementById("b-change");
        if (elem.value == "button-active") {
          elem.value = "button-diactive";
          elem.innerHTML = "غیر فعال";
          elem.className = "b-disable";
        }else{
          elem.value = "button-active";
          elem.innerHTML = "فعال";
          elem.className = "b-enable active";
        }
      }


      $(document).ready(function(){
          $('.preview').click(function(){
              $('.modal').fadeIn();
              $('#mapWindow').attr('src','<?= BASE_URL ?>?loc=' + $(this).attr('data-loc'));
          });
          $('.modal .close').click(function(){
              $('.modal').fadeOut();
          });
      });
    </script>
</body>
</html>