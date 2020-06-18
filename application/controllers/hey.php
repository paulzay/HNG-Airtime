<section class="message_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content_title">
                    <h3>Negotiations </h3>
                </div><!-- ends: .content_title -->
            </div><!-- ends: .col-md-12 -->
        </div><!-- ends: .row -->
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="cardify messaging_sidebar">
                    <div class="messaging__header">
                        <div class="messaging_menu">
                            <a href="#" id="drop2" class="dropdown-toggle dropdown-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="icon-drawer"></span>
                                <!-- <span class="msg">6</span> -->
                            </a>
                        </div><!-- ends: .messaging_menu -->
                    </div><!-- ends: .messaging__header -->
                    <div class="messaging__contents">
                        <div class="messages">
                            <?php foreach ($nego as $msg) {
                    if($msg->n_user == $this->session->userdata('user_id')){
                        $msg_user = $this->model_getvalues->getDetails("users", "user_id", $msg->user_id);
                    }else{
                        $msg_user = $this->model_getvalues->getDetails("users", "user_id", $msg->n_user);
                    }
                    
                    $when = $this->model_getvalues->time_elapsed_string($msg->updated);
                    
                    
                ?>
                            <a href="<?= base_url() ?>messages/view_nego/<?= $msg->nego_id ?>">
                                <div class="message">
                                    <div class="message__actions_avatar">
                                        <div class="avatar">
                                            <img src="<?= base_url()." user_images/".$msg_user['picture'] ?>" alt="">
                                        </div>
                                    </div><!-- ends: .message__actions_avatar -->
                                    <div class="message_data">
                                        <div class="name_time">
                                            <div class="name">
                                                <p>
                                                    <?= $msg_user['fullname'] ?>
                                                </p>
                                            </div>
                                            <span class="time">
                                                <?= $when ?></span>
                                            <p>
                                                <?= $msg->n_subject ?> <small style="color: #AAA">(Negotiations)</small></p>
                                        </div>
                                    </div><!-- ends: .message_data -->
                                </div>
                            </a><!-- ends: .message -->
                            <?php
                } ?>
                        </div><!-- ends: .messages -->
                    </div><!-- ends: .messaging__contents -->
                </div><!-- ends: .cardify -->
            </div><!-- ends: .col-md-5 -->
            <div class="col-lg-7 col-md-12">
                <div class="chat_area cardify">
                    <div class="chat_area--title">
                        <h3>Negotiation Dashboard</h3>
                    </div><!-- ends: .chat_area--title -->
                    <div class="chat_area--conversation" style="text-align: center">
                        <img src="<?= base_url() ?>asset/img/conversation.png" style="margin: 50px auto 50px auto" />
                    </div><!-- ends: .chat_area--conversation -->
                </div><!-- ends: .chat_area -->
            </div><!-- ends: .col-md-7 -->
        </div><!-- ends: .row -->
    </div><!-- ends: .container -->
</section><!-- ends: .message_area -->