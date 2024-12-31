<?php // バージョンアップ通知の非表示
function update_nag_hide() {
    remove_action( 'admin_notices', 'update_nag', 3 );
    remove_action( 'admin_notices', 'maintenance_nag', 10 );
}
add_action( 'admin_init', 'update_nag_hide' );
?>
<?php // エディターの使用でspanなどのタグが消えるのを防ぐ
function my_tiny_mce_before_init( $init_array ) {
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
 
    return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );
?>
<?php // アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
?>
<?php // 固定ページでGutenberg（ブロックエディタ）を無効化
add_filter( 'use_block_editor_for_post_type', 'hide_block_editor', 10, 10 );
function hide_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'page' ) return false;
  return $use_block_editor;
}
?>
<?php //クローラーのアクセス判別
function is_bot() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  $bot = array(
        "googlebot",
        "msnbot",
        "yahoo"
  );
  foreach( $bot as $bot ) {
    if (stripos( $ua, $bot ) !== false){
      return true;
    }
  }
  return false;
}
//アクセス数を保存
function set_post_views() {
  if(!is_user_logged_in() && !is_bot()) {
    if(is_single()) {
      $post_id = get_the_ID();
      $count_key = 'post_views_count';
      $count = get_post_meta($post_id, $count_key, true);
      if(empty($count)) {
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, 1);
      } else {
        $count = $count + 1;
        update_post_meta($post_id, $count_key, $count);
      }
    }
  }
}
add_action('wp_head', 'set_post_views');
/*管理画面のカラムを追加*/
function manage_posts_columns($columns) {
  $columns['post_views_count'] = 'view数';
  return $columns;
}
add_filter('manage_posts_columns', 'manage_posts_columns');
/*アクセス数を出力*/
function add_column($column_name, $post_id) {
  /*View数呼び出し*/
  if ($column_name === 'post_views_count') {
    $pv = get_post_meta($post_id, 'post_views_count', true);
  }
  /*ない場合は「なし」を表示する*/
  if (isset($pv) && $pv) {
    echo attribute_escape($pv);
  } elseif (isset($thumb) && $thumb) {
    echo $thumb;
  } else {
    echo __('None');
  }
}
add_action('manage_posts_custom_column', 'add_column', 10, 2);
?>
<?php // 管理画面の「投稿」を任意の名前に変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規追加';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );
?>
<?php // カスタム投稿
add_action('init', 'campaign');
function campaign(){
  $args = array(
    'label' => 'キャンペーン',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','revisions'),
    'rewrite' => array(
      'slug' => 'campaign',
      'with_front' => false
    ),
    'menu_icon' => 'dashicons-format-aside',
  );
  register_post_type('campaign',$args);
}
?>
<?php // カスタム投稿
add_action('init', 'area');
function area(){
  $args = array(
    'label' => 'サービスエリア',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => false,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','revisions'),
    'rewrite' => array(
      'slug' => 'area',
      'with_front' => false
    ),
    'menu_icon' => 'dashicons-format-aside',
  );
  register_post_type('area',$args);
}
?>
<?php // カスタム投稿
add_action('init', 'tellme');
function tellme(){
  $args = array(
    'label' => 'おしえてマグナスくん！',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
		'exclude _From_Search' => false,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','revisions'),
    'rewrite' => array(
      'slug' => 'tellme',
      'with_front' => false
    ),
    'menu_icon' => 'dashicons-format-aside',
  );
  register_post_type('tellme',$args);
	//分類を追加
  $args = array(
    'label' => 'カテゴリー',
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'query_var'=> true
  );
  register_taxonomy('tellme_cat','tellme',$args);
}
?>
<?php // カスタム投稿
add_action('init', 'smartphone');
function smartphone(){
  $args = array(
    'label' => '端末一覧',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
		'exclude _From_Search' => false,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 7,
    'supports' => array('title','editor','thumbnail','revisions'),
    'rewrite' => array(
      'slug' => 'smartphone',
      'with_front' => false
    ),
    'menu_icon' => 'dashicons-format-aside',
  );
  register_post_type('smartphone',$args);
  //分類を追加
  $args = array(
    'label' => 'カテゴリー',
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'query_var'=> true
  );
  register_taxonomy('smartphone_cat','smartphone',$args);
 }
?>
<?php // カスタム投稿タイプとカスタムタクソノミーの一覧ページの表示件数を指定
function change_posts_per_page($query) 
{
	if ( !is_admin() && $query->is_main_query()) {
	    if ( is_post_type_archive('smartphone') ) {
	        $query->set( 'posts_per_page', '99' );
	    }
	    else if ( is_tax() ) {
	        $query->set( 'posts_per_page', '99' );
	    }
	}
    return $query;
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
?>