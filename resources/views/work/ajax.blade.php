<?php
header("Content-Type: application/json; charset=UTF-8");
$data = array(
  'slug' => '',
  'name' => '',
  'cat' => '',
  'period' => '',
  'technique' => '',
  'description' => '',
  'url' => '',
  'link' => '',
);
if(isset($work)){
  $data['slug'] = $work->slug;
  $data['name'] = $work->name;
  $data['cat'] = $work->cat;
  $data['period'] = $work->period;
  $data['technique'] = $work->technique;
  $data['description'] = $work->description;
  $data['url'] = $work->url;
  $data['img'] = $work->img;
  $data['link'] = $work->link;
}
echo json_encode($data);