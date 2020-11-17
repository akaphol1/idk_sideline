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

        <a href="" class="navbar-brand px-3">
            <h3 style="color: white;"><u>Sideline</u></h3>
        </a>

        <div class="collapse navbar-collapse justify-content-end" id="nav">

            <ul class="navbar-nav">
                <li class="nav-item dropdown" data-toggle="dropdown">
                    <a class="nav-link text-light font-weight-bold px-3 " href="#">ข้อมูล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="#">น้องสุดโปรด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light font-weight-bold px-3" href="#">เข้าสู่ระบบ</a>
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <a href="" class="btn btn-warning">ค้นหาน้องสุดโปรด <i class="fas fa-search"></i></a>
            </div>
        </div>

    </nav>
    <hr>
    <div class="container" style="padding: 100px">
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-11">
                <div class="card" style="width: 100%; height:auto;">
                    <article class="card-body">
                        <a href="" class="float-right btn btn-outline-primary">Sign up</a>
                        <h4 class="card-title mb-4 mt-1">Sign in</h4>
                        <hr>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input name="" class="form-control" placeholder="Email or login" type="email">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="******" type="password">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login </button>
                            </div> <!-- form-group// -->

                        </form>
                    </article>
                </div> <!-- card.// -->
            </div>
        </div>

    </div>
    <hr>
    <p></p>
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
