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

    <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">

        <a href="" class="navbar-brand px-3"><h3 style="color: white;"><u>Sideline</u></h3></a>

        <div class="collapse navbar-collapse justify-content-end" id="nav">

            <ul class="navbar-nav">
                <li class="nav-item dropdown" data-toggle="dropdown">
                    <a class="nav-link text-light font-weight-bold px-3 " href="#">ข้อมูล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="#">น้องสุดโปรด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="{{ route('signin_sideline') }}">เข้าสู่ระบบ</a>
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <a href="" class="btn btn-warning">ค้นหาน้องสุดโปรด <i class="fas fa-search"></i></a>
            </div>
        </div>

    </nav>
    <div class="container-fluid" style="background-color: #F0F8FF;padding:100px;">
        <div class="marginer">
            <h2>เว็บรวมไซด์ไลน์ ใช้ง่ายที่สุด</h2>
            <a href="" class="btn btn-warning">ลงโพสต์ไซด์ไลน์</a> <a href="" class="btn btn-primary">สมัครบัญชี</a>
            <p>
            <h3>ผู้ใช้เว็บไซต์นี้อายุ 18 ปี ขึ้นไปทุกคน</h2>
        </div>

    </div>
    <hr>
    <div class="container">
        <h2>หาไซด์ไลน์ แบบง่ายๆ</h2>
        <p>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> ฝั่งธน, </span>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> ฝั่งพระนคร, </span>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> เพชรเกษม - พระรามสอง,
            </span>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> จรัญ - ปิ้นเกล้า, </span>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> สุขุมวิท-บางนา, </span>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> รัชดา - ลาดพร้าว, </span>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> จังหวัดใกล้กทม, </span>
            <span style="color:#FF8C00;font-weight:bold"><i class="fas fa-map-marker-alt"></i> จังหวัดสมุทรปราการ
            </span>
        <p>

        <div class="input-group">
            <div class="input-group-prepend">
                <a href="" class="btn btn-secondary"> กรุงเทพ-ใกล้เคียง </a>
            </div>
            &nbsp; <input type="text" class="form-control" placeholder="หาน้องจากชื่อ" aria-label="Username"
                aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        </div>
        <hr>
        <div class="container">
            <span>
                <h2>TOP STAR</h2>
            </span>
            <p>
                <span>
                    <h3>น้องๆไซด์ไลน์ที่น่าสนใจ</h3>
                </span>
            </p>
            <p>
            <div class="form-row">
                <div class="card-deck">
                    <div class="card">
                        <img src="{{ asset('images/side_1.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Zone นครกลาง</b></h5>
                            <p class="card-text">รัชดา17</p>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">น้องโมจิ</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/side_2.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Zone นครใต้</b></h5>
                            <p class="card-text">ปทุมธานี</p>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">น้องมายมินต์</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/side_3.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Zone ฝั่งธนใต้</b></h5>
                            <p class="card-text">พระรามสอง</p>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">น้องเอมมี่</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('images/side_4.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>Zone ฝั่งธนใต้</b></h5>
                            <p class="card-text">เพชรเกษม 35/1</p>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">น้องนุ่น</small>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
    <hr>
    <p></p>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#" style=" text-decoration:none; color: black;"><i class="fas fa-arrow-up"></i> Back to top</a>
            </p>

            <b>
                <p>
                    <center>กรุณาอย่าโอนให้น้องที่ไม่ได้ยืนยันตัวตนกับทางเว็บไซต์!</center>
                </p>
                <p><a href="{{ route('howtocontact') }}" style=" text-decoration:none; color: black;">
                        <center><i class="far fa-question-circle"></i> การนัดน้องๆไซด์ไลน์</center>
                    </a></p>
                <p><a href="" style=" text-decoration:none; color: black;">
                        <center><u>โปรดสมัครบัญชี</u>
                    </a> คุณจะได้บันทึกรายชื่อน้องๆที่คุณสนใจไว้คัดเลือกภายหลัง</center>
                </p>
            </b>
        </div>
    </footer>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/mobile.js') }}"></script>

</body>

</html>
