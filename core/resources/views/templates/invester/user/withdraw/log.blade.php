<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageTitle}}</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .header{
            background-color: rgb(0, 66, 129);
            border-bottom: 1 px solid rgb(0, 66, 129);
            height: 50px;
            padding: 0 20px;
        }
        ul{
            list-style: none;
            display: flex;
            height: 100%;
            justify-content: space-between;
            align-items: center;
            color: #ffffff;
        }
        svg{
            width: 20px;
            height: 20px;
        }
        table{
            width: 100%;
        }
        thead tr{
            border-bottom: 1px solid gray;
        }
        tbody tr{
            border-bottom: 1px solid rgb(185, 184, 184);
        }
        tr{
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 40px;
            padding: 0 22px;
        }
        td, tr{
            white-space: nowrap;
            text-align: center!important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <ul>
                <li>
                    <a href="{{route('user.home')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path d="M 76.962 85.395 H 13.039 c -1.104 0 -2 -0.896 -2 -2 V 40.991 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 40.403 h 59.923 V 40.991 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 42.403 C 78.962 84.499 78.066 85.395 76.962 85.395 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path d="M 87.998 40.831 c -0.387 0 -0.778 -0.112 -1.122 -0.346 L 45 12.023 L 3.124 40.485 c -0.913 0.622 -2.157 0.383 -2.778 -0.53 c -0.621 -0.913 -0.383 -2.157 0.53 -2.778 l 43 -29.226 c 0.678 -0.461 1.57 -0.461 2.248 0 l 43 29.226 c 0.914 0.621 1.151 1.865 0.53 2.778 C 89.268 40.524 88.639 40.831 87.998 40.831 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path d="M 76.962 23.319 c -1.104 0 -2 -0.896 -2 -2 v -6.094 h -9.01 c -1.104 0 -2 -0.896 -2 -2 s 0.896 -2 2 -2 h 11.01 c 1.104 0 2 0.896 2 2 v 8.094 C 78.962 22.423 78.066 23.319 76.962 23.319 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path d="M 39.373 75.782 c -1.104 0 -2 -0.896 -2 -2 V 47.774 h -10.65 v 26.008 c 0 1.104 -0.896 2 -2 2 s -2 -0.896 -2 -2 V 45.774 c 0 -1.104 0.896 -2 2 -2 h 14.65 c 1.104 0 2 0.896 2 2 v 28.008 C 41.373 74.887 40.478 75.782 39.373 75.782 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path d="M 65.276 61.778 H 50.627 c -1.104 0 -2 -0.896 -2 -2 V 45.774 c 0 -1.104 0.896 -2 2 -2 h 14.649 c 1.104 0 2 0.896 2 2 v 14.004 C 67.276 60.883 66.381 61.778 65.276 61.778 z M 52.627 57.778 h 10.649 V 47.774 H 52.627 V 57.778 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            </g>
                            </svg>
                    </a>
                </li>
                <li>
                    {{$pageTitle}}
                </li>
                <li>
                    <a href="{{route('user.withdraw')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path d="M 9.518 37.866 H 1 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 8.518 c 0.552 0 1 0.448 1 1 S 10.07 37.866 9.518 37.866 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path d="M 57.872 77.188 c -0.603 0 -1.206 -0.229 -1.665 -0.688 l -9.587 -9.587 c -0.918 -0.92 -0.918 -2.414 0 -3.332 l 9.447 -9.447 H 29.181 c -0.552 0 -1 -0.447 -1 -1 s 0.448 -1 1 -1 h 29.301 c 0.404 0 0.77 0.243 0.924 0.617 c 0.155 0.374 0.069 0.804 -0.217 1.09 L 48.034 64.995 c -0.139 0.139 -0.139 0.365 0.001 0.505 l 9.585 9.585 c 0.139 0.14 0.365 0.139 0.504 0 l 29.78 -29.781 c 0.084 -0.084 0.099 -0.191 0.096 -0.266 c 0.003 -0.15 -0.012 -0.257 -0.096 -0.341 l -29.78 -29.781 c -0.181 -0.18 -0.321 -0.184 -0.504 0 l -9.586 9.585 c -0.139 0.139 -0.139 0.365 0 0.504 l 11.154 11.153 c 0.286 0.286 0.372 0.716 0.217 1.09 c -0.154 0.374 -0.52 0.617 -0.924 0.617 H 18.341 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 37.727 l -9.447 -9.447 c -0.918 -0.919 -0.918 -2.414 0 -3.332 l 9.586 -9.586 c 0.892 -0.891 2.444 -0.89 3.332 0 l 29.78 29.78 c 0.464 0.463 0.705 1.087 0.68 1.755 c 0.025 0.593 -0.216 1.216 -0.68 1.68 l -29.78 29.781 C 59.079 76.958 58.476 77.188 57.872 77.188 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path d="M 20.862 54.134 h -8.295 c -0.552 0 -1 -0.447 -1 -1 s 0.448 -1 1 -1 h 8.295 c 0.552 0 1 0.447 1 1 S 21.414 54.134 20.862 54.134 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                <path d="M 41.533 46 H 7.307 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 34.226 c 0.552 0 1 0.448 1 1 S 42.085 46 41.533 46 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #ffffff; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            </g>
                            </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="section">
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($withdraws as $withdraw)
                        <tr>
                            <td>₦{{ showAmount($withdraw->amount) }}</td>
                            <td>@if ($withdraw->status == 1) Approved  @elseif ($withdraw->status == 2) Pending @elseif ($withdraw->status == 3) Rejected @endif</td>
                            <td>{{ diffForHumans($withdraw->created_at, 'M d Y @g:i:a') }}</td>
                        </tr>
                        @empty
                        <tr style="border: none; padding: 50px 0; justify-content: center;">
                            <td>
                                Record Not Found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('partials.notify')
</body>
</html>