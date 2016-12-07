<form id="formEdit" action="../pages/edit_profile.php" method="post">
	<input id="btnEdit" type="submit" value="Edit" />
</form>

<section id="namesInfo">
	<h3 id="name"><?=$userProfile['name']?></h3>
	<h4 id='username'>@<?=$userProfile['username']?></h4>
	
	<?php 	if($userProfile['status'] == 'owner'){ ?>
				<p id="status">Owner</p>
	<?php	} else if($userProfile['status'] == 'reviewer'){ ?>
				<p id="status">Reviewer</p>
	<?php	} else{ ?>
				<p id="status">User</p>
	<?php	} 


			if($userImage == $username){ ?>
				<img src="../images/medium/<?=$userImage?>.jpg" id="profileImage"> 
	<?php	}
			else{ ?>
				<img src="../images/defaultPerfil.jpg" id="profileImage">
	<?php	}  ?>
</section>

<section id="personalInfo">
	<h4> Personal Information </h4>
	<p id="email">Email: <?=$userProfile['email']?></p>
	<p id="country">Country: <?=$userProfile['country']?></p>
	<p id="birthday">Birthday: <?=$userProfile['birthday']?></p>
</section>

<?php
	if($userProfile['status'] == 'owner'){
		$ownerRestaurants = getOwnerRestaurants($dbh, $userProfile['username']);
	?>
	<section class="restaurants">
		<p><?=$userProfile['name']?> restaurante:</p>
		<?php foreach($ownerRestaurants as $restaurant) { ?>
				<article class="restaurant">
					<h3>
						<?php
							$linkAddress = "../pages/restaurant.php?id=" . $restaurant['id'];
							echo "<a href=\"$linkAddress\">";
							echo $restaurant['name'];
							echo "</a>";
						?>
					</h3>
					<p><?=formatLocation($restaurant)?></p>
				</article>
			<?php } ?>
	</section>
	
<?php
	}
	else if($userProfile['status'] == 'reviewer'){
		$reviewerRestaurants = getReviewerRestaurants($dbh, $userProfile['username']);
	?>
	
	<section class="reviews">
		<h4><?=$userProfile['name']?> reviews</h4>
		<?php foreach($ownerRestaurants as $restaurant) { ?>
				<article class="reviews">
					<h3>
						<?php
							
						?>
					</h3>
					<p><?=formatLocation($restaurant)?></p>
				</article>
		<?php } ?>
	</section>

<?php	
	}
?>