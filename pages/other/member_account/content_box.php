<?php
if(isset($_GET["act"])){
    $act =$_GET["act"];
    if($act == "account"){
    require_once("member_account.php");
    }
    else{
        require_once("member_support.php");
    }
}
else{?>
    <div class="member-bar">
            <div class="member-info">
                <div class="welcome-title">
                <span>Xin chào bạn: <?php echo $customer;  ?></span>
                </div>
                 <div class="user-name">Name</div>
                 <div class="user-telephone">phone</div>
            </div>
             
        </div>
    </div>
<?php
}
?>