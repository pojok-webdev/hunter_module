<div class="breadLine">
    <ul class="breadcrumb">
        <li><a href="<?php echo $breadcrumb[0]['url']?>"><?php echo $breadcrumb[0]['text']?></a> 
        <span class="divider">></span></li>
        <li class="active"><?php echo $breadcrumb[1]['text']?></li>
    </ul>
    <ul class="buttons">
        <li>
            <a href="#" class="link_bcPopupList"><span class="icon-user"></span><span class="text">Users list</span></a>
            <div id="bcPopupList" class="popup">
                <div class="head clearfix">
                    <div class="arrow"></div>
                    <span class="isw-users"></span>
                    <span class="name">List users</span>
                </div>
                <div class="body-fluid users">
                <?php foreach ($users as $user){?>
                    <div class="item clearfix">
                        <div class="image"><a href="#"><img src="/asset/aqua/img/users/user_profile.jpg" width="32"/></a></div>
                        <div class="info">
                            <a href="#" class="name"><?php echo $user['username']?></a>
                            <span>online</span>
                        </div>
                    </div>
                <?php }?>
                </div>
                <div class="footer">
                    <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                </div>
            </div>                    
        </li>                
    </ul>
</div>
