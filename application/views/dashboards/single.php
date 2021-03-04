<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('commons/head');?>
<body>
    <style>
    .listUsers .clientstate{
        text-align:center;
    }
    .listUsers thead th{
        text-align: center;
    }
    </style>
    <div class="header">
        <a class="logo" href="index.html"><img src="/asset/aqua/img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/></a>
        <ul class="header_menu">
            <li class="list_icon"><a href="#">&nbsp;</a></li>
        </ul>
    </div>
    <?php $this->load->view('commons/menu');?>        
    <div class="content">
    <?php $this->load->view('commons/breadline');?>
        <div class="workplace">
            <div class="row-fluid">
            <div class="span12">                    
                    <div class="head clearfix">
                        <div class="isw-users"></div>
                        <h1>Simple users list</h1>      
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table listUsers">
                            <thead>
                                <tr>
                                    <th colspan=2>Name</th>
                                    <th>Lead</th>
                                    <th>Offer</th>
                                    <th>prospect</th>
                                    <th>Won</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($clients as $client){?>
                                <tr>                                    
                                    <td width="40">
                                        <a href="#"><img src="/asset/aqua/img/backgrounds/body.jpg" width="32" class="img-polaroid"/></a>
                                    </td>
                                    <td>
                                        <a href="#" class="user"><?php echo $client['name'];?></a>
                                        <p class="about">
                                            <span class="icon-envelope"></span> aqvatarius@domain.com <br/>
                                        </p>
                                    </td>
                                    <td class="clientstate">
                                        <?php if($client['lead']==='1'){?>
                                            <img src="/asset/aqua/img/backgrounds/header.jpg" alt="" srcset="">
                                        <?php }else{}?>
                                    </td>
                                    <td class="clientstate">
                                        <?php if($client['offer']==='1'){?>
                                            <img src="/asset/aqua/img/backgrounds/header.jpg" alt="" srcset="">
                                        <?php }else{}?>
                                    </td>
                                    <td class="clientstate">
                                        <?php if($client['prospect']==='1'){?>
                                            <img src="/asset/aqua/img/backgrounds/header.jpg" alt="" srcset="">
                                        <?php }else{}?>
                                    </td>
                                    <td class="clientstate">
                                        <?php if($client['won']==='1'){?>
                                            <img src="/asset/aqua/img/backgrounds/header.jpg" alt="" srcset="">
                                        <?php }else{}?>
                                    </td>
                                    <td width="50">
                                        <p class="about">
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-envelope"></span></a> 
                                            <a href="#"><span class="icon-remove"></span></a>                                        
                                        </p>
                                    </td>
                                </tr>
                                <?php }?>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</body>
</html>
