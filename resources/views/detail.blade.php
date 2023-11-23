<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>product traking list - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style type="text/css">
    
 
        body {
            background-color: #f5f7fa;
            margin-top: 20px;
        }

        .card {
            margin-bottom: 24px;
            -webkit-box-shadow: 0 2px 4px rgb(126 142 177 / 10%);
            box-shadow: 0 2px 4px rgb(126 142 177 / 10%);
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid #eaedf1;
            border-radius: .25rem;
        }

        .activity-wid {
            margin-left: 16px;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .activity-wid .activity-list {
            position: relative;
            padding: 0 0 33px 30px;
        }

        .activity-border:before {
            content: "";
            position: absolute;
            height: 38px;
            border-left: 3px dashed #eaedf1;
            top: 40px;
            left: 0;
        }

        .activity-wid .activity-list .activity-icon {
            position: absolute;
            left: -20px;
            top: 0;
            z-index: 2;
        }

        .avatar-sm {
            height: 2.5rem;
            width: 2.5rem;
        }

        .media {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .me-3 {
            margin-right: 1rem !important;
        }

        .font-size-15 {
            font-size: 15px !important;
        }

        .font-size-14 {
            font-size: 14px !important;
        }

        .text-muted {
            color: #74788d !important;
        }

        .text-end {
            text-align: right !important;
        }

        .font-size-13 {
            font-size: 13px !important;
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .bg-soft-primary {
            background-color: rgba(82, 92, 229, .25) !important;
        }

        .bg-soft-success {
            background-color: rgba(35, 197, 143, .25) !important;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Product Traking</h4>
                        <ul class="list-unstyled activity-wid mb-0">
                            
                            @foreach ($listData['data']['history'] as $item)
                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-sm">
                                        <img src="https://i.ibb.co/nRS5hhw/courier.png"
                                            class="avatar-sm rounded-circle" alt>
                                    </div>
                                    <div class="media">
                                        <div class="me-3">
                                            <h5 class="font-size-15 mb-1">{{ $item['date'] }}</h5>
                                            <p class="text-muted font-size-14 mb-0">{{ $item['desc'] }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
         </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
