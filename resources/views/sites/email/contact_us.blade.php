<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .heading {
            text-align: center;
            color: #010098;
            font-size: 32px;
            font-weight: 500;
            margin: 32px auto;
        }
        .schedule li {
            display: flex;
            margin-bottom: 15px;
            list-style: none;
        }
        .schedule li div {
        width: 50%;
        }
        .schedule li .title{
            color: #4A5764;
            font-weight: 700;
        }
        .schedule li .value {
            font-weight: 400;
            color: #4A5764;
        }
    </style>
</head>

<body>
    <div>

        <div>

            <div class="heading">
                <h2>Contact Us</h2>
            </div>
            <div style="width:100%; margin:32px auto; height:1px; background-color:#e8e8e8;"></div>

            <ul class="schedule">
                <li>
                    <div class="title"> Name </div>
                    <div class="value"> {{ $data->name }} </div>
                </li>
                 <li>
                    <div class="title"> Email </div>
                    <div class="value"> {{ $data->email }} </div>
                </li>
                @if ($data->phone)
                    <li>
                        <div class="title">  Phone  </div>
                        <div class="value">  {{ $data->phone }}  </div>
                    </li>
                @endif
                 <li>
                    <div class="title">  Services  </div>
                    <div class="value"> {{ $data->services }} </div>
                </li>
                 <li>
                    <div class="title"> Message </div>
                    <div class="value"> {{ $data->messages }} </div>
                </li>
            </ul>

        </div>
    </div>

</body>

</html>
