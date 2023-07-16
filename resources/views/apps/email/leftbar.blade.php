<a href="email-compose.html" class="btn btn-danger btn-block">Compose</a>

<div class="mail-list mt-4">
    <a href="#" class="list-group-item border-0 text-danger font-weight-bold">
        <i class="uil uil-envelope-alt font-size-15 mr-1"></i>Inbox<span
            class="badge badge-danger float-right ml-2 mt-1">8</span></a>
    <a href="#" class="list-group-item border-0"><i class="uil uil-envelope-star font-size-15 mr-1"></i>Starred</a>
    <a href="#" class="list-group-item border-0"><i class="uil uil-envelope-edit font-size-15 mr-1"></i>Draft<span
            class="badge badge-info float-right ml-2 mt-1">32</span></a>
    <a href="#" class="list-group-item border-0"><i class="uil uil-envelope-send font-size-15 mr-1"></i>Sent
        Mail</a>
    <a href="#" class="list-group-item border-0"><i class="uil uil-trash font-size-15 mr-1"></i>Trash</a>
</div>

<h6 class="mt-4">Labels</h6>

<div class="list-group b-0 mail-list">
    <a href="#" class="list-group-item border-0"><span class="uil uil-circle text-primary font-size-12 mr-1"></span>Web
        App</a>
    <a href="#" class="list-group-item border-0"><span
            class="uil uil-circle text-info font-size-12 mr-1"></span>Recharge</a>
    <a href="#" class="list-group-item border-0"><span
            class="uil uil-circle text-success font-size-12 mr-1"></span>Wallet
        Balance</a>
    <a href="#" class="list-group-item border-0"><span
            class="uil uil-circle text-warning font-size-12 mr-1"></span>Friends</a>
    <a href="#" class="list-group-item border-0"><span
            class="uil uil-circle text-secondary font-size-12 mr-1"></span>Family</a>
</div>


@if (isset($includeChat))

<div class="mt-4 border-bottom pb-2 mb-2">
    <div class="media">
        <div class="mr-2">
            <div class="avatar-sm font-weight-bold d-inline-block m-1">
                <span class="avatar-title rounded-circle bg-soft-primary text-primary">S</span>
            </div>
        </div>
        <div class="media-body overflow-hidden">
            <h5 class="font-size-14 mt-1 mb-0">Shreyu</h5>
            <small class="text-muted"><i class="uil uil-circle font-size-11 text-success"></i> Active
                Now</small>
        </div>
        <div class="dropdown float-right mt-2">
            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                <i class="uil uil-ellipsis-v text-muted font-size-12"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item" href="#">Delete</a>
            </div>
        </div> <!-- end dropdown -->
    </div>
</div>

<ul class="list-unstyled">

    <li class="py-2">
        <a href="#" class="chat">
            <div class="media">
                <div class="text-center mr-3">
                    <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="font-size-15 mt-0 mb-1">Johnny</h5>
                    <p class="text-muted font-size-13 text-truncate mb-0">Neque
                        porro quisquam est</p>
                </div>

            </div>
        </a>
    </li>
    <li class="py-2">
        <a href="#" class="chat">
            <div class="media">
                <div class="mr-3">
                    <img src="/assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="font-size-15 mt-0 mb-1">Bryan</h5>
                    <p class="text-muted font-size-13 text-truncate mb-0">For
                        science, music, sport, etc</p>
                </div>
            </div>
        </a>
    </li>
    <li class="py-2">
        <a href="#" class="chat">
            <div class="media">
                <div class="text-center mr-3">
                    <div class="avatar-sm font-weight-bold d-inline-block">
                        <span class="avatar-title rounded-circle bg-soft-danger text-danger">
                            T
                        </span>
                    </div>
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="font-size-15 mt-0 mb-1">Tracy</h5>
                    <p class="text-muted font-size-13 text-truncate mb-0">To an
                        English person, it will seem like simplified</p>
                </div>
            </div>
        </a>
    </li>
    <li class="py-2">
        <a href="#" class="chat">
            <div class="media">
                <div class="mr-3">
                    <img src="/assets/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="font-size-15 mt-0 mb-1">Thomas</h5>
                    <p class="text-muted font-size-13 text-truncate mb-0">To achieve
                        this, it would be necessary</p>
                </div>
            </div>
        </a>
    </li>
    <li class="py-2">
        <a href="#" class="chat">
            <div class="media">
                <div class="mr-3">
                    <div class="avatar-sm font-weight-bold d-inline-block">
                        <span class="avatar-title rounded-circle bg-soft-success text-success">
                            D
                        </span>
                    </div>
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="font-size-15 mt-0 mb-1">David</h5>
                    <p class="text-muted font-size-13 text-truncate mb-0">If several
                        languages coalesce</p>
                </div>
            </div>
        </a>
    </li>

</ul>

<div class="chatbox overflow-hidden">
    <div class="bg-primary p-2">
        <div class="media">
            <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded ml-1 mr-2">
            <div class="media-body">
                <h5 class="font-size-13 text-white m-0">Johnny</h5>
                <small class="text-white-50"><i class="uil uil-circle font-size-11 text-success mr-1"></i>Active
                    Now</small>
            </div>
            <div class="float-right font-size-18 mt-1">
                <a href="" class="text-white mr-2"><i class="uil uil-comment-alt-notes font-size-16"></i></a>
                <a href="#" class="chat-close text-white mr-2"><i class="uil uil-multiply font-size-14"></i></a>
            </div>
        </div>
    </div>

    <div class="chat-conversation p-2">

        <ul class="conversation-list slimscroll" style="max-height: 220px;">
            <li class="text-center">
                <span class="badge badge-light-primary">Today</span>
            </li>
            <li class="clearfix even">
                <div class="chat-avatar">
                    <img src="/assets/images/users/avatar-2.jpg" alt="male">
                    <small>10:00</small>
                </div>
                <div class="conversation-text">
                    <div class="ctext-wrap">
                        <div class="font-weight-medium">Johnny</div>
                        <p>
                            Hello!
                        </p>
                    </div>
                </div>
            </li>
            <li class="clearfix odd">
                <div class="conversation-text">
                    <div class="ctext-wrap">
                        <div class="font-weight-medium">Dennis</div>
                        <p>
                            Hi, How are you? What about our next meeting?
                        </p>
                    </div>
                </div>
            </li>

            <li class="clearfix">
                <div class="chat-avatar">
                    <img src="/assets/images/users/avatar-6.jpg" alt="male">
                    <small>10:01</small>
                </div>
                <div class="conversation-text">
                    <div class="ctext-wrap">
                        <div class="font-weight-medium">Johnny</div>
                        <p>
                            Yeah everything is fine
                        </p>
                    </div>
                </div>
            </li>
            <li class="clearfix odd">
                <div class="conversation-text">
                    <div class="ctext-wrap">
                        <div class="font-weight-medium">Dennis</div>
                        <p>
                            Wow that's great...
                        </p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="position-relative chat-input">
            <input type="text" class="form-control" placeholder="Type your message...">
            <div class="chat-link">
                <a href="#" class="p-1"><i class="uil-image"></i></a>
                <a href="#" class="p-1"><i class="uil-navigator"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- end chatbox -->

@endif