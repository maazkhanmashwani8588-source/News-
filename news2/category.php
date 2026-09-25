<?php include 'header.php'; ?>
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
				<?PHP
				if(isset($_GET['cid'])){
					$cat_id=$_GET['cid'];
					$sql1="select * from category where category_id={$cat_id}";
					$result1=mysqli_query($conn,$sql1)or die ("query failed");
					$row1=mysqli_fetch_assoc($result1);
				
				
				
				
				?>
                  <h2 class="page-heading"><?php echo $row1['category_name'];?></h2>
	<?PHP
				}
					include "config.php";
					if(isset($_GET['cid'])){
			        $cat_id=$_GET['cid'];

			}
			
					
					$limit=5;
					$page=$_GET["page"]??1;
					if(isset($_GET["page"])){
						$page=$_GET["page"];
					}else{
						$page=1;
					}
					$offset=($page-1)*$limit;
					$sql="select post.post_id,post.title,post.description,post.post_date,post.author,
					category.category_name,user.username,post.category,post.post_img
					from post
					left join category on post.category=category.category_id
					left join user on post.author=user.user_id
					where post.category = {$cat_id} 
					order by post.post_id DESC
					limit {$offset},{$limit}";
					$result=mysqli_query($conn,$sql)or die("query failed ".mysqli_error($conn));
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){
							
					
					?>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="post-img" href="single.php?id=<?php echo $row['post_id']?>"><img src="admin/upload/<?PHP echo $row["post_img"];?>" alt=""/></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="inner-content clearfix">
                                        <h3><a href='single.php ?id=<?php echo $row['post_id'];?>'><?PHP echo $row["title"];?></a></h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='category.php'><?PHP echo $row["category_name"];?></a>
                                            </span>
                                            <span>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href='author.php'><?PHP echo $row["username"];?></a>
                                            </span>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?PHP echo $row["post_date"];?>
                                            </span>
                                        </div>
                                        <p class="description">
                               <?PHP echo substr($row["description"],0,120);?>                                        </p>
                                        <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id'];?>'>read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?PHP
						}
						}

			 if(mysqli_num_rows($result1)>0){
				 $total_records=$row1['post'];
				 $total_page=ceil($total_records/$limit);
				 //$row=mysqli_num_rows($result1);
				 //if(mysqli_num_rows($result1)>0){
				 // $total_records=$row['post'];
				 //$total_page=ceil($total_records/$limit);
				 
				 
				 echo "<ul class='pagination admin-pagination'>";
				if($page > 1){
					
				echo '<li><a href="index.php?cid='.$cat_id.'&page='.($page-1).'">pre</a></li>';
				} 
				for($i=1; $i<=$total_page; $i++){
					if($i==$page){
						$active="active";
						
					}
					else{
						$active="";
						
					}
					echo '<li class="'.$active.'"><a href="index.php?cid='.$cat_id.'&page='.$i.'">'.$i.'</a></li>';
				}
					if($total_page > 1){
					
				echo '<li><a href="index.php?cid='.$cat_id.'&page='.($page+1).'">next</a></li>';
				} 
				echo "</ul>";
				
			 }
				?>
                </div><!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
