<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Navbar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <a class="logo" href="/"></a>

        <ul class="nav__links">
            <li><a href="#">ข้อมูล</a></li>
            <li><a href="#">น้องสุดโปรด</a></li>
            <li><a href="#">เข้าสู่ระบบ</a></li>
        </ul>

        <a class="cta" href="#">ค้นหาน้องๆไซด์ไลน์</a>
        <p class="menu cta">Menu</p>
    </header>
    <div id="mobile__menu" class="overlay">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="#">ข้อมูล</a>
            <a href="#">น้องสุดโปรด</a>
            <a href="#">เข้าสู่ระบบ</a>
        </div>
    </div>
    <div class="container" style="padding: 10px">
        <h2>ข้อมูลและวิธีการติดต่อนัดน้องรับงาน</h2>
        <hr>
        <p>
        <h3><b>วิธีการนัดน้องๆ</b></h3>
        </p>
        <p>
        <ul>
            <b>
                1. ค้นหาน้องในเว็บ<p>
                    2. หากสนใจคนไหน ให้แอดไลน์ที่น้องเขียนไว้ในโพสต์ แล้วติดต่อขอนัด
                    หรืออาจขอข้อมูลเพิ่มเติมจากไลน์ของน้องได้
                <p>
                    3. น้องจะให้ข้อมูลว่า สะดวกที่ไหน เวลากี่โมง
                <p>
                    4. หลังตกลงกันแล้วให้ไปเจอน้องตามที่นัด
            </b>
        </ul>
        </p>
        <p>
            <hr>
        <h3><b>คำเตือนในการนัดน้องๆ</b></h3>
        <ul>
            <li><b><u>กรุณาอย่าโอนให้น้องที่ไม่มีป้ายเขียว!!</u><b> น้องๆจะมีทริคหลายๆอย่างในการหลอกโอนก่อน
                        วิธีการตัดปัญหาทั้งหมดคือไม่โอนไม่ว่ากรณีใดๆทั้งสิ้น
                        ในตลาดนี้จะเป็นที่รู้กันดีว่าน้องที่รับงานจริงจะรับด้วยเงินสดเท่านั้น</li>
            <li>ช่วยกันเป็นหูเป็นตา แอดมินพยายามคัดน้องๆที่โกงอย่างเต็มที่แล้วแต่ก็พลาดได้เช่นกัน หากพบน้องสลับคน
                หรือบังคับโอนโปรดแจ้งแอดมิน</li>
            <li>หากเห็นน้องแล้วไม่อยากขึ้นงานด้วย กรุณาอย่าจ่ายแล้วเดินออกทันที หากน้องสลับคนจะถือว่าโกง โปรดแจ้งแอดมิน
            </li>
            <li>หากโอนแล้วโดนโกง แอดมินจะไม่รับผิดชอบใดๆทั้งสิ้น เราจะทำหน้าที่ปิดโพสต์ของผู้โกงได้เท่านั้น</li>
        </ul>
        </p>
        <p>
            <hr>
        <h3><b>คำถามที่พบบ่อย</b></h3>
        <ul>
            1. "มีน้องแถว ... ไหมครับ"<p>
                โปรดกดค้นหาจากโซนในเว็บได้เลย แอดมินไม่มีส่วนเกี่ยวข้องกับงานของน้องๆ

            <p>2. "น้องตรงปกไหม"
            <p>
                ไม่สามารถตอบได้ น้องส่วนใหญ่จะใช้แอพแต่งเป็นปกติ ฉะนั้นขึ้นอยู่ที่คนมอง
                หากไปถึงแล้วไม่พอใจสามารถออกมาได้
                หากอยากเพิ่มความมั่นใจ ให้ไปหาน้องที่มีป้ายเขียวยืนยันเท่านั้น

            <p>3. "ป่ายสีเขียวยืนยันรูปภาพจริง คืออะไร"
            <p>
                น้องที่ผ่านการยืนยันตนจากแอดมิน อาจผ่านการวีดีโอคอล ส่งบัตรประชาชน
                หรือส่งรูปตัวเองแบบเขียนป้ายที่เราออกแบบมา
                แอดมินจะให้ป้ายต่อเมื่อรูปที่น้องลงเป็นคนเดียวกันกับรูปที่ยืนยัน และไม่ดรอปเกินไป

        </ul>
        </p>
        <hr>
    </div>

    <footer class="text-muted">
        <div class="container" >
          <p class="float-right">
            <a href="#" style=" text-decoration:none; color: black;"><i class="fas fa-arrow-up"></i> Back to top</a>
          </p>

          <b>
          <p><center>กรุณาอย่าโอนให้น้องที่ไม่ได้ยืนยันตัวตนกับทางเว็บไซต์!</center></p>
            <p><a href="{{ route('howtocontact') }}" style=" text-decoration:none; color: black;"><center><i class="far fa-question-circle"></i> การนัดน้องๆไซด์ไลน์</center></a></p>
            <p><a href="" style=" text-decoration:none; color: black;"><center><u>โปรดสมัครบัญชี</u></a> คุณจะได้บันทึกรายชื่อน้องๆที่คุณสนใจไว้คัดเลือกภายหลัง</center></p></b>
        </div>
      </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/mobile.js') }}"></script>

</body>

</html>
