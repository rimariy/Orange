<?php
include_once ("obj_project.php");

class Like extends obj_project{

    public static $table_name = "post_like";
    protected static $db_table_fields = array("id ", "user_id", "post_id ","like_action");
    public $id;
    public $user_id;
    public $post_id;
    public $like_action;

public static function getLikes($id)
{
  global $database;
  $sql = "SELECT COUNT() FROM post_like
            WHERE post_id = $id AND like_action    ='like'";

  $rs = $database -> query($sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}
 public static function  getRating($id)
{
  global $database;
  $rating = array();
  $likes_query = "SELECT COUNT() FROM post_like WHERE post_id = $id AND like_action='like'";
  $likes_rs = $database -> query($likes_query);
  $likes = mysqli_fetch_array($likes_rs);
  $rating = [
      'likes' => $likes[0],
  ];
  return json_encode($rating);
}
public static function userLiked($post_id)
{
  global $database;
  global $user_id;
  $sql = "SELECT * FROM post_like WHERE user_id=$user_id 
            AND post_id=$post_id AND like_action='like'";
  $result = $database -> query($sql);
  if (mysqli_num_rows($result) > 0) {
      return true;
  }else{
      return false;
  }
}

}
// $sql1 = "SELECT * FROM posts";
// $result =$database -> query($sql1);
// // fetch all posts from database
// // return them as an associative array called $posts
// $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>