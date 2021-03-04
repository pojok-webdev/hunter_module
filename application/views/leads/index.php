<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('commons/head');?>
<body>
    <div class="header">
        <a class="logo" href="/"><img src="/img/aquarius/logo.png" alt="" title="PadiApp-Hunter"/></a>
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
                        <div class="isw-grid"></div>
                        <h1>Leads </span></h1>
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>
                            <li><a href="#" class="isw-attachment"></a></li>
                        </ul>                        
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tLeads">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th width="25%">Name</th>
                                    <th width="35%">Address</th>
                                    <th width="35%">Hunter</th>
                                    <th width="5%">Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="dataTables_info" id="tLead_info"></div>
                        <input type="text" placeholder="Search by name" id="searchbar">
                        <button class="btn" id="searchbutton">Search</button>
                        <button class="btn" id="clearsearchbutton">Clear Search</button>
                        <div class="dataTables_paginate paging_two_button" id="tLead_paginate">
                        Row Per Page 
                            <?php echo form_dropdown('pageamount',$rowAmounts,'1','id="pageamount" class="pageoption" ');?>
                            <span style="display:none" id="pageid">1</span>
                            <button class="btn" id="btnFirst">First</button>
                            <button class="btn" id="tLead_previous">Previous</button>
                            <span id="paginationbuttons" class="btn-group"></span>
                            <button class="btn" id="tLead_next">Next</button>
                            <button class="btn" id="btnLast">Last</button>
                            <?php echo form_dropdown('pageoption',array(),'1','id="pageoption" class="pageoption" ');?>
                        </div>
                </div>
                </div>                                
            </div>            
            <div class="dr"><span></span></div>            
        </div>
    </div>
    <script src="/js/leads/index.js"></script>   
</body>
</html>
