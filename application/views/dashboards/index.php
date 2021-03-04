<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('commons/head');?>
<body>
    <style>
    .leads{
        background:yellow;
    }
    .offers{
        background:aqua;
    }
    .prospects{
        background:green;
    }
    .surveys{
        background:gold;
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
                <div class="span3 leads">                    
                    <div class="wBlock red clearfix">                        
                        <div class="dSpace">
                            <h3>Invoices statistics</h3>
                            <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--130,190,260,230,290,400,340,360,390--></span>
                            <span class="number">60%</span>                    
                        </div>
                        <div class="rSpace">
                            <span>$1,530 <b>amount paid</b></span>
                            <span>$2,102 <b>in queue</b></span>
                            <span>$11,100 <b>total taxes</b></span>
                        </div>                          
                    </div>                     
                    
                </div>                
                
                <div class="span3 offers">                    

                    <div class="wBlock green clearfix">                        
                        <div class="dSpace">
                            <h3>Users</h3>
                            <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--5,10,15,20,23,21,25,20,15,10,25,20,10--></span>
                            <span class="number">2,513</span>                    
                        </div>
                        <div class="rSpace">
                            <span>351 <b>active</b></span>
                            <span>2102 <b>passive</b></span>
                            <span>100 <b>removed</b></span>
                        </div>                          
                    </div>                                                            
                    
                </div>

                <div class="span3 prospects">

                    <div class="wBlock blue clearfix">
                        <div class="dSpace">
                            <h3>Last visits</h3>
                            <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--240,234,150,290,310,240,210,400,320,198,250,222,111,240,221,340,250,190--></span>
                            <span class="number">6,302</span>
                        </div>
                        <div class="rSpace">                                                                           
                            <span>65% <b>New</b></span>
                            <span>35% <b>Returning</b></span>
                            <span>00:05:12 <b>Average time on site</b></span>                                                        
                        </div>
                    </div>                      
                </div>                
                <div class="span3 surveys">

                    <div class="wBlock blue clearfix">
                        <div class="dSpace">
                            <h3>Last visits</h3>
                            <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--240,234,150,290,310,240,210,400,320,198,250,222,111,240,221,340,250,190--></span>
                            <span class="number">6,302</span>
                        </div>
                        <div class="rSpace">                                                                           
                            <span>65% <b>New</b></span>
                            <span>35% <b>Returning</b></span>
                            <span>00:05:12 <b>Average time on site</b></span>                                                        
                        </div>
                    </div>                      
                    
                </div>                
            </div>            
        



            <div class="row-fluid">
                <div class="span3 leads">                    
                    <div class="wBlock red clearfix">                        
                        <div class="dSpace">
                            <h3>Invoices statistics</h3>
                            <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--130,190,260,230,290,400,340,360,390--></span>
                            <span class="number">60%</span>                    
                        </div>
                        <div class="rSpace">
                            <span>$1,530 <b>amount paid</b></span>
                            <span>$2,102 <b>in queue</b></span>
                            <span>$11,100 <b>total taxes</b></span>
                        </div>                          
                    </div>                     
                    
                </div>                
                
                <div class="span3 offers">                    

                    <div class="wBlock green clearfix">                        
                        <div class="dSpace">
                            <h3>Users</h3>
                            <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--5,10,15,20,23,21,25,20,15,10,25,20,10--></span>
                            <span class="number">2,513</span>                    
                        </div>
                        <div class="rSpace">
                            <span>351 <b>active</b></span>
                            <span>2102 <b>passive</b></span>
                            <span>100 <b>removed</b></span>
                        </div>                          
                    </div>                                                            
                    
                </div>

                <div class="span3 prospects">                    

                </div>                
                <div class="span3 surveys">                    

                    <div class="wBlock blue clearfix">
                        <div class="dSpace">
                            <h3>Last visits</h3>
                            <span class="mChartBar" sparkType="bar" sparkBarColor="white"><!--240,234,150,290,310,240,210,400,320,198,250,222,111,240,221,340,250,190--></span>
                            <span class="number">6,302</span>
                        </div>
                        <div class="rSpace">                                                                           
                            <span>65% <b>New</b></span>
                            <span>35% <b>Returning</b></span>
                            <span>00:05:12 <b>Average time on site</b></span>                                                        
                        </div>
                    </div>                      
                    
                </div>                
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="row-form clearfix">
                        <div class="span3">Default:</div>
                        <div class="span9">
                            <div class="amount" id="slider_1_amount">$60</div>
                            <div id="slider_1"></div>                                
                        </div>
                    </div>
                    
                </div>
        </div>
        
    </div>   
    <script>
    console.log('Slider_1',$('#slider_1').val());
    </script>
</body>
</html>
