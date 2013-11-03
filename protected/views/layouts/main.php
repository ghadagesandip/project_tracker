<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	
	 <style>
        .dropdown-wrapper{
        	font-size: 15px;
        }
        .dropdown-wrapper > li{

            float: left;
            list-style: none outside none;
            padding: 5px;
        }
        
        .dropdown-wrapper li > a{
            text-decoration: none;
        }
        
        .dropdown-wrapper li > ul{
           display:none;
           margin-top: 2px;

        }
        
        .dropdown-wrapper > li > ul > li{
            background: none repeat scroll 0 0 darkorange;
		    list-style: none outside none;
		    margin-left: -46px;
		    padding: 3px 9px 1px;

        }

        .dropdown-wrapper > li > ul > li:hover{
            background: graytext;
            color: white;
        }

        .dropdown-wrapper > li >  ul > li > a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>

<div class="container" id="page">

	<div id="header">
        <div id="projects">

            <?php
                $projects = CHtml::listData(Role::model()->findAll(), 'id', 'name');
                if(!Yii::app()->user->isGuest){
                    $userData = Yii::app()->user->userData;
                  //  echo '<pre>'; print_r($userData);

                }


            ?>
            <ul class="dropdown-wrapper">
				<li class="dropdown"><a href="#">My projects</a>
					<ul>
					<?php foreach ($projects as $idx=>$project){?>
						<li>
							<?php echo CHtml::link($project,array('controller/action',$idx)); ?>
							
						</li>
					<?php }?>
						
					</ul>
				</li>
			</ul>
        </div>
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<div id="logout">
		<?
			if(!Yii::app()->user->isGuest){
				echo Yii::app()->user->name.'  '.CHtml::link('Logout',array('/site/logout'));
			}
		?>
		</div>
	</div>
    <!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Role', 'url'=>array('/role/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'User', 'url'=>array('/user/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Project', 'url'=>array('/project/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Bug Type', 'url'=>array('/bugType/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Bug Status', 'url'=>array('/bugStatus/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Bug ', 'url'=>array('/bug/index'), 'visible'=>!Yii::app()->user->isGuest),				
				array('label'=>'Comment ', 'url'=>array('/comment/index'), 'visible'=>!Yii::app()->user->isGuest),				
				
			),
		)); ?>
	</div>
    <!-- mainmenu -->


	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<!-- Start : footer -->
	<div id="footer">
		Copyright &copy; <?php  echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>
	<!-- End : footer -->
	<script>

    $(function(){

        $(".dropdown").hover(function(){
            $(this).find('ul').css({'display':'block'});
            console.log($(this).find('ul').text());
        },function(){
            $(this).find('ul').css({'display':'none'});
        });

    });

	</script>
</div><!-- page -->

</body>
</html>
