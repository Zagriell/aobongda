
<?php
    require("ketNoiDatabase.php");
    $sql = "SELECT * FROM `sanpham`";
    $query = mysqli_query($conn,$sql);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aobongda.net</title>

    <!--Link CSS-->
    <link rel="stylesheet" href="CSS/style_container_1.css">
    <link rel="stylesheet" href="CSS/style_container_2.css">
    <link rel="stylesheet" href="CSS/style_slide.css">
    <link rel="stylesheet" href="CSS/slyte_container_3.css">
    <link rel="stylesheet" href="CSS/style-table.css">
     
    <!--Link CDN font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    
    <script>
    function xoasanpham(){
        var conf = confirm(`bạn có chắc chắn xóa sản phẩm hay không ?`);
        return conf;
    }
    </script>
        <style>
            .add-delete-update{
                margin: 20px 100px;
            }
            #productList {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #productList td, #productList th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #productList tr:nth-child(even){background-color: #f2f2f2;}

            #productList tr:hover {background-color: #ddd;}

            #productList th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
            button{
                background-color: #2F54EB;
                padding:8px 16px;
            
            } button a{
                color: white;
            
            }
            a{
                text-decoration: none;
            }
        </style>
</head>



<body>

    <!--Flex box container_1-->
    <div class="container_1">
        <a href=""><img class="image_logo" src="image/logo.png" alt="logo"></a>
        <!--Hotline 1-->
        <ul class="number_phone">
            <li><i class="fa-solid fa-phone"></i><b> Hotline</b></li>
            <li style="color: red;"><b>0989.248.835</b></li>
        </ul>

        <!--Hotlien 2-->
        <ul class="number_phone">
            <li><i class="fa-solid fa-phone"></i><b> Hotline</b></li>
            <li style="color: red;"><b>0943.039.054</b></li>
        </ul>
    </div>




    <!--Flex box container_2-->
    <div class="header">
        <div class="container_2">
            <ul class="main_menu">
                <li style="background-color: #5b50b1;;"><a href="index.html">Trang chủ</a></li>
                <li><a href="">Áo đội tuyển quốc gia</a>
                    <ul class="sub_menu">
                        <li><a href="">Áo World Cup 2022</a></li>
                        <li><a href="">Áo đội tuyển Châu Á</a></li>
                    </ul>
                </li>
                <li><a href="">Áo câu lạc bộ</a>
                    <ul class="sub_menu">
                        <li><a href="">Giải Ngoại Hạng Anh</a></li>
                        <li><a href="">Giải Laliga</a></li>
                    </ul>
                </li>
                <li><a href="">Giày bóng đá</a>
                    <ul class="sub_menu">
                        <li><a href="">Giày Wika</a></li>
                        <li><a href="">Giày Kamito</a></li>
                    </ul>
                </li>
                <li><a href="">Áo khoác</a></li>
                <li><a href="">In áo bóng đá</a></li>
                <li><a href="">Phụ kiện</a>
                    <ul class="sub_menu">
                        <li><a href="">Găng tay thủ môn</a></li>
                        <li><a href="">Áo trọng tài</a></li>
                    </ul>
                </li>
                <li><a href="">Hệ thống chi nhánh</a></li>
            </ul>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script>
            $(document).ready(function(){
                // tìm tất cả các li có sub-menu và thêm nó vào class has-child
                $('.sub_menu').parent('li').addClass('has_child'); 
            });
        </script>

        <!-- <div class="khoi-slide">
            <div class="cac-slide">
                <div class="slide active"><img class="img-slide" src="image/anh1.png" alt=""></div>
                <div class="slide"><img class="img-slide" src="image/anh2.png" alt=""></div>
                <div class="slide"><img class="img-slide" src="image/anh3.jpeg" alt=""></div>
                <div class="slide"><img class="img-slide" src="image/anh4.jpeg" alt=""></div>
                <div class="slide"><img class="img-slide" src="image/anh5.jpeg" alt=""></div>
            </div>
            <div class="nut-slide">
                <span id="btn-prev"><i class="fas fa-angle-left"></i></span>
                <span id="btn-next"><i class="fas fa-angle-right"></i></span>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    
        <script type="text/javascript" src="Javascript/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Javascript/popper.min.js"></script>
        <script src="Javascript/script-slide.js"></script> -->
    </div>


    <!--Slide show-->

    <div class="khoi-slide">
        <div class="cac-slide">
            <div class="slide active"><img class="img-slide" src="image/anh1.png" alt=""></div>
            <div class="slide"><img class="img-slide" src="image/anh2.png" alt=""></div>
            <div class="slide"><img class="img-slide" src="image/anh3.jpeg" alt=""></div>
            <div class="slide"><img class="img-slide" src="image/anh4.jpeg" alt=""></div>
            <div class="slide"><img class="img-slide" src="image/anh5.jpeg" alt=""></div>
        </div>
        <div class="nut-slide">
            <span id="btn-prev"><i class="fas fa-angle-left"></i></span>
            <span id="btn-next"><i class="fas fa-angle-right"></i></span>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    <script type="text/javascript" src="Javascript/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="Javascript/popper.min.js"></script>
    <script src="Javascript/script-slide.js"></script>


    <!-- Container_3 -->
    <!-- thanh menu -->
    <div class="container_3">
        <div class="thanh_menu">
            <p><a style="color:white" href=""><b>Áo đội tuyển quốc gia</b></a></p>
            <ul>
                <li><a href="">Áo đội tuyển Châu Á</a></li>
                <li><a href="">Áo đội tuyển Châu Phi</a></li>
                <li><a href="">Áo đội tuyển Châu Mỹ</a></li>
                <li><a href="">Áo đội tuyển Châu Á</a></li>
            </ul>
        </div>

        <!-- sản phẩm -->
        <div class="content">

            <!-- sản phẩm 1 -->
            <div class="sanpham">
                <a href=""><img class="img_sanpham" src="image/CLBAnh.png" alt=""></a> <br>
                <a href="" title="Áo bóng đá tuyển Anh trắng World Cup sân nhà 2022-2023" class="main_topic" >Áo bóng đá tuyển Anh trắng World Cup sân nhà 2022-2023</a>
                <span class="item_span"><b>80.000đ</b></span>
                <span>(Hàng thun lạnh)</span> <br>
                <span class="item_span"><b>120.000đ</b></span>
                <span>(Hàng co giãn)</span> <br>
                <span class="item_span"><b>160.000đ</b></span>
                <span>(Hàng Mè Caro)</span> <br>
                <a class="chitiet" href="sanpham1.html">Xem chi tiết <i style="font-size: 10px;" class="fas fa-angle-right"></i></a>
            </div>


            <!-- sản phẩm 2 -->
            <div class="sanpham">
                <a href=""><img class="img_sanpham" src="image/CLBBodaonha.png" alt=""></a> <br>
                <a href="" title="Áo bóng đá tuyển Bồ Đào Nha World Cup sân nhà 2022-2023" class="main_topic">Áo bóng đá tuyển Bồ Đào Nha World Cup sân nhà 2022-2023</a>
                <span class="item_span"><b>80.000đ</b></span>
                <span>(Hàng thun lạnh)</span> <br>
                <span class="item_span"><b>120.000đ</b></span>
                <span>(Hàng co giãn)</span> <br>
                <span class="item_span"><b>160.000đ</b></span>
                <span>(Hàng Mè Caro)</span> <br>
                <a class="chitiet" href="">Xem chi tiết <i style="font-size: 10px;" class="fas fa-angle-right"></i></a>
            </div>

            <!-- sản phẩm 3 -->
            <div class="sanpham">
                <a href=""><img class="img_sanpham" src="image/CLBPhap2022.png" alt=""></a> <br>
                <a href="" title="Áo bóng đá tuyển Pháp World Cup sân nhà 2022-2023" class="main_topic">Áo bóng đá tuyển Pháp World Cup sân nhà 2022-2023</a>
                <span class="item_span"><b>80.000đ</b></span>
                <span>(Hàng thun lạnh)</span> <br>
                <span class="item_span"><b>120.000đ</b></span>
                <span>(Hàng co giãn)</span> <br>
                <span class="item_span"><b>160.000đ</b></span>
                <span>(Hàng Mè Caro)</span> <br>
                <a class="chitiet" href="">Xem chi tiết <i style="font-size: 10px;" class="fas fa-angle-right"></i></a>
            </div>

            <!-- sản phẩm 4 -->
            <div class="sanpham">
                <a href=""><img class="img_sanpham" src="image/CLBPau.png" alt=""></a> <br>
                <a href="" title="Áo bóng đá CLB PAU FC xanh đen 2022-2023" class="main_topic">Áo bóng đá CLB PAU FC xanh đen 2022-2023</a>
                <span class="item_span"><b>80.000đ</b></span>
                <span>(Hàng thun lạnh)</span> <br>
                <span class="item_span"><b>120.000đ</b></span>
                <span>(Hàng co giãn)</span> <br>
                <span class="item_span"><b>160.000đ</b></span>
                <span>(Hàng Mè Caro)</span> <br>
                <a class="chitiet" href="">Xem chi tiết <i style="font-size: 10px;" class="fas fa-angle-right"></i></a>
            </div>

            <!-- sản phẩm 5 -->
            <div class="sanpham">
                <a href=""><img class="img_sanpham" src="image/CLBPhap.png" alt=""></a> <br>
                <a href="" title="Áo bóng đá tuyển Pháp World Cup sân nhà 2022-2023" class="main_topic">Áo bóng đá tuyển Pháp World Cup sân nhà 2022-2023</a>
                <span class="item_span"><b>80.000đ</b></span>
                <span>(Hàng thun lạnh)</span> <br>
                <span class="item_span"><b>120.000đ</b></span>
                <span>(Hàng co giãn)</span> <br>
                <span class="item_span"><b>160.000đ</b></span>
                <span>(Hàng Mè Caro)</span> <br>
                <a class="chitiet" href="">Xem chi tiết <i style="font-size: 10px;" class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>


    <!-- them xóa sửa -->
    <div class="add-delete-update">
        <h1>Quản lý danh sách sản phẩm </h1>
        <button>
            <a href="themsanpham.php">Thêm sản phẩm</a>
        </button>
        <table id="productList">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Gía sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
            <?php 
                while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $row["masp"] ?></td>
                <td><?= $row["tensp"] ?></td>
                <td><?= $row["gia"] ?>&nbsp; VNĐ</td>
                <td><img style="width: 200px;height:200px" src='./images/<?= $row["imgURL"] ?>' alt=""></td>
                <td><a href="suasanpham.php?id=<?= $row['masp']?>">Sửa</a>
                    <a  onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>">xóa</a>  
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
    

    <!-- Table -->
    <table align="center" border="1" cellpadding="5" cellspacing="0" style="width:100%; max-width:1200px; margin:20px 100px">
        <tbody>
            <tr>
                <td colspan="3" style="background-color:#0099ff"><span style="color:#ffffff"><span style="font-size:18px"><strong>Hà Nội (10)</strong></span></span></td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                <div style="text-align:justify"><strong>Showroom 2</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 139 , Phan B&aacute; V&agrave;nh ( K3 cũ ) , Cầu Diễn , Từ Li&ecirc;m, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0943 039 054</strong></li>
                </ul>
                </td>
                <td>
                <div style="text-align:justify"><strong>Showroom 3</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 21, Đường G, ĐH N&ocirc;ng nghiệp, Gia L&acirc;m, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0989 248 835</strong></li>
                </ul>
                </td>
                <td>
                <div style="text-align:justify"><strong>Showroom 4</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Đối diện số 48 Đường An H&ograve;a , Đối diện HV An Ninh, H&agrave; Đ&ocirc;ng, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0902 125 389</strong></li>
                </ul>
                </td>
            </tr>
            <tr>
                <td>
                <div style="text-align:justify"><strong>Showroom 5</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 28, Đường Khương Thượng ( Cạnh ĐH Thủy Lợi), Đống Đa, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0902 125 389</strong></li>
                </ul>
                </td>
                <td style="vertical-align:top">
                <div style="text-align:justify"><strong>Showroom 6</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 53, Đường Cầu Giấy, Cầu Giấy, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0989 248 835</strong></li>
                </ul>
                </td>
                <td>
                <div style="text-align:justify"><strong>Showroom 7</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 67, Đường Trần Đại Nghĩa, ĐH B&aacute;ch Khoa HN, Hai B&agrave; Trưng, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0943 039 054</strong></li>
                </ul>
                </td>
            </tr>
            <tr>
                <td>
                <div style="text-align:justify"><strong>Showroom 8</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 44, Trần Đại Nghĩa, Hai B&agrave; Trưng , H&agrave; Nội ( cạnh ng&atilde; tư L&ecirc; Thanh Nghị - Trần Đại Nghĩa)</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0989248835</strong></li>
                </ul>
                </td>
                <td style="vertical-align:top">
                <div style="text-align:justify"><strong>Showroom 18</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 31, Mai Dịch, Cầu Giấy, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0943039054</strong></li>
                </ul>
                </td>
                <td style="vertical-align:top">
                <div style="text-align:justify"><strong>Showroom 19</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 31, Nguyễn Sơn, Long Bi&ecirc;n, H&agrave; Nội</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0943039054</strong></li>
                </ul>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                <div style="text-align:justify"><strong>Showroom 21</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 107, Ch&ugrave;a L&aacute;ng, Đống Đa , H&agrave; Nội ( Cạnh ĐH Ngoại Thương )</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0902125389</strong></li>
                </ul>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="background-color:#0099ff"><span style="color:#ffffff"><span style="font-size:18px"><strong>TP. H&ocirc;̀ Chí Minh (3)</strong></span></span></td>
            </tr>
            <tr>
                <td style="vertical-align:top">
                <div style="text-align:justify"><strong>Showroom 11</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 54, Bắc Hải, Phường 6, Quận T&acirc;n B&igrave;nh , TP Hồ Ch&iacute; Minh</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0902 125 389</strong></li>
                </ul>
                </td>
                <td>
                <div style="text-align:justify"><strong>Showroom 12</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 441/62 , Điện Bi&ecirc;n Phủ, P 25, Quận B&igrave;nh Thạnh , Tp Hồ Ch&iacute; Minh</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0902125389</strong></li>
                </ul>
                </td>
                <td>
                <div style="text-align:justify"><strong>Showroom 20</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 500, Phan Văn Trị, Phường 7, Quận G&ograve; Vấp, Th&agrave;nh Phố Hồ Ch&iacute; Minh</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>0902125389</strong></li>
                </ul>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="background-color:#0099ff"><span style="color:#ffffff"><span style="font-size:18px"><strong>Hải Phòng (1)</strong></span></span></td>
            </tr>
            <tr>
                <td colspan="3">
                <div style="text-align:justify"><strong>Showroom 16</strong></div>
    
                <ul>
                    <li style="text-align: justify;">Số 63, Đổng Quốc B&igrave;nh, Quận Ng&ocirc; Quyền, Th&agrave;nh Phố Hải Ph&ograve;ng</li>
                    <li style="text-align: justify;">Hotline:&nbsp;<strong>090 212 53 89</strong></li>
                </ul>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>

