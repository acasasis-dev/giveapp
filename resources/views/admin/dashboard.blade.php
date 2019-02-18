@extends("layout.adminlayout")

@section('title')
Admin | Dashboard
@endsection

<!-- @section('pageHeader')

@endsection

@section('pageHeaderSub')

@endsection -->

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sample</h4>
                        <p class="card-category">Sample</p>
                    </div>
                    <div class="card-body">
                        <div class="ct-chart ct-perfect-fourth" id="chartPreferences">
                            <svg class="ct-chart-pie" style="width: 100%, height: 100%" width="100%" height="100%" xmlns:ct="http://gionkunz.github.com/chartist-js/ct">
                                <g class="ct-series ct-series-c">
                                    <path class="ct-slice-pie" d="M 145.5 5 A 117.5 117.5 0 0 0 70.287 32.227 L 145.5 122.5 Z" ct:value="11"></path>
                                </g>
                                <g class="ct-series ct-series-b">
                                    <path class="ct-slice-pie" d="M 70.603 31.965 A 117.5 117.5 0 0 0 123.886 237.995 L 145.5 122.5 Z" ct:value="36"></path>
                                </g>
                                <g class="ct-series ct-series-a">
                                    <path class="ct-slice-pie" d="M 123.483 237.919 A 117.5 117.5 0 1 0 145.5 5 L 145.5 122.5 Z" ct:value="53"></path>
                                </g>
                                <g>
                                    <text class="ct-label" text-anchor="middle" dx="203.9893" dy="129.0289">53%</text>
                                    <text class="ct-label" text-anchor="middle" dx="88.5957" dy="137.1105">36%</text>
                                    <text class="ct-label" text-anchor="middle" dx="125.5992" dy="67.2233">11%</text>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i>Open
                            <i class="fa fa-circle text-danger"></i>Sample
                            <i class="fa fa-circle text-warning"></i>Sample
                        </div>
                        <hr />
                        <div class="stats">
                            <i class="fa fa-clock-o"></i>Updated 2 Months Ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sample</h4>
                        <p class="card-category">Sample</p>
                    </div>
                    <div class="card-body">
                        <div class="ct-chart" id="chartHours">
                            <svg class="ct-chart-line" style="width: 100%; height: 100%" width="100%" heigh="245px" xlmns:ct="http://gionkunz.github/chartist-js/ct">
                                <g class="ct-grids">
                                    <line class="ct-grid ct-vertical" x1="50" y1="210" x2="630" y2="210"></line>
                                    <line class="ct-grid ct-vertical" x1="50" y1="185.62" x2="630" y2="185.625"></line>
                                    <line class="ct-grid ct-vertical" x1="50" y1="161.25" x2="630" y2="161.25"></line>
                                    <line class="ct-grid ct-vertical" x1="50" y1="136.875" x2="630" y2="136.875"></line>
                                    <line class="ct-grid ct-vertical" x1="50" y1="112.5" x2="630" y2="112.5"></line>
                                    <line class="ct-grid ct-vertical" x1="50" y1="88.125" x2="630" y2="88.125"></line>
                                    <line class="ct-grid ct-vertical" x1="50" y1="63.75" x2="630" y2="63.75"></line>
                                    <line class="ct-grid ct-vertical" x1="50" y1="39.375" x2="630" y2="39.375"></line>
                                </g>
                                <g>
                                   <g class="ct-series ct-series-a">
                                       <path xmlns="http://www.w3.org/2000/svg" class="ct-area" d="M 50 210 L 50 140.044 C 74.167 140.044 98.333 116.156 122.5 116.156 C 146.667 116.156 170.833 90.563 195 90.563 C 219.167 90.563 243.333 90.075 267.5 90.075 C 291.667 90.075 315.833 74.963 340 74.963 C 364.167 74.963 388.333 67.163 412.5 67.163 C 436.667 67.163 460.833 39.863 485 39.863 C 509.167 39.863 533.333 40.594 557.5 40.594 C 581.667 40.594 605.833 26.7 630 26.7 C 654.167 26.7 678.333 17.925 702.5 17.925 C 726.667 17.925 750.833 3.787 775 3.787 C 799.167 3.787 823.333 -20.1 847.5 -20.1 L 847.5 210 Z" xmlns:ct="http://gionkunz.github.com/chartist-js/ct" ct:values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" />
                                   </g>
                                   <g class="ct-series ct-series-b">
                                       <path xmlns="http://www.w3.org/2000/svg" class="ct-area" d="M 50 210 L 50 193.669 C 74.167 193.669 98.333 172.95 122.5 172.95 C 146.667 172.95 170.833 175.144 195 175.144 C 219.167 175.144 243.333 151.5 267.5 151.5 C 291.667 151.5 315.833 140.044 340 140.044 C 364.167 140.044 388.333 128.344 412.5 128.344 C 436.667 128.344 460.833 103.969 485 103.969 C 509.167 103.969 533.333 103.481 557.5 103.481 C 581.667 103.481 605.833 78.619 630 78.619 C 654.167 78.619 678.333 77.887 702.5 77.887 C 726.667 77.887 750.833 77.4 775 77.4 C 799.167 77.4 823.333 52.294 847.5 52.294 L 847.5 210 Z" xmlns:ct="http://gionkunz.github.com/chartist-js/ct" ct:values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" /> 
                                   </g>
                                   <g class="ct-series ct-series-c">
                                       <path xmlns="http://www.w3.org/2000/svg" class="ct-area" d="M 50 210 L 50 204.394 C 74.167 204.394 98.333 182.456 122.5 182.456 C 146.667 182.456 170.833 193.669 195 193.669 C 219.167 193.669 243.333 183.675 267.5 183.675 C 291.667 183.675 315.833 163.688 340 163.688 C 364.167 163.688 388.333 151.744 412.5 151.744 C 436.667 151.744 460.833 135.169 485 135.169 C 509.167 135.169 533.333 134.925 557.5 134.925 C 581.667 134.925 605.833 102.994 630 102.994 C 654.167 102.994 678.333 110.063 702.5 110.063 C 726.667 110.063 750.833 110.063 775 110.063 C 799.167 110.063 823.333 85.931 847.5 85.931 L 847.5 210 Z" xmlns:ct="http://gionkunz.github.com/chartist-js/ct" ct:values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" />
                                   </g>
                                </g>
                                <g class="ct-labels">
                                    <foreignobject style="overflow: visible;" x="50" y="215" width="72.5" height="20">
                                        <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignobject>
                                    <foreignobject style="overflow: visible;" x="122.5" y="215" width="72.5" height="20">
                                        <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignobject>
                                    <foreignObject style="overflow: visible;" x="195" y="215" width="72.5" height="20">
                                        <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="267.5" y="215" width="72.5" height="20">
                                        <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="340" y="215" width="72.5" height="20">
                                        <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignObject>
                                   <foreignObject style="overflow: visible;" x="412.5" y="215" width="72.5" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignObject>
                                   <foreignObject style="overflow: visible;" x="485" y="215" width="72.5" height="20">
                                    <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="557.5" y="215" width="72.5" height="20">
                                        <span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sample</span>
                                    </foreignObject>

                                    <foreignObject style="overflow: visible;" x="10" y="185.625" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="10" y="161.25" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">100</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="10" y="136.875" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="10" y="112.5" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">300</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="10" y="88.125" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="10" y="63.75" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">500</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="10" y="39.375" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span>
                                    </foreignObject>
                                    <foreignObject style="overflow: visible;" x="10" y="15" width="30" height="24.375">
                                        <span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">700</span>
                                    </foreignObject>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i>Sample
                            <i class="fa fa-circle text-danger"></i>Sample
                            <i class="fa fa-circle text-warning"></i>Sample
                        </div>
                        <hr />
                        <div class="stats">
                            <i class="fa fa-history"></i>Updated 5 Months Ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection