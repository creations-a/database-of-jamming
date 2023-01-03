<?php 
    require_once('database.php');
?>
<html>
	<?php include('head.php'); ?>
	
	<body>
		<?php include('header.php'); ?>
<!-- 		--------------------------------------------------------------------- -->
	<div class="top-wrapper">
		 <div class="container">
		 	<img class="logo" src="images/index.png">
		 
			<div class="form">
        	<form method="post">
        		<select name="sort">
        		 <option value="">並べ替え</option>
        		 <option value="asc">配信日が古い順</option>
        		 <option value="desc">配信日が新しい順</option>
        		</select>
        		<br>
        		<input type="submit" value="決定" class="btn">
        	</form>
			</div>
		 </div>
	</div>
<!-- 		--------------------------------------------------------------------- -->		
		<?php if($_POST["sort"]=="desc"){?>
		<div class="episodes">
		<?php for($i=count($arr)-1; $i>=0; $i--):?>
    		<a class="episode" href="<?php echo $arr[$i]['link'];?>" target="_blank" rel="noopener noreferrer">
    		
    		 <div class="vol">
    		  <h2>vol.</h2>
    		  <h2 class="num"><?php echo $arr[$i]['vol']; ?></h2>
    		 </div>
    		 
    		 <div class="member">
    		   <div class="cast-member">
    		   <h4>出演メンバー</h4>
    		   
    		   <div class="member-list">
    		   <?php 
    		    $members = array_slice($arr[$i],3,12);
    		    $casts = array_keys($members,true);
    		    foreach($casts as $cast){
    		        $cast = str_replace('c','',$cast);
    		        echo '<p>';
    		        echo $cast;
    		        echo '</p>';}
    		   ?>
    		   </div>
    		  </div>
    		  
    		   <div class="subject-member">
    		   <h4>話題メンバー</h4>
    		   <div class="member-list">
    		   <?php 
    		   $subject_members = array_slice($arr[$i],15,13);
    		   $subjects = array_keys($subject_members,true);
    		   foreach($subjects as $subject){
    		       echo '<p>';
    		       echo $subject;
    		       echo '</p>';
    		   }
    		   ?>
    		   </div>
    		  </div>
    		 </div>
    		 
    		 <div class="keywords">
    		 <h4>キーワード</h4>
    		 	<div class="keyword-list">
    		  	<?php 
    		      echo '<p>'.$arr[$i]['keyword1'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword2'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword3'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword4'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword5'].'</p>';
    		     ?>
    		  	</div>
    		 </div>
    		 
    		</a>
    	<?php endfor ?>	
		</div>
		<?php }else{ ?>
		    <div class="episodes">
		    <?php for($i=0; $i<count($arr); $i++):?>
    		<a class="episode" href="<?php echo $arr[$i]['link'];?>" target="_blank" rel="noopener noreferrer">
    		
    		 <div class="vol">
    		  <h2>vol.</h2>
    		  <h2 class="num"><?php echo $arr[$i]['vol']; ?></h2>
    		 </div>
    		 
    		 <div class="member">
    		   <div class="cast-member">
    		   <h4>出演メンバー</h4>
    		   
    		   <div class="member-list">
    		   <?php 
    		    $members = array_slice($arr[$i],3,12);
    		    $casts = array_keys($members,true);
    		    foreach($casts as $cast){
    		        $cast = str_replace('c','',$cast);
    		        echo '<p>';
    		        echo $cast;
    		        echo '</p>';}
    		   ?>
    		   </div>
    		  </div>
    		  
    		   <div class="subject-member">
    		   <h4>話題メンバー</h4>
    		   <div class="member-list">
    		   <?php 
    		   $subject_members = array_slice($arr[$i],15,13);
    		   $subjects = array_keys($subject_members,true);
    		   foreach($subjects as $subject){
    		       echo '<p>';
    		       echo $subject;
    		       echo '</p>';
    		   }
    		   ?>
    		   </div>
    		  </div>
    		 </div>
    		 
    		 <div class="keywords">
    		 <h4>キーワード</h4>
    		 	<div class="keyword-list">
    		  	<?php 
    		      echo '<p>'.$arr[$i]['keyword1'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword2'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword3'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword4'].'</p>';
    		      echo '<p>'.$arr[$i]['keyword5'].'</p>';
    		     ?>
    		  	</div>
    		 </div>
    		 
    		</a>
    	<?php endfor ?>	
		</div>
		
		<?php }?>
		
		
	</body>
	
</html>
