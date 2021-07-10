@extends('backend.layout.master')
@section('content')
<div id="main-content">
    <div class="container-fluid">
        @include('backend.layout.partials.blockheader')

        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card overflowhidden number-chart">
                    <div class="body">
                        <div class="number">
                            <h6>EARNINGS</h6>
                            <span>$22,500</span>
                        </div>
                        <small class="text-muted">19% compared to last week</small>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                         data-line-Width="1" data-line-Color="#f79647" data-fill-Color="#fac091">1,4,1,3,7,1</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card overflowhidden number-chart">
                    <div class="body">
                        <div class="number">
                            <h6>SALES</h6>
                            <span>$500</span>
                        </div>
                        <small class="text-muted">19% compared to last week</small>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                         data-line-Width="1" data-line-Color="#604a7b" data-fill-Color="#a092b0">1,4,2,3,6,2</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card overflowhidden number-chart">
                    <div class="body">
                        <div class="number">
                            <h6>VISITS</h6>
                            <span>$21,215</span>
                        </div>
                        <small class="text-muted">19% compared to last week</small>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                         data-line-Width="1" data-line-Color="#4aacc5" data-fill-Color="#92cddc">1,4,2,3,1,5</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card overflowhidden number-chart">
                    <div class="body">
                        <div class="number">
                            <h6>LIKES</h6>
                            <span>$421,215</span>
                        </div>
                        <small class="text-muted">19% compared to last week</small>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px"
                         data-line-Width="1" data-line-Color="#4f81bc" data-fill-Color="#95b3d7">1,3,5,1,4,2</div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Top Products</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="chart-top-products" class="chartist"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Referrals</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled list-referrals">
                            <li>
                                <p><span class="value">2301</span><span class="text-muted float-right">visits from Facebook</span></p>
                                <div class="progress progress-xs progress-transparent custom-color-blue">
                                    <div class="progress-bar" data-transitiongoal="87"></div>
                                </div>
                            </li>
                            <li>
                                <p><span class="value">2107</span><span class="text-muted float-right">visits from Twitter</span></p>
                                <div class="progress progress-xs progress-transparent custom-color-purple">
                                    <div class="progress-bar" data-transitiongoal="34"></div>
                                </div>
                            </li>
                            <li>
                                <p><span class="value">2308</span><span class="text-muted float-right">visits from Search</span></p>
                                <div class="progress progress-xs progress-transparent custom-color-yellow">
                                    <div class="progress-bar" data-transitiongoal="54"></div>
                                </div>
                            </li>
                            <li>
                                <p><span class="value">1024</span><span class="text-muted float-right">visits from Affiliates</span></p>
                                <div class="progress progress-xs progress-transparent custom-color-green">
                                    <div class="progress-bar" data-transitiongoal="67"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Total Revenue</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body text-center">
                        <h4 class="margin-0">Total Sale</h4>
                        <h6 class="m-b-20">2,45,124</h6>
                        <input type="text" class="knob" value="63" data-width="100" data-height="100" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125" data-fgColor="#212121" readonly>
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="6" data-bar-Spacing="6" data-bar-Color="#7460ee">2,5,4,8,3,9,1,5</div>
                        <h6 class="p-b-15">Weekly Earnings</h6>
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="4" data-bar-Color="#11a0f8">3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2</div>
                        <h6>Monthly Earnings</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Resent Chat</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body text-center">
                        <div class="cwidget-scroll">
                            <ul class="chat-widget m-r-5 clearfix">
                                <li class="left float-left">
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">Hello, John<br>What is the update on Project X?</span>
                                    </div>
                                </li>
                                <li class="right">
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                                    </div>
                                </li>
                                <li class="left float-left">
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">That's great. Will catch you in evening.</span>
                                    </div>
                                </li>
                                <li class="right">
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">Sure we'will have a blast today.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="input-group p-t-15">
                            <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="icon-paper-plane"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter text here...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Data Managed</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>1,523</h2>
                                <p>External Records</p>
                            </div>
                            <div class="col-md-6">
                                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="60px" data-bar-Width="3" data-bar-Spacing="8" data-bar-Color="#00ced1">2,-1,5,6,4,8,7,-5,6,2,3,5,6,2,-3,4,-2</div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <tbody>
                                <tr>
                                    <th><i class="fa fa-circle text-success"></i></th>
                                    <td>Twitter</td>
                                    <td><span>862 Records</span></td>
                                    <td>35% <i class="fa fa-caret-up "></i></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-circle text-info"></i></th>
                                    <td>Facebook</td>
                                    <td><span>451 Records</span></td>
                                    <td>15% <i class="fa fa-caret-up "></i></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-circle text-warning"></i></th>
                                    <td>Mailchimp</td>
                                    <td><span>502 Records</span></td>
                                    <td>20% <i class="fa fa-caret-down"></i></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-circle text-danger"></i></th>
                                    <td>Google</td>
                                    <td><span>502 Records</span></td>
                                    <td>20% <i class="fa fa-caret-up "></i></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-circle "></i></th>
                                    <td>Other</td>
                                    <td><span>237 Records</span></td>
                                    <td>10% <i class="fa fa-caret-down"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Lucid Feeds</h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled feeds_widget">
                            <li>
                                <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                    <small>It will give a smart finishing to your site</small>
                                </div>
                            </li>
                            <li>
                                <div class="feeds-left"><i class="fa fa-user"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                    <small>I feel great! Thanks team</small>
                                </div>
                            </li>
                            <li>
                                <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                    <small>Your connection is not private</small>
                                </div>
                            </li>
                            <li>
                                <div class="feeds-left"><i class="fa fa-check"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                    <small>WE have fix all Design bug with Responsive</small>
                                </div>
                            </li>
                            <li>
                                <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                <div class="feeds-body">
                                    <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                    <small>You received a new oder from Tina.</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Twitter Feed</h2>
                    </div>
                    <div class="body">
                        <form>
                            <div class="form-group">
                                <textarea rows="3" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                            </div>
                            <button class="btn btn-primary">Tweet</button>
                            <a href="javascript:void(0);">13K users active</a>
                        </form>
                        <hr>
                        <ul class="right_chat list-unstyled mb-0">
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Isabella <small class="float-right">1 hours ago</small></span>
                                            <span class="message">Contrary to popular belief not simply text</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Alexander <small class="float-right">2 hours ago</small></span>
                                            <span class="message">Contrary to popular belief not simply text</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Alexander <small class="float-right">1 day ago</small></span>
                                            <span class="message">Contrary to popular belief not simply text</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card overflowhidden">
                    <div class="body top_counter bg-success">
                        <div class="icon bg-transparent">
                            <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="content text-light">
                            <div>Team Leader</div>
                            <h6>Maryam Amiri</h6>
                        </div>
                    </div>
                    <div class="body">
                        <div class="list-group list-widget">
                            <a href="javascript:void(0);" class="list-group-item">
                                <span class="badge badge-success">654</span>
                                <i class="fa fa-envelope text-muted"></i>Inbox</a>
                            <a href="javascript:void(0);" class="list-group-item">
                                <span class="badge badge-info">364</span>
                                <i class="fa fa-eye text-muted"></i> Profile visits</a>
                            <a href="javascript:void(0);" class="list-group-item">
                                <span class="badge badge-warning">19</span>
                                <i class="fa fa-bookmark text-muted"></i> Bookmarks</a>
                            <a href="javascript:void(0);" class="list-group-item">
                                <span class="badge badge-warning">12</span>
                                <i class="fa fa-phone text-muted"></i> Call</a>
                            <a href="javascript:void(0);" class="list-group-item">
                                <span class="badge badge-danger">54</span>
                                <i class="fa fa-comments-o text-muted"></i> Messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Lucid Activities</h2>
                    </div>
                    <div class="body">
                        <div class="timeline-item green" date-is="20-04-2018 - Today">
                            <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
                            <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA</span>
                            <div class="msg">
                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-bubbles"></i> Comment</a>
                                <div class="collapse m-t-10" id="collapseExample">
                                    <div class="well">
                                        <form>
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="timeline-item blue" date-is="19-04-2018 - Yesterday">
                            <h5>Oeehhh, that's awesome.. Me too!</h5>
                            <span><a href="javascript:void(0);" title="">Katherine Lumaad</a> Oakland, CA</span>
                            <div class="msg">
                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                <div class="timeline_img m-b-20">
                                    <img class="w-25" src="../assets/images/blog/blog-page-4.jpg" alt="Awesome Image">
                                    <img class="w-25" src="../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                                </div>
                                <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="icon-bubbles"></i> Comment</a>
                                <div class="collapse m-t-10" id="collapseExample1">
                                    <div class="well">
                                        <form>
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item warning" date-is="21-02-2018">
                            <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
                            <span><a href="javascript:void(0);" title="">Gary Camara</a> San Francisco, CA</span>
                            <div class="msg">
                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                <a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="icon-bubbles"></i> Comment</a>
                                <div class="collapse m-t-10" id="collapseExample2">
                                    <div class="well">
                                        <form>
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
