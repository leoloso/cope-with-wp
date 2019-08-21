<?php
/**
 * Define REST endpoints
 */
add_action('rest_api_init', function () {
  // Endpoint: /wp-json/block-metadata/v1/metadata/{POST_ID}
  register_rest_route('block-metadata/v1', 'metadata/(?P<post_id>\d+)', [
    'methods'  => 'GET',
    'callback' => 'get_post_block_meta'
  ]);
});
function get_post_block_meta($request)
{
  $post = get_post($request['post_id']);
  if (!$post) {
    return new WP_Error('empty_post', 'There is no post with this ID', array('status' => 404));
  }

  $block_data = get_block_data($post->post_content);
  $block_metadata = get_block_metadata($block_data);
  $response = new WP_REST_Response($block_metadata);
  $response->set_status(200);
  return $response;
}

