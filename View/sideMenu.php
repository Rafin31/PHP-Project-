<?php require_once('../Modal/userModel.php')  ?>
<div class="sidemenu">
        <div class="sidemenucontent">
                <div class="header">
                        <div class="top">
                                <img width="50%" src="../Asset/Photos/avatar.png" alt="">
                        </div>
                        <div class="bottom">
                                <h2 id="customer">Welcome <?php echo         $_SESSION['username']   ?> </h2>
                                <h5> Bio :
                                         <?php
                                          $user  = getUserByUser_name($_SESSION['username']);
                                          echo  $user['user_bio'] ;
                                          ?>


                                </h5>
                                <h5>Rating 3.4</h5>
                        </div>

                </div>


                <div class="button">
                        <a href="../View/buyerHomepage.php"><button>Home </button> </a>
                </div>
                <div class="button">
                        <a href="../View/orderNow.php"><button>Order Now </button> </a>
                </div>

                <div class="button">
                        <a href="../View/orderStatus.php"> <button>Order Status</button> </a>
                </div>

                <div class="button">
                        <a href="../View/orderHistory.php"><button>Order History</button></a>
                </div>

                <div class="button">
                        <a href="../View/profile.php"><button>Profile</button></a>
                </div>
                <div class="button">
                        <a href="../View/editprofile.php"><button>Edit Profile</button></a>
                </div>

                <div class="button">
                        <a href="../View/changePassword.php"><button>Change Password</button> </a>
                </div>
                <div class="button">
                        <a href="../Controller/logout.php"><button>Logout</button> </a>
                </div>
                <div class="footer">
                        <p>All right reserv to Cloud Kitchen @ <?php echo date("Y") ?></p>
                </div>
        </div>


</div>