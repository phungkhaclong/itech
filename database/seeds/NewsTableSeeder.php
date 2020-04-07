<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // News::create([
    //     'title' => 'Cách kiểm tra tốc độ mạng Internet không cần phần mềm',
    //     'slug' => 'cach-kiem-tra-toc-do-mang-internet-khong-can-phan-mem',
    //     'description' => 'Cách kiểm tra tốc độ mạng Internet bằng SpeedTest sẽ giúp đo tốc độ mạng VNPT, FPT, Viettel,... mà bạn đang sử dụng',
    //     'image' => 'uploads/ov2michA4OFPaFXzXlSMre5Ejl6TfIdpRnL9O4SJ.png',
    //     'content' => '',
    //     'type' => 'tin-cong-nghe'
    // ]);

    public function run()
    {
        News::create([
            'title' => 'Cách kiểm tra tốc độ mạng Internet không cần phần mềm',
            'slug' => 'cach-kiem-tra-toc-do-mang-internet-khong-can-phan-mem',
            'description' => 'Cách kiểm tra tốc độ mạng Internet bằng SpeedTest sẽ giúp đo tốc độ mạng VNPT, FPT, Viettel,... mà bạn đang sử dụng',
            'image' => 'uploads/ov2michA4OFPaFXzXlSMre5Ejl6TfIdpRnL9O4SJ.png',
            'content' => '<p>C&aacute;ch&nbsp;kiểm tra tốc độ mạng Internet&nbsp;bằng&nbsp;<strong>SpeedTest&nbsp;</strong>sẽ gi&uacute;p&nbsp;đo tốc độ mạng&nbsp;<strong>VNPT, FPT, Viettel</strong>,... m&agrave; bạn đang sử dụng. C&ocirc;ng cụ&nbsp;test mạng&nbsp;n&agrave;y ho&agrave;n to&agrave;n miễn ph&iacute; v&agrave; cho kết quả kh&aacute; ch&iacute;nh x&aacute;c. Bạn c&oacute; thể &aacute;p dụng để test tốc độ mạng&nbsp;<strong>FPT, VNPT, Viettel, WiFi&nbsp;</strong>hoặc thậm ch&iacute; cả&nbsp;kiểm tra tốc độ mạng điện thoại&nbsp;như&nbsp;<strong>3G, 4G</strong>&nbsp;để biết xem tốc độ m&agrave; nh&agrave; cung cấp mạng đ&atilde; cam kết c&oacute; đ&uacute;ng với tốc độ thực tế khi bạn sử dụng hay kh&ocirc;ng.&nbsp;</p>

            <h3><strong>Để kiểm tra tốc độ mạng Internet đang d&ugrave;ng, bạn l&agrave;m như sau:</strong></h3>
            
            <p><strong>Bước 1:&nbsp;</strong>Truy cập v&agrave;o trang&nbsp;http://www.speedtest.net/</p>
            
            <p>Đầu ti&ecirc;n, bạn truy cập v&agrave;o trang chủ của chương tr&igrave;nh&nbsp;<a href="http://i-tech.edu.vn/cach-kiem-tra-toc-do-mang-internet-khong-can-phan-mem.htm">kiểm tra tốc độ Internet</a>. Sau khi truy cập v&agrave;o website của&nbsp;SpeedTest, bạn sẽ thấy giao diện như sau:</p>
            
            <p><img alt="" src="/storage/uploads/news/images/images/tin-tuc/2_1.png" style="height:540px; width:960px" /></p>
            
            <p>Trong đ&oacute;, điểm s&aacute;ng nổi bật ch&iacute;nh l&agrave; vị tr&iacute; đặt server m&agrave;&nbsp;SpeedTest&nbsp;khuy&ecirc;n bạn n&ecirc;n d&ugrave;ng để thử nghiệm tốc độ kết nối Internet từ m&aacute;y t&iacute;nh của bạn đến đ&oacute;. Dựa v&agrave;o đ&oacute; để biết được tốc độ gửi v&agrave; nhận dữ liệu tr&ecirc;n đường truyền Internet của bạn l&agrave; bao nhi&ecirc;u.</p>
            
            <p><strong>Bước 2:&nbsp;</strong>Bấm v&agrave;o n&uacute;t&nbsp;<strong>Go</strong>.</p>
            
            <p>Sau khi nhấn&nbsp;<strong>Go</strong>, một đồng hồ tốc độ sẽ xuất hiện v&agrave; n&oacute; sẽ bắt đầu hiển thị tốc độ download dữ liệu từ m&aacute;y t&iacute;nh đến server đ&atilde; chọn v&agrave; tốc độ gửi dữ liệu theo chiều ngược lại (đ&acirc;y ch&iacute;nh l&agrave; qu&aacute; tr&igrave;nh&nbsp;upload&nbsp;v&agrave;&nbsp;download). Sẽ mất một v&agrave;i ph&uacute;t hoặc một v&agrave;i gi&acirc;y t&ugrave;y thuộc v&agrave;o tốc độ đường truyền của bạn.</p>
            
            <p>&nbsp;</p>
            
            <p><strong>Bước 3:&nbsp;</strong>Xem kết quả kiểm tra tốc độ mạng</p>
            
            <p>Khi qu&aacute; tr&igrave;nh kiểm tra tốc độ mạng ho&agrave;n th&agrave;nh, bạn sẽ thấy một giao diện như dưới đ&acirc;y với bảng thống k&ecirc; tốc độ truyền (<strong>upload</strong>) v&agrave; nhận (<strong>download</strong>) dữ liệu từ m&aacute;y t&iacute;nh đến server đ&atilde; chọn tr&ecirc;n đường truyền của bạn.</p>
            
            <p><img alt="" src="/storage/uploads/news/images/images/tin-tuc/2_3.png" style="height:540px; width:960px" /></p>
            
            <p><strong>Lưu &yacute;:&nbsp;</strong>Trong qu&aacute; tr&igrave;nh đo tốc độ kết nối, bạn phải đảm bảo rằng kh&ocirc;ng c&oacute; chương tr&igrave;nh n&agrave;o đang tiến h&agrave;nh download hoặc m&aacute;y t&iacute;nh n&agrave;o trong mạng nội bộ (nếu c&oacute;) sử dụng đường kết nối Internet để đảm bảo kết quả đo l&agrave; ch&iacute;nh x&aacute;c nhất. Ngo&agrave;i ra, bạn cũng n&ecirc;n tiến h&agrave;nh thử nghiệm nhiều lần tr&ecirc;n nhiều server ở những địa điểm kh&aacute;c nhau để c&oacute; được kết quả ch&iacute;nh x&aacute;c nhất.</p>',
            'type' => 'tin-cong-nghe'
        ]);
        News::create([
        'title' => '4 Mẹo giúp bạn kiểm soát thông tin khi sử dụng ứng dụng liên kết với Facebook',
        'slug' => '4-meo-giup-ban-kiem-soat-thong-tin-khi-su-dung-ung-dung-lien-ket-voi-facebook',
        'description' => 'Sau sự việc đình đám Facebook lộ thông tin cá nhân của người dùng, mỗi cá nhân chúng ta cần phải bảo vệ sự riêng tư của mình. Bài viết chia sẻ một số mẹo giúp người dùng có thể kiểm soát được thông tin của mình khi liên kết tài khoản Facebook với các ứng dụng khác, từ đó bảo vệ sự riêng tư của mình',
        'image' => 'uploads/2ud69bOiwJ1D2LlVRlW7QkszwRQUbcWpPAbBExkr.png',
        'content' => '<p>Đại diện truyền th&ocirc;ng của Facebook đ&atilde; chia sẻ, t&iacute;nh năng kết nối c&aacute;c ứng dụng, tr&ograve; chơi hoặc trang web với t&agrave;i khoản Facebook sẽ r&uacute;t gọn thời gian trong qu&aacute; tr&igrave;nh đăng k&yacute; v&agrave; tiếp tục sử dụng ứng dụng hoặc tiếp tục sử dụng trang web m&agrave; kh&ocirc;ng bị gi&aacute;n đoạn.<br />
        &nbsp; &nbsp;B&ecirc;n cạnh đ&oacute;, tất cả c&aacute;c hoạt động li&ecirc;n quan sẽ được đồng bộ h&oacute;a v&agrave; c&oacute; thể gi&uacute;p người d&ugrave;ng lu&ocirc;n được cập nhật v&agrave; dễ d&agrave;ng t&igrave;m kiếm th&ocirc;ng tin tại c&ugrave;ng một nơi. V&iacute; dụ, ứng dụng lịch của bạn tự động cập nhật v&agrave; hiển thị ng&agrave;y sinh nhật của những người bạn y&ecirc;u qu&yacute; hoặc nhắc nhở bạn về c&aacute;c sự kiện bạn quan t&acirc;m tr&ecirc;n Facebook.<br />
        &nbsp; &nbsp;Tuy nhi&ecirc;n, đại diện truyền th&ocirc;ng của Facebook cũng thừa nhận điều n&agrave;y c&oacute; thể cho ph&eacute;p những ứng dụng đ&oacute; truy cập v&agrave;o c&aacute;c th&ocirc;ng tin kh&ocirc;ng cần thiết hoặc qu&aacute; ri&ecirc;ng tư của người d&ugrave;ng. Nhấn mạnh điều quan trọng l&agrave; người d&ugrave;ng phải kiểm so&aacute;t được sự cấp quyền cho Facebook hoặc bất kỳ nền tảng ứng dụng dữ liệu kh&aacute;c.<br />
        &nbsp; &nbsp;Gợi &yacute; một số mẹo để người d&ugrave;ng c&oacute; thể quyền kiểm so&aacute;t th&ocirc;ng tin khi li&ecirc;n kết t&agrave;i khoản Facebook với c&aacute;c ứng dụng, trang web hoặc game, từ đ&oacute; bảo vệ sự ri&ecirc;ng tư của m&igrave;nh:<br />
        <br />
        <strong>1. Đọc c&aacute;c ch&iacute;nh s&aacute;ch về quyền ri&ecirc;ng tư</strong><br />
        <br />
        &nbsp; &nbsp;Hầu hết c&aacute;c ứng dụng đều ph&aacute;t triển c&aacute;c điều khoản v&agrave; ch&iacute;nh s&aacute;ch bảo mật nhằm l&agrave;m r&otilde; cho người sử dụng nền tảng hoạt động như thế n&agrave;o, dữ liệu n&agrave;o của họ sẽ được thu thập v&agrave; được sử dụng như thế n&agrave;o. Từ đ&oacute;, người d&ugrave;ng sẽ chủ động bảo vệ dữ liệu của m&igrave;nh.</p>
        
        <p><img alt="" src="/storage/uploads/news/images/files/1_1.png" style="height:540px; width:979px" /><br />
        Tuy nhi&ecirc;n, c&oacute; rất nhiều người sử dụng kh&ocirc;ng bao giờ đọc c&aacute;c điều khoản dịch vụ bao gồm c&aacute;c ch&iacute;nh s&aacute;ch bảo mật khi đăng k&yacute; một mạng x&atilde; hội. Một số l&yacute; do đưa ra như kh&ocirc;ng thể t&igrave;m thấy c&aacute;c điều khoản, v&agrave; một số th&igrave; thấy c&aacute;c điều khoản qu&aacute; d&agrave;i v&agrave; phức tạp kh&oacute; để hiểu được.<br />
        &nbsp; &ldquo;Gần đ&acirc;y, Facebook triển khai một số cập nhật nhằm khiến cho c&aacute;c điều khoản v&agrave; ch&iacute;nh s&aacute;ch dữ liệu r&otilde; r&agrave;ng hơn, thể hiện r&otilde; hơn những dữ liệu Facebook thu thập được cũng như c&aacute;ch&nbsp; Facebook sử dụng những dữ liệu đ&oacute; tr&ecirc;n Facebook, Instagram, Messenger v&agrave; c&aacute;c sản phẩm kh&aacute;c. C&aacute;c điều khoản dịch vụ được hiển thị trực quan v&agrave; ph&aacute;t triển bằng nhiều ng&ocirc;n ngữ cho ph&eacute;p tất cả người d&ugrave;ng với mọi tr&igrave;nh độ kh&aacute;c nhau đọc v&agrave; hiểu được&rdquo;, đại diện truyền th&ocirc;ng của Facebook cho hay.<br />
        <br />
        <strong>2. Sử dụng th&agrave;nh thạo c&aacute;c c&agrave;i đặt v&agrave; c&ocirc;ng cụ bảo mật</strong><br />
        &nbsp;<br />
        &nbsp; &nbsp;Mọi nền tảng ứng dụng dữ liệu bao gồm cả Facebook đều trang bị cho người d&ugrave;ng những c&ocirc;ng cụ cần thiết để họ c&oacute; thể chủ động bảo vệ quyền ri&ecirc;ng tư của m&igrave;nh. V&iacute; dụ, người d&ugrave;ng Facebook được cung cấp c&aacute;c c&ocirc;ng cụ bảo mật để bảo vệ t&agrave;i khoản, kiểm so&aacute;t những quảng c&aacute;o họ muốn thấy, hay kiểm so&aacute;t những b&agrave;i đăng v&agrave; th&ocirc;ng tin của họ người kh&aacute;c c&oacute; thể xem...<br />
        &nbsp; &nbsp;Do đ&oacute;, trước khi bắt đầu sử dụng, người d&ugrave;ng n&ecirc;n chắc chắn rằng m&igrave;nh nắm r&otilde; c&aacute;ch sử dụng c&aacute;c c&ocirc;ng cụ v&agrave; c&agrave;i đặt được cung cấp. Theo đại diện truyền th&ocirc;ng của Facebook, mới đ&acirc;y, mạng x&atilde; hội n&agrave;y đ&atilde; c&oacute; một số cập nhật gi&uacute;p cho việc t&igrave;m c&aacute;c c&ocirc;ng cụ bảo mật dễ d&agrave;ng hơn.</p>
        
        <p><img alt="" src="/storage/uploads/news/images/ilfes/1_2.png" style="height:540px; width:979px" /></p>
        
        <p>Cụ thể, to&agrave;n bộ danh mục c&agrave;i đặt tr&ecirc;n thiết bị di động đ&atilde; được Facebook thiết kế lại nhằm gi&uacute;p t&igrave;m kiếm dễ d&agrave;ng hơn. Thay v&igrave; c&aacute;c thiết lập trải rộng tr&ecirc;n gần 20 trang kh&aacute;c nhau, giờ đ&acirc;y ch&uacute;ng c&oacute; thể được t&igrave;m thấy trong một nơi duy nhất. B&ecirc;n cạnh đ&oacute;, c&aacute;c ph&iacute;m tắt bảo mật mới l&agrave; một danh mục liệt k&ecirc; nơi người d&ugrave;ng c&oacute; thể kiểm so&aacute;t dữ liệu của họ chỉ qua v&agrave;i thao t&aacute;c, c&ugrave;ng với c&aacute;ch giải th&iacute;ch r&otilde; r&agrave;ng hơn về c&aacute;ch c&aacute;c c&ocirc;ng cụ kiểm so&aacute;t của Facebook hoạt động.<br />
        <strong>3. Kiểm tra danh s&aacute;ch y&ecirc;u cầu truy cập dữ liệu</strong><br />
        &nbsp; &nbsp;Theo Facebook, người d&ugrave;ng cũng c&oacute; tr&aacute;ch nhiệm bảo vệ dữ liệu v&agrave; mọi người đều c&oacute; thể kiểm so&aacute;t dữ liệu của m&igrave;nh. Đại diện mạng x&atilde; hội n&agrave;y khuyến nghị, trước khi nhấn n&uacute;t &quot;đồng &yacute;&quot; cho ph&eacute;p kết nối t&agrave;i khoản Facebook với bất kỳ ứng dụng, trang web hay tr&ograve; chơi n&agrave;o đ&oacute;, người d&ugrave;ng n&ecirc;n d&agrave;nh thời gian để kiểm tra th&ocirc;ng tin m&agrave; ứng dụng hoặc tr&ograve; chơi đ&oacute; y&ecirc;u cầu truy cập.<a href="http://maylocnuocviet.com/may-loc-nuoc/May-loc-nuoc-Kangaroo/">m&aacute;y lọc nước</a>&nbsp;gi&aacute; rẻ,&nbsp;<a href="http://ketsatgiadinh.vn/">k&eacute;t sắt</a>&nbsp;ch&iacute;nh h&atilde;ng<br />
        &nbsp; &nbsp; Trường hợp cho rằng ứng dụng y&ecirc;u cầu truy cập dữ liệu kh&ocirc;ng cần thiết (v&iacute; dụ: ứng dụng lịch kh&ocirc;ng c&ograve;n c&oacute; thể truy cập danh s&aacute;ch kh&aacute;ch hoặc b&agrave;i đăng tr&ecirc;n tường sự kiện Facebook), người d&ugrave;ng c&oacute; thể chọn hủy y&ecirc;u cầu đ&oacute;. Trong trường hợp ứng dụng hoặc tr&ograve; chơi vẫn tiếp tục y&ecirc;u cầu th&ocirc;ng tin của người d&ugrave;ng v&agrave; kh&ocirc;ng cho ph&eacute;p hủy y&ecirc;u cầu, người d&ugrave;ng c&oacute; thể b&aacute;o c&aacute;o với Facebook trong li&ecirc;n kết&nbsp;<a href="https://www.facebook.com/help/contact/147281848779467#_=_">tại đ&acirc;y.</a><br />
        <strong>Thường xuy&ecirc;n kiểm tra, dọn dẹp c&aacute;c ứng dụng kết nối với Facebook</strong><br />
        &nbsp; &nbsp; Facebook cũng khuyến nghị người d&ugrave;ng n&ecirc;n thường xuy&ecirc;n kiểm tra xem ứng dụng n&agrave;o đang được kết nối với t&agrave;i khoản của m&igrave;nh bằng c&aacute;ch v&agrave;o trang c&agrave;i đặt v&agrave; nhấp mục &ldquo;Ứng dụng&rdquo;. Th&ocirc;ng tin từ đại diện truyền th&ocirc;ng của Facebook cũng cho hay, b&agrave; Runa Sandvik - Gi&aacute;m đốc An ninh th&ocirc;ng tin của tờ New York Time đ&atilde; đưa ra đề xuất x&oacute;a c&aacute;c ứng dụng m&agrave; người d&ugrave;ng kh&ocirc;ng nhận ra hoặc kh&ocirc;ng sử dụng trong 6 th&aacute;ng qua.Mua&nbsp;<a href="http://maylocnuocviet.com/may-loc-nuoc/May-loc-nuoc-Kangaroo/">m&aacute;y lọc nước</a>&nbsp;ở đ&acirc;u?</p>
        
        <p><img alt="" src="/storage/uploads/news/images/files/1_3.png" style="height:745px; width:1280px" /></p>
        
        <p>Một khi bạn đ&atilde; thu hẹp danh s&aacute;ch, h&atilde;y đọc kỹ những ứng dụng c&ograve;n lại v&agrave; xem x&eacute;t c&aacute;ch họ sử dụng dữ liệu c&aacute; nh&acirc;n của bạn. Nếu c&aacute;c phương ph&aacute;p chia sẻ dữ liệu của họ c&oacute; vẻ khiến bạn cảm thất bất tiện, h&atilde;y x&oacute;a ứng dụng đ&oacute;. H&atilde;y cố gắng thực hiện điều n&agrave;y mỗi năm một lần, v&igrave; số lượng c&aacute;c ứng dụng được kết nối với t&agrave;i khoản của bạn c&oacute; thể tăng theo thời gian&rdquo;, Facebook khuyến nghị.</p>',
        'type' => 'tin-cong-nghe'
        ]);

        News::create([
            'title' => 'Google Authenticator - Ứng dụng bảo mật 2 lớp miễn phí cực kỳ tuyệt vời',
            'slug' => 'google-authenticator-ung-dung-bao-mat-2-lop-mien-phi-cuc-ky-tuyet-voi',
            'description' => 'Google Authenticator là một ứng dụng bảo mật miễn phí giúp bảo vệ tài khoản của bạn không bị đánh cắp mật khẩu. Ứng dụng này cực dễ thiết lập và có thể được sử dụng trong quá trình xác thực hai yếu tố (2FA) được cung cấp trên các dịch vụ phổ biến như Gmail, Facebook, Twitter, Instagram,...',
            'image' => 'uploads/f0gKiZs4K2iyetJEI9kBDTRhzwZoHoCwF2pB9Vmm.png',
            'content' => '<p>Google Authenticator l&agrave; một ứng dụng bảo mật miễn ph&iacute; gi&uacute;p bảo vệ t&agrave;i khoản của bạn kh&ocirc;ng bị đ&aacute;nh cắp mật khẩu. Ứng dụng n&agrave;y cực dễ thiết lập v&agrave; c&oacute; thể được sử dụng trong qu&aacute; tr&igrave;nh x&aacute;c thực hai yếu tố (2FA) được cung cấp tr&ecirc;n c&aacute;c dịch vụ phổ biến như Gmail, Facebook,&nbsp;Twitter, Instagram,...</p>

            <p>M&atilde; x&aacute;c thực 2 yếu tố (tr&ecirc;n iOS v&agrave; Android) sẽ tạo một m&atilde; ngẫu nhi&ecirc;n d&ugrave;ng để x&aacute;c minh danh t&iacute;nh của bạn khi đăng nhập v&agrave;o c&aacute;c dịch vụ trực tuyến kh&aacute;c nhau. M&atilde; n&agrave;y c&oacute; thể được gửi tới điện thoại của bạn th&ocirc;ng qua tin nhắn văn bản bất cứ l&uacute;c n&agrave;o - nhưng&nbsp;Google Authenticator sẽ cung cấp cấp độ bảo mật cao hơn.</p>
            
            <h3><strong>C&aacute;ch thiết lập&nbsp;Google Authenticator</strong></h3>
            
            <p>Tải ứng dụng&nbsp;Google Authenticator từ cửa h&agrave;ng&nbsp;<a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8" target="_blank">App Store</a>&nbsp;tr&ecirc;n iOS hoặc&nbsp;<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&amp;hl=vi" target="_blank">Google Play Store</a>&nbsp;tr&ecirc;n Android ho&agrave;n to&agrave;n miễn ph&iacute;.</p>
            
            <p>Tiếp theo, thiết lập x&aacute;c minh 2 bước tr&ecirc;n t&agrave;i khoản Google. Đăng nhập v&agrave;o t&agrave;i khoản Google của bạn. Trong mục&nbsp;Security and Sign-In, h&atilde;y chọn&nbsp;Two-Step Verification&nbsp;v&agrave; cuộn xuống dưới để chọn&nbsp;Authenticator app.</p>
            
            <p><img alt="" src="/storage/uploads/news/images/images/tin-tuc/3_1.png" style="height:540px; width:960px" /></p>
            
            <p>Chọn thiết bị bạn đang sử dụng: Android hoặc iPhone.</p>
            
            <p><img alt="" src="/storage/uploads/news/images/images/tin-tuc/3_2.png" style="height:540px; width:960px" /></p>
            
            <p>Mở ứng dụng Google Authenticator tr&ecirc;n điện thoại v&agrave; nhấp v&agrave;o dấu cộng ph&iacute;a tr&ecirc;n b&ecirc;n phải m&agrave;n h&igrave;nh.</p>
            
            <p><img alt="" src="/storage/uploads/news/images/images/tin-tuc/3_3.png" style="height:540px; width:960px" /></p>
            
            <p>Ở ph&iacute;a cuối m&agrave;n h&igrave;nh sẽ hiển thị 2 t&ugrave;y chọn&nbsp;Scan barcode&nbsp;v&agrave;&nbsp;Manual entry. Bạn chỉ cần chọn 1 trong 2 t&ugrave;y chọn n&agrave;y để ho&agrave;n tất quy tr&igrave;nh. T&ugrave;y chọn&nbsp;Scan barcode sẽ mất nhiều thời gian để ho&agrave;n tất v&agrave; kh&aacute;c phức tạp n&ecirc;n tốt hơn hết bạn n&ecirc;n sử dụng Manual entry.</p>
            
            <p>Đối với t&ugrave;y chọn&nbsp;Manual entry: Google sẽ gửi m&atilde; 16 chữ số đến địa chỉ email của bạn. Sau đ&oacute;, bạn chỉ cần nhập m&atilde; đ&oacute; để ho&agrave;n tất qu&aacute; tr&igrave;nh x&aacute;c minh l&agrave; xong.</p>
            
            <p><img alt="" src="/storage/uploads/news/images/images/tin-tuc/3_4.png" style="height:540px; width:960px" /></p>
            
            <p>Đảm bảo bạn đ&atilde; k&iacute;ch hoạt t&ugrave;y chọn&nbsp;Time Based&nbsp;để chắc chắn l&agrave; m&atilde; bạn đang nhập ph&ugrave; hợp với m&atilde; mới nhất của Authenticator.</p>
            
            <p>Giờ th&igrave; mỗi khi bạn đăng nhập v&agrave;o t&agrave;i khoản đ&atilde; kết nối với&nbsp;Google Authenticator, t&agrave;i khoản sẽ y&ecirc;u cầu bạn nhập m&atilde; x&aacute;c minh gồm 6 chữ số. Bạn chỉ cần mở ứng dụng&nbsp;Google Authenticator, sau đ&oacute; ứng dụng sẽ tạo m&atilde; mới ngẫu nhi&ecirc;n để bạn nhập.</p>
            
            <p>Lưu &yacute;:&nbsp;Nếu bạn vẫn lu&ocirc;n đăng nhập th&igrave; bạn sẽ kh&ocirc;ng cần phải trải qua quy tr&igrave;nh 2FA nữa.</p>
    
            <p>Bằng c&aacute;ch sử dụng Google Authenticator, t&agrave;i khoản của bạn kh&ocirc;ng chỉ được bảo vệ bằng x&aacute;c thực 2 yếu tố m&agrave; c&ograve;n c&oacute; th&ecirc;m lớp bảo mật của m&atilde; x&aacute;c thực 6 số của Google</p>',
            'type' => 'tin-cong-nghe'
        ]);
    }
}
