<table align="center" style="width: 600px;" cellpadding="0" cellspacing="0" bgcolor="#ffd800">
        <!-- header -->
        <tr>
            <td>
                <a href="#" target="_blank" style="text-decoration: none;">
                    <img src="<?php echo $message->embed($banner); ?>" width="600" style="width: 600px;">
                </a>
            </td>
        </tr>
        <!-- header -->
        <!-- content -->
        <tr>
            <td>
                <table style="width: 100%;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="width: 100%;">
                            <p style="text-align: center;padding: 10px; margin: 0;text-transform: uppercase;font-family: K2D,sans-serif;font-size: 18px;color: #000;line-height: 1.3; font-weight: bold;">
                                Thông báo từ A-event
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">
                            <table style="width: 100%;" cellpadding="0" cellspacing="0">
                                <tr bgcolor="#2aa5b4">
                                    <td style="width: 20%">
                                        <p style="text-align: center;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Đơn vé
                                        </p>
                                    </td>
                                    <td style="width: 80%">
                                        <p style="text-align: left;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Kiểm tra đầy đủ thông tin sau khi đặt vé để tránh khiếu nại về sau
                                        </p>
                                    </td>
                                </tr>
                                <tr bgcolor="#159dad">
                                    <td style="width: 20%">
                                        <p style="text-align: center;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Lịch diễn
                                        </p>
                                    </td>
                                    <td style="width: 80%">
                                        <p style="text-align: left;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Cập nhật chính xác ngày giờ diễn ra sự kiện
                                        </p>
                                    </td>
                                </tr>
                                <tr bgcolor="#2aa5b4">
                                    <td style="width: 20%">
                                        <p style="text-align: center;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Vị trí
                                        </p>
                                    </td>
                                    <td style="width: 80%">
                                        <p style="text-align: left;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Xem thông tin sau khi đặt vé hoặc quý khách đã tham khảo từ trước
                                        </p>
                                    </td>
                                </tr>
                                <tr bgcolor="#159dad">
                                    <td style="width: 20%">
                                        <p style="text-align: center;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Chỗ Ngồi
                                        </p>
                                    </td>
                                    <td style="width: 80%">
                                        <p style="text-align: left;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Nhân viên kiểm vé và hướng dẫn đến chỗ ngồi phù hợp
                                        </p>
                                    </td>
                                </tr>
                                <tr bgcolor="#2aa5b4">
                                    <td style="width: 20%">
                                        <p style="text-align: center;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Kiểm vé
                                        </p>
                                    </td>
                                    <td style="width: 80%">
                                        <p style="text-align: left;padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 14px;color: #fff;line-height: 1.3; font-weight: normal;">
                                            Vui lòng check mã vạch QR để xem chi tiết vé
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="width: 20%;">
                            <table style="width: 100%;" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding: 10px;">
                                        <a href="http://localhost/A-event/event/public/pages/index" target="_blank">
                                            <img src="https://chart.googleapis.com/chart?cht=qr&chl=Tên sự kiện: <?php echo $ten_su_kien;?>%0ATên khách hàng: <?php echo $ten_khach_hang;?>%0ASố lượng vé thường: <?php echo $so_ve_thuong;?>%0ATổng tiền vé thường: <?php echo number_format($tong_tien_thuong)?>%0ASố lượng vé vip: <?php echo $so_ve_vip;?>%0ATổng tiền vé vip: <?php echo number_format($tong_tien_vip)?>%0ATổng tiền khách trả: <?php echo number_format($tong_tien)?>&chs=150x150&chld=L|0">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- content -->
        <!-- footer -->
         <tr>
             <td>
                 <table style="width: 100%;" cellpadding="0" cellspacing="0" bgcolor="#323637">
                    <tr>
                        <td align="center" style="padding-top: 10px;">
                            <img src="<?php echo $message->embed($logo); ?>" width="60" style="width: 60px; height: 60px;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="padding: 10px; margin: 0;font-family: K2D,sans-serif;font-size: 12px;line-height: 1.3; font-weight: normal;color: #fff;text-align: center;">
                                Cảm ơn quý khách đã sử dụng dịch vụ của chúng tôi !
                            </p>
                        </td>
                    </tr>
                 </table>
             </td>
         </tr>
        <!-- footer -->
    </table>
