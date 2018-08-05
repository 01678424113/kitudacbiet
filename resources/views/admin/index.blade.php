@extends('admin.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-blue">
                    <span class="info-box-icon push-bottom"><i class="ion ion-ios-pricetag-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Clients</span>
                        <span class="info-box-number">450</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 45%"></div>
                        </div>
                        <span class="progress-description">
                    45% Increase in 28 Days
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-green">
                    <span class="info-box-icon push-bottom"><i class="ion ion-ios-eye-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Visits</span>
                        <span class="info-box-number">15,489</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                    40% Increase in 28 Days
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-purple">
                        <span class="info-box-icon push-bottom"><i
                                    class="ion ion-ios-cloud-download-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Downloads</span>
                        <span class="info-box-number">55,005</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                        <span class="progress-description">
                    85% Increase in 28 Days
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-red">
                    <span class="info-box-icon push-bottom"><i class="ion-ios-chatbubble-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Direct Chat</span>
                        <span class="info-box-number">13,921</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                    50% Increase in 28 Days
                  </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xl-8 connectedSortable">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Products Yearly Sales</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="lineChart" style="height:327px"></canvas>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-4 connectedSortable">
                <!-- weather -->
                <div class="box bg-blue text-center">
                    <div class="box-body">
                        <div class="p-5">
                            <h3 class="white">
                                <span class="font-size-30">City, </span>Country
                            </h3>
                            <p class="weather-day-date mb-30">
                                <span class="mr-5">MONDAY</span> May 11, 2017
                            </p>
                            <div class="mb-30 weather-icon">
                                <canvas class="mr-40 text-top" id="icon1" width="90" height="90"></canvas>
                                <div class="inline-block">
					  <span class="font-size-50">29°
						<span class="font-size-40">C</span>
					  </span>
                                    <p class="text-left">DAY RAIN</p>
                                </div>
                            </div>
                            <div class="row no-space">
                                <div class="col-2">
                                    <div>
                                        <div class="mb-10">TUE</div>
                                        <i class="wi-day-sunny font-size-30 mb-10"></i>
                                        <div>24°
                                            <span class="font-size-12">C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div>
                                        <div class="mb-10">WED</div>
                                        <i class="wi-day-cloudy font-size-30 mb-10"></i>
                                        <div>21°
                                            <span class="font-size-12">C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div>
                                        <div class="mb-10">THU</div>
                                        <i class="wi-day-sunny font-size-30 mb-10"></i>
                                        <div>25°
                                            <span class="font-size-12">C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div>
                                        <div class="mb-10">FRI</div>
                                        <i class="wi-day-cloudy-gusts font-size-30 mb-10"></i>
                                        <div>20°
                                            <span class="font-size-12">C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div>
                                        <div class="mb-10">SAT</div>
                                        <i class="wi-day-lightning font-size-30 mb-10"></i>
                                        <div>18°
                                            <span class="font-size-12">C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div>
                                        <div class="mb-10">SUN</div>
                                        <i class="wi-day-storm-showers font-size-30 mb-10"></i>
                                        <div>14°
                                            <span class="font-size-12">C</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-4 connectedSortable">
                <!-- Chat box -->
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Browser Usage</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="chart-responsive">
                                    <canvas id="pieChart" height="148"></canvas>
                                </div>
                                <!-- ./chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class="col-lg-4 col-md-12">
                                <ul class="chart-legend clearfix">
                                    <li><i class="fa fa-circle-o text-purple"></i> Chrome</li>
                                    <li><i class="fa fa-circle-o text-green"></i> IE</li>
                                    <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                                    <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                                    <li><i class="fa fa-circle-o text-red"></i> Opera</li>
                                    <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                                </ul>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-padding">
                        <ul class="nav nav-pills d-block nav-stacked">
                            <li class="nav-item"><a class="nav-link" href="#">USA
                                    <span class="pull-right text-red"><i class="fa fa-angle-up"></i> 12%</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">UK
                                    <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Japan
                                    <span class="pull-right text-purple"><i
                                                class="fa fa-angle-right"></i> 18%</span></a></li>
                        </ul>
                    </div>
                    <!-- /.footer -->
                </div>
                <!-- /.box (chat box) -->
            </div>
            <div class="col-xl-4">
                <!-- DIRECT CHAT DANGER -->
                <div class="box box-primary direct-chat direct-chat-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Direct Chat</h3>

                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="1 New Messages" class="badge bg-danger">1</span>
                            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle">
                                <i class="fa fa-comments"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages inner-content-div" id="direct-chat">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">James Anderson</span>
                                    <span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="theme/images/user1-128x128.jpg"
                                     alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Lorem Ipsum is simply dummy text industry.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Michael Jorden</span>
                                    <span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="theme/images/user3-128x128.jpg"
                                     alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Lorem Ipsum is...
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">James Anderson</span>
                                    <span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="theme/images/user1-128x128.jpg"
                                     alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Lorem Ipsum is simply dummy text industry.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Michael Jorden</span>
                                    <span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="theme/images/user3-128x128.jpg"
                                     alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Lorem Ipsum is...
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">James Anderson</span>
                                    <span class="direct-chat-timestamp pull-right">April 14, 2017 18:00 </span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="theme/images/user1-128x128.jpg"
                                     alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Lorem Ipsum is simply dummy text industry.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Michael Jorden</span>
                                    <span class="direct-chat-timestamp pull-left">April 14, 2017 18:00</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="theme/images/user3-128x128.jpg"
                                     alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Lorem Ipsum is...
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                        </div>
                        <!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="theme/images/user1-128x128.jpg"
                                             alt="User Image">

                                        <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Pavan kumar
							  <small class="contacts-list-date pull-right">April 14, 2017</small>
							</span>
                                            <span class="contacts-list-email">info@.multipurpose.com</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="theme/images/user7-128x128.jpg"
                                             alt="User Image">

                                        <div class="contacts-list-info">
							<span class="contacts-list-name">
							  Sonu Sud
							  <small class="contacts-list-date pull-right">March 14, 2017</small>
							</span>
                                            <span class="contacts-list-email">sonu@gmail.com</span>
                                        </div>
                                        <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                            </ul>
                            <!-- /.contatcts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..."
                                       class="form-control">
                                <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger">Send</button>
                      </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!--/.direct-chat -->
            </div>
            <!-- /.col -->
            <div class="col-xl-4">
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">New User</h3>

                        <div class="box-tools pull-right">
                            <span class="label bg-aqua">8 New User</span>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="users-list clearfix">
                            <li>
                                <img src="theme/images/user1-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Arijit Sinh</a>
                                <span class="users-list-date">Today</span>
                            </li>
                            <li>
                                <img src="theme/images/user8-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Sonu Nigam</a>
                                <span class="users-list-date">Yesterday</span>
                            </li>
                            <li>
                                <img src="theme/images/user7-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Pavan kumar</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="theme/images/user6-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">John Doe</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="theme/images/user1-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Alexander</a>
                                <span class="users-list-date">13 Jan</span>
                            </li>
                            <li>
                                <img src="theme/images/user5-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Angela</a>
                                <span class="users-list-date">14 Jan</span>
                            </li>
                            <li>
                                <img src="theme/images/user4-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Maical</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                            <li>
                                <img src="theme/images/user3-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Juliya</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Users</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection