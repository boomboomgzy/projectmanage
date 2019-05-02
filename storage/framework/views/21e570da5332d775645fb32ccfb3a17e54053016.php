<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>课程选择</title>

    <!--bootstrap-css-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #DEDEDE;
        }
        
        a {
            text-decoration: none;
        }
        
        .content {}
        
        .left {
            background-color: white;
            margin: 25px 300px 25px 25px;
            padding: 25px;
            box-shadow: 1px 1px 2px 1px #848484;
        }
        
        .right {
            background-color: white;
            height: 290px;
            width: 200px;
            margin: 25px;
            padding: 25px;
            box-shadow: 1px 1px 2px 1px #848484;
            position:fixed;
            top:68px;
            right: 0;
        }
        
        .footer {
            padding: 10px 50px 10px 50px;
            background-color: gray;
        }
    </style>
</head>

<body>
    <div class="header" style="padding: 10px 50px 10px 50px;
            border-bottom: 1px solid #eeeeee;">
        <div class="logo" style="display: inline-block;">

            <a href="<?php echo e(route('projects.index')); ?>"><h2>主页</h2></a>

        </div>

        <div class="menu" style="display: inline-block;
                margin-left: 20px;">
                menu
        </div>
    </div>

    <div class="content">
       
        <div class="left">
        <?php echo $__env->yieldContent('content-left'); ?>
        </div>

        <div class="right">
        <?php echo $__env->yieldContent('content-right'); ?>
        </div>
    </div>


    <!-- footer -->
    <div class="footer">
        <div class="container-fluid" style="align-content: center;">
            this is prepare for the information!
        </div>
    </div>

    <!--jQuery,jS-->
    <!--
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->

</body>


</html>