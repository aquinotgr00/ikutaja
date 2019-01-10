<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h1 class="breadmome-name">Detail Event</h1>
                    <ul>
                        <li><a href="<?php echo base_url('pages/events1'); ?>">Event All</a></li>
                        <li class="active">Detail Event</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="event-detils-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="event-left-sidebar-area">
                    <div class="event-img img-full">
                        <img draggable="false" src="<?= $event->image ?>" alt="">
                    </div>
                    <div class="event-location">
                        <div class="event-vanue">
                            <h4>vanue:</h4>
                            <a href="#"><i class="fa fa-flag"></i> <?= $event->address ?></a>
                        </div>
                        <div class="event-time">
                            <h4>date:</h4>
                            <a href="#"><i class="fa fa-calendar"></i> <?= $event->date ?></a>
                        </div>
                    </div>
                    <div class="event-description">
                        <h3><?= $event->name ?></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                        <div class="meta-block info">
                            <div class="block-content">
                                <div class="info-item">
                                    <div class="icon"><i class="fa fa-clock-o"></i></div>
                                    <div class="content">
                                        <span class="lab">Start time</span>
                                        <span class="val">
                                        2019-03-08 00:00
                                        </span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="icon"><i class="fa fa-calendar-o"></i></div>
                                    <div class="content">
                                        <span class="lab">Finished Time</span>
                                        <span class="val">
                                        2019-03-08 02:00
                                        </span>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="content">
                                        <span class="lab">Address</span>
                                        <span class="val">
                                        Warren Street, New York, USA </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-object">
                            <h4>Event Description</h4>
                            <p><?= $event->description ?></p>
                        </div>
                    </div>
                    <div class="question-area mt-50">
                        <h4>Leave a replay</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input mb-30">
                                        <label>Your Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input mb-30">
                                        <label>Your Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input mb-30">
                                        <label>Your Message</label>
                                        <textarea></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-input">
                                        <button class="sent-btn" type="submit">SEND Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-widget">
                    <div class="single-sidebar-widget">
                        <h4 class="title">Popular Event</h4>
                        <div class="sidebar-rc-post">
                            <ul>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="#">
                                            <img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102334/img/rc-img/1.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 18, 2018</div>
                                        <h4><a href="#">Children Help</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="#">
                                            <img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102334/img/rc-img/2.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 16, 2018</div>
                                        <h4><a href="#">Clean Watter Foundation</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="#">
                                            <img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102334/img/rc-img/3.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 14, 2018</div>
                                        <h4><a href="#">Help African children</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <h4 class="title">Categories</h4>
                        <ul class="course-categoris">
                            <li><a href="#">Political Science<span>10</span></a></li>
                            <li><a href="#">Micro Biology<span>15</span></a></li>
                            <li><a href="#">Computer Science<span>05</span></a></li>
                            <li><a href="#">Business Leaders Guide<span>19</span></a></li>
                            <li><a href="#">Become a Product Manage<span>21</span></a></li>
                            <li><a href="#">Business Economics<span>14</span></a></li>
                            <li><a href="#">Language Education<span>13</span></a></li>
                            <li><a href="#">Social Media Management<span>18</span></a></li>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget">
                        <h4 class="title">Recent Event</h4>
                        <div class="sidebar-rc-post">
                            <ul>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="#">
                                            <img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102334/img/rc-img/1.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 18, 2018</div>
                                        <h4><a href="#">Children Help</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="#">
                                            <img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102334/img/rc-img/2.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 16, 2018</div>
                                        <h4><a href="#">Clean Watter Foundation</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="rc-post-thumb img-full">
                                        <a href="#">
                                            <img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546102334/img/rc-img/3.jpg" alt=""></a>
                                    </div>
                                    <div class="rc-post-content">
                                        <div class="widget-date">january 14, 2018</div>
                                        <h4><a href="#">Help African children</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="widget-banner img-full">
                            <a href="#"><img draggable="false" src="https://res.cloudinary.com/ikutaja/image/upload/v1546101403/img/banner/1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <h4 class="title">Tags</h4>
                        <ul class="tags">
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Premium</a></li>
                            <li><a href="#">Designtuto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>