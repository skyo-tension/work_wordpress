<?php

/* ※ 子テーマのfunctions.phpは、親テーマのfunctions.phpより先に読み込まれることに注意してください。 */

/**************************
 * レーダーチャート
 ***************************/
function radar_chart($atts)
{
    if (is_null($atts)) {
        return '';
    }

    extract(shortcode_atts([
        'title1' => '項目1',
        'score1' => 1,
        'title2' => '項目2',
        'score2' => 1,
        'title3' => '項目3',
        'score3' => 1,
        'title4' => '項目4',
        'score4' => 1,
        'title5' => '項目5',
        'score5' => 1,
        'aria_label' => 'レーダーチャート'
    ],$atts));

    $item1_array=[" L 160 128"," L 160 106"," L 160 84"," L 160 62"," L 160 40"];
    $item2_array=[" L 140 143"," L 120 136"," L 100 129"," L 80 122"," L 60 115"];
    $item3_array=[" L 147.5 167"," L 135 184"," L 122.5 201"," L 110 218"," L 97.5 235"];
    $item4_array=[" L 172.5 167"," L 185 184"," L 197.5 201"," L 210 218"," L 222.5 235"];
    $item5_array=[" L 180 143"," L 200 136"," L 220 129"," L 240 122"," L 260 115"];

    for($i = 1; $i <= 5; $i++){
        $index = ${"score{$i}"}-1;
        ${"item{$i}"} = ${"item{$i}_array"}[$index];
    }
    $item1_replaceM=str_replace(" L", "M", $item1);

    $point_regex_patern = "/L (\d+.*\d*) (\d+.*\d*)/";
    for($i = 1; $i <= 5; $i++){
        preg_match($point_regex_patern,${"item{$i}"},${"item{$i}_point"});
        ${"item{$i}_pointX"} = ${"item{$i}_point"}[1];
        ${"item{$i}_pointY"} = ${"item{$i}_point"}[2];
    }
    $line_positions = $item1_replaceM.$item5.$item4.$item3.$item2.$item1;

    $point_color = '#545454'; // 座標の色
    $aria_color = '#dcdcdc';  // 塗り潰しの色

    $output = <<<EOF
    <div style="text-align:center;">
      <div class="radar-chart">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="320" height="291"  viewbox="0 0 320 291" role="img" aria-label="{$aria_label}">
            <g class="radar-chart-grid">
                <path fill="none" d="M 160 150 L 160 40" stroke="#dce5eb" stroke-width="1" zIndex="1" opacity="1"></path>
                <path fill="none" d="M 160 150 L 260 115" stroke="#dce5eb" stroke-width="1" zIndex="1" opacity="1"></path>
                <path fill="none" d="M 160 150 L 222.5 235" stroke="#dce5eb" stroke-width="1" zIndex="1" opacity="1"></path>
                <path fill="none" d="M 160 150 L 97.5 235" stroke="#dce5eb" stroke-width="1" zIndex="1" opacity="1"></path>
                <path fill="none" d="M 160 150 L 60 115" stroke="#dce5eb" stroke-width="1" zIndex="1" opacity="1"></path>
            </g>
            <g class="radar-chart-grid">
                <path fill="none" d="M 160 150 L 160 150 L 160 150 L 160 150 L 160 150 L 160 150 L 160 150 L 160 150 L 160 150 L 160 150"
                      stroke="#dce5eb" stroke-width="1" zIndex="1" opacity="1"></path>
                <path fill="none" d="M 160 128 L 140 143 L 147.5 167  L 172.5 167 L 180 143 L 160 128" stroke="#dce5eb" stroke-width="1"
                      zIndex="1" opacity="1"></path>
                <path fill="none" d="M 160 106 L 120 136 L 135 184  L 185 184 L 200 136  L 160 106" stroke="#dce5eb" stroke-width="1" zIndex="1"
                      opacity="1"></path>
                <path fill="none" d="M 160 84  L 100 129 L 122.5 201  L 197.5 201 L 220 129  L 160 84" stroke="#dce5eb" stroke-width="1"
                      zIndex="1" opacity="1"></path>
                <path fill="none" d="M 160 62  L 80 122 L 110 218 L 210 218 L 240 122  L 160 62" stroke="#dce5eb" stroke-width="1" zIndex="1"
                      opacity="1"></path>
                <path fill="none" d="M 160 40  L 60 115 L 97.5 235  L 222.5 235 L 260 115 L 160 40" stroke="#dce5eb" stroke-width="1" zIndex="1"
                      opacity="1"></path>
            </g>
            <g class="radar-chart-aria">
                <g transform="translate(0,0) scale(1 1)">
                    <path fill="{$aria_color}" d="{$line_positions}" fill-opacity="0.3"></path>
                    <path fill="none" d="{$line_positions}" stroke="{$point_color}" stroke-width="1" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path>
                </g>
                <g class="radar-chart-point">
                    <circle cx="{$item1_pointX}" cy="{$item1_pointY}" r="3" fill="{$point_color}" />
                    <circle cx="{$item2_pointX}" cy="{$item2_pointY}" r="3" fill="{$point_color}" />
                    <circle cx="{$item3_pointX}" cy="{$item3_pointY}" r="3" fill="{$point_color}" />
                    <circle cx="{$item4_pointX}" cy="{$item4_pointY}" r="3" fill="{$point_color}" />
                    <circle cx="{$item5_pointX}" cy="{$item5_pointY}" r="3" fill="{$point_color}" />
                </g>
            </g>
        </svg>
        <ul class="radar-chart-dls">
            <li class="radar-chart-dl1">
                <dl>
                    <dt>{$title1}</dt>
                    <dd>{$score1}</dd>
                </dl>
            </li>
            <li class="radar-chart-dl2">
                <dl>
                    <dt>{$title2}</dt>
                    <dd>{$score2}</dd>
                </dl>
            </li>
            <li class="radar-chart-dl3">
                <dl>
                    <dt>{$title3}</dt>
                    <dd>{$score3}</dd>
                </dl>
            </li>
            <li class="radar-chart-dl4">
                <dl>
                    <dt>{$title4}</dt>
                    <dd>{$score4}</dd>
                </dl>
            </li>
            <li class="radar-chart-dl5">
                <dl>
                    <dt>{$title5}</dt>
                    <dd>{$score5}</dd>
                </dl>
            </li>
        </ul>
      </div>
    </div>
EOF;

    return $output;
}
add_shortcode('radar_chart', 'radar_chart');


/**
 * 親テーマのfunctions.phpのあとで読み込みたいコードはこの中に。
 */
add_filter('after_setup_theme', function(){
    
}, 11);


/**
 * 子テーマでのファイルの読み込み関数
 *   $query : 各ファイルに付与するクエリ文字列。
 */
add_action('wp_enqueue_scripts', function() {
    
    //$query = '1.0';
    $query = date('Ymdgis');  /*子テーマのstyle.cssのブラウザキャッシュを無効にする。 */

    /* 子テーマのstyle.css読み込み */
    wp_enqueue_style( 'child_style', get_stylesheet_directory_uri() .'/style.css', [], $query );

    /* その他の読み込みファイルはこの下に記述 */

}, 11);
