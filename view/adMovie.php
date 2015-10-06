<?php require_once 'template/header.php'; ?>
<h1><?php echo $AdMovie ?></h1>
	<div id="adMovie">
		<form novalidate>
			<div class="row">
				<div class="large-4 columns">
					<div class="row collapse prefix-radius">
						<div class="large-2 columns">
				          <span class="prefix"><?php echo $Title ?></span>
				        </div>
				        <div class="large-10 columns">
				          <input type="text" placeholder="<?php echo $Title ?>" ng-model="movie.title" require />
				        </div>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="row collapse prefix-radius">
						<div class="large-3 columns">
				          <span class="prefix"><?php echo $Author ?></span>
				        </div>
				        <div class="large-9 columns">
							<select ng-model="movie.author" require >
								<option ng-repeat="author in list.author" value="{{ author.id_author }}" selected>{{ author.author }}</option>
						  	</select>
				        </div>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="row collapse prefix-radius">
						<div class="large-3 columns">
				          <span class="prefix"><?php echo $Actor ?></span>
				        </div>
				        <div class="large-9 columns">
							<select ng-model="movie.actor" require >
								<option ng-repeat="actor in list.actor" value="{{ actor.id_actor }}" selected>{{ actor.first_name }} {{ actor.last_name}}</option>
							</select>
				        </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-5 columns">
					<div class="row collapse prefix-radius">
						<div class="large-2 columns">
				          <span class="prefix"><?php echo $Gender ?></span>
				        </div>
				        <div class="large-10 columns">
							<select ng-model="movie.gender" require >
								<option ng-repeat="gender in list.gender" value="{{ gender.id_gender }}" selected>{{ gender.name_gender }}</option>
					        </select>
				        </div>
					</div>
		        </div>
				<div class="large-2 columns">
					<div class="row collapse prefix-radius">
						<div class="large-5 columns">
				          <span class="prefix"><?php echo $Year ?></span>
				        </div>
				        <div class="large-7 columns">
							<select ng-model="movie.year" require >
					          <?php for($i = 2001; $i <= 2020; $i++) {
					          		echo '<option value="'.$i.'">'.$i.'</option>';
					          }?>
					        </select>
				        </div>
					</div>
				</div>
		        <div class="large-5 columns">
			        <textarea placeholder="<?php echo $Comment ?>" ng-model="movie.comment" require ></textarea>
			    </div>
			</div>
			<div class="row">
				<div class="large-6 columns large-centered">
					<input type="submit" value="<?php echo $Ad ?>" class="button expand" ng-click="controlAddMovie(movie)">
				</div>
			</div>
		</form>
	</div>
<?php require_once 'template/footer.php';?>